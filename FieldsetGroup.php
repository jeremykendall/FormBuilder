<?php

namespace FormBuilder;

use Exception;

class FieldsetGroup {

	private $cols = 1;
	private $fields = array();

	public function __construct() {
	}

	public function setColumns($cols) {
		$cols = (int) $cols;
		if ( $cols === 0 ) {
			$cols = 1;
		}
		$this->cols = $cols;
	}

	public function getColumns() {
		return (int) $this->cols;
	}

	public function getFields() {
		return $this->fields;
	}

	public function createText($name, $id) {
		return $this->createField('text', $name, $id);
	}

	public function createSelect($name, $id) {
		return $this->createField('select', $name, $id);
	}

	public function createRadio($name, $id) {
		return $this->createField('radio', $name, $id);
	}

	public function createCheckbox($name, $id) {
		return $this->createField('checkbox', $name, $id);
	}

	public function createTextarea($name, $id) {
		return $this->createField('textarea', $name, $id);
	}

	private function createField($type, $name, $id) {
		$field = new FormField($type, $name, $id);
		$this->fields[] = $field;
		return $field;
	}

}
