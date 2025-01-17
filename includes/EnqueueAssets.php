<?php
/**
 * Enqueue script and style assets.
 *
 * @package Pattern
 */

namespace Pattern;

/**
 * Enqueue script and style assets.
 *
 * @since 1.0.0
 */
class EnqueueAssets {

	/**
	 * The plugin instance.
	 *
	 * @var array
	 */
	private $plugin_instance;

	/**
	 * Register class with appropriate WordPress hooks
	 */
	public static function register() {
		$instance = new self();
		add_action( 'enqueue_block_editor_assets', array( $instance, 'enqueue_editor_styles' ) );
		add_action( 'init', array( $instance, 'enqueue_styles' ) );
		add_action( 'enqueue_block_editor_assets', array( $instance, 'enqueue_scripts' ) );
	}

	/**
	 * Construct the class.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function __construct() {
		$this->plugin_instance = Plugin::get_instance();
	}

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	public function enqueue_styles() {

		// Shortcuts for variables.
		$plugin_instance = $this->plugin_instance;
		$slug            = $plugin_instance->slug;
		$plugin_dir_url  = $plugin_instance->plugin_dir_url;
		$version         = $plugin_instance->version;

		// Enqueue common frontend & editor styles.
		wp_enqueue_style(
			$slug . '-style',
			$plugin_dir_url . 'build/style-index.css',
			array(),
			$version
		);

		// Enqueue tailwind styles.
		wp_enqueue_style(
			$slug . '-tailwind',
			$plugin_dir_url . 'build/tailwind.css',
			array(),
			$version
		);
	}

	/**
	 * Enqueue editor styles.
	 *
	 * @return void
	 */
	public function enqueue_editor_styles() {

		// Shortcuts for variables.
		$plugin_instance = $this->plugin_instance;
		$slug            = $plugin_instance->slug;
		$plugin_dir_url  = $plugin_instance->plugin_dir_url;
		$version         = $plugin_instance->version;

		// Enqueue editor only styles.
		wp_enqueue_style(
			$slug . '-style-editor',
			$plugin_dir_url . 'build/index.css',
			array(),
			$version
		);
	}

	/**
	 * Register scripts.
	 *
	 * @return void
	 */
	public function enqueue_scripts() {
		// Shortcuts for variables.
		$plugin_instance = $this->plugin_instance;
		$slug            = $plugin_instance->slug;
		$plugin_dir_path = $plugin_instance->plugin_dir_path;
		$plugin_dir_url  = $plugin_instance->plugin_dir_url;

		// Register scripts.
		// Dynamically load dependencies using index.asset.php generated by
		// @wordpress/dependency-extraction-webpack-plugin.
		$script_asset = require "$plugin_dir_path/build/index.asset.php";

		wp_enqueue_script(
			$slug . '-block-editor',
			$plugin_dir_url . 'build/index.js',
			$script_asset['dependencies'],
			$script_asset['version'],
			true
		);
	}
}
