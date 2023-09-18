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
      <div class="container-fluid">
         <!-- breadcrumb -->
         <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
               <div class="d-flex">
                  <h4 class="content-title mb-0 my-auto">Facility</h4>
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
                        <h4 class="card-title mg-b-0">Facility</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                     </div>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i></button>
                     <!-- Modal -->
                     <div class="modal fade" id="createModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Add Facility</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <div class="form-group">
                                    <label>Facility</label>
                                    <input type="text" class="form-control" placeholder="Facility" name="title" id="title">
                                    <input type="hidden" name="table" value="facility" id="table" />
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <input type="button" id="submit" class="btn btn-primary" value="Add">
                              </div>
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
                                 <th class="border-bottom-0">Title</th>
                                 <th class="border-bottom-0">Date</th>
                                 <th class="border-bottom-0">Action</th>
                              </tr>
                           </thead>
                           <tbody class="data">
                              <?php 
                                 $i=1;
                                 foreach($facility as $row):?>
                              <tr>
                                 <td><?= $i;?></td>
                                 <td><?= $row->title?></td>
                                 <td><?= $newDateTime = date('d F Y, h:i A', strtotime($row->created_at))?>
                                 </td>
                                 <td>
                                    <div class='btn btn-success' data-toggle="modal" data-target="#editmodal_<?= $row->id?>"><i class='fa fa-edit'></i></div>
                                    <?php 
                                       $ids = $row->id;
                                       $id = base64_encode($ids);
                                       $table = base64_encode('facility');
                                       ?>
                                    <a href="<?= base_url('admin/delete/'.$id.'/'.$table)?>" class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                 </td>
                              </tr>
                              <div class="modal fade" id="editmodal_<?= $row->id?>" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Edit Facility</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                          </button>
                                       </div>
                                      
                                          <div class="modal-body">
                                             <div class="form-group">
                                                <label>Facility</label>
                                                <input type="text" class="form-control" placeholder="Title" name="title" id="u_type_<?= $row->id?>" value="<?= $row->title?>" required>
                                                <input type="hidden" class="form-control"  name="id" id="u_id" value="<?= $row->id?>">
                                             </div>
                                          </div>
                                          <div class="modal-footer">
                                             <!-- <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button> -->
                                             <input type="submit" id="update_<?= $row->id?>" class="btn btn-primary" value="Update">
                                          </div>
                                          <script>
                                $("#update_<?= $row->id?>").click(function() 
                                {
                                var title = $('#u_type_<?= $row->id?>').val();
                                var id = $('#u_id').val();
                                var table = "facility";
                                if(title!="")
                                {
                                    jQuery.ajax({
                                                type: "POST",
                                                url: "<?php echo base_url('admin/update_facility'); ?>",
                                                dataType: 'html',
                                                data: {title: title, id:id, table:table},
                                                success: function(response)
                                                {
                                                    if(response==1)
                                                    {
                                                        $('#createModal').modal('hide'); //hiding modal
                                                        location.reload(); //rereshing the datatable to add new data in datatable
                                                    }
                                                    else
                                                    {
                                                        $(".fail").html("<div class='bg bg-danger' style='padding: 10px;border-radius: 5px;color: #fff;text-align: center;'>Something Went Wrong!! Please Try Again</div>");
                                                    }
                                                    
                                                },
                                                error:function()
                                                {
                                                    alert('Something Went wrong!! PLease Try Again');	
                                                }
                                                });
                                        }
                                        else
                                        {
                                            alert('Insert All Fields');
                                        }
                                    });
                                </script>
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
      $(document).ready(function() 
      {
      $("#submit").click(function() 
      {
      var title = $('#title').val();
      var table = $('#table').val();
      if(title!="")
      {
          jQuery.ajax({
                      type: "POST",
                      url: "<?php echo base_url('admin/add_facility'); ?>",
                      dataType: 'html',
                      data: {title: title, table: table},
                      success: function(response)
                      {
                          if(response==1)
                          {
                              $('#createModal').modal('hide'); 
                              location.reload(); 
                          }
                          else
                          {
                              $(".fail").html("<div class='bg bg-danger' style='padding: 10px;border-radius: 5px;color: #fff;text-align: center;'>Something Went Wrong!! Please Try Again</div>");
                          }
                      },
                      error:function()
                      {
                      alert('Something Went wrong!! Please Try Again');	
                      }
                      });
              }
              else
              {
                  alert('Insert All Fields');
              }
          });
      
      
      });
   </script>
   <?php include('include/footer.php')?>
   <?php include('include/script.php')?>