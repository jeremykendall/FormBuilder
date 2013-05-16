<?php

namespace FormBuilder;

use Exception;

class Fieldset {

	private $groups = array();
	private $label;
	private $description;

	public function __construct() {
	}

	public function setLabel($label) {
		$this->label = $label;
	}

	public function getLabel() {
		return (string) $this->label;
	}

	public function setDescription($desc) {
		$this->description = $desc;
	}

	public function getDescription() {
		return (string) $this->description;
	}

	public function createGroup() {
		$group = new FieldsetGroup();
		$this->groups[] = $group;
		return $group;
	}

	public function getGroups() {
		return $this->groups;
	}

}
