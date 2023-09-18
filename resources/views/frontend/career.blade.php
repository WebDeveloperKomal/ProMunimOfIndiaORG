@extends('frontend.layouts')
@section('content')
	
	
		<style>
		  .box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    z-index: 1111111;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 70%;
    position: relative;
    transition: all 5s ease-in-out;
}
.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}

.slider-form .form-group {
    margin-bottom: 0px!important;
}




.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}  
input[type=date], input[type=email], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=url], select, textarea {
    width: 47%;
    border: 1px solid #666;
    border-radius: 3px;
    padding: 0.5rem 1rem;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    float: left;
    margin: 10px;
}

.slider-form {
    box-shadow: 1rem 1rem rgb(186 186 186 / 20%);
    background-color: rgba(255,255,255, .9);
    border-radius: 3px;
    color: gray;
    margin: 0px auto;
    padding: 0px!important;
    width: 100%;
    border: 1px solid #d1d1d1;
    border-bottom: 3px solid #0a5386;
}
</style>	
	
	
	
<div data-elementor-type="single" data-elementor-id="83" class="elementor elementor-83 elementor-location-single post-544 page type-page status-publish has-post-thumbnail hentry">
		<div class="elementor-section-wrap">
			<section class="elementor-section elementor-top-section elementor-element elementor-element-d9ad222 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d9ad222" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-row">
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8a335c7" data-id="8a335c7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-column-wrap elementor-element-populated">
								<div class="elementor-widget-wrap">
									<div class="elementor-element elementor-element-24e3c1c animated-slow elementor-invisible elementor-widget elementor-widget-image" data-id="24e3c1c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:&quot;500&quot;}" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<div class="elementor-image"> 
											<img width="800" height="800" class="attachment-large size-large" alt="Dentist woman holding instruments examining teeth" loading="lazy" srcset="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/QBtDIEGjrgZWEaMPECKJquYEBrhRFDBx/assets/static/optimized/rev-159408b/wp-content/uploads/sites/701/2022/04/shutterstock_1218522049-min.jpg" sizes="(max-width: 800px) 100vw, 800px" src="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/QBtDIEGjrgZWEaMPECKJquYEBrhRFDBx/assets/static/optimized/rev-159408b/wp-content/uploads/sites/701/2022/04/shutterstock_1218522049-min.jpg" /> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e9bcf14" data-id="e9bcf14" data-element_type="column">
							<div class="elementor-column-wrap elementor-element-populated">
								<div class="elementor-widget-wrap">
									<div class="elementor-element elementor-element-ffbf449 elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading" data-id="ffbf449" data-element_type="widget" data-widget_type="theme-post-title.default">
										<div class="elementor-widget-container">
											<h1 class="elementor-heading-title elementor-size-default">Join the ProMunim Team - Elevate Your Career!</h1></div>
									</div>
									<div class="elementor-element elementor-element-b825361 elementor-widget elementor-widget-text-editor" data-id="b825361" data-element_type="widget" data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<div class="elementor-text-editor elementor-clearfix">
												<p><span style="font-weight: 400;">We offer a dynamic work environment that encourages personal and professional growth, along with the resources you need to succeed. Work on challenging projects that require creativity, problem-solving skills, and collaboration with colleagues
												<br><br> Explore the opportunities available at ProMunim and take your career to the next level!</p>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-918e302 elementor-tablet-align-center elementor-widget elementor-widget-button" data-id="918e302" data-element_type="widget" data-widget_type="button.default">
										<div class="elementor-widget-container">
											<div class="elementor-button-wrapper">
												<a href="contact.php" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Contact Us</span> </span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="elementor-section elementor-top-section elementor-element elementor-element-dfa3b29 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dfa3b29" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-row">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c8fc1f4" data-id="c8fc1f4" data-element_type="column">
							<div class="elementor-column-wrap elementor-element-populated">
								<div class="elementor-widget-wrap">
									<div class="elementor-element elementor-element-ec94c25 elementor-widget elementor-widget-theme-post-content" data-id="ec94c25" data-element_type="widget" data-widget_type="theme-post-content.default">
										<div class="elementor-widget-container">
											<style>
											.elementor-544 .elementor-element.elementor-element-ca6473d > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap {
												align-content: center;
												align-items: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-ca6473d {
												padding: 0px 0px 0px 0px;
											}
											
											.elementor-544 .elementor-element.elementor-element-136bbec > .elementor-widget-container {
												margin: 0px 0px -20px 0px;
											}
											
											.elementor-544 .elementor-element.elementor-element-1fbf230 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
												padding-bottom: calc(8px / 2);
											}
											
											.elementor-544 .elementor-element.elementor-element-1fbf230 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
												margin-top: calc(8px / 2);
											}
											
											.elementor-544 .elementor-element.elementor-element-1fbf230 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
												margin-right: calc(8px / 2);
												margin-left: calc(8px / 2);
											}
											
											.elementor-544 .elementor-element.elementor-element-1fbf230 .elementor-icon-list-items.elementor-inline-items {
												margin-right: calc(-8px / 2);
												margin-left: calc(-8px / 2);
											}
											
											body.rtl .elementor-544 .elementor-element.elementor-element-1fbf230 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
												left: calc(-8px / 2);
											}
											
											body:not(.rtl) .elementor-544 .elementor-element.elementor-element-1fbf230 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
												right: calc(-8px / 2);
											}
											
											.elementor-544 .elementor-element.elementor-element-1fbf230 .elementor-icon-list-icon i {
												color: var(--e-global-color-primary);
											}
											
											.elementor-544 .elementor-element.elementor-element-1fbf230 .elementor-icon-list-icon svg {
												fill: var(--e-global-color-primary);
											}
											
											.elementor-544 .elementor-element.elementor-element-1fbf230 {
												--e-icon-list-icon-size: 14px;
											}
											
											.elementor-544 .elementor-element.elementor-element-4c40cf6 .elementor-button {
												fill: var(--e-global-color-primary);
												color: var(--e-global-color-primary);
												background-color: var(--e-global-color-04b92b5);
												border-style: solid;
												border-width: 2px 2px 2px 2px;
												border-color: var(--e-global-color-primary);
											}
											
											.elementor-544 .elementor-element.elementor-element-4c40cf6 .elementor-button:hover,
											.elementor-544 .elementor-element.elementor-element-4c40cf6 .elementor-button:focus {
												color: var(--e-global-color-04b92b5);
												background-color: var(--e-global-color-primary);
											}
											
											.elementor-544 .elementor-element.elementor-element-4c40cf6 .elementor-button:hover svg,
											.elementor-544 .elementor-element.elementor-element-4c40cf6 .elementor-button:focus svg {
												fill: var(--e-global-color-04b92b5);
											}
											
											.elementor-544 .elementor-element.elementor-element-df39b5d {
												text-align: right;
											}
											
											.elementor-544 .elementor-element.elementor-element-df39b5d img {
												width: 80%;
											}
											
											.elementor-544 .elementor-element.elementor-element-fb69de5:not(.elementor-motion-effects-element-type-background),
											.elementor-544 .elementor-element.elementor-element-fb69de5 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
												background-color: var(--e-global-color-accent);
											}
											
											.elementor-544 .elementor-element.elementor-element-fb69de5,
											.elementor-544 .elementor-element.elementor-element-fb69de5 > .elementor-background-overlay {
												border-radius: 20px 20px 20px 20px;
											}
											
											.elementor-544 .elementor-element.elementor-element-fb69de5 {
												transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
												margin-top: 120px;
												margin-bottom: 120px;
												padding: 55px 55px 55px 55px;
											}
											
											.elementor-544 .elementor-element.elementor-element-fb69de5 > .elementor-background-overlay {
												transition: background .3s, border-radius .3s, opacity .3s;
											}
											
											.elementor-544 .elementor-element.elementor-element-26bc8db {
												text-align: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-26bc8db .elementor-heading-title {
												color: var(--e-global-color-04b92b5);
											}
											
											.elementor-544 .elementor-element.elementor-element-f41b2ca {
												--lottie-container-width: 57%;
											}
											
											.elementor-544 .elementor-element.elementor-element-f41b2ca > .elementor-widget-container {
												margin: 0px 0px -20px 0px;
											}
											
											.elementor-544 .elementor-element.elementor-element-6517ce5 {
												text-align: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-6517ce5 .elementor-heading-title {
												color: var(--e-global-color-text);
											}
											
											.elementor-544 .elementor-element.elementor-element-2dc4308 {
												--lottie-container-width: 57%;
											}
											
											.elementor-544 .elementor-element.elementor-element-2dc4308 > .elementor-widget-container {
												margin: 0px 0px -20px 0px;
											}
											
											.elementor-544 .elementor-element.elementor-element-f732c02 {
												text-align: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-f732c02 .elementor-heading-title {
												color: var(--e-global-color-text);
											}
											
											.elementor-544 .elementor-element.elementor-element-01d51aa {
												--lottie-container-width: 57%;
											}
											
											.elementor-544 .elementor-element.elementor-element-01d51aa > .elementor-widget-container {
												margin: 0px 0px -20px 0px;
											}
											
											.elementor-544 .elementor-element.elementor-element-c8ae8cb {
												text-align: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-c8ae8cb .elementor-heading-title {
												color: var(--e-global-color-text);
											}
											
											.elementor-544 .elementor-element.elementor-element-38d4414 {
												--lottie-container-width: 57%;
											}
											
											.elementor-544 .elementor-element.elementor-element-38d4414 > .elementor-widget-container {
												margin: 0px 0px -20px 0px;
											}
											
											.elementor-544 .elementor-element.elementor-element-729b913 {
												text-align: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-729b913 .elementor-heading-title {
												color: var(--e-global-color-text);
											}
											
											.elementor-544 .elementor-element.elementor-element-1a463c4 > .elementor-container {
												max-width: 900px;
											}
											
											.elementor-544 .elementor-element.elementor-element-1a463c4 > .elementor-container > .elementor-row > .elementor-column > .elementor-column-wrap > .elementor-widget-wrap {
												align-content: center;
												align-items: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-1a463c4:not(.elementor-motion-effects-element-type-background),
											.elementor-544 .elementor-element.elementor-element-1a463c4 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
												background-color: var(--e-global-color-04b92b5);
											}
											
											.elementor-544 .elementor-element.elementor-element-1a463c4 {
												transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
												margin-top: 0px;
												margin-bottom: 0px;
												padding: 100px 0px 100px 0px;
											}
											
											.elementor-544 .elementor-element.elementor-element-1a463c4 > .elementor-background-overlay {
												transition: background .3s, border-radius .3s, opacity .3s;
											}
											
											.elementor-544 .elementor-element.elementor-element-cbdaac9 {
												text-align: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-0aa4956 {
												text-align: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-0aa4956 > .elementor-widget-container {
												margin: 0px 0px -20px 0px;
											}
											
											.elementor-544 .elementor-element.elementor-element-b9e432e .elementor-button {
												fill: var(--e-global-color-primary);
												color: var(--e-global-color-primary);
												background-color: var(--e-global-color-04b92b5);
												border-style: solid;
												border-width: 2px 2px 2px 2px;
												border-color: var(--e-global-color-primary);
											}
											
											.elementor-544 .elementor-element.elementor-element-b9e432e .elementor-button:hover,
											.elementor-544 .elementor-element.elementor-element-b9e432e .elementor-button:focus {
												color: var(--e-global-color-04b92b5);
												background-color: var(--e-global-color-primary);
											}
											
											.elementor-544 .elementor-element.elementor-element-b9e432e .elementor-button:hover svg,
											.elementor-544 .elementor-element.elementor-element-b9e432e .elementor-button:focus svg {
												fill: var(--e-global-color-04b92b5);
											}
											
											.elementor-544 .elementor-element.elementor-element-c1f357b {
												text-align: center;
											}
											
											.elementor-544 .elementor-element.elementor-element-c1f357b > .elementor-widget-container {
												margin: 50px 0px 0px 0px;
											}
											
											@media (max-width:1199px) {
												.elementor-544 .elementor-element.elementor-element-ca6473d {
													padding: 0px 0px 80px 0px;
												}
												.elementor-544 .elementor-element.elementor-element-2417747 > .elementor-element-populated > .elementor-widget-wrap {
													padding: 0px 30px 0px 0px;
												}
												.elementor-bc-flex-widget .elementor-544 .elementor-element.elementor-element-7a3d704.elementor-column .elementor-column-wrap {
													align-items: center;
												}
												.elementor-544 .elementor-element.elementor-element-7a3d704.elementor-column.elementor-element[data-element_type="column"] > .elementor-column-wrap.elementor-element-populated > .elementor-widget-wrap {
													align-content: center;
													align-items: center;
												}
												.elementor-544 .elementor-element.elementor-element-df39b5d img {
													width: 100%;
												}
												.elementor-544 .elementor-element.elementor-element-1a463c4 {
													padding: 60px 40px 60px 40px;
												}
											}
											
											@media (max-width:799px) {
												.elementor-544 .elementor-element.elementor-element-ca6473d {
													padding: 20px 20px 60px 20px;
												}
												.elementor-544 .elementor-element.elementor-element-2417747 > .elementor-element-populated > .elementor-widget-wrap {
													padding: 0px 0px 0px 0px;
												}
												.elementor-544 .elementor-element.elementor-element-efe19ca {
													text-align: left;
												}
												.elementor-544 .elementor-element.elementor-element-136bbec {
													text-align: left;
												}
												.elementor-544 .elementor-element.elementor-element-4c40cf6 > .elementor-widget-container {
													margin: 0px 0px 20px 0px;
												}
												.elementor-544 .elementor-element.elementor-element-7a3d704 > .elementor-element-populated > .elementor-widget-wrap {
													padding: 0px 0px 0px 0px;
												}
												.elementor-544 .elementor-element.elementor-element-fb69de5 {
													margin-top: 0px;
													margin-bottom: 0px;
													padding: 25px 25px 25px 25px;
												}
												.elementor-544 .elementor-element.elementor-element-1a463c4 {
													margin-top: 50px;
													margin-bottom: 0px;
													padding: 30px 20px 30px 20px;
												}
												.elementor-544 .elementor-element.elementor-element-cbdaac9 {
													text-align: left;
												}
												.elementor-544 .elementor-element.elementor-element-0aa4956 {
													text-align: left;
												}
												.elementor-544 .elementor-element.elementor-element-c1f357b {
													text-align: left;
												}
											}
											
											@media (min-width:800px) {
												.elementor-544 .elementor-element.elementor-element-2417747 {
													width: 50%;
												}
												.elementor-544 .elementor-element.elementor-element-7a3d704 {
													width: 50%;
												}
											}
											
											@media (max-width:1199px) and (min-width:800px) {
												.elementor-544 .elementor-element.elementor-element-2417747 {
													width: 65%;
												}
												.elementor-544 .elementor-element.elementor-element-7a3d704 {
													width: 35%;
												}
												.elementor-544 .elementor-element.elementor-element-ef9fb73 {
													width: 100%;
												}
											}
											</style>
											<div data-elementor-type="wp-page" data-elementor-id="544" class="elementor elementor-544">
												<div class="elementor-inner">
													<div class="elementor-section-wrap">
														<section class="elementor-section elementor-top-section elementor-element elementor-element-ca6473d elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ca6473d" data-element_type="section">
															<div class="elementor-container elementor-column-gap-default">
																<div class="elementor-row">
																	<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2417747" data-id="2417747" data-element_type="column">
																		<div class="elementor-column-wrap elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<div class="elementor-element elementor-element-a2bb2ed elementor-widget elementor-widget-heading" data-id="a2bb2ed" data-element_type="widget" data-widget_type="heading.default">
																					<div class="elementor-widget-container">
																						<h5 class="elementor-heading-title elementor-size-default">Exciting Career Opportunities Available at ProMunim</h5> </div>
																				</div>
																				
																				
																				<div class="elementor-element elementor-element-1fbf230 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1fbf230" data-element_type="widget" data-widget_type="icon-list.default">
																					<div class="elementor-widget-container">
																						<ul class="elementor-icon-list-items">
																							
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Zonal ProMunim</span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Regional ProMunim </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Area ProMunim </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Branch ProMunim </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Assistant Branch ProMunim </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Branch Operations ProMunim </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Portfolio Relationship ProMunim </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Client Success ProMunim </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Account Activation ProMunim </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Insurance Coordinators </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Loan Desk Coordinators </span> </li> 
<li class="elementor-icon-list-item"><span class="elementor-icon-list-text">Office ProMunim</span> </li> 

																							
																						</ul>
																					</div>
																				</div>
																				<div class="elementor-element elementor-element-cdbcf16 elementor-widget elementor-widget-button" data-id="4c40cf6" data-element_type="widget" data-widget_type="button.default" style="margin-top:0px;">
																					<div class="elementor-widget-container">
																						<div class="elementor-button-wrapper">
																							<a href="{{url('/candidate_list')}}" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Apply Here</span> </span>
																							</a>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7a3d704" data-id="7a3d704" data-element_type="column">
																		<div class="elementor-column-wrap elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<div class="elementor-element elementor-element-df39b5d elementor-widget elementor-widget-image" data-id="df39b5d" data-element_type="widget" data-widget_type="image.default">
																					<div class="elementor-widget-container">
																						<div class="elementor-image"> <img width="800" height="1200" class="attachment-large size-large" alt="dentist with shiny tooth" loading="lazy" srcset="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/QBtDIEGjrgZWEaMPECKJquYEBrhRFDBx/assets/static/optimized/rev-159408b/wp-content/uploads/sites/701/2022/04/shutterstock_678597022-min.png" sizes="(max-width: 800px) 100vw, 800px" src="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/QBtDIEGjrgZWEaMPECKJquYEBrhRFDBx/assets/static/optimized/rev-159408b/wp-content/uploads/sites/701/2022/04/shutterstock_678597022-min.jpg" /> </div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
														<br>
														
														<section class="elementor-section elementor-top-section elementor-element elementor-element-a8f0e8f elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a8f0e8f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="margin-top:50px;">
						<div class="elementor-element elementor-element-26bc8db elementor-widget elementor-widget-heading" data-id="26bc8db" data-element_type="widget" data-widget_type="heading.default">
																					<div class="elementor-widget-container">
																						<h2 class="elementor-heading-title elementor-size-default" style="color:#0a5386;">Apply today to join our team of dedicated professionals at ProMunim! <br><br> <span style="color:#39b54a;">Why ProMunim?</span> </h2> </div>
																				</div>
					<div class="elementor-container elementor-column-gap-default">
						
				<div class="elementor-row">
		
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3889244" data-id="3889244" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-89e9286 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="89e9286" data-element_type="widget" data-widget_type="image-box.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-image-box-wrapper">
																			<figure class="elementor-image-box-img">
																				<a href="#"><img width="512" height="289" class="elementor-animation-grow attachment-full size-full" alt="teeth icon" loading="lazy" src="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/img/n1.png" style="width:100%;"></a>
																			</figure>
																			<div class="elementor-image-box-content">
																				<h4 class="elementor-image-box-title"><a href="#">
Welcoming and Inclusive Environment</a></h4>
																				</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-022503f" data-id="022503f" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-51f159f elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="51f159f" data-element_type="widget" data-widget_type="image-box.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-image-box-wrapper">
																			<figure class="elementor-image-box-img">
																				<a href="patient-portal.php"><img width="512" height="303" class="elementor-animation-grow attachment-full size-full" alt="lock icon" loading="lazy" src="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/img/n2.png" style="width:100%;"></a>
																			</figure>
																			<div class="elementor-image-box-content">
																				<h4 class="elementor-image-box-title"><a href="#">Paid Time Off
</a></h4>
																				</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a269c94" data-id="a269c94" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-d48239b elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="d48239b" data-element_type="widget" data-widget_type="image-box.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-image-box-wrapper">
																			<figure class="elementor-image-box-img">
																				<a href="#" target="_blank" rel="noopener"><img width="554" height="358" class="elementor-animation-grow attachment-full size-full" alt="bbb-a-plus logo" loading="lazy" src="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/img/n3.png" style="width:100%;"></a>
																			</figure>
																			<div class="elementor-image-box-content">
																				<h4 class="elementor-image-box-title"><a href="#" target="_blank" rel="noopener">Health Insurance Benefits</a></h4>
																				</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-527f946" data-id="527f946" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-1c1db90 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="1c1db90" data-element_type="widget" data-widget_type="image-box.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-image-box-wrapper">
																			<figure class="elementor-image-box-img">
																				<a href="career.php"><img width="512" height="348" class="elementor-animation-grow attachment-full size-full" alt="love-heart-outline icon" loading="lazy" src="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/img/n4.png" style="width:100%;"></a>
																			</figure>
																			<div class="elementor-image-box-content">
																				<h4 class="elementor-image-box-title"><a href="#">Lucrative Performance-Based Incentives & Flexible Work Opportunities</a></h4>
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
														
														
													
														<section class="elementor-section elementor-top-section elementor-element elementor-element-1a463c4 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a463c4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
															<div class="elementor-container elementor-column-gap-default">
																<div class="elementor-row">
																	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ef9fb73" data-id="ef9fb73" data-element_type="column">
																		<div class="elementor-column-wrap elementor-element-populated">
																			<div class="elementor-widget-wrap">
																				<div class="elementor-element elementor-element-cbdaac9 elementor-widget elementor-widget-heading" data-id="cbdaac9" data-element_type="widget" data-widget_type="heading.default">
																					<div class="elementor-widget-container">
																						<h2 class="elementor-heading-title elementor-size-default">Temping Opportunities</h2> </div>
																				</div>
																				<div class="elementor-element elementor-element-0aa4956 elementor-widget elementor-widget-text-editor" data-id="0aa4956" data-element_type="widget" data-widget_type="text-editor.default">
																					<div class="elementor-widget-container">
																						<div class="elementor-text-editor elementor-clearfix">
																							<p>Whether you're an experienced accounting professional, BFSI Executive, or Off Role Executive, we welcome you to join our team as a fill-in worker. We're seeking reliable individuals who we can call upon to cover unplanned and planned absences, including sick days, vacation time, personal emergencies, and bereavement leave.
</p>
<p>
If you're interested in becoming a part of our team, please complete the form below to be added to our list of potential candidates. We're excited to have the chance to work with you!
</p>
																								</div>
																					</div>
																				</div>
																				<div class="elementor-element elementor-element-cdbcf16 elementor-align-center elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="b9e432e" data-element_type="widget" data-widget_type="button.default">
																					<div class="elementor-widget-container">
																						<div class="elementor-button-wrapper">
																							<a href="{{url('/candidate_list')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Add Me to Candidate List</span> </span>
																							</a>
																						</div>
																					</div>
																				</div>
																		
																				
																				
																				
																				
																				
																				
																				<div class="elementor-element elementor-element-c1f357b elementor-widget elementor-widget-heading" data-id="c1f357b" data-element_type="widget" data-widget_type="heading.default">
																					<div class="elementor-widget-container">
																						<h5 class="elementor-heading-title elementor-size-default">Join Our Candidate List if you're already working with us as a temp and need to submit a timecard, please use the form below. Submit Timecard Form </h5> </div>
																				</div>
																				<div class="elementor-element elementor-element-cdbcf16 elementor-align-center elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="cdbcf16" data-element_type="widget" data-widget_type="button.default">
																					<div class="elementor-widget-container">
																						<div class="elementor-button-wrapper">
																							<a href="{{url('/candidate_form')}}" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Submit Candidate list form</span> </span>
																							</a>
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>@endsection