<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Users;
use Mail;
class UserAuth extends Controller
{
    public function index()
    {
        $data['page_title'] = "Login";
        return view('admin/signin', $data);
    }
    public function login(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $email = $req->input('email');
        $password = md5($req->input('password'));
        $check = DB::table('users')->where(['email'=>$email, 'password'=>$password])->first();
        if($check)
        {
        $data =  $req->input();
        $req->session()->put('email', $data['email']);
        session()->flash('message', 'Success');
        session()->flash('class', 'success');
        return redirect('admin/dashboard');
        }else
        {
            session()->flash('message', 'Invalid Email / Password');
            session()->flash('class', 'danger');

            return redirect('admin');
        }
    }
    public function dashboard()
    {
        if(session()->has('email'))
        {
            $data['page_title'] = "Dashboard";
            return view('admin/index', $data);   
        }else
        {
            return redirect('admin');
        }
    }
    public function signup_front(Request $req)
    {
        $validatedData = $req->validate([
            'business_name' => 'required|string|max:255|regex:/^[a-zA-Z ]+$/', // Validation rules for the 'name' field
            'owner_name' => 'required|string|max:255|regex:/^[a-zA-Z ]+$/',
            'mobile' => 'required|max:10',
            'email' => 'required|email|max:255|unique:enquiry' // Validation rules for the 'email' field
        ]);
        if($validatedData){
        $params = array(
            'business_name' => $req->input('business_name'),
            'owner_name' => $req->input('owner_name'),
            'email' => $req->input('email'),
            'mobile' => $req->input('mobile'),
            'state' => $req->input('state'),
            'district'=>$req->input('district'),
            'city' => $req->input('city'),
            'otp' => rand(000000, 999999),
        );
        // dd($params);
        $email = $params['email'];
        $check = Users::where('email', '=', $params['email'])->count();
        if($check)
        {
            session()->flash('message', 'Already Register');
            session()->flash('class', 'danger');
            return redirect('signup');
        }else
        {
            
            $insert =  DB::table('user')->insert($params);
            $last_insert_id = DB::getPdo()->lastInsertId();
            // Send Email to User
            Mail::send('frontend.mail', $params, function($message) use ($email){
                 $message->to($email)->subject('OTP Verification');
                 $message->from('info@shiftingmozo.com', config('app.name'));
            });
            if($insert)
            {
                $req->session()->put('id', $last_insert_id);
                return redirect('verify');
            }else
            {
                session()->flash('message', 'Something Went Wrong!! Please Try Again.');
                session()->flash('class', 'danger');
                return redirect('signup');
            }
        }
    }
    }
    public function verification(Request $req)
    {
        $otp = $req->input('otp1').''.$req->input('otp2').''.$req->input('otp3').''.$req->input('otp4').''.$req->input('otp5').''.$req->input('otp6') ;
        $check = DB::table('user')->where(['otp' => $otp, 'id' => $req->input('user_id')])->count();
        if($check)
        {
            $params = array(
                'verified' => '1',
            );
            $update = DB::table('user')->where('id', $req->input('user_id'))->update($params);
            if($update)
            {
                session()->flash('message', 'OTP Verified');
                session()->flash('class', 'success');
                return redirect('/welcome');
            }else
            {
                session()->flash('message', 'Something Went Wrong Please Try Again');
                session()->flash('class', 'danger');
            return redirect('/verify');
            }
            
        }else
        {
            session()->flash('message', 'Wrong OTP');
            session()->flash('class', 'danger');
            return redirect('/verify');
        }
    }
    public function mobile_verify(Request $req)
    {
        $params['mobile'] = $req->input('mobile');
        $check = Users::where('mobile', '=', $params['mobile'])->count();
        if($check)
        {
            echo '1';
        }
        else
        {
            echo '0'; 
        }
        
    }

    
}
