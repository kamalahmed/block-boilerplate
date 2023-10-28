<?php
/**
* Plugin Name: Explore Block
* Plugin URI: https://github.com/kamalahmed
* Description: This plugin shows example of different block editor elements
* Version: 1.0
* Author: Kamal Ahmed
* Author URI: https://github.com/kamalahmed
* Text Domain: explore-block
* Domain Path: languages/
* Requires at least: 6.0
* Requires PHP: 7.4
*
*/


class ExploreBlock{
	public function __construct() {
		add_action( 'init', [$this, 'register_block'] );
	}

	/**
	 * Registers the block using the metadata loaded from the `block.json` file.
	 * Behind the scenes, it registers also all assets so that they can be enqueued
	 * through the block editor in the corresponding context.
	 *
	 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
	 * @return void
	 */
	public function register_block() {
		register_block_type_from_metadata( __DIR__ );

	}

	/**
	 * It outputs the markup for the block frontend as well backend.
	 * @return string|null
	 */
	function render_latest_products_block($attributes) {

	}


}


new ExploreBlock;
