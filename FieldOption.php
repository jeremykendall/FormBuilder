<?php

namespace FormBuilder;

use Exception;

class FieldOption {

	private $label;
	private $value;

	public function __construct($label = null, $value = null) {
		$this->label = $label;
		$this->value = $value;
	}

	public function setLabel($label) {
		$this->label = $label;
	}

	public function getLabel() {
		return (string) $this->label;
	}

	public function setValue($value) {
		$this->value = $value;
	}

	public function getValue() {
		return $this->value;
	}

}
