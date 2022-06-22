</main>

<footer class="text-muted py-5 theme-color-red">
  <div class="container">
  <nav class="navbar navbar-footer navbar-expand-lg" aria-label="Offcanvas navbar large">
    <div class="container">
      <?php 
      if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
      }
      ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-white bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <?php wp_nav_menu([
		      'container' => '',
		      'theme_location'  => 'bottom',
          'items_wrap'     => '<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">%3$s</ul>'
	      ]);?>
        </div>
      </div>
    </div>
  </nav>
</div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?php wp_footer();?>
  </body>
</html>