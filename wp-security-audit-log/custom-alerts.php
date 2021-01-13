<?php

$custom_alerts = array(
	__( 'WooCommerce', 'wsal-woocommerce' ) => array(
		__( 'Products', 'wsal-woocommerce' ) => array(
			array( 9000, WSAL_LOW, __( 'User created a new product', 'wsal-woocommerce' ), __( 'Created new product called %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'created' ),
			array( 9001, WSAL_MEDIUM, __( 'User published a product', 'wsal-woocommerce' ), __( 'Published the product called %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'published' ),
			array( 9003, WSAL_LOW, __( 'User changed the category of a product', 'wsal-woocommerce' ), __( 'Changed the category of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous categories: %OldCategories% %LineBreak% New categories: %NewCategories% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9004, WSAL_INFORMATIONAL, __( 'User modified the short description of a product', 'wsal-woocommerce' ), __( 'Changed the short description of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9005, WSAL_LOW, __( 'User modified the text of a product', 'wsal-woocommerce' ), __( 'Changed the text of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9006, WSAL_LOW, __( 'User changed the URL of a product', 'wsal-woocommerce' ), __( 'Changed the URL of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous URL: %OldUrl% %LineBreak% New URL: %NewUrl% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9007, WSAL_MEDIUM, __( 'User changed the Product Data of a product', 'wsal-woocommerce' ), __( 'Changed the type of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous type: %OldType% %LineBreak% New type: %NewType% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9008, WSAL_INFORMATIONAL, __( 'User changed the date of a product', 'wsal-woocommerce' ), __( 'Changed the date of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous date: %OldDate% %LineBreak% New date: %NewDate% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9009, WSAL_MEDIUM, __( 'User changed the visibility of a product', 'wsal-woocommerce' ), __( 'Changed the visibility of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous visibility: %OldVisibility% %LineBreak% New visibility: %NewVisibility% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9010, WSAL_MEDIUM, __( 'User modified the product', 'wsal-woocommerce' ), __( 'Modified the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9011, E_NOTICE, __( 'User modified the draft product', 'wsal-woocommerce' ), __( 'Modified the draft product %ProductTitle%. View the product: %EditorLinkProduct%.', 'wsal-woocommerce' ), 'woocommerce-product' ),
			array( 9012, WSAL_HIGH, __( 'User moved a product to trash', 'wsal-woocommerce' ), __( 'Moved the product %ProductTitle% to trash %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus%', 'wsal-woocommerce' ), 'woocommerce-product', 'deleted' ),
			array( 9013, WSAL_MEDIUM, __( 'User permanently deleted a product', 'wsal-woocommerce' ), __( 'Permanently deleted the product %ProductTitle% %LineBreak% Product ID: %PostID%', 'wsal-woocommerce' ), 'woocommerce-product', 'deleted' ),
			array( 9014, WSAL_HIGH, __( 'User restored a product from the trash', 'wsal-woocommerce' ), __( 'Restored the product %ProductTitle% from trash %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'restored' ),
			array( 9015, WSAL_MEDIUM, __( 'User changed status of a product', 'wsal-woocommerce' ), __( 'Changed the status of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Previous status: %OldStatus% %LineBreak% New status: %NewStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9072, WSAL_INFORMATIONAL, __( 'User opened a product in the editor', 'wsal-woocommerce' ), __( 'Opened the product %ProductTitle% in the editor %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'opened' ),
			array( 9073, WSAL_INFORMATIONAL, __( 'User viewed a product', 'wsal-woocommerce' ), __( 'Viewed the product %ProductTitle% page %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'viewed' ),
			array( 9077, WSAL_MEDIUM, __( 'User renamed a product', 'wsal-woocommerce' ), __( 'Previous name: %OldTitle% %LineBreak% New name: %NewTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'renamed' ),

			array( 9016, WSAL_MEDIUM, __( 'User changed type of a price', 'wsal-woocommerce' ), __( 'Changed the %PriceType% of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous price: %OldPrice% %LineBreak% New price: %NewPrice% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9017, WSAL_MEDIUM, __( 'User changed the SKU of a product', 'wsal-woocommerce' ), __( 'Changed the SKU of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous SKU: %OldSku% %LineBreak% New SKU: %NewSku% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9018, WSAL_LOW, __( 'User changed the stock status of a product', 'wsal-woocommerce' ), __( 'Changed the stock status of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous stock status: %OldStatus% %LineBreak% New stock status: %NewStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9020, WSAL_MEDIUM, __( 'User set a product type', 'wsal-woocommerce' ), __( 'Changed the type of the %NewType% product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous type: %OldType% %LineBreak% New type: %NewType% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9021, WSAL_INFORMATIONAL, __( 'User changed the weight of a product', 'wsal-woocommerce' ), __( 'Changed the weight of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous weight: %OldWeight% %LineBreak% New weight: %NewWeight% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9022, WSAL_INFORMATIONAL, __( 'User changed the dimensions of a product', 'wsal-woocommerce' ), __( 'Changed the %DimensionType% dimensions of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous value: %OldDimension% %LineBreak% New value: %NewDimension% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9023, WSAL_MEDIUM, __( 'User added the Downloadable File to a product', 'wsal-woocommerce' ), __( 'Added a downloadable file to the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% File name: %FileName% %LineBreak% File URL: %FileUrl% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9024, WSAL_MEDIUM, __( 'User Removed the Downloadable File from a product', 'wsal-woocommerce' ), __( 'Removed the downloadable file from the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% File name: %FileName% %LineBreak% File URL: %FileUrl% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9025, WSAL_INFORMATIONAL, __( 'User changed the name of a Downloadable File in a product', 'wsal-woocommerce' ), __( 'Changed the name of the downloadable file to the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous file name: %OldName% %LineBreak% New file name: %NewName% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9026, WSAL_MEDIUM, __( 'User changed the URL of the Downloadable File in a product', 'wsal-woocommerce' ), __( 'Changed the URL of the downloadable file to the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% File name: %FileName% %LineBreak% Previous URL: %OldUrl% %LineBreak% New URL: %NewUrl% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9042, WSAL_INFORMATIONAL, __( 'User changed the catalog visibility of a product', 'wsal-woocommerce' ), __( 'Changed the product visibility of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous visibility setting: %OldVisibility% %LineBreak% New visibility setting: %NewVisibility% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9043, WSAL_INFORMATIONAL, __( 'User changed the setting Featured Product of a product', 'wsal-woocommerce' ), __( 'The setting Featured Product for the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'enabled' ),
			array( 9044, WSAL_INFORMATIONAL, __( 'User changed the Allow Backorders setting of a product', 'wsal-woocommerce' ), __( 'Changed the Allow Backorders setting for the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous status: %OldStatus% %LineBreak% New status: %NewStatus% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9045, WSAL_MEDIUM, __( 'User added/removed products to upsell of a product', 'wsal-woocommerce' ), __( 'Products to Upsell in the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% New product in Upsells: %UpsellTitle% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'added' ),
			array( 9046, WSAL_MEDIUM, __( 'User added/removed products to cross-sells of a product', 'wsal-woocommerce' ), __( 'Product to Cross-sell in the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% New product in Cross-sells: %CrossSellTitle% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'added' ),

			array( 9095, WSAL_LOW, __( 'Added or deleted a product image', 'wp-security-audit-log' ), __( 'A product image to the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Image name: %name% %LineBreak% Image path: %path% %LineBreak% %EditorLinkProduct%', 'wp-security-audit-log' ), 'woocommerce-product', 'added' ),
			array( 9096, WSAL_LOW, __( 'Modified a product image', 'wp-security-audit-log' ), __( 'The product image of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous image name: %old_name% %LineBreak% Previous image path: %old_path% %LineBreak% New image name: %name% %LineBreak% New image path: %path% %LineBreak% %EditorLinkProduct%', 'wp-security-audit-log' ), 'woocommerce-product', 'modified' ),
			array( 9097, WSAL_LOW, __( 'Modified the download limit of the product', 'wp-security-audit-log' ), __( 'The download limit of the product %product_name% %LineBreak% Product ID: %ID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous value: %previous_value% %LineBreak% New value: %new_value% %LineBreak% %EditorLinkProduct%', 'wp-security-audit-log' ), 'woocommerce-product', 'modified' ),
			array( 9098, WSAL_LOW, __( 'Modified the download expire setting of the product', 'wp-security-audit-log' ), __( 'The download expire setting of the product %product_name% %LineBreak% Product ID: %ID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous value: %previous_value% %LineBreak% New value: %new_value% %LineBreak% %EditorLinkProduct%', 'wp-security-audit-log' ), 'woocommerce-product', 'modified' ),
			array( 9099, WSAL_LOW, __( 'A product was downloaded', 'wp-security-audit-log' ), __( 'Downloaded the product %product_name% %LineBreak% Product ID: %ID% %LineBreak% User email: %email_address%', 'wp-security-audit-log' ), 'woocommerce-product', 'modified' ),

			array( 9105, WSAL_LOW, __( 'System changed the stock quantity of a product', 'wsal-woocommerce' ), __( 'The stock quantity of the product %ProductTitle% was changed due to a purchase. %LineBreak% Product ID: %PostID% %LineBreak% User name: %Username% %StockOrderID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous quantity: %OldValue% %LineBreak% New quantity: %NewValue% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9106, WSAL_LOW, __( 'Third-party plugin changed the stock quantity of a product', 'wsal-woocommerce' ), __( 'The stock quantity of the product %ProductTitle% was changed via third party system. %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous quantity: %OldValue% %LineBreak% New quantity: %NewValue% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9019, WSAL_LOW, __( 'User changed the stock quantity', 'wsal-woocommerce' ), __( 'Changed the stock quantity of the product %ProductTitle% %LineBreak% Product ID: %PostID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous quantity: %OldValue% %LineBreak% New quantity: %NewValue% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),

			array( 9047, WSAL_LOW, __( 'Added a new attribute of a product', 'wsal-woocommerce' ), __( 'A new attribute to the product %ProductTitle% %LineBreak% Product ID: %ProductID% %LineBreak% Product status: %ProductStatus% %LineBreak% Attribute name: %AttributeName% %LineBreak% Attribute value: %AttributeValue% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'added' ),
			array( 9048, WSAL_LOW, __( 'Modified the value of an attribute of a product', 'wsal-woocommerce' ), __( 'Modified the value of an attribute in the product %ProductTitle% %LineBreak% Product ID: %ProductID% %LineBreak% Product status: %ProductStatus% %LineBreak% Attribute name: %AttributeName% %LineBreak% Previous attribute value: %OldValue% %LineBreak% New attribute value: %NewValue% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
			array( 9049, WSAL_LOW, __( 'Changed the name of an attribute of a product', 'wsal-woocommerce' ), __( 'Changed the name of an attribute in the product %ProductTitle% %LineBreak% Product ID: %ProductID% %LineBreak% Product status: %ProductStatus% %LineBreak% Previous attribute name: %OldValue% %LineBreak% New attribute name: %NewValue% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'renamed' ),
			array( 9050, WSAL_LOW, __( 'Deleted an attribute of a product', 'wsal-woocommerce' ), __( 'An attribute from the product %ProductTitle% %LineBreak% Product ID: %ProductID% %LineBreak% Product status: %ProductStatus% %LineBreak% Attribute name: %AttributeName% %LineBreak% Attribute value: %AttributeValue% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'deleted' ),
			array( 9051, WSAL_LOW, __( 'Set the attribute visibility of a product', 'wsal-woocommerce' ), __( 'Changed the visibility of an attribute in the product %ProductTitle% %LineBreak% Product ID: %ProductID% %LineBreak% Product status: %ProductStatus% %LineBreak% Attribute name: %AttributeName% %LineBreak% New attribute visibility: %AttributeVisiblilty% %LineBreak% %EditorLinkProduct%', 'wsal-woocommerce' ), 'woocommerce-product', 'modified' ),
		),

		__( 'Store', 'wsal-woocommerce' ) => array(
			array( 9027, WSAL_HIGH, __( 'User changed the Weight Unit', 'wsal-woocommerce' ), __( 'Changed the <strong>weight unit</strong> of the store %LineBreak% Previous weight unit: %OldUnit% %LineBreak% New weight unit: %NewUnit%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9028, WSAL_HIGH, __( 'User changed the Dimensions Unit', 'wsal-woocommerce' ), __( 'Changed the <strong>dimensions unit</strong> of the store %LineBreak% Previous dimensions unit: %OldUnit% %LineBreak% New dimensions unit: %NewUnit%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9029, WSAL_HIGH, __( 'User changed the Base Location', 'wsal-woocommerce' ), __( 'Changed the <strong>base location</strong> %LineBreak% Previous address: %OldLocation% %LineBreak% New address: %NewLocation%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9030, WSAL_HIGH, __( 'User enabled/disabled taxes', 'wsal-woocommerce' ), __( '<strong>Taxes</strong> in WooCommerce', 'wsal-woocommerce' ), 'woocommerce-store', 'enabled' ),
			array( 9031, WSAL_HIGH, __( 'User changed the currency', 'wsal-woocommerce' ), __( 'Changed the <strong>currency</strong> of the store %LineBreak% Previous currency: %OldCurrency% %LineBreak% New currency: %NewCurrency%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9032, WSAL_HIGH, __( 'User enabled/disabled the use of coupons during checkout', 'wsal-woocommerce' ), __( 'The store setting <strong>use of coupons during checkout</strong>', 'wsal-woocommerce' ), 'woocommerce-store', 'enabled' ),
			array( 9033, WSAL_MEDIUM, __( 'User enabled/disabled guest checkout', 'wsal-woocommerce' ), __( '<strong>Guest checkout</strong> in the store', 'wsal-woocommerce' ), 'woocommerce-store', 'enabled' ),
			array( 9034, WSAL_HIGH, __( 'User enabled/disabled Cash on delivery', 'wsal-woocommerce' ), __( 'The store setting <strong>cash on delivery</strong>', 'wsal-woocommerce' ), 'woocommerce-store', 'enabled' ),
			array( 9085, WSAL_HIGH, __( 'User modified selling location(s)', 'wsal-woocommerce' ), __( 'The setting <strong>Selling location(s)</strong> %LineBreak% Previous setting: %old% %LineBreak% New Setting: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9086, WSAL_HIGH, __( 'User modified excluded selling location(s)', 'wsal-woocommerce' ), __( 'Changed the list of <strong>excluded countries to sell to</strong> %LineBreak% Previous list of countries: %old% %LineBreak% New list of countries: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9087, WSAL_HIGH, __( 'User modified exclusive selling location(s)', 'wsal-woocommerce' ), __( 'The store setting <strong>list of countries to sell to</strong> %LineBreak% Previous list of countries: %old% %LineBreak% New list of countries: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9088, WSAL_HIGH, __( 'User modified shipping location(s)', 'wsal-woocommerce' ), __( 'The store setting <strong>Shipping location(s)</strong> %LineBreak% Previous setting: %old% %LineBreak% New Setting: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9089, WSAL_HIGH, __( 'User modified exclusive shipping location(s)', 'wsal-woocommerce' ), __( 'The store setting <strong>List of specific countries to ship to</strong> %LineBreak% Previous list of countries: %old% %LineBreak% New list of countries: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9090, WSAL_HIGH, __( 'User modified default customer location', 'wsal-woocommerce' ), __( 'The store setting <strong>Default customer location</strong> %LineBreak% Previous location: %old% %LineBreak% New location: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9091, WSAL_HIGH, __( 'User modified the cart page', 'wsal-woocommerce' ), __( 'Changed the store\'s <strong>Cart Page</strong> %LineBreak% Previous page: %old% %LineBreak% New page: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9092, WSAL_HIGH, __( 'User modified the checkout page', 'wsal-woocommerce' ), __( 'Changed the store\'s <strong>Checkout page</strong> %LineBreak% Previous page: %old% %LineBreak% New page: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9093, WSAL_HIGH, __( 'User modified the my account page', 'wsal-woocommerce' ), __( 'Changed the store\'s <strong>My account page</strong> %LineBreak% Previous page: %old% %LineBreak% New page: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9094, WSAL_HIGH, __( 'User modified the terms and conditions page', 'wsal-woocommerce' ), __( 'Changed the store\'s <strongTerms and conditions page</strong %LineBreak% Previous page: %old% %LineBreak% New page: %new%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
		),

		__( 'Payment Gateways', 'wsal-woocommerce' ) => array(
			array( 9074, WSAL_HIGH, __( 'User enabled/disabled a payment gateway', 'wsal-woocommerce' ), __( 'The payment gateway %GatewayName%', 'wsal-woocommerce' ), 'woocommerce-store', 'enabled' ),
			array( 9075, E_CRITICAL, __( 'User disabled a payment gateway', 'wsal-woocommerce' ), __( 'The payment gateway %GatewayName%', 'wsal-woocommerce' ), 'woocommerce-store' ),
			array( 9076, WSAL_HIGH, __( 'User modified a payment gateway', 'wsal-woocommerce' ), __( 'The payment gateway %GatewayName%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
		),

		__( 'Tax Settings', 'wsal-woocommerce' ) => array(
			array( 9078, WSAL_LOW, __( 'User modified prices with tax option', 'wsal-woocommerce' ), __( 'The store setting <strong>Prices entered with tax</strong> to %TaxStatus% taxes', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9079, WSAL_LOW, __( 'User modified tax calculation base', 'wsal-woocommerce' ), __( 'The store setting <strong>Calculate tax based on</strong> to %Setting%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9080, WSAL_MEDIUM, __( 'User modified shipping tax class', 'wsal-woocommerce' ), __( 'The store setting <strong>Shipping tax class</strong> to %Setting%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9081, WSAL_MEDIUM, __( 'User enabled/disabled rounding of tax', 'wsal-woocommerce' ), __( 'The store tax setting <strong>Rounding</strong> of tax at subtotal level', 'wsal-woocommerce' ), 'woocommerce-store', 'enabled' ),
			array( 9082, WSAL_MEDIUM, __( 'User modified a shipping zone', 'wsal-woocommerce' ), __( 'The shipping zone %ShippingZoneName% on the WooCommerce store', 'wsal-woocommerce' ), 'woocommerce-store', 'created' ),
		),

		__( 'WC Categories', 'wsal-woocommerce' ) => array(
			array( 9002, WSAL_INFORMATIONAL, __( 'User created a new product category', 'wsal-woocommerce' ), __( 'A new product category called %CategoryName% %LineBreak% Category slug: %Slug% %LineBreak% %ProductCatLink%', 'wsal-woocommerce' ), 'woocommerce-category', 'created' ),
			array( 9052, WSAL_MEDIUM, __( 'User deleted a product category', 'wsal-woocommerce' ), __( 'The product category called %CategoryName% %LineBreak% Category slug: %CategorySlug%', 'wsal-woocommerce' ), 'woocommerce-category', 'deleted' ),
			array( 9053, WSAL_INFORMATIONAL, __( 'User changed the slug of a product category', 'wsal-woocommerce' ), __( 'The slug of the product category called %CategoryName% %LineBreak% Previous category slug: %OldSlug% %LineBreak% New category slug: %NewSlug% %LineBreak% %ProductCatLink%', 'wsal-woocommerce' ), 'woocommerce-category', 'modified' ),
			array( 9054, WSAL_MEDIUM, __( 'User changed the parent category of a product category', 'wsal-woocommerce' ), __( 'The parent of the product category %CategoryName% %LineBreak% Category slug: %CategorySlug% %LineBreak% Previous parent: %OldParentCat% %LineBreak% New parent: %NewParentCat% %LineBreak% %ProductCatLink%', 'wsal-woocommerce' ), 'woocommerce-category', 'modified' ),
			array( 9055, WSAL_INFORMATIONAL, __( 'User changed the display type of a product category', 'wsal-woocommerce' ), __( 'The display type of the product category %CategoryName% %LineBreak% Category slug: %CategorySlug% %LineBreak% Previous display type: %OldDisplayType% %LineBreak% New display type: %NewDisplayType% %LineBreak% %ProductCatLink%', 'wsal-woocommerce' ), 'woocommerce-category', 'modified' ),
			array( 9056, WSAL_LOW, __( 'User changed the name of a product category', 'wsal-woocommerce' ), __( 'Previous category name: %OldName% %LineBreak% New category name: %NewName% %LineBreak% Category slug: %CategorySlug% %LineBreak% %ProductCatLink%', 'wsal-woocommerce' ), 'woocommerce-category', 'renamed' ),
		),

		__( 'WC Tags', 'wsal-woocommerce' ) => array(
			array( 9101, WSAL_INFORMATIONAL, __( 'User created a new product tag', 'wsal-woocommerce' ), __( 'Tag name: %CategoryName% %LineBreak% Slug: %Slug% %LineBreak% %ProductTagLink%', 'wsal-woocommerce' ), 'woocommerce-tag', 'created' ),
			array( 9102, WSAL_INFORMATIONAL, __( 'User deleted a product tag', 'wsal-woocommerce' ), __( 'Tag name: %Name% %LineBreak% Slug: %Slug%', 'wsal-woocommerce' ), 'woocommerce-tag', 'deleted' ),
			array( 9103, WSAL_INFORMATIONAL, __( 'User renamed product tag', 'wsal-woocommerce' ), __( 'Previous tag name: %OldName% %LineBreak% New name: %NewName% %LineBreak% Slug: %Slug% %LineBreak% %ProductTagLink%', 'wsal-woocommerce' ), 'woocommerce-tag', 'renamed' ),
			array( 9104, WSAL_INFORMATIONAL, __( 'User changed product tag slug', 'wsal-woocommerce' ), __( 'Changed the slug of the tag: %TagName% %LineBreak% Previous slug: %OldSlug% %LineBreak% New slug: %NewSlug% %LineBreak% %ProductTagLink%', 'wsal-woocommerce' ), 'woocommerce-tag', 'modified' ),
		),

		__( 'Attributes', 'wsal-woocommerce' ) => array(
			array( 9057, WSAL_MEDIUM, __( 'User created a new attribute', 'wsal-woocommerce' ), __( 'A new attribute in WooCommerce called %AttributeName% %LineBreak% Attribute slug: %AttributeSlug%', 'wsal-woocommerce' ), 'woocommerce-store', 'created' ),
			array( 9058, WSAL_LOW, __( 'User deleted an attribute', 'wsal-woocommerce' ), __( 'The WooCommerce attribute %AttributeName% %LineBreak% Attribute slug: %AttributeSlug%', 'wsal-woocommerce' ), 'woocommerce-store', 'deleted' ),
			array( 9059, WSAL_LOW, __( 'User changed the slug of an attribute', 'wsal-woocommerce' ), __( 'The slug of the WooCommerce attribute %AttributeName% %LineBreak% Previous slug: %OldSlug% %LineBreak% New slug: %NewSlug%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9060, WSAL_LOW, __( 'User changed the name of an attribute', 'wsal-woocommerce' ), __( 'The name of the WooCommerce attribute %AttributeName% %LineBreak% Attribute slug: %AttributeSlug% %LineBreak% Previous name: %OldName% %LineBreak% New name: %NewName%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9061, WSAL_LOW, __( 'User changed the default sort order of an attribute', 'wsal-woocommerce' ), __( 'The Default Sorting Order of the attribute %AttributeName% in WooCommerce in WooCommerce %LineBreak% Attribute slug: %AttributeSlug% %LineBreak% Previous sorting order: %OldSortOrder% %LineBreak% New sorting order: %NewSortOrder%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9062, WSAL_LOW, __( 'User enabled/disabled the option Enable Archives of an attribute', 'wsal-woocommerce' ), __( 'The option <strong>Enable Archives</strong> in WooCommerce attribute %AttributeName% %LineBreak% Attribute slug: %Slug%', 'wsal-woocommerce' ), 'woocommerce-store', 'enabled' ),
		),

		__( 'Coupons', 'wsal-woocommerce' ) => array(
			array( 9063, WSAL_LOW, __( 'User published a new coupon', 'wsal-woocommerce' ), __( 'WooCommerce coupon: %CouponName% %LineBreak% %EditorLinkCoupon%', 'wsal-woocommerce' ), 'woocommerce-coupon', 'published' ),
			array( 9064, WSAL_LOW, __( 'User changed the discount type of a coupon', 'wsal-woocommerce' ), __( 'The Discount Type in coupon %CouponName% %LineBreak% Previous discount type: %OldDiscountType% %LineBreak% New discount type: %NewDiscountType% %LineBreak% %EditorLinkCoupon%', 'wsal-woocommerce' ), 'woocommerce-coupon', 'modified' ),
			array( 9065, WSAL_LOW, __( 'User changed the coupon amount of a coupon', 'wsal-woocommerce' ), __( 'The Coupon amount in coupon %CouponName% %LineBreak% Previous amount: %OldAmount% %LineBreak% New amount: %NewAmount% %LineBreak% %EditorLinkCoupon%', 'wsal-woocommerce' ), 'woocommerce-coupon', 'modified' ),
			array( 9066, WSAL_LOW, __( 'User changed the coupon expire date of a coupon', 'wsal-woocommerce' ), __( 'The expire date of the coupon %CouponName% %LineBreak% Previous date: %OldDate% %LineBreak% New date: %NewDate% %LineBreak% %EditorLinkCoupon%', 'wsal-woocommerce' ), 'woocommerce-coupon', 'modified' ),
			array( 9067, WSAL_LOW, __( 'User changed the usage restriction settings of a coupon', 'wsal-woocommerce' ), __( 'The <strong>Usage restriction</strong> of the coupon %CouponName% %LineBreak% Usage restriction parameter: %MetaKey% %LineBreak% Previous value: %OldMetaValue% %LineBreak% New value: %NewMetaValue% %LineBreak% %EditorLinkCoupon%', 'wsal-woocommerce' ), 'woocommerce-coupon', 'modified' ),
			array( 9068, WSAL_LOW, __( 'User changed the usage limits settings of a coupon', 'wsal-woocommerce' ), __( 'The <strong>Usage limits</strong> of the coupon %CouponName% %LineBreak% Previous usage limits: %OldMetaValue% %LineBreak% New usage limits: %NewMetaValue% %LineBreak% %EditorLinkCoupon%', 'wsal-woocommerce' ), 'woocommerce-store', 'modified' ),
			array( 9069, WSAL_INFORMATIONAL, __( 'User changed the description of a coupon', 'wsal-woocommerce' ), __( 'The description of the coupon %CouponName% %LineBreak% Previous description: %OldDescription% %LineBreak% New description: %NewDescription% %LineBreak% %EditorLinkCoupon%', 'wsal-woocommerce' ), 'woocommerce-coupon', 'modified' ),
			array( 9070, E_WARNING, __( 'User changed the status of a coupon', 'wsal-woocommerce' ), __( 'Changed the status of WooCommerce coupon %CouponName% %LineBreak% Old status: %OldStatus% %LineBreak% New status: %NewStatus%', 'wsal-woocommerce' ), 'woocommerce-coupon', 'modified' ),
			array( 9071, WSAL_INFORMATIONAL, __( 'User renamed a WooCommerce coupon', 'wsal-woocommerce' ), __( 'Previous coupon name: %OldName% %LineBreak% New coupon name: %NewName% %LineBreak% %EditorLinkCoupon%', 'wsal-woocommerce' ), 'woocommerce-coupon', 'renamed' ),
		),

		__( 'Orders', 'wsal-woocommerce' ) => array(
			array( 9035, WSAL_LOW, __( 'A WooCommerce order has been placed', 'wsal-woocommerce' ), __( 'A new order has been placed %LineBreak% Order name: %OrderTitle% %LineBreak% %EditorLinkOrder%', 'wsal-woocommerce' ), 'woocommerce-order', 'created' ),
			array( 9036, WSAL_INFORMATIONAL, __( 'WooCommerce order status changed', 'wsal-woocommerce' ), __( 'Marked an order %OrderTitle% as %OrderStatus% %LineBreak% %EditorLinkOrder%', 'wsal-woocommerce' ), 'woocommerce-order', 'modified' ),
			array( 9037, WSAL_MEDIUM, __( 'User moved a WooCommerce order to trash', 'wsal-woocommerce' ), __( 'Moved the order %OrderTitle% to trash %LineBreak% %EditorLinkOrder%', 'wsal-woocommerce' ), 'woocommerce-order', 'deleted' ),
			array( 9038, WSAL_LOW, __( 'User moved a WooCommerce order out of trash', 'wsal-woocommerce' ), __( 'The order %OrderTitle% out of the trash %LineBreak% %EditorLinkOrder%', 'wsal-woocommerce' ), 'woocommerce-order', 'restored' ),
			array( 9039, WSAL_LOW, __( 'User permanently deleted a WooCommerce order', 'wsal-woocommerce' ), __( 'Permanently deleted the order %OrderTitle%', 'wsal-woocommerce' ), 'woocommerce-order', 'deleted' ),
			array( 9040, WSAL_MEDIUM, __( 'User edited a WooCommerce order', 'wsal-woocommerce' ), __( 'The details in order %OrderTitle% %LineBreak% %EditorLinkOrder%', 'wsal-woocommerce' ), 'woocommerce-order', 'modified' ),
			array( 9041, WSAL_HIGH, __( 'User refunded a WooCommerce order', 'wsal-woocommerce' ), __( 'Refunded the order %OrderTitle% %LineBreak% %EditorLinkOrder%', 'wsal-woocommerce' ), 'woocommerce-order', 'modified' ),
		),

		__( 'User Profile', 'wsal-woocommerce' ) => array(
			array( 9083, WSAL_INFORMATIONAL, __( 'User changed the billing address details', 'wsal-woocommerce' ), __( 'The <strong>billing address</strong> details of the user %TargetUsername% / Own <strong>billing address</strong> %TargetUsername% %LineBreak% Role: %Roles% %LineBreak% Previous billing address: %OldValue% %LineBreak% New Billing address: %NewValue% %LineBreak% %EditUserLink%', 'wsal-woocommerce' ), 'user', 'modified' ),
			array( 9084, WSAL_INFORMATIONAL, __( 'User changed the shipping address details', 'wsal-woocommerce' ), __( 'The <strong>shipping address</strong> details of the user %TargetUsername% / Own <strong>shipping address</strong> %LineBreak% Role: %Roles% %LineBreak% Previous shipping address: %OldValue% %LineBreak% New Shipping address: %NewValue% %LineBreak% %EditUserLink%', 'wsal-woocommerce' ), 'user', 'modified' ),
		),
	),
);
