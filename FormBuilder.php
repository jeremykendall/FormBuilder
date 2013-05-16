<?php

namespace FormBuilder;

use Exception;

class FormBuilder {

	private $id;
	private $name;
	private $fieldsets = array();

	public function __construct($id, $name) {
		$this->id = $id;
		$this->name = $name;
		if ( $id == null ) {
			throw new Exception('$id is required.');
		}
		if ( $name == null ) {
			throw new Exception('$name is required.');
		}
	}

	public function createFieldset() {
		$fs = new Fieldset();
		$this->fieldsets[] = $fs;
		return $fs;
	}

	public function export() {
		$data = array(
			'id' => $this->id,
			'name' => $this->name,
			'fieldsets' => array()
		);
		foreach ( $this->fieldsets as $fieldset ) {
			$fs = array();
			$fs['label'] = $fieldset->getLabel();
			$fs['description'] = $fieldset->getDescription();
			$fs['groups'] = array();

			$groups = $fieldset->getGroups();
			foreach ( $groups as $group ) {
				$g = array();
				$g['columns'] = $group->getColumns();
				$g['fields'] = array();
				foreach ( $group->getFields() as $field ) {
					$f = array();
					$f['type'] = $field->getType();
					$f['name'] = $field->getName();
					$f['id'] = $field->getID();
					$f['required'] = $field->getRequired();
					$f['value'] = $field->getValue();

					switch ( $field->getType() ) {
						case 'select' :
							$f['options'] = array();
							foreach ( $field->getOptions() as $option ) {
								$f['options'][] = array(
									'label' => $option->getLabel(),
									'value' => $option->getValue()
								);
							}
						break;
					}

					$g['fields'][] = $f;
				}
				$fs['groups'][] = $g;
			}

			$data['fieldsets'][] = $fs;
		}
		return $data;
	}

}
