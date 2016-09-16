$(document).ready(function(){

  checkAndRemoveErrorsPhaseOne();

  $('#continuestepone').click(function(e){

      e.preventDefault();
      var l = Ladda.create(this);
      l.start();

      var values = $("#directorate-one").serialize();

      if(!validatePhaseOne()){

          $.ajax({
              type: "POST",
              url:"../myassets/phpscripts/committeedirectorate/phaseone.php",
              data: values,
              dataType: "text",
              success: function( data ) {

                      l.stop();
                      $("html, body").animate({ scrollTop: 0 }, "slow");
                      $("#step2").addClass("active");

                      $("#phaseone").hide("600", function(){
                          $("#phasetwo").show("600");
                      });


              }
          });
      } else{
          $("#phaseoneformerror").show();
          $('html,body').animate({ scrollTop: 0 }, 'slow');
          l.stop();
      }


        });

      $('#continuesteptwo').click(function(e){

          e.preventDefault();
          var l = Ladda.create(this);
          l.start();

          var values = $("#directorate-two").serialize();

          if(!validatePhaseTwo()){

              $.ajax({
                  type: "POST",
                  url:"../myassets/phpscripts/committeedirectorate/phasetwo.php",
                  data: values,
                  dataType: "text",
                  success: function( data ) {

                          l.stop();
                          $("html, body").animate({ scrollTop: 0 }, "slow");
                          $("#step3").addClass("active");


                          $("#phasetwo").hide("600", function(){
                              $("#phasethree").show("600");
                          });


                  }
              });
          } else{
              $("#phasetwoformerror").show();
              $('html,body').animate({ scrollTop: 0 }, 'slow');
              l.stop();
          }


            });

        $('#continuestepthree').click(function(e){

            e.preventDefault();
            var l = Ladda.create(this);
            l.start();

            var values = $("#directorate-three").serialize();

            if(!validatePhaseThree()){

                $.ajax({
                    type: "POST",
                    url:"../myassets/phpscripts/committeedirectorate/phasethree.php",
                    data: values,
                    dataType: "text",
                    success: function( data ) {

                            $.ajax({
                                type: "POST",
                                url:"../myassets/phpscripts/committeedirectorate/email.php"
                            });


                            l.stop();
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                            $("#step4").addClass("active");


                            $("#phasethree").hide("600", function(){
                                $("#registrationcomplete").show("600");
                            });


                    }
                });
            } else{
                $("#phasethreeformerror").show();
                $('html,body').animate({ scrollTop: 0 }, 'slow');
                l.stop();
            }


              });



});

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

    return flag;
}


function checkAndRemoveErrorsPhaseOne(){
    $(document).on("change", "#phaseone .form-control", function(){
        if($(this).val().length != 0){
          $(this).parent().parent().removeClass("has-error");
        }
    });
}

function checkAndRemoveErrorsPhaseTwo(){
    $(document).on("change", "#phasetwo .form-control", function(){
        if($(this).val().length != 0){
          $(this).parent().parent().removeClass("has-error");
        }
    });
}

function checkAndRemoveErrorsPhaseThree(){
    $(document).on("change", "#phasethree .form-control", function(){
        if($(this).val().length != 0){
          $(this).parent().parent().removeClass("has-error");
        }
    });
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

      return flag;
}

function validatePhaseThree(){
var flag = false;
    $("#phaseone .form-control").each(function(){


        var temp = $(this).val().length;

        if(temp == 0){

            flag = true;
            $(this).parent().parent().addClass("has-error");
        }

    });


    return flag;
}
