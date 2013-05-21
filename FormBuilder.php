<?php
/**
 * FormBuilder
 */

namespace FormBuilder;

use Exception;

/**
 * FormBuilder
 *
 * @package FormBuilder
 */
class FormBuilder {

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
	 * Fieldsets
	 *
	 * @var array
	 */
	private $fieldsets = array();

	/**
	 * Buttons
	 *
	 * @var array
	 */
	private $buttons = array();

	/**
	 * Constructor
	 *
	 * @param string $id 
	 * @param string $name 
	 */
	public function __construct($id=null, $name=null) {
		$this->id = $id;
		$this->name = $name;
		if ( $id == null ) {
			throw new Exception('$id is required.');
		}
		if ( $name == null ) {
			throw new Exception('$name is required.');
		}
	}

	/**
	 * Create Fieldset
	 */
	public function createFieldset() {
		$fs = new Fieldset();
		$this->fieldsets[] = $fs;
		return $fs;
	}

	/**
	 * Export
	 *
	 * @return array
	 */
	public function export() {
		$data = array(
			'id' => $this->id,
			'name' => $this->name,
			'label' => $this->getLabel(),
			'fieldsets' => array(),
			'buttons' => array()
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
					$f['label'] = $field->getLabel();
					$f['required'] = $field->getRequired();
					$f['placeholder'] = $field->getPlaceholder();
					$f['validation'] = $field->getValidation();
					$f['data'] = $field->getData();
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

		foreach ( $this->buttons as $button ) {
			$button = array(
				'label' => $button->getLabel(),
				'id' => $button->getID(),
				'type' => $button->getType()
			);
			$data['buttons'][] = $button;
		}

		return $data;
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
	 * Create Button
	 *
	 * @param string $label 
	 * @param string $id 
	 */
	public function createButton($label, $id) {
		$button = new FormButton($label, $id);
		$this->buttons[] = $button;
		return $button;
	}

}
