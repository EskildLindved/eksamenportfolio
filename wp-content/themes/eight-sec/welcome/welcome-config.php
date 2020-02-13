<?php
/**
 * Welcome Page Initiation
*/

include get_template_directory() . '/welcome/welcome.php';

/** Plugins **/
$plugins = array(
	// *** Companion Plugins
	'companion_plugins' => array(
		'access-demo-importer' 	=> array(
			'slug' 				=> 'access-demo-importer',
			'name' 				=> esc_html__('Instant Demo Importer', 'eight-sec'),
			'filename' 			=>'access-demo-importer.php',
 			// Use either bundled, remote, wordpress
			'host_type' 		=> 'wordpress',
			'class' 			=> 'Access_Demo_Importer',
			'info' => __('Access Demo Importer Plugin adds the feature to Import the Demo Conent with a single click.', 'eight-sec'),
		)
	),
	// *** Required Plugins
	'required_plugins' 			=> array(),

	// *** Recommended Plugins
	'recommended_plugins' => array(
			// Free Plugins
		'free_plugins' => array(
			'ultimate-form-builder-lite' => array(
				'slug'      => 'ultimate-form-builder-lite',
				'filename' 	=> 'ultimate-form-builder-lite.php',
				'class' 	=> 'UFBL_Class',
			),
		),
		// Pro Plugins
		'pro_plugins' => array()
	),
);

$strings = array(
		// Welcome Page General Texts
	'welcome_menu_text' => esc_html__( 'Eight Sec Setup', 'eight-sec' ),
	'theme_short_description' => esc_html__( 'Eight Sec theme is a free wordpress one page theme with eight sections. It is ideal for business, corporate, portfolio, blog, agency, freelancer and any other modern and creative website. It has fullwidth and boxed layout and is fully responsive. Demo: http://8degreethemes.com/demo/eight-sec Support forum: support@8degreethemes.com', 'eight-sec' ),

	// Plugin Action Texts
	'install_n_activate' => esc_html__('Install and Activate', 'eight-sec'),
	'deactivate' => esc_html__('Deactivate', 'eight-sec'),
	'activate' => esc_html__('Activate', 'eight-sec'),

	// Recommended Plugins Section
	'pro_plugin_title' => esc_html__( 'Pro Plugins', 'eight-sec' ),
	'pro_plugin_description' => esc_html__( 'Take Advantage of some of our Premium Plugins.', 'eight-sec' ),
	'free_plugin_title' => esc_html__( 'Free Plugins', 'eight-sec' ),
	'free_plugin_description' => esc_html__( 'These Free Plugins might be handy for you.', 'eight-sec' ),

	// Demo Actions
	'installed_btn' => esc_html__('Activated', 'eight-sec'),
	'deactivated_btn' => esc_html__('Activated', 'eight-sec'),
	'demo_installing' => esc_html__('Installing Demo', 'eight-sec'),
	'demo_installed' => esc_html__('Demo Installed', 'eight-sec'),
	'demo_confirm' => esc_html__('Are you sure to import demo content ?', 'eight-sec'),

	// Actions Required
	'req_plugins_installed' => esc_html__( 'All Recommended action has been successfully completed.', 'eight-sec' ),
	'customize_theme_btn' => esc_html__( 'Customize Theme', 'eight-sec' ),
);

/**
 * Initiating Welcome Page
*/
$my_theme_wc_page = new Eight_Sec_Welcome( $plugins, $strings );