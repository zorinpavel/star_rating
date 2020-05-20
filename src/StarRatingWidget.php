<?php

namespace zorinpavel\StarRating;

use yii\base\Widget;


class StarRatingWidget extends Widget {

    public $name, $value, $stars;

    public $starCaptions;
    public $disabled;
    public $required;


    public function init() {
        parent::init();

        // TODO как сюда передать параметры?
        if(!isset($this->starCaptions) || !is_array($this->starCaptions)) {
            $this->starCaptions = [
                1 => 'Крайне неудовлетворительно',
                2 => 'Неудовлетворительно',
                3 => 'Удовлетворительно',
                4 => 'Хорошо',
                5 => 'Отлично',
            ];
        }

        if(!isset($this->starCaptions[0]))
            $this->starCaptions[0] = "Без рейтинга";

        if(!isset($this->stars))
            $this->stars = 5;

        if(!isset($this->disabled))
            $this->disabled = false;

        if(!isset($this->required))
            $this->required = false;

        return true;
    }


    public function run() {
        $this->registerAssets();

        return $this->render('star-rating', [
            'name' => $this->name,
            'value' => $this->value,
            'stars' => $this->stars,
            'starCaptions' => $this->starCaptions,
            'active' => $this->disabled,
            'required' => $this->required,
        ]);
    }


    public function registerAssets() {
        $view = $this->getView();

        StarRatingAsset::register($view);
    }

}
