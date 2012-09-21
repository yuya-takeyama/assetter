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
 * Unit-tests for Assetter_Asset_StringAsset
 *
 * @author Yuya Takeyama
 */
class Assetter_Tests_StringAssetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function dump_should_be_content()
    {
        $asset = new Assetter_Asset_StringAsset("content");
        $this->assertEquals('content', $asset->dump());
    }
}
