<?php
/**
 * This file is part of Assetter.
 *
 * (c) Yuya Takeyama
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Assetter_Extension_Smarty_Functions
{
    /**
     * @param  array<mixed> $params
     * @param  Smarty       $smarty
     * @return string
     */
    public function assetter_stylesheets($params, $smarty)
    {
        if (array_key_exists('files', $params) === false) {
            throw new InvalidArgumentException('The parameter named "files" is required.');
        }

        $files = explode(',', $params['files']);
        $fileAssets = array();

        foreach ($files as $file) {
            $fileAssets[] = new Assetter_Asset_FileAsset($file);
        }

        $asset = new Assetter_Asset_AssetCollection($fileAssets);
    }
}
