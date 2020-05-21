<?php

namespace zorinpavel\StarRating;

use yii\base\Widget;


class StarRatingWidget extends Widget {

    public $name, $value, $stars;

    public $starCaptions;
    public $disabled;
    public $required;

    public function init() {
        if(!isset($this->starCaptions) || !is_array($this->starCaptions)) {
            $this->starCaptions = [
                0 => 'Без рейтинга',
                1 => 'Крайне неудовлетворительно',
                2 => 'Неудовлетворительно',
                3 => 'Удовлетворительно',
                4 => 'Хорошо',
                5 => 'Отлично',
            ];
        }

        if(!isset($this->stars))
            $this->stars = 5;

        return parent::init();
    }


    public function run() {
        $this->registerAssets();

        return $this->render('star-rating', [
            'name' => $this->name,
            'value' => $this->value,
            'stars' => $this->stars,
            'starCaptions' => $this->starCaptions,
            'disabled' => $this->disabled,
            'required' => $this->required,
        ]);
    }


    protected function registerAssets() {
        $view = $this->getView();

        StarRatingAsset::register($view);
    }

}
