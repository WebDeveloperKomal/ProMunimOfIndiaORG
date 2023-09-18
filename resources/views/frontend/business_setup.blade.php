@extends('frontend.layouts')
@section('content')
<div class="reg-1">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
               <div class="row">
                  <div class="col-md-12 rg-3">
                     <h3><span class="bld-2">Easy, Quick, Secure</span></h3>
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
                        <p>Open your Business financial Planning Account in no time, all by yourself.</p>
                        <p>For best performance, please open this application on Google Chrome or safari.</p>
                     </div>
                  </div>
               </div>
               <form action="{{url('business-details')}}" method="POST">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                            @csrf
                           <input type="text" name="business_name" placeholder="Business Name" value="{{$business->business_name}}" required/>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="text" name="owner_name" placeholder="Owner Name" value="{{$business->owner_name}}" required />
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="tel" id="phone" name="mobile" placeholder="Mobile Number" value="{{$business->mobile}}" required readonly/>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="email" id="phone" name="email" placeholder="Email ID" value="{{$business->email}}" required readonly/>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <select name="state" required>
                              <option value="">Select State</option>
                              <option value="Andhra Pradesh" <?= ($business->state == 'Andhra Pradesh')?'selected':''?>>Andhra Pradesh</option>
                              <option value="Bihar" <?= ($business->state == 'Bihar')?'selected':''?>>Bihar</option>
                              <option value="Gujarat" <?= ($business->state == 'Gujarat')?'selected':''?>>Gujarat</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <select name="city" required>
                              <option value="">Select City</option>
                              <option value="Andhra Pradesh" <?= ($business->state == 'Mumbai')?'selected':''?>>Mumbai</option>
                              <option value="Hyderabad" <?= ($business->state == 'Hyderabad')?'selected':''?>>Hyderabad</option>
                              <option value="Bangalore" <?= ($business->city == 'Bangalore')?'selected':''?>>Bangalore</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-md-12 btnz">
                        <button type="submit" class="sbmit">
                        Open Now
                        </button>
                     </div>
                     <!-- <div class="col-md-12 aut">
                        <p class="ald">Already started? <br>
                           <a href="#">Click here</a> to resume your applicaiton
                        </p>
                        <p>Please note that by submitting details you are authorizing IBG Fincon Pvt.
                           Ltd. entities) to send you communications through Digital Channels or voice
                           even if you are registered under DND. Please also do note that all
                           communications with IBG Fincon representatives will be recorded for
                           internal quality and training purposes. Preferably use the mobile number
                           that is linked with your Aadhaar to open the business financial planning
                           account. 
                        </p>
                     </div> -->
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection