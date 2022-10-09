$(function () {
  $("#slider-range").slider({
    range: true,
    min: 0,
    max: 1500000,
    values: [0, 1500000],
    slide: function (event, ui) {
      $("#amount").val("IDR " + ui.values[0] + " - IDR " + ui.values[1]);
    },
  });
  $("#amount").val(
    "IDR " +
      $("#slider-range").slider("values", 0) +
      " - IDR " +
      $("#slider-range").slider("values", 1)
  );
});
