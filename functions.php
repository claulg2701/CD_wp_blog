<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
	register_sidebar( array(
		'name' => ('First Widget'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));

    /*--- New Widget --- */
	register_sidebar( array(
		'name' => ('Footer Widget One'),
		'id' => 'footer-widget-one',
		'description' => 'First widget for our footer',
		'before_widget' => '<div class="widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));
	/*--- Second New Widget --- */
	register_sidebar( array(
		'name' => ('Footer Widget Two'),
		'id' => 'footer-widget-two',
		'description' => 'Second widget for our footer',
		'before_widget' => '<div class="widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));

  /*--- Third New Widget --- */
	register_sidebar( array(
		'name' => ('Footer Widget Three'),
		'id' => 'footer-widget-three',
		'description' => 'Third widget for our footer',
		'before_widget' => '<div class="widget-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		));
}
add_action('widgets_init', 'blank_widgets_init');

/*---------------- Site Logo -----------------*/
add_theme_support( 'custom-logo' );

function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'nextPrevPost-thumb', 250, 95, true );
?>
