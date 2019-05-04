$("#adicionado").click(function() {
    Materialize.toast("SERVIÇO ADICIONADO COM SUCESSO!", 4000, "rounded");
});
$("#toast").click(function() {
    Materialize.toast("SERVIÇO ADICIONADO COM SUCESSO!", 4000, "rounded");
});
// start carrousel
$(".carousel.carousel-slider").carousel({
    fullWidth: true,
    indicators: true
});

// move next carousel
$(".moveNextCarousel").click(function(e) {
    e.preventDefault();
    e.stopPropagation();

    $('.carousel').carousel('next', 3);
});
$('.carousel').carousel({
    autoplay: true
});

// move prev carousel
$(".movePrevCarousel").click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    $(".carousel").carousel("prev");
});

var carousel = $(".carousel.carousel-slider").carousel();
// Disable all swipping on carousel
if (typeof window.ontouchstart !== "undefined") {
    carousel.off("touchstart.carousel");
}
carousel.off("mousedown.carousel");

//select do finalizar

$(document).ready(function() {
    $("select").material_select();
});

document.addEventListener("DOMContentLoaded", function() {
    var elems = document.querySelectorAll(".datepicker");
    var instances = M.Datepicker.init(elems, options);
});

$(document).ready(function() {
    $("select").material_select();
    $(".datepicker").pickdate({
        selectMonths: true,
        selectYears: 15
    });
});

// Or with jQuery

$(document).ready(function() {
    $(".tap-target").tapTarget();
});
//textarea
$("#textarea1").val("OBS");
M.textareaAutoResize($("#textarea1"));
//modal

var instance = M.Modal.getInstance(elem);

/* jQuery Method Calls
    You can still use the old jQuery plugin method calls.
    But you won't be able to access instance properties.

    $('.modal').modal('methodName');
    $('.modal').modal('methodName', paramName);
  */

document.addEventListener("DOMContentLoaded", function() {
    var elems = document.querySelectorAll(".tap-target");
    M.TapTarget.init(elems);
});

function next(n) {
    var inst;

    // Get each of the elements
    var elems = document.querySelectorAll(".tap-target");

    var current = n;
    var prev = --n;

    // If a previous target is open, close it.
    if (prev >= 0) {
        inst = M.TapTarget.getInstance(elems[prev]);
        inst.close();
        inst.destroy();
    }

    // Then, open the new target
    inst = M.TapTarget.getInstance(elems[current]);
    inst.open();
}

// Close any open targets at the end of the process.
function closeAll() {
    $(".tap-target").tapTarget("close");
    $(".tap-target").tapTarget("destroy");
}
//modal 2
$(document).ready(function() {
    $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 800);
    });
});

$('.carousel.carousel-slider').carousel({});