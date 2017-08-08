function randomizeCubesat_position() {
  var col_classes=["cubesat-col-0","cubesat-col-1","cubesat-col-2",
    "cubesat-col-3","cubesat-col-4","cubesat-col-5","cubesat-col-6",
    "cubesat-col-7","cubesat-col-8","cubesat-col-9","cubesat-col-10",
    "cubesat-col-11"]
  var row_classes=["cubesat-row-0","cubesat-row-1","cubesat-row-2",
    "cubesat-row-3","cubesat-row-4","cubesat-row-5","cubesat-row-6",
    "cubesat-row-7","cubesat-row-8","cubesat-row-9"]

  $( ".cubesat" ).each(function( index ) {
    var row= Math.floor(Math.random()*(row_classes.length))
    var col= Math.floor(Math.random()*(col_classes.length))
    $(this).addClass(col_classes[col])
    $(this).addClass(row_classes[row])
    $(this).show()
    if(col === 0)
      col_classes.shift();
    else
      col_classes.splice(col, 1)
    if(row === 0)
      row_classes.shift()
    else
      row_classes.splice(row, 1)
  })
}

function plaxifyHeader() {
  // Set cubesat x range
  $('.cubesat-col-0').data('xrange',300)
  $('.cubesat-col-1').data('xrange',250)
  $('.cubesat-col-2').data('xrange',200)
  $('.cubesat-col-3').data('xrange',150)
  $('.cubesat-col-4').data('xrange',100)
  $('.cubesat-col-5').data('xrange',50)
  $('.cubesat-col-6').data('xrange',50)
  $('.cubesat-col-7').data('xrange',100)
  $('.cubesat-col-8').data('xrange',150)
  $('.cubesat-col-9').data('xrange',200)
  $('.cubesat-col-10').data('xrange',250)
  $('.cubesat-col-11').data('xrange',300)

  // Set cubesat y range
  $('.cubesat-row-0').data('yrange',250)
  $('.cubesat-row-1').data('yrange',200)
  $('.cubesat-row-2').data('yrange',150)
  $('.cubesat-row-3').data('yrange',100)
  $('.cubesat-row-4').data('yrange',50)
  $('.cubesat-row-5').data('yrange',50)
  $('.cubesat-row-6').data('yrange',100)
  $('.cubesat-row-7').data('yrange',150)
  $('.cubesat-row-8').data('yrange',200)
  $('.cubesat-row-9').data('yrange',250)

  // Set earth range
  $('#earth').data('xrange',230)
  $('#earth').data('yrange',230)

  // Plaxify
  $('.cubesat').plaxify()
  $('#earth').plaxify()
  $.plax.enable({ "activityTarget": $('header')})
}

$(document).ready(function () {
  randomizeCubesat_position()
  plaxifyHeader();
})
