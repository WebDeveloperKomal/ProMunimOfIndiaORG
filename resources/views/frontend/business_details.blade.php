@extends('frontend.layouts')
@section('content')
<div class="tbs1">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="indus">
               <ul>
                  <li><a class="active" href="javascript:void(0)" id="industry">Industry <br>Sector</a></li>
                  <li><a href="javascript:void(0)" id="identity">Proof of <br>Identity</a></li>
                  <li><a href="javascript:void(0)" id="info">Personal <br>Info</a></li>
                  <li><a href="javascript:void(0)" id="bank">Proof of <br>Bank</a></li>
                  <li><a href="javascript:void(0)" id="verification">Signature <br>Verification</a></li>
                  <li><a href="javascript:void(0)" id="address">Proof of <br>Address</a></li>
                  <li><a href="javascript:void(0)" id="review">Review <br>Application</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1"id="business_type">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
                  <div class="col-md-12 reg7">
                     <h3>Business Financial Planning Account fee</h3>
                  </div>
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
                     <div class="left1">
                        <p><b>Don't forget to select the Constitution of your business</b></p>
                        <!-- <p>Professional (Self Employed Individual)</p> -->
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="prop">
                        <ul class="custom-radios">
                           <li><input type="radio" id="prof" name="constitution" value="Professional (Self Employed Individual)" <?= ($business->constitution == 'Professional (Self Employed Individual)')?'checked':'';?>>
                              <label for="prof">Professional (Self Employed Individual)</label>
                           </li>
                           <li><input type="radio" id="proprietorship" name="constitution" value="Proprietorship" <?= ($business->constitution == 'Proprietorship')?'checked':'';?>>
                              <label for="proprietorship">Proprietorship</label>
                           </li>
                           <li><input type="radio" id="partnership" name="constitution" value="Partnership Firm" <?= ($business->constitution == 'Partnership Firm')?'checked':'';?>>
                              <label for="partnership">Partnership Firm,</label>
                           </li>
                           <li><input type="radio" id="huf" name="constitution" value="HUF (Hindu Undivided family)" <?= ($business->constitution == 'HUF (Hindu Undivided family)')?'checked':'';?>>
                              <label for="huf">HUF (Hindu Undivided family)</label>
                           </li>
                           <li><input type="radio" id="private" name="constitution" value="Private Ltd. / Public Ltd. / OPC" <?= ($business->constitution == 'Private Ltd. / Public Ltd. / OPC')?'checked':'';?>>
                              <label for="private">Private Ltd. / Public Ltd. / OPC</label>
                           </li>
                           <li><input type="radio" id="trust" name="constitution" value="Trust, Association, Society, Club" <?= ($business->constitution == 'Trust, Association, Society, Club')?'checked':'';?>>
                              <label for="trust">Trust, Association, Society, Club</label>
                           </li>
                        </ul>
                        <h4 class="ntr">Don't forget to select the Industry sector and nature of business </h4>
                        <ul>
                           <li><input type="radio" id="manufacturer" name="industry" value="Manufacturer" <?= ($business->industry == 'Manufacturer')?'checked':'';?>>
                              <label for="manufacturer">Manufacturer</label>
                           </li>
                           <li><input type="radio" id="service" name="industry" value="Service Provider" <?= ($business->industry == 'Service Provider')?'checked':'';?>>
                              <label for="service">Service Provider</label>
                           </li>
                           <li><input type="radio" id="trader" name="industry" value="Trader" <?= ($business->industry == 'Trader')?'checked':'';?>>
                              <label for="trader">Trader</label>
                           </li>
                           <li><input type="radio" id="professional" name="industry" value="Professional" <?= ($business->industry == 'Professional')?'checked':'';?>>
                              <label for="professional">Professional</label>
                           </li>
                           <li><input type="radio" id="agriculture" name="industry" value="Agriculture And Agri Allied" <?= ($business->industry == 'Agriculture And Agri Allied')?'checked':'';?>>
                              <label for="agriculture">Agriculture And Agri Allied</label>
                           </li>
                        </ul>
                        <p>Atleast one of the constitution of your business and nature of business need to be
                           selected. Your account will be activated when your documents submission and
                           verification complete successfully and initial payment made by you in the form of
                           cheque / funds transfer should credited in our accounts. 
                        </p>
                        <input type="checkbox" id="vehicle1" name="opt" value="1" checked>
                        <label for="vehicle1"> Opt for BFPS. (T&C)</label><br>
                        <input type="checkbox" id="vehicle2" name="agree" value="1" checked>
                        <label for="vehicle2">  I agree to pay monthly business financial planning fees as per my business
                        transactions or sales which ever is higher or plan selected by me for business financial
                        planning account schedule of charges for business financial planning account and
                        charges for other services as well as consulting charges T&C.</label>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="hpl">
                        <p>You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 btnz">
                     <button id="update" class="sbmit">
                     Open Now
                     </button>
                  </div>
                  <div class="col-md-12 aut">
                     <p class="ald">Already started? <br>
                        <a href="#">Click here</a> to resume your applicaiton
                     </p>
                     <p>Please note that by submitting details you are authorizing IBG Fincon Pvt.
                        Ltd. entities to send you communications through Digital Channels or voice
                        even if you are registered under DND. Please also do note that all
                        communications with IBG Fincon representatives will be recorded for
                        internal quality and training purposes. Preferably use the mobile number
                        that is linked with your Aadhaar to open the business financial planning
                        account. 
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="disclaimer">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
                  <div class="col-md-12 reg8">
                     <h3>Declarations</h3>
                  </div>
                  <div class="col-md-12">
                     <div class="prop2">
                        <ul>
                           <li>I hereby confirm that no actions/proceedings have
                              been initiated or are pending against me by Tax
                              authorities of India, Anti Corruption Bureau or any
                              other authority. I am not dealing with / through any
                              consultant & there are no disputes / dues pending
                              from/to them. In case answer of the is yes <span class="red-2">Click Here</span>
                           </li>
                           <li>I wish to activate SMS alert facility & receive contract
                              notes, standard documents, statement of account
                              (T&C) in electronic mode. I understand that in case I
                              wish to receive contract notes or standard documents
                              or statement of account in physical mode or deactivate SMS alert facility, I need to make separate
                              request for the same. 
                           </li>
                           <li>Ÿ I do not wish to avail a Basic Services Business
                              financial planning account or receive door step
                              service at the time of account opening. I understand
                              that the welcome kit will be issued immediately after
                              opening of my account by physical mode at any later
                              date. 
                           </li>
                           <li>I authorise you to receive documents, accounting data
                              automatically into my account.
                           </li>
                           <li>Ÿ I am neither a politically exposed person nor related
                              to any politically exposed person. If not <span class="red-2">Click Here</span>
                           </li>
                           <li>I agree to following Terms & Conditions – <span class="red-2">Signature
                              declaration, Disclosure declaration, Important Policies.
                              General terms and conditions (T&C)</span>
                           </li>
                        </ul>
                        <h4 class="ntr2">Type of accounts reports, statements authorization </h4>
                        <p>By selecting this preference, I agree to abide by the
                           terms and conditions of the type of Accounts, reports,
                           statements Authorization.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!--<div class="col-md-12">
                     <div class="form-group">
                           <input type="tel" id="phone" placeholder="Business Name"/>
                     </div>
                     </div>-->
                  <div class="col-md-4">
                     <div class="form-group">
                        <select class="mnt" name="duration" id="duration">
                           <option value="monthly" <?= ($business->duration == 'monthly')?'checked':'';?>>Monthly</option>
                           <option value="yearly" <?= ($business->duration == 'yearly')?'checked':'';?>>Yearly</option>
                           <option value="daily" <?= ($business->duration == 'daily')?'checked':'';?>>Daily</option>
                           <option value="quarterly" <?= ($business->duration == 'quarterly')?'checked':'';?>>Quarterly</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12 btnz">
                     <button id="accept" class="sbmit" checked>
                     I Agree
                     </button>
                  </div>
                  <div class="col-md-12">
                     <div class="hpl">
                        <p>You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="pan_details">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
                  <div class="col-md-12 rg-3">
                     <h3><span class="bld-2">Enter PAN Number</span></h3>
                     <p>(Incase of Non Individual firm/company/trust/society/
                        club/association/HUF is mandatory) 
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="text" id="pan" name="pan" value="{{$business->pan}}" placeholder="ABCDE1234F" /> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Date of Birth</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" value="{{$business->date_of_birth}}" placeholder="Date of Birth" /> 
                     </div>
                  </div>
                  <div class="col-md-12 dec">
                     <h3>I declare this mobile number<br>
                        <span>{{$business->mobile}}</span> and email<br>
                        <span>{{$business->email}}</span> belongs to self
                     </h3>
                  </div>
                  <div class="col-md-12 btnz"> <button id="update_pan" class="sbmit">
                     Next
                     </button> 
                  </div>
                  <div class="col-md-12">
                     <div class="hpl">
                        <p>You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="pan_details1">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
                  <div class="col-md-12 rg-3">
                     <h3><span class="bld-2">PAN Card</span></h3>
                     <p>Let us know who the email and mobile Number Belong to :</p>
                     <h5>Mobile<br>
                        <span>{{$business->mobile}}</span>
                     </h5>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Number belongs to</label>
                        <select name="number_belongs" id="number_belongs">
                           <option value="spouse" <?= ($business->number_belongs == 'spouse')?'selected':''?>>Spouse</option>
                           <option value="self" <?= ($business->number_belongs == 'self')?'selected':''?>>Self</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Name of mobile holder</label>
                        <input type="text" name="mobile_holder_name" id="mobile_holder_name" value="{{$business->mobile_holder_name}}" placeholder="Name of Mobile Holder" />
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">PAN of Mobile holder</label>
                        <input type="text" name="pan_mobile_holder" id="pan_mobile_holder" value="{{$business->pan_mobile_holder}}" placeholder="PAN of Mobile Holder" />
                     </div>
                  </div>
                  <div class="col-md-12 rg-3">
                     <h5>Email<br><span>{{$business->email}}</span></h5>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Email blongs to</label>
                        <select name="email_belongs" id="email_belongs">
                           <option value="spouse" <?= ($business->email_belongs == 'spouse')?'selected':''?>>Spouse</option>
                           <option value="self" <?= ($business->email_belongs == 'self')?'selected':''?>>Self</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Name of email holder</label>
                        <input type="text" name="email_holder_name" value="{{$business->email_holder_name}}" id="email_holder_name" placeholder="Name of Email Holder" />
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">PAN of email holder</label>
                        <input type="text" name="pan_email_holder" value="{{$business->pan_email_holder}}" id="pan_email_holder" placeholder="PAN of Email Holder" />
                     </div>
                  </div>
                  <div class="col-md-12 btnz"> <button id="pan_card_details" class="sbmit">Next</button> </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="proof_of_identity">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <form enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="box">
                              <div class="js--image-preview" style="background-image:url(<?= ($business->pan_image)?url('/uploads/'.$business->pan_image):''?>)"></div>
                              @if($business->pan_image)
                              <style>
                                 .js--image-preview::after
                                 {
                                 content:'' !important;
                                 }
                              </style>
                              @endif
                              <div class="upload-options sbmit">
                                 <label>
                                 <input type="file" class="image-upload" id="image" name="image" value="{{$business->pan_image}}" accept="image/*" />
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12" style="padding-top:15px;">
                        <div class="form-group">
                           <label for="">Enter PAN Number</label>
                           <input type="text" id="pan" name="pan" value="{{$business->pan}}"  placeholder="ABCDE1234F" readonly/> 
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="">Date of Birth</label>
                           <input type="hidden" name="id" value="{{session('id')}}" id="id"/>
                           <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth"  value="{{$business->date_of_birth}}" readonly /> 
                        </div>
                     </div>
                     <div class="col-md-12 dec">
                        <h3>I declare this mobile number<br>
                           <span>{{$business->mobile}}</span> and email<br>
                           <span>{{$business->email}}</span> belongs to self
                        </h3>
                     </div>
                     <div class="col-md-12 btnz"> <button id="update_pan_image" class="sbmit">
                        Next
                        </button> 
                     </div>
                     <div class="col-md-12">
                        <div class="hpl">
                           <p>You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294</p>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="personal_info">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <form enctype="multipart/form-data" id="uploadimage">
                  <div class="row">
                     <div class="col-md-12 reg15">
                        <h3>Tell us more about yourself</h3>
                     </div>
                     <div class="col-md-12 capt">
                        <div class="box capture">
                           <div class="js--image-preview" style="background-image:url(<?= ($business->user_image)?url('/uploads/'.$business->user_image):''?>)"></div>
                           @if($business->user_image)
                           <style>
                              .js--image-preview::after
                              {
                              content:'' !important;
                              }
                           </style>
                           @endif
                           <p>We'll need a photograph of you<br>click a selfie</p>
                           <div class="upload-options sbmit">
                              <label>
                              <input type="file" class="image-upload" id="image1" name="image1" value="{{$business->user_image}}" accept="image/*" />
                              </label>
                           </div>
                        </div>
                        <!--<img class="attachment-large size-large" alt="Dental Smiles Logo" loading="lazy" srcset="cdn-hcngh.nitrocdn.com/img/cp.png">-->
                        <!--<a href="#" class="sbmit"> Capture </a>-->
                     </div>
                     <div class="col-md-12" style="padding-top:15px;">
                        <div class="form-group">
                           <label for="">Father's Name</label>
                           <input type="text" id="father_name" name="father_name" value="{{$business->father_name}}" placeholder="Father's Name" /> 
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="">Marital Status</label>
                           <select name="marital" id="marital">
                              <option value="">--Select Status--</option>
                              <option value="married" <?= ($business->marital == 'married')?'selected':''?>>Married</option>
                              <option value="single" <?= ($business->marital == 'single')?'selected':''?>>Single</option>
                              <option value="divorced" <?= ($business->marital == 'divorced')?'selected':''?>>Divorced</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-12" style="padding-top:15px;">
                        <div class="form-group">
                           <label for="">Occupation</label>
                           <input type="text" id="occupation" placeholder="Occupation" value="{{$business->occupation}}" name="occupation" /> 
                        </div>
                     </div>
                     <div class="col-md-12" style="padding-top:15px;">
                        <div class="form-group">
                           <label for="">Annual Income</label>
                           <input type="number" id="annual_income" placeholder="Annual Income" value="{{$business->annual_income}}" name="annual_income" /> 
                        </div>
                     </div>
                     <div class="col-md-12" style="padding-top:15px;">
                        <div class="form-group">
                           <label for="">Trading Experience</label>
                           <input type="number" id="experience" name="experience" placeholder="Experience" value="{{$business->experience}}" /> 
                        </div>
                     </div>
                     <div class="col-md-12 aut">
                        <p class="ald" style="text-align: left;">To assign nominee to your account, please fill the
                           nomination form and submit it to our nearest branch
                           <a href="#">Click here</a> here to download nomination form
                        </p>
                     </div>
                     <div class="col-md-12 btnz"> <button id="update_personal_info"  class="sbmit">
                        Next
                        </button> 
                     </div>
                     <div class="col-md-12">
                        <div class="hpl">
                           <p>You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294</p>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="account_info">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="left1">
                        <p>We need details of the bank account that you want
                           to link your business financial planning account with
                           us.
                        </p>
                        <p>This bank account will be use for monthly fees
                           payment
                        </p>
                        <p>Enter your account number and IFSC code and click on
                           search to fetch the bank details
                        </p>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Account Number</label>
                        <input type="number" id="acc_num" name="acc_num"  value="{{$business->acc_no}}" placeholder="" /> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Re-Enter Account Number</label>
                        <input type="number" id="acc_num1" name="acc_num1" placeholder="" value="{{$business->acc_no}}" /> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">IFSC</label>
                        <input type="text" id="ifsc" name="ifsc" placeholder="" value="{{$business->ifsc}}" /> 
                     </div>
                  </div>
                  <div class="col-md-12 btng"> 
                     <a href="#" class="sbmit">Search</a> 
                  </div>
                  <div class="col-md-12 rg-3">
                     <h3><span class="bld-2">Search IFSC</span></h3>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">MICR</label>
                        <input type="number" id="micr" name="micr" value="{{$business->micr}}" placeholder="" /> 
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Bank Name</label>
                        <select name="bank" id="bank">
                           <option value="">--Select Bank--</option>
                           <option value="Bank of Baroda" <?= ($business->bank == 'Bank of Baroda')?'selected':''?>>Bank of Baroda</option>
                           <option value="Canara Bank" <?= ($business->bank == 'Canara Bank')?'selected':''?>>Canara Bank</option>
                           <option value="Indian Bank" <?= ($business->bank == 'Indian Bank')?'selected':''?>>Indian Bank</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Branch Name</label>
                        <select name="branch" id="branch">
                           <option value="">--Select Branch--</option>
                           <option value="Bandhan Bank Limited" <?= ($business->branch == 'Bandhan Bank Limited')?'selected':''?>>Bandhan Bank Limited</option>
                           <option value="Bank of Maharashtra" <?= ($business->branch == 'Bank of Maharashtra')?'selected':''?>>Bank of Maharashtra</option>
                           <option value="Barclays Bank" <?= ($business->branch == 'Barclays Bank')?'selected':''?>>Barclays Bank</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Branch Address</label>
                        <select name="branch_address" id="branch_address">
                           <option value="">--Branch Address--</option>
                           <option value="Delhi" <?= ($business->branch_address == 'Delhi')?'selected':''?>>Delhi</option>
                           <option value="Maharashtra" <?= ($business->branch_address == 'Maharashtra')?'selected':''?>>Maharashtra</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Branch City</label>
                        <input type="city" id="city" name="city" value="{{$business->bank_city}}" placeholder="" /> 
                     </div>
                  </div>
                  <div class="col-md-12 btnz"> <button id="account_details" class="sbmit">
                     Next
                     </button> 
                  </div>
                  <div class="col-md-12">
                     <div class="hpl">
                        <p>You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="signature">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
                  <div class="col-md-12 rg-3">
                     <h3 style="padding-bottom: 10px;"><span class="bld-2">Signature Verification</span></h3>
                     <p>Please sign inside the box</p>
                  </div>
                  <!-- Content -->
                  <div class="container">
                     <div class="row" style="display:{!! ($business->sign)?'block':'none'; !!}">
                        <div class="col-md-12">
                           <img id="sig-image" src="{!! $business->sign !!}" alt="Your signature will go here!"/>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <canvas id="sig-canvas" width="620" height="160">
                           </canvas>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <button class="btn btn-primary" id="sig-submitBtn">Submit Signature</button>
                           <button class="btn btn-default" id="sig-clearBtn">Clear Signature</button>
                        </div>
                     </div>
                     <br/>
                     <div class="row" style="display:none">
                        <div class="col-md-12">
                           <textarea id="sig-dataUrl" name="sign" class="form-control" rows="5">{!! ($business->sign)?$business->sign:''; !!}</textarea>
                        </div>
                     </div>
                     <br/>
                  </div>
                  <div class="col-md-12 reg8" style="padding-top:15px;">
                     <h3>OR</h3>
                  </div>
                  <div class="col-md-12 reg8" style="padding-top:15px;">
                     <p>Sign on piece of blank paper , take photo and <span style="color: #0a5386;">Upload</span><br>
                        [ Allowed jpeg, jpg]
                     </p>
                  </div>
                  <div class="col-md-12 reg8" style="padding-top:15px;">
                     <h3>Download POA</h3>
                     <p>By clicking "NEXT' I undertake, confrm and
                        consent to the following
                     </p>
                  </div>
                  <div class="col-md-12">
                     <div class="prop2">
                        <ul>
                           <li>I have read and understood all clauses power of attorney a.
                              executed it. 
                           </li>
                           <li>I have no objection to Kotak Securities Ltd cropping my scanned
                              signature and pasting it on the account opening documents for
                              completing the account opening process. 
                           </li>
                           <li>I wish to proceed with the account opening without providing a
                              copy of my signature proof. In case of any physical request
                              submitted by me post account opening, I agree and confirm to
                              provide the signature proof copy and other necessary documents
                              in order to facilitate the same. 
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 btnz">
                  </div>
                  <div class="col-md-12">
                     <div class="hpl">
                        <p>You can also call us on <i class="fa fa-phone" aria-hidden="true"></i> 1800 266 1294</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="verification">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
                  <div class="col-md-12 rg-3">
                     <p>Verify your address & identity details</p>
                     <p>Let's verify your identity & address via PAN & Aadhar
                        through Digi locker service by Government of India. We
                        may need to fetch/store/use the same securely to open
                        your account, Proceed to confirm
                     </p>
                     <p>You must have a mobile number linked to Aadhar</p>
                  </div>
                  <div class="col-md-12 btnz">
                     <button id="proceed_to_digilocker" class="sbmit">
                     Proceed to Digilocker
                     </button>
                  </div>
                  <div class="col-md-12 rg-3" style="padding-top:25px;">
                     <p>Don't have a mobile number linked to Aadhar?</p>
                  </div>
                  <div class="col-md-12">
                     <div class="prop2">
                        <ul>
                           <li>Check how you can link it</li>
                           <li>Request physical assistance for account opening.
                              <a href="#" style="color: #0a5386;">Click here</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="reg-1" id="application">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
                  <div class="col-md-12 rg-3">
                     <h3><span class="bld-2">Incomplete Application Form</span></h3>
                     <p>To proceed pleasesubmit the required documents by
                        completing this form
                     </p>
                  </div>
                  <div class="col-md-12 rsg-24">
                     <img class="attachment-large size-large" alt="Dental Smiles Logo" loading="lazy" srcset="cdn-hcngh.nitrocdn.com/img/er2.png">
                     <p>Please complete Proof of Address</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection