$(document).ready(function(){
    $("#registrationbutton").click(function(){
      $(".errors").hide();

        var l = Ladda.create(this);
        l.start();

        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

        if(!($("#email").val()).match(re)) {

            $("#emailerror").show();
            l.stop();
            return;
        }
        var email = $("#registrationform input[name='email']").val();
        var password = hex_sha512($("#registrationform input[name='password']").val());

        var values = {email:email, password:password};

        $.ajax({
            type: "POST",
            url:"../myassets/phpscripts/email/verification.php",
            data: values,
            dataType: "text",
            success: function( data ) {
              l.stop();

              $("#mainregister").hide("600", function(){
                  $("#registersuccess").show("600");
              });
            }
        });
    });

    $("#signinbtn").click(function(){
        $(".errors").hide();

        var l = Ladda.create(this);
        l.start();

        var username= $("#loginform input[name='username']").val();
        var password = hex_sha512($("#loginform input[name='password']").val());

        var values = {username:username,password:password};
        var url = $("#loginform").attr("action");
        $.ajax({
            type: "POST",
            url:url,
            data: values,
            dataType: "text",
            success: function( data ) {
              if(data == 'y'){
                window.location.href = "../profile";
              }
              console.log(data);
              l.stop();
            }
        });
    });
});
