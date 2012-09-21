<?php
/**
 * This file is part of Assetter.
 *
 * (c) Yuya Takeyama
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * String asset.
 *
 * @author Yuya Takeyama
 */
class Assetter_Asset_StringAsset
{
    /**
     * Content.
     *
     * @var string
     */
    private $content;

    /**
     * Unix timestamp of last modified.
     *
     * @var int
     */
    private $lastModified;

    /**
     * Constructor.
     *
     * @param string $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    public function dump()
    {
        return $this->content;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function getLastModified()
    {
        return isset($this->lastModified) ? $this->lastModified : time();
    }
}
