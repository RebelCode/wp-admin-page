<?php

namespace RebelCode\WordPress\Admin\Page\FuncTest;

use Dhii\Util\String\StringableInterface;
use RebelCode\WordPress\Admin\Page\ContentAwarePageTrait;
use Xpmock\TestCase;

class ContentAwarePageTraitTest extends TestCase
{
    /**
     * The classname of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\WordPress\\Admin\\Page\\ContentAwarePageTrait';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ContentAwarePageTrait
     */
    public function createInstance()
    {
        $mock = $this->getMockForTrait(static::TEST_SUBJECT_CLASSNAME);

        return $mock;
    }

    /**
     * Creates a stringable instance.
     *
     * @since [*next-version*]
     *
     * @param string $output The output to be returned by the stringable instance.
     *
     * @return StringableInterface
     */
    public function createStringable($output)
    {
        $mock = $this->mock('Dhii\\Util\\String\\StringableInterface')
            ->__toString($output);

        return $mock->new();
    }

    /**
     * Tests the output getter and setter methods.
     *
     * @since [*next-version*]
     */
    public function testGetSetOutput()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $output = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $reflect->_setContent($output);

        $this->assertEquals($output, $reflect->_getContent());
    }

    /**
     * Tests the content getter method to ensure that the output is correctly returned.
     *
     * @since [*next-version*]
     */
    public function testGetContent()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $output = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $reflect->_setContent($output);

        $this->assertEquals($output, $reflect->_getContent());
    }

    /**
     * Tests the content getter method with a Stringable instances set as the output to ensure that the
     * output returned by the content getter is correctly cast to a string.
     *
     * @since [*next-version*]
     */
    public function testGetContentWithStringable()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $output     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $stringable = $this->createStringable($output);
        $reflect->_setContent($stringable);

        $this->assertEquals($output, $reflect->_getContent());
    }
}
