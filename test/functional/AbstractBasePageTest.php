<?php

namespace RebelCode\WordPress\Admin\Page\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Page\AbstractBasePage;

class AbstractBasePageTest extends TestCase
{
    /**
     * The classname of the text subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Admin\\Page\\AbstractBasePage';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return AbstractBasePage
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->_getContent()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'Subject is not a valid instance.'
        );

        $this->assertInstanceOf(
            'RebelCode\\WordPress\\Admin\\Page\\PageInterface', $subject,
            'Subject does not implement PageInterface.'
        );
    }

    /**
     * Tests the ID getter method to ensure that the ID is correctly returned.
     *
     * @since [*next-version*]
     */
    public function testGetId()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $id = 'test-id-123';
        $reflect->_setId($id);

        $this->assertEquals($id, $subject->getId());
    }

    /**
     * Tests the title getter method to ensure that the title is correctly returned.
     *
     * @since [*next-version*]
     */
    public function testGetTitle()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $title = 'Test Title';
        $reflect->_setTitle($title);

        $this->assertEquals($title, $subject->getTitle());
    }

    /**
     * Tests the content getter method to ensure that the abstract protected getter is called.
     *
     * @since [*next-version*]
     */
    public function testGetContent()
    {
        $subject = $this->createInstance();

        $subject->mock()->_getContent($this->once());

        $subject->getContent();
    }
}
