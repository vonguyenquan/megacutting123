<?php

/*
 * Plugin Name: Thiet ke web SonWeb
 * Description: About thiet ke web SonWeb Hotline:0932.644.183
 * Version: 1.0
 * Author: Son Web
 * Author URI: https://sonweb.net
 * Text Domain: sonweb
 */
 
// Setup
define( 'INFO_PLUGIN_URL', __FILE__ );

// Includes
//include( 'includes/activate.php' );

// Hooks
function custom_admin_logo() {
	echo '<style type="text/css">
	body.login div#login h1 a {
		background-image: url(https://sonweb.net/wp-content/uploads/logosonWebMain.png);
		background-position: 0 !important;
	}
	</style>';
}
add_action( 'login_enqueue_scripts', 'custom_admin_logo' );

// Shortcodes
// Dùng trình soạn thảo cũ
add_filter( 'use_block_editor_for_post', '__return_false' );

// Disable Woocommerce Header in WP Admin 
add_action('admin_head', 'Hide_WooCommerce_Breadcrumb');

function Hide_WooCommerce_Breadcrumb() {
  echo '<style>
    .woocommerce-layout__header {
        display: none;
    }
    .woocommerce-layout__activity-panel-tabs {
        display: none;
    }
    .woocommerce-layout__header-breadcrumbs {
        display: none;
    }
    .woocommerce-embed-page .woocommerce-layout__primary{
        display: none;
    }
    .woocommerce-embed-page #screen-meta, .woocommerce-embed-page #screen-meta-links{top:0;}
    </style>';
}
?>