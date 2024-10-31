<?php
/**
 * Plugin Name: Pattern
 * Description: A growing collection of beautiful block patterns, or website sections, that make it super easy to quickly build beautiful websites.
 * Version: 1.0.6
 * Plugin URI: https://blockhandbook.com
 * Author: Blockhandbook
 * Author URI: https://twitter.com/leeshadle
 * Domain Path: /languages
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Tested up to: 5.5
 * Requires at least: 5.5
 * Requires PHP: 7.0
 * Text Domain: pattern
 *
 * @package Pattern
 */

namespace Pattern;

require __DIR__ . '/vendor/autoload.php';

if ( ! class_exists( 'Plugin' ) ) :
	/**
	 * Plugin Class.
	 *
	 * @since 1.0.0
	 */
	class Plugin {

		/**
		 * Class instance.
		 *
		 * @var Plugin
		 */
		private static $instance = null;

		/**
		 * Plugin Path.
		 *
		 * @var string
		 */
		public $plugin_dir_path;

		/**
		 * Plugin URL.
		 *
		 * @var string
		 */
		public $plugin_dir_url;

		/**
		 * Plugin slug.
		 *
		 * @var string
		 */
		public $slug;

		/**
		 * Plugin slug_snake_case.
		 *
		 * @var string
		 */
		public $slug_snake_case;

		/**
		 * Plugin textdomain.
		 *
		 * @var string
		 */
		public $textdomain;

		/**
		 * Plugin version.
		 *
		 * @var string
		 */
		public $version;

		/**
		 * Plugin constructor.
		 * Called immediately when you instantiate a class.
		 * Really good article on setting up constructors for WP classes.
		 * https://carlalexander.ca/designing-class-wordpress-hooks/
		 */
		private function __construct() {
			// filesystem directory i.e. /var/home/www/blockhandbook/wp-content/plugins/.
			$this->plugin_dir_path = plugin_dir_path( __FILE__ );
			// web address w/ trailing slash.
			// i.e. - http://blockhandbook.com/wp-content/plugins/.
			$this->plugin_dir_url  = plugin_dir_url( __FILE__ );
			$this->slug            = 'pattern';
			$this->slug_snake_case = 'pattern';
			$this->textdomain      = 'pattern';
			$this->version         = '1.0.6';
		}

		/**
		 * Return Plugin Instance.
		 *
		 * @return object\Plugin
		 */
		public static function get_instance() {
			if ( null === self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Load the plugin.
		 *
		 * @return void
		 */
		public static function load() {

			// You can find these classes in the includes/ directory.
			LoadTranslations::register();
			EnqueueAssets::register();
			RegisterBlockPatterns::register();

		}
	}
endif;

Plugin::load();
