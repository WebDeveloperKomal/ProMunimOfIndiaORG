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
                  <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Edit Home</span>
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
                        <h4 class="card-title mg-b-0">Edit Home</h4>
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
                     <form method="POST" action="<?= base_url('admin/save_home')?>" enctype='multipart/form-data'>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Banner Title</label>
                                 <input type="text" class="form-control" placeholder="Title" name="title"  value="<?= $get->title?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Heading 1</label>
                                 <input type="text" class="form-control" placeholder="Title" name="head1" value="<?= $get->head1?>" required="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Sub Heading 1</label>
                                 <input type="text" class="form-control" placeholder="Title" name="sub_head1" value="<?= $get->sub_head1?>" required="">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Description 1</label>
                                 <textarea class="form-control" name="desc1"><?= $get->desc1?></textarea>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Heading 2</label>
                                 <input type="text" class="form-control" placeholder="Title" name="head2" value="<?= $get->head2?>" required="">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Description 2</label>
                                 <textarea class="form-control" name="desc2"><?= $get->desc2?></textarea>
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                                 <label>Counter 1</label>
                                 <input type="text" class="form-control" placeholder="Title" name="counter1" value="<?= $get->counter1?>" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                                 <label>Counter 2</label>
                                 <input type="text" class="form-control" placeholder="Title" name="counter2" value="<?= $get->counter2?>" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                                 <label>Counter 3</label>
                                 <input type="text" class="form-control" placeholder="Title" name="counter3" value="<?= $get->counter3?>" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                                 <label>Counter 4</label>
                                 <input type="text" class="form-control" placeholder="Title" name="counter4" value="<?= $get->counter4?>" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                                 <label>Counter Title 1</label>
                                 <input type="text" class="form-control" placeholder="Title" name="title1" value="<?= $get->title1?>" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                                 <label>Counter Title 2</label>
                                 <input type="text" class="form-control" placeholder="Title" name="title2" value="<?= $get->title2?>" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                                 <label>Counter Title 3</label>
                                 <input type="text" class="form-control" placeholder="Title" name="title3" value="<?= $get->title3?>" required="">
                              </div>
                           </div>
                           <div class="col-md-3">
                           <div class="form-group">
                                 <label>Counter Title 4</label>
                                 <input type="text" class="form-control" placeholder="Title" name="title4" value="<?= $get->title4?>" required="">
                              </div>
                           </div>
                           <div class="col-md-12">
                           <div class="form-group">
                                 <label>CTA Heading</label>
                                 <input type="text" class="form-control" placeholder="Title" name="title5" value="<?= $get->title5?>" required="">
                                 <input type="hidden" name="id" value="<?= $get->id ?>"/>
                                 <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?=$this->security->get_csrf_hash();?>" />
                              </div>
                           </div>
                           
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Image 1</label><br>
                                 <?php if($get->image1 != ''):?>
                                 <img src="<?= base_url('upload/'.$get->image1)?>" width="100px"/>
                                 <?php endif?>
                                 <br>
                                 <input type="file" class="form-control" name="image1" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Image 2</label><br>
                                 <?php if($get->image2 != ''):?>
                                 <img src="<?= base_url('upload/'.$get->image2)?>" width="100px"/>
                                 <?php endif?>
                                 <br>
                                 <input type="file" class="form-control" name="image2" >
                              </div>
                           </div>
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
   </script>
   <!-- Sidebar-right-->
   <?php include('include/footer.php')?>
   <?php include('include/script.php')?>