<?php 
$contact = DB::table('contact')->get()->first();
?>
<aside class="app-sidebar sidebar-scroll">
   <div class="main-sidebar-header active">
      <a class="desktop-logo logo-light active" href="{{url('/admin')}}"><img src="{{url('uploads/'.$contact->logo)}}" class="main-logo" alt="logo"></a>
      <a class="desktop-logo logo-dark active" href="{{url('/admin')}}"><img src="{{url('uploads/'.$contact->logo)}}" class="main-logo dark-theme" alt="logo"></a>
      <a class="logo-icon mobile-logo icon-light active" href="{{url('/admin')}}">><img src="{{url('uploads/'.$contact->logo)}}" class="logo-icon" alt="logo"></a>
      <a class="logo-icon mobile-logo icon-dark active" href="{{url('/admin')}}">><img src="{{url('uploads/'.$contact->logo)}}" class="logo-icon dark-theme" alt="logo"></a>
   </div>
   <div class="main-sidemenu">
      <div class="app-sidebar__user clearfix">
         <div class="dropdown user-pro-body">
            <div class="">
               <img alt="user-img" class="avatar avatar-xl brround" src="https://cdn-icons-png.flaticon.com/128/847/847969.png"><span class="avatar-status profile-status bg-green"></span>
            </div>
            <div class="user-info">
               <h4 class="font-weight-semibold mt-3 mb-0">Admin</h4>
               <!-- <span class="mb-0 text-muted">Premium Member</span> -->
            </div>
         </div>
      </div>
      <ul class="side-menu">
         <li class="side-item side-item-category">Main</li>
         <li class="slide">
            <a class="side-menu__item" href="">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Dashboard</span>
            </a>
         </li>
         <li class="slide">
            <a class="side-menu__item" href="{{url('admin/slider')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Manage Slider</span>
            </a>
         </li>
         <li class="slide">
            <a class="side-menu__item" href="{{url('admin/pages')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Manage Pages</span>
            </a>
         </li>
         <li class="slide">
            <a class="side-menu__item" href="{{url('admin/portfolio')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Manage Portfolio</span>
            </a>
         </li>
         <li class="slide">
            <a class="side-menu__item" href="{{url('admin/blogs')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Manage Blogs</span>
            </a>
         </li>
         <li class="slide">
            <a class="side-menu__item" href="{{url('admin/gallery')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Manage Gallery</span>
            </a>
         </li>
         <li class="slide">
            <a class="side-menu__item" href="{{url('admin/testimonials')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Manage Testimonials</span>
            </a>
         </li>
       
         <li class="slide">
            <a class="side-menu__item" href="{{url('admin/contact_settings')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Manage Contact Settings</span>
            </a>
         </li>
         <li class="slide">
            <a class="side-menu__item" href="{{url('admin/enquiry')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Manage Enquiry</span>
            </a>
         </li>
         <li class="slide">
            <a class="side-menu__item" href="javascript:void(0)" data-toggle="modal" data-target="#createModals">
               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" >
                  <path d="M0 0h24v24H0V0z" fill="none"/>
                  <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                  <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
               </svg>
               <span class="side-menu__label">Change Password</span>
            </a>
         </li>
         <li class="side-item side-item-category"><a href="{{url('admin/logout')}}">Logout</a></li>
      </ul>
   </div>
</aside>
<!-- main-sidebar -->
<!-- main-content -->
<div class="main-content app-content">
<!-- main-header -->
<div class="main-header sticky side-header nav nav-item layout-pin">
   <div class="container-fluid">
      <div class="main-header-left ">
         <div class="responsive-logo">
            <a href="{{url('/admin')}}"><img src="{{url('uploads/'.$contact->logo)}}" class="logo-1" alt="logo"></a>
            <a href="{{url('/admin')}}"><img src="{{url('uploads/'.$contact->logo)}}" class="dark-logo-1" alt="logo"></a>
            <a href="{{url('/admin')}}"><img src="{{url('uploads/'.$contact->logo)}}" class="logo-2" alt="logo"></a>
            <a href="{{url('/admin')}}"><img src="{{url('uploads/'.$contact->logo)}}" class="dark-logo-2" alt="logo"></a>
         </div>
         <div class="app-sidebar__toggle" data-toggle="sidebar">
            <a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
            <a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
         </div>
         <div class="main-header-center ml-3 m-0 d-sm-none d-md-none d-lg-block">
            <input class="form-control" placeholder="Search..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
         </div>
         <a class="animated-arrow hor-header-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
      </div>
      <div class="main-header-right">
         <div class="nav nav-item  navbar-nav-right ml-auto">
            <div class="nav-item full-screen fullscreen-button">
               <a class="new nav-link full-screen-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize">
                     <path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path>
                  </svg>
               </a>
            </div>
            <div class="dropdown main-profile-menu nav nav-item nav-link">
               <a class="profile-user d-flex" href="#"><img alt="" src="https://cdn-icons-png.flaticon.com/128/847/847969.png"></a>
               <div class="dropdown-menu">
                  <div class="main-header-profile bg-primary p-3">
                     <div class="d-flex wd-100p">
                        <div class="main-img-user"><img alt="" src="https://cdn-icons-png.flaticon.com/128/847/847969.png" class=""></div>
                        <div class="ml-3 my-auto">
                           <h6>
                           Hello, Admin</span>
                        </div>
                     </div>
                  </div>
                  <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-lock"></i> Change Password</a>
                  <a class="dropdown-item" href="{{url('admin/logout')}}"><i class="bx bx-log-out"></i> Sign Out</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>