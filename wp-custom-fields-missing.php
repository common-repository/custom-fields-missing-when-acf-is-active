<?php
/**
 * Plugin Name
 *
 * @package           wp-custom-fields-missing
 * @author            Francisco Gálvez
 * @copyright         2021 IguannaWeb
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Fields Missing When ACF is Active
 * Plugin URI:        https://wordpress.org/plugin/wp-custom-fields-missing
 * Description:       This plugin shows again the custom fields block when the ACF plugin is activated.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      5.6
 * Author:            Francisco Gálvez
 * Author URI:        https://iguannaweb.com
 * Text Domain:       wp-custom-fields-missing
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
 
 add_filter('acf/settings/remove_wp_meta_box', '__return_false');
