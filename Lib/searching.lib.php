<?php
require_once dirname(__FILE__).'/../BL/Recipe.php';


if(isset($_POST['find-product'])){
    if(isset($_GET['page']) == 'searching'){
        $name = htmlspecialchars($_POST['product-name-search']);
        $r = new Recipe();
        $r -> name = $name;
        $r ->retriveByNamev2();
        
    }
}else{
    echo 'We have a problem :(';
}

