@extends('frontend.layouts')
@section('content')

<style>
.mm56 {
    text-align: center;
    border: 3px solid #39b54a;
    padding: 20px;
    border-radius: 20px;
    height: 510px;
}
.elementor-31 .elementor-element.elementor-element-dc9420a {
    padding: 50px 0px 80px 0px;
}
.elementor-31 .elementor-element.elementor-element-c449022:not(.elementor-motion-effects-element-type-background), .elementor-31 .elementor-element.elementor-element-c449022 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
    background-color: #ffffff!important;
}
.slider-form {
    box-shadow: 1rem 1rem rgb(186 186 186 / 20%);
    background-color: rgba(255,255,255, .9);
    border-radius:20px!important;
    color: gray;
    margin: 0px auto;
    padding: 50px 10px 50px!important;
    width: 100%;
    border: 1px solid #d1d1d1;
    border-bottom: 3px solid #0a5386;
}
.slider-form .form-group {
    margin-bottom: 50px;
}

.sbmit {
    color: #fff !important;
    background-color: #177abf !important;
    display: inline-block;
    font-weight: 400;
    border-radius: 30px 30px 30px 30px !important;
    text-align: center;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    width: 100%;
    margin-top: 30px;
}


.elementor-kit-275 input:not([type="button"]):not([type="submit"]), .elementor-kit-275 textarea, .elementor-kit-275 .elementor-field-textual {
    line-height: var(--e-global-typography-text-line-height);
    color: #555;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #ddd;
    padding: 7px 7px 7px 7px;
    border-radius: 20px!important;
}
.slider-form .form-group select {
    line-height: var(--e-global-typography-text-line-height);
    color: #555;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #ddd;
    padding: 7px 7px 7px 7px;
    border-radius: 20px!important;
}
.elementor-31 .elementor-element.elementor-element-430b65c {
    transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
    padding: 30px 0px 50px 0px!important;
}
</style>
	
	
	<div data-elementor-type="wp-page" data-elementor-id="31" class="elementor elementor-31">
		<div class="elementor-inner">
			<div class="elementor-section-wrap">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-c449022 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c449022" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image:url({{asset('frontend/')}}/cdn-hcngh.nitrocdn.com/img/lgb.jpg); background-size:cover;);">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-row">
						    			<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-39bea01" data-id="39bea01" data-element_type="column">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-de28304 elementor-widget elementor-widget-heading" data-id="de28304" data-element_type="widget" data-widget_type="heading.default" style="margin-bottom:0px;">
											<div class="elementor-widget-container">
											    
											    <h2 class="elementor-heading-title elementor-size-default" style="    font-size: 45px!important;
    margin-bottom: 7px;
    font-weight: 800!important;
    color: #39b54a;">Welcome to ProMunim –</h2> 
												<h2 class="elementor-heading-title elementor-size-default" style="color: #39b54a;">ProMunim Of India</h2> </div>
												<p style="color: #0f75bc; font-size: 30px!important;
    font-weight: 600!important;">Simplifying Your Accounting</p>
										</div>
										<div class="elementor-element elementor-element-fde52a8 elementor-widget elementor-widget-text-editor" data-id="fde52a8" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<div class="elementor-text-editor elementor-clearfix">
													<p style="color: #000; font-size: 16px!important;"> Business Financial Planning Accounts | Accounting Tax Planning |<br> Investment Advisory | Business Advisory Capital Management |<br> Financial Planning </p>
												</div>
											</div>
										</div>
									
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c662f83" data-id="c662f83" data-element_type="column">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-5d72368 elementor-widget elementor-widget-image" data-id="5d72368" data-element_type="widget" data-widget_type="image.default">
											<div class="elementor-widget-container">
											<div class="slider-form">
                                <form action="https://shiftingmozo.com/promunim/signup" method="POST">
                 
            
                     <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                           <input type="tel" id="mobile" name="mobile" maxlength="15" minlength="10" placeholder="OTP" required="">
                        </div>
                        <div class="mobile_error"></div>
                     </div>
                     
                         <div class="col-md-4">
                        <div class="form-group">
                         <button type="submit" class="sbmit">
                       OTP
                        </button>
                        </div>
                        <div class="mobile_error"></div>
                     </div>
                     </div>
                              <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                             <p>Get Directly </p>
                        </div>
                        
                     </div>
                     
                         <div class="col-md-6">
                        <div class="form-group">
                <select> 
                <option>Overview </option>
                
                
                </select>
                        </div>
                      
                     </div>
                     </div>
 
                     <div class="col-md-12 btnz">
                        <button type="submit" class="sbmit">
                        Submit
                        </button>
                     </div>
                
                </form> 
            </div>
											</div>
										</div>
									</div>
								</div>
							</div>
				
						</div>
					</div>
				</section>
		<section class="elementor-section elementor-top-section elementor-element elementor-element-430b65c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="430b65c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default" style="    box-shadow: 5px 5px 20px 7px #dcdcdc;
    padding: 20px;
    border-radius: 20px">
						<div class="elementor-row">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6e5faf0" data-id="6e5faf0" data-element_type="column">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
								
							
									<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-f8d919b elementor-widget elementor-widget-heading" data-id="f8d919b" data-element_type="widget" data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default" style="font-size: 20px!important;
    color: #39b54a;
    margin-left: 40px;">Security Details:</h2> </div>
										</div>
										<div class="elementor-element elementor-element-6810b56 elementor-widget elementor-widget-text-editor" data-id="6810b56" data-element_type="widget" data-widget_type="text-editor.default">
											<div class="elementor-widget-container">
												<div class="elementor-text-editor elementor-clearfix">
																																<ul>
																			<li>Never Provide your User ID or password ro any one on phone or in response to a mall.</li>
<li>Verify the site's security certificate by clicking on the padlock icon of your internet browser.</li>
<li>Do not enter login or other sensitive information in any pop up window.</li>
<li>Never provide your User ID or password to any one on phone or in response to a mall.</li>
<li>Verify the site's security certificate by clicking on the padlock icon of your internet browser.</li>
<li>Do not enter login or other sensitive information in any pop up window</li>


	</ul>	
													</div>
											</div>
										</div>
									</div>
								</div>
							
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>


@endsection