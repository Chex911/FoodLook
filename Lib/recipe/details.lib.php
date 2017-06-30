<?php
require_once dirname(__FILE__).'/../../Lib/search.lib.php'; 
?>
<div>
<div class="recipe-details">
    <?php
        $r = new Recipe();
        $r -> name = $_GET['recipe'];
        $recipe = $r -> getObject();
        $image = $recipe -> getIMG();
        $id = $recipe -> id;
        $ingredients_array = $r -> getIngredients();
        
        echo '<h2 class="recipe-details-name">'.$r->name.'</h2>';
        echo '<img class="recipe-details-image" src="'.$image->path.'">';
        $author = $recipe -> getAuthor();
        echo '<span class="recipe-details-author">Author: '.$author.'</span>';
        
        echo '<br>';
        echo '<h3 class="recipe-datails-caption">Short description</h3>';
        echo '<p class="recipe-details-short-description">'.$recipe->short_description.'</p>';
        echo '<h3 class="recipe-datails-caption">description</h3>';
        echo '<p class="recipe-details-description">'.$recipe->description.'</p>';
        
        if(isset($_SESSION['login'])){
            $temp=new User();
            $temp->login=$_SESSION['login'];
            $temp=$temp->contains($id);
            
            if($temp==FALSE){   
                echo '<div id="'.$id.'%'.$_SESSION['login'].'" class="checkbox heart" >';
            }
            if($temp==TRUE){
                echo '<div id="'.$id.'%'.$_SESSION['login'].'" class="checkbox heart is-checked" >';
            }
            echo '</div>';
        }
        
        
         
    ?>
    
</div>
<div class="details-ingredients">
    <?php 
        echo '<h2>Ingredients:</h2>';
    
        echo '<ul class="recipe-details-ingredients">';
        foreach($ingredients_array as $ingredient){
            echo '<li>'.$ingredient.'</li>';
        }        
        echo '</ul>';
    ?>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/favorites.js" type="text/javascript"></script>