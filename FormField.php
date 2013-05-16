<?php

namespace FormBuilder;

use Exception;

class FormField {

	private $valid_types = array('text', 'select', 'textarea', 'radio', 'checkbox', 'file');
	private $type;
	private $id;
	private $name;
	private $label;
	private $value;
	private $description;
	private $required = false;
	private $options = array();

	public function __construct($type=null, $name=null, $id=null) {
		$this->type = $type;
		$this->name = $name;
		$this->id = $id;
		if ( $type == null ) {
			throw new Exception('$type is required.');
		}
		if ( !in_array($type, $this->valid_types) ) {
			throw new Exception('Invalid type specified. Supported values: ' . implode(', ', $this->valid_types));
		}
		if ( $id == null ) {
			throw new Exception('$id is required.');
		}
		if ( $name == null ) {
			throw new Exception('$name is required.');
		}
	}

	public function getName() {
		return (string) $this->name;
	}

	public function getID() {
		return (string) $this->id;
	}

	public function setLabel($label) {
		$this->label = $label;
	}

	public function getLabel() {
		return (string) $this->label;
	}

	public function setDescription($desc) {
		$this->description = $desc;
	}

	public function getDescription() {
		return (string) $this->description;
	}

	public function setValue($value) {
		$this->value = $value;
	}

	public function getValue() {
		return $this->value;
	}

	public function getType() {
		return (string) $this->type;
	}

	public function createOption($label = null, $value = null) {
		$option = new FieldOption($label, $value);
		$this->options[] = $option;
		return $option;
	}

	public function getOptions() {
		return $this->options;
	}

	public function setRequired($req) {
		$this->required = (bool) $req;
	}

	public function getRequired() {
		return (bool) $this->required;
	}

}
