<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
 
/**
 * Selfer Contact Form 7 Widget.
 *
 * Selfer widget that inserts an embeddable content into the page, from any given URL.
 *
 * @since 1.0
 */
class Selfer_Image_Compare_Widget extends Widget_Base {

	public function get_name() {
		return 'slefer-image-before-after';
	}

	public function get_title() {
		return esc_html__( 'Image Before After', 'selfer-core' );
	}

	public function get_icon() {
		return 'eicon-image-before-after';
	}

	public function get_categories() {
		return [ 'selfer-category' ];
	}

	public function get_style_depends() {
		return [ 'twentytwenty' ];
	}

	public function get_script_depends() {
		return [ 'eventmove', 'twentytwenty' ];
	}

	/**
	 * Register Edu_Exp widget controls.
	 *
	 * @since 1.0
	 */
	protected function _register_controls() {

		$this->start_controls_section(
			'social_info_section',
			[
				'label' => esc_html__( 'Layout', 'selfer-core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'before_image',
			[
				'label' => esc_html__( 'Before Image (Same Size of Both Image)', 'selfer-core' ),
				'type'  => Controls_Manager::MEDIA,
				'default' => [
					'url' => SELFER_PLUGIN_URL . '/elementor/assets/images/before.svg',
				],
				'dynamic' => [ 'active' => true ],
			]
		);

		$this->add_control(
			'after_image',
			[
				'label' => esc_html__( 'After Image (Same Size of Both Image)', 'selfer-core' ),
				'type'  => Controls_Manager::MEDIA,
				'default' => [
					'url' => SELFER_PLUGIN_URL.'/elementor/assets/images/after.svg',
				],
				'dynamic' => [ 'active' => true ],
			]
		);

		$this->add_control(
			'before_label',
			[
				'label'       => esc_html__( 'Before Label', 'selfer-core' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Before Label', 'selfer-core' ),
				'default'     => esc_html__( 'Before', 'selfer-core' ),
				'label_block' => true,
				'dynamic'     => [ 'active' => true ],
			]
		);

		$this->add_control(
			'after_label',
			[
				'label'       => esc_html__( 'After Label', 'selfer-core' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'After Label', 'selfer-core' ),
				'default'     => esc_html__( 'After', 'selfer-core' ),
				'label_block' => true,
				'dynamic'     => [ 'active' => true ],
			]
		);

		$this->add_control(
			'orientation',
			[
				'label'   => esc_html__( 'Orientation', 'selfer-core' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'horizontal',
				'options' => [
					'horizontal' => esc_html__( 'Horizontal', 'selfer-core' ),
					'vertical'   => esc_html__( 'Vertical', 'selfer-core' ),
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'info_styling',
			[
				'label' => esc_html__( 'Style', 'selfer-core' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'before_background',
			[
				'label' => esc_html__( 'Before Background', 'selfer-core' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-before-label:before' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'before_color',
			[
				'label' => esc_html__( 'Before Color', 'selfer-core' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-before-label:before' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'after_background',
			[
				'label' => esc_html__( 'After Background', 'selfer-core' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-after-label:before' => 'background-color: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'after_color',
			[
				'label' => esc_html__( 'After Color', 'selfer-core' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-after-label:before' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bar_color',
			[
				'label' => esc_html__( 'Bar Color', 'selfer-core' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-handle' => 'border-color: {{VALUE}};',
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-handle:before' => 'background-color: {{VALUE}}; -webkit-box-shadow: 0 3px 0 {{VALUE}}, 0px 0px 12px rgba(51, 51, 51, 0.5); box-shadow: 0 3px 0 {{VALUE}}, 0px 0px 12px rgba(51, 51, 51, 0.5);',
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-handle:after' => 'background-color: {{VALUE}}; -webkit-box-shadow: 0 3px 0 {{VALUE}}, 0px 0px 12px rgba(51, 51, 51, 0.5); box-shadow: 0 3px 0 {{VALUE}}, 0px 0px 12px rgba(51, 51, 51, 0.5);',
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-handle span.twentytwenty-left-arrow' => 'border-right-color: {{VALUE}};',
					'{{WRAPPER}} .selfer-image-compare .twentytwenty-handle span.twentytwenty-right-arrow' => 'border-left-color: {{VALUE}};',
				],
				'separator' => 'before',
			]
		);

		$this->end_controls_section();
	}


	/**
	 * Render Edu_Exp widget output on the frontend.
	 *
	 * @since 1.0
	 */
	protected function render() { 
		$settings = $this->get_settings();
		?>
		<div class="selfer-image-compare selfer-position-relative">
			<div class="twentytwenty-container">
				<?php echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'before_image' ); ?>
				<?php echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'after_image' ); ?>
			</div>
		</div>

		<script>
			jQuery(document).ready(function($) {
				"use strict";
				$(".elementor-element-<?php echo esc_attr($this->get_id()); ?> .twentytwenty-container").twentytwenty({
					default_offset_pct: 0.7, 
					orientation: '<?php echo esc_attr($settings['orientation']); ?>',
					before_label: '<?php echo esc_html($settings['before_label']); ?>',
					after_label: '<?php echo esc_html($settings['after_label']); ?>',
				});
			});
		</script>
		<?php 
	}
}

Plugin::instance()->widgets_manager->register_widget_type( new Selfer_Image_Compare_Widget() );