      </div> <!-- /.container -->
    </main>

    <footer class="container-fluid  w3-theme-d4 w3-medium hidden-print">
      <div class="row">
        <div class="col-12">
          <div class="container footer-container" >
            <div class="row no-gutters">
             <div class="col-6 col-sm-4 col-md-3 col-lg-2">
               <h3>Navigation</h3>
               <ul class="list-style-none padding-0">
<?php
wp_nav_menu( array(
  'theme_location' => 'menu-footer',
  'container'       => '',
  'items_wrap'      => '%3$s',
  'link_before' => '',
  'link_after' => '',
  'before' => '',
  'after' => '',
  'walker'  => new  WalkerMenuFooter()
)); ?>
                </ul>
              </div>
             <div class="col-6 col-sm-4 col-md-3 col-lg-2">
               <h3>Suivez-moi</h3>
               <ul class="list-style-none padding-0">
<?php
wp_nav_menu( array(
  'theme_location' => 'menu-social-list',
  'container'       => '',
  'items_wrap'      => '%3$s',
  'link_before' => '',
  'link_after' => '',
  'before' => '',
  'after' => '',
  'walker'  => new  WalkerMenuSocialList()
)); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row w3-theme-d5 padding-0">
        <div class="container padding-0">
          <div class="col-12 w3-right-align padding-0">
            <p class="w3-margin-top w3-margin-bottom">
            © Copyright 2017 – <a class="decoration-none w3-hover-theme" href="<?php get_home_url(); ?>">jeromeskoda.fr</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?php echo get_theme_file_uri() ?>/assets/js/jquery-3.2.1.min.js" type="text/javascript"> </script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/css/bootstrap-4.0.0-alpha6-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/js/plax/js/plax.js" type="text/javascript"></script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/js/dotdotdot/src/jquery.dotdotdot.js" type="text/javascript"></script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/js/cubesat-plax.js" type="text/javascript"></script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/js/menu.js" type="text/javascript"></script>
    <?php wp_footer(); ?>

<script>
    $(document).ready(function() {
    	$(".comment-ellipsis").dotdotdot({
    		/*	The text to add as ellipsis. */
    		ellipsis	: '...',
    		/*	How to cut off the text/html: 'word'/'letter'/'children' */
    		wrap		: 'word',
    		/*	Wrap-option fallback to 'letter' for long words */
    		fallbackToLetter: true,
    		/*	jQuery-selector for the element to keep and put after the ellipsis. */
    		after		: null,
     
    		/*	Whether to update the ellipsis: true/'window' */
    		watch		: false,
    	
    		/*	Optionally set a max-height, can be a number or function.
    			If null, the height will be measured. */
    		height		: null,
     
    		/*	Deviation for the height-option. */
    		tolerance	: 0,
     
    		/*	Callback function that is fired after the ellipsis is added,
    			receives two parameters: isTruncated(boolean), orgContent(string). */
    		callback	: function( isTruncated, orgContent ) {},
     
    		lastCharacter	: {
     
    			/*	Remove these characters from the end of the truncated text. */
    			remove		: [ ' ', ',', ';', '.', '!', '?' ],
     
    			/*	Don't add an ellipsis if this array contains 
    				the last character of the truncated text. */
    			noEllipsis	: []
    		}
    	});
    });
</script>

  </body>
</html>
