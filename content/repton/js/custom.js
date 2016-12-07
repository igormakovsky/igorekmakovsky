$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('.a:in-viewport()').css({
            'transform' : 'translate(-1rem, 1rem)',
            'opacity' : '1'
        });
    });
    
    animationClick('#egg', '#egg', 'bounce')
    animationClick('#hero', '#hero', 'bounce')
    animationClick('#key', '#key', 'tada')
    animationClick('#head-1', '#head-1', 'wobble')
    animationClick('#head-2', '#head-2', 'wobble')
    animationClick('#head-3', '#head-3', 'wobble')
    animationClick('#head-4', '#head-4', 'wobble')
    animationClick('#head-5', '#head-5', 'wobble')
    animationClick('#head-6', '#head-6', 'wobble')
    animationClick('#head-7', '#head-7', 'wobble')
    animationClick('#head-8', '#head-8', 'wobble')
    animationClick('#head-9', '#head-9', 'wobble')

    $(document).on('click', '#a',
        function () {
            $(this).toggleClass("b");
        });
});