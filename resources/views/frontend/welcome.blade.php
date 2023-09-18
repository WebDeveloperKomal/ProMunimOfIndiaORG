@extends('frontend.layouts')
@section('content')


<style>
.fyt {
    text-align: inherit!important;
    border: 1px solid #666;
    background: #efefef;
    padding: 25px 15px 5px;
    border-radius: 8px;
    height: auto!important;
    margin-bottom: 20px;
}

</style>


<div class="reg-1">
   <div class="container">
      <div class="row efft-3">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-12">
                  <div class="prc">
                     <h3>Welcome <span>{{$business_name->business_name}}!</span></h3>
                     <h2>Ready to begin</h2>
                     <h3>You will need these to proceed</h3>
                     </div>
                     </div>
                     <div class="col-md-6">
                         <div class="fyt">
                     <p style="margin-bottom: 0px; margin-top:30px;">Document Part A</p>
                     <br>
                     <ul>
                        <li>PAN card of the Proprietor / Partner / Trustee / Director</li>
                        <li>Aadhaar card the Proprietor / Partner / Trustee / Director</li>
                        <li>Shop and Establishment licence or GST Certificate</li>
                        <li>Specimen signature on blank white paper</li>
                        <li>Device with camera capabilities </li>
                     </ul>
                    
                     </div>
                        <div class="elementor-element elementor-element-2484153 elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-button" data-id="2484153" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="{{url('business_setup')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-text">Continue</span> </span>
                                </a>
                            </div>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                         <div class="fyt">
                     <p style="margin-bottom: 10px; margin-top:30px;">Document Part B</p>
                     <br>
                     <h6>Proprietorship Firm :</h6>
                     <ul>
                        <li>Proprietorship declaration</li>
                     </ul>
                     <h6>HUF (Hindu Undivided Family) :</h6>
                     <ul>
                        <li>All documents</li>
                        <li>PAN card of HUF </li>
                        <li>HUF Deed (if any)</li>
                        <li>HUF Declaration</li>
                     </ul>
                     <h6>Partnership Firm :</h6>
                     <ul>
                        <li>All requirement as per proprietorship firm plus below listed documents</li>
                        <li>PAN card of Partnership Firm</li>
                        <li>Partnership Deed</li>
                        <li>Partnership Declaration</li>
                     </ul>
                     <h6>TASC (Trust, Association, Society, Club) :</h6>
                     <ul>
                        <li>All requirement as per proprietorship firm plus below listed documents</li>
                        <li>PAN card of the TASC</li>
                        <li>BYE-LAWS / Trust deed</li>
                        <li>Governing Body Resolution</li>
                        <li>Registration certificate</li>
                     </ul>
                     <h6>OP, Private, Public Limited Companies</h6>
                     </div>
                     </div>
                   
                
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection