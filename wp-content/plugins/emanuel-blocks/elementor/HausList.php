<?php
class HausList extends \Elementor\Widget_Base {

	public function get_name() {
		return 'haus_list';
	}

	public function get_title() {
		return esc_html__( 'Emanuel: Haus List', 'elementor-addon' );
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
            'count',
            [
                'label' => esc_html__( 'Count', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => '3'
            ]
        );

		$this->end_controls_section();

		// Content Tab End
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		require_once EMANUEL_BLOCKS_PATH . '/templates/haus-list.php';
	}
}