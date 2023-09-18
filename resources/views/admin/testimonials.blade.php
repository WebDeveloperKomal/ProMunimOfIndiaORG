@include('admin/head')
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
      @include('admin/sidebar')

      <!-- main-sidebar -->
      <!-- /main-header -->
      <!-- container -->
      <div class="container-fluid">
         <!-- breadcrumb -->
         <div class="breadcrumb-header justify-content-between">
            <div class="my-auto">
               <div class="d-flex">
                  <h4 class="content-title mb-0 my-auto">Home</h4>
                  <span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Testimonials</span>
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
                        <h4 class="card-title mg-b-0">Testimonials</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                     </div>
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i></button>
                     <!-- Modal -->
                     <div class="modal fade" id="createModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLongTitle">Add Testimonials</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">×</span>
                                 </button>
                              </div>
                              <form action="{{url('admin/save_testimonials')}}" method="POST" enctype="multipart/form-data">
                                 <div class="modal-body">
                                    @csrf
                                    <div class="form-group">
                                       <label>Title</label>
                                       <input type="text" name="name" class="form-control" placeholder="Title" required/>
                                    </div>
                                    <div class="form-group">
                                       <label>Designation</label>
                                       <input type="text" name="designation" class="form-control" placeholder="Designation" required/>
                                    </div>
                                    <div class="form-group">
                                       <label>Comment</label>
                                       <textarea class="form-control" name="comment"></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label>Upload Image</label>
                                       <input type="file" class="form-control" name="image" />
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
                        <table id="example" class="table key-buttons text-md-nowrap dataTable no-footer dtr-inline">
                           <thead>
                              <tr>
                                 <th class="border-bottom-0">#</th>
                                 <th class="border-bottom-0">Name</th>
                                 <th class="border-bottom-0">Image</th>
                                 <th class="border-bottom-0">Date</th>
                                 <th class="border-bottom-0">Action</th>
                              </tr>
                           </thead>
                           <tbody class="data">
                            <?php $i='1';?>
                            @foreach($testimonials as $row)
                              <tr>
                                 <td>{{$i;}}</td>
                                 <td>{{$row->name}},({{$row->designation}})</td>
                                 <td><img src="{{url('uploads/'.$row->image)}}" style="width:100px"/></td>
                                 <td>{{date('d F Y, h:i A', strtotime($row->created_at))}}</td>
                                 <td>
                                    <div class='btn btn-success' data-toggle="modal" data-target="#editmodal_<?= $row->id?>"><i class='fa fa-edit'></i></div>
                                    <?php 
                                       $ids = $row->id;
                                       $id = base64_encode($ids);
                                       $table = base64_encode('testimonials');
                                       ?>
                                    <a href="{{url('admin/delete/'.$id.'/'.$table)}}" class='btn btn-danger'><i class='fa fa-trash'></i></a>
                                 </td>
                              </tr>
                              <div class="modal fade" id="editmodal_{{$row->id}}" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Edit Testimonials</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                          </button>
                                       </div>
                                       <form action="{{url('admin/save_testimonials')}}" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Title</label>
                                            @csrf
                                            <input type="text" name="name" class="form-control" placeholder="Title" value="{{$row->name}}" required/>
                                            <input type="hidden" name="id" value="{{$row->id}}" />    
                                             </div>
                                             <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" name="designation" class="form-control" placeholder="Designation" value="{{$row->designation}}" required/>
                                             </div>
                                             <div class="form-group">
                                                <label>Comment</label>
                                                <textarea class="form-control" name="comment" id="editor_{{$row->id}}"><?= $row->id?></textarea>
                                             </div>
                                            <div class="form-group">
                                            <label>Upload Image</label><br>
                                            @if($row->image)
                                            <img src="{{asset('uploads/'.$row->image)}}" style="width:100px"/>
                                            @endif
                                            <input type="file" class="form-control" name="image" />
                                            </div>
                                        </div>
                                        <script>
                                                ClassicEditor
                                                        .create( document.querySelector( '#editor_{{$row->id}}' ) )
                                                        .then( editor => {
                                                                console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                                console.error( error );
                                                        } );
                                        </script>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                    </form>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                           </tbody >
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>
        CKEDITOR.replace( 'comment' );
</script>
@include('admin/footer')
@include('admin/script')
