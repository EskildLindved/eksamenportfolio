<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 
/**
 * Selfer Testimonials Widget.
 *
 * Selfer widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0
 */

class Selfer_Testimonials_Widget extends Widget_Base {

	public function get_name() {
		return 'slefer-testimonials';
	}

	public function get_title() {
		return esc_html__( 'Testimonials', 'selfer-core' );
	}

	public function get_icon() {
		return 'eicon-testimonial';
	}

	public function get_categories() {
		return [ 'selfer-category' ];
	}

	/**
	 * Register Testimonials widget controls.
	 *
	 * @since 1.0
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'selfer-core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

	 	$this->add_control(
	 		'testimonials',
	 		[
	 			'label' => esc_html__( 'Testimonials', 'selfer-core' ),
	 			'type' => Controls_Manager::REPEATER,
	 			'default' => [
	 				[
	 					'name' => esc_html__( 'Zohan Smith', 'selfer-core' ),
	 					'position' => esc_html__( 'Chif Dighal Officer', 'selfer-core' ),
	 					'testimonial' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
	 				], 
	 			],
	 			'fields' => [ 
	 				[
	 					'name' => 'name',
	 					'label' => esc_html__( 'Name', 'selfer-core' ),
	 					'type' => Controls_Manager::TEXT,
	 					'label_block' => true, 
	 					'default' => 'Zohan Smith',
	 				], 
	 				[
	 					'name' => 'img',
	 					'label' => esc_html__( 'Image', 'selfer-core' ),
	 					'type' => Controls_Manager::MEDIA,
	 					'dynamic' => [
	 						'active' => true,
	 					],
	 					'default' => [
	 						'url' => Utils::get_placeholder_image_src(),
	 					],
	 				],
	 				[
	 					'name' => 'position',
	 					'label' => esc_html__( 'Position', 'selfer-core' ),
	 					'type' => Controls_Manager::TEXT,
	 					'label_block' => true, 
	 					'default' => esc_html__( 'Chif Dighal Officer', 'selfer-core' ),
	 				],
	 				[
	 					'name' => 'testimonial',
	 					'label' => esc_html__( 'Testimonial', 'selfer-core' ),
	 					'type' => Controls_Manager::WYSIWYG,
	 					'dynamic' => [
	 						'active' => true,
	 					],
	 					'default' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.",
	 				],
	 			],
	 			'title_field' => ' {{{ name }}} -- {{ position }}',
	 		]
	 	);

	 	$this->end_controls_section();

	 	$this->start_controls_section(
	 		'carousel_settings',
	 		[
	 			'label' => esc_html__( 'Carousel Settings', 'selfer-core' ),
	 			'tab' => Controls_Manager::TAB_CONTENT,
	 		]
	 	);

	 	$this->add_control(
	 	    'loop',
	 	    [
	 	        'label'                 => __( 'Loop', 'materia-core' ),
	 	        'type'                  => Controls_Manager::SWITCHER,
	 	        'default'               => 'yes',
	 	        'label_on'              => __( 'Show', 'materia-core' ),
	 	        'label_off'             => __( 'Hide', 'materia-core' ),
	 	        'return_value'          => 'yes',
	 	    ]
	 	);		 	

	 	$this->add_control(
	 	    'autoplay',
	 	    [
	 	        'label'                 => __( 'Autoplay', 'materia-core' ),
	 	        'type'                  => Controls_Manager::SWITCHER,
	 	        'default'               => 'yes',
	 	        'label_on'              => __( 'Show', 'materia-core' ),
	 	        'label_off'             => __( 'Hide', 'materia-core' ),
	 	        'return_value'          => 'yes',
	 	    ]
	 	);		 	

	 	$this->add_control(
	 	    'nav_enable',
	 	    [
	 	        'label'                 => __( 'Nav Arrow', 'materia-core' ),
	 	        'type'                  => Controls_Manager::SWITCHER,
	 	        'default'               => 'yes',
	 	        'label_on'              => __( 'Show', 'materia-core' ),
	 	        'label_off'             => __( 'Hide', 'materia-core' ),
	 	        'return_value'          => 'yes',
	 	    ]
	 	);		 	

	 	$this->add_control(
	 	    'dots_enable',
	 	    [
	 	        'label'                 => __( 'Dots', 'materia-core' ),
	 	        'type'                  => Controls_Manager::SWITCHER,
	 	        'default'               => 'yes',
	 	        'label_on'              => __( 'Show', 'materia-core' ),
	 	        'label_off'             => __( 'Hide', 'materia-core' ),
	 	        'return_value'          => 'yes',
	 	    ]
	 	);	 	

	 	$this->add_control(
	 	    'autoplay_speed',
	 	    [
	 	        'label'                 => __( 'Autoplay Speed', 'materia-core' ),
	 	        'type'                  => Controls_Manager::NUMBER,
	 	        'default'               => '5000',
	 	    ]
	 	);

	 	$this->end_controls_section();

	 	$this->start_controls_section(
	 		'content_style',
	 		[
	 			'label' => esc_html__( 'Style', 'selfer-core' ),
	 			'tab' => Controls_Manager::TAB_STYLE,
	 		]
	 	);
	 	$this->add_control(
	 		'quote_color',
	 		[
	 			'label' => esc_html__( 'Quote Icon Background', 'selfer-core' ),
	 			'type' => Controls_Manager::COLOR,
	 			'default' => '#f26c4f',
	 			'selectors' => [
	 				'{{WRAPPER}} .slefer-testimonials-content .ts-bg-primary' => 'background-color: {{VALUE}};',
	 				'{{WRAPPER}} .slefer-testimonials-content .ts-has-talk-arrow:after' => 'border-color: {{VALUE}} transparent transparent transparent;',
	 			],
	 			'scheme' => [
	 				'type' => Scheme_Color::get_type(),
	 				'value' => Scheme_Color::COLOR_1,
	 			],
	 		]
		 );
		 
	 	$this->add_control(
	 		'quote_icon_color',
	 		[
	 			'label' => esc_html__( 'Quote Icon Color', 'selfer-core' ),
	 			'type' => Controls_Manager::COLOR,
	 			'default' => '#ffffff',
	 			'selectors' => [
	 				'{{WRAPPER}} .slefer-testimonials-content .ts-bg-primary i' => 'color: {{VALUE}};',
	 			],
	 			'scheme' => [
	 				'type' => Scheme_Color::get_type(),
	 				'value' => Scheme_Color::COLOR_1,
	 			],
	 		]
		 );
		 
	 	$this->add_control(
	 		'quote_text_color',
	 		[
	 			'label' => esc_html__( 'Quote Text Color', 'selfer-core' ),
	 			'type' => Controls_Manager::COLOR,
	 			'default' => '#dfdfdf',
	 			'selectors' => [
	 				'{{WRAPPER}} .slefer-testimonials-description > p' => 'color: {{VALUE}};',
	 			],
	 			'scheme' => [
	 				'type' => Scheme_Color::get_type(),
	 				'value' => Scheme_Color::COLOR_1,
	 			],
	 		]
		 );
		 
	 	$this->add_control(
	 		'quote_client_color',
	 		[
	 			'label' => esc_html__( 'Client Name Color', 'selfer-core' ),
	 			'type' => Controls_Manager::COLOR,
	 			'default' => '#ffffff',
	 			'selectors' => [
	 				'{{WRAPPER}} .slefer-testimonials-content h5' => 'color: {{VALUE}};',
	 			],
	 			'scheme' => [
	 				'type' => Scheme_Color::get_type(),
	 				'value' => Scheme_Color::COLOR_1,
	 			],
	 		]
		 );
		 
	 	$this->add_control(
	 		'quote_designation_color',
	 		[
	 			'label' => esc_html__( 'Client Designation Color', 'selfer-core' ),
	 			'type' => Controls_Manager::COLOR,
	 			'default' => '#999999',
	 			'selectors' => [
	 				'{{WRAPPER}} .slefer-testimonials-content .author-position' => 'color: {{VALUE}};',
	 			],
	 			'scheme' => [
	 				'type' => Scheme_Color::get_type(),
	 				'value' => Scheme_Color::COLOR_1,
	 			],
	 		]
		 );
		 
	 	$this->add_control(
	 		'quote_nav_color',
	 		[
	 			'label' => esc_html__( 'Navigation Background', 'selfer-core' ),
	 			'type' => Controls_Manager::COLOR,
	 			'default' => 'rgba(255, 255, 255, .6)',
	 			'selectors' => [
	 				'{{WRAPPER}} .owl-carousel .owl-nav .owl-prev, .owl-carousel .owl-nav .owl-next' => 'background-color: {{VALUE}};',
	 			],
	 			'scheme' => [
	 				'type' => Scheme_Color::get_type(),
	 				'value' => Scheme_Color::COLOR_1,
	 			],
	 		]
	 	);	 	

	 	$this->add_control(
	 		'quote_dot_color',
	 		[
	 			'label' => esc_html__( 'Dot Color', 'selfer-core' ),
	 			'type' => Controls_Manager::COLOR,
	 			'selectors' => [
	 				'{{WRAPPER}} .owl-carousel .owl-dots .owl-dot.active span' => 'background-color: {{VALUE}};',
	 			],
	 			'scheme' => [
	 				'type' => Scheme_Color::get_type(),
	 				'value' => Scheme_Color::COLOR_1,
	 			],
	 		]
	 	);

	 	$this->add_control(
	 		'quote_dot_active_color',
	 		[
	 			'label' => esc_html__( 'Dot Active Color', 'selfer-core' ),
	 			'type' => Controls_Manager::COLOR,
	 			'selectors' => [
	 				'{{WRAPPER}} .owl-carousel .owl-dots .owl-dot span' => 'background-color: {{VALUE}};',
	 			],
	 			'scheme' => [
	 				'type' => Scheme_Color::get_type(),
	 				'value' => Scheme_Color::COLOR_1,
	 			],
	 		]
	 	);

		$this->end_controls_section();

	}

	/**
	 * Render Testimonials widget output on the frontend.
	 *
	 * @since 1.0
	 */
	protected function render() { 
		$settings = $this->get_settings_for_display(); 
		$loop = $settings['loop'] == 'yes' ? 1 : 0;
		$autoplay = $settings['autoplay'] == 'yes' ? 1 : 0;
		$enable_nav = $settings['nav_enable'] == 'yes' ? 1 : 0;
		$enable_dots = $settings['dots_enable'] == 'yes' ? 1 : 0;
		$autospeed = $settings['autoplay_speed'] !== '' ? $settings['autoplay_speed'] : 5000;
		?> 
		<div class="row slefer-testimonials-content">
		    <div class="col-md-8 offset-md-2 text-center">
		        <div class="owl-carousel" data-owl-nav="<?php echo esc_attr($enable_nav); ?>" data-owl-dots="<?php echo esc_attr($enable_dots); ?>" data-owl-loop="<?php echo esc_attr($loop); ?>" data-owl-autoplay-timeout="<?php echo esc_attr($autospeed); ?>" data-animate="ts-fadeInUp">
		        	<?php foreach ( $settings['testimonials'] as $index => $item ) : ?>
		            <div class="slide mb-5">
		                <figure class="d-inline-block p-3 ts-bg-primary text-white ts-has-talk-arrow">
		                    <i class="fa fa-quote-right"></i>
		                </figure>
		                <div class="ts-h5 slefer-testimonials-description"><?php if(isset($item['testimonial'])) echo wp_kses_post($item['testimonial']); ?></div>
		                <div class="ts-circle__lg mb-3" data-bg-image="<?php if(isset($item['img']['url'])) echo esc_url($item['img']['url']); ?>"></div>
		                <h5><?php if(isset($item['name'])) echo esc_html($item['name']); ?></h5>
		                <h6 class="author-position"><?php if(isset($item['position'])) echo wp_kses_post($item['position']); ?></h6>
		            </div>
		            <?php endforeach; ?> 
		        </div>
		    </div>
		</div>
		<?php 
	}
	/**
	 * Whether the reload preview is required or not.
	 *
	 * Used to determine whether the reload preview is required.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return bool Whether the reload preview is required.
	 */
	public function is_reload_preview_required() {
		return true;
	}
}

Plugin::instance()->widgets_manager->register_widget_type( new Selfer_Testimonials_Widget() );