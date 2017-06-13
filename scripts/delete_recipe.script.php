<?php
require_once dirname(__FILE__).'/../BL/Recipe.php';
require_once dirname(__FILE__).'/../BL/Image.php';
require_once dirname(__FILE__).'/../BL/Recipe_has_ingredient.php';
require_once dirname(__FILE__).'/../BL/Recipe_has_ingredient.php';
if(isset($_POST['object_id'], $_POST['object_name'])){
    $object_id = $_POST['object_id'];
    $object_name = $_POST['object_name'];
    
    $to_delete_recipe = new Recipe();
    $to_delete_recipe -> name = $object_name;
    
    $to_delete_image = $to_delete_recipe -> getIMG();
    $path = $to_delete_image -> getPath();

    
    $to_delete_ingredient_conn = new Recipe_has_ingredient();
    $to_delete_ingredient_conn -> recipe_id = $object_id;
    
    $to_delete_image_conn = new Recipe_has_image();
    $to_delete_image_conn -> recipe_id = $object_id;
    
    
    $result_ingredient_conn = $to_delete_ingredient_conn -> delete();
    $result_image_conn = $to_delete_image_conn ->delete();
    $result_recipe = $to_delete_recipe -> delete();
    $result_image = $to_delete_image ->delete();

    unlink($path);
}
