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
 * Interface of assets.
 *
 * @author Yuya Takeyama
 */
interface Assetter_Asset_AssetInterface
{
    /**
     * Returns asset as string.
     *
     * @return string
     */
    public function dump();

    /**
     * Gets the Unix timestamp of the asset is last modified.
     *
     * @return int
     */
    public function getLastModified();
}
