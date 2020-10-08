<?php
/**
 * Plugin Name: WP Activity Log Extension for WooCommerce
 * Plugin URI: https://wpactivitylog.com/extensions/
 * Description: A WP Activity Log plugin extension for WooCommerce
 * Text Domain: wsal-woocommerce
 * Author: WP White Security
 * Author URI: http://www.wpwhitesecurity.com/
 * Version: 1.1
 * License: GPL2
 * Network: true
 *
 * @package Wsal
 * @subpackage Wsal Custom Events Loader
 */

/*
	Copyright(c) 2020  WP White Security  (email : info@wpwhitesecurity.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
	REQUIRED. Here we include and fire up the main core class. This will be needed regardless so be sure to leave line 37-39 in tact.
*/
require_once plugin_dir_path( __FILE__ ) . 'core/class-extension-core.php';
$core_settings = array(
	'text_domain'        => 'wsal-woocommerce',
	'custom_alert_path'  => trailingslashit( dirname( __FILE__ ) ) . 'wp-security-audit-log',
	'custom_sensor_path' => trailingslashit( trailingslashit( dirname( __FILE__ ) ) . 'wp-security-audit-log' . DIRECTORY_SEPARATOR . 'custom-sensors' ),
);
$wsal_extension = new WPWhiteSecurity\ActivityLog\Extensions\Common\Core( $core_settings );

/**
 * Adds new custom event objects for our plugin
 *
 * @method wsal_woocommerce_extension_add_custom_event_objects
 * @since  1.0.0
 * @param  array $objects An array of default objects.
 * @return array
 */
function wsal_woocommerce_extension_add_custom_event_objects( $objects ) {
	$new_objects = array(
		'woocommerce-product'  => __( 'WooCommerce Product', 'wsal-woocommerce' ),
		'woocommerce-store'    => __( 'WooCommerce Store', 'wsal-woocommerce' ),
		'woocommerce-coupon'   => __( 'WooCommerce Coupon', 'wsal-woocommerce' ),
		'woocommerce-category' => __( 'WooCommerce Category', 'wsal-woocommerce' ),
		'woocommerce-tag'      => __( 'WooCommerce Tag', 'wsal-woocommerce' ),
		'woocommerce-order'    => __( 'WooCommerce Order', 'wsal-woocommerce' ),
	);

	// combine the two arrays.
	$objects = array_merge( $objects, $new_objects );

	return $objects;
}

/**
 * Adds new ignored CPT for our plugin
 *
 * @method wsal_woocommerce_extension_add_custom_event_object_text
 * @since  1.0.0
 * @param  array $post_types An array of default post_types.
 * @return array
 */
function wsal_woocommerce_extension_add_custom_ignored_cpt( $post_types ) {
	$new_post_types = array(
		'product',             // WooCommerce Product CPT.
		'shop_coupon',         // WooCommerse Coupon CPT.
		'shop_order',          // WooCommerce Order CPT.
		'shop_order_refund',   // WooCommerce Order Refund CPT.
		'product_variation',   // WooCommerce Product Variation CPT.
		'wc_product_tab',      // WooCommerce Product Tab CPT.
	);

	// combine the two arrays.
	$post_types = array_merge( $post_types, $new_post_types );
	return $post_types;
}

/**
 * Adds new meta formatting for our plugion
 *
 * @method wsal_woocommerce_extension_add_custom_meta_format
 * @since  1.0.0
 */
function wsal_woocommerce_extension_add_custom_meta_format( $value, $name ) {
	$check_value = (string) $value;

	if ( '%EditorLinkProduct%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View product in editor', 'wsal-woocommerce' ) . '</a>';
		} else {
			return '';
		}
	}

	if ( '%StockOrderID%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			$order     = get_post( $value );
			$new_order = new WC_Order( $value );
			$editor_title = wsal_woocommerce_extension_get_order_title( $new_order );
			$editor_link  = wsal_woocommerce_extension_get_editor_link( $order );
			return '<br>' . __( 'Order name:', 'wsal-woocommerce' ) . ' <a target="_blank" href="' . esc_url( $editor_link['value'] ) . '">' . $editor_title . '</a>';
		} else {
			return '';
		}
	}

	if ( '%EditorLinkCoupon%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View coupon in editor', 'wsal-woocommerce' ) . '</a>';
		} else {
			return '';
		}
	}

	if ( '%OldCouponUsageMetaValue%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return 'Previous usage restriction: <strong>' . $check_value . '</strong><br>';
		} else {
			return '';
		}
	}
	if ( '%NewCouponUsageMetaValue%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return 'New usage restriction: <strong>' . $check_value . '</strong><br>';
		} else {
			return '';
		}
	}

	return $value;
}

/**
 * Adds new meta formatting for our plugion
 *
 * @method wsal_woocommerce_extension_add_custom_meta_format_value
 * @since  1.0.0
 */
 function wsal_woocommerce_extension_add_custom_meta_format_value( $value, $name ) {
 	$check_value = (string) $value;
	if ( '%ProductTagLink%' === $name ) {
 		if ( 'NULL' !== $check_value ) {
 			return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View tag', 'wsal-woocommerce' ) . '</a>';
 		} else {
 			return '';
 		}
 	}
	if ( '%EditorLinkProduct%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View product in editor', 'wsal-woocommerce' ) . '</a>';
		} else {
			return '';
		}
	}
	if ( '%EditorLinkCoupon%' === $name ) {
		if ( 'NULL' !== $check_value ) {
			return '<a target="_blank" href="' . esc_url( $value ) . '">' . __( 'View coupon in editor', 'wsal-woocommerce' ) . '</a>';
		} else {
			return '';
		}
	}
 	return $value;
 }

 function wsal_woocommerce_extension_load_public_sensors( $value ) {
	$value[] = 'FrontendWooCommerce';
 	return $value;
 }

 /**
	* Get editor link.
	*
	* @param WP_Post $post        - Product post object.
	* @return array  $editor_link - Name and value link.
	*/
function wsal_woocommerce_extension_get_editor_link( $post ) {
	 // Meta value key.
	 if ( 'shop_order' === $post->post_type ) {
		 $name = 'EditorLinkOrder';
	 } else {
		 $name = 'EditorLinkProduct';
	 }

	 // Get editor post link URL.
	 $value = get_edit_post_link( $post->ID );

	 // If the URL is not empty then set values.
	 if ( ! empty( $value ) ) {
		 $editor_link = array(
			 'name'  => $name, // Meta key.
			 'value' => $value, // Meta value.
		 );
	 } else {
		 // Get post object.
		 $post = get_post( $post->ID );

		 // Set URL action.
		 if ( 'revision' === $post->post_type ) {
			 $action = '';
		 } else {
			 $action = '&action=edit';
		 }

		 // Get and check post type object.
		 $post_type_object = get_post_type_object( $post->post_type );
		 if ( ! $post_type_object ) {
			 return;
		 }

		 // Set editor link manually.
		 if ( $post_type_object->_edit_link ) {
			 $link = admin_url( sprintf( $post_type_object->_edit_link . $action, $post->ID ) );
		 } else {
			 $link = '';
		 }

		 $editor_link = array(
			 'name'  => $name, // Meta key.
			 'value' => $link, // Meta value.
		 );
	 }

	 return $editor_link;
 }

 function wsal_woocommerce_extension_get_order_title( $order ) {
	 if ( ! $order ) {
		 return false;
	 }
	 if ( is_int( $order ) ) {
		 $order = new WC_Order( $order );
	 }
	 if ( ! $order instanceof WC_Order ) {
		 return false;
	 }

	 if ( $order->get_billing_first_name() || $order->get_billing_last_name() ) {
		 $buyer = trim( sprintf( '%1$s %2$s', $order->get_billing_first_name(), $order->get_billing_last_name() ) );
	 } elseif ( $order->get_billing_company() ) {
		 $buyer = trim( $order->get_billing_company() );
	 } elseif ( $order->get_customer_id() ) {
		 $user  = get_user_by( 'id', $order->get_customer_id() );
		 $buyer = ucwords( $user->display_name );
	 }
	 return '#' . $order->get_order_number() . ' ' . $buyer;
 }

/**
 * Add our filters.
 */
add_filter( 'wsal_link_filter', 'wsal_woocommerce_extension_add_custom_meta_format_value', 10, 2 );
add_filter( 'wsal_meta_formatter_custom_formatter', 'wsal_woocommerce_extension_add_custom_meta_format', 10, 2 );
add_filter( 'wsal_event_objects', 'wsal_woocommerce_extension_add_custom_event_objects' );
add_filter( 'wsal_ignored_custom_post_types', 'wsal_woocommerce_extension_add_custom_ignored_cpt' );
add_filter( 'wsal_load_public_sensors', 'wsal_woocommerce_extension_load_public_sensors' );
