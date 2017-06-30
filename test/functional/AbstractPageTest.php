<?php

namespace RebelCode\WordPress\Admin\Page\FuncTest;

use RebelCode\WordPress\Admin\Page\AbstractPage;
use Xpmock\TestCase;

class AbstractPageTest extends TestCase
{
    /**
     * The classname of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Admin\\Page\\AbstractPage';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return AbstractPage
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->_getContent();

        return $mock->new();
    }

    /**
     * Tests the ID getter and setter methods.
     *
     * @since [*next-version*]
     */
    public function testGetSetId()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $id = 'test-foo-123';
        $reflect->_setId($id);

        $this->assertEquals($id, $reflect->_getId());
    }

    /**
     * Tests the title getter and setter methods.
     *
     * @since [*next-version*]
     */
    public function testGetSetTitle()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $title = 'Test Page Title';
        $reflect->_setTitle($title);

        $this->assertEquals($title, $reflect->_getTitle());
    }
}
