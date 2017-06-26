<!--<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>-->
<?php
    require_once dirname(__FILE__).'/../../Controllers/MainController.php';
    require_once dirname(__FILE__).'/../../BL/Category.php';
   
    $validation = MainController::recipe_process();
?>
<div class="add-recipe-wrapp"> 
    <h1>add your recipe below</h1>
    
    <form method="post" enctype="multipart/form-data" id="add-recipe-form">
        <div>
            <label>Name</label><br>
            <input class="recipe-name-input" type="text" name="recipe-name-user" required autofocus/>
        </div>
        <div>
            <label>Short description</label><br>
            <input class="recipe-name-input" type="text" name="short-description-input" required/>
        </div>
        <label>Description</label><br>
        <textarea name="recipe-description" form="add-recipe-form" style="width: 400px; height: 200px;"> </textarea>
        <div>
            <label>Ingredients</label><br>
            <input class="ingredients-input" type="text" name="recipe-ingredients-user" required/>
        </div>
        <div>
            <label>Category</label><br>
            <select name="category" form='add-recipe-form'>
                <?php 
                $array = Category::retriveAll();

                foreach ($array as $object){
                   echo '<option value="'.$object->id.'">'.$object->name.'</option>'; 
                }
                
                ?>
            </select>
        </div>
        <label>Select image to upload:</label>
        <input type="file" name="recipe-image-user" id="fileToUpload">
<!--        <input type="submit" value="Upload Image" name="add-recipe-image-user">-->       
        <div class="add-recipe-button">
            <input class="add-recipe-input" type="submit" value="Add" name="add-recipe-user"/>
        </div>
    </form>
    
    <?php
      require_once dirname(__FILE__).'/../../Controllers/ErrorController.php';
      ErrorController::validation($validation);
    ?>
</div>
