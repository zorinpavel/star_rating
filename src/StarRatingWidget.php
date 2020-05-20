<?php

namespace zorinpavel\StarRatingWidget;

use yii\base\Widget;


class StarRatingWidget extends Widget {

    public $name, $value;
    public $pluginOptions = array();

    public $starCaptions = true;
    public $active = true;
    public $required = false;

    public $pluginName = "StarRatingWidget";


    public function init() {

        if(!isset($this->pluginOptions['starCaptions']) || !is_array($this->pluginOptions['starCaptions'])) {
            $this->pluginOptions['starCaptions'] = [
                1 => 'Крайне неудовлетворительно',
                2 => 'Неудовлетворительно',
                3 => 'Удовлетворительно',
                4 => 'Хорошо',
                5 => 'Отлично',
            ];
        }

        if(!isset($this->pluginOptions['starCaptions'][0]))
            $this->pluginOptions['starCaptions'][0] = "Без рейтинга";

        if(!isset($this->pluginOptions['stars']))
            $this->pluginOptions['stars'] = 5;

        return parent::init();
    }


    public function run() {
        $this->registerAssets();

        return $this->render('star-rating', [
            'name' => $this->name,
            'value' => $this->value,
            'options' => $this->pluginOptions,
            'starCaptions' => $this->starCaptions,
            'active' => $this->active,
            'required' => $this->required,
        ]);
    }


    public function registerAssets() {
        $view = $this->getView();

        StarRatingAsset::register($view);
        $this->registerPlugin($this->pluginName);
    }

}
