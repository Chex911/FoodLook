<?php
require_once dirname(__FILE__).'/../../Lib/search.lib.php'; 
require_once dirname(__FILE__).'/../../Controllers/MainController.php';
$category_array = MainController::retrive_categories();
 foreach ($category_array as $result)
 {
    $img = Image::rand_image($result);
    $category_name = $result -> name;
    for($i=0;$i<=4;$i++)
    {
        if($i>count($img))
        $img[]= 'img/recipe/recipe_img/bbq.jpg';
    }
    echo   '<article class="category-list">
            <a class="caption" href="#">'.$category_name.'</a>';
    echo    '<img class="category-img" id="img-01" src="'.$img[0].'" alt=""/>
            <img class="category-img" id="img-02" src="'.$img[1].'" alt=""/>
            <img class="category-img" id="img-03" src="'.$img[2].'" alt=""/>
            <img class="category-img" id="img-04" src="'.$img[3].'" alt=""/>';
    
    echo    '</article>';
 }
 
