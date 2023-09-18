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

input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    margin-right: 10px!important;
    margin-left: 10px;
}
p {
    font-family: "Comfortaa", Sans-serif!important;
    font-size: 18px!important;
    font-weight: 400!important;
    text-align: justify;
}

.slider-form span{
    font-size: 18px;
    font-weight: bolder;
}

</style>



<div class="reg-1">
   <div class="container">
      <div class="row efft-3">

         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="slider-form">
                @if(session()->has('message'))
                <div class="alert alert-{{session('class')}}">{{session('message')}}</div>
                @endif
                <form method="post" novalidate="" enctype="multipart/form-data" action="#" class="fsForm fsMultiColumn fsMaxCol4 with-ads" id="fsForm4760869">


<div class="fsPage" id="fsPage4760869-1">

<div id="ReactContainer4760869" style="display:none" class="FsReactContainerInitApp" data-fs-react-app-id="4760869"></div>

    
                
                    
                                        
                                        
            
            <div class="fsSection fs2Col" id="fsSection123378389">

                                                    
                                        
            <div class="fsSectionHeader">
        
            <div class="fsSectionText"><p style="text-align:center;"><img src="{{asset('frontend')}}/cdn-hcngh.nitrocdn.com/QBtDIEGjrgZWEaMPECKJquYEBrhRFDBx/assets/static/optimized/rev-159408b/wp-content/uploads/sites/701/2022/03/pro.-png-1.png" style="width:170px;" class="fr-fic fr-dib"></p><p><strong><u><span style="font-size: 24px;">Thank you for Temoing in our office</span></u></strong></p><p><span style="font-size: 18px;">Please make sure you have a copy &nbsp;the following saved so you can upload when prompted:</span></p><p><span style="font-size: 18px;"><strong><u>Driver’s License</u></strong></span></p><p><span style="font-size: 18px;"><strong><u>Aadhar Card</u></strong></span></p><p><span style="font-size: 18px;">Please Click on the following links and fill out and save a copy of these forms:&nbsp;</span></p><p><span style="font-size: 18px;">&nbsp;(You will need to upload these forms when prompted.)</span></p><p><span style="font-size: 18px;"><em><strong>Temp Time Card -&nbsp;</strong></em><a href="https://www.timecardcalculator.net/">https://www.timecardcalculator.net/</a></span></p><p><span style="font-size: 18px;">Enter your name and today's date at the top</span></p><p><span style="font-size: 18px;">Where it says name again - enter the date for Monday of the week you worked</span></p><p><span style="font-size: 18px;">Enter your rate of pay , Calculate and save</span></p><p><span style="font-size: 18px;">You will upload this form below.</span></p><p><span style="font-size: 18px;">(You will also enter the total hours work from your temp time card at the bottom of this form)</span></p><p><span style="font-size: 18px;"><em><strong>&nbsp;</strong></em>(Fill out - Print / Save and Upload below)&nbsp;</span></p><p><span style="font-size: 18px;">&nbsp;Save this form as you only need to fill it out once a year but, you will need to upload it each time &nbsp;you submit a timecard.</span></p><p><span style="font-size: 18px;">**</span></p><p><span style="font-size: 18px;">If you are going to be a regular Temp throughout the year</span></p></div>
    </div>

 
                <div id="fsRow4760869-3" class="fsRow fsFieldRow fsLastRow">

            
                                        
            
            
            
                                        
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell123679688" lang="en" fs-field-type="name" fs-field-validation-name="Temp's Name">
                                                                                <span id="label123679688" class="fsLabel">Temp's Name</span>
                    
                                        
                    <div class="fsSubFieldGroup">
                    
                    
                    
                    
    
    <div class="fsSubField fsNameFirst">
        <input type="text" id="field123679688-first" name="field123679688-first" size="20" aria-label="First Name" value="" class="fsField fsFieldName">
        <label class="fsSupporting" for="field123679688-first">First Name</label>
    </div>

    
    
    <div class="fsSubField fsNameLast">
        <input type="text" id="field123679688-last" name="field123679688-last" size="20" aria-label="Last Name" value="" class="fsField fsFieldName">
        <label class="fsSupporting" for="field123679688-last">Last Name</label>
    </div>

    
</div>
<div class="clear"></div>

                    
                    
                    
                    
                                                </div>

                                          <div class="fs-clear"></div>
                        </div>

                        
                        
                
                    
            
            
            
                                        
                                        
                                        
            
                                                
                <div id="fsRow4760869-4" class="fsRow fsFieldRow fsLastRow">

            
                                        
            
            
            
                                        
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLast fsLabelVertical fsSpan100" id="fsCell123379159" lang="en" fs-field-type="address" fs-field-validation-name="Temp's Address">
                                                                                <span id="label123379159" class="fsLabel">Temp's Address</span>
                    
                                        
                    
<div class="fsSubFieldGroup">
        <div class="fsSubField fsFieldAddress">
        <input type="text" id="field123379159-address" aria-label="Address Line 1" name="field123379159-address" size="50" value="" class="fsField fsFieldAddress">
        <label class="fsSupporting" for="field123379159-address">Address Line 1</label>
    </div>
    
        <div class="fsSubField fsFieldAddress2">
        <input type="text" id="field123379159-address2" aria-label="Address Line 2" name="field123379159-address2" size="50" value="" class="fsField fsFieldAddress2">
        <label class="fsSupporting" for="field123379159-address2">Address Line 2</label>
    </div>
    
        <div class="fsSubField fsFieldCity">
        <input type="text" id="field123379159-city" name="field123379159-city" size="15" aria-label="City" value="" class="fsField fsFieldCity">
        <label class="fsSupporting" for="field123379159-city">City</label>
    </div>
    
        <div class="fsSubField fsFieldState">
                    <select id="field123379159-state" aria-label="State" name="field123379159-state" class="fsField fsFieldState">
                <option value="">&nbsp;</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="GU">Guam</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VI">Virgin Islands (US)</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="AA">Armed Forces (the) Americas</option>
                                    <option value="AE">Armed Forces Europe</option>
                                    <option value="AP">Armed Forces Pacific</option>
                                    <option value="APO">Army Post Office (U.S. Army and U.S. Air Force)</option>
                                    <option value="FPO">Fleet Post Office (U.S. Navy and U.S. Marine Corps)</option>
                            </select>
            <label class="fsSupporting" for="field123379159-state">State</label>
            </div>
    
        <div class="fsSubField fsFieldZip">
                    <input type="text" id="field123379159-zip" aria-label="ZIP Code" name="field123379159-zip" size="6" value="" class="fsField fsFieldZip fsFormatZipUS">
            <label class="fsSupporting" for="field123379159-zip">ZIP Code</label>
            </div>
    
</div>
<div class="clear"></div>


                    
                    
                    
                    
                                                </div>

                                          <div class="fs-clear"></div>
                        </div>

                        
                        
                
                    
            
            
            
                                        
                                        
                                        
            
                                                
                <div id="fsRow4760869-5" class="fsRow fsFieldRow">

            
                                        
            
            
            
            
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLabelVertical fsSpan50" id="fsCell123378428" lang="en" fs-field-type="text" fs-field-validation-name="Rate of Pay (Per Hour)">
                                                                                                        <label id="label123378428" class="fsLabel" for="field123378428">Current Annual CTC                                                    </label>
                                            
                                        
                    <input type="text" id="field123378428" name="field123378428" size="50" value="" class="fsField fsFormatText    ">



                                                                
                    
                    
                    
                                                </div>

                        
                    
                
                    
            
            
            
                                        
                                        
                                        
            
                                        
            
                                        
            
                                        
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsLast fsLabelVertical fsSpan50" id="fsCell123679708" aria-describedby="fsSupporting123679708" lang="en" fs-field-type="text" fs-field-validation-name="Aadhar Card">
                                                                                                        <label id="label123679708" class="fsLabel" for="field123679708">Aadhar Card                                                    </label>
                                            
                                        
                    <input type="text" id="field123679708" name="field123679708" size="50" value="" class="fsField fsFormatText    ">



                                                                                                        <div id="fsSupporting123679708" class="fsSupporting">Please enter as 000-00-0000</div>
                                                                        
                    
                    
                    
                                                </div>

                                          <div class="fs-clear"></div>
                        </div>

                        
                        
                
                    
            
            
            
                                        
                                        
                                        
            
                                                
                <div id="fsRow4760869-6" class="fsRow fsFieldRow">

            
                                        
            
            
            
            
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLabelVertical fsSpan50" id="fsCell123970925" aria-describedby="fsSupporting123970925" lang="en" fs-field-type="text" fs-field-validation-name="Temp's  DOB">
                                                                                                        <label id="label123970925" class="fsLabel" for="field123970925">Temp's  DOB                                                    </label>
                                            
                                        
                    <input type="text" id="field123970925" name="field123970925" size="50" value="" class="fsField fsFormatText    ">



                                                                                                        <div id="fsSupporting123970925" class="fsSupporting">00/00/0000</div>
                                                                        
                    
                    
                    
                                                </div>

                        
                    
                
                    
            
            
            
                                        
                                        
                                        
            
                                        
            
                                        
            
                                        
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsLast fsLabelVertical fsSpan50" id="fsCell123379161" aria-describedby="fsSupporting123379161" lang="en" fs-field-type="phone" fs-field-validation-name="Temp's Phone">
                                                                                                        <label id="label123379161" class="fsLabel" for="field123379161">Temp's Phone                                                    </label>
                                            
                                        
                    <input type="tel" id="field123379161" name="field123379161" size="2" value="" class="fsField fsFormatPhoneUS " data-country="US" data-format="national">

                                                                                                        <div id="fsSupporting123379161" class="fsSupporting">000-000-0000</div>
                                                                        
                    
                    
                    
                                                </div>

                                          <div class="fs-clear"></div>
                        </div>

                        
                        
                
                    
            
            
            
                                        
                                        
                                        
            
                                                
                <div id="fsRow4760869-7" class="fsRow fsFieldRow">

            
                                        
            
            
            
            
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLabelVertical fsSpan50" id="fsCell123378391" lang="en" fs-field-type="email" fs-field-validation-name="Temp's Email">
                                                                                                        <label id="label123378391" class="fsLabel" for="field123378391">Temp's Email                                                    </label>
                                            
                                        
                    <input type="email" id="field123378391" name="field123378391" size="50" value="" class="fsField fsFormatEmail">

                                                                
                    
                    
                    
                                                </div>

                        
                    
                
                    
            
            
            
                                        
                                        
                                        
            
                                        
            
                                        
            
                                        
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsLast fsLabelVertical fsSpan50" id="fsCell123378392" lang="en" fs-field-type="select" fs-field-validation-name="Position in which you temped ">
                                                                                                        <label id="label123378392" class="fsLabel" for="field123378392">Position in which you temped                                                     </label>
                                            
                                        
                    <select id="field123378392" name="field123378392" size="1" class="fsField">

        <option value="Front Desk">Front Desk</option>
        <option value="Dentist">Dentist</option>
        <option value="DAII">DAII</option>
        <option value="Hygienest">Hygienest</option>
        <option value="Hygien Assistant">Hygien Assistant</option>
        <option value="Sterlization">Sterlization</option>
        <option value="Billing Claims">Billing Claims</option>
        <option value="Marketing">Marketing</option>

</select>

                                                                
                    
                    
                    
                                                </div>

                                          <div class="fs-clear"></div>
                        </div>

                        
                        
                
                    
            
            
            
                                        
                                        
                                        
            
                                                
                <div id="fsRow4760869-8" class="fsRow fsFieldRow">

            
                                        
            
            
            
            
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLabelVertical fsSpan50" id="fsCell123680049" lang="en" fs-field-type="file" fs-field-validation-name="Please Upload a copy of your Drivers License ">
                                                                                <fieldset role="group" aria-labelledby="fsLegend123680049" id="label123680049">

                            <legend id="fsLegend123680049" class="fsLabel fsLabelVertical" style="padding-top:20px;"><span>Please Upload a copy of your Drivers License </span></legend>
                            <div class="fieldset-content">
                    
                                        
                                <input type="file" style="display: none" id="field123680049" name="field123680049" size="30" class="fsField fsUpload uploadTypes-jpg,jpeg,gif,png,bmp,tif,psd,pdf,doc,docx,csv,xls,xlsx,txt,mp3,mp4,aac,wav,au,wmv,avi,mpg,mpeg,zip,gz,rar,z,tgz,tar,sitx">
    <input type="button" class="fsFileUploadButton" id="field123680049UploadButton" aria-controls="field123680049" value="Choose File">
    <input type="button" class="fsFileUploadButton" id="field123680049DeleteButton" aria-controls="field123680049" value="Remove File">
    <span class="fsFileUploadName" id="field123680049FileName">No File Chosen</span>
    <div class="showMobile">File uploads may not work on some mobile devices.</div>
    <script>
        (function () {
        var filename = document.getElementById('field123680049FileName').innerHTML
            function fileUploadClick() {
                var field = document.getElementById('field123680049');
                field.click();
                }

            function fileDelete() {
                document.getElementById('field123680049').value = '';
                document.getElementById('field123680049FileName').innerHTML = filename;
                }

            function onFileChange(event) {
                if (!event.target.files || !event.target.files.length) {
                    return;
                    }

                var file = event.target.files[0];
                var name = document.getElementById('field123680049FileName');
                name.innerHTML = file.name;
                }

                var button = document.getElementById('field123680049UploadButton');
            button.addEventListener('click', fileUploadClick);
            var field = document.getElementById('field123680049');
            field.addEventListener('change', onFileChange);
            var buttonDelete = document.getElementById('field123680049DeleteButton');
            buttonDelete.addEventListener('click', fileDelete);
            })()
    </script>
    
                                                                
                    
                                                </div></fieldset>
                    
                    
                                                </div>

                        
                    
                
                    
            
            
            
                                        
                                        
                                        
            
                                        
            
                                        
            
                                        
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsLast fsLabelVertical fsSpan50" id="fsCell123680059" lang="en" fs-field-type="file" fs-field-validation-name="Please Upload a copy of your Aadhar Card ">
                                                                                <fieldset role="group" aria-labelledby="fsLegend123680059" id="label123680059">

                            <legend id="fsLegend123680059" class="fsLabel fsLabelVertical" style="padding-top:20px;"><span>Please Upload a copy of your Aadhar Card </span></legend>
                            <div class="fieldset-content">
                    
                                        
                                <input type="file" style="display: none" id="field123680059" name="field123680059" size="30" class="fsField fsUpload uploadTypes-jpg,jpeg,gif,png,bmp,tif,psd,pdf,doc,docx,csv,xls,xlsx,txt,mp3,mp4,aac,wav,au,wmv,avi,mpg,mpeg,zip,gz,rar,z,tgz,tar,sitx">
    <input type="button" class="fsFileUploadButton" id="field123680059UploadButton" aria-controls="field123680059" value="Choose File">
    <input type="button" class="fsFileUploadButton" id="field123680059DeleteButton" aria-controls="field123680059" value="Remove File">
    <span class="fsFileUploadName" id="field123680059FileName">No File Chosen</span>
    <div class="showMobile">File uploads may not work on some mobile devices.</div>
    <script>
        (function () {
        var filename = document.getElementById('field123680059FileName').innerHTML
            function fileUploadClick() {
                var field = document.getElementById('field123680059');
                field.click();
                }

            function fileDelete() {
                document.getElementById('field123680059').value = '';
                document.getElementById('field123680059FileName').innerHTML = filename;
                }

            function onFileChange(event) {
                if (!event.target.files || !event.target.files.length) {
                    return;
                    }

                var file = event.target.files[0];
                var name = document.getElementById('field123680059FileName');
                name.innerHTML = file.name;
                }

                var button = document.getElementById('field123680059UploadButton');
            button.addEventListener('click', fileUploadClick);
            var field = document.getElementById('field123680059');
            field.addEventListener('change', onFileChange);
            var buttonDelete = document.getElementById('field123680059DeleteButton');
            buttonDelete.addEventListener('click', fileDelete);
            })()
    </script>
    
                                                                
                    
                                                </div></fieldset>
                    
                    
                                                </div>

                                          <div class="fs-clear"></div>
                        </div>

                                
                </div>

                                
            
                                        
                                        
            
            <div class="fsSection fs4Col" id="fsSection123379019">

            
                                        
                                        
                                        
            
                                                
                <div id="fsRow4760869-11" class="fsRow fsFieldRow">

            
                                        
            
            
            
            
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsFirst fsLabelVertical fsSpan25" id="fsCell123884270" lang="en" fs-field-type="file" fs-field-validation-name="Please upload you Temp Time Card ">
                                                                                <fieldset role="group" aria-labelledby="fsLegend123884270" id="label123884270">

                            <legend id="fsLegend123884270" class="fsLabel fsLabelVertical" style="padding-top:20px;"><span>Please upload you Temp Time Card </span></legend>
                            <div class="fieldset-content">
                    
                                        
                                <input type="file" style="display: none" id="field123884270" name="field123884270" size="30" class="fsField fsUpload uploadTypes-jpg,jpeg,gif,png,bmp,tif,psd,pdf,doc,docx,csv,xls,xlsx,txt,mp3,mp4,aac,wav,au,wmv,avi,mpg,mpeg,zip,gz,rar,z,tgz,tar,sitx">
    <input type="button" class="fsFileUploadButton" id="field123884270UploadButton" aria-controls="field123884270" value="Choose File">
    <input type="button" class="fsFileUploadButton" id="field123884270DeleteButton" aria-controls="field123884270" value="Remove File">
    <span class="fsFileUploadName" id="field123884270FileName">No File Chosen</span>
    <div class="showMobile">File uploads may not work on some mobile devices.</div>
    <script>
        (function () {
        var filename = document.getElementById('field123884270FileName').innerHTML
            function fileUploadClick() {
                var field = document.getElementById('field123884270');
                field.click();
                }

            function fileDelete() {
                document.getElementById('field123884270').value = '';
                document.getElementById('field123884270FileName').innerHTML = filename;
                }

            function onFileChange(event) {
                if (!event.target.files || !event.target.files.length) {
                    return;
                    }

                var file = event.target.files[0];
                var name = document.getElementById('field123884270FileName');
                name.innerHTML = file.name;
                }

                var button = document.getElementById('field123884270UploadButton');
            button.addEventListener('click', fileUploadClick);
            var field = document.getElementById('field123884270');
            field.addEventListener('change', onFileChange);
            var buttonDelete = document.getElementById('field123884270DeleteButton');
            buttonDelete.addEventListener('click', fileDelete);
            })()
    </script>
    
                                                                
                    
                                                </div></fieldset>
                    
                    
                                                </div>

                        
                    
                
                    
            
            
            
                                        
                                        
                                        
            
                                        
            
                                        
            
            
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsLabelVertical fsSpan25" id="fsCell123379022" lang="en" fs-field-type="text" fs-field-validation-name="Total hours worked for the week ">
                                                                                                        <label id="label123379022" class="fsLabel" for="field123379022" style="padding-top:20px;">Total hours worked for the week                                                     </label>
                                            
                                        
                    <input type="text" id="field123379022" name="field123379022" size="50" value="" class="fsField fsFormatText    ">



                                                                
                    
                    
                    
                                                </div>

                        
                    
                
                    
            
            
            
                                        
                                        
                                        
            
                                        
            
                                        
            
            
                        
                        
            <div class="fsRowBody fsCell fsFieldCell fsLabelVertical fsSpan25" id="fsCell123379122" lang="en" fs-field-type="text" fs-field-validation-name="Total Payroll  for the week">
                                                                                                        <label id="label123379122" class="fsLabel" for="field123379122" style="padding-top:20px;">Total Payroll  for the week                                                    </label>
                                            
                                        
                    <input type="text" id="field123379122" name="field123379122" size="50" value="" class="fsField fsFormatText    ">



                                                                
                    
                    
                    
                                                </div>

                                          <div class="fs-clear"></div>
                        </div>

                                                
                <div id="fsRow4760869-12" class="fsRow fsFieldRow fsLastRow">

            
                      <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons" style="padding-top:20px;">
														<button type="submit" class="elementor-button elementor-size-sm" style="width:100%;"> <span> <span class=" elementor-button-icon"> </span> <span class="elementor-button-text">Send</span> </span>
														</button>
													</div>                  
            
            
            
            
                        
                        
            

                                          <div class="fs-clear"></div>
                        </div>

                        
                    

        
    </div>

        
</div>




    <script type="text/javascript">
        window.FS_FIELD_DATA_4760869 = [];
    </script>

            <script type="text/javascript" src="//static.formstack.com/forms/js/3/jquery-3.5.1.min_dc5e7f18c8.js"></script>
            <script type="text/javascript" src="//static.formstack.com/forms/js/3/jquery-ui-1.13.2.min_1e20479789.js"></script>
            <script type="text/javascript" src="//static.formstack.com/forms/js/3/scripts_2d59c4c019.js"></script>
            <script type="text/javascript" src="//static.formstack.com/forms/js/3/analytics_7d49daa365.js"></script>
            <script type="text/javascript" src="//static.formstack.com/forms/js/3/jsignature/jSignature.min_6651ad6080.js"></script>
            <script type="text/javascript" src="//static.formstack.com/forms/js/3/libphonenumber-min_6f64debfdd.js"></script>
            <script type="text/javascript" src="//static.formstack.com/forms/js/3/modernizr_60a2d5aeb5.js"></script>
    
    <script type="text/javascript">
        
        
        if(window.addEventListener) {
            window.addEventListener('load', loadFormstack, false);
        } else if(window.attachEvent) {
            window.attachEvent('onload', loadFormstack);
        } else {
            loadFormstack();
        }
        

        function loadFormstack() {
            var form4760869 = new Formstack.Form(4760869, 'https://dentalsmilesofnc.formstack.com/forms/');

            
            
            

            form4760869.logicFields = [];

                        form4760869.calculations.push({target: '123379022', equation: ' +  +  +  + ', fields: []});
                        form4760869.calculations.push({target: '123379122', equation: '[123379022] * [123378428]', fields: ['123379022','123378428']});
            
            form4760869.calcFields = ['123379022','123378428'];

            
            form4760869.dateCalcFields = [];

            form4760869.init();

                        if (Formstack.Analytics) {
                form4760869.plugins.analytics = new Formstack.Analytics('https://dentalsmilesofnc.formstack.com', 4760869, form4760869);
                form4760869.plugins.analytics.trackTouch();
                form4760869.plugins.analytics.trackBottleneck();
            }
            
            
            
            
            window.form4760869 = form4760869;
        };
    </script>


    
                    <div style="height: 41px"></div>

                <div id="fsReferralBadge" style="position: fixed !important; bottom: 0 !important; left: 0 !important; right: 0 !important; padding: 9px 0 !important; text-align: center !important; font-size:12px; font-family:Helvetica,Arial,sans-serif !important; background-color: #eff3f5;" lang="en">
            <a href="https://www.formstack.com?referring_type=s-prod-form&amp;utm_source=formstack&amp;utm_medium=product&amp;utm_campaign=build+your+own" title="Formstack" target="_blank" rel="noopener noreferrer" style="color: #616a71 !important; text-decoration: none;">
                <img src="https://dentalsmilesofnc.formstack.com/forms/images/3/formstack_icon.png" style="width: 24px !important; height: 22px !important; vertical-align: middle !important;">
                <span style="display: inline-block !important; margin: 0 6px !important; padding: 4px 0 4px 8px !important; border-left: 2px solid #eaeaea !important;">
                    <b>Powered by Formstack</b>
                </span>
            </a>

            <a href="https://www.formstack.com/online-forms?referring_type=s-prod-form&amp;utm_source=formstack&amp;utm_medium=product&amp;utm_campaign=build+your+own" title="Formstack Demo" target="_blank" rel="noopener noreferrer" style="color: #616a71 !important; text-decoration: none;">
                Create your own form <span style="margin-left: 3px !important; font-size: 16px !important; font-weight: 600 !important; font-family: 'Times New Roman', Times, serif !important;">›</span>
            </a>
        </div>
    

    <div style="clear:both"></div>

        
<input name="fsUserAgent" id="fsUserAgent" type="hidden" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36"></form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection