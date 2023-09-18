<?php include('include/head.php')?>
<body class="main-body app sidebar-mini">
   <!-- Loader -->
   <div id="global-loader">
      <img src="<?= base_url('loader')?>assets/img/loader.svg" class="loader-img" alt="Loader">
   </div>
   <!-- /Loader -->
   <!-- Page -->
   <div class="page">
      <!-- main-sidebar -->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <?php include('include/sidebar.php')?>
      <!-- main-sidebar -->
      <!-- /main-header -->
      <!-- container -->
      <div class="container-fluid">
         <!-- breadcrumb -->
         <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
               <div class="d-flex">
                  <h4 class="content-title mb-0 my-auto">Home</h4>
                  <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Clients</span>
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
                        <h4 class="card-title mg-b-0">Clients</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                     </div>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i></button>
                     <!-- Modal -->
                     <div class="modal fade" id="createModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Add Clients</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                              </div>
                              <form action="<?= base_url('admin/save_clients')?>" method="POST" enctype="multipart/form-data">
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <label>Upload Images</label>
                                       <input type="hidden" name="table" value="clients" />
                                       <input type="file" name="image_name[]" class="form-control" multiple="multiple"/>
                                       <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?=$this->security->get_csrf_hash();?>" />
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Add">
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="success"></div>
                     <?php if($this->session->flashdata('success')):?>
                     <div class="success <?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('success')?></div>
                     <?php else:?>
                     <div class="error <?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('failed')?></div>
                     <?php endif?>
                     <div class="demo-gallery">
						<ul id="lightgallery" class="list-unstyled row row-sm">
                            <?php foreach($clients as $gall):?>
							<li class="col-sm-6 col-lg-3" data-responsive="<?= base_url('upload/'.$gall->image_name)?>" data-src="<?= base_url('upload/'.$gall->image_name)?>" data-sub-html="<h4>Gallery</h4>" >
								<a href="#">
									<img class="img-responsive" src="<?= base_url('upload/'.$gall->image_name)?>" alt="Thumb-1">
								</a>
                                <?php 
                                       $ids = $gall->id;
                                       $id = base64_encode($ids);
                                       $table = base64_encode('clients');
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
   <?php include('include/footer.php')?>
   <?php include('include/script.php')?>