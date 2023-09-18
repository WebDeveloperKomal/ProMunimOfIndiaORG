@include('admin/head')
<body class="main-body app sidebar-mini">
   <!-- Start Switcher -->
   <!-- End Switcher -->
   <!-- Loader -->
   <div id="global-loader">
      <img src="https://codeigniter.spruko.com/valex/ltr/public/assets/img/loader.svg" class="loader-img" alt="Loader">
   </div>
   <!-- /Loader -->
   <!-- Page -->
   <div class="page">
   <!-- main-sidebar -->
   <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
   @include('admin/sidebar')
   <!-- main-sidebar -->
   <!-- main-content -->
   <div class="">
      <!-- main-header -->
      <!-- /main-header -->
      <!-- container -->
      <div class="container-fluid">
         <!-- breadcrumb -->
         <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
               <div class="d-flex">
                  <h4 class="content-title mb-0 my-auto">Home</h4>
                  <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Manage Contact Settings</span>
               </div>
            </div>
            <div class="d-flex my-xl-auto right-content">
               <div class="pr-1 mb-xl-0">
                  <button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
               </div>
            </div>
         </div>
         <!-- breadcrumb -->
         <!-- row opened -->
         <div class="row row-sm">
            <!--div-->
            <div class="col-xl-12">
               <div class="card mg-b-20">
                  <div class="card-header pb-0">
                     <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">Manage Contact Settings</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                     </div>
                     <!-- Modal -->
                  </div>
                  <div class="card-body">
                     <div class="success"></div>
                     <form method="POST" action="{{url('admin/save_contact')}}" enctype='multipart/form-data'>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                @csrf
                                 <label>Phone</label>
                                 <input type="text" class="form-control" placeholder="Phone" name="phone"  value="{{$contact->phone}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Phone 1</label>
                                 <input type="text" class="form-control" placeholder="Phone 1" name="phone1"  value="{{$contact->phone1}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" class="form-control" placeholder="Email" name="email" value="{{$contact->email}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Email 1</label>
                                 <input type="email" class="form-control" placeholder="Email 1" name="email1" value="{{$contact->email1}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Email (For Mail)</label>
                                 <input type="email" class="form-control" placeholder="Email" name="admin"  value="{{$contact->admin}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Address</label>
                                 <input type="text" class="form-control" placeholder="Address" name="address"  value="{{$contact->address}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Map Link</label>
                                 <input type="text" class="form-control" placeholder="Map Link" name="maplink"  value="{{$contact->maplink}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>FB</label>
                                 <input type="text" class="form-control" placeholder="FB" name="fb"  value="{{$contact->fb}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Instagram</label>
                                 <input type="text" class="form-control" placeholder="Instagram" name="insta"  value="{{$contact->insta}}" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Twitter</label>
                                 <input type="text" class="form-control" placeholder="Twitter" name="twitter"  value="{{$contact->twitter}}" required="">
                              </div>
                           </div><div class="col-md-6">
                              <div class="form-group">
                                 <label>Linkedin</label>
                                 <input type="text" class="form-control" placeholder="Linkedin" name="linkedin"  value="{{$contact->linkedin}}" required="">
                                   <input type="hidden" name="id" value="{{$contact->id}}" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Map</label>
                                 <textarea class="form-control" name="map">{{$contact->map}}</textarea>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Logo</label><br>
                                 @if($contact->logo)
                                 <img src="{{url('uploads/'.$contact->logo)}}" width="100px"/>
                                 @endif
                                 <br>
                                 <input type="file" class="form-control" name="logo" >
                              </div>
                           </div>
                           @if($contact->map)
                           <div class="col-md-12">
                               <p><?=$contact->map?></p>
                           </div>
                           @endif
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <hr>
                              <input type="submit" value="Submit" class="btn btn-primary"/>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!--/div-->
            <!--div-->
         </div>
         <!-- /row -->
      </div>
      <!-- Container closed -->
   </div>
   <!-- main-content closed -->
   <script>
      CKEDITOR.replace( 'desc1' );
      CKEDITOR.replace( 'desc2' );
      CKEDITOR.replace( 'desc3' );
      CKEDITOR.replace( 'desc4' );
   </script>
   <!-- Sidebar-right-->
   @include('admin/footer')
   @include('admin/script')
