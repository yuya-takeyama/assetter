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
 * File asset.
 *
 * @author Yuya Takeyama
 */
class Assetter_Asset_FileAsset implements Assetter_Asset_AssetInterface
{
    /**
     * File path.
     *
     * @var string
     */
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function dump()
    {
        return file_get_contents($this->file);
    }

    public function getLastModified()
    {
        return filemtime($this->file);
    }
}
