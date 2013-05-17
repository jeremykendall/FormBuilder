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
     * @todo   Implement testSetDescription().
     */
    public function testSetDescription()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::getDescription
     * @todo   Implement testGetDescription().
     */
    public function testGetDescription()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::setPlaceholder
     * @todo   Implement testSetPlaceholder().
     */
    public function testSetPlaceholder()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::getPlaceholder
     * @todo   Implement testGetPlaceholder().
     */
    public function testGetPlaceholder()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::setValue
     * @todo   Implement testSetValue().
     */
    public function testSetValue()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::getValue
     * @todo   Implement testGetValue().
     */
    public function testGetValue()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::getType
     * @todo   Implement testGetType().
     */
    public function testGetType()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::createOption
     * @todo   Implement testCreateOption().
     */
    public function testCreateOption()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::getOptions
     * @todo   Implement testGetOptions().
     */
    public function testGetOptions()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::setRequired
     * @todo   Implement testSetRequired().
     */
    public function testSetRequired()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::getRequired
     * @todo   Implement testGetRequired().
     */
    public function testGetRequired()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::setValidation
     * @todo   Implement testSetValidation().
     */
    public function testSetValidation()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::getValidation
     * @todo   Implement testGetValidation().
     */
    public function testGetValidation()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::setData
     * @todo   Implement testSetData().
     */
    public function testSetData()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FormBuilder\FormField::getData
     * @todo   Implement testGetData().
     */
    public function testGetData()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
