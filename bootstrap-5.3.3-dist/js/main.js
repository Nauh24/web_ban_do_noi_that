$(document).ready(function(){
    $("#reviewCarousel").owlCarousel({
        items: 1,
        loop: true,
        mouseDrag: true,
        touchDrag: true,
        pullDrag: true,
        dots: false,
        nav: false
    });
});

$(document).ready(function(){
    $('.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
});

//tôi muốn xử lí khi click vào nút thì không bị nhảy lên đầu trang
$(document).ready(function(){
    $('.btn').click(function(){
        $('html, body').animate({scrollTop: 0}, 1000);
    });
});

//xử lí khi click vào link thì trang web giữ nguyên không bị nhảy lên đầu trang
