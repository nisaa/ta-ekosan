$(function () {
  $('[data-toggle="tooltip"]').tooltip({container: 'body'})
})

$(document).ready(function() {
    smoothScroll.init({
        speed: 800,
        easing: 'easeInOutCubic',
        offset: 40
    });

});
