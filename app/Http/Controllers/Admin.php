<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class Admin extends Controller
{
    public function add_slider()
    {
        if(session()->has('email'))
        {
            $data['page_title'] = "Add Slider";
            return view('add_slider', $data);
        }else
        {
            return view('admin');
        }
        
    }
    public function save_slider(Request $req)
    {
        // echo 'hy';
        // exit;
        if(session()->has('email'))
        {
        $validated = $req->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);
        $data =  array(
            'title' => $req->input('title'),
            'desc' => $req->input('desc'),
        );
        
        $id = $req->input('id');
        if($id == '')
        {
            if($req->file('image') != '')
            {
            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);
            }
            $data['image'] = $imageName;
            $insert = DB::table('slider')->insert($data);
        }else
        {
            $image = '';
            if($req->file('image') != '')
            {
            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
            }
            $insert = DB::table('slider')->where('id', $id)->update($data);  // update the record in the DB. 
        }
        if($insert)
        {
            session()->flash('message', 'Success');
            session()->flash('class', 'success');
            return redirect('admin/slider');
        }else
        {
            session()->flash('message', 'Failed');
            session()->flash('class', 'dasnger');

            return redirect('admin/slider');
        }
        }else{
            return redirect('admin');
        }
    }
    public function slider()
    {
        $data['page_title'] = "Add Slider";
        $data['slider'] = DB::table('slider')->get();
        return view('admin/sliders', $data);
    }
    public function delete($id)
    {
        $table = base64_decode(request()->segment('4'));
        // echo $table; exit;
        $delete = DB::table($table)->where('id', base64_decode($id))->delete();  // delete the record in the DB.
        if($delete)
        {
            session()->flash('message', 'Success');
            session()->flash('class', 'success');
            return redirect()->back();
        }else
        {
            session()->flash('message', 'Failed');
            session()->flash('class', 'danger');

            return redirect()->back();
        } 
    }
    
      public function blogs()
    {
        $data['page_title'] = "Blogs";
        $data['blogs'] = DB::table('blogs')->get();
        
        return view('admin/blogs', $data);
    }
    public function add_blogs($id = null)
    {
        $data['page_title'] = "Add Blogs";
        $id = request()->segment('3');
        if($id != '')
        {
        $data['blog'] = DB::table('blogs')->where('id', $id)->first();
        }
        return view('admin/add_blogs', $data);
    }
    public function save_blogs(Request $req)
    {
        if(session()->has('email'))
        {
           
        $validated = $req->validate([
            'title' => 'required',
            'desc' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-',  strtolower($req->input('title')));
        $data =  array(
            'title' => $req->input('title'),
            'desc' => $req->input('desc'),
            'meta_title' => $req->input('meta_title'),
            'meta_desc' => $req->input('meta_desc'),
            'meta_keyword' => $req->input('meta_keyword'),
            'slug' => $slug
        );
        $id = $req->input('id');
        
        if($id == '')
        {
            if($req->file('image') != '')
            {
                $imageName = time().'.'.$req->image->extension();  
                $req->image->move(public_path('uploads'), $imageName);
            }
            $data['image'] = $imageName;
            $insert = DB::table('blogs')->insert($data);
        }else
        {
            $image = '';
            if($req->file('image') != '')
            {
            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
            }
            $insert = DB::table('blogs')->where('id', $id)->update($data);  // update the record in the DB. 
        }
        if($insert)
        {
            session()->flash('message', 'Data has been Updated Successfully');
            session()->flash('class', 'success');
            return redirect('admin/blogs');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/blogs');
        }
        }else{
            return redirect('admin');
        }
    }
    public function pages()
    {
        $data['page_title'] = "Add Pages";
        $data['pages'] = DB::table('pages')->get();
        return view('admin/pages', $data);
    }
    public function add_pages($id = null)
    {
        $data['page_title'] = "Add Pages";
        $id = request()->segment('3');
        if($id != '')
        {
        $data['pages'] = DB::table('pages')->where('id', $id)->first();
        }
        return view('admin/add_pages', $data);
    }
    public function save_pages(Request $req)
    {
        if(session()->has('email'))
        {
           
        $validated = $req->validate([
            'title' => 'required',
            'desc' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-',  strtolower($req->input('title')));
        
        $data =  array(
            'title' => $req->input('title'),
            'desc' => $req->input('desc'),
            'meta_title' => $req->input('meta_title'),
            'meta_desc' => $req->input('meta_desc'),
            'meta_keyword' => $req->input('meta_keyword'),
            'slug' => $slug
            
        );
        // print_r($data);
        // exit;
        $id = $req->input('id');
        
        if($id == '')
        {
            $insert = DB::table('pages')->insert($data);
            // if($req->file('image') != '')
            // {
            //     $imageName = time().'.'.$req->image->extension();  
            //     $req->image->move(public_path('uploads'), $imageName);
            // }
            // $data['image'] = $imageName;
            
        }else
        {
            // $image = '';
            // if($req->file('image') != '')
            // {
            // $imageName = time().'.'.$req->image->extension();  
            // $req->image->move(public_path('uploads'), $imageName);
            // $data['image'] = $imageName;
            // }
            $insert = DB::table('pages')->where('id', $id)->update($data);  // update the record in the DB. 
        }
        if($insert)
        {
            session()->flash('message', 'Data has been Updated Successfully');
            session()->flash('class', 'success');
            return redirect('admin/pages');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/pages');
        }
        }else{
            return redirect('admin');
        }
    }
    public function services()
    {
        $data['page_title'] = "Add Services";
        $data['services'] = DB::table('services')->get();
        $data['category'] = DB::table('category')->get();
        return view('admin/services', $data);
    }
    public function save_services(Request $req)
    {
        if(session()->has('email'))
        {
        $validated = $req->validate([
            'title' => 'required',
            'desc' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-',  strtolower($req->input('title')));
        $data =  array(
            'title' => $req->input('title'),
            'desc' => $req->input('desc'),
            'category' => $req->input('category'),
            'features' => $req->input('features'),
            'technical' => $req->input('technical'),
            'tools' => $req->input('tools'),
            'certifications' => $req->input('certifications'),
            'downloads' => $req->input('downloads'),
            'meta_title' => $req->input('meta_title'),
            'meta_desc' => $req->input('meta_desc'),
            'meta_keyword' => $req->input('meta_keyword'),
            'slug' => $slug
            
        );
      
        $id = $req->input('id');
        
        if($id == '')
        {
            if($req->file('image') != '')
            {
                $imageName = time().'.'.$req->image->extension();  
                $req->image->move(public_path('uploads'), $imageName);
            }
            $data['image'] = $imageName;
            $insert = DB::table('services')->insert($data);
        }else
        {
            $image = '';
            if($req->file('image') != '')
            {
            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
            }
            $insert = DB::table('services')->where('id', $id)->update($data);  // update the record in the DB. 
        }
        if($insert)
        {
            session()->flash('message', 'Data has been Updated Successfully');
            session()->flash('class', 'success');
            return redirect('admin/services');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/services');
        }
        }else{
            return redirect('admin');
        }
    }
    public function category()
    {
        $data['page_title'] = "Add Category";
        $data['category'] = DB::table('category')->get();
        return view('admin/category', $data);
    }
    public function save_category(Request $req)
    {
        if(session()->has('email'))
        {
        $validated = $req->validate([
            'title' => 'required',
        ]);
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-',  strtolower($req->input('title')));
        $data =  array(
            'title' => $req->input('title'),
            'slug' => $slug
        );
      
        $id = $req->input('id');
        
        if($id == '')
        {
            // if($req->file('image') != '')
            // {
            //     $imageName = time().'.'.$req->image->extension();  
            //     $req->image->move(public_path('uploads'), $imageName);
            // }
            // $data['image'] = $imageName;
            $insert = DB::table('category')->insert($data);
        }else
        {
            // $image = '';
            // if($req->file('image') != '')
            // {
            // $imageName = time().'.'.$req->image->extension();  
            // $req->image->move(public_path('uploads'), $imageName);
            // $data['image'] = $imageName;
            // }
            $insert = DB::table('category')->where('id', $id)->update($data);  // update the record in the DB. 
        }
        if($insert)
        {
            session()->flash('message', 'Data has been Updated Successfully');
            session()->flash('class', 'success');
            return redirect('admin/category');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/category');
        }
        }else{
            return redirect('admin');
        }
    }
    public function gallery()
    {
        $data['page_title'] = "Add Gallery";
        $data['gallery'] = DB::table('gallery')->get();
        return view('admin/gallery', $data);
    }
    public function upload_gallery(Request $req){
        $req->validate([
          'image_name' => 'required',
          'image_name.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
        ]);
        if($req->hasfile('image_name')) {
            foreach($req->file('image_name') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $imgData[] = $name;  
                $data = array(
                    
                    'imgdata' => $name,
                );
                // print_r($data);
                // exit;
                $insert = DB::table('gallery')->insert($data);
            }
           return back()->with('success', 'File has successfully uploaded!');
        }
      }
      public function clients()
    {
        $data['page_title'] = "Add Site Plan";
        $data['clients'] = DB::table('clients')->get();
        return view('admin/clients', $data);
    }
    public function upload_clients(Request $req){
        $req->validate([
          'image_name' => 'required',
          'image_name.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        if($req->hasfile('image_name')) {
            foreach($req->file('image_name') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $imgData[] = $name;  
                $data = array(
                
                    'imgdata' => $name,
                );
                $insert = DB::table('clients')->insert($data);
            }
           
           return back()->with('success', 'File has successfully uploaded!');
        }
      }
    public function testimonials()
    {
        $data['page_title'] = "Add Testimonials";
        $data['testimonials'] = DB::table('testimonials')->get();
        return view('admin/testimonials', $data);
    }
    public function save_testimonials(Request $req)
    {
        if(session()->has('email'))
        {
        $validated = $req->validate([
            'name' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        $data =  array(
            'name' => $req->input('name'),
            'designation' => $req->input('designation'),
            'comment' => $req->input('comment'),

        );
        $id = $req->input('id');
        if($id == '')
        {
            if($req->file('image') != '')
            {
                $imageName = time().'.'.$req->image->extension();  
                $req->image->move(public_path('uploads'), $imageName);
            }
            $data['image'] = $imageName;
            $insert = DB::table('testimonials')->insert($data);
        }else
        {
            $image = '';
            if($req->file('image') != '')
            {
            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
            }
            $insert = DB::table('testimonials')->where('id', $id)->update($data);  // update the record in the DB. 
        }
        if($insert)
        {
            session()->flash('message', 'Data has been Updated Successfully');
            session()->flash('class', 'success');
            return redirect('admin/testimonials');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/testimonials');
        }
        }else{
            return redirect('admin');
        }
    }
    public function portfolio()
    {
        $data['page_title'] = "Add Portfolio";
        $data['portfolio'] = DB::table('portfolio')->get();
        return view('admin/portfolio', $data);
    }
    public function save_portfolio(Request $req)
    {
        if(session()->has('email'))
        {
        $validated = $req->validate([
            'title' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        $data =  array(
            'title' => $req->input('title'),
            'category' => $req->input('category'),
            'url' => $req->input('url'),
            'technology' => $req->input('technology'),
        );
        $id = $req->input('id');
        if($id == '')
        {
            if($req->file('image') != '')
            {
                $imageName = time().'.'.$req->image->extension();  
                $req->image->move(public_path('uploads'), $imageName);
            }
            $data['image'] = $imageName;
            $insert = DB::table('portfolio')->insert($data);
        }else
        {
            $image = '';
            if($req->file('image') != '')
            {
            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
            }
            $insert = DB::table('portfolio')->where('id', $id)->update($data);  // update the record in the DB. 
        }
        if($insert)
        {
            session()->flash('message', 'Data has been Updated Successfully');
            session()->flash('class', 'success');
            return redirect('admin/portfolio');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/portfolio');
        }
        }else{
            return redirect('admin');
        }
    }
    public function team()
    {
        $data['page_title'] = "Add Team";
        $data['team'] = DB::table('team')->get();
        return view('admin/team', $data);
    }
    public function save_team(Request $req)
    {
        if(session()->has('email'))
        {
        $validated = $req->validate([
            'name' => 'required',
            'designation' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        $data =  array(
            'name' => $req->input('name'),
            'designation' => $req->input('designation'),
        );
      
        $id = $req->input('id');
        
        if($id == '')
        {
            if($req->file('image') != '')
            {
                $imageName = time().'.'.$req->image->extension();  
                $req->image->move(public_path('uploads'), $imageName);
            }
            $data['image'] = $imageName;
            $insert = DB::table('team')->insert($data);
        }else
        {
            $image = '';
            if($req->file('image') != '')
            {
            $imageName = time().'.'.$req->image->extension();  
            $req->image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
            }
            $insert = DB::table('team')->where('id', $id)->update($data);  // update the record in the DB. 
        }
        if($insert)
        {
            session()->flash('message', 'Data has been Updated Successfully');
            session()->flash('class', 'success');
            return redirect('admin/team');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/team');
        }
        }else{
            return redirect('admin');
        }
    }
    public function contact_settings()
    {
        $data['page_title'] = "Add Contact Settings";
        $data['contact'] = DB::table('contact')->where('id', '1')->first();
        return view('admin/contact_settings', $data);
    }
    public function save_contact(Request $req)
    {
        if(session()->has('email'))
        {
        $validated = $req->validate([
            'phone' => 'required',
            'email' => 'required',
            'admin' => 'required',
            'address' => 'required',
            'maplink' => 'required',
            'fb' => 'required',
            'insta' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'map' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        $data =  array(
            'phone' => $req->input('phone'),
            'phone1' => $req->input('phone1'),
            'email' => $req->input('email'),
            'email1' => $req->input('email1'),
            'admin' => $req->input('admin'),
            'address' => $req->input('address'),
            'maplink' => $req->input('maplink'),
            'fb' => $req->input('fb'),
            'insta' => $req->input('insta'),
            'twitter' => $req->input('twitter'),
            'linkedin' => $req->input('linkedin'),
            'map' => $req->input('map'),

        );
            if($req->file('logo') != '')
            {
            $imageName = time().'.'.$req->logo->extension();  
            $req->logo->move(public_path('uploads'), $imageName);
            $data['logo'] = $imageName;
            }
            $insert = DB::table('contact')->where('id', '1')->update($data);  // update the record in the DB. 
        if($insert)
        {
            session()->flash('message', 'Data has been Updated Successfully');
            session()->flash('class', 'success');
            return redirect('admin/contact_settings');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/contact_settings');
        }
        }else{
            return redirect('admin');
        }
    }
      public function enquiry()
    {
        $data['page_title'] = "Enquiry";
        $data['enquiry'] = DB::table('enquiry')->get();
        return view('admin/enquiry', $data);
    }
    public function careers()
    {
        $data['page_title'] = "Careers";
        $data['careers'] = DB::table('careers')->get();
        return view('admin/careers', $data);
    }
    public function change_password(Request $req)
    {
        if(session()->has('email'))
        {
        $validated = $req->validate([
            'password' => 'required',
        ]);
        $data =  array(
            'password' => md5($req->input('password')),
        );
            $insert = DB::table('users')->where('id', '1')->update($data); 
            // update the record in the DB. 
        if($insert)
        {
            session()->flash('message', 'Password has been Changed Successfully');
            session()->flash('class', 'success');
            return redirect('admin/dashboard');
        }else
        {
            session()->flash('message', 'Something Went Wrong, Please Try Again');
            session()->flash('class', 'danger');
            return redirect('admin/dashboard');
        }
        }else{
            return redirect('admin');
        }
    }
}
