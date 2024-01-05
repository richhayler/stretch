<?php
/**
 * Stretch plugin for Craft CMS
 *
 * Stretch
 *
 * @author    Rich Hayler
 * @copyright Copyright (c) 2019 Rich Hayler
 * @link      https://richhayler.com/projects/stretch
 * @package   Stretch
 * @since     1.2.0
 */

namespace richhayler\stretch;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * Class Stretch
 *
 * @author    Rich Hayler
 * @package   Stretch
 * @since     1.2.0
 *
 */
class StretchBundle extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@richhayler/stretch/resources";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/Stretch.js',
        ];

        $this->css = [
            'css/Stretch.css',
        ];

        parent::init();
    }
}
