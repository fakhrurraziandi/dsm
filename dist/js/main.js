$(document).ready(function() {
  var offCanvasHeight = function() {
    $(".offCanvas").css({
      "max-height": document.documentElement.clientHeight
    });
  };
  offCanvasHeight();
  $(window).resize(function() {
    offCanvasHeight();
  });
  $(".offCanvasToggler, .overlay").on("click", function() {
    $(".wrapper").toggleClass("active");
  });
});