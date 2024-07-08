jQuery(document).ready(function ($) {
  // Open Search Window
  $("#searchIcon").click(function () {
    $(".search-window").addClass("search-active");
  });
  // Close Search Window
  $(".search-close").click(function () {
    $(".search-window").removeClass("search-active");
  });
});
