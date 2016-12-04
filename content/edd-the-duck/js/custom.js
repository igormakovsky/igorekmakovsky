$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('.cloud:in-viewport()').css('transform', 'translate(-1rem, 1rem)');
        $('.cloud:in-viewport()').css('opacity', '1');
    });
    
    animationClick('#edd-the-duck', '#edd-the-duck', 'bounce')
    animationClick('#sun', '#sun', 'tada')
    animationClick('#sun-2', '#sun-2', 'tada')
    //
    animationClick('#star-1', '#star-1', 'swing')
    animationClick('#star-2', '#star-2', 'swing')
    animationClick('#star-3', '#star-3', 'swing')
    animationClick('#star-4', '#star-4', 'swing')
    animationClick('#star-5', '#star-5', 'swing')
    animationClick('#star-6', '#star-6', 'swing')
    animationClick('#star-7', '#star-7', 'swing')
    animationClick('#star-8', '#star-8', 'swing')
    animationClick('#star-9', '#star-9', 'swing')
    animationClick('#star-10', '#star-10', 'swing')
    animationClick('#star-11', '#star-11', 'swing')
    animationClick('#star-12', '#star-12', 'swing')
    animationClick('#star-13', '#star-13', 'swing')
    animationClick('#star-14', '#star-14', 'swing')
    animationClick('#star-15', '#star-15', 'swing')
    animationClick('#star-16', '#star-16', 'swing')
    animationClick('#star-17', '#star-17', 'swing')
    animationClick('#star-18', '#star-18', 'swing')
    animationClick('#star-19', '#star-19', 'swing')
    animationClick('#star-20', '#star-20', 'swing')
    animationClick('#star-21', '#star-21', 'swing')
    //
    animationClick('#sprite-1', '#sprite-1', 'wobble')
    animationClick('#sprite-2', '#sprite-2', 'wobble')
    animationClick('#sprite-3', '#sprite-3', 'wobble')
    animationClick('#sprite-4', '#sprite-4', 'wobble')
    animationClick('#sprite-5', '#sprite-5', 'wobble')
    animationClick('#sprite-6', '#sprite-6', 'wobble')
    animationClick('#sprite-7', '#sprite-7', 'wobble')
    animationClick('#sprite-8', '#sprite-8', 'wobble')
    animationClick('#sprite-9', '#sprite-9', 'wobble')
    animationClick('#sprite-10', '#sprite-10', 'wobble')
    animationClick('#sprite-11', '#sprite-11', 'wobble')
    animationClick('#sprite-12', '#sprite-12', 'wobble')
    animationClick('#sprite-13', '#sprite-13', 'wobble')
    animationClick('#sprite-14', '#sprite-14', 'wobble')
    animationClick('#sprite-15', '#sprite-15', 'wobble')
    animationClick('#sprite-16', '#sprite-16', 'wobble')
    animationClick('#sprite-17', '#sprite-17', 'wobble')
    animationClick('#sprite-18', '#sprite-18', 'wobble')
    animationClick('#sprite-19', '#sprite-19', 'wobble')
    animationClick('#sprite-20', '#sprite-20', 'wobble')
    animationClick('#sprite-21', '#sprite-21', 'wobble')
    animationClick('#sprite-22', '#sprite-22', 'wobble')
    animationClick('#sprite-23', '#sprite-23', 'wobble')

    $(document).on('click', '#a',
        function () {
            $(this).toggleClass("b");
        });
});