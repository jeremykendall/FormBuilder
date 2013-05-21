<?php
/**
 * Form Field
 */

namespace FormBuilder;

use Exception;

/**
 * Form Field
 *
 * @package FormBuilder
 */
class FormField {

	/**
	 * Valid Types
	 *
	 * @var array
	 */
	private $valid_types = array('text', 'select', 'textarea', 'radio', 'checkbox', 'file');

	/**
	 * Type
	 *
	 * @var string
	 */
	private $type;

	/**
	 * ID
	 *
	 * @var string
	 */
	private $id;

	/**
	 * Name
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Label
	 *
	 * @var string
	 */
	private $label;

	/**
	 * Value
	 *
	 * @var string
	 */
	private $value;

	/**
	 * Description
	 *
	 * @var string
	 */
	private $description;

	/**
	 * Placeholder
	 *
	 * @var string
	 */
	private $placeholder;

	/**
	 * Required
	 *
	 * @var boolean
	 */
	private $required = false;

	/**
	 * Validation
	 *
	 * @var string
	 */
	private $validation;

	/**
	 * Data
	 *
	 * @var array
	 */
	private $data = array();

	/**
	 * Options
	 *
	 * @var array
	 */
	private $options = array();

	/**
	 * Constructor
	 *
	 * @param string $type 
	 * @param string $name 
	 * @param string $id 
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
	 * @return string
	 */
	public function getName() {
		return (string) $this->name;
	}

	/**
	 * Get ID
	 *
	 * @return string
	 */
	public function getID() {
		return (string) $this->id;
	}

	/**
	 * Set Label
	 *
	 * @param string $label 
	 */
	public function setLabel($label) {
		$this->label = $label;
	}

	/**
	 * Get Label
	 *
	 * @return string
	 */
	public function getLabel() {
		return (string) $this->label;
	}

	/**
	 * Set Description
	 *
	 * @param string $desc 
	 */
	public function setDescription($desc) {
		$this->description = $desc;
	}

	/**
	 * Get Description
	 *
	 * @return string
	 */
	public function getDescription() {
		return (string) $this->description;
	}

	/**
	 * Set Placeholder
	 *
	 * @param string $placeholder 
	 */
	public function setPlaceholder($placeholder) {
		$this->placeholder = $placeholder;
	}

	/**
	 * Get Placeholder
	 *
	 * @return string
	 */
	public function getPlaceholder() {
		return (string) $this->placeholder;
	}

	/**
	 * Set Value
	 *
	 * @param string $value 
	 */
	public function setValue($value) {
		$this->value = $value;
	}

	/**
	 * Get Value
	 *
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Get Type
	 *
	 * @return string
	 */
	public function getType() {
		return (string) $this->type;
	}

	/**
	 * Create Option
	 *
	 * @param string $label 
	 * @param string $value 
	 */
	public function createOption($label = null, $value = null) {
		$option = new FieldOption($label, $value);
		$this->options[] = $option;
		return $option;
	}

	/**
	 * Get Options
	 *
	 * @return array
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * Set Required
	 *
	 * @param boolean $req 
 	*/
	public function setRequired($req) {
		$this->required = (bool) $req;
	}

	/**
	 * Get Required
	 *
	 * @return boolean
	 */
	public function getRequired() {
		return (bool) $this->required;
	}

	/**
	 * Set Validation
	 *
	 * @param string $validation 
	 */
	public function setValidation($validation) {
		$this->validation = $validation;
	}

	/**
	 * Get Validation
	 *
	 * @return string
	 */
	public function getValidation() {
		return $this->validation;
	}

	/**
	 * Set Data
	 *
	 * @param array $data 
	 */
	public function setData(array $data = null) {
		$this->data = (array) $data;
	}

	/**
	 * Get Data
	 *
	 * @return array
	 */
	public function getData() {
		return $this->data;
	}

}
