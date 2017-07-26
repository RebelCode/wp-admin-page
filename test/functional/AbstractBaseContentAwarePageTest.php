<?php

namespace RebelCode\WordPress\Admin\Page\FuncTest;

use Xpmock\TestCase;
use RebelCode\WordPress\Admin\Page\AbstractBaseContentAwarePage;

class AbstractBaseContentAwarePageTest extends TestCase
{
    /**
     * The classname of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\WordPress\Admin\Page\AbstractBaseContentAwarePage';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return AbstractBaseContentAwarePage
     */
    public function createInstance($id = '', $title = '', $content = '')
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->new($id, $title, $content);

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
            'Subject is not a valid instance'
        );

        $this->assertInstanceOf(
            'RebelCode\\WordPress\\Admin\\Page\\PageInterface', $subject,
            'Subject is not a valid instance'
        );
    }

    /**
     * Tests the construction of the instance to ensure that the ID, title and content are correctly set.
     *
     * @since [*next-version*]
     */
    public function testConstructor()
    {
        $id      = 'test-id';
        $title   = 'Test Title!';
        $content = 'Some page content here.';
        $subject = $this->createInstance($id, $title, $content);

        $this->assertEquals($id, $subject->getId());
        $this->assertEquals($title, $subject->getTitle());
        $this->assertEquals($content, $subject->getContent());
    }
}
