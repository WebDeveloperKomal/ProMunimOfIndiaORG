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
                  <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Edit Dhikala</span>
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
                        <h4 class="card-title mg-b-0">Edit Dhikala</h4>
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
                     <form method="POST" action="<?= base_url('admin/save_dhikala')?>" enctype='multipart/form-data'>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Heading 1</label>
                                 <input type="text" class="form-control" placeholder="Title" name="head1" value="<?= $get->head1?>" required="">
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
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Heading 3</label>
                                 <input type="text" class="form-control" placeholder="Title" name="head3" value="<?= $get->head3?>" required="">
                                 <input type="hidden" name="id" value="<?= $get->id ?>"/>
                                 <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?=$this->security->get_csrf_hash();?>" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label>Description 3</label>
                                 <textarea class="form-control" name="desc3"><?= $get->desc3?></textarea>
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
                     <br>
                     <h4>Slider Images</h4>
                     <hr>
                     <form action="<?= base_url('admin/save_gallery')?>" method="POST" enctype="multipart/form-data">
                         <div class="modal-body">
                            <div class="form-group">
                               <label>Upload Images</label>
                                <input type="hidden" name="table" value="slider" />
                               <input type="file" name="image_name[]" class="form-control" multiple="multiple"/>
                               <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?=$this->security->get_csrf_hash();?>" />
                            </div>
                         </div>
                         <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Upload">
                         </div>
                      </form>
                      <div class="demo-gallery">
						<ul id="lightgallery" class="list-unstyled row row-sm">
                            <?php foreach($gallery as $gall):?>
							<li class="col-sm-6 col-lg-3" data-responsive="<?= base_url('upload/'.$gall->image_name)?>" data-src="<?= base_url('upload/'.$gall->image_name)?>" data-sub-html="<h4>Gallery</h4>" >
								<a href="#">
									<img class="img-responsive" src="<?= base_url('upload/'.$gall->image_name)?>" alt="Thumb-1">
								</a>
                                <?php 
                                       $ids = $gall->id;
                                       $id = base64_encode($ids);
                                       $table = base64_encode('slider');
                                       ?>
                                    <a href="<?= base_url('admin/delete/'.$id.'/'.$table)?>" class='btn btn-danger' style="width: fit-content;height: fit-content;margin-right: 15px;"><i class='fa fa-trash'></i></a>
							</li>
                            <?php endforeach?>
						</ul>
						<!-- /Gallery -->
					</div>
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