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
								<h4 class="content-title mb-0 my-auto">Home</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Variant</span>
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
										<h4 class="card-title mg-b-0">Variant</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i></button>
                                     <!-- Modal -->
                                <div class="modal fade" id="createModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Add Variant</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form action="<?= base_url('admin/add_variant')?>" method="POST" enctype="multipart/form-data">
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
                                                    <label>Brand</label>
                                                    <select class="form-control" name="brand" id="brand">
                                                        <option selected>Select Brand</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Model</label>
                                                    <select class="form-control" name="model" id="model">
                                                        <option selected>Select Model</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Variant</label>
                                                   <input type="text" class="form-control" placeholder="Variant" name="variant" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Seater</label>
                                                    <select class="form-control" name="sitter">
                                                        <option selected>Select Sitter</option>
                                                        <?php 
                                                        for($i=2;$i<=50;$i++)
                                                        {
                                                            echo '<option '.$i.'>'.$i.' Sitter</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Upload Image</label>
                                                    <input type="file" name="file" class="form-control"/>
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
													<th class="border-bottom-0">Brand</th>
                                                    <th class="border-bottom-0">Model</th>
                                                    <th class="border-bottom-0">Variant</th>
                                                    <th class="border-bottom-0">Image</th>
                                                    <th class="border-bottom-0">Sitter</th>
                                                    <th class="border-bottom-0">Date</th>
                                                    <th class="border-bottom-0">Action</th>
												</tr>
											</thead>
											<tbody class="data">
                                                <?php 
                                                $i=1;
                                                foreach($variant as $row):?>
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

                                                    <td><?php 
                                                    foreach($model as $models):
                                                    if($models->id == $row->model):?>
                                                    <?= $models->model?>
                                                    
                                                    <?php endif; endforeach?></td>
                                                    <td><?= $row->variant?></td>
                                                    <td><img src="<?= base_url('upload/'.$row->image)?>" width="100px" alt="<?= $row->variant?>"/></td>
                                                    <td><?= $row->sitter?></td>
                                                    <td><?= $newDateTime = date('d F Y, h:i A', strtotime($row->created_at))?></td>
                                                    <td><div class='btn btn-success' data-toggle="modal" data-target="#editmodal_<?= $row->id?>"><i class='fa fa-edit'></i></div>
                                                    <?php 
                                                    $ids = $row->id;
                                                    $id = base64_encode($ids);
                                                    $table = base64_encode('variant');
                                                    ?>
                                                    
                                                    <a href="<?= base_url('admin/delete/'.$id.'/'.$table)?>" class='btn btn-danger'><i class='fa fa-trash'></i></a></td>
                                                </tr>
                                                <div class="modal fade" id="editmodal_<?= $row->id?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Variant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <?php $id = base64_encode($row->id); ?>
                            <form action="<?= base_url('admin/edit_variant/'.$id)?>" method="POST" enctype="multipart/form-data">
                                            <div class="modal-body">
                                            <div class="form-group">
                                                    <label>Car Type</label>
                                                    <select class="form-control" name="car_type" id="car_type_u">
                                            
                                                        <?php foreach($car_type as $type):?>
                                                            <option <?php if($type->id == $row->type){echo 'selected';} ?> value="<?= $type->id?>"><?= $type->type?></option>
                                                        <?php endforeach?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Brand</label>
                                                    <select class="form-control" name="brand" id="brand_u">
                                                    <?php foreach($brands as $brand):
                                                        if($row->brand == $brand->id):?>
                                                        <option selected value="<?= $row->brand?>"><?= $brand->brand ?></option>

                                                    <?php endif; endforeach?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Model</label>
                                                    <select class="form-control" name="model" id="model_u">
                                                    <?php foreach($model as $models):
                                                        if($row->model == $models->id):?>
                                                        <option selected value="<?= $row->model?>"><?= $models->model ?></option>

                                                    <?php endif; endforeach?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Variant</label>
                                                   <input type="text" class="form-control" placeholder="Variant" name="variant" value="<?= $row->variant?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Seater</label>
                                                    <select class="form-control" name="sitter">
                                                        <option vazlue="<?= $row->sitter?>"><?= $row->sitter?></option>
                                                        <?php 
                                                        for($i=2;$i<=50;$i++)
                                                        {
                                                            echo '<option '.$i.'>'.$i.' Sitter</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Upload Image</label><br>
                                                    <?php if($row->logo != ''):?>
                                                    <img src="<?= base_url('upload/'.$row->logo)?>" width="100px"/>
                                                    <?php endif?>
                                                    <input type="hidden" name="id" value="<?= $row->id?>" />
                                                    <img src="<?= base_url('upload/'.$row->image)?>" width="100px;">
                                                    <input type="file" name="file" class="form-control"/>
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
 $('#brand').change(function(){
  var brand_id = $('#brand').val();
  if(brand_id != '')
  {
    
   $.ajax({
    url:"<?php echo base_url(); ?>admin/fetch_model",
    method:"POST",
    data:{brand_id:brand_id},
    success:function(data)
    {
     $('#model').html(data);
    }
   });
  }
  else
  {
   $('#model').html('<option value="">Select Model</option>');
  }
 });


 $('#car_type_u').change(function(){
  var car_type_u = $('#car_type_u').val();
  if(car_type_u != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>admin/fetch_brand_u",
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
 $('#brand_u').change(function(){
  var brand_id = $('#brand_u').val();
  if(brand_id != '')
  {
    
   $.ajax({
    url:"<?php echo base_url(); ?>admin/fetch_model_u",
    method:"POST",
    data:{brand_id:brand_id},
    success:function(data)
    {
     $('#model_u').html(data);
    }
   });
  }
  else
  {
   $('#model_u').html('<option value="">Select Model</option>');
  }
 });
});
</script>
<?php include('include/footer.php')?>
<?php include('include/script.php')?>



















