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
                  <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Testimonials</span>
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
                        <h4 class="card-title mg-b-0">Testimonials</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                     </div>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i></button>
                     <!-- Modal -->
                     <div class="modal fade" id="createModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Add Testimonials</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                              </div>
                              <form action="<?= base_url('admin/save_testimonials')?>" method="POST" enctype="multipart/form-data">
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <label>User Name</label>
                                       <input type="text" name="name" class="form-control" placeholder="User Name" required/>
                                    </div>
                                    <div class="form-group">
                                       <label>Designation</label>
                                       <input type="text" name="designation" class="form-control" placeholder="Designation" required/>
                                    </div>
                                    <div class="form-group">
                                       <label>Comments</label>
                                       <textarea class="form-control" name="comment"></textarea>
                                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
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
                     <div class="error <?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('error')?></div>
                     <?php endif?>
                     <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap dataTable no-footer dtr-inline">
                           <thead>
                              <tr>
                                 <th class="border-bottom-0">#</th>
                                 <th class="border-bottom-0">UserName</th>
                                 <th class="border-bottom-0">Designation</th>
                                 <th class="border-bottom-0">Comment</th>
                                 <th class="border-bottom-0">Date</th>
                                 <th class="border-bottom-0">Action</th>
                              </tr>
                           </thead>
                           <tbody class="data">
                              <?php 
                                 $i=1;
                                 foreach($testimonials as $row):?>
                              <tr>
                                 <td><?= $i;?></td>
                                 <td><?= $row->name?></td>
                                 <td><?= $row->designation?></td>
                                 <td><?= $row->comment?></td>
                                 <td><?= $newDateTime = date('d F Y, h:i A', strtotime($row->created_at))?></td>
                                 <td>
                                    <div class='btn btn-success' data-toggle="modal" data-target="#editmodal_<?= $row->id?>"><i class='fa fa-edit'></i></div>
                                    <?php 
                                       $ids = $row->id;
                                       $id = base64_encode($ids);
                                       $table = base64_encode('testimonials');
                                       ?>
                                    <a href="<?= base_url('admin/delete/'.$id.'/'.$table)?>" class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                 </td>
                              </tr>
                              <div class="modal fade" id="editmodal_<?= $row->id?>" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Edit Amenities</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                          </button>
                                       </div>
                                       <?php $id = base64_encode($row->id); ?>
                                       <form action="<?= base_url('admin/save_testimonials')?>" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>User Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="User Name" value="<?= $row->name?>" required/>
                                            </div>
                                            <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" name="designation" class="form-control" value="<?= $row->designation?>" placeholder="Designation" required/>
                                            </div>
                                            <div class="form-group">
                                            <label>Comments</label>
                                            <textarea class="form-control" name="comment" id="editor_<?= $row->id?>"><?= $row->comment?></textarea>
                                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                            <input type="hidden" name="id" value="<?= $row->id?>" />    
                                        </div>
                                        </div>
                                        <script>
                                                ClassicEditor
                                                        .create( document.querySelector( '#editor_<?= $row->id?>' ) )
                                                        .then( editor => {
                                                                console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                                console.error( error );
                                                        } );
                                        </script>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                    </form>
                                    </div>
                                 </div>
                              </div>
                              <?php $i++ ?>
                              <?php endforeach?>
                           </tbody >
                        </table>
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
   <script>
        CKEDITOR.replace( 'comment' );
</script>
   <?php include('include/footer.php')?>
   <?php include('include/script.php')?>