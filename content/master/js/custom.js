$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('#a:in-viewport(-300)').css('transform', 'translateX(10em)');
    });
    
    animationClick('#bounce-1', '#bounce-1', 'bounce')
    animationClick('#bounce-2', '#bounce-2', 'bounce')
    animationClick('#bounce-3', '#bounce-3', 'bounce')
    animationClick('#bounce-4', '#bounce-4', 'bounce')
    animationClick('#bounce-5', '#bounce-5', 'bounce')
    animationClick('#bounce-6', '#bounce-6', 'bounce')
    animationClick('#bounce-7', '#bounce-7', 'bounce')
    animationClick('#bounce-8', '#bounce-8', 'bounce')
    animationClick('#bounce-9', '#bounce-9', 'bounce')
    animationClick('#bounce-10', '#bounce-10', 'bounce')
    animationClick('#bounce-11', '#bounce-11', 'bounce')
    animationClick('#bounce-12', '#bounce-12', 'bounce')
    animationClick('#bounce-13', '#bounce-13', 'bounce')
    animationClick('#bounce-14', '#bounce-14', 'bounce')
    animationClick('#bounce-15', '#bounce-15', 'bounce')
    animationClick('#bounce-16', '#bounce-16', 'bounce')
    animationClick('#bounce-17', '#bounce-17', 'bounce')
    animationClick('#bounce-18', '#bounce-18', 'bounce')
    animationClick('#bounce-19', '#bounce-19', 'bounce')
    animationClick('#bounce-20', '#bounce-20', 'bounce')
    animationClick('#bounce-21', '#bounce-21', 'bounce')
    animationClick('#bounce-22', '#bounce-22', 'bounce')
    animationClick('#bounce-23', '#bounce-23', 'bounce')
    animationClick('#bounce-24', '#bounce-24', 'bounce')
    animationClick('#bounce-25', '#bounce-25', 'bounce')
    animationClick('#bounce-26', '#bounce-26', 'shake')
    animationClick('#bounce-27', '#bounce-27', 'shake')
    animationClick('#bounce-28', '#bounce-28', 'shake')
    animationClick('#bounce-29', '#bounce-29', 'shake')
    animationClick('#bounce-30', '#bounce-30', 'bounce')
    animationClick('#bounce-31', '#bounce-31', 'bounce')
    animationClick('#bounce-32', '#bounce-32', 'bounce')

    $(document).on('click', '#a',
        function () {
            $(this).toggleClass("b");
        });
});