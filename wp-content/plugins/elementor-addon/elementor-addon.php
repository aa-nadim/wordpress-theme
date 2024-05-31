<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.21.0
 * Elementor Pro tested up to: 3.21.0
 */

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/hello-world-widget-1.php' );
	require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	require_once( __DIR__ . '/widgets/widget.php' );
	$widgets = [
					[
						'title' => 'WIdget 1',
						'id' => 'test_widget_1',
						'icon' => 'eicon-code',
						'categories' => ['basic'],
						'fields' => [
							[
								'id' => 'title',
								'name' => 'Title',
								'type' => 'text',
								'std' => 'Hello World'
							],
							[
								'id' => 'subtitle',
								'name' => 'Subtitle',
								'type' => 'textarea',
								'std' => 'Hello World'
							]
						]
					],
					[
						'title' => 'WIdget 2',
						'id' => 'test_widget_2',
						'icon' => 'eicon-code',
						'categories' => ['basic'],
						'fields' => [
							[
								'id' => 'title',
								'name' => 'Title',
								'type' => 'text',
								'std' => 'Hello World'
							],
							[
								'id' => 'subtitle',
								'name' => 'Subtitle',
								'type' => 'textarea',
								'std' => 'Hello World'
							]
						]
					]
				];
	foreach ($widgets as $widget) {
		$widgets_manager->register(new \My_Widget($widget));
	}
	
	$widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );