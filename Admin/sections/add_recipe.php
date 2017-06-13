<script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

<?php
//    require_once dirname(__FILE__).'/../../Controllers/AdminController.php';
//
//    AdminController::process();
?>
<form method="post" id="add-recipe">
    <h1>new recipe</h1>
    <div>
        <label>Name</label><br>
        <input class="recipe-name-input" type="text" name="recipe-name" required autofocus/>
    </div>
    <label>Description</label><br>
    <textarea name="recipe-description" form="add-recipe" style="width: 400px; height: 200px;">
            
    </textarea>
    <div>
        <label>Ingredients</label><br>
        <input class="ingredients-input" type="text" name="recipe-ingredients" required/>
    </div>
    <div class="recipe-add">
        <input class="recipe-add" type="submit" value="Add" name="add-recipe-admin"/>
    </div>
</form>