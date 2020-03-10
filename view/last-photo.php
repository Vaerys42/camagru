<link rel="stylesheet" type="text/css" href="css/last-photo.css" />
<div class="photo-zone">
<?php 
    for ($i = 0; $i < 4; $i++){
        ?>
        <div class="photo-tab-line">
            <?php
                for ($j = 0; $j < 4; $j++){
                    ?>
                        <span class="photo-tab-case"><img class="photo-tab-case" src="photos/xayah.jpg"></span>
                    <?php
                }
            ?>
        </div>
        <?php
    }
?>
</div>