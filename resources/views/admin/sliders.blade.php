@include('admin/head');
<body class="main-body app sidebar-mini">
   <!-- Loader -->
   <div id="global-loader">
      <img src="{{asset('backend/img/loader.svg')}}" class="loader-img" alt="Loader">
   </div>
   <!-- /Loader -->
   <!-- Page -->
   <div class="page">
      <!-- main-sidebar -->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      @include('admin/sidebar');
      <!-- main-sidebar -->
      <!-- /main-header -->
      <!-- container -->
      <div class="container-fluid">
         <!-- breadcrumb -->
         <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
               <div class="d-flex">
                  <h4 class="content-title mb-0 my-auto">Home</h4>
                  <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Sliders</span>
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
                        <h4 class="card-title mg-b-0">Sliders</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                     </div>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i></button>
                     <!-- Modal -->
                     <div class="modal fade" id="createModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Add Slider</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                              </div>
                             
                              <form action="{{url('admin/add_slider')}}" method="POST" enctype="multipart/form-data">
                                 <div class="modal-body">
                                    <div class="form-group">
                                       @csrf
                                       <label>Title</label>
                                       <input type="text" name="title" class="form-control" placeholder="Title" required/>
                                    </div>
                                    <div class="form-group">
                                       <label>Description</label>
                                       <textarea class="form-control" name="desc" ></textarea>
                                       <input type="hidden" name="id" value="" />
                                    </div>
                                    <div class="form-group">
                                       <label>Upload Image</label>
                                       <input type="file" name="image" class="form-control"/>
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
                     
                     <div class="table-responsive">
                     @if(session('message'))
                              <div class="alert alert-{{session('class')}}">{{session('message')}}</div>
                              @else()
                              <div class="alert alert-{{session('class')}}">{{session('message')}}</div>
                              @endif
                        <table id="example" class="table key-buttons text-md-nowrap dataTable no-footer dtr-inline">
                           <thead>
                              <tr>
                                 <th class="border-bottom-0">#</th>
                                 <th class="border-bottom-0">Title</th>
                                 <th class="border-bottom-0">Image</th>
                                 <th class="border-bottom-0">Description</th>
                                 <th class="border-bottom-0">Date</th>
                                 <th class="border-bottom-0">Action</th>
                              </tr>
                           </thead>
                           <tbody class="data">
                              <?php $i = '1';?>
                              @foreach($slider as $s)

                              <tr>
                                 <td>{{$i++}}</td>
                                 <td>{{$s->title}}</td>
                                 <td><img src="{{asset('uploads/'.$s->image)}}" width="100px"/></td>
                                 <td><?= html_entity_decode($s->desc) ?></td>
                                 <td>{{date('d F Y, h:i A', strtotime($s->created_at))}}</td>
                                 <td>
                                 <div class='btn btn-success' data-toggle="modal" data-target="#editmodal_{{$s->id}}"><i class='fa fa-edit'></i></div>
                                    
                                    <?php 
                                       $id = base64_encode($s->id);
                                       $table = base64_encode('slider');
                                       ?>
                                    <a href="{{url('admin/delete/'.base64_encode($s->id).'/'.$table)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                 </td>
                                 <div class="modal fade" id="editmodal_{{$s->id}}" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Edit Slider</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                          </button>
                                       </div>
                                       <form action="{{url('admin/add_slider')}}" method="POST" enctype="multipart/form-data">
                                          <div class="modal-body">
                                             <div class="form-group">
                                                @csrf
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{$s->title}}" required/>
                                             </div>
                                             <div class="form-group">
                                                <label>Upload Image</label><br>
                                                @if($s->image)
                                                <img src="{{url('uploads/'.$s->image)}}" width="100px"/>
                                                @endif
                                                <input type="hidden" name="id" value="{{$s->id}}" />
                                                <input type="file" name="image" class="form-control"/>
                                             </div>
                                             <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="desc" id="editor_{{$s->id}}">{{$s->desc}}</textarea>
                                                </div>
                                                <script>
                                                ClassicEditor
                                                        .create( document.querySelector( '#editor_{{$s->id}}' ) )
                                                        .then( editor => {
                                                                console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                                console.error( error );
                                                        } );
                                        </script>
                                          </div>
                                          <div class="modal-footer">
                                             <input type="submit" class="btn btn-primary" value="Update">
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
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
<script>
        CKEDITOR.replace( 'desc' );
</script>
@include('admin/footer');
@include('admin/script');
