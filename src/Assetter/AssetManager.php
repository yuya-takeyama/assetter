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
 * The asset manager.
 *
 * @author Yuya Takeyama
 */
class Assetter_AssetManager
{
    /**
     * Array of assets.
     *
     * @var array<Assetter_AssetInterface>
     */
    private $assets = array();

    public function set($key, Assetter_Asset_AssetInterface $asset)
    {
        $this->assets[$key] = $asset;
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->assets) === false) {
            throw new InvalidArgumentException(sprintf('The assset named "%s" is not found.', $key));
        }

        return $this->assets[$key];
    }
}
