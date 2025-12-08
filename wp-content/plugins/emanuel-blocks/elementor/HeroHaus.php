<?php
class HeroHaus extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hero_haus';
	}

	public function get_title() {
		return esc_html__( 'Emanuel: Hero Haus', 'elementor-addon' );
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
				'default' => esc_html__( 'Mehrfamilienhaus Emanuel', 'elementor-addon' ),
			]
		);

		$this->add_control(
			'subtitle',
			[
				'label' => esc_html__( 'Subtitle', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Moderne Mietwohnungen an zentraler Lage', 'elementor-addon' ),
			]
		);

        $this->add_control(
            'primary_link_text',
            [
                'label' => esc_html__( 'Primary link text', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Exposé anfordern', 'elementor-addon' ),
            ]
        );

        $this->add_control(
            'secondary_link_url',
            [
                'label' => esc_html__( 'Secondary link URL', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '#',
            ]
        );

        $this->add_control(
            'secondary_link_text',
            [
                'label' => esc_html__( 'Secondary link text', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Besichtigung vereinbaren', 'elementor-addon' ),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
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

		require_once EMANUEL_BLOCKS_PATH . '/templates/hero-haus.php';
	}
}