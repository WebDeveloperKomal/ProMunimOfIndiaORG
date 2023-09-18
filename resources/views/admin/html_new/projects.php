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
								<h4 class="content-title mb-0 my-auto">Home</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Services</span>
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
										<h4 class="card-title mg-b-0">Services</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
                                    <a href="<?= base_url('admin/add_projects')?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                     <!-- Modal -->
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
                                                    <th class="border-bottom-0">Image</th>
                                                    <th class="border-bottom-0">Date</th>
                                                    <th class="border-bottom-0">Action</th>
												</tr>
											</thead>
											<tbody class="data">
                                                <?php 
                                                $i=1;
                                                foreach($projects as $row):?>
                                                <tr>
                                                    <td><?= $i;?></td>
                                                    <td><?= $row->title?></td>
                                                    <td><img src="<?= base_url('upload/'.$row->image)?>" width="100px"/></td>
                                                    <td><?= $newDateTime = date('d F Y, h:i A', strtotime($row->created_at))?></td>
                                                    <td><div class='btn btn-success'><a class="text-white" href="<?= base_url('admin/add_projects/'.base64_encode($row->id))?>"><i class='fa fa-edit'></i></a></div>
                                                    <?php 
                                                    $ids = $row->id;
                                                    $id = base64_encode($ids);
                                                    $table = base64_encode('projects');
                                                    ?>
                                                    
                                                    <a href="<?= base_url('admin/delete/'.$id.'/'.$table)?>" class='btn btn-danger'><i class='fa fa-trash'></i></a></td>
                                                </tr>
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
<?php include('include/footer.php')?>
<?php include('include/script.php')?>



















