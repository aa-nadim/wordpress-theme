<?php
class My_Widget extends \Elementor\Widget_Base {
	public $config = [];
	
	public function __construct($args = []) {
		$this->config = $args;
	}

	public function __set($name, $value) {
        $this->data[$name] = $value;
    }

	public function get_name() {
		return $this->config['id'];
	}

	public function get_title() {
		return $this->config['title'];
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

	protected function render() {
		?>
		<p> Hello World </p>
		<?php
	}

	protected function content_template() {
		?>
		<p> Hello World </p>
		<?php
	}
}