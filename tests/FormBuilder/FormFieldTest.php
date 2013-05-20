<?php
namespace FormBuilder;

class FormFieldTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var FormField
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new FormField('text', 'field_name', 'field_id');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers FormBuilder\FormField::__construct
	 */
	public function testConstrutor() {
		$this->object->__construct('radio', 'name', 'id');
		$this->assertEquals('radio', $this->object->getType(), 'Types are equal.');
		$this->assertEquals('name', $this->object->getName(), 'Names are equal.');
		$this->assertEquals('id', $this->object->getId(), 'Ids are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::__construct
	 * @expectedException Exception
	 * @expectedExceptionMessage Invalid type specified. Supported values: text, select, textarea, radio, checkbox, file
	 */
	public function testInvalidType() {
		$this->object = new FormField('foobar', 'field_name', 'field_id');
	}

	/**
	 * @covers FormBuilder\FormField::__construct
	 * @expectedException Exception
	 * @expectedExceptionMessage $type is required.
	 */
	public function testMissingType() {
		$this->object = new FormField(null, 'name', 'id');
		$this->assertFail('Exception was not thrown.');
	}

	/**
	 * @covers FormBuilder\FormField::__construct
	 * @expectedException Exception
	 * @expectedExceptionMessage $name is required.
	 */
	public function testInvalidName() {
		$this->object = new FormField('radio', null, 'id');
		$this->assertFail('Exception was not thrown.');
	}

	/**
	 * @covers FormBuilder\FormField::__construct
	 * @expectedException Exception
	 * @expectedExceptionMessage $id is required.
	 */
	public function testInvalidId() {
		$this->object = new FormField('radio', 'name', null);
		$this->assertFail('Exception was not thrown.');
	}

	/**
	 * @covers FormBuilder\FormField::getName
	 */
	public function testGetName()
	{
		$this->assertEquals('field_name', $this->object->getName(), 'Names are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::getID
	 * @todo   Implement testGetID().
	 */
	public function testGetID()
	{
		$this->assertEquals('field_id', $this->object->getId(), 'Ids are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::setLabel
	 */
	public function testSetLabel()
	{
		$this->assertEmpty($this->object->getLabel(), 'Label is empty prior to being set.');
		$this->object->setLabel('test label');
		$this->assertEquals('test label', $this->object->getLabel(), 'Labels are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::getLabel
	 */
	public function testGetLabel()
	{
		$this->assertEmpty($this->object->getLabel(), 'Label is empty prior to being set.');
		$this->object->setLabel('test label');
		$this->assertEquals('test label', $this->object->getLabel(), 'Labels are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::setDescription
	 */
	public function testSetDescription()
	{
		$this->assertEmpty($this->object->getDescription(), 'Description is empty prior to being set.');
		$this->object->setDescription('test description');
		$this->assertEquals('test description', $this->object->getDescription(), 'Descriptions are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::getDescription
	 */
	public function testGetDescription()
	{
		$this->assertEmpty($this->object->getDescription(), 'Description is empty prior to being set.');
		$this->object->setDescription('description test');
		$this->assertEquals('description test', $this->object->getDescription(), 'Descriptions are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::setPlaceholder
	 */
	public function testSetPlaceholder()
	{
		$this->assertEmpty($this->object->getPlaceholder(), 'Placeholder is empty prior to being set.');
		$this->object->setPlaceholder('placeholder test');
		$this->assertEquals('placeholder test', $this->object->getPlaceholder(), 'Placeholders are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::getPlaceholder
	 */
	public function testGetPlaceholder()
	{
		$this->assertEmpty($this->object->getPlaceholder(), 'Placeholder is empty prior to being set.');
		$this->object->setPlaceholder('test placeholder');
		$this->assertEquals('test placeholder', $this->object->getPlaceholder(), 'Placeholders are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::setValue
	 */
	public function testSetValue()
	{
		$this->assertEmpty($this->object->getValue(), 'Value is empty prior to being set.');
		$this->object->setValue('value test');
		$this->assertEquals('value test', $this->object->getValue(), 'Values are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::getValue
	 */
	public function testGetValue()
	{
		$this->assertEmpty($this->object->getValue(), 'Value is empty prior to being set.');
		$this->object->setValue('test value');
		$this->assertEquals('test value', $this->object->getValue(), 'Values are equal.');
	}

	/**
	 * @covers FormBuilder\FormField::getType
	 */
	public function testGetType()
	{
		$this->assertEquals('text', $this->object->getType(), 'Types must match.');
	}

	/**
	 * @covers FormBuilder\FormField::createOption
	 */
	public function testCreateOption()
	{
		$this->object->createOption('test option', 'test_value');
		$options = $this->object->getOptions();
		$this->assertEquals(1, count($options), 'One option has been created.');
		$this->assertEquals('test option', $options[0]->getLabel(), 'Option labels must match.');
		$this->assertEquals('test_value', $options[0]->getValue(), 'Option values must match.');
	}

	/**
	 * @covers FormBuilder\FormField::getOptions
	 */
	public function testGetOptions()
	{
		$this->object->createOption('test option', 'test_value');
		$this->object->createOption('another option', 'test_value2');
		$options = $this->object->getOptions();
		$this->assertEquals(2, count($options), 'One option has been created.');
		$this->assertEquals('test option', $options[0]->getLabel(), 'Option labels must match.');
		$this->assertEquals('test_value2', $options[1]->getValue(), 'Option values must match.');
	}

	/**
	 * @covers FormBuilder\FormField::setRequired
	 */
	public function testSetRequired()
	{
		$this->object->setRequired(true);
		$this->assertTrue($this->object->getRequired(), 'Field is required.');
	}

	/**
	 * @covers FormBuilder\FormField::getRequired
	 */
	public function testGetRequired()
	{
		$this->object->setRequired(false);
		$this->assertFalse($this->object->getRequired(), 'Field is not required.');
	}

	/**
	 * @covers FormBuilder\FormField::setValidation
	 */
	public function testSetValidation()
	{
		$this->object->setValidation('validation_library_input');
		$this->assertEquals('validation_library_input', $this->object->getValidation(), 'Validation rules must match.');
	}

	/**
	 * @covers FormBuilder\FormField::getValidation
	 */
	public function testGetValidation()
	{
		$this->object->setValidation('input_validation_library');
		$this->assertEquals('input_validation_library', $this->object->getValidation(), 'Validation rules must match.');
	}

	/**
	 * @covers FormBuilder\FormField::setData
	 */
	public function testSetData()
	{
		$this->object->setData(array('class'=>'span3'));
		$data = $this->object->getData();
		$this->assertInternalType('array', $data, 'Returned as an array.');
		$this->assertEquals('span3', $data['class'], 'Data values must match.');
	}

	/**
	 * @covers FormBuilder\FormField::getData
	 */
	public function testGetData()
	{
		$this->assertEmpty($this->object->getData(), 'No data was previously set.');
		$this->object->setData(array('class'=>'span3'));
		$data = $this->object->getData();
		$this->assertInternalType('array', $data, 'Returned as an array.');
		$this->assertEquals('span3', $data['class'], 'Data values must match.');
	}
}
