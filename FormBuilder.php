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
 * FormBuilder
 *
 * FormBuilder is the parent class of the FormBuilder package.
 *
 * @link https://github.com/tkambler/FormBuilder FormBuilder on GitHub
 * @package FormBuilder
 */
class FormBuilder {

	/**
	 * ID
	 *
	 * @var string ID of the form.
	 */
	private $id;

	/**
	 * Name
	 *
	 * @var string Name of the form.
	 */
	private $name;

	/**
	 * Label
	 *
	 * @var string Label of the form.
	 */
	private $label;

	/**
	 * Fieldsets
	 *
	 * @var array Ordered array of Fieldset instances.
	 */
	private $fieldsets = array();

	/**
	 * Buttons
	 *
	 * @var array Ordered array of FormButton instances.
	 */
	private $buttons = array();

	/**
	 * Constructor
	 *
	 * @param string $id ID of the form.
	 * @param string $name Name of the form.
	 * @throws Exception
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
	 *
	 * @return object Fieldset instance.
	 */
	public function createFieldset() {
		$fs = new Fieldset();
		$this->fieldsets[] = $fs;
		return $fs;
	}

	/**
	 * Export
	 *
	 * @return array Associative array of the form.
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
	 * @param string $label Label of the form.
	 */
	public function setLabel($label) {
		$this->label = $label;
	}

	/**
	 * Get Label
	 *
	 * @return string Label of the form.
	 */
	public function getLabel() {
		return (string) $this->label;
	}

	/**
	 * Create Button
	 *
	 * @param string $label Label of the button.
	 * @param string $id ID of the button.
	 */
	public function createButton($label, $id) {
		$button = new FormButton($label, $id);
		$this->buttons[] = $button;
		return $button;
	}

}
