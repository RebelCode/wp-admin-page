<?php

namespace RebelCode\WordPress\Admin\Page\FuncTest;

use Dhii\Util\String\StringableInterface;
use RebelCode\WordPress\Admin\Page\Page;
use Xpmock\TestCase;

/**
 * Tests the {@see RebelCode\WordPress\Admin\Page\Page} class.
 *
 * @since [*next-version*]
 */
class PageTest extends TestCase
{
    /**
     * Creates an instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @param string $id     The page ID.
     * @param string $title  The page title.
     * @param string $output The page render output.
     *
     * @return Page
     */
    public function createInstance($id = '', $title = '', $output = '')
    {
        return new Page($id, $title, $output);
    }

    /**
     * Creates a {@see Dhii\Util\String\StringableInterface} instance.
     *
     * @since [*next-version*]
     *
     * @param string $output The output for the instance.
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
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $instance = $this->createInstance();

        $this->assertInstanceOf(
            'RebelCode\\WordPress\\Admin\\Page\\PageInterface', $instance,
            'Subject does not implement PageInterface.'
        );

        $this->assertInstanceOf(
            'Dhii\\Block\\BlockInterface', $instance,
            'Subject does not implement BlockInterface.'
        );

        $this->assertInstanceOf(
            'Dhii\\Util\\String\\StringableInterface', $instance,
            'Subject does not implement StringableInterface.'
        );
    }

    /**
     * Tests the ID getter method to ensure that the correct value is returned.
     *
     * @since [*next-version*]
     */
    public function testGetId()
    {
        $id       = 'my-page';
        $instance = $this->createInstance($id, '');

        $this->assertEquals($id, $instance->getId());
    }

    /**
     * Tests the title getter method to ensure that the correct value is returned.
     *
     * @since [*next-version*]
     */
    public function testGetTitle()
    {
        $title    = 'my-page';
        $instance = $this->createInstance('', $title);

        $this->assertEquals($title, $instance->getTitle());
    }

    /**
     * Tests the content getter method with a string to ensure that the correct content is returned.
     *
     * @since [*next-version*]
     */
    public function testGetContentString()
    {
        $output  = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $instance = $this->createInstance('', '', $output);

        $this->assertEquals($output, $instance->getContent());
    }

    /**
     * Tests the content getter method with a stringable instance to ensure that the correct content is returned.
     *
     * @since [*next-version*]
     */
    public function testGetContentStringable()
    {
        $content    = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $stringable = $this->createStringable($content);
        $instance   = $this->createInstance('', '', $stringable);

        $this->assertEquals($content, $instance->getContent());
    }

    /**
     * Tests whether the page is rendered correctly as a block.
     *
     * @since [*next-version*]
     */
    public function testRender()
    {
        $content    = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $stringable = $this->createStringable($content);
        $instance   = $this->createInstance('', '', $stringable);

        $this->assertEquals($content, $instance->render(), 'Subject did not render correctly.');
    }

    /**
     * Description
     *
     * @since [*next-version*]
     */
    public function testCanBeCastToString()
    {
        $content    = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $stringable = $this->createStringable($content);
        $instance   = $this->createInstance('', '', $stringable);

        $this->assertEquals($content, (string) $instance, 'Subject was not correctly cast into a string.');
    }
}
