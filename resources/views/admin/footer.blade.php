
  <div class="modal fade" id="createModals" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form action="{{url('admin/change_password')}}" method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                @csrf
                                                <label>New Password</label>
                                                <input type="text" class="form-control" placeholder="New Password" name="password" id="password">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="text" class="form-control" placeholder="Confirm Password" name="conf" id="conf">
                                            </div> -->
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" id="submit" class="btn btn-primary" value="Change Password">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
<!-- Footer opened -->
<div class="main-footer ht-40">
    <div class="container-fluid pd-t-0-f ht-100p">
        <span>Copyright © 2022 <a href="#">Printing</a>. Designed by RV. All rights reserved.</span>
    </div>
</div>
<!-- Footer closed -->
</div>
<!-- End Page -->

        <!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
<script>
   
//     $("#submit").click(function() 
// {
// var password= $('#password').val();
// var conf= $('#conf').val();
// if(password == conf)
// {
//     $.ajaxSetup({
//           headers: {
//               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//           }
//     });
//     jQuery.ajax({
//                 type: "POST",
//                 url: "{{url('admin/change_password')}}",
//                 dataType: 'html',
//                 data: {password: password},
//                 success: function(response)
//                 {
//                     if(response==1)
//                     {
//                         alert('Password Changed Succesfully');
//                         $('#createModals').modal('hide'); //hiding modal
//                     }
//                     else
//                     {
//                         alert('Something Went Wrong');
//                     }
                    
//                 },
//                 error:function()
//                 {
//                 alert('Something Went wrong!! PLease Try Again');	
//                 }
//                 });
//         }
//         else
//         {
//             alert('Password & Confirm Password Should be Matched');
//         }
//     });
</script>