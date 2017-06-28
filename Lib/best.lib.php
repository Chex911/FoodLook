<?php
require_once dirname(__FILE__).'/../Controllers/MainController.php';

$top_array = MainController::getTopThree();

?>

<section class="best">
    <div class="best-description">
        <h2>Best of the week</h2>
    </div>
    <?php
    if(count($top_array) == 3){
        $counter = 0;
        foreach($top_array as $object){
            $image = $object -> getIMG(); 
            $caption = $object -> name;
            
        echo    '<a href="index.php?page=recipe/details&recipe='.$caption.'"><div class="best-square" id="best-'.$counter.'" style="background-image: url('.$image->path.');">
                    <span>'.$caption.'</span>
                </div></a>';
        
            $counter++;
            if($counter > 2){
                break;
            }
        }
     }
    ?>
</section>

<!--<div class="best-square" style="background-image: url('.$.');">
    <span>Roast Chicken</span>
</div>

<div class="best-square" style="background-image: url(img/asian_bulion.png);">
    <span>Asian Bouillon</span>
</div>
<div class="best-square" style="background-image: url(img/vegan_omlet.png);">
    <span>Vegan Omlet</span>
</div>-->