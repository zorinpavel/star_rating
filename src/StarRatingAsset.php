<?php

namespace zorinpavel\StarRating;

use yii\web\AssetBundle;


class StarRatingAsset extends AssetBundle {

    public $sourcePath = '@vendor/zorinpavel/yii2-star-rating/src';

    public $css = [
        'css/styles.css?v=xxx'
    ];

    public $js = [
        'js/scripts.js?v=xxx'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init() {

        parent::init();
    }

}
