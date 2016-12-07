$(function () {

    $('#a:in-viewport').addClass('animated fadeInDown');

    $(window).scroll(function () {
        $('#a:in-viewport(-300)').css('transform', 'translateX(10em)');
    });
    
    animationClick('#creature-1', '#creature-1', 'shake')
    animationClick('#creature-2', '#creature-2', 'shake')
    animationClick('#creature-3', '#creature-3', 'shake')
    animationClick('#creature-4', '#creature-4', 'shake')
    animationClick('#creature-5', '#creature-5', 'shake')
    animationClick('#creature-6', '#creature-6', 'wobble')
    animationClick('#creature-7', '#creature-7', 'bounce')
    animationClick('#creature-8', '#creature-8', 'shake')
    animationClick('#creature-9', '#creature-9', 'shake')
    animationClick('#creature-10', '#creature-10', 'shake')
    animationClick('#creature-11', '#creature-11', 'shake')
    animationClick('#creature-12', '#creature-12', 'shake')
    animationClick('#creature-13', '#creature-13', 'shake')
    animationClick('#creature-14', '#creature-14', 'shake')
    animationClick('#creature-15', '#creature-15', 'shake')
    
    animationClick('#bat-touch-1', '#bat-touch-1', 'wobble')
    animationClick('#bat-touch-2', '#bat-touch-2', 'wobble')
    animationClick('#bat-touch-3', '#bat-touch-3', 'wobble')
    animationClick('#bat-touch-4', '#bat-touch-4', 'wobble')
    animationClick('#bat-touch-5', '#bat-touch-5', 'wobble')
    animationClick('#bat-touch-6', '#bat-touch-6', 'wobble')
    animationClick('#bat-touch-7', '#bat-touch-7', 'wobble')

    $(document).on('click', '#a',
        function () {
            $(this).toggleClass("b");
        });
});