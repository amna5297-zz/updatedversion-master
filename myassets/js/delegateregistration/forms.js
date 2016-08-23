var dropzoneOptionsDynamic = {
    dictDefaultMessage: "",
    init: function() {
        this.on("addedfile", function(file) {
          if (this.files[1]!=null){
                  this.removeFile(this.files[0]);
                }

            // Create the remove button
            var removeButton = Dropzone.createElement("<a href='javascript:;'' class='btn red btn-sm btn-block'>Remove</a>");

            // Capture the Dropzone instance as closure.
            var _this = this;

            // Listen to the click event
            removeButton.addEventListener("click", function(e) {
              // Make sure the button click doesn't submit the form:
              e.preventDefault();
              e.stopPropagation();

              // Remove the file preview.
              _this.removeFile(file);
              // If you want to the delete the file on the server as well,
              // you can do the AJAX request here.
            });

            // Add the button to the file preview element.
            file.previewElement.appendChild(removeButton);
        });
    }
}

$(document).ready(function(){
checkAndRemoveErrorsPhaseOne();
    $('#continuestepone').click(function(e){

        e.preventDefault();
        var l = Ladda.create(this);
        l.start();

        var values = $("#delegatereg-one").serialize();

        if(!validatePhaseOne()){

            $.ajax({
                type: "POST",
                url:"../myassets/phpscripts/delegates/phaseone.php",
                data: values,
                dataType: "text",
                success: function( data ) {
                    if(data == "y"){
                        l.stop();
                        $("html, body").animate({ scrollTop: 0 }, "slow");
                        $("#step2").addClass("active");

                        var numdelegates = parseInt($("select[name='numdelegates']").val());

                        addDelegatesFormFields(numdelegates);

                        autoFillHeadDelegateInfo();

                        $("#phaseone").hide("600", function(){
                            $("#phasetwo").show("600");
                        });

                    }
                    else{
                        l.stop();
                    }
                }
            });
      } else{
          $("#phaseoneformerror").show();
          $('html,body').animate({ scrollTop: 0 }, 'slow');
          l.stop();
      }


        });
});

function addDelegatesFormFields(num){
  var finalString = '';

  var delegateFormPartOne = '<div class="delegatecontainer delegate';
  var delegateFormPartTwo = '"><h3>Delegate ';
  var delegateFormPartThree = '</h3><hr /><div class="col-xs-6 col-xs-offset-3"><div id="dropzone';
  var delegateFormPartFour = '" action="../myassets/phpscripts/delegates/imagehandler.php?delegate=';
  var delegateFormPartFive = '" method="POST" class="dropzone dropzone-file-area dz-clickable" style="width: 100%; margin-top: 20px; margin-bottom:20px;"> <h3 class="sbold">Drop files here or click to upload</h3> <p> Upload the delegates picture. </p> <div class="dz-default dz-message"><span></span></div></div> </div> <div class="clearfix"></div> <div class="row"> <div class="col-md-6"> <div class="col-md-3"> <label>First Name:</label> </div> <div class="col-md-9"> <input type="text" name="firstname" placeholder="First Name" class="form-control" /> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Last Name:</label> </div> <div class="col-md-9"> <input type="text" name="lastname" placeholder="Last Name" class="form-control" /> </div> </div> </div> <div class="row"> <div class="col-md-6"> <div class="col-md-3"> <label>Email:</label> </div> <div class="col-md-9"> <input type="text" name="email" placeholder="Email" class="form-control" /> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Phone #:</label> </div> <div class="col-md-9"> <input type="text" name="phone" placeholder="Phone" class="form-control" /> </div> </div> </div> <div class="row"> <div class="col-md-6"> <div class="col-md-3"> <label>Gender:</label> </div> <div class="col-md-9"> <input type="radio" name="gender" value="M"/>&nbsp;Male&nbsp;&nbsp;&nbsp; <input type="radio" class="genderradio" name="gender" value="F"/>&nbsp;Female </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>CNIC/B-FORM/Passport#:</label> </div> <div class="col-md-9"> <input type="text" name="cnic" class="form-control" /> </div> </div> </div> <div class="row hide-on-load"> <div class="col-md-6"> <div class="col-md-3"> <label>Institute:</label> </div> <div class="col-md-9"> <input type="text" name="institute" class="form-control" /> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Registration Type:</label> </div> <div class="col-md-9"> <input type="radio" name="regtype" value="0"/>&nbsp;Official&nbsp;&nbsp;&nbsp; <input type="radio" name="regtype" value="1"/>&nbsp;Private </div> </div> </div> <div class="row" class="hide-on-load"> <div class="col-md-6"> <div class="col-md-3"> <label>Address:</label> </div> <div class="col-md-9"> <input class="form-control" name="address" /> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>City:</label> </div> <div class="col-md-9"><input class="form-control" name="city" /> </div> </div> </div> <div class="row"> <input type="hidden" class="form-control" name="country"/> <div class="col-md-6"> <div class="col-md-3"> <label>Accommodation:</label> </div> <div class="col-md-9"> <input type="radio" name="accommodation" value="y"/>&nbsp;Yes&nbsp;&nbsp;&nbsp; <input type="radio" name="accommodation" checked value="n"/>&nbsp;No </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Committee</label> </div> <div class="col-md-9"> <input type="radio" name="committee" value="0"/>&nbsp;UNSC&nbsp;&nbsp;&nbsp; <input type="radio" name="committee" value="1"/>&nbsp;PCC&nbsp;&nbsp;&nbsp; <input type="radio" name="committee" value="2"/>&nbsp;Project Based Committee </div> </div> </div> <div class="row"> <div class="col-md-6"> <div class="col-md-3"> <label>MUN Experience:</label> </div> <div class="col-md-9"> <textarea class="form-control" rows="6" name="delegateexperience"></textarea> </div> </div> <div class="col-md-6"> <div class="col-md-3"> <label>Reason for picking the specified committee</label> </div> <div class="col-md-9"> <textarea class="form-control" name="committeereason" rows="5"></textarea> </div> <div class="clearfix"> </div> </div> </div> <div class="clearfix"></div> </div>';

  for(var i =0; i < (num-1); i++){
      finalString += delegateFormPartOne + numberInWords(i+2);
      finalString += delegateFormPartTwo + numberInWords(i+2);
      finalString += delegateFormPartThree + numberInWords(i+2);
      finalString += delegateFormPartFour + (i+2);
      finalString += delegateFormPartFive;
  }

  $(".headdelegate").after(finalString);

  for(var i =0; i < (num-1); i++){
    $("#dropzone" + numberInWords(i+2)).dropzone(dropzoneOptionsDynamic);
  }
}

function autoFillHeadDelegateInfo(){
  var fname = $("#phaseone input[name='firstname']").val();
  var lname = $("#phaseone input[name='lastname']").val();
  var email = $("#phaseone input[name='email']").val();
  var phone = $("#phaseone input[name='phone']").val();
  var gender = $("#phaseone input[name='gender']:checked").val();
  var cnic = $("#phaseone input[name='cnic']").val();
  var institute = $("#phaseone input[name='institute']").val();
  var regtype = $("#phaseone input[name='regtype']:checked").val();
  var address = $("#phaseone input[name='address']").val();
  var city = $("#phaseone input[name='city']").val();
  var country = $("#phaseone input[name='country']").val();
  var delegateexperience = $("#phaseone textarea[name='delegateexperience']").val();
  var committee = $("#phaseone input[name='committee']:checked").val();
  var committeereason = $("#phaseone textarea[name='committeereason']").val();

  $(".headdelegate input[name='firstname']").val(fname);
  $("#phasetwo .headdelegate input[name='lastname']").val(lname);
  $("#phasetwo .headdelegate input[name='email']").val(email);
  $("#phasetwo .headdelegate input[name='phone']").val(phone);
  $("#phasetwo .headdelegate input[name='gender'][value='"+gender+"']").prop('checked', true);;
  $("#phasetwo .headdelegate input[name='cnic']").val(cnic);
  $("#phasetwo .headdelegate input[name='institute']").val(institute);
  $("#phasetwo .headdelegate input[name='regtype'][value="+regtype+"]").prop('checked', true);
  $("#phasetwo .headdelegate input[name='address']").val(address);
  $("#phasetwo .headdelegate input[name='city']").val(city);
  $("#phasetwo .headdelegate input[name='country']").val(country);
  $("#phasetwo .headdelegate textarea[name='delegateexperience']").val(delegateexperience);
  $("#phasetwo .headdelegate input[name='committee'][value='"+committee+"']").prop('checked', true);
  $("#phasetwo .headdelegate textarea[name='committeereason']").val(committeereason);
}

function numberInWords(number){
    var numberArray = ['Zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven', 'Twelve'];

    return numberArray[number];
}

function validatePhaseOne(){
var flag = false;
    $("#phaseone .form-control").each(function(){

        var temp = $(this).val().length;

        if(temp == 0){
            flag = true;
            $(this).parent().parent().addClass("has-error");
        }

    });

    if (!$("#phaseone input[name='gender']:checked").val()) {
      $("#phaseone input[name='gender']").parent().parent().addClass("has-error");
      flag=true;
    }

    if (!$("#phaseone input[name='regtype']:checked").val()) {
      $("#phaseone input[name='regtype']").parent().parent().addClass("has-error");
      flag=true;
    }

    return flag;
}

function checkAndRemoveErrorsPhaseOne(){
    $(document).on("change", "#phaseone .form-control", function(){
        if($(this).val().length != 0){
          $(this).parent().parent().removeClass("has-error");
        }
    });

    $(document).on("change", "#phaseone input[type='radio']",function(){
        $(this).parent().parent().removeClass("has-error");
    })
}

function validatePhaseTwo(){
  var flag = false;
      $("#phaseone .form-control").each(function(){

          var temp = $(this).val().length;

          if(temp == 0){
              flag = true;
              $(this).parent().parent().addClass("has-error");
          }

      });

      if (!$("#phaseone input[name='gender']:checked").val()) {
        $("#phaseone input[name='gender']").parent().parent().addClass("has-error");
        flag=true;
      }

      if (!$("#phaseone input[name='regtype']:checked").val()) {
        $("#phaseone input[name='regtype']").parent().parent().addClass("has-error");
        flag=true;
      }

      if (!$("#phaseone input[name='committee']:checked").val()) {
        $("#phaseone input[name='committee']").parent().parent().addClass("has-error");
        flag=true;
      }

      return flag;
}
