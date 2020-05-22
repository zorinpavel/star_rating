<?php

use yii\web\View;


$script = <<< JS
    $(document).ready(() => {
        starRatingScript('$id');
    });
JS;

$this->registerJs($script, View::POS_LOAD);

?>


<div class="star-rating" id="<?= $id; ?>">
    <input type="text" name="<?= $name; ?>" value="<?= $value; ?>" <?= ($required ? "required" : ""); ?>>
    <?php
        for($i = 1; $i <= $stars; $i++) {
            echo "<span data-index=\"$i\"";
            if($starCaptions)
                echo " data-caption=\"".$starCaptions[$i]."\"";
            echo " class=\"isr-star-empty";
            if($value >= $i)
                echo " active";
            if(!$disabled)
                echo " star-active";
            echo "\"></span>";
        }
        if($starCaptions) {
            ?><span class="star-caption caption-<?= $value; ?>"><?= $starCaptions[$value]; ?></span><?
        }
    ?>
</div>
