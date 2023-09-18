@extends('frontend.layouts')
@section('content')
<style>
.fyt p {
    font-size: 12px;
    text-align: center;
}

.rg-3 h3 {
    color: #808080;
    padding-bottom: 0px!important;
    font-family: 'Lexend Deca';
    font-weight: 400;
    line-height:40px;
    margin-bottom:0px;
    padding-top:0px;
}

.slider-form {
    box-shadow: 5px 4px 22px 0px rgb(184 184 184)!important;
    background-color: rgba(255,255,255, .9);
    color: gray;
    margin: 0px auto;
    padding: 50px 50px 50px;
    width: 100%;
    border: 3px solid #d5d5d5!important;
    border-bottom: 3px solid #0a5386!important;
    border-radius: 20px!important;
}

.elementor-kit-275 input:not([type="button"]):not([type="submit"]), .elementor-kit-275 textarea, .elementor-kit-275 .elementor-field-textual {
    line-height: var(--e-global-typography-text-line-height);
    color: #555;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #ddd;
    padding: 10px 10px 10px 10px;
    border-radius: 20px;
}
.slider-form .form-group select {
    line-height: var(--e-global-typography-text-line-height);
    color: #555;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #ddd;
    padding: 10px 10px 10px 10px!important;
    border-radius: 20px;
}
.fyt {

    border-radius: 20px!important;
}

</style>


<div class="reg-1">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
                @if(session('message'))
                <div class="alert alert-{{session('class')}}">{{session('message')}}</div>
                @endif
               <form method="POST" action="{{url('verify')}}">
                  <div class="row">
                     <div class="col-md-12 rg-3">
                        <h3 style="font-size: 23px!important;
    margin-bottom: 20px;"><span class="bld-2">Verify your Mobile Number <span style="color:#39b54a;">9876543210 </span> (change)</span></h3>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           @csrf
                           <input type="text" maxlength="1" id="otp1" name="otp1" placeholder=""/>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                        <input type="text" maxlength="1" id="otp2" name="otp2" data-next="otp2" placeholder=""/>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                        <input type="text" maxlength="1" id="otp3" name="otp3" data-next="otp4" data-previous="otp2" placeholder=""/>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                        <input type="text" maxlength="1" id="otp4" name="otp4" data-next="otp5" data-previous="otp4" placeholder=""/>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                        <input type="text" maxlength="1" id="otp5" name="otp5" data-next="otp6" data-previous="otp4" placeholder=""/>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                        <input type="text" maxlength="1" id="otp6" name="otp6" data-previous="otp5" placeholder=""/>
                        <input type="hidden" name="user_id" id="user_id" value="{{session('id')}}"/>
                        </div>
                     </div>
                     <div class="col-md-12 btnz">
                        <button type="submit" class="sbmit">
                        Verify
                        </button>
                     </div>
                     <div class="col-md-8 cvs" style="margin:0 auto;">
                        <p>Didn't receive an OTP? 
                           <a href="#">Resend OTP</a>
                        </p>
                     </div>
                  </div>
               </form>
            </div>
            <div class="row" style="padding: 60px 5px;">
               <div class="col-md-6">
                  <div class="fyt">
                     <h3>FREE</h3>
                     <p>File your <br>GST Returns for free*</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="fyt">
                     <h3>90 minutes</h3>
                     <p>Open an Business Financial Planning
                        Account and start your business accounting
                        and Tax Planning in 90 minutes
                     </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="hpl" style="text-align:center;">
                     <p style="text-align:center;">You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294 or 020 6749 1919</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection