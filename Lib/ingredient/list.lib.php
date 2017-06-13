<?php
require_once dirname(__FILE__).'/../../BL/Ingredient.php';

echo '<h1 class="retrive-list-h1">Current list</h1>';
echo '</br>';
$array = Ingredient::retriveAll();
echo '<ul class="retrive-ingredient-list">';
    foreach($array as $ingredient){
        echo '<li>'.$ingredient->name.'</li>'; 
    }
echo '</ul>';
