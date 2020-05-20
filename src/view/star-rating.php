<?php

use zorinpavel\StarRatingWidget\StarRatingAsset;

StarRatingAsset::register($this);

?>

<div class="star-rating">
    <input type="text" name="<?= $name; ?>" value="<?= $value; ?>" <?= ($required ? "required" : ""); ?>>
    <!--    <span class="star-clear"></span>-->
    <?php
    for($i = 1; $i <= $options['stars']; $i++) {
        echo "<span data-index=\"$i\" data-caption=\"".$options['starCaptions'][$i]."\" class=\"isr-star-empty";
        if($value >= $i)
            echo " active";
        if($active)
            echo " star-one-click";
        echo "\"></span>";
    }
    ?>
    <? if($starCaptions) { $value = $value ?: 0; ?>
        <span class="star-caption caption-<?= $value; ?>"><?= $options['starCaptions'][$value]; ?></span>
    <? } ?>

</div>
