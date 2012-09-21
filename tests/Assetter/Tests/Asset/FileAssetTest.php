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
 * Unit-tests for Assetter_Asset_FileAsset.
 *
 * @author Yuya Takeyama
 */
class Assetter_Tests_Asset_FileAsset extends PHPUnit_Framework_TestCase
{
    const FIXTURE_FILE = './tests/fixtures/fixture.css';

    /**
     * @test
     */
    public function render_should_be_content_of_the_file()
    {
        $asset = new Assetter_Asset_FileAsset(self::FIXTURE_FILE);
        $this->assertEquals("body { margin: 0; }\n", $asset->dump());
    }
}
