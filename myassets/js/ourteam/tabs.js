$(document).ready(function(){
var hash = window.location.hash;

if(hash != ""){

}

    $(".nav-tabs li").click(function(){
        var tabtodisplay = $(this).find("a").attr("href");

        $(".profilecard-tabs").hide();

        $(tabtodisplay).show();
    });
});
