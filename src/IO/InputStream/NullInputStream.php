<?php

/*
 * This file is part of the webmozart/console package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Console\IO\InputStream;

use Webmozart\Console\Api\IO\InputStream;

/**
 * An input stream that returns nothing.
 *
 * @since  1.0
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class NullInputStream implements InputStream
{
    /**
     * {@inheritdoc}
     */
    public function read($length)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function readLine($length = null)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function isClosed()
    {
        return false;
    }
}
