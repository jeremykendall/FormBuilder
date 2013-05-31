<?php
/**
 * FormBuilder
 *
 * A family of PHP classes that enable you to easily define the various
 * elements that make up a complex HTML form, which can then be
 * exported to JSON for client-side rendering.
 */

namespace FormBuilder;

/**
 * Form Button
 *
 * A FormButton is a component for a FormBuilder instance.
 *
 * @link https://github.com/tkambler/FormBuilder FormBuilder on GitHub
 * @package FormBuilder
 */
class FormButton {

	/**
	 * Label
	 *
	 * @var string Label of the button.
	 */
	private $label;

	/**
	 * ID
	 *
	 * @var string ID of the button.
	 */
	private $id;

	/**
	 * Type
	 *
	 * @var string Type attribute of the button.
	 */
	private $type;

	/**
	 * Constructor
	 *
	 * @param string $label Label of the button.
	 * @param string $id ID of the button.
	 */
	public function __construct($label, $id) {
		$this->label = $label;
		$this->id = $id;
	}

	/**
	 * Get Label
	 *
	 * @return string Label of the button.
	 */
	public function getLabel() {
		return (string) $this->label;
	}

	/**
	 * Get ID
	 *
	 * @return string ID of the button.
	 */
	public function getID() {
		return (string) $this->id;
	}

	/**
	 * Set Type
	 *
	 * @param string $type Type attribute of the button.
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Get Type
	 *
	 * @return string Type attribute of the button.
	 */
	public function getType() {
		return $this->type;
	}

}
