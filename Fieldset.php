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
 * Fieldset
 *
 * A Fieldset is a group of FormField instances.
 *
 * @link https://github.com/tkambler/FormBuilder FormBuilder on GitHub
 * @package FormBuilder
 */
class Fieldset {

	/**
	 * Groups
	 *
	 * @var array Ordered array of FieldsetGroup instances.
	 */
	private $groups = array();

	/**
	 * Label
	 *
	 * @var string Label for the fieldset.
	 */
	private $label;

	/**
	 * Description
	 *
	 * @var string Description for the fieldset.
	 */
	private $description;

	/**
	 * Set Label
	 *
	 * @param string $label Label for the fieldset.
	 */
	public function setLabel($label) {
		$this->label = $label;
	}

	/**
	 * Get Label
	 *
	 * @return string Label for the fieldset.
	 */
	public function getLabel() {
		return (string) $this->label;
	}

	/**
	 * Set Description
	 *
	 * @param string $desc Description for the fieldset.
	 */
	public function setDescription($desc) {
		$this->description = $desc;
	}

	/**
	 * Get Description
	 *
	 * @return string Description for the fieldset.
	 */
	public function getDescription() {
		return (string) $this->description;
	}

	/**
	 * Create Group
	 *
	 * @return object FieldsetGroup instance.
	 */
	public function createGroup() {
		$group = new FieldsetGroup();
		$this->groups[] = $group;
		return $group;
	}

	/**
	 * Get Groups
	 *
	 * @return array Ordered array of FielsetGroup instances.
	 */
	public function getGroups() {
		return $this->groups;
	}

}
