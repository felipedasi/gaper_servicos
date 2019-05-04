<
script >
    $(".mat-input").focus(function() {
        $(this).parent().addClass("is-active is-completed");
    });

$(".mat-input").focusout(function() {
    if ($(this).val() === "")
        $(this).parent().removeClass("is-completed");
    $(this).parent().removeClass("is-active");
})




$(document).ready(function() {
    $('.parallax').parallax();
});

//</script>campo nome-efeito-->



$(document).ready(function() {
    M.updateTextFields();
});
<!--selects -->
<
script > document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
});

// Or with jQuery

$(document).ready(function() {
    $('select').formSelect();
}); < /script>