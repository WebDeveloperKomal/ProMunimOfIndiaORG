@extends('frontend.layouts')
@section('content')

<style>
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


</style>



<div class="reg-1">
   <div class="container">
      <div class="row efft-3">
          
          
              <div class="col-md-12 rg-3">
                        <h3 style="text-align:center;"><span class="bld-2">Welcome to <br><span style="color:#39b54a;">ProMunim </span> Accounting Simplified </span></h3>
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-a0dd7f3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a0dd7f3" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-row">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c6d2e25" data-id="c6d2e25" data-element_type="column">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-c0fc613 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="c0fc613" data-element_type="widget" data-widget_type="divider.default">
											<div class="elementor-widget-container">
												<div class="elementor-divider" style="border:1px solid #ceffd4;"> <span class="elementor-divider-separator" > </span> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
                        <h6 style="text-align:center;">Register now to get free various accounting reports  </h6>
                     </div>
          <br><br>
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
                @if(session()->has('message'))
                <div class="alert alert-{{session('class')}}">{{session('message')}}</div>
                @endif
                <form action="{{url('signup')}}" method="POST">
                  <div class="row">
                     <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                           <input type="text" id="business_name" name="business_name" placeholder="Business Name" required/>
                        </div>
                        <div class="business_error"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="text" id="owner_name" name="owner_name" placeholder="Owner Name" required/>
                        </div>
                        <div class="owner_error"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="tel" id="mobile" name="mobile" maxlength="15" minlength="10"  placeholder="Mobile Number" required/>
                        </div>
                        <div class="mobile_error"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <input type="email" id="email" name="email" placeholder="Email ID" required/>
                        </div>
                        <div class="email_error"></div>
                     </div>
                     <div class="col-md-6 ">
                        <div class="form-group">
                           <select name="state" id="state" required>
                              <option value="">Select State</option>
                              <option value="Andhra Pradesh">Andhra Pradesh</option>
                              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                              <option value="Assam">Assam</option>
                           </select>
                        </div>
                        <div class="state_error"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <select name="city" id="city" required>
                              <option  value="">Select City</option>
                              <option value="Bangalore">Bangalore</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Mumbai">Mumbai</option>
                           </select>
                        </div>
                        <div class="city_error"></div>
                     </div>
                     <div class="col-md-12 btnz">
                        <button type="submit" class="sbmit">
                        Register Now
                        </button>
                     </div>
                     <div class="col-md-12 cvs">
                        <a href="{{url('resume_application')}}">Resume Application?</a>
                     </div>
                  </div>
                </form> 
            </div>
         </div>
      </div>
   </div>
</div>
@endsection