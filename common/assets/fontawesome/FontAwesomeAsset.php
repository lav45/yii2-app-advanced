<?php

namespace common\assets\fontawesome;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package common\assets\fontawesome
 * @see https://fontawesome.com/icons?d=gallery
 */
class FontAwesomeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = __DIR__ . '/resource';
    /**
     * @var array
     */
    public $js = [
        'all-5.4.1.js'
    ];
}
