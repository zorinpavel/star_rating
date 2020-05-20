# A Yii2 widget

A Yii2 widget for the simple star-rating plugin with fractional rating support

### How does it work
```
use zorinpavel\StarRatingWidget;

echo StarRatingWidget::widget([
    'id' => 'feedback-id',
    'name' => 'feedback',
    'value' => $model->feedback,
]);
```

