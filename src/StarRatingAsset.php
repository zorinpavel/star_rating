<?php

namespace zorinpavel\star_rating;

use yii\web\AssetBundle;


class StarRatingAsset extends AssetBundle {

    public $sourcePath = __DIR__;

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
//        $this->setSourcePath('@vendor/zorinpavel/star_rating');

        parent::init();
    }

}
