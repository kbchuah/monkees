<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class Index1Asset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    public $css = [
        'style/css/bootstrap.min.css',
        'style/css/plugins.css',
        'style/revolution/css/settings.css',
        'style/revolution/css/layers.css',
        'style/revolution/css/navigation.css',
        'style/revolution/revolution-addons/filmstrip/css/revolution.addon.filmstrip.css',
        'style/revolution/revolution-addons/typewriter/css/typewriter.css',
        'style/type/icons.css',
        'style.css',
        'style/css/color/ice.css',
        'https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i',
    ];
    public $js = [
        'style/js/jquery.min.js',
        'style/js/popper.min.js',
        'style/js/bootstrap.min.js',
        'style/revolution/js/jquery.themepunch.tools.min.js',
        'style/revolution/js/jquery.themepunch.revolution.min.js',
        'style/revolution/revolution-addons/filmstrip/js/revolution.addon.filmstrip.min.js',
        'style/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js',

        // SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading)
        // 'style/revolution/js/extensions/revolution.extension.actions.min.js',
        // 'style/revolution/js/extensions/revolution.extension.carousel.min.js',
        // 'style/revolution/js/extensions/revolution.extension.kenburn.min.js',
        // 'style/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        // 'style/revolution/js/extensions/revolution.extension.migration.min.js',
        // 'style/revolution/js/extensions/revolution.extension.navigation.min.js',
        // 'style/revolution/js/extensions/revolution.extension.parallax.min.js',
        // 'style/revolution/js/extensions/revolution.extension.slideanims.min.js',
        // 'style/revolution/js/extensions/revolution.extension.video.min.js',
        // SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading)

        'style/js/plugins.js',
        'style/js/scripts.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
