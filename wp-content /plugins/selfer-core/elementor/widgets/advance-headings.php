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
class Selfer_Advance_Headings_Widget extends Widget_Base {

	public function get_name() {
		return 'selfer-advance-headings';
	}

	public function get_title() {
		return esc_html__( 'Advance Headings', 'selfer-core' );
	}

	public function get_icon() {
		return 'eicon-heading';
	}

	public function get_categories() {
		return [ 'selfer-category' ];
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
				'label' => esc_html__( 'Headings', 'selfer-core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'sub_heading',
			[
				'label'       => esc_html__( 'Sub Heading', 'selfer-core' ),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [ 'active' => true ],
				'placeholder' => esc_html__( 'Enter your prefix title', 'selfer-core' ),
				'default'     => esc_html__( 'SUB HEADING HERE', 'selfer-core' ),
			]
		);

		$this->add_control(
			'main_heading',
			[
				'label'       => esc_html__( 'Main Heading', 'selfer-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [ 'active' => true ],
				'placeholder' => esc_html__( 'Enter your main heading here', 'selfer-core' ),
				'default'     => esc_html__( 'I am Advanced Heading', 'selfer-core' ),
			]
		);

		$this->add_control(
			'link',
			[
				'label'       => esc_html__( 'Link', 'selfer-core' ),
				'type'        => Controls_Manager::URL,
				'dynamic'     => [ 'active' => true ],
				'placeholder' => 'http://your-link.com',
			]
		);

		$this->add_control(
			'header_size',
			[
				'label'   => esc_html__( 'HTML Tag', 'selfer-core' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'h1'   => esc_html__( 'H1', 'selfer-core' ),
					'h2'   => esc_html__( 'H2', 'selfer-core' ),
					'h3'   => esc_html__( 'H3', 'selfer-core' ),
					'h4'   => esc_html__( 'H4', 'selfer-core' ),
					'h5'   => esc_html__( 'H5', 'selfer-core' ),
					'h6'   => esc_html__( 'H6', 'selfer-core' ),
					'div'  => esc_html__( 'div', 'selfer-core' ),
					'span' => esc_html__( 'span', 'selfer-core' ),
					'p'    => esc_html__( 'p', 'selfer-core' ),
				],
				'default' => 'h2',
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'selfer-core' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'selfer-core' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'selfer-core' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'selfer-core' ),
						'icon'  => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'prefix_class' => 'elementor-align%s-',
			]
		);

		$this->end_controls_section();
		
		$this->start_controls_section(
			'section_content_advanced_heading',
			[
				'label' => esc_html__( 'Advanced Heading', 'selfer-core' ),
			]
		);
		$this->add_control(
			'advanced_heading',
			[
				'label'       => esc_html__( 'Advanced Heading', 'selfer-core' ),
				'type'        => Controls_Manager::TEXTAREA,
				'dynamic'     => [ 'active' => true ],
				'placeholder' => esc_html__( 'Enter your advanced heading', 'selfer-core' ),
				'description' => esc_html__( 'This heading will show as style as background and you can move and style many way.', 'selfer-core' ),
				'default'     => esc_html__( "Advanced Heading", 'selfer-core' ),
			]
		);

		$this->add_responsive_control(
			'advanced_heading_align',
			[
				'label'   => esc_html__( 'Alignment', 'selfer-core' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'selfer-core' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'selfer-core' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'selfer-core' ),
						'icon'  => 'fa fa-align-right',
					],
				],
			]
		);


		$this->add_responsive_control(
			'advanced_heading_x_position',
			[
				'label'   => esc_html__( 'X Offset', 'selfer-core' ),
				'type'    => Controls_Manager::SLIDER,
				'default' => [
					'size' => 0,
				],
				'tablet_default' => [
					'size' => 0,
				],
				'mobile_default' => [
					'size' => 0,
				],
				'range' => [
					'px' => [
						'min' => -800,
						'max' => 800,
					],
				],
			]
		);

		$this->add_responsive_control(
			'advanced_heading_y_position',
			[
				'label'   => esc_html__( 'Y Offset', 'selfer-core' ),
				'type'    => Controls_Manager::SLIDER,
				'default' => [
					'size' => 0,
				],
				'tablet_default' => [
					'size' => 0,
				],
				'mobile_default' => [
					'size' => 0,
				],
				'range' => [
					'px' => [
						'min' => -800,
						'max' => 800,
					],
				],
			]
		);

		$this->add_responsive_control(
			'advanced_heading_rotate',
			[
				'label'   => esc_html__( 'Rotate', 'selfer-core' ),
				'type'    => Controls_Manager::SLIDER,
				'default' => [
					'size' => 0,
				],
				'tablet_default' => [
					'size' => 0,
				],
				'mobile_default' => [
					'size' => 0,
				],
				'range' => [
					'px' => [
						'min'  => -180,
						'max'  => 180,
						'step' => 5,
					],
				],
				'selectors' => [
					'(desktop){{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div' => 'transform: translate({{advanced_heading_x_position.SIZE}}px, {{advanced_heading_y_position.SIZE}}px) rotate({{SIZE}}deg);',
					'(tablet){{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div' => 'transform: translate({{advanced_heading_x_position_tablet.SIZE}}px, {{advanced_heading_y_position_tablet.SIZE}}px) rotate({{SIZE}}deg);',
					'(mobile){{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div' => 'transform: translate({{advanced_heading_x_position_mobile.SIZE}}px, {{advanced_heading_y_position_mobile.SIZE}}px) rotate({{SIZE}}deg);',
				],
			]
		);

		$this->add_control(
			'advanced_heading_origin',
			[
				'label'       => esc_html__( 'Rotate Origin', 'selfer-core' ),
				'description' => esc_html__( 'Origin work when you set rotate value', 'selfer-core' ),
				'type'        => Controls_Manager::SELECT,
				'default'     => 'center',
				'options'     => [
					''         => esc_html__('Default', 'selfer-core'),
			        'top-left'      => esc_html__('Top Left', 'selfer-core') ,
			        'top-center'    => esc_html__('Top Center', 'selfer-core') ,
			        'top-right'     => esc_html__('Top Right', 'selfer-core') ,
			        'center'        => esc_html__('Center', 'selfer-core') ,
			        'center-left'   => esc_html__('Center Left', 'selfer-core') ,
			        'center-right'  => esc_html__('Center Right', 'selfer-core') ,
			        'bottom-left'   => esc_html__('Bottom Left', 'selfer-core') ,
			        'bottom-center' => esc_html__('Bottom Center', 'selfer-core') ,
			        'bottom-right'  => esc_html__('Bottom Right', 'selfer-core') ,
				],
			]
		);


		$this->add_control(
			'advanced_heading_hide',
			[
				'label'       => esc_html__( 'Hide at', 'selfer-core' ),
				'description' => esc_html__( 'Some cases you need to hide it because when you set heading at outer position mobile device can show wrong width in that case you can hide it at mobile or tablet device. if you set overflow hidden on section or body so you don\'t need it.', 'selfer-core' ),
				'type'        => Controls_Manager::SELECT,
				'default'     => 'm',
				'options'     => [
					''  => esc_html__('Nothing', 'selfer-core'),
					'm' => esc_html__('Tablet and Mobile ', 'selfer-core'),
					's' => esc_html__('Mobile', 'selfer-core'),
				],
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_sub_heading',
			[
				'label'     => esc_html__( 'Sub Heading', 'selfer-core' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'sub_heading!' => '',
				]
			]
		);

		$this->add_control(
			'sub_heading_color',
			[
				'label'     => esc_html__( 'Color', 'selfer-core' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-sub-heading' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'sub_heading_typography',
				'scheme'   => Scheme_Typography::TYPOGRAPHY_4,
				'selector' => '{{WRAPPER}} .selfer-advanced-heading .selfer-sub-heading',
			]
		);

		$this->add_group_control(
			Group_Control_Text_Shadow::get_type(),
			[
				'name'     => 'sub_heading_shadow',
				'selector' => '{{WRAPPER}} .selfer-advanced-heading .selfer-sub-heading',
			]
		);

		$this->add_control(
			'sub_heading_style',
			[
				'label'   => esc_html__( 'Style', 'selfer-core' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					''     => esc_html__('None', 'selfer-core'),
					'line' => esc_html__('Line', 'selfer-core'),
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'sub_heading_style_color',
			[
				'label'     => esc_html__( 'Style Color', 'selfer-core' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-sub-heading .line:after' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'sub_heading_style' => 'line',
				],
			]
		);

		$this->add_responsive_control(
			'sub_heading_style_width',
			[
				'label' => __( 'Width', 'selfer-core' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min'  => 1,
						'max'  => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-sub-heading .line:after' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'sub_heading_style' => 'line',
				],
			]
		);

		$this->add_responsive_control(
			'sub_heading_style_height',
			[
				'label' => __( 'Height', 'selfer-core' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min'  => 1,
						'max'  => 48,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-sub-heading .line:after' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'sub_heading_style' => 'line',
				],
			]
		);

		$this->add_control(
			'sub_heading_style_align',
			[
				'label'   => esc_html__( 'Style Position', 'selfer-core' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'right',
				'options' => [
					'right'      => esc_html__( 'After', 'selfer-core' ),
					'left'       => esc_html__( 'Before', 'selfer-core' ),
					'left-right' => esc_html__( 'After and Before', 'selfer-core' ),
					'bottom'     => esc_html__( 'Bottom', 'selfer-core' ),
				],
				'condition' => [
					'sub_heading_style' => 'line',
				],
			]
		);

		$this->add_responsive_control(
			'sub_heading_style_indent',
			[
				'label'   => esc_html__( 'Style Spacing', 'selfer-core' ),
				'type'    => Controls_Manager::SLIDER,
				'default' => [
					'size' => 8,
				],
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'condition' => [
					'sub_heading_style' => 'line',
				],
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-button-icon-align-right'  => 'margin-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .selfer-advanced-heading .selfer-button-icon-align-left'   => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .selfer-advanced-heading .selfer-button-icon-align-bottom' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_main_heading',
			[
				'label'     => esc_html__( 'Main Heading', 'selfer-core' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'main_heading!' => '',
				],
			]
		);

		$this->add_control(
			'main_heading_advanced_color',
			[
				'label'        => esc_html__( 'Advanced Style', 'selfer-core' ),
				'type'         => Controls_Manager::SWITCHER,
				'prefix_class' => 'selfer-ep-main-color-',
				'render_type'  => 'template',
			]
		);

		$this->add_control(
			'main_heading_color',
			[
				'label'     => esc_html__( 'Color', 'selfer-core' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading' => 'color: {{VALUE}};',
				],
				'condition' => [
					'main_heading_advanced_color!' => 'yes',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'      => 'main_heading_advanced_color',
				'types'     => [ 'classic', 'gradient' ],
				'selector'  => '{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading',
				'condition' => [
					'main_heading_advanced_color' => 'yes',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'main_heading_typography',
				'scheme'   => Scheme_Typography::TYPOGRAPHY_4,
				'selector' => '{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading',
			]
		);

		$this->add_group_control(
			Group_Control_Text_Shadow::get_type(),
			[
				'name'     => 'main_heading_shadow',
				'selector' => '{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading',
			]
		);

		$this->add_control(
			'main_heading_style',
			[
				'label'   => esc_html__( 'Style', 'selfer-core' ),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					''     => esc_html__('None', 'selfer-core'),
					'line' => esc_html__('Line', 'selfer-core'),
				],
				'separator' => 'before',
			]
		);

		$this->add_control(
			'main_heading_style_color',
			[
				'label'     => esc_html__( 'Style Color', 'selfer-core' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading .line:after' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'main_heading_style' => 'line',
				],
			]
		);

		$this->add_responsive_control(
			'main_heading_style_width',
			[
				'label' => __( 'Width', 'selfer-core' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min'  => 1,
						'max'  => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading .line:after' => 'width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'main_heading_style' => 'line',
				],
			]
		);

		$this->add_responsive_control(
			'main_heading_style_height',
			[
				'label' => __( 'Height', 'selfer-core' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min'  => 1,
						'max'  => 48,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading .line:after' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'main_heading_style' => 'line',
				],
			]
		);

		$this->add_control(
			'main_heading_style_align',
			[
				'label'   => esc_html__( 'Style Position', 'selfer-core' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'bottom',
				'options' => [
					'right'      => esc_html__( 'After', 'selfer-core' ),
					'left'       => esc_html__( 'Before', 'selfer-core' ),
					'left-right' => esc_html__( 'After and Before', 'selfer-core' ),
					'bottom'     => esc_html__( 'Bottom', 'selfer-core' ),
				],
				'condition' => [
					'main_heading_style' => 'line',
				],
			]
		);

		$this->add_responsive_control(
			'main_heading_style_indent',
			[
				'label'   => esc_html__( 'Style Spacing', 'selfer-core' ),
				'type'    => Controls_Manager::SLIDER,
				'default' => [
					'size' => 8,
				],
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'condition' => [
					'main_heading_style' => 'line',
				],
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading .selfer-button-icon-align-right'  => 'margin-left: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading .selfer-button-icon-align-left'   => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .selfer-advanced-heading .selfer-main-heading .selfer-button-icon-align-bottom' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style_advanced_heading',
			[
				'label'     => esc_html__( 'Advanced Heading', 'selfer-core' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'advanced_heading!' => '',
				],
			]
		);

		$this->add_control(
			'advanced_heading_advanced_color',
			[
				'label'        => esc_html__( 'Advanced Style', 'selfer-core' ),
				'type'         => Controls_Manager::SWITCHER,
				'prefix_class' => 'selfer-ep-advanced-color-',
				'render_type'  => 'template',
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'      => 'advanced_heading_advanced_color',
				'types'     => [ 'classic', 'gradient' ],
				'selector'  => '{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div',
				'condition' => [
					'advanced_heading_advanced_color' => 'yes',
				],
			]
		);

		$this->add_control(
			'advanced_heading_color',
			[
				'label'     => esc_html__( 'Color', 'selfer-core' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div' => 'color: {{VALUE}};',
				],
				'condition' => [
					'advanced_heading_advanced_color!' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'advanced_heading_background_color',
			[
				'label'     => esc_html__( 'Background Color', 'selfer-core' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'advanced_heading_advanced_color!' => 'yes',
				],
			]
		);

		$this->add_control(
			'advanced_heading_padding',
			[
				'label'      => esc_html__( 'Padding', 'selfer-core' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'      => 'advanced_heading_typography',
				'scheme'    => Scheme_Typography::TYPOGRAPHY_4,
				'selector'  => '{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div',
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Text_Shadow::get_type(),
			[
				'name'     => 'advanced_heading_shadow',
				'selector' => '{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div',
			]
		);


		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'        => 'advanced_heading_border',
				'label'       => esc_html__( 'Border', 'selfer-core' ),
				'placeholder' => '1px',
				'default'     => '1px',
				'selector'    => '{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div',
				'separator'   => 'before',
			]
		);

		$this->add_control(
			'advanced_heading_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'selfer-core' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'advanced_heading_box_shadow',
				'selector' => '{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div',
			]
		);

		$this->add_control(
			'advanced_heading_opacity',
			[
				'label' => esc_html__( 'Opacity', 'selfer-core' ),
				'type'  => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min'  => 0.05,
						'max'  => 1,
						'step' => 0.05,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .selfer-advanced-heading .selfer-advanced-heading-content > div' => 'opacity: {{SIZE}};',
				],
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
		$settings         = $this->get_settings_for_display();
		$id               = $this->get_id();
		$heading_html     = [];
		$advanced_heading = '';
		$sub_heading      = '';
		$main_heading     = '';

		if ( empty( $settings['sub_heading'] ) and empty( $settings['advanced_heading'] ) and empty( $settings['main_heading'] ) ) {
			return;
		}

		$this->add_render_attribute( 'heading', 'class', 'selfer-heading-tag' );


		if ($settings['sub_heading']) {
			$subh_style = '';
			if ('line' === $settings['sub_heading_style']) {
				if ('left-right' === $settings['sub_heading_style_align']) {
					$subh_style = '<div class="line selfer-button-icon-align-left"></div><div class="line selfer-button-icon-align-right"></div>';
				} elseif ('bottom' === $settings['sub_heading_style_align']) {
					$subh_style = '<div class="line selfer-button-icon-align-'.$settings['sub_heading_style_align'].'"></div>';
				} else {
					$subh_style = '<div class="line selfer-button-icon-align-'.$settings['sub_heading_style_align'].'"></div>';
				}
			}

			$sub_heading = '<div class="selfer-sub-heading"><div class="selfer-sub-heading-content">'.$settings['sub_heading'].'</div>'.$subh_style.'</div> ';
		}

		if ($settings['advanced_heading']) {
			$avd_hclass   = ['selfer-advanced-heading-content'];
			$avd_hclass[] = ($settings['advanced_heading_align']) ? 'selfer-text-'.$settings['advanced_heading_align'] : '';
			$avd_hclass[] = ($settings['advanced_heading_hide']) ? 'selfer-visible @'. $settings['advanced_heading_hide'] : '';
			$avd_hcclass  = ($settings['advanced_heading_origin']) ? 'selfer-transform-origin-'.$settings['advanced_heading_origin'] : '';


	   		$advanced_heading = '<div class="'.implode(" ", $avd_hclass).'"><div class="'.$avd_hcclass.'">' .$settings['advanced_heading']. '</div></div>';
		}

		if ($settings['main_heading']) :

			$mainh_style = '';
			if ('line' === $settings['main_heading_style']) {
				if ('left-right' === $settings['main_heading_style_align']) {
					$mainh_style = '<div class="line selfer-button-icon-align-left"></div><div class="line selfer-button-icon-align-right"></div>';
				} elseif ('bottom' === $settings['main_heading_style_align']) {
					$mainh_style = '<div class="line selfer-button-icon-align-'.$settings['main_heading_style_align'].'"></div>';
				} else {
					$mainh_style = '<div class="line selfer-button-icon-align-'.$settings['main_heading_style_align'].'"></div>';
				}
			}


			$main_heading = '<div class="selfer-main-heading">' . $settings['main_heading'] . $mainh_style . '</div>';
		endif;


		if ( ! empty( $settings['link']['url'] ) ) {
			$this->add_render_attribute( 'url', 'href', $settings['link']['url'] );

			if ( $settings['link']['is_external'] ) {
				$this->add_render_attribute( 'url', 'target', '_blank' );
			}

			if ( ! empty( $settings['link']['nofollow'] ) ) {
				$this->add_render_attribute( 'url', 'rel', 'nofollow' );
			}

			$main_heading = sprintf( '<a %1$s>%2$s</a>', $this->get_render_attribute_string( 'url' ), $main_heading );
		}

		$heading_html[] = '<div id ="'.$id.'" class="selfer-advanced-heading">';
		
		
		$heading_html[] = $advanced_heading;
		$heading_html[] = $sub_heading;
		$heading_html[] = sprintf( '<%1$s %2$s>%3$s</%1$s>', $settings['header_size'], $this->get_render_attribute_string( 'heading' ), $main_heading );
		
		$heading_html[] = '</div>';

		echo implode("", $heading_html);
	}

	/**
	 * Render Social Info widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _content_template() {
		?>
		<#
		var main_heading = settings.main_heading;
		var subh_style = '';
		var mainh_style = '';

		if ( '' !== settings.link.url ) {
			main_heading = '<a href="' + settings.link.url + '">' + main_heading + '</a>';
		}	

		view.addRenderAttribute( 'main_heading', 'class', [ 'selfer-heading-tag', 'elementor-size-' + settings.size ] );

		view.addInlineEditingAttributes( 'main_heading' );

		view.addRenderAttribute('advanced_heading_content', 'class', ['selfer-advanced-heading-content'] );

		view.addRenderAttribute('advanced_heading', 'class', 'selfer-transform-origin-' + settings.advanced_heading_origin );
		

		if ('' !== settings.advanced_heading_align) {
			view.addRenderAttribute('advanced_heading_content', 'class', 'selfer-text-' + settings.advanced_heading_align );
		}

		view.addInlineEditingAttributes( 'advanced_heading' );

		var avdh_content_print = view.getRenderAttributeString( 'advanced_heading_content' );
		var avdh_transform_print = view.getRenderAttributeString( 'advanced_heading' );

		if ( 'line' === settings.sub_heading_style ) {
			if ('left-right' === settings.sub_heading_style_align) {
				subh_style = '<div class="line selfer-button-icon-align-left"></div><div class="line selfer-button-icon-align-right"></div>';
			} else if ('bottom' === settings.sub_heading_style_align) {
				subh_style = '<div class="line selfer-button-icon-align-' + settings.sub_heading_style_align + '"></div>';
			} else {
				subh_style = '<div class="line selfer-button-icon-align-' + settings.sub_heading_style_align + '"></div>';
			}
		}

		if ( 'line' === settings.main_heading_style ) {
			if ('left-right' === settings.main_heading_style_align) {
				mainh_style = '<div class="line selfer-button-icon-align-left"></div><div class="line selfer-button-icon-align-right"></div>';
			} else if ('bottom' === settings.main_heading_style_align) {
				mainh_style = '<div class="line selfer-button-icon-align-' + settings.main_heading_style_align + '"></div>';
			} else {
				mainh_style = '<div class="line selfer-button-icon-align-' + settings.main_heading_style_align + '"></div>';
			}
		}

		#>
		<div class="selfer-advanced-heading">
			<div <# print(avdh_content_print) #> >
				<div <# print(avdh_transform_print) #>>
					<# print(settings.advanced_heading) #>
				</div>
			</div>

			<div class="selfer-sub-heading">
				<div class="selfer-sub-heading-content">
					<# print(settings.sub_heading); #>
				</div>
				<# print(subh_style); #>
			</div>

			<{{settings.header_size}} <# print(view.getRenderAttributeString( 'main_heading' )) #> >
				<div class="selfer-main-heading"> {{main_heading}}<# print(mainh_style); #></div>
			</{{settings.header_size}}>
		</div>
		<?php
	}
}

Plugin::instance()->widgets_manager->register_widget_type( new Selfer_Advance_Headings_Widget() );