 $(document).ready(function () {
    $(".menu-dropdown:not(.submenu-active)").hover(function () {
      $(this).toggleClass("submenu-hover");
    });
   
  });