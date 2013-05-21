<?php
/**
 * Form Button
 */
namespace FormBuilder;

/**
 * Form Button
 *
 * @package FormBuilder
 */
class FormButton {

	/**
	 * Label
	 *
	 * @var string
	 */
	private $label;

	/**
	 * ID
	 *
	 * @var string
	 */
	private $id;

	/**
	 * Type
	 *
	 * @var string
	 */
	private $type;

	/**
	 * Constructor
	 *
	 * @param string $label 
	 * @param string $id 
	 */
	public function __construct($label, $id) {
		$this->label = $label;
		$this->id = $id;
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
	 * Get ID
	 *
	 * @return string
	 */
	public function getID() {
		return (string) $this->id;
	}

	/**
	 * Set Type
	 *
	 * @param string $type 
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Get Type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

}
