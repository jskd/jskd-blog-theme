      </div> <!-- /.container -->
    </main>

    <footer class="w3-row  w3-theme-d4 w3-medium hidden-print">
      <div class="w3-row row-max-width">
        <div class="w3-col s6 m4 l2">
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
             <div class="w3-col s6 m4 l2">
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
      <div class="w3-row w3-theme-d5">
      <div class="w3-row-padding row-max-width">

<div class="w3-cell-row w3-small w3-margin-top w3-margin-bottom">
  <div class="w3-cell w3-right-align w3-cell-middle">

                Ce site est mis à disposition selon les termes de la
                <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licence Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0 International</a><br>
                Copyright © 2017 <a class="decoration-none w3-hover-theme" href="<?php get_home_url(); ?>">jeromeskoda.fr</a>


  </div>

  <div class="w3-cell w3-cell-middle">
                <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">
                  <img alt="Licence Creative Commons" style="border-width:0; margin: auto 0 auto 10px;" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" />
                </a>
</div>


</div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php echo get_theme_file_uri() ?>/assets/js/jquery-3.2.1.min.js" type="text/javascript"> </script>
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
