@extends('frontend.layouts')
@section('content')
<div class="reg-1">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div id="mess">
               </div>
               <div class="row">
                  <div class="col-md-12 rg-3">
                     <h3><span class="bld-2">Welcome Back !</span></h3>
                     <p>Share your registered mobile Number to resume your
                        application
                     </p>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input type="tel" id="mobile" name="mobile" placeholder="9 8 7 6 5 4 3 2 1 0" /> 
                     </div>
                  </div>
                  <div class="col-md-12 btnz"> <button id="mobile_verify" name="mobile_verify" class="sbmit">
                     Next
                     </button> 
                  </div>
                  <div class="col-md-12 aut">
                     <p class="ald">New Customer ? <a href="#">Click here</a> </p>
                  </div>
                  <div class="col-md-12">
                     <div class="hpl">
                        <p>You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294 or 020 6749 1919</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection