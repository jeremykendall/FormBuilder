<?php
namespace FormBuilder;

class FieldsetTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Fieldset
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Fieldset;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers FormBuilder\Fieldset::setLabel
     */
    public function testSetLabel()
    {
        $this->assertEmpty($this->object->getLabel(), 'Label is not set previously.');
        $this->object->setLabel('test label');
        $this->assertEquals('test label', $this->object->getLabel(), 'Labels must match.');
    }

    /**
     * @covers FormBuilder\Fieldset::getLabel
     */
    public function testGetLabel()
    {
        $this->assertEmpty($this->object->getLabel(), 'Label is not set previously.');
        $this->object->setLabel('label test');
        $this->assertEquals('label test', $this->object->getLabel(), 'Labels must match.');
    }

    /**
     * @covers FormBuilder\Fieldset::setDescription
     */
    public function testSetDescription()
    {
        $this->assertEmpty($this->object->getDescription(), 'Description is not set previously.');
        $this->object->setDescription('description test');
        $this->assertEquals('description test', $this->object->getDescription(), 'Descriptions must match.');
    }

    /**
     * @covers FormBuilder\Fieldset::getDescription
     */
    public function testGetDescription()
    {
        $this->assertEmpty($this->object->getDescription(), 'Description is not set previously.');
        $this->object->setDescription('test description');
        $this->assertEquals('test description', $this->object->getDescription(), 'Descriptions must match.');
    }

    /**
     * @covers FormBuilder\Fieldset::createGroup
     */
    public function testCreateGroup()
    {
        $this->assertEmpty($this->object->getGroups(), 'Groups are not set previously.');
        $this->object->createGroup();
        $groups = $this->object->getGroups();
        $this->assertEquals(1, count($groups), 'A group was created.');
    }

    /**
     * @covers FormBuilder\Fieldset::getGroups
     */
    public function testGetGroups()
    {
        $this->assertEmpty($this->object->getGroups(), 'Groups are not set previously.');
        $this->object->createGroup();
        $groups = $this->object->getGroups();
        $this->assertEquals(1, count($groups), 'A group was created.');
    }
}
