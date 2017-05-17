$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('.a:in-viewport()').css({
            'transform' : 'translate(-1rem, 1rem)',
            'opacity' : '1'
        });
    });

    animationClick('#rolik-1', '#rolik-1', 'bounce')
    animationClick('#rolik-2', '#rolik-2', 'bounce')
    animationClick('#rolik-3', '#rolik-3', 'bounce')
    animationClick('#rolik-4', '#rolik-4', 'bounce')
    animationClick('#rolik-5', '#rolik-5', 'bounce')
    animationClick('#rolik-6', '#rolik-6', 'bounce')
    animationClick('#rolik-7', '#rolik-7', 'bounce')
    animationClick('#rolik-8', '#rolik-8', 'bounce')
    animationClick('#rolik-9', '#rolik-9', 'bounce')
    animationClick('#rolik-10', '#rolik-10', 'bounce')
    animationClick('#rolik-11', '#rolik-11', 'bounce')
    animationClick('#rolik-12', '#rolik-12', 'bounce')
    animationClick('#rolik-13', '#rolik-13', 'bounce')
    animationClick('#rolik-14', '#rolik-14', 'bounce')
    animationClick('#rolik-15', '#rolik-15', 'bounce')
    animationClick('#rolik-16', '#rolik-16', 'bounce')
    animationClick('#rolik-17', '#rolik-17', 'bounce')
    animationClick('#rolik-18', '#rolik-18', 'bounce')
    animationClick('#rolik-19', '#rolik-19', 'bounce')
    animationClick('#rolik-20', '#rolik-20', 'bounce')

    
    animationClick('#rolik-tiny-1', '#rolik-tiny-1', 'bounce')
    animationClick('#rolik-tiny-2', '#rolik-tiny-2', 'bounce')
    animationClick('#rolik-tiny-3', '#rolik-tiny-3', 'bounce')
    animationClick('#rolik-tiny-4', '#rolik-tiny-4', 'bounce')
    animationClick('#rolik-tiny-5', '#rolik-tiny-5', 'bounce')
    animationClick('#rolik-tiny-6', '#rolik-tiny-6', 'bounce')
    animationClick('#rolik-tiny-7', '#rolik-tiny-7', 'bounce')
    animationClick('#rolik-tiny-8', '#rolik-tiny-8', 'bounce')
    animationClick('#rolik-tiny-9', '#rolik-tiny-9', 'bounce')
    animationClick('#rolik-tiny-10', '#rolik-tiny-10', 'bounce')
    animationClick('#rolik-tiny-11', '#rolik-tiny-11', 'bounce')
    animationClick('#rolik-tiny-12', '#rolik-tiny-12', 'bounce')
    animationClick('#rolik-tiny-13', '#rolik-tiny-13', 'bounce')
    animationClick('#rolik-tiny-14', '#rolik-tiny-14', 'bounce')
    animationClick('#rolik-tiny-15', '#rolik-tiny-15', 'bounce')
    animationClick('#rolik-tiny-16', '#rolik-tiny-16', 'bounce')
    animationClick('#rolik-tiny-17', '#rolik-tiny-17', 'bounce')
    animationClick('#rolik-tiny-18', '#rolik-tiny-18', 'bounce')

    $(document).on('click', '#a',
        function () {
            $(this).toggleClass("b");
        });
});