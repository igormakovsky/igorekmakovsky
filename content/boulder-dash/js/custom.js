$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('#a:in-viewport(-300)').css('transform', 'translateX(10em)');
    });
    
    animationClick('#butterfly-1', '#butterfly-1', 'wobble')
    animationClick('#butterfly-2', '#butterfly-2', 'wobble')
    animationClick('#butterfly-3', '#butterfly-3', 'wobble')
    animationClick('#butterfly-4', '#butterfly-4', 'wobble')
    animationClick('#butterfly-5', '#butterfly-5', 'wobble')
    animationClick('#butterfly-6', '#butterfly-6', 'wobble')
    animationClick('#butterfly-7', '#butterfly-7', 'wobble')
    animationClick('#butterfly-8', '#butterfly-8', 'wobble')
    
    animationClick('#firefly-1', '#firefly-1', 'shake')
    animationClick('#firefly-2', '#firefly-2', 'shake')
    animationClick('#firefly-3', '#firefly-3', 'shake')
    animationClick('#firefly-4', '#firefly-4', 'shake')
    animationClick('#firefly-5', '#firefly-5', 'shake')
    animationClick('#firefly-6', '#firefly-6', 'shake')
    animationClick('#firefly-7', '#firefly-7', 'shake')
    animationClick('#firefly-8', '#firefly-8', 'shake')
    
    animationClick('#man', '#man', 'bounce')

    $(document).on('click', '#a',
        function () {
            $(this).toggleClass("b");
        });
});