<?php

namespace RebelCode\WordPress\Admin\Page;

/**
 * Functionality for a page that is aware of the content to be rendered.
 *
 * @since [*next-version*]
 */
trait ContentAwarePageTrait
{
    /**
     * The content the render.
     *
     * @since [*next-version*]
     *
     * @var string|StringableInterface
     */
    protected $content;

    /**
     * Retrieves the content to be rendered for this page.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    protected function _getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content to be rendered for this page.
     *
     * @since [*next-version*]
     *
     * @param string|StringableInterface $content The output to render.
     *
     * @return $this
     */
    protected function _setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
