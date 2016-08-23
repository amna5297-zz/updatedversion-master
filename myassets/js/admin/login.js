$(document).ready(function(){
    $("#loginbtn").click(function(){
        var password = hex_sha512($("input[name='password']").val());
        $("input[name='password']").remove();
        $('<input>').attr({
            type: 'hidden',
            name: 'encryptedpass',
            value: password
        }).appendTo('form');



        $("#login-form").submit();
    });
});
