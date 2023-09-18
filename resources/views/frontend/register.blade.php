@extends('frontend.layouts')
@section('content')
<div class="reg-1">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <form>
                  <div class="row">
                     <div class="col-md-12 rg-3">
                        <h3>Welcome to <br><span class="bld-1">IBG FINCON</span> <br><span class="bld-2">Business Financial Planning</span></h3>
                     </div>
                     <div class="col-md-12 btnz" style="text-align:center;margin-bottom:30px;"> 
                        <label for="name">Existing Customer ?</label>
                        <a href="{{url('login')}}" class="sbmit">
                        Login Here
                        </a>
                     </div>
                     <div class="col-md-12 btnz" style="text-align:center;margin-bottom:30px;"> 
                        <label for="name">New Registeration ?</label>
                        <a href="{{url('signup')}}" class="sbmit">
                        Register Now
                        </a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-2"></div>
      </div>
   </div>
</div>
@endsection