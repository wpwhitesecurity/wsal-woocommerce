<?php

/**
 * Add our filters.
 */
add_filter( 'wsal_event_type_data', 'wsal_woocommerce_extension_add_custom_event_type', 10, 2 );
add_filter( 'wsal_link_filter', 'wsal_woocommerce_extension_add_custom_meta_format_value', 10, 2 );
add_filter( 'wsal_meta_formatter_custom_formatter', 'wsal_woocommerce_extension_add_custom_meta_format', 10, 2 );
add_filter( 'wsal_event_objects', 'wsal_woocommerce_extension_add_custom_event_objects' );
add_filter( 'wsal_ignored_custom_post_types', 'wsal_woocommerce_extension_add_custom_ignored_cpt' );
add_filter( 'wsal_load_public_sensors', 'wsal_woocommerce_extension_load_public_sensors' );
add_filter( 'wsal_togglealerts_sub_category_events', 'wsal_woocommerce_extension_togglealerts_sub_category_events' );
add_filter( 'wsal_togglealerts_sub_category_titles', 'wsal_woocommerce_extension_togglealerts_sub_category_titles', 10, 2 );
add_action( 'wsal_togglealerts_append_content_to_toggle', 'wsal_woocommerce_extension_append_content_to_toggle' );
add_action( 'wsal_togglealerts_process_save_settings', 'wsal_woocommerce_extension_togglealerts_process_save_settings', 10, 1 );

// Special events.
add_action( 'woocommerce_download_product', 'wsal_woocommerce_extension_detect_file_download', 10, 6 );

function wsal_woocommerce_extension_togglealerts_process_save_settings( $post_data ) {
  $wsal = WpSecurityAuditLog::GetInstance();
  if ( isset( $post_data['wc_all_stock_changes'] ) && ! empty( $post_data['wc_all_stock_changes'] ) ) {
    $wsal->SetGlobalBooleanSetting( 'wc-all-stock-changes', isset( $post_data['wc_all_stock_changes'] ) );
  }
}

/**
 * Detect file downloads within WC. This is here and not in a sensor as we currently cant seem to catch this filter
 * using the usual init priority.
 *
 * @param  string $download_get_user_email  User email.
 * @param  string $download_get_order_key   Order key.
 * @param  string $download_get_product_id  Item id.
 * @param  string $download_get_user_id     User ID.
 * @param  string $download_get_download_id Download ID.
 * @param  string $download_get_order_id    Order ID.
 */
function wsal_woocommerce_extension_detect_file_download( $download_get_user_email, $download_get_order_key, $download_get_product_id, $download_get_user_id, $download_get_download_id, $download_get_order_id ) {
  $product       = wc_get_product( $download_get_product_id );
  $product_title = $product->get_title();

  $wsal = WpSecurityAuditLog::GetInstance();

  if ( ! isset( $wsal->alerts ) ) {
    $wsal->alerts = new WSAL_AlertManager( $wsal );
  }

  $wsal->alerts->Trigger(
  	9099,
  	array(
  		'product_name'  => $product_title,
  		'ID'            => $download_get_product_id,
  		'email_address' => $download_get_user_email,
  	)
  );
}

/**
 * Append some extra content below an event in the ToggleAlerts view.
 */
function wsal_woocommerce_extension_append_content_to_toggle( $alert_id ) {

  if ( 9035 === $alert_id ) {
    $settings               = WpSecurityAuditLog::GetInstance()->settings();
    $frontend_events        = $settings::get_frontend_events();
    $enable_wc_for_visitors = ( isset( $frontend_events['woocommerce'] ) && $frontend_events['woocommerce'] ) ? true : false;
    ?>
    <tr>
      <td></td>
      <td>
        <input name="frontend-events[woocommerce]" type="checkbox" id="frontend-events[woocommerce]" value="1" <?php checked( $enable_wc_for_visitors ); ?> />
      </td>
      <td colspan="2"><?php esc_html_e( 'Keep a log of visitor orders, stock changes and other public events?', 'wsal-woocommerce' ); ?></td>
    </tr>
    <?php
  }

  if ( 9019 === $alert_id ) {
    $wsal = WpSecurityAuditLog::GetInstance();
    $wc_all_stock_changes = $wsal->GetGlobalBooleanSetting( 'wc-all-stock-changes', true );
    ?>
    <tr>
      <td></td>
      <td>
        <input name="wc_all_stock_changes" type="checkbox" id="wc_all_stock_changes" value="1" <?php checked( $wc_all_stock_changes ); ?> />
      </td>
      <td colspan="2"><?php esc_html_e( 'Log all stock changes. Disable this setting to only keep a log of stock changes done manually via the WooCommerce dashboard. Therefore automated stock changes typically done via customers placing orders or via other plugins will not be logged.', 'wsal-woocommerce' ); ?></td>
    </tr>
    <script type="text/javascript">
    jQuery(document).ready(function(){
      // Specific for alert 9019
      jQuery("input[value=9019]").on("change", function(){
        var check = jQuery("input[value=9019]").is(":checked");
        if(check) {
          jQuery("#wc_all_stock_changes").attr ( "checked" ,"checked" );
        } else {
          jQuery("#wc_all_stock_changes").removeAttr('checked');
        }
      });
    });
    </script>
    <?php
  }
}

/**
 * Adds new custom event objects for our plugin
 *
 * @method wsal_gravityforms_add_custom_event_type
 * @since  1.0.0
 * @param  array $tyes An array of default types.
 * @return array
 */
function wsal_woocommerce_extension_add_custom_event_type( $types ) {
 $new_types = array(
   'downloaded'   => __( 'Downloaded', 'wsal-woocommerce' ),
 );

 // combine the two arrays.
 $types = array_merge( $types, $new_types );

 return $types;
}

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
	$value[] = 'WooCommerce_Public';
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
 * Add sub cateogry titles to ToggleView page in WSAL.
 */
function wsal_woocommerce_extension_togglealerts_sub_category_titles( $title = '', $alert_id = '' ) {
  if ( 9105 === $alert_id ) {
		$title = esc_html__( 'Product stock changes:', 'wsal-woocommerce' );
	}
  if ( 9007 === $alert_id ) {
    $title = esc_html__( 'Product admin:', 'wsal-woocommerce' );
  }
  if ( 9015 === $alert_id ) {
    $title = esc_html__( 'Product changes:', 'wsal-woocommerce' );
  }
  if ( 9047 === $alert_id ) {
    $title = esc_html__( 'Product attributes:', 'wsal-woocommerce' );
  }
	return $title;
}

/**
 * Add specific events so we can use them for category titles.
 */
function wsal_woocommerce_extension_togglealerts_sub_category_events( $sub_category_events ) {
	$new_events          = array( 9105, 9007, 9015, 9047 );
	$sub_category_events = array_merge( $sub_category_events, $new_events );
	return $sub_category_events;
}

/**
 * In some cases depending on the version of WSAL, the input checkboxes are disabled as
 * WSAL things is_woocommerce_active is false. This ensures that cannot happen and the user is
 * always able to check/uncheck WC events as normal regardless of WSAL version.
 */
function wsal_woocommerce_extension_togglealerts_js_code() {
  global $current_screen;
  // Only dequeue on our admin pages.
  if ( isset( $current_screen->base ) && strpos( $current_screen->base, 'wsal-togglealerts' ) !== false ) {
    ?>
        <script type="text/javascript">
        jQuery(document).ready(function(){
          jQuery( '#tab-woocommerce [type="checkbox"]' ).removeAttr( 'disabled' );
        });
        </script>
    <?php
  }
}

add_action( 'admin_footer', 'wsal_woocommerce_extension_togglealerts_js_code' );
