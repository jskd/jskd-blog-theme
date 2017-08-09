      </div> <!-- /.container -->
    </main>

    <footer class="container-fluid  w3-theme-d4 w3-medium">
      <div class="row">
        <div class="col-12">
          <div class="container footer-container" >
            <div class="row">
              <div class="col-md-3">
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
              <div class="col-md-3">
                <h3>Dernier articles</h3>
                <ul class="list-style-none padding-0">
                  <li>
                    <i class="fa fa-github-square" aria-hidden="true"></i>
                    Github
                  </li>
                  <li>
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    Linkedin
                  </li>
                  <li>
                    <i class="fa fa-rss-square" aria-hidden="true"></i>
                    RSS
                  </li>
                  <li>
                    <i class="fa fa-envelope-square" aria-hidden="true"></i>
                    Newsletter
                  </li>
                </ul>
              </div>
                <div class="col-md-3">
                  <h3>Dernier comentaires</h3>     
                <ul class="list-style-none padding-0">
                    <li>
                      <i class="fa fa-github-square" aria-hidden="true"></i>
                      Github
                    </li>
                    <li>
                      <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    Linkedin
                  </li>
                  <li>
                    <i class="fa fa-rss-square" aria-hidden="true"></i>
                    RSS
                  </li>
                  <li>
                    <i class="fa fa-envelope-square" aria-hidden="true"></i>
                    Newsletter
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
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
      <div class="row w3-theme-d5">
        <div class="col-12 w3-center">
          <p class="w3-padding-16">
          © Copyright 2017 – <a class="decoration-none w3-hover-theme" href="<?php get_home_url(); ?>">jeromeskoda.fr</a>
          </p>
        </div>
      </div>
    </footer>

    <script src="<?php echo get_theme_file_uri() ?>/assets/js/jquery-3.2.1.min.js" ></script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/css/bootstrap-4.0.0-alpha6-dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/js/plax/js/plax.js" ></script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/js/cubesat-plax.js" ></script>
    <script src="<?php echo get_theme_file_uri() ?>/assets/js/menu.js" ></script>
    <?php wp_footer(); ?>

  </body>
</html>
