<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title><?php wp_title('|', true, 'right');?></title>
    <?php wp_head();?>
  </head>
  <body>
  </head>
  <body>
    
<main>
  <nav class="navbar navbar-expand-lg bg-transparent position-absolute w-100" aria-label="Offcanvas navbar large">
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
		      'theme_location'  => 'top',
          'items_wrap'     => '<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">%3$s</ul>'
	      ]);?>
        <form style="position: relative;" action="">
          <input type="search" placeholder="Search here..." class="search">
          <img class="search-icon" src="http://localhost/wp_test/wp-content/uploads/2022/06/Vector-2.png">
        </form>
        </div>
      </div>
    </div>
  </nav>

