jQuery(document).ready(function ($) {
  // Open Search Window
  $("#searchIcon").click(function () {
    $(".search-window").addClass("search-active");
  });

  // Close Search Window
  $(".search-close").click(function () {
    $(".search-window").removeClass("search-active");
  });

  // Shrink a Header on Scroll
  // $(window).scroll(function () {
  //   if ($(this).scrollTop() > 50) {
  //     // $("#sticky-header").css("font-size", "30px");
  //   } else {
  //     // $("#sticky-header").css("font-size", "90px");
  //   }
  // });
});
