@include('admin/head');

<body class="main-body">
		<!-- Page -->
		<div class="error-page1  bg-light">
			<div class="page">

				<div class="container-fluid">
					<div class="row no-gutter">
						<!-- The image half -->
						<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
							<div class="row wd-100p mx-auto text-center">
								<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
									<img src="" style="width:100px" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" style="width:85%;" alt="logo">
								</div>
							</div>
						</div>
						<!-- The content half -->
						<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
							<div class="login d-flex align-items-center py-2">
								<!-- Demo content-->
								<div class="container p-0">
									<div class="row">
										<div class="col-md-10 col-lg-10 col-xl-9 mx-auto" style="padding-top: 50px;">
											<div class="card-sigin">
												<div class="mb-5 d-flex"> <a href="javascript:void(0)"><img src="" class="sign-favicon" style="width:100px;" alt="logo"></a></div>
												<div class="card-sigin">
													<div class="main-signup-header">
														<h2>Welcome back!</h2>
														<h5 class="font-weight-semibold mb-4">Please sign in to continue.</h5>
														@if(session('message'))
															<div class="alert alert-{{session('class')}}">{{session('message')}}</div>
														@else()
														<div class="alert alert-{{session('class')}}">{{session('message')}}</div>
														@endif
														<form action="{{url('/admin/login')}}" method="POST">

															<div sclass="form-group">
																@csrf;
																<label>Email</label> <input class="form-control" placeholder="Enter your email" type="email" name="email">
																{{ $errors->first('email') }}
															</div>
															<div class="form-group">
																<label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" name="password">
																{{ $errors->first('password') }}
															</div>
                                                            <button class="btn btn-main-primary btn-block">Sign In</button>
														</form>
														<div class="main-signin-footer mt-5">
															<p><a href="">Forgot password?</a></p>
															<!-- <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p> -->
														</div>
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
@include('admin/script');
