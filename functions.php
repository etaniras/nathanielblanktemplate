<?php

/*------------------------Enable Widgets-------------------------*/

function blank_template_widgets() {
	register_sidebar( array(
		'name' => ('First Widget'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
		register_sidebar( array(
		'name' => ('Footer left'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	
	register_sidebar( array(
		'name' => ('Footer Middle'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
		register_sidebar( array(
		'name' => ('Footer right'),
		'id' => 'first-widget',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	)
}
add_action('widgets_init', 'blank_widgets_init');

/*------------------------Enable Menu-------------------------*/

add_theme_support('menus');


?>
