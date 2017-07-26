<?php

namespace RebelCode\WordPress\Admin\Page;

/**
 * Abstract implementation of a page that is aware of the content to be rendered.
 *
 * @since [*next-version*]
 */
abstract class AbstractBaseContentAwarePage extends AbstractBasePage
{
    use ContentAwarePageTrait;

    /**
     * Constructor.
     *
     * @since [*next-version*]
     *
     * @param string                     $id      The page ID.
     * @param string                     $title   The page title.
     * @param string|StringableInterface $content The output to render for this page.
     */
    public function __construct($id, $title, $content = '')
    {
        parent::__construct($id, $title);

        $this->_setContent($content);
    }
}
