<?php
// свой класс построения меню:
function include_styles() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/css/style.css');
}
 
add_action('wp_enqueue_scripts', 'include_styles');
function include_scripts(){
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', '', '1.0', false);
    wp_register_script( 'filter', get_stylesheet_directory_uri() . '/js/filter.js', array( 'jquery' ), time(), true );
    wp_enqueue_script( 'filter' );
    wp_localize_script( 'filter', 'true_obj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
 
add_action('wp_enqueue_scripts', 'include_scripts');

register_nav_menus(array(
  'top'  => 'Primary',
  'bottom'  => 'Bottom Primary',
));

add_theme_support( 'custom-logo', array(
  'height'      => 100,
  'width'       => 200,
  'flex-height' => true, // если гибкая высота.
  'flex-width'  => true, // если гибкая ширина.
  'header-text' => array( 'site-title', 'site-description' ),
  'unlink-homepage-logo' => false, // убрать или оставить ссылку на главную ver. WP 5.5.
) );

function register_blocks() {
  if( function_exists( 'acf_register_block_type' ) ) {
      acf_register_block_type(array(
          'name'              => 'hotnews',
          'title'             => __('Hot News'),
          'description'       => __('Hot news custom block'),
          'render_template'   => 'template/hotnews.php',
          'category'          => 'formatting',
      ));
  }
}
add_action( 'acf/init', 'register_blocks' );

function create_post_type(){
  register_post_type( 'Clients',
  array(
    'labels' => array(
      'name' => __('Clients'),
      'singular_name' => __('Client')
    ),
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
  )
  );
}
add_action('init', 'create_post_type');

function filter_function(){
  $args = array(
    'post_type' => 'Clients',
	 	'orderby' => 'date', // сортировка по дате у нас будет в любом случае (но вы можете изменить/доработать это)
	 	'order'	=> $_POST[ 'date' ] // ASC или DESC
	 );
  $the_query = new WP_Query( $args ); 
  if ( $the_query->have_posts() ) { 
    while ( $the_query->have_posts() ) : $the_query->the_post(); 
              echo '<li class="wp-block-post  clients type-clients status-publish hentry">
                      <div class="wp-block-columns are-vertically-aligned-center">
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%">
                          <figure class="wp-block-post-featured-image">' . get_the_post_thumbnail( '', 'full') . '</figure>
                        </div>
                      </div>
                  </li>';
	 	endwhile;
	 } else {
	 	echo 'Ничего не найдено';
	 }
   die();
}
add_action( 'wp_ajax_myfilter', 'filter_function' ); 
add_action( 'wp_ajax_nopriv_myfilter', 'filter_function' );




