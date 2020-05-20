# A Yii2 widget

[![Latest Version](https://img.shields.io/github/release/zorinpavel/yii2-star-rating.svg?style=flat-square)](https://github.com/zorinpavel/yii2-star-rating/releases)

A Yii2 widget for the simple star-rating plugin with fractional rating support

### How does it work
```
composer require zorinpavel/yii2-star-rating
```

```
use zorinpavel\StarRating\StarRatingWidget;

echo StarRatingWidget::widget([
    'id' => 'feedback-id',
    'name' => 'feedback',
    'value' => $model->feedback,
]);
```

