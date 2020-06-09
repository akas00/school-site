//mobile-menu

jQuery(document).ready(function () {
    jQuery(document).on('click', '.hamburger-menu', function (e) {
        jQuery('.mobile-menu').toggleClass('show');
        jQuery('body').toggleClass('show');
        jQuery('.mobile-menu').toggleClass('active');
        jQuery(this).toggleClass('active');
        e.stopPropagation()
    });

    jQuery(document).on('click', 'body', function (e) {
        // jQuery('.header-right.show').removeClass('show');
        // jQuery('body.show').removeClass('show');
        // jQuery('.hamburger-menu.active').removeClass('active');
        e.stopPropagation()
    });

    jQuery(".card-header .btn").click(function () {
        jQuery(this).addClass("active");
    });

});


jQuery('.mobile-menu li').has('ul').addClass('menu-dropdown');

jQuery('.menu-dropdown').on('click', function () {
    jQuery(this).children('.drop-menu').slideToggle(200);
});
jQuery('.country-switcher').on('click', function () {
    jQuery('.country-switcher-menu').slideToggle(200);
});


$(function() {
      $( '.nav li' ).on( 'click', function() {
            // $( this ).parent().find( 'li.active' ).removeClass( 'active' );
            // $( this ).addClass( 'active' );
            $(this).addClass('active').siblings().removeClass('active')
      });






