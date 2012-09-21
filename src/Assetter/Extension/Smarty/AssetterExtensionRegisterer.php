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
 * @author Yuya Takeyama
 */
class Assetter_Extension_Smarty_AssetterExtensionRegisterer
{
    /**
     * @var Assetter_AssetManager
     */
    private $assetManager;

    /**
     * @var Smarty
     */
    private $smarty;

    public function __construct(Assetter_AssetManager $assetManager, Smarty $smarty)
    {
        $this->assetManager = $assetManager;
        $this->smarty = $smarty;
    }

    public function register()
    {
    }
}
