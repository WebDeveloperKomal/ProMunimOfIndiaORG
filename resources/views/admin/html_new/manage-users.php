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
								<h4 class="content-title mb-0 my-auto">Home</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Manage Owners</span>
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
										<h4 class="card-title mg-b-0">Manage Owners</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
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
                                                    <th class="border-bottom-0">Date</th>
													<th class="border-bottom-0">ID</th>
													<th class="border-bottom-0">User Name</th>
													<th class="border-bottom-0">Mobile No.</th>
                                                    <th class="border-bottom-0">User Type</th>													
													<th class="border-bottom-0">Status</th>
													<th class="border-bottom-0">View</th>
												</tr>
											</thead>
											<tbody class="data">
                                                <?php foreach($customers as $row):?>
                                                <tr>
                                                    <td><?= $newDateTime = date('d F Y', strtotime($row->created_at))?></td>
                                                    <td><?= $row->unique_id;?></td>
                                                    <td><?= $row->name?></td>
                                                    <td><?= $row->phone?></td>
                                                    <td><?= $row->type?></td>
                                                    <td>
                                                       
                                                        <i data="<?php echo $row->id;?>" class="status_checks btn
                                                     <?php echo ($row->status)? 'btn-success': 'btn-danger'?>"><?php echo ($row->status)? 'Verified' : 'Pending'?>
                                                     </i></td>
                                                    <td>
                                                        <div class='btn btn-primary' data-toggle="modal" data-target="#viewmodal_<?= $row->id?>"><i class='fa fa-eye'></i></div>
                                                        <div class="modal fade" id="viewmodal_<?= $row->id?>" aria-hidden="true">
                                                        <div class="modal-dialog" role="document" style="max-width: 680px;">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Owner Profile</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="pl-0">
										<div class="main-profile-overview">
										    <div class="row">
										    <div class="col-md-6" style="border-right: 1px solid #c7c7c7;">
										        <div class="main-img-user profile-user">
											    <?php if($row->image == ''):?>
												<img alt="" src="<?= base_url('assets/frontend/images/user.png')?>">
												<?php else:?>
												<img alt="" src="<?= base_url('upload/'.$row->image)?>">
												<?php endif ?>
												
											</div>
											<div class="d-flex justify-content-between mg-b-20">
												<div>
													<h5 class="main-profile-name"><?= $row->name?></h5>
													<p class="main-profile-name-text"><?= $row->user_id?></p>
												</div>
											</div>
											<hr class="mg-y-30">
											<h6>Documents</h6>
											
											<div class="skill-bar mb-4 clearfix mt-3">
												<span><?= ucwords($row->doc);?></span>
												<div class="mt-2">
												    
													<img src="<?= base_url('upload/'.$row->file)?>"/>
												</div>
											</div>
										    </div>
										     <div class="col-md-6">
										         	<label class="main-content-label tx-13 mg-b-20">Owner's Information</label>
											<div class="main-profile-social-list">
												<div class="media">
													<div class="media-icon bg-primary-transparent text-primary">
														<i class="fa fa-envelope"></i>
													</div>
													<div class="media-body">
														<span>Email</span><a href="mailto:<?= $row->email?>"><?= $row->email?></a>
													</div>
												</div>
												<div class="media">
													<div class="media-icon bg-success-transparent text-success">
														<i class="fa fa-phone"></i>
													</div>
													<div class="media-body">
														<span>Phone No.</span><a href="tel:<?= $row->phone?>"><?= $row->phone?></a>
													</div>
												</div>
												<div class="media">
													<div class="media-icon bg-info-transparent text-info">
														<i class="fa fa-phone"></i>
													</div>
													<div class="media-body">
														<span>Alternate No.</span> <a href="tel:<?= $row->alt_phone?>"><?= $row->alt_phone?></a>
													</div>
												</div>
												<div class="media">
													<div class="media-icon bg-danger-transparent text-danger">
														<i class="fa fa-location"></i>
													</div>
													<div class="media-body">
														<span>Address</span> <a href="javascript:void(0)"><?= $row->permanent_add?></a>
													</div>
												</div>
												<div class="media">
													<div class="media-icon bg-info-transparent text-info">
														<i class="fa fa-location"></i>
													</div>
													<div class="media-body">
														<span>City</span> <a href="javascript:void(0)"><?= $row->present_add?></a>
													</div>
												</div>
												<div class="media">
													<div class="media-icon bg-info-transparent text-info">
														<i class="fa fa-calendar"></i>
													</div>
													<div class="media-body">
														<span>Date Of Birth</span> <a href="javascript:void(0)"><?= $row->dob?></a>
													</div>
												</div>
											</div>
										     </div>
											</div>
										</div><!-- main-profile-overview -->
									</div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input class=" btn btn-primary" data-dismiss="modal" aria-label="Close" value="Close">
                                                                </div>
                                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </td>
                                                   
                                                </tr>
                                                <?php endforeach ?>
											</tbody>
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
   <script type="text/javascript">
$(document).on('click','.status_checks',function(){
      var status = ($(this).hasClass("btn-success")) ? '0' : '1';
      var msg = (status=='0')? 'Deactivate' : 'Activate';
      var table = 'customer';
      if(confirm("Are you sure to "+ msg)){
        var current_element = $(this);
        url = "<?php echo base_url('admin/status'); ?>";
        $.ajax({
          type:"POST",
          url: url,
          data: {id:$(current_element).attr('data'),status:status,table:table},
          success: function(data)
          {   
            location.reload();
          }
        });
      }      
    });
</script>           
<?php include('include/footer.php')?>
<?php include('include/script.php')?>