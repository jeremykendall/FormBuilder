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
 * Field Option
 *
 * A FieldOption is a component for a FormField instance, typically a `<select>`.
 *
 * @link https://github.com/tkambler/FormBuilder FormBuilder on GitHub
 * @package FormBuilder
 */
class FieldOption {

	/**
	 * Label
	 *
	 * @var string Label of the field option.
	 */
	private $label;

	/**
	 * Value
	 *
	 * @var string Value of the field option.
	 */
	private $value;

	/**
	 * Constructor
	 *
	 * @param string $label Label of the field option.
	 * @param string $value Value of the field option.
	 */
	public function __construct($label = null, $value = null) {
		$this->label = $label;
		$this->value = $value;
	}

	/**
	 * Set Label
	 *
	 * @param string $label Label of the field option.
	 */
	public function setLabel($label) {
		$this->label = $label;
	}

	/**
	 * Get Label
	 *
	 * @return string Label of the field option.
	 */
	public function getLabel() {
		return (string) $this->label;
	}

	/**
	 * Set Value
	 *
	 * @param string Value of the field option.
	 */
	public function setValue($value) {
		$this->value = $value;
	}

	/**
	 * Get Value
	 *
	 * @return string Value of the field option.
	 */
	public function getValue() {
		return $this->value;
	}

}
