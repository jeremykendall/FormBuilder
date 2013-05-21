<?php
/**
 * Fieldset
 */

namespace FormBuilder;

use Exception;

/**
 * Fieldset
 *
 * @package FormBuilder
 */
class Fieldset {

	/**
	 * Groups
	 *
	 * @var array
	 */
	private $groups = array();

	/**
	 * Label
	 *
	 * @var string
	 */
	private $label;

	/**
	 * Description
	 *
	 * @var string
	 */
	private $description;

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
	 * Create Group
	 */
	public function createGroup() {
		$group = new FieldsetGroup();
		$this->groups[] = $group;
		return $group;
	}

	/**
	 * Get Groups
	 *
	 * @return array
	 */
	public function getGroups() {
		return $this->groups;
	}

}
