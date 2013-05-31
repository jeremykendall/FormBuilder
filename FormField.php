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
 * Form Field
 *
 * A FormField is a component for a Fieldset instance.
 *
 * @link https://github.com/tkambler/FormBuilder FormBuilder on GitHub
 * @package FormBuilder
 */
class FormField {

	/**
	 * Valid Types
	 *
	 * @var array List of valid types.
	 */
	private $valid_types = array('text', 'select', 'textarea', 'radio', 'checkbox', 'file');

	/**
	 * Type
	 *
	 * @var string Type of the form field.
	 */
	private $type;

	/**
	 * ID
	 *
	 * @var string ID of the form field.
	 */
	private $id;

	/**
	 * Name
	 *
	 * @var string Name attribute of the form field.
	 */
	private $name;

	/**
	 * Label
	 *
	 * @var string Label of the form field.
	 */
	private $label;

	/**
	 * Value
	 *
	 * @var string Value of the form field.
	 */
	private $value;

	/**
	 * Description
	 *
	 * @var string Description of the form field.
	 */
	private $description;

	/**
	 * Placeholder
	 *
	 * @var string Placeholder of the form field.
	 */
	private $placeholder;

	/**
	 * Required
	 *
	 * @var boolean Whether form field is required.
	 */
	private $required = false;

	/**
	 * Validation
	 *
	 * @var string Validation rule of the form field.
	 */
	private $validation;

	/**
	 * Data
	 *
	 * @var array Associative array of data of the form field.
	 */
	private $data = array();

	/**
	 * Options
	 *
	 * @var array Ordered array of options of the form field, typically for `<select>`.
	 */
	private $options = array();

	/**
	 * Constructor
	 *
	 * @param string $type Type attribute of the form field.
	 * @param string $name Name attribute of the form field.
	 * @param string $id ID of teh form field.
	 * @throws Exception
	 */
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

	/**
	 * Get Name
	 *
	 * @return string Name attribute of the form field.
	 */
	public function getName() {
		return (string) $this->name;
	}

	/**
	 * Get ID
	 *
	 * @return string ID of the form field.
	 */
	public function getID() {
		return (string) $this->id;
	}

	/**
	 * Set Label
	 *
	 * @param string $label Label of the form field.
	 */
	public function setLabel($label) {
		$this->label = $label;
	}

	/**
	 * Get Label
	 *
	 * @return string Label of the form field.
	 */
	public function getLabel() {
		return (string) $this->label;
	}

	/**
	 * Set Description
	 *
	 * @param string $desc Description of the form field.
	 */
	public function setDescription($desc) {
		$this->description = $desc;
	}

	/**
	 * Get Description
	 *
	 * @return string Description of the form field.
	 */
	public function getDescription() {
		return (string) $this->description;
	}

	/**
	 * Set Placeholder
	 *
	 * @param string $placeholder Placeholder of the form field.
	 */
	public function setPlaceholder($placeholder) {
		$this->placeholder = $placeholder;
	}

	/**
	 * Get Placeholder
	 *
	 * @return string Placeholder of the form field.
	 */
	public function getPlaceholder() {
		return (string) $this->placeholder;
	}

	/**
	 * Set Value
	 *
	 * @param string $value Value of the form field.
	 */
	public function setValue($value) {
		$this->value = $value;
	}

	/**
	 * Get Value
	 *
	 * @return string Value of the form field.
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Get Type
	 *
	 * @return string Type attribute of the form field.
	 */
	public function getType() {
		return (string) $this->type;
	}

	/**
	 * Create Option
	 *
	 * @param string $label Label of the form field option.
	 * @param string $value Value of the form field option.
	 * @return object Instance of FieldOption.
	 */
	public function createOption($label = null, $value = null) {
		$option = new FieldOption($label, $value);
		$this->options[] = $option;
		return $option;
	}

	/**
	 * Get Options
	 *
	 * @return array Ordered array of FieldOption instances.
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * Set Required
	 *
	 * @param boolean $req Whether field is required.
 	*/
	public function setRequired($req) {
		$this->required = (bool) $req;
	}

	/**
	 * Get Required
	 *
	 * @return boolean Whether field is required.
	 */
	public function getRequired() {
		return (bool) $this->required;
	}

	/**
	 * Set Validation
	 *
	 * @param string $validation Validation rule of the form field.
	 */
	public function setValidation($validation) {
		$this->validation = $validation;
	}

	/**
	 * Get Validation
	 *
	 * @return string Validation rule of the form field.
	 */
	public function getValidation() {
		return $this->validation;
	}

	/**
	 * Set Data
	 *
	 * @param array $data Data of the form field.
	 */
	public function setData(array $data = null) {
		$this->data = (array) $data;
	}

	/**
	 * Get Data
	 *
	 * @return array Data of the form field.
	 */
	public function getData() {
		return $this->data;
	}

}
