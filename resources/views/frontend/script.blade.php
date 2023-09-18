<script>
// alert('hy');
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });

    $("#signup").click(function(e){
        e.preventDefault();
        var business_name = $('#business_name').val();
        var owner_name = $('#owner_name').val();
        var mobile = $('#mobile').val();
        var email = $('#email').val();
        var state = $('#state').val();
        var city = $('#city').val();
        var check_error = 'false';
        if (business_name.length < 1) {  
            $('.business_error').after('<span class="text text-danger">This field is required</span>');  
            var check_error = 'true';
            }  
        if (owner_name.length < 1) {  
            $('.owner_error').after('<span class="text text-danger">This field is required</span>');  
            var check_error = 'true';
            }  
        if (mobile.length < 1) {  
            $('.mobile_error').after('<span class="text text-danger">This field is required</span>');  
            var check_error = 'true';
            }  
        if (email.length < 1) {  
        $('.email_error').after('<span class="text text-danger">This field is required</span>');  
        var check_error = 'true';
        }
        if (state.length < 1) {  
            $('.state_error').after('<span class="text text-danger">This field is required</span>');  
            var check_error = 'true';
            }  
        if (city.length < 1) {  
            $('.city_error').after('<span class="text text-danger">This field is required</span>');  
            var check_error = 'true';
            }  
        if(check_error != 'true')
        {
        $.ajax({
           type:'POST',
           url:"{{url('signup')}}",
           data:{business_name:business_name, owner_name:owner_name, mobile:mobile, email:email, state:state, city:city},
           success:function(data){
                if(data > '0')
                {
                    var SITE_URL = "{{url('/')}}";
                    $('#mess').html('<div class="alert alert-success">You Have Been Registered Successfully</div>');
                    window.location.href = SITE_URL + '/verify?id=' + data;
                }else if(data == '-0')
                {
                    $('#mess').html('<div class="alert alert-danger">This Email Id is Already Registered. Please Login</div>');
                }else
                {
                    $('#mess').html('<div class="alert alert-danger">Something Went Wrong!! Please Try Again</div>');
                }
           }
        });
        }
    
    });
    $("#mobile_verify").click(function(e){
        e.preventDefault();
        var mobile = $('#mobile').val();
        if(mobile != '')
        {
            $.ajax({
            type:'POST',
            url:"{{url('mobile_verify')}}",
            data:{mobile:mobile},
            success:function(data){
                if(data == '1')
                {
                    location.href = '{{url("verify")}}';
                }else
                {
                    $('#mess').html('<div class="alert alert-danger">You Are Not Registered!! Please Register First</div>');
                }
            }
            });
        }else
        {
            alert('Please Insert Mobile No.');
        }
    });
    $("#verify").click(function(e){
        e.preventDefault();
        var otp1 = $('#otp1').val();
        var otp2 = $('#otp2').val();
        var otp3 = $('#otp3').val();
        var otp4 = $('#otp4').val();
        var otp5 = $('#otp5').val();
        var otp6 = $('#otp6').val();
        var id = $('#user_id').val();
        if(otp1 != '' && otp2 != '' && otp3 !='' && otp4 !='' && otp5 !='' && otp6 !='')
        {
            $.ajax({
            type:'POST',
            url:"{{url('verify')}}",
            data:{otp1:otp1, otp2:otp2, otp3:otp3, otp4:otp4, otp5:otp5, otp6:otp6, id:id},
            success:function(data){
                alert(data);
            }
            });
        }else
        {
            alert('Please Insert Valid OTP');
        }
    });
    $('#business_type').show();
    $('#disclaimer').hide();
    $('#pan_details').hide();
    $('#pan_details1').hide();
    $('#proof_of_identity').hide();
    $('#personal_info').hide();
   $('#account_info').hide();
   $('#signature').hide();
   $('#verification').hide();
   $('#application').hide();


    $('#update').click(function()
    {
        var constitution = $('input[name="constitution"]:checked').val();
        var industry = $('input[name="industry"]:checked').val();
        var opt = $('input[name="opt"]:checked').val();
        var agree= $('input[name="agree]:checked').val();
        var id = '{{session("id")}}';
        
        if(constitution != 'undefined' || industry != 'undefined' || opt != 'undefined' || agree != 'undefined')
        {

            $.ajax({
            type:'POST',
            url:"{{url('update')}}",
            data:{constitution:constitution, industry:industry, id:id},
            success:function(data){
                $('#business_type').hide();
                $('#disclaimer').show();
                $('#pan_details').hide();
                $('#pan_details1').hide();
                $('#proof_of_identity').hide();
                $('#personal_info').hide();
                $('#account_info').hide();
                $('#signature').hide();
                $('#verification').hide();
                $('#application').hide();
            }
            })
        }else
        {
            alert('Please Accept Business Type, Industry & All Terms & Conditions');
        }
    });
    $('#accept').click(function()
    {
        var duration = $('#duration').val();
        var id = '{{session("id")}}';
        
        if(duration != '')
        {
            $.ajax({
            type:'POST',
            url:"{{url('accept_disclaimer')}}",
            data:{duration:duration, id:id},
            success:function(data){
                $('#business_type').hide();
                $('#disclaimer').hide();
                $('#pan_details').show();
                $('#pan_details1').hide();
                $('#proof_of_identity').hide();
                $('#personal_info').hide();
               $('#account_info').hide();
                $('#signature').hide();
                   $('#verification').hide();
                   $('#application').hide();
            }
            })
        }else
        {
            alert('Something Went Wrong');
        }
    });
    $('#update_pan').click(function()
    {
        var pan = $('#pan').val();
        var date_of_birth = $('#date_of_birth').val();
        var id = '{{session("id")}}';
        // alert(pan);
        if(pan != '' || date_of_birth != '')
        {
            $.ajax({
            type:'POST',
            url:"{{url('update_pan')}}",
            data:{pan:pan, date_of_birth:date_of_birth, id:id},
            success:function(data){
                $('#business_type').hide();
                $('#disclaimer').hide();
                $('#pan_details').hide();
                $('#pan_details1').show();
                $('#proof_of_identity').hide();
                 $('#personal_info').hide();
                                $('#account_info').hide();
                                                                 $('#signature').hide();
                                                                    $('#verification').hide();
                                                                    $('#application').hide();



               

            }
            })
        }else
        {
            alert('Something Went Wrong');
        }
    });
    $('#pan_card_details').click(function()
    {
        // alert('hy');
        var number_belongs = $('#number_belongs').val();
        var mobile_holder_name = $('#mobile_holder_name').val();
        var pan_mobile_holder = $('#pan_mobile_holder').val();
        var email_belongs = $('#email_belongs').val();
        var email_holder_name = $('#email_holder_name').val();
        var pan_email_holder = $('#pan_email_holder').val();
        var id = '{{session("id")}}';
        if(number_belongs != '' || mobile_holder_name != '' || pan_mobile_holder != '' || email_belongs != '' || email_holder_name !='' || pan_email_holder != '')
        {
            $.ajax({
            type:'POST',
            url:"{{url('update_pan_card_details')}}",
            data:{number_belongs:number_belongs, mobile_holder_name:mobile_holder_name, pan_mobile_holder:pan_mobile_holder, email_belongs:email_belongs, email_holder_name:email_holder_name, pan_email_holder:pan_email_holder, id:id},
            success:function(data){
                $('#business_type').hide();
                $('#disclaimer').hide();
                $('#pan_details').hide();
                $('#pan_details1').hide();
                $('#proof_of_identity').show();
                $('#personal_info').hide();
                               $('#account_info').hide();
                                                                $('#signature').hide();
                                                                   $('#verification').hide();
                                                                   $('#application').hide();




            }
            })
        }else
        {
            alert('Something Went Wrong');
        }
    });
        $("#update_pan_image").click(function(e){
        e.preventDefault();
        var images = $("#image").val();
        // var id = '{{session("id")}}';
        var formData = new FormData();
        var image = $('#image').prop('files')[0];   
        formData.append('image', image);
        
        if(images != '')
        {
        $.ajax({
          type:'POST',
          url:"{{url('upload_pan_image')}}",
          data: formData,
          contentType: 'multipart/form-data',
          cache: false,
          contentType: false,
          processData: false,
          success:function(data){
                $('#business_type').hide();
                $('#disclaimer').hide();
                $('#pan_details').hide();
                $('#pan_details1').hide();
                $('#proof_of_identity').hide();
                $('#personal_info').show();
               $('#account_info').hide();
                                                $('#signature').hide();
                                                   $('#verification').hide();
                                                   $('#application').hide();



          }
        });
        }else
        {
            alert('Please upload PAN CARD Image');
        }
    
    });
$("#uploadimage").on('submit',(function(e) {
        e.preventDefault();
        var images = $('#image1').val();
        // var id = '{{session("id")}}';
        var formData = new FormData(this);
        // alert(formData);
        var image = $('#image1').prop('files')[0];   
        formData.append('image1', image);
        if(images != '')
        {
        $.ajax({
          type:'POST',
          url:"{{url('update_personal_info')}}",
          data: formData,
          contentType: 'multipart/form-data',
          cache: false,
          contentType: false,
          processData: false,
          success:function(data){
            //   alert(data);
                $('#business_type').hide();
                $('#disclaimer').hide();
                $('#pan_details').hide();
                $('#pan_details1').hide();
                $('#proof_of_identity').hide();
                $('#personal_info').hide();
                 $('#account_info').show();
                                 $('#signature').hide();
                                    $('#verification').hide();
                                    $('#application').hide();


          }
        });
        }else
        {
            alert('Please upload Image');
        }
    
    }));
    
    $('#account_details').click(function()
    {
        // alert('hy');
        var acc_num = $('#acc_num').val();
        var acc_num1 = $('#acc_num1').val();
        var ifsc = $('#ifsc').val();
        var micr = $('#micr').val();
        var bank = $('#bank').val();
        var branch = $('#branch').val();
        var branch_address = $('#branch_address').val();
        var city = $('#city').val();
        var id = '{{session("id")}}';
        if(acc_num != '' || acc_num1 != '' || ifsc != '' || micr != '' || bank !='' || branch != '' || branch_address != '' || city != '')
        {
            if(acc_num == acc_num1)
            {
            $.ajax({
            type:'POST',
            url:"{{url('update_account_info')}}",
            data:{acc_num:acc_num, ifsc:ifsc, micr:micr, bank:bank, branch:branch, branch_address:branch_address,city:city,id:id},
            success:function(data){
                $('#business_type').hide();
                $('#disclaimer').hide();
                $('#pan_details').hide();
                $('#pan_details1').hide();
                $('#proof_of_identity').hide();
                $('#personal_info').hide();
                $('#account_info').hide();
                $('#signature').show();
                   $('#verification').hide();
                   $('#application').hide();



            }
            });
            }else
            {
                alert('Account Number Did not Match');
            }
        }else
        {
            alert('Something Went Wrong');
        }
    });
   
  function initImageUpload(box) {
  let uploadField = box.querySelector('.image-upload');

  uploadField.addEventListener('change', getFile);

  function getFile(e){
    let file = e.currentTarget.files[0];
    checkType(file);
  }
  
  function previewImage(file){
    let thumb = box.querySelector('.js--image-preview'),
        reader = new FileReader();

    reader.onload = function() {
      thumb.style.backgroundImage = 'url(' + reader.result + ')';
    }
    reader.readAsDataURL(file);
    thumb.className += ' js--no-default';
  }

  function checkType(file){
    let imageType = /image.*/;
    if (!file.type.match(imageType)) {
      throw 'Datei ist kein Bild';
    } else if (!file){
      throw 'Kein Bild gewählt';
    } else {
      previewImage(file);
    }
  }
  
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
  let box = boxes[i];
  initDropEffect(box);
  initImageUpload(box);
}



/// drop-effect
function initDropEffect(box){
  let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
  
  // get clickable area for drop effect
  area = box.querySelector('.js--image-preview');
  area.addEventListener('click', fireRipple);
  
  function fireRipple(e){
    area = e.currentTarget
    // create drop
    if(!drop){
      drop = document.createElement('span');
      drop.className = 'drop';
      this.appendChild(drop);
    }
    // reset animate class
    drop.className = 'drop';
    
    // calculate dimensions of area (longest side)
    areaWidth = getComputedStyle(this, null).getPropertyValue("width");
    areaHeight = getComputedStyle(this, null).getPropertyValue("height");
    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

    // set drop dimensions to fill area
    drop.style.width = maxDistance + 'px';
    drop.style.height = maxDistance + 'px';
    
    // calculate dimensions of drop
    dropWidth = getComputedStyle(this, null).getPropertyValue("width");
    dropHeight = getComputedStyle(this, null).getPropertyValue("height");
    
    // calculate relative coordinates of click
    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
    
    // position drop and animate
    drop.style.top = y + 'px';
    drop.style.left = x + 'px';
    drop.className += ' animate';
    e.stopPropagation();
    
  }
}
(function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText = document.getElementById("sig-dataUrl");
  var sigImage = document.getElementById("sig-image");
  var clearBtn = document.getElementById("sig-clearBtn");
  var submitBtn = document.getElementById("sig-submitBtn");
  clearBtn.addEventListener("click", function(e) {
    clearCanvas();
    sigText.innerHTML = "Data URL for your signature will go here!";
    sigImage.setAttribute("src", "");
  }, false);
  submitBtn.addEventListener("click", function(e) {
    var dataUrl = canvas.toDataURL();
    sigText.innerHTML = dataUrl;
    sigImage.setAttribute("src", dataUrl);
  }, false);

})();

$('#sig-submitBtn').click(function()
{
    var sign = $('#sig-dataUrl').val();
    var id = '{{session("id")}}';
        if(sign != '')
        {
            $.ajax({
            type:'POST',
            url:"{{url('update_signature')}}",
            data:{sign:sign, id:id},
            success:function(data){
                $('#business_type').hide();
                $('#disclaimer').hide();
                $('#pan_details').hide();
                $('#pan_details1').hide();
                $('#proof_of_identity').hide();
                $('#personal_info').hide();
                $('#account_info').hide();
                $('#signature').hide();
                $('#verification').show();
                $('#application').hide();


            }
            });
            
        }else
        {
            alert('Something Went Wrong');
        }
});
$('#proceed_to_digilocker').click(function()
{
        $('#business_type').hide();
        $('#disclaimer').hide();
        $('#pan_details').hide();
        $('#pan_details1').hide();
        $('#proof_of_identity').hide();
        $('#personal_info').hide();
        $('#account_info').hide();
        $('#signature').hide();
        $('#verification').hide();
        $('#application').show();

});
</script>