@include('admin/head')

    <body class="main-body app sidebar-mini">
        <!-- Loader -->
        <div id="global-loader">
            <img src="{{asset('/backend')}}/img/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /Loader -->

        <!-- Page -->
        <div class="page">

            		<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            @include('admin/sidebar')			<!-- main-sidebar -->
				<!-- /main-header -->
                <!-- container -->
				<div class="container-fluid">

                    	

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Home</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Contact Enquiry</span>
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
										<h4 class="card-title mg-b-0">Contact Enquiry</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
                                     <!-- Modal -->
                                </div>
								<div class="card-body">
                                    <div class="success"></div>
									<div class="table-responsive">
										<table id="example" class="table key-buttons text-md-nowrap dataTable no-footer dtr-inline">
											<thead>
												<tr>
													<th class="border-bottom-0">#</th>
													<th class="border-bottom-0">Name</th>
                                                    <th class="border-bottom-0">Email</th>
                                                    <th class="border-bottom-0">Phone</th>
													<th class="border-bottom-0">Subject</th>
                                                    <th class="border-bottom-0">Message</th>
                                                    <th class="border-bottom-0">Date</th>
                                                    <th class="border-bottom-0">Action</th>
												</tr>
											</thead>
											<tbody class="data">
                                                <?php 
                                                $i=1;
                                                ?>
                                                @foreach($enquiry as $e)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$e->name}}</td>
                                                    <td>{{$e->email}}</td>
                                                    <td>{{$e->phone}}</td>
													<td>{{$e->subject}}</td>
                                                    <td>{{$e->message}}</td>
                                                    <td>{{date('d F Y, h:i A', strtotime($e->created_at))}}</td>
                                                    <td>
                                                    <?php 
                                                    $table = base64_encode('enquiry');
                                                    ?>
                                                    
                                                    <a href="{{url('admin/delete/'.base64_encode($e->id).'/'.$table)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a></td>
                                                </tr>
                                                @endforeach
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
@include('admin/footer')
@include('admin/script')


















