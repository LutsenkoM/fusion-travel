$(document).ready(function(){

    var flag = true;
    $('#button-menu').on('click', function (e) {
        if (flag) {
            flag = false;

            $('.nav-wrapp').slideToggle(function () {
                flag = true;
            });
        }
    });

    var foot_height = $('footer').height();
    var head_height = $('header').height();
    var site_height = $(window).height();
    var content_height = site_height - head_height - foot_height;
    $('.site-content').css("min-height", content_height);

});