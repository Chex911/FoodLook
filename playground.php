<?php
require_once 'BL/Ingredient.php';
require_once 'BL/Recipe.php';
require_once 'BL/Recipe_has_ingredient.php';
require_once 'BL/Image.php';
require_once 'BL/Recipe_has_image.php';
require_once 'BL/Category.php';
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
//?>


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

<!--<style>
 
 .rate_widget {
    border:     1px solid #CCC;
    overflow:   visible;
    padding:    10px;
    position:   relative;
    width:      180px;
    height:     32px;
}
.ratings_stars {
    background: url('img/star_empty.png') no-repeat;
    float:      left;
    height:     28px;
    padding:    2px;
    width:      32px;
}
.ratings_vote {
    background: url('img/star_full.png') no-repeat;
}
.ratings_over {
    background: url('img/star_highlight.png') no-repeat;
}   
/*Total votes box, center widgets*/
.total_votes {
    background: #eaeaea;
    top: 58px;
    left: 0;
    padding: 5px;
    position:   absolute;  
}

.movie_choice {
    font: 10px verdana, sans-serif;
    margin: 0 auto 40px auto;
    width: 180px;
}
/**/

</style>
------------------HTML START------------------

<div class='movie_choice'>
    Rate: Raiders of the Lost Ark
    <div id="r1" class="rate_widget">
        <div class="star_1 ratings_stars"></div>
        <div class="star_2 ratings_stars"></div>
        <div class="star_3 ratings_stars"></div>
        <div class="star_4 ratings_stars"></div>
        <div class="star_5 ratings_stars"></div>
        <div class="total_votes">vote data</div>
    </div>
</div>
 
<div class='movie_choice'>
    Rate: The Hunt for Red October
    <div id="r2" class="rate_widget">
        <div class="star_1 ratings_stars"></div>
        <div class="star_2 ratings_stars"></div>
        <div class="star_3 ratings_stars"></div>
        <div class="star_4 ratings_stars"></div>
        <div class="star_5 ratings_stars"></div>
        <div class="total_votes">vote data</div>
    </div>
</div>

------------------HTML END--------------------



<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
 $('.ratings_stars').hover(
    // Handles the mouseover
    function() {
        $(this).prevAll().andSelf().addClass('ratings_over');
        $(this).nextAll().removeClass('ratings_vote'); 
    },
    // Handles the mouseout
    function() {
        $(this).prevAll().andSelf().removeClass('ratings_over');
        set_votes($(this).parent());
    }
);

/**********Get the information from the server*********/
$('.rate_widget').each(function(i) {
    var widget = this;
    var out_data = {
        widget_id : $(widget).attr('id'),
        fetch: 1
    };
    $.post(
        'ratings.php',
        out_data,
        function(INFO) {
            $(widget).data( 'fsr', INFO );
            //$('#one_of_your_widgets).data('fsr').widget_id;
            set_votes(widget);
        },
        'json'
    );
});


 function set_votes(widget) {
    var avg = $(widget).data('fsr').whole_avg;
    var votes = $(widget).data('fsr').number_votes;
    var exact = $(widget).data('fsr').dec_avg;

    $(widget).find('.star_' + avg).prevAll().andSelf().addClass('ratings_vote');
    $(widget).find('.star_' + avg).nextAll().removeClass('ratings_vote'); 
    $(widget).find('.total_votes').text( votes + ' votes recorded (' + exact + ' rating)' );
}

/***Click handler***/
$('.ratings_stars').bind('click', function() {
    var star = this;
    var widget = $(this).parent();

    var clicked_data = { //outgoing data
        clicked_on : $(star).attr('class'), //it should tell what vote is being given
        widget_id : widget.attr('id')
    };
    $.post(
        'ratings.php',
        clicked_data,
        function(INFO) {
            widget.data( 'fsr', INFO );
            set_votes(widget);
        },
        'json'
    ); 
}); 
</script>-->


	<link rel="stylesheet" type="text/css" href="src/jquery.tagsinput.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="src/jquery.tagsinput.js"></script>

	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />


	<script type="text/javascript">

		function onAddTag(tag) {
			alert("Added a tag: " + tag);
		}
		function onRemoveTag(tag) {
			alert("Removed a tag: " + tag);
		}

		function onChangeTag(input,tag) {
			alert("Changed a tag: " + tag);
		}

		$(function() {

			$('#tags_1').tagsInput({width:'auto'});
			$('#tags_2').tagsInput({
				width: 'auto',
				onChange: function(elem, elem_tags)
				{
					var languages = ['php','ruby','javascript'];
					$('.tag', elem_tags).each(function()
					{
						if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
							$(this).css('background-color', 'yellow');
					});
				}
			});
			$('#tags_3').tagsInput({
				width: 'auto',

				//autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
				autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
			});


// Uncomment this line to see the callback functions in action
//			$('input.tags').tagsInput({onAddTag:onAddTag,onRemoveTag:onRemoveTag,onChange: onChangeTag});

// Uncomment this line to see an input with no interface for adding new tags.
//			$('input.tags').tagsInput({interactive:false});
		});

	</script>
		<form>
			<p><label>Defaults:</label>
			<input id="tags_1" type="text" class="tags" value="foo,bar,baz,roffle" /></p>

			<p><label>Technologies: (Programming languages in yellow)</label>
			<input id="tags_2" type="text" class="tags" value="php,ios,javascript,ruby,android,kindle" /></p>

			<p><label>Autocomplete:</label>
			<input id='tags_3' type='text' class='tags'></p>

		</form>
