<?php include('include/head.php')?>
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
   <?php include('include/sidebar.php')?>
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
                     <?php if($this->session->flashdata('success')):?>
                     <div class="success <?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('success')?></div>
                     <?php else:?>
                     <div class="error <?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('error')?></div>
                     <?php endif?>
                     <form method="POST" action="<?= base_url('admin/save_contact_settings')?>" enctype='multipart/form-data'>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Phone</label>
                                 <input type="text" class="form-control" placeholder="Phone" name="phone"  value="<?= $get->phone?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Phone 1</label>
                                 <input type="text" class="form-control" placeholder="Phone 1" name="phone1"  value="<?= $get->phone1?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $get->email?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Email 1</label>
                                 <input type="email" class="form-control" placeholder="Email 1" name="email1" value="<?= $get->email1?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Email (For Mail)</label>
                                 <input type="email" class="form-control" placeholder="Email" name="admin"  value="<?= $get->admin?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Address</label>
                                 <input type="text" class="form-control" placeholder="Address" name="address"  value="<?= $get->address?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Map Link</label>
                                 <input type="text" class="form-control" placeholder="Map Link" name="maplink"  value="<?= $get->maplink?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>FB</label>
                                 <input type="text" class="form-control" placeholder="FB" name="fb"  value="<?= $get->fb?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Instagram</label>
                                 <input type="text" class="form-control" placeholder="Instagram" name="insta"  value="<?= $get->insta?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Twitter</label>
                                 <input type="text" class="form-control" placeholder="Twitter" name="twitter"  value="<?= $get->twitter?>" required="">
                              </div>
                           </div><div class="col-md-6">
                              <div class="form-group">
                                 <label>Linkedin</label>
                                 <input type="text" class="form-control" placeholder="Linkedin" name="linkedin"  value="<?= $get->linkedin?>" required="">
                                   <input type="hidden" name="id" value="<?= $get->id?>" />
                                           <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Map</label>
                                 <textarea class="form-control" name="map"><?= $get->map?></textarea>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Logo</label><br>
                                 <?php if($get->logo != ''):?>
                                 <img src="<?= base_url('upload/'.$get->logo)?>" width="100px"/>
                                 <?php endif?>
                                 <br>
                                 <input type="file" class="form-control" name="logo" >
                              </div>
                           </div>
                           <?php if($get->address):?>
                           <div class="col-md-12">
                               <?= $get->map?>
                           </div>
                           <?php endif?>
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
   <?php include('include/footer.php')?>
   <?php include('include/script.php')?>