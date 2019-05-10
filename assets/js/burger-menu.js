jQuery(document).ready(function () {
    jQuery('.toggle-nav').click(function (e) {
        jQuery('.site-navigation primary-navigation').slideToggle(500);

        e.preventDefault();
    });

});