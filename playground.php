<?php
require_once 'BL/Ingredient.php';
require_once 'BL/Recipe.php';
require_once 'BL/Recipe_has_ingredient.php';
require_once 'BL/Image.php';
require_once 'BL/Recipe_has_image.php';
require_once 'DataAbstraction/DB.php';

//echo 'Hello World!';
//$array = array();
//$array2 = array();
//
$array=['eggs','tomato','milk','sugar','yoghurt','butter','flour','oil','rice',
        'cheese','chips','cucumber','onion','potato'];

$array2=[
    'Tajin','Mosli','Brick','Couscous','Tunisian soup','Dwida','Kafteji'
];

//Tajin .potatos, .cheese, .parsley, .eggs, .salt, .corcuma.
//Mosli .Fish or chiken, .salt, .piment, .corcuma, 
//Brick .potatos, .tuna or meat, .parsley, .onion, .cheese, .salt, .corcuma]
//Couscous : .couscous, ,chiken or meat, .onion, vegetables, .peper, corcuma, piment, potatos,olive oil, chilli
//Tunisian soup pasta, chilli,garlek, meat, Parsley, concentrated tomate.
//Dwida pasta, pimetn, chilli, salt, oil, tomato, onion, piment, garlek, meat,vegetables.

$array3=[
    'parsley','salt','courcuma','fish','piment','tuna','couscous','chicken','onion',
    'peper','chilli','pasta','garlik','concentrated tomate',
];
//
//$ingredients_array = array();
//$ingredients_array = [
//    'parsley','salt','garlik'
//];


//$recipe = new Recipe();
//$recipe -> name = 'TEST2';
//$recipe -> create();
//$recipe -> addIngredients($ingredients_array);
//$k = $recipe ->getIngredients();
//echo '<pre>';
//print_r($k);
//echo '</pre>';


//$recipe ->getID();
//
//



//$recipe_has_ingredient = new Recipe_has_ingredient();
//$r_id = 5;
//$i_id = 9;
//
//$recipe_has_ingredient -> recipe_id = $r_id;
//$recipe_has_ingredient -> ingredient_id = $i_id;
//
//$recipe_has_ingredient ->create();

//$a = Ingredient::retriveAll();
//echo '</br>';
//foreach($a as $result){
//    echo 'ID: '.$result->id.' '.$result->name;
//    echo '</br>';
//}
//        
        
//echo '<pre>';
//print_r($a = Ingredient::retriveAll());
//echo '</pre>';

$r = new Ingredient();



foreach ($array3 as $result){
    $r -> name = $result;
    $r ->create();
}
 
//$db = DB::getDB();
// $nr = 0;
// 
//$recipe = new Recipe;
//
//foreach($array2 as $result){
//    $recipe -> name = $result;
//    $recipe ->create();
//} 
 
//for($tmp=7;$tmp>0;$tmp--){
//    $recipe_name = "Recipe number".$nr;
//    echo $query = "INSERT INTO recipe (name) VALUES(".$recipe_name.")";
//    echo '</br>';
//    $nr ++;   
//}

//echo $query;
//$res = $db -> query($query);
?>

<!--<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Demo</title>
      <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
    </head>
    <body> 
        <form action='' method='post'>
            <p><label>Country:</label><input type='text' name='country' value='' class='auto'></p>
        </form>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
        
        <script type="text/javascript">       
        $(function(){
            //autocomplete
            $(".auto").autocomplete({
                    source: "search.php",
                    minLength: 1
            });
        });
        </script>
    </body>
</html>-->

<?php
//    $image = new Image();
//    $image -> name = 'namsadss';
//    $image -> path = 'test/path/..';
//    $image -> size = 1234567;
//    
//    if($image->create()){
//        echo 'Success create!';
//        echo '</br>';
//        echo '</br>';
//        echo '<pre>';
//        print_r($image);
//        echo '</pre';
//        echo '</br>';
//    }else{
//        echo 'Create error!';
//    }

//$r_h_i = new Recipe_has_image();
//$r_h_i -> recipe_id = 1;
//$r_h_i -> image_id = 1;
//if($r_h_i ->create()){
//    echo 'Success create!';
//    echo '</br>';
//    echo '</br>';
//    echo '<pre>';
//    print_r($r_h_i);
//    echo '</pre';
//    echo '</br>';
//}else{
//    echo 'Create error!';
//}

//$db = DB::getDB();
//$query = "DELETE FROM `recipe_has_ingredient`";       
//$res = $db -> query($query);
//print_r($res);
//echo '</br>';
//$query = "DELETE FROM `recipe_has_image`";  
//$res = $db -> query($query);
//print_r($res);
//echo '</br>';
//$query = "DELETE FROM `recipe`";  
//$res = $db -> query($query);
//print_r($res);
//echo '</br>';
//$query = "DELETE FROM `image`";  
//$res = $db -> query($query);
//print_r($res);
//echo '</br>';
//$query = "ALTER TABLE `recipe_has_image` auto_increment = 1";  
//$res = $db -> query($query);
//print_r($res);
//echo '</br>';
//$query = "ALTER TABLE `recipe_has_ingredient` auto_increment = 1";  
//$res = $db -> query($query);
//print_r($res);
//echo '</br>';
//$query = "ALTER TABLE `recipe` auto_increment = 1";  
//$res = $db -> query($query);
//print_r($res);
//echo '</br>';
//$query = "ALTER TABLE `image` auto_increment = 1";  
//$res = $db -> query($query);
//print_r($res);
//echo '</br>';
?>


<!--<div class="record" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">
<button id="<?php $get=8; echo $get; ?>" class="delbutton">Delete</button>
This is some text in the div.
<p>This is a paragraph in the div.</p>
<p>This is another paragraph in the div.</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" >
    $(function() {
        $(".delbutton").click(function() {
            var del_id = $(this).attr("id");
            var info = 'id=' + del_id;
            if (confirm("Sure you want to delete this post? This cannot be undone later.")) {
                $.ajax({
                    type : "POST",
                    url : "delete_entry.php", //URL to the delete php script
                    data : info,
                    success : function() {
                    }
                });
                
                $(this).parents(".record").animate("fast").animate({
                    opacity : "hide"
                }, "slow");
            }
            return false;
        });
    });
 </script>  -->
