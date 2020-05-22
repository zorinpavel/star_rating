# A Yii2 widget

[![GitHub license](https://img.shields.io/github/license/zorinpavel/yii2-star-rating.svg)](https://github.com/zorinpavel/yii2-star-rating/master/LICENSE)
[![GitHub Release](https://img.shields.io/github/release/zorinpavel/yii2-star-rating.svg?style=flat)]()  

A Yii2 widget for the simple star-rating plugin with fractional rating support

### How does it work
```
composer require zorinpavel/yii2-star-rating
```

```
use zorinpavel\StarRating\StarRatingWidget;

echo StarRatingWidget::widget([
    'id' => 'feedback-id',
    // name for the input field
    'name' => 'feedback',
    'value' => false,
    // how many stars do you want
    'stars' => 5,
    // switch off user interaction
    'disabled' => false,
    // input field will be with required attribute
    'required' => true,
    // you can specify captions for each star
    'starCaptions' => [
        0 => 'nothing',
        1 => 'bad',
        2 => 'sad',
        3 => 'ok',
        4 => 'good',
        5 => 'very good',
    ],
]);
```

