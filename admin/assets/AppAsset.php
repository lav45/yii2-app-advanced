<?php

namespace admin\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;
use yii\bootstrap4\BootstrapAsset;
use common\assets\fontawesome\FontAwesomeAsset;

/**
 * Main admin application asset bundle.
 */
class AppAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@admin/resource';
    /**
     * @var array
     */
    public $css = [
        'css/main.css',
    ];
    /**
     * @var array
     */
    public $js = [
        'js/main.js',
    ];
    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        FontAwesomeAsset::class,
    ];
}
