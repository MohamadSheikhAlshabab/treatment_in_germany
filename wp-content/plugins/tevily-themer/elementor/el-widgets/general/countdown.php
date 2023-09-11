<?php
if(!defined('ABSPATH')){ exit; }

use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Repeater;

class GVAElement_Countdown extends GVAElement_Base {
	const NAME = 'gva-countdown';
   const TEMPLATE = 'general/countdown';
   const CATEGORY = 'tevily_general';

   public function get_name() {
      return self::NAME;
   }

   public function get_categories() {
      return array(self::CATEGORY);
   }

	public function get_title() {
		return __( 'Countdown', 'tevily-themer' );
	}

	public function get_keywords() {
		return [ 'countdown', 'time', 'text' ];
	}

	public function get_script_depends() {
      return [
         'countdown'
      ];
   }

	protected function register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'tevily-themer' ),
			]
		);
		$this->add_control(
			'title_text',
			[
				'label' => __( 'Title', 'tevily-themer' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your title', 'tevily-themer' ),
				'default' => __( 'Add Your Heading Text Here', 'tevily-themer' ),
				'label_block' => true
			]
		);
		$this->add_control(
			'year',
			[
				'label' => __( 'Year', 'tevily-themer' ),
				'type' => Controls_Manager::TEXT,
				'default' => date('Y'),
				'placeholder' => __( 'ex: 2019', 'tevily-themer' ),
				'label_block' => true
			]
		);
		$this->add_control(
			'month',
			[
				'label' => __( 'Month', 'tevily-themer' ),
				'type' => Controls_Manager::TEXT,
				'default' => '12',
				'placeholder' => __( 'ex: 12', 'tevily-themer' ),
			]
		);
		$this->add_control(
			'day',
			[
				'label' => __( 'Day', 'tevily-themer' ),
				'type' => Controls_Manager::TEXT,
				'default' => '01',
				'placeholder' => __( 'ex: 01', 'tevily-themer' ),
			]
		);
		$this->add_control(
			'hour',
			[
				'label' => __( 'Hour', 'tevily-themer' ),
				'type' => Controls_Manager::TEXT,
				'default' => '00',
				'placeholder' => __( 'ex: 00', 'tevily-themer' ),
			]
		);
		$this->add_control(
			'minutes',
			[
				'label' => __( 'Minutes', 'tevily-themer' ),
				'type' => Controls_Manager::TEXT,
				'default' => '00',
				'placeholder' => __( 'ex: 00', 'tevily-themer' ),
			]
		);
		$this->add_control(
			'align',
			[
				'label' => __( 'Alignment', 'tevily-themer' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'tevily-themer' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'tevily-themer' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'tevily-themer' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
			]
		);
		$this->end_controls_section();

		//Box Styling
		$this->start_controls_section(
			'section_box_style',
			[
				'label' => __( 'Box', 'tevily-themer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'box_padding',
			[
				'label' => __( 'Padding', 'tevily-themer' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'default' => [
					'top' 		=> 40,
					'right' 		=> 40,
					'left'		=> 40,
					'bottom'		=> 40,
					'unit'		=> 'px'
				],
				'selectors' => [
					'{{WRAPPER}} .gsc-countdown' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'box_background',
			[
				'label' => __( 'Background Color', 'tevily-themer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .gsc-countdown' => 'background: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();

		//Content Styling
		$this->start_controls_section(
			'section_content_style',
			[
				'label' => __( 'Title', 'tevily-themer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'color',
			[
				'label' => __( 'Text Color', 'tevily-themer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .gsc-countdown .content-inner .title' => 'color: {{VALUE}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_title',
				'selector' => '{{WRAPPER}} .gsc-countdown .content-inner .title',
			]
		);
		$this->add_responsive_control(
			'space',
			[
				'label' => __( 'Spacing', 'tevily-themer' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 60,
				], 
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .gsc-countdown .content-inner .title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
	}


	protected function render() {
		$settings = $this->get_settings_for_display();
		printf( '<div class="gva-element-%s gva-element">', $this->get_name() );
         include $this->get_template(self::TEMPLATE . '.php');
      print '</div>';
	}

}
$widgets_manager->register(new GVAElement_Countdown());

