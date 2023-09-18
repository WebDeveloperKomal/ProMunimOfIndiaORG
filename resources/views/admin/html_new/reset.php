<?php include('include/head.php');?>
	<body class="main-body">
		<div class="error-page1">
			<div class="page">

				<div class="container-fluid">
					<div class="row no-gutter">
						<!-- The image half -->
						<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
							<div class="row wd-100p mx-auto text-center">
								<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
									<img src="<?= base_url('assets/')?>img/media/reset.png" class="my-auto ht-xl-80p wd-md-100p wd-xl-50p ht-xl-60p mx-auto" alt="logo">
								</div>
							</div>
						</div>
						<!-- The content half -->
						<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
							<div class="login d-flex align-items-center py-2">
								<!-- Demo content-->
								<div class="container p-0">
									<div class="row">
										<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="mb-5 d-flex"> <a href="<?= base_url()?>"><img src="<?= base_url('upload/'.$contact->logo)?>" class="sign-favicon ht-40" alt="logo"></a></div>
											<div class="main-card-signin d-md-flex">
												<div class="wd-100p">
													<div class="main-signin-header">
														<div class="">
															<h2>Welcome back!</h2>
															<h4 class="text-left">Reset Your Password</h4>
															<?php if($this->session->flashdata('success')):?>
                                                            <div class="<?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('success')?></div>
                                                            <?php else:?>
                                                            <div class="<?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('error')?></div>
                                                            <?php endif?>
															<form action="<?= base_url('admin/reset_password')?>" method="POST">
																<div class="form-group text-left">
																	<label>Enter OTP</label>
																	<input class="form-control" placeholder="Enter OTP" type="text" name="otp">
																</div>
																<div class="form-group text-left">
																	<label>New Password</label>
																	<input class="form-control" placeholder="Enter your password" type="password" name="password">
																</div>
																<div class="form-group text-left">
																	<label>Confirm Password</label>
																	<input class="form-control" placeholder="Enter your password" type="password" name="conf">
	                                                                <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?=$this->security->get_csrf_hash();?>" />
																</div>
																<button class="btn ripple btn-main-primary btn-block" type="submit">Reset Password</button>
															</form>
														</div>
													</div>
													<div class="main-signup-footer mg-t-20">
														<p>Already have an account? <a href="<?= base_url('admin/login')?>">Sign In</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- End -->
							</div>
						</div><!-- End -->
					</div>
				</div>

			</div>
		</div>
		
		<!-- End Page -->
<?php include('include/script.php');?>
