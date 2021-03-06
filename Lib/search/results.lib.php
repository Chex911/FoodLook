<?php
    require_once dirname(__FILE__).'/../../Controllers/MainController.php';
    require_once dirname(__FILE__).'/../../Lib/head.lib.php';
    require_once dirname(__FILE__).'/../../Lib/left_nav.lib.php';
    require_once dirname(__FILE__).'/../../Lib/search.lib.php'; 

    if(isset($_GET['page']) && !isset($_GET['category'])){
        $search_array = MainController::find_recipe();
        $size = count($search_array);
        $product_name = isset($_POST['product-name-search']) ? htmlspecialchars($_POST['product-name-search']) : "";
        echo '<span id="hint">Result(s) for "'.$product_name.'"</span>';
    }else if(isset($_GET['page']) && isset($_GET['category'])){
        $category_retrieve = $_GET['category'];
        $search_array = MainController::find_recipe();
    }
?>

<div class="results-area">
    <?php
        if(isset($search_array) && $search_array != FALSE){
            
            foreach ($search_array as $result){
                $recipe_name = $result -> name;
                $short_description = $result -> short_description;
                $id = $result -> getID();
                $short_description_len = strlen($short_description);
                $ingredients = $result -> getIngredients();
                
                $image = $result -> getIMG();
                $category= $result->getCategory();
                $path = isset($image -> path) ? $image->path : "img/recipe/recipe_img/default.jpg";
                
                if($ingredients){
                
                echo '<article class="result-square">';
                if(isset($_SESSION['login'])){
                    if($_SESSION['login'] == 'admin'){
                     echo '<button id="'.$id.'%'.$recipe_name.'" class="delbutton" onclick="">Delete</button>';
                     
                    }
                }
                
                echo '<img src="'.$path.'">'
                        . ' <div class="result-description">'
                        . '<h1>'.$recipe_name.'</h1>';
                echo '<span class="result-category">Category:'.$category->name.'</span>';

                echo '<p>'.$short_description = $short_description_len > 100 ? substr($short_description, 0, 110).'...' : $short_description;
                echo '</p>
                <h2 class="result-ingredients">Ingredients:</h2>';
                
                $limit = 6;
                $count = 0;
                $buffor = "";
                if($ingredients){
                    foreach ($ingredients as $ingredient){
    //                    echo '<a href="#"><span>'.$name = isset($ingredient) ? $ingredient.", " : '' .'</span></a>';
                        $buffor.=$ingredient.", ";
                        $count++;
                        if($count > $limit){
                            $count = 0;
                            break;
                        }
                    }
                }else{
                    $buffor .= "Recipe has no validated ingredients";
                }
                echo '<span class="result-ingredient-li">'.$buffor.'</span>';
                echo '</div>';
                
                
                
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
        
                echo '
                      <a href="index.php?page=recipe/details&recipe='.$recipe_name.'" class="click-for-more">click for more...</a>
                      </article>';
                }
            }
            
        }
    ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/favorites.js" type="text/javascript"></script>
<script type="text/javascript" >
    $(function() {
        $(".delbutton").click(function() {
            var del_id = $(this).attr("id");
            //var info = del_id;
            var object = del_id.split("%");
            var id = object[0];
            var name = object[1];
            if (confirm("Sure you want to delete this post? This cannot be undone later.")) {
                $.ajax({
                    type : "POST",
                    url : "scripts/delete_recipe.script.php",
                    data : {object_id: id, object_name: name},
                    success : function(){
                        console.log(id);
                        console.log(name);
                    }
                });
                
                $(this).parents(".result-square").animate("fast").animate({
                    opacity : "hide"
                }, "slow");
            }
            return false;
        });
    });
 </script>
