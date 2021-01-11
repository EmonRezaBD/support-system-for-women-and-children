// fixed menu on scroll for desktop
$(window).scroll(function() {
    if ($(this).scrollTop() > 40) {
        $('#nav').addClass("fixed-top");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
    } else {
        $('#nav').removeClass("fixed-top");
        // remove padding top from body
        $('body').css('padding-top', '0');
    }
});
// end
// Shake elements
$('[data-shake]').click(function(e) {
    $(this).toggleClass('shake-me');
});
//