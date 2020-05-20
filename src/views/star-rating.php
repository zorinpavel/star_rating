<?php

use zorinpavel\StarRating\StarRatingAsset;

StarRatingAsset::register($this);

?>

<div class="star-rating">
    <input type="text" name="<?= $name; ?>" value="<?= $value; ?>" <?= ($required ? "required" : ""); ?> id="<?= $id; ?>">
    <?php
        for($i = 1; $i <= $stars; $i++) {
            echo "<span data-index=\"$i\" data-caption=\"".$starCaptions[$i]."\" class=\"isr-star-empty";
            if($value >= $i)
                echo " active";
            if($active)
                echo " star-active";
            echo "\"></span>";
        }
        if($starCaptions) {
            $value = $value ?: 0;
            ?><span class="star-caption caption-<?= $value; ?>"><?= $starCaptions[$value]; ?></span><?
        }
    ?>
</div>
