$(function(){
    //load
    $(".load-container").fadeOut();

    //===== Functions =====
    function sidebarMenu(){
        $(".main").toggleClass('active');
        $(".sidebar").toggleClass('active');
    }
    function dropdown(){
        $(this).children('a').children('i').toggleClass('active');
        $(this).children('ul').slideToggle();
    }
    function windowResize(){
        if ($(this).width() >= 991) {
            $(".main").removeClass('active');
            $(".sidebar").removeClass('active');
        }   
    }

    //===== Events =====
    $(".bar-btn").click(sidebarMenu);

    $(".close-btn").click(function () {
        $(".sidebar").toggleClass('active');
    });

    $(".menu-item").click(dropdown);

    $(".user-profile img").click(function () {
        $(".card").toggleClass('active');
    });
    $(window).resize(windowResize);

    //Tooltip
    $('[data-toggle="tooltip"]').tooltip()
});

