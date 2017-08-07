    </div> <!-- /.container -->
  </main>

  <footer class="container-fluid">
    <div class="container footer-container">
      
	<div class="row">

		<div class="col-md-8">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>
    </div>

    </div>

  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

 <script src="<?php echo get_theme_file_uri() ?>/assets/js/plax/js/plax.js" ></script>


<script type="text/javascript">



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
  $('#earth').data('xrange',300)
  $('#earth').data('yrange',250)

  // Plaxify
  $('.cubesat').plaxify()
  $('#earth').plaxify()
  $.plax.enable({ "activityTarget": $('header')})





  }


$(document).ready(function () {
  randomizeCubesat_position()
  plaxifyHeader();
  })
</script>

    <?php wp_footer(); ?> 
  </body>
</html>
