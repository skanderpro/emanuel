<?php
class Vacancies extends \Elementor\Widget_Base {

	public function get_name() {
		return 'vacancies';
	}

	public function get_title() {
		return esc_html__( 'Emanuel: Vacancies', 'elementor-addon' );
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
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Hello world', 'elementor-addon' ),
			]
		);
		$repeater->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
		$repeater->add_control(
			'url',
			[
				'label' => esc_html__( 'Url', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::URL,
			]
		);

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
			'items',
			[
				'label' => esc_html__( 'Items', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
			]
		);

		$this->end_controls_section();

		// Content Tab End
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		require_once EMANUEL_BLOCKS_PATH . '/templates/vacancies.php';
	}
}