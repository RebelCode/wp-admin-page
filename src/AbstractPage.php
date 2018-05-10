<?php

namespace RebelCode\WordPress\Admin\Page;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Basic functionality for WordPress admin pages.
 *
 * @since[*next-version*]
 */
abstract class AbstractPage
{
    /**
     * The page ID.
     *
     * @since[*next-version*]
     *
     * @var string
     */
    protected $id;

    /**
     * The page title.
     *
     * @since[*next-version*]
     *
     * @var string
     */
    protected $title;

    /**
     * Parameter-less constructor.
     *
     * Call this in the real constructor.
     *
     * @since[*next-version*]
     */
    protected function _construct()
    {
    }

    /**
     * Retrieves the page ID.
     *
     * @since[*next-version*]
     *
     * @return string
     */
    protected function _getId()
    {
        return $this->id;
    }

    /**
     * Sets the page ID.
     *
     * @since[*next-version*]
     *
     * @param string $id The page ID.
     *
     * @return $this
     */
    protected function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Retrieves the page title.
     *
     * @since[*next-version*]
     *
     * @return string
     */
    protected function _getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the page title.
     *
     * @since[*next-version*]
     *
     * @param string $title The page title.
     *
     * @return $this
     */
    protected function _setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Retrieves the content to be rendered for this page.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    abstract protected function _getContent();
}
