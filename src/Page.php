<?php

namespace RebelCode\WordPress\Admin\Page;

use Dhii\Block\BlockInterface;

/**
 * The default, simple implementation of page.
 *
 * This implementation is configured with a string or a {@see Dhii\Util\String\StringableInterface} instance, which
 * will be used as the content output.
 *
 * @since [*next-version*]
 */
class Page extends AbstractBaseContentAwarePage implements BlockInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     */
    public function render()
    {
        return (string) $this->_getContent();
    }

    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     */
    public function __toString()
    {
        return $this->render();
    }
}
