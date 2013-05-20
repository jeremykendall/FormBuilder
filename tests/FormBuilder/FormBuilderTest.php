<?php
namespace FormBuilder;

class FormBuilderTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var FormBuilder
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new FormBuilder('form_id', 'form_name');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers FormBuilder\FormBuilder::__construct
	 */
	public function testConstrutor() {
		$this->object->__construct('test_id', 'test_name');
		$form = $this->object->export();
		$this->assertEquals('test_id', $form['id'], 'Ids are equal.');
		$this->assertEquals('test_name', $form['name'], 'Names are equal.');
	}

	/**
	 * @covers FormBuilder\FormBuilder::__construct
	 * @expectedException Exception
	 * @expectedExceptionMessage $id is required.
	 */
	public function testInvalidName() {
		$this->object = new FormBuilder(null, 'name');
		$this->fail('Exception was not thrown.');
	}

	/**
	 * @covers FormBuilder\FormBuilder::__construct
	 * @expectedException Exception
	 * @expectedExceptionMessage $name is required.
	 */
	public function testInvalidId() {
		$this->object = new FormBuilder('id', null);
		$this->fail('Exception was not thrown.');
	}

	/**
	 * @covers FormBuilder\FormBuilder::createFieldset
	 */
	public function testCreateFieldset()
	{
		$this->object->createFieldset();
		$form = $this->object->export();
		$this->assertEquals('form_name', $form['name'], 'Name is set.');
		$this->assertEquals('form_id', $form['id'], 'Id is set.');
		$this->assertEquals(1, count($form['fieldsets']), 'Single fieldset created.');
	}

	/**
	 * @covers FormBuilder\FormBuilder::export
	 */
	public function testExport()
	{
		$fieldset = $this->object->createFieldset();
		$fieldset->createGroup()->createText('test_field');
		$select = $fieldset->createGroup()->createSelect('test_field');
		$select->createOption('test', 'value');
		$this->object->createButton('submit', 'a button');
		$form = $this->object->export();
		$this->assertEquals('form_name', $form['name'], 'Name is set.');
		$this->assertEquals('form_id', $form['id'], 'Id is set.');
		$this->assertEquals(1, count($form['fieldsets']), 'Single fieldset created.');
	}

	/**
	 * @covers FormBuilder\FormBuilder::setLabel
	 */
	public function testSetLabel() {
		$this->object->setLabel('test label');
		$this->assertEquals('test label', $this->object->getLabel(), 'Label is set.');
	}

	/**
	 * @covers FormBuilder\FormBuilder::getLabel
	 */
	public function testGetLabel() {
		$this->object->setLabel('label test');
		$this->assertEquals('label test', $this->object->getLabel(), 'Label is set.');
	}

	/**
	 * @covers FormBuilder\FormBuilder::createButton
	 */
	public function testCreateButton() {
		$this->object->createButton('button_label', 'button_id', 'submit');
		$form = $this->object->export();
		$this->assertEquals(1, count($form['buttons']));
		$this->assertEquals('button_label', $form['buttons'][0]['label']);
		$this->assertEquals('button_id', $form['buttons'][0]['id']);
		$this->assertNull($form['buttons'][0]['type']);
	}

}
