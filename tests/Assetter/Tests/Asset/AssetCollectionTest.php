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
 * Unit-tests for Assetter_Asset_AssetCollection.
 *
 * @author Yuya Takeyama
 */
class Assetter_Tests_Asset_AssetCollectionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function dump_should_be_the_contents_concatenated_with_line_feed()
    {
        $collection = new Assetter_Asset_AssetCollection(array(
            new Assetter_Asset_StringAsset("asset1"),
            new Assetter_Asset_StringAsset("asset2"),
            new Assetter_Asset_StringAsset("asset3"),
        ));
        $this->assertEquals("asset1\nasset2\nasset3", $collection->dump());
    }
}
