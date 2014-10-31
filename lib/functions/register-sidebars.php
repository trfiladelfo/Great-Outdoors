<?php
/**
* Register widget area.
*
* @link http://codex.wordpress.org/Function_Reference/register_sidebar
*/

if ( ! function_exists( 'great_outdoors_widgets_init' ) ) :
	function great_outdoors_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'great-outdoors' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );
		register_sidebar( array(
			'name'          => __( 'Footer Widgets', 'great-outdoors' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Footer widgets area appearing in the site footer.', 'great-outdoors' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		) );
	}
endif;
add_action( 'widgets_init', 'great_outdoors_widgets_init' );