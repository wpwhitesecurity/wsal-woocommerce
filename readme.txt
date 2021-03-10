=== WP Activity Log for WooCommerce ===
Contributors: WPWhiteSecurity
Plugin URI: https://wpactivitylog.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.html
Tags: activity log for WooCommerce, WP Activity Log extension, activity logs
Requires at least: 3.6
Tested up to: 5.7
Stable tag: 1.2
Requires PHP: 5.6

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
