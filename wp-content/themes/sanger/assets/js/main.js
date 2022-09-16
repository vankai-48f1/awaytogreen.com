(function ($) {
  // Wrap item sub-menu
  let submenuItems = $(".header-nav__menu li a");
  submenuItems.each((index, element) => {
    let submenuItemContent = $(element).text();
    $(element).html("<span>" + submenuItemContent + "</span>")
  })
  // Insert icon dropdown to sub menu panel bar
  $(".panel-bar__menu .menu-item.menu-item-has-children > a").append("<span class=\"toggle-drop-submenu\"></span>")
  // Drop down submenu panel bar
  $(".panel-bar__menu .menu-item.menu-item-has-children a .toggle-drop-submenu").on("click", function (e) {
    e.stopPropagation()
    $(this).closest(".menu-item").toggleClass("drop-active")
    return false;
  })
  // Open sub menu
  $(".panel-bar__menu .menu-item.menu-item-has-children > a").on("click", function (e) {
    e.stopPropagation();
  })

  // Replace input type submit contact form 7 to button
  const inputSubmitForm7Val = $('.wpcf7-form [type="submit"]').val();
  $('.wpcf7-form [type="submit"]').hide();
  $(`<button type="submit">${inputSubmitForm7Val}</button>`).insertAfter('.wpcf7-form [type="submit"]');

  $(document).ready(function () {
    // Open panel bar
    $('.hd-hamburger-btn').on('click', function (e) {
      e.preventDefault();
      $('#panel-bar').addClass('panel-open')
    })
    // Close panel bar
    $('.panel-bar__close-btn').on('click', function () {
      $('#panel-bar').removeClass('panel-open')
    })


    // change location map
    $('.contact-office__btn').on('click', function () {
      let ggMapUrl = new URL('https://maps.google.com/maps?q=coordinates&output=embed');
      let coordinates = $(this).find('input[name=office_coordinates]').val();

      $([document.documentElement, document.body]).animate({
        scrollTop: $(".contact-map").offset().top
      }, 300, 'linear');

      ggMapUrl.searchParams.set('q', coordinates);
      $('.contact__information-map > iframe').attr('src', ggMapUrl.toString());
    })
  })
})(jQuery)