<?php

namespace RebelCode\WordPress\Admin\Page;

/**
 * Base functionality for a WordPress admin page.
 *
 * @since [*next-version*]
 */
abstract class AbstractBasePage extends AbstractPage implements PageInterface
{
    /**
     * Constructor.
     *
     * @since [*next-version*]
     *
     * @param string $id    The page ID.
     * @param string $title The page title.
     */
    public function __construct($id, $title)
    {
        $this->_setId($id)
             ->_setTitle($title)
             ->_construct();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->_getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->_getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return $this->_getContent();
    }
}
