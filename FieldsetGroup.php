<?php

namespace FormBuilder;

use Exception;

class FieldsetGroup {

	private $cols = 1;
	private $fields = array();

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

	public function createText($name, $id = null) {
		return $this->createField('text', $name, $id);
	}

	public function createSelect($name, $id = null) {
		return $this->createField('select', $name, $id);
	}

	public function createRadio($name, $id = null) {
		return $this->createField('radio', $name, $id);
	}

	public function createCheckbox($name, $id = null) {
		return $this->createField('checkbox', $name, $id);
	}

	public function createTextarea($name, $id = null) {
		return $this->createField('textarea', $name, $id);
	}

	public function createField($type, $name, $id = null) {
		if ( $id == null ) {
			$id = $name;
		}
		$field = new FormField($type, $name, $id);
		$this->fields[] = $field;
		return $field;
	}

}
