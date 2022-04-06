=== WP Activity Log for WooCommerce ===
Contributors: WPWhiteSecurity
Plugin URI: https://wpactivitylog.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.html
Tags: activity log for WooCommerce, WP Activity Log extension, activity logs
Requires at least: 4.5
Tested up to: 5.8.3
Stable tag: 1.4.0
Requires PHP: 7.0

Keep a detailed log of your team's changes in the WooCommerce store, products, orders & more.

== Description ==

WooCommerce allows you to setup an ecommerce solution and a team to manage your store, products, orders and much more. There can be so much going on in a WooCommerce powered based ecommerce solution that it is vital to keep a log of the changes that you and your team do to the store, products, orders and much more! This improves user accountability and eliminates guesswork when there are problems.

Keep a record of the changes that happen on your WooCommerce store, when someone changes product data or stock quantity, modifies, approves or refunds an order, creates a new coupon code and much more by installing this extension alongside the WP Activity Log plugin.

Refer to [activity log for WooCommerce](https://wpactivitylog.com/extensions/woocommerce-activity-log/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=WSAL&utm_content=plugin+repos+description) for more detailed information on this integration.

#### About WP Activity Log
[WP Activity Log](https://wpactivitylog.com/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=WSAL&utm_content=plugin+repos+description) is the most comprehensive real time activity log plugin for WordPress. It helps thousands administrators and security professionals keep an eye on what is happening on their websites and multisite networks.

WP Activity Log is also the most highly rated WordPress activity log plugin and have been featured on popular sites such as GoDaddy, ManageWP, Pagely, Shout Me Loud and WPKube.

### Getting started: activity logs for WooCommerce

To keep a log of the changes that happen on your WooCommerce store, products, orders, coupons and more simply:

1. Install the [WP Activity Log plugin](https://wpactivitylog.com/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=WSAL&utm_content=plugin+repos+description)
1. Install this extension from the section <i>Enable/disable events</i> > <i>Third party extensions</i>.

### With this extension you can keep a log of:

Below are some of the user and plugin changes you can keep a log of when you install this extension with the WP Activity Log plugin:

* WooCommerce store settings changes including address, payment gateway, shipping, tax and many other settings
* Product text and meta data changes such as SKU, stock quantity, price, attributes and more
* Orders changes such as when a user approves, modifies, refunds or completes an order
* Coupon changes, for example when a new coupon is created, or some values or usage restrictions are changed,


Refer to the [activity logs event IDs for WooCommerce](https://wpactivitylog.com/support/kb/list-wordpress-activity-log-event-ids/#woocommerce?utm_source=wordpress.org&utm_medium=referral&utm_campaign=WSAL&utm_content=plugin+repos+description) for a complete list of the changes the plugin can keep a log of.

== Installation ==

=== Install this extension for WooCommerce from within WP Activity Log (easiest method) ===

1. Navigate to the section <i>Enable/disable events</i> > <i>Third party extensions</i>.
1. Click <i>Install extension</i> under the WPForms logo and extension description.

=== Install this extension from within WordPress ===

1. Ensure WP Activity Log is already installed.
1. Visit 'Plugins > Add New'.
1. Search for 'WP Activity Log extension for WooCommerce'.
1. Install and activate the extension.

=== Install this extension manually ===

1. Ensure WP Activity Log is already installed.
1. Download the plugin and extract the files.
1. Upload the `wp-activity-log-for-woocommerce` folder to the `/wp-content/plugins/` folder on your website.
1. Activate the WP Activity Log extension for WooCommerce plugin from the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Support and Documentation =
Please refer to our [Support & Documentation pages](https://wpactivitylog.com/support/kb/?utm_source=wordpress.org&utm_medium=referral&utm_campaign=WSAL&utm_content=plugin+repos+description) for all the technical information and support documentation on the WP Activity Log plugin.

== Screenshots ==

1. The easiest way to install the extension is from within the WP Activity Log plugin.
1. Changes in WooCommerce, products and more reported in the WordPress activity log.

== Changelog ==

= 1.4.0 (2022-04-06) = 

Release notes: [Announcing Activity log for WooCommerce 1.4.0](https://wpactivitylog.com/activity-log-woocommerce-1-4-0/)

* **New event IDs for WooCommerce orders changes**
	* 9130: Added / removed a product from an order
	* 9131: Modified the quantity of a product in an order
	* 9132: Added / removed a fee from an order
	* 9133: Changed the amount of a fee in an order
	* 9134: Added / removed a coupon from an order
	* 9135: Added / removed tax from an order
	* 9136: Refund reversed on an order
	* 9137: Added / removed shipping from an order
	

* **New event IDs for changes in Currency settings**
	* 9115: Changed the Currency position
	* 9116: Changed the currency Thousand separator
	* 9117: Changed the currency Decimal separator
	* 9118: Changed the currency's number of decimals
	
* **New event IDs for WooCommerce webhook changes**
	* 9120: Added a new webhook
	* 9121: Deleted a webhook
	* 9122: Modified a webhook
	
* **New event IDs for WooCommerce product changes**
	* 9119: Changed the Low stock treshhold of a product
	
* **Improvement**
	* All code is now inline with the WordPress coding standard.
	* Product SKU is now added to every WooCommerce product activity log event.
	* Event ID 9029 now only correctly logged when the store's address is changed.
	* Added the reported "further details" to Event ID 9041, which reports an order refund.
	
* **Bug fixes**
	* Addressed error which occurs when updating a user profile for the first time.
	* Removed the "invalid offset" PHP errors.
	* Handled the exception when there is no "_tax_status" in a product.
	* Fixed: event ID 2001 triiggered when a coupon is created.
	
= 1.3.1 (2021-09-03) = 

Reversed the new feature "detection of when products are added to existing order" until some issues are addressed.

= 1.3.0 (2021-09-02) = 

Release notes: [Activity log extensions for Yoast SEO, WooCommerce & WPForms get a maintenance update](https://wpactivitylog.com/extensions-september-2021-update/)

* **New event IDs**
	* 9100: User allowed / disallowed reviews on WooCommerce store (changed the status of the Allow reviews setting).
	* 9107: User enabled/disabled the "Show verified owner label on reviews" setting in the WooCommerce store.
	* 9108: User changed the status of the "Reviews can only be left by verified owners" setting in the WooCommerce store.
	* 9109: User changed the status of the "Star rating on reviews" setting in the WooCommerce store.
	* 9110: User changed the status of the Star ratings should be required setting in the store.
	* 9111: Changed a Checkout endpoint on the WooCommerce store.
	* 9112: Changed an Account endpoint on the WooCommerce store.
	* 9113: The Tax status of a product was changed.
	* 9114: The Tax class of a product was changed.
	
* **Improvement**
	* Extension is now fully translatable.
	* WooCommerce orders sensor now can detect and keep a log of products added to an existing order.
	
* **Bug fixes**
	* Fixed: Plugin reports a number of incorrect events when the sale price of a product is changed.
	* Fixed: Plugin reported product page status instead of stock state in event ID 9018.
	* Fixed: Plugin reported wrong Event Type for event ID 9082 (WooCommerce shipping zone changes).

= 1.2.4 (2021-09-03) = 

Reversed the new feature "detection of when products are added to existing order" until some issues are addressed.

= 1.2.3 (2021-09-02) = 

Release notes: [Activity log extensions for Yoast SEO, WooCommerce & WPForms get a maintenance update](https://wpactivitylog.com/extensions-september-2021-update/)

* **New event IDs**
	* 9100: User allowed / disallowed reviews on WooCommerce store (changed the status of the Allow reviews setting).
	* 9107: User enabled/disabled the "Show verified owner label on reviews" setting in the WooCommerce store.
	* 9108: User changed the status of the "Reviews can only be left by verified owners" setting in the WooCommerce store.
	* 9109: User changed the status of the "Star rating on reviews" setting in the WooCommerce store.
	* 9110: User changed the status of the Star ratings should be required setting in the store.
	* 9111: Changed a Checkout endpoint on the WooCommerce store.
	* 9112: Changed an Account endpoint on the WooCommerce store.
	* 9113: The Tax status of a product was changed.
	* 9114: The Tax class of a product was changed.
	
* **Improvement**
	* Extension is now fully translatable.
	* WooCommerce orders sensor now can detect and keep a log of products added to an existing order.
	
* **Bug fixes**
	* Fixed: Plugin reports a number of incorrect events when the sale price of a product is changed.
	* Fixed: Plugin reported product page status instead of stock state in event ID 9018.
	* Fixed: Plugin reported wrong Event Type for event ID 9082 (WooCommerce shipping zone changes).
	
= 1.2.2 (2021-05-19) =

* **Improvement**
	* Replace depreciated meta filter (removed from WP Activity Log 4.3)
	
= 1.2.1 (2021-04-28) =

Release notes: [Major update of all the activity log extensions](https://wpactivitylog.com/core-update-extensions-2-0/)

* **Improvement**
	* Events now use the latest event format used in [WP Activity Log](https://wpactivitylog.com).
	* Updated the core to the latest improved core (better performance and more efficient).
	* Extension can now be activated only at network level.
	* Extension name added to plugin's admin notices.
	
* **Bug fixes**
	* Fixed issue with event IDs 9086 and 9087 and the coverage of the Selling location(s) setting in WooCommerce.
	* Fixed broken backward compatability issue.

= 1.2 (2020-11-02) =

Release notes: [Logs of software downloads & more reliable code](https://wpactivitylog.com/woocommerce-extension-1-2/)

* **New features & coverage**
	* Logging / monitoring of software downloads.
	* Logs for changes in software dowload expiry and limit settings.
	
* **New event IDs**
	* 9095: User added / removed product image
	* 9096: user modified product image
	* 9097: User modified the download limit of a product
	* 9098: User modified the download expire setting of a product
	* 9099: User / visitor downloaded the software product
	
* **Improvements**
	* Replaced old code with new standard template code for all [WP Activity Log extensions](https://wpactivitylog.com/extensions/) (more stable and efficient code).
	* Moved most of the front-end from the [WP Activity Log](https://wpactivitylog.com/) plugin.
	* Front-end sensors settings moved in the plugin's list of event IDs.
	
* **Bug fixes**
	* Event ID 9040 (edited orders detail) was reported when an order is placed.
	* First change in coupon's usage restriction was not being reported.

= 1.1 (2020-08-14) =

* **New event ID**
	* 9106: Product stock quantity changed automatically via a third party plugin.
	
* **Improvements**
	* Added a new section for product stock changes in the Enable/Disable events.
	* Better coverage of stock changes done via third party plugins.
	
* **Bug fixes**
	* Plugin was reporting multiple events when new product is saved as draft.
	* Event ID 9040 (modified order) when event ID 9036 (changed order status) was reported.
	
= 1.0 (2020-08-12) =

Release notes: [New activity log extension for WooCommerce](https://wpactivitylog.com/wsal-4-1-3/)

	*Initial release.
