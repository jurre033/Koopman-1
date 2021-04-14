(function ($, wp) {
    $(document).ready(function () {

        $(window).scroll(function () {
            if ($(window).scrollTop() > 10) {
                $('nav.menu').addClass('scrolled');
            } else {
                $('nav.menu').removeClass('scrolled');
            }
        });

    });
})(jQuery, wordpress);
