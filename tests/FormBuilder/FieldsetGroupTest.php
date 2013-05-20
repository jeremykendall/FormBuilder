<?php
namespace FormBuilder;

class FieldsetGroupTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var FieldsetGroup
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new FieldsetGroup;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::setColumns
	 */
	public function testSetColumns()
	{
		$this->object->setColumns(2);
		$this->assertEquals(2, $this->object->getColumns(), 'Column count matches.');
		$this->assertEmpty($this->object->getFields(), 'Changing the column count does not affect fields.');
		$this->object->setColumns(0);
		$this->assertEquals(1, $this->object->getColumns(), 'Column count matches.');
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::getColumns
	 */
	public function testGetColumns()
	{
		$this->object->setColumns(2);
		$this->assertEquals(2, $this->object->getColumns(), 'Column count matches.');
		$this->assertEmpty($this->object->getFields(), 'Changing the column count does not affect fields.');
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::getFields
	 */
	public function testGetFields()
	{
		$this->object->createText('test_field');
		$this->assertNotEmpty($this->object->getFields(), 'Fields are set.');
		$this->assertEquals(1, count($this->object->getFields()), 'Field count matches.');
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::createText
	 */
	public function testCreateText()
	{
		$this->object->createText('test_name', 'test_id');
		$fields = $this->object->getFields();
		$this->assertNotEmpty($fields, 'Fields are set.');
		$this->assertEquals('text', $fields[0]->getType(), 'Field types match.');
		$this->assertEquals('test_name', $fields[0]->getName(), 'Field names match.');
		$this->assertEquals('test_id', $fields[0]->getId(), 'Field ids match.');
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::createSelect
	 */
	public function testCreateSelect()
	{
		$this->object->createSelect('test_name', 'test_id');
		$fields = $this->object->getFields();
		$this->assertNotEmpty($fields, 'Fields are set.');
		$this->assertEquals('select', $fields[0]->getType(), 'Field types match.');
		$this->assertEquals('test_name', $fields[0]->getName(), 'Field names match.');
		$this->assertEquals('test_id', $fields[0]->getId(), 'Field ids match.');
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::createRadio
	 */
	public function testCreateRadio()
	{
		$this->object->createRadio('test_name', 'test_id');
		$fields = $this->object->getFields();
		$this->assertNotEmpty($fields, 'Fields are set.');
		$this->assertEquals('radio', $fields[0]->getType(), 'Field types match.');
		$this->assertEquals('test_name', $fields[0]->getName(), 'Field names match.');
		$this->assertEquals('test_id', $fields[0]->getId(), 'Field ids match.');
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::createCheckbox
	 */
	public function testCreateCheckbox()
	{
		$this->object->createCheckbox('test_name', 'test_id');
		$fields = $this->object->getFields();
		$this->assertNotEmpty($fields, 'Fields are set.');
		$this->assertEquals('checkbox', $fields[0]->getType(), 'Field types match.');
		$this->assertEquals('test_name', $fields[0]->getName(), 'Field names match.');
		$this->assertEquals('test_id', $fields[0]->getId(), 'Field ids match.');
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::createTextarea
	 */
	public function testCreateTextarea()
	{
		$this->object->createTextarea('test_name', 'test_id');
		$fields = $this->object->getFields();
		$this->assertNotEmpty($fields, 'Fields are set.');
		$this->assertEquals('textarea', $fields[0]->getType(), 'Field types match.');
		$this->assertEquals('test_name', $fields[0]->getName(), 'Field names match.');
		$this->assertEquals('test_id', $fields[0]->getId(), 'Field ids match.');
	}

	/**
	 * @covers FormBuilder\FieldsetGroup::createField
	 */
	public function testCreateField()
	{
		$this->object->createField('file', 'test_name', 'test_id');
		$fields = $this->object->getFields();
		$this->assertNotEmpty($fields, 'Fields are set.');
		$this->assertEquals('file', $fields[0]->getType(), 'Field types match.');
		$this->assertEquals('test_name', $fields[0]->getName(), 'Field names match.');
		$this->assertEquals('test_id', $fields[0]->getId(), 'Field ids match.');
		$this->object->createField('file', 'test_name2');
		$fields = $this->object->getFields();
		$this->assertEquals('test_name2', $fields[1]->getId(), 'Field id defaults to name if null.');

	}

}
