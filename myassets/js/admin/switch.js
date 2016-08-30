$(document).ready(function(){
    $(document).on("click", ".page-sidebar-menu li", function(){
        var display = $(this).attr("displayobj");

        var active = $(".active.open");
        active.removeClass("active");
        active.removeClass("open");

        $(".pageobj").hide();
        $("#"+display).show();

        $(this).addClass("active");
        $(this).addClass("open");
    });
});
