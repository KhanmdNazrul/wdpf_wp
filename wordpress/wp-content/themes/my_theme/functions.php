<?php
add_theme_support('post-thumbnails');
// function mytheme_setup(){
//   add_theme_support('post_thumbnails');
// }
// add_action('init','mytheme_setup');

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu Location', 'my_theme' ) );
  //register_nav_menu( 'primary', __( 'Secondary Menu', 'my_theme' ) );
};

add_action( 'after_setup_theme', 'register_my_menu' );


function slider_post_type() {
	register_post_type('my_slider',
		array(
			'labels'      => array(
				'name'          => __('Sliders', 'my_theme'),
				'singular_name' => __('Slider', 'my_theme'),
			),
				'public'      => true,
				// 'has_archive' => true,
        'supports' => array('title','thumbnail')
		)
	);
}
add_action('init', 'slider_post_type');

function register_widget_areas() {
  register_sidebar(
  array(
  'id' => 'sidebar-1',
  'name' => esc_html__( 'Right Sidebar Area', 'my_theme' ),
  'description' => esc_html__( 'A new widget area made for testing purposes', 'my_theme' ),
  'before_widget' => '<div  class="box"><div class="heading">',
  'after_widget' => '</div></div>',
  
  )
  );

  register_sidebar(
    array(
    'id' => 'sidebar-2',
    'name' => esc_html__( 'Footer Sidebar', 'my_theme' ),
    'description' => esc_html__( 'A new widget area made for testing purposes', 'my_theme' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
    )
    );
  }
  add_action( 'widgets_init', 'register_widget_areas' );






?>