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
  })
})(jQuery)