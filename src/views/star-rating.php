<div class="star-rating" id="<?= $id; ?>">
    <input type="text" name="<?= $name; ?>" value="<?= $value; ?>" <?= ($required ? "required" : ""); ?>>
    <?php
        for($i = 1; $i <= $stars; $i++) {
            echo "<span data-index=\"$i\" data-caption=\"".$starCaptions[$i]."\" class=\"isr-star-empty";
            if($value >= $i)
                echo " active";
            if(!$disabled)
                echo " star-active";
            echo "\"></span>";
        }
        if($starCaptions) {
            $value = $value ?: 0;
            ?><span class="star-caption caption-<?= $value; ?>"><?= $starCaptions[$value]; ?></span><?
        }
    ?>
</div>
