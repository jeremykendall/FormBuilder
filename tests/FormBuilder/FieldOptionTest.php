<?php
namespace FormBuilder;

class FieldOptionTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var FieldOption
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new FieldOption;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers FormBuilder\FieldOption::setLabel
	 */
	public function testSetLabel()
	{
		$this->object->setLabel('My Label');
		$this->assertEquals('My Label', $this->object->getLabel(), 'Labels match.');
		$this->assertEmpty($this->object->getValue(), 'Setting the label does not change the value.');
	}

	/**
	 * @covers FormBuilder\FieldOption::getLabel
	 */
	public function testGetLabel()
	{
		$this->object->setLabel('Another Label');
		$this->assertEquals('Another Label', $this->object->GetLabel(), 'Labels match.');
		$this->assertNull($this->object->GetValue(), 'Getting the label does not change the value.');
	}

	/**
	 * @covers FormBuilder\FieldOption::setValue
	 */
	public function testSetValue()
	{
		$this->object->setValue('A Value');
		$this->assertEquals('A Value', $this->object->getValue(), 'Values match');
		$this->assertEmpty($this->object->getLabel(), 'Setting the value does not change the label');
	}

	/**
	 * @covers FormBuilder\FieldOption::getValue
	 */
	public function testGetValue()
	{
		$this->object->setValue('A Value');
		$this->assertEquals('A Value', $this->object->getValue(), 'Values match');
		$this->assertEmpty($this->object->getLabel(), 'Getting the value does not change the label');
	}
}
