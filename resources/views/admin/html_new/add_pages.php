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
								<h4 class="content-title mb-0 my-auto">Home</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Add Pages</span>
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
										<h4 class="card-title mg-b-0">Add Pages</h4>
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
									<form method="POST" action="<?= base_url('admin/save_pages')?>" enctype='multipart/form-data'>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Title" name="title"  value="<?= $get->title?>" required="">
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="desc"><?= $get->desc?></textarea>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Meta Title</label>
                                            <input type="text" class="form-control" placeholder="Meta Title" name="meta_title"  value="<?= $get->meta_title?>" required="">
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Meta Keyword</label>
                                            <input type="text" class="form-control" placeholder="Meta Keyword" name="meta_keyword"  value="<?= $get->meta_keyword?>" required="">
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Meta Description</label>
                                            <textarea class="form-control" name="meta_desc"><?= $get->meta_desc?></textarea>
                                            <input type="hidden" name="id" value="<?= $get->id?>" />
                                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?=$this->security->get_csrf_hash();?>" />
                                             
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
        CKEDITOR.replace( 'meta_desc' );
        CKEDITOR.replace( 'desc' );
        CKEDITOR.config.allowedContent = true;
        CKEDITOR.dtd.$removeEmpty['i'] = false;
</script>
<?php include('include/footer.php')?>
<?php include('include/script.php')?>

















