<?php

namespace www\assets;

use yii\web\AssetBundle;

/**
 * Main www application asset bundle.
 */
class AppAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@www/resource';
    /**
     * @var array
     */
    public $css = [
        'css/site.css',
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
