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
									<img src="<?= base_url('assets/')?>img/media/forgot.png" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
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
											<div class="main-card-signin d-md-flex bg-white">
												<div class="wd-100p">
													<div class="main-signin-header">
														<h2>Forgot Password!</h2>
														<h4>Please Enter Your Email</h4>
														<?php if($this->session->flashdata('success')):?>
                                                            <div class="<?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('success')?></div>
                                                            <?php else:?>
                                                            <div class="<?= $this->session->flashdata('msg_class')?>"><?= $this->session->flashdata('error')?></div>
                                                            <?php endif?>
														<form action="<?= base_url('admin/forgot_password')?>" method="POST">
															<div class="form-group">
																<label>Email</label> <input class="form-control" placeholder="Enter your email" type="email" name="email">
															</div>
                                                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?=$this->security->get_csrf_hash();?>" />
															<button class="btn btn-main-primary btn-block" type="submit">Send</button>
														</form>
													</div>
													<div class="main-signup-footer mg-t-20">
														<p>Forget it, <a href="<?= base_url('admin/signin')?>"> Send me back</a> to the sign in screen.</p>
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
		<?php include('include/script.php')?>