<?php

namespace FormBuilder;

class FormButton {

	private $label;
	private $id;
	private $type;

	public function __construct($label, $id) {
		$this->label = $label;
		$this->id = $id;
	}

	public function getLabel() {
		return (string) $this->label;
	}

	public function getID() {
		return (string) $this->id;
	}

	public function setType($type) {
		$this->type = $type;
	}

	public function getType() {
		return $this->type;
	}

}
