<?php
/**
 * Field Option
 */

namespace FormBuilder;

use Exception;

/**
 * Field Option
 *
 * @package FormBuilder
 */
class FieldOption {

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
	 * Constructor
	 *
	 * @param string $label 
	 * @param string $value 
	 */
	public function __construct($label = null, $value = null) {
		$this->label = $label;
		$this->value = $value;
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

}
