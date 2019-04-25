$(".mat-input").focus(function() {
  $(this)
    .parent()
    .addClass("is-active is-completed");
});

$(".mat-input").focusout(function() {
  if ($(this).val() === "")
    $(this)
      .parent()
      .removeClass("is-completed");
  $(this)
    .parent()
    .removeClass("is-active");
});

document.addEventListener("DOMContentLoaded", function() {
  var elems = document.querySelectorAll(".carousel");
  var instances = M.Carousel.init(elems, options);
});

// Or with jQuery

$(document).ready(function() {
  $(".carousel").carousel();
});

$(document).ready(function() {
  $(".parallax").parallax();
});
