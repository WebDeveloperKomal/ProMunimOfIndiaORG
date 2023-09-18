<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Mail;
class Frontend extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Home';
        return view('frontend/index', $data);
    }
    public function about()
    {
        $data['page_title'] = 'About';
        return view('frontend/about', $data);
    }
    public function accountancy()
    {
        $data['page_title'] = 'Accountancy';
        return view('frontend/accountancy', $data);
    }
    public function additional_services()
    {
        $data['page_title'] = 'Additional Services';
        return view('frontend/additional-services', $data);
    }
    public function apply()
    {
        $data['page_title'] = 'Apply';
        return view('frontend/apply', $data);
    }
    
        public function candidate_list()
    {
        $data['page_title'] = 'candidate-list';
        return view('frontend/candidate_list', $data);
    }
        
        public function candidate_form()
    {
        $data['page_title'] = 'candidate-form';
        return view('frontend/candidate_form', $data);
    }
    
    
    public function business_financial_planning()
    {
        $data['page_title'] = 'Business Financial Planning';
        return view('frontend/business-financial-planning', $data);
    }
     public function capital_management()
    {
        $data['page_title'] = 'Capital Management';
        return view('frontend/capital-management', $data);
    }
    public function career()
    {
        $data['page_title'] = 'Career';
        return view('frontend/career', $data);
    }
    public function contact()
    {
        $data['page_title'] = 'Contact';
        return view('frontend/contact', $data);
    }
    public function discount()
    {
        $data['page_title'] = 'Discount';
        return view('frontend/discount', $data);
    }
    public function membership_plan()
    {
        $data['page_title'] = 'Membership Plan';
        return view('frontend/membership-plan', $data);
    }
     public function nach()
    {
        $data['page_title'] = 'NACH';
        return view('frontend/nach', $data);
    }
    public function payment()
    {
        $data['page_title'] = 'Payment';
        return view('frontend/payment', $data);
    }
    public function price()
    {
        $data['page_title'] = 'Price';
        return view('frontend/price', $data);
    }
    
      public function login()
    {
        $data['page_title'] = 'Login';
        return view('frontend/login', $data);
    }
    
          public function otp()
    {
        $data['page_title'] = 'otp';
        return view('frontend/otp', $data);
    }
    
    
    public function referring_dentist()
    {
        $data['page_title'] = 'Referring Dentist';
        return view('frontend/referring-dentist', $data);
    }
    public function service_details()
    {
        $data['page_title'] = 'Service Details';
        return view('frontend/service-details', $data);
    }
    public function services()
    {
        $data['page_title'] = 'Services';
        return view('frontend/services', $data);
    }
     public function team()
    {
        $data['page_title'] = 'Our Team';
        return view('frontend/our-team', $data);
    }
    public function patient_portal()
    {
        $data['page_title'] = 'Patient Portal';
        return view('frontend/patient-portal', $data);
    }
     public function office()
    {
        $data['page_title'] = 'Our Office';
        return view('frontend/our-office', $data);
    }
    public function vikram()
    {
        $data['page_title'] = 'Mr. Vikramraj Acharya';
        return view('frontend/mr-vikramraj-acharya', $data);
    }
    public function testimonials()
    {
        $data['page_title'] = 'Testimonials';
        return view('frontend/testimonials', $data);
    }
    public function tax_compliance()
    {
        $data['page_title'] = 'Tax Complaince';
        return view('frontend/tax-compliance', $data);
    }
    public function videos()
    {
        $data['page_title'] = 'Videos';
        return view('frontend/videos', $data);
    }
    public function your_first_visit()
    {
        $data['page_title'] = 'Your First Visit';
        return view('frontend/your-first-visit', $data);
    }
    public function web_portal()
    {
        $data['page_title'] = 'Client Web Portal';
        return view('frontend/register', $data);
    } 
    // public function interview()
    // {
    //     return view('frontend/interview');
    // } 

    public function signup()
    {
        $data['page_title'] = 'Signup';
        return view('frontend/signup', $data);
    } 
    public function verify()
    {
        $data['page_title'] = 'Verify';
        return view('frontend/verify', $data);
    } 
    public function resume_application()
    {
        $data['page_title'] = 'Resume Application';
        return view('frontend/resume_application', $data);
    } 
    public function welcome()
    {
        $data['business_name'] = DB::table('user')->select('business_name')->where('id', session('id'))->get()->first();
        $data['page_title'] = 'Welcome To Promunim';
        return view('frontend/welcome', $data);
    }
    public function business_setup()
    {
        $data['business'] = DB::table('user')->where('id', session('id'))->get()->first();
        $data['page_title'] = 'Business Setup';
        return view('frontend/business_setup', $data);
    }
    public function update_business(Request $req)
    {
        $data['page_title'] = 'Business Setup';
        $params = array(
            'business_name' => $req->input('business_name'),
            'owner_name' => $req->input('owner_name'),
            'mobile' => $req->input('mobile'),
            'state' => $req->input('state'),
            'city' => $req->input('city'),
            'business_setup' => '1',
        );
        $update = DB::table('user')->where('id', session('id'))->update($params);
        $data['business'] = DB::table('user')->where('id', session('id'))->get()->first();
        return view('frontend/business_details', $data);
    }
    public function update(Request $req)
    {
        $data['page_title'] = 'Update';

        $params = array(
            'constitution' => $req->input('constitution'),
            'industry' => $req->input('industry'),
        );
        $id = $req->input('id');
        $update = DB::table('user')->where('id', session('id'))->update($params);
        if($update)
        {
            echo '1';
        }else
        {
            echo '0';
        }
    }
    public function accept_disclaimer(Request $req)
    {
        $data['page_title'] = 'Accept Disclaimer';

        $params = array(
            'duration' => $req->input('duration'),
        );
        $id = $req->input('id');
        $update = DB::table('user')->where('id', session('id'))->update($params);
        if($update)
        {
            echo '1';
        }else
        {
            echo '0';
        }
    }
    public function update_pan(Request $req)
    {
        $data['page_title'] = 'Update PAN Details';

        $params = array(
            'pan' => $req->input('pan'),
            'date_of_birth' => $req->input('date_of_birth'),
        );
        $id = $req->input('id');
        $update = DB::table('user')->where('id', session('id'))->update($params);
        if($update)
        {
            echo '1';
        }else
        {
            echo '0';
        }
    }
    public function update_pan_card_details(Request $req)
    {
        $data['page_title'] = 'Update PAN Card Details';

        $params = array(
            'number_belongs' => $req->input('number_belongs'),
            'mobile_holder_name' => $req->input('mobile_holder_name'),
            'pan_mobile_holder' => $req->input('pan_mobile_holder'),
            'email_belongs' => $req->input('email_belongs'),
            'email_holder_name' => $req->input('email_holder_name'),
            'pan_email_holder' => $req->input('pan_email_holder'),
        );
        $id = $req->input('id');
        $update = DB::table('user')->where('id', session('id'))->update($params);
        if($update)
        {
            echo '1';
        }else
        {
            echo '0';
        }
    }
    public function upload_pan_image(Request $req)
    {
        $data['page_title'] = 'Upload PAN Card Image';
        $business = DB::table('user')->select('pan_image')->where('id', session('id'))->get()->first();
        if($req->file('image') != '')
        {
        $imageName = time().'.'.$req->image->extension();  
        $req->image->move(public_path('uploads'), $imageName);
        $params['pan_image'] = $imageName;
        }else
        {
            $params['pan_image'] = $business->pan_image;
        }
        
        $id = $req->input('id');
        $update = DB::table('user')->where('id', session('id'))->update($params);
        if($update)
        {
            echo '1';
        }else
        {
            echo '0';
        }
    }
    public function update_personal_info(Request $req)
    {
        $data['page_title'] = 'Update Personal Info';
        // echo $req->file('image');
        $imageName = '';
        if($req->file('image') != '')
        {
        $imageName = time().'.'.$req->image->extension();  
        $req->image->move(public_path('uploads'), $imageName);
        }
        $params = array(
            'user_image' => $imageName,
            'father_name' => $req->input('father_name'),
            'marital' => $req->input('marital'),
            'experience' => $req->input('experience'),
            'occupation' => $req->input('occupation'),
            'annual_income' => $req->input('annual_income'),
            );
        $params['user_image'] = $imageName;
        $id = $req->input('id');
        // print_r($params);
        $update = DB::table('user')->where('id', session('id'))->update($params);
        if($update)
        {
            echo '1';
        }else
        {
            echo '0';
        }
    }
     public function update_account_info(Request $req)
    {
        $data['page_title'] = 'Update Account Info';
        // echo $req->file('image');
        $params = array(
            'acc_no' => $req->input('acc_num'),
            'ifsc' => $req->input('ifsc'),
            'micr' => $req->input('micr'),
            'bank' => $req->input('bank'),
            'branch' => $req->input('branch'),
            'branch_address' => $req->input('branch_address'),
            'bank_city' => $req->input('city'),
            );
        $id = $req->input('id');
        $update = DB::table('user')->where('id', session('id'))->update($params);
        if($update)
        {
            echo '1';
        }else
        {
            echo '0';
        }
    }
     public function update_signature(Request $req)
    {
        $data['page_title'] = 'Update Signature';
        // echo $req->file('image');
        $params = array(
            'sign' => $req->input('sign'),
            );
        $id = $req->input('id');
        $update = DB::table('user')->where('id', session('id'))->update($params);
        if($update)
        {
            echo '1';
        }else
        {
            echo '0';
        }
    }
     public function products($slug)
    {
        $data['products'] = DB::table('services')->where('slug', $slug)->first();
        $data['service'] = DB::table('services')->get();
        $data['page_title'] = $data['products']->title;
        $data['contact'] = DB::table('contact')->where('id', '1')->first();
        return view('frontend/product-details', $data);
    }
    public function blogs($slug)
    {
        $data['blogs'] = DB::table('blogs')->where(['slug'=> $slug, 'category' => 'blogs'])->first();
        $data['blog'] = DB::table('blogs')->where(['category' => 'blogs'])->get();
        $data['page_title'] = $data['blogs']->title;
        $data['contact'] = DB::table('contact')->where('id', '1')->first();
        return view('frontend/blog-details', $data);
    }
    public function press_release($slug)
    {
        $data['blogs'] = DB::table('blogs')->where(['slug'=> $slug, 'category' => 'Press Release'])->first();
        $data['blog'] = DB::table('blogs')->where(['category' => 'Press Release'])->get();
        $data['page_title'] = $data['blogs']->title;
        $data['contact'] = DB::table('contact')->where('id', '1')->first();
        return view('frontend/blog-details', $data);
    }
     public function enquiry(Request $req)
    {
        // echo 'hy';
        // exit;
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $data =  array(
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'subject' => $req->input('subject'),
            'phone' => $req->input('phone'),
            'message' => $req->input('message'),
        );
       
        $insert = DB::table('enquiry')->insert($data);
               if($insert)
        {
            session()->flash('message', 'Thank You For Contacting Us, We will Contact You Shortly');
            session()->flash('class', 'success');
            return redirect('contact');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('contact');
        }
    }
    public function careers(Request $req)
    {
        // echo 'hy';
        // exit;
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required',
            'resume.*' => 'mimes:txt,pdf|max:10048'
        ]);
        $data =  array(
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'experience' => $req->input('experience'),
            'phone' => $req->input('phone'),
            'qualification' => $req->input('qualification'),
        );
        if($req->file('image') != '')
        {
            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);
            $data['resume'] = $imageName;
        }
        // print_r($data);
        // exit;
        $insert = DB::table('careers')->insert($data);
        if($insert)
        {
            session()->flash('message', 'Thank You For Contacting Us, We will Contact You Shortly');
            session()->flash('class', 'success');
            return redirect('careers');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('careers');
        }
    }
}