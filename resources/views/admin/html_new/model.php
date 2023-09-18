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
								<h4 class="content-title mb-0 my-auto">Home</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Model</span>
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
										<h4 class="card-title mg-b-0">Models</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i></button>
                                   
                <!-- Modal -->
                <div class="modal fade" id="createModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Model Line</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="<?= base_url('admin/add_model')?>" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Car Type</label>
                                                    <select class="form-control" name="car_type" id="car_type">
                                                        <option selected>Select Car Type</option>
                                                        <?php foreach($car_type as $type):?>
                                                            <option value="<?= $type->id?>"><?= $type->type?></option>
                                                        <?php endforeach?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Brands</label>
                                                    <select class="form-control" name="brand" id="brand">
                                                        <option value="" selected>Select Brand</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Model</label>
                                                    <input type="text" name="model" class="form-control" placeholder="Model"/>
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
                                        <div class="error <?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('error')?></div>
                                    <?php endif?>
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap dataTable no-footer dtr-inline">
											<thead>
												<tr>

													<th class="border-bottom-0">#</th>
													<th class="border-bottom-0">Car Type</th>
                                                    <th class="border-bottom-0">Brands</th>
                                                    <th class="border-bottom-0">Model</th>
													<th class="border-bottom-0">Date</th>
                                                    <th class="border-bottom-0">Action</th>
												</tr>
											</thead>
											<tbody class="data">
                                                <?php 
                                                $i=1;
                                                foreach($model as $row):?>
                                                <tr>
                                                    <td><?= $i;?></td>
                                                    <td><?php 
                                                    foreach($car_type as $type):
                                                    if($type->id == $row->car_type):?>
                                                    <?= $type->type?>
                                                    
                                                    <?php endif; endforeach?></td>
                                                    <td><?php 
                                                    foreach($brands as $brand):
                                                    if($brand->id == $row->brand):?>
                                                    <?= $brand->brand?>
                                                    
                                                    <?php endif; endforeach?></td>
                                                    <td><?= $row->model?></td>
                                                    <td><?= $newDateTime = date('d F Y, h:i A', strtotime($row->created_at))?>
                                                    
                                                    </td>
                                                    <td><div class='btn btn-success' data-toggle="modal" data-target="#editmodal_<?= $row->id?>"><i class='fa fa-edit'></i></div>
                                                    <?php 
                                                    $ids = $row->id;
                                                    $id = base64_encode($ids);
                                                    $table = base64_encode('model');
                                                    ?>
                                                    
                                                    <a href="<?= base_url('admin/delete/'.$id.'/'.$table)?>" class='btn btn-danger'><i class='fa fa-trash'></i></a></td>
                                                </tr>
                                                <div class="modal fade" id="editmodal_<?= $row->id?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Car Type</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php 
                            $id = base64_encode($row->id);
                            ?>
                            <form action="<?= base_url('admin/edit_model/'.$id)?>" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Car Type</label>
                                                    <select class="form-control" name="car_type" id="car_type_u">
                                                        <?php foreach($car_type as $type):?>
                                                            <option <?php if($type->id == $row->car_type){ echo 'selected';}?> value="<?= $type->id?>"><?= $type->type?></option>
                                                        <?php endforeach?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Brands</label>
                                                    <select class="form-control" name="brand" id="brand_u">
                                                    <option <?php if($brand->id == $row->brand){ echo 'selected';}?> value="<?= $brand->id?>"><?= $brand->brand?></option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Model</label>
                                                    <input type="text" name="model" class="form-control" placeholder="Model" value="<?= $row->model?>"/>
                                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?=$this->security->get_csrf_hash();?>" />

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-primary" value="Update">
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
$(document).ready(function(){
 $('#car_type').change(function(){
  var car_id = $('#car_type').val();
  if(car_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin/fetch_brand",
    method:"POST",
    data:{car_id:car_id},
    success:function(data)
    {
     $('#brand').html(data);
    }
   });
  }
  else
  {
   $('#brand').html('<option value="">Select Brand</option>');
  }
 });

 $('#car_type_u').change(function(){
  var car_type_u = $('#car_type_u').val();
  if(car_type_u != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin/fetch_brand_m",
    method:"POST",
    data:{car_type_u:car_type_u},
    success:function(data)
    {
     $('#brand_u').html(data);
    }
   });
  }
  else
  {
   $('#brand_u').html('<option value="">Select Brand</option>');
  }
 });
});
</script>
<?php include('include/footer.php')?>
<?php include('include/script.php')?>



















