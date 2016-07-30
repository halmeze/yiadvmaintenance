<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class StaddAsset extends AssetBundle
{
    public $basePath = '@themes/stadd';
    public $baseUrl = '@/themes/stadd';
    public $css = [
        'css/bootstrap-theme.min.css',
        'css/bootstrap.min.css',
        'css/style.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/jquery.min.js',
        'js/npm.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
