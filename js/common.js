$('#menu').on('click', function() {
  $('#drop').toggleClass('animate');
})

$('#close').on('click', function() {
  $('#drop').toggleClass('animate');
})
$('#drop a').on('click', function() {
  $('#drop').toggleClass('animate');
})

$("#modal").iziModal();


var quantity_input = $('#quantity_input');
var quantity = $('#quantity');

function quantityPlus() {
  let col = quantity_input.val();
  col = Number(col) + 1;
  quantity_input.val(col);
  quantity.text(col);
}

function quantityMinus() {
  let col = quantity_input.val();
  col = Number(col) - 1;
  if(col <= 1) {
    quantity_input.val(1);
    quantity.text(1);
  } else {
    quantity_input.val(col);
    quantity.text(col);
  }
}