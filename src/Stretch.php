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
 * @since     1.0.0
 */

namespace richhayler\stretch;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class Stretch
 *
 * @author    Rich Hayler
 * @package   Stretch
 * @since     1.0.0
 *
 */

class Stretch extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Stretch
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        $user = Craft::$app->getUser();
        $request = Craft::$app->getRequest();
        $view = Craft::$app->getView();

        Craft::info(
            Craft::t(
                'stretch',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );

        if (!$user || !$user->id || !$request->getIsCpRequest() || $request->getIsConsoleRequest()) {
            return;
        }

        if ( $view->getTemplateMode() === 'cp' ){
          // the includeJs method lets us add js to the bottom of the page
          $view->registerAssetBundle(StretchBundle::class);
        }
    }

    // Protected Methods
    // =========================================================================

}
