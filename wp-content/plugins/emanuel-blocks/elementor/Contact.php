<?php
class Contact extends \Elementor\Widget_Base {

	public function get_name() {
		return 'emanuel_contact';
	}

	public function get_title() {
		return esc_html__( 'Emanuel: Contact', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hello world', 'elementor-addon' ),
			]
		);

		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Hello world', 'elementor-addon' ),
			]
		);

		$this->add_control(
			'map',
			[
				'label' => esc_html__( 'Map', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);

		$this->add_control(
			'company',
			[
				'label' => esc_html__( 'Company', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'EMANUEL Immobilien AG', 'elementor-addon' ),
			]
		);

		$this->add_control(
			'address',
			[
				'label' => esc_html__( 'Address', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Luzernerstrasse 8 | CH-6045 Meggen', 'elementor-addon' ),
			]
		);

		$this->add_control(
			'phone',
			[
				'label' => esc_html__( 'Phone', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '41 41 248 50 50', 'elementor-addon' ),
			]
		);

		$this->add_control(
			'email',
			[
				'label' => esc_html__( 'Email', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'kontakt@emanuel.ch', 'elementor-addon' ),
			]
		);


		$this->end_controls_section();

		// Content Tab End
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		require_once EMANUEL_BLOCKS_PATH . '/templates/contacts.php';
	}
}