<?php
/**
 * Fired during plugin activation
 *
 * @link       http://themeisle.com
 * @since      3.0.0
 *
 * @package    feedzy-rss-feeds
 * @subpackage feedzy-rss-feeds/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      3.0.0
 * @package    feedzy-rss-feeds
 * @subpackage feedzy-rss-feeds/includes
 * @author     Themeisle <friends@themeisle.com>
 */
class Feedzy_Rss_Feeds_Activator {

	/**
	 * Plugin activation action.
	 *
	 * Triggers the plugin activation action on plugin activate.
	 *
	 * @since    3.0.0
	 * @access   public
	 */
	public static function activate() {
		$options = get_option( Feedzy_Rss_Feeds::get_plugin_name(), array() );
		if ( ! isset( $options['is_new'] ) ) {
			update_option( Feedzy_Rss_Feeds::get_plugin_name(), array(
				'is_new' => 'yes',
			) );
		}

	}

}
