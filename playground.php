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
//$array=['eggs','tomato','milk','sugar','yoghurt','butter','flour','oil','rice',
//        'cheese','chips','cucumber','onion','potato'];
//
//$array2=[
//    'Tajin','Mosli','Brick','Couscous','Tunisian soup','Dwida','Kafteji'
//];

//Tajin .potatos, .cheese, .parsley, .eggs, .salt, .corcuma.
//Mosli .Fish or chiken, .salt, .piment, .corcuma, 
//Brick .potatos, .tuna or meat, .parsley, .onion, .cheese, .salt, .corcuma]
//Couscous : .couscous, ,chiken or meat, .onion, vegetables, .peper, corcuma, piment, potatos,olive oil, chilli
//Tunisian soup pasta, chilli,garlek, meat, Parsley, concentrated tomate.
//Dwida pasta, pimetn, chilli, salt, oil, tomato, onion, piment, garlek, meat,vegetables.

//$array3=[
//    'parsley','salt','courcuma','fish','piment','tuna','couscous','chicken','onion',
//    'peper','chilli','pasta','garlik','concentrated tomate',
//];
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

//$r = new Ingredient();
//
//
//
//foreach ($array3 as $result){
//    $r -> name = $result;
//    $r ->create();
//}
 
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
<button id="" class="delbutton">Delete</button>
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

<!--<script src="js/favourite.js" type="text/javascript"></script>-->

<style>
.clear {
	clear:both;
}
.mrgn-50 {
	margin-top:50px}

a { color:#FFF; text-decoration:none}
a:hover { color:#09F; text-decoration:none}
h1 {
	margin-top:50px;
	color:#FFF;
	font-size:3em; 
	text-align:center;}


.checkbox {
  float: left;
  width: 80px;
  height: 80px;
  cursor: pointer;
  -moz-border-radius: 80px;
  -webkit-border-radius: 80px;
  border-radius: 80px;
  display: block;
  background-color: rgba(0, 0, 0, 0.25);
  margin: 20px;
  -moz-transition: all 0.15s cubic-bezier(0.5, 0, 0, 1.5);
  -o-transition: all 0.15s cubic-bezier(0.5, 0, 0, 1.5);
  -webkit-transition: all 0.15s cubic-bezier(0.5, 0, 0, 1.5);
  transition: all 0.15s cubic-bezier(0.5, 0, 0, 1.5);
}
.checkbox:hover {
  background-color: rgba(0, 0, 0, 0.5);
}
.checkbox:hover:after {
  color: white;
}
.checkbox:after {
  line-height: 85px;
  font-family: "FontAwesome";
  display: block;
  content: "";
  color: rgba(255, 255, 255, 0.5);
  text-align: center;
  width: 100%;
  height: 100%;
  -moz-transform: scale(0.5);
  -ms-transform: scale(0.5);
  -webkit-transform: scale(0.5);
  transform: scale(0.5);
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  font-size: 54px;
  -moz-transition: all 0.15s cubic-bezier(0.5, 0, 0, 1.5), font-size 0.35s cubic-bezier(0.5, 0, 0, 3);
  -o-transition: all 0.15s cubic-bezier(0.5, 0, 0, 1.5), font-size 0.35s cubic-bezier(0.5, 0, 0, 3);
  -webkit-transition: all 0.15s cubic-bezier(0.5, 0, 0, 1.5), font-size 0.35s cubic-bezier(0.5, 0, 0, 3);
  transition: all 0.15s cubic-bezier(0.5, 0, 0, 1.5), font-size 0.35s cubic-bezier(0.5, 0, 0, 3);
}
.checkbox.is-checked:after {
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1);
  font-size: 44px;
  color: white;
}
.checkbox.is-checked:hover:after {
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}

.check:after {
  content: "\f00c";
  background-color: rgba(165, 194, 92, 0);
}
.check.is-checked:after {
  background-color: #a5c25c;
}

.heart:after {
  content: "\f004";
  background-color: rgba(241, 76, 56, 0);
}
.heart.is-checked:after {
  background-color: #f14c38;
}

.star:after {
  content: "\f005";
  background-color: rgba(255, 202, 37, 0);
}
.star.is-checked:after {
  background-color: #ffca25;
}

.email:after {
  content: "\f1fa";
  background-color: rgba(145, 61, 136, 0);
}
.email.is-checked:after {
  background-color: #913D88;
}

.bell:after {
  content: "\f0f3";
  background-color: rgba(244, 179, 80, 0);
}
.bell.is-checked:after {
  background-color: #F4B350;
}

.map:after {
  content: "\f041";
  background-color: rgba(68,108,179, 0);
}
.map.is-checked:after {
  background-color: #446CB3;
}

.wifi:after {
  content: "\f1eb";
  background-color: rgba(224, 130, 131, 0);
}
.wifi.is-checked:after {
  background-color: #E08283;
}
</style>

<span class="checkbox heart "></span>

<div class="clear"></div>


<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
   $('.checkbox').click(function(){
    $(this).toggleClass('is-checked');
    }); 
</script>