<?php
/**
 * Fieldset Group
 */

namespace FormBuilder;

use Exception;

/**
 * Fieldset Group
 *
 * @package FormBuilder
 */
class FieldsetGroup {

	/**
	 * Columns
	 *
	 * @var int
	 */
	private $cols = 1;

	/**
	 * Fields
	 *
	 * @var array
	 */
	private $fields = array();

	/**
	 * Set Columns
	 *
	 * @param int $cols 
	 */
	public function setColumns($cols) {
		$cols = (int) $cols;
		if ( $cols === 0 ) {
			$cols = 1;
		}
		$this->cols = $cols;
	}

	/**
	 * Get Columns
	 *
	 * @return int
	 */
	public function getColumns() {
		return (int) $this->cols;
	}

	/**
	 * Get Fields
	 *
	 * @return array
	 */
	public function getFields() {
		return $this->fields;
	}

	/**
	 * Create Text Field
	 *
	 * @param string $name 
	 * @param string $id 
	 */
	public function createText($name, $id = null) {
		return $this->createField('text', $name, $id);
	}

	/**
	 * Create Select Field
	 *
	 * @param string $name 
	 * @param string $id 
	 */
	public function createSelect($name, $id = null) {
		return $this->createField('select', $name, $id);
	}

	/**
	 * Create Radio Field
	 *
	 * @param string $name 
	 * @param string $id 
	 */
	public function createRadio($name, $id = null) {
		return $this->createField('radio', $name, $id);
	}

	/**
	 * Create Checkbox
	 *
	 * @param string $name 
	 * @param string $id 
	 */
	public function createCheckbox($name, $id = null) {
		return $this->createField('checkbox', $name, $id);
	}

	/**
	 * Create Textarea Field
	 *
	 * @param string $name 
	 * @param string $id 
	 */
	public function createTextarea($name, $id = null) {
		return $this->createField('textarea', $name, $id);
	}

	/**
	 * Create Field
	 *
	 * @param string $type 
	 * @param string $name 
	 * @param string $id 
	 */
	public function createField($type, $name, $id = null) {
		if ( $id == null ) {
			$id = $name;
		}
		$field = new FormField($type, $name, $id);
		$this->fields[] = $field;
		return $field;
	}

}
