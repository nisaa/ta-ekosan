// Tooltip, autofocus, scroll
$(function () {
  $('[data-toggle="tooltip"]').tooltip({container: 'body'})

    $('.modal').on('shown.bs.modal', function () {
        $(this).find('input[autofocus]').focus();
    });
})

$(document).ready(function() {
    smoothScroll.init({
        speed: 800,
        easing: 'easeInOutCubic',
        offset: 40
    });

});

// Navbar
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("attached");
    } else {
        $(".navbar-fixed-top").removeClass("attached");
    }
});
