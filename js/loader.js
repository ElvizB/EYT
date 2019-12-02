// loading website
window.onload = function() {
  $("#mdb-preloader").fadeOut();
  $("body").removeClass("oculto");
};

// dropdown
$("#open").click(function() {
  $(this)
    .children("#prueba")
    .slideToggle();
});

$(".btn-triger").click(function() {
  $(this)
    .closest(".float-btn-group")
    .toggleClass("open");
});

$(document).on("click", "li", function() {
  $(this)
    .addClass("activo")
    .siblings()
    .removeClass("activo");
});
