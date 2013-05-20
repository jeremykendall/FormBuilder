<?php
namespace FormBuilder;

class FormButtonTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var FormButton
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new FormButton('button_label', 'button_id');
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers FormBuilder\FormButton::__construct
	 */
	public function testConstrutor() {
		$this->object->__construct('label', 'id');
		$this->assertEquals('label', $this->object->getLabel(), 'Labels are equal.');
		$this->assertEquals('id', $this->object->getId(), 'Ids are equal.');
	}

	/**
	 * @covers FormBuilder\FormButton::getLabel
	 */
	public function testGetLabel()
	{
		$this->assertEquals('button_label', $this->object->getLabel(), 'Labels are equal.');
	}

	/**
	 * @covers FormBuilder\FormButton::getID
	 */
	public function testGetID()
	{
		$this->assertEquals('button_id', $this->object->getId(), 'Ids are equal.');
	}

	/**
	 * @covers FormBuilder\FormButton::setType
	 */
	public function testSetType()
	{
		$this->assertEmpty($this->object->getType(), 'Type is empty before being set.');
		$this->object->setType('submit');
		$this->assertEquals('submit', $this->object->getType(), 'Types are equal.');
	}

	/**
	 * @covers FormBuilder\FormButton::getType
	 */
	public function testGetType()
	{
		$this->assertEmpty($this->object->getType(), 'Type is empty before being set.');
		$this->object->setType('submit');
		$this->assertEquals('submit', $this->object->getType(), 'Types are equal.');
	}
}
