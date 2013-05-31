<?php
/**
 * FormBuilder
 *
 * A family of PHP classes that enable you to easily define the various
 * elements that make up a complex HTML form, which can then be
 * exported to JSON for client-side rendering.
 */

namespace FormBuilder;

use Exception;

/**
 * Fieldset Group
 *
 * A FieldsetGroup is a component for a FormBuilder instance.
 *
 * @link https://github.com/tkambler/FormBuilder FormBuilder on GitHub
 * @package FormBuilder
 */
class FieldsetGroup {

	/**
	 * Columns
	 *
	 * @var int Count of columns.
	 */
	private $cols = 1;

	/**
	 * Fields
	 *
	 * @var array Ordered array of FormField instances.
	 */
	private $fields = array();

	/**
	 * Set Columns
	 *
	 * @param int $cols Count of columns.
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
	 * @return int Count of columns.
	 */
	public function getColumns() {
		return (int) $this->cols;
	}

	/**
	 * Get Fields
	 *
	 * @return array Ordered array of FormField instances.
	 */
	public function getFields() {
		return $this->fields;
	}

	/**
	 * Create Text Field
	 *
	 * @param string $name Name attribute of the form field.
	 * @param string $id ID of the form field.
	 */
	public function createText($name, $id = null) {
		return $this->createField('text', $name, $id);
	}

	/**
	 * Create Select Field
	 *
	 * @param string $name Name attribute of the form field.
	 * @param string $id ID of the form field.
	 */
	public function createSelect($name, $id = null) {
		return $this->createField('select', $name, $id);
	}

	/**
	 * Create Radio Field
	 *
	 * @param string $name Name attribute of the form field.
	 * @param string $id ID of the form field.
	 */
	public function createRadio($name, $id = null) {
		return $this->createField('radio', $name, $id);
	}

	/**
	 * Create Checkbox
	 *
	 * @param string $name Name attribute of the form field.
	 * @param string $id ID of the form field.
	 */
	public function createCheckbox($name, $id = null) {
		return $this->createField('checkbox', $name, $id);
	}

	/**
	 * Create Textarea Field
	 *
	 * @param string $name Name attribute of the form field.
	 * @param string $id ID of the form field.
	 */
	public function createTextarea($name, $id = null) {
		return $this->createField('textarea', $name, $id);
	}

	/**
	 * Create Field
	 *
	 * @param string $type Type attribute of the form field.
	 * @param string $name Name attribute of the form field.
	 * @param string $id ID of the form field.
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
