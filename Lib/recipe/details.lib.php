<?php
require_once dirname(__FILE__).'/../../Lib/search.lib.php'; 
?>

<div class="recipe-details">
    <?php
        $r = new Recipe();
        $r -> name = $_GET['recipe'];
        $recipe = $r -> getObject();
        $image = $r -> getIMG();
        $ingredients_array = $r -> getIngredients();
        
        echo '<h2 class="recipe-details-name">'.$r->name.'</h2>';
        echo '<img class="recipe-details-image" src="'.$image->path.'">';
        
        echo '<ul class="recipe-details-ingredients">';
        foreach($ingredients_array as $ingredient){
            echo '<li>'.$ingredient.'</li>';
        }        
        echo '</ul>';
        echo '<br>';
        echo '<p class="recipe-details-description">'.$recipe->description.'</p>'
    ?>
    
</div>
