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
 * Collection of assets.
 *
 * @author Yuya Takeyama
 */
class Assetter_Asset_AssetCollection implements IteratorAggregate, Assetter_Asset_AssetCollectionInterface
{
    /**
     * Array of assets.
     *
     * @var array<Assetter_Asset_AssetInterface>
     */
    private $assets;

    /**
     * Array of filters.
     *
     * @var array<Assetter_Asset_AssetFilterInterface>
     */
    private $filters;

    public function __construct(array $assets = array(), array $filters = array())
    {
        $this->assets = $assets;
        $this->filters = $filters;
    }

    public function dump()
    {
        $parts = array();

        foreach ($this->assets as $asset) {
            $parts[] = $asset->dump();
        }

        return join("\n", $parts);
    }

    public function getLastModified()
    {
        $result = 0;

        foreach ($this->assets as $asset) {
            $lastModified = $asset->getLastModified();
            if ($lastModified > $result) {
                $result = $lastModified;
            }
        }

        return $result;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->assets);
    }
}
