<?php
require_once dirname(__FILE__).'/../../BL/Ingredient.php';

?>
<select id="ingredient-selected-input" name="ingredient-selected-admin" form="ingredient-admin-validation" size="5" onchange="fillInput(this.value)" style="width: 200px">
    <?php 
        $array = Ingredient::getNotValid();

        foreach ($array as $ingredient){
           echo '<option value="'.$ingredient->name.'">'.$ingredient->name.'</option>'; 
        }
    ?>
</select>
<form method="post" id="ingredient-admin-validation">
    <div>
        <label class="ingredient-edit-label">Ingredient validation:</label>
        <div class="ingredient-edit-slide" style="display: none">
            <input class="admin-input" id="ingredient-edit-input" type="text" name="recipe-name-user"/>
        </div>
    </div>
    <button class="delete-btn" id="ingredient-delete-btn" type="submit" value="Delete" name="delete-ingredient-admin"/>Delete</button>
    <button class="accept-btn" id="ingredient-accept-btn" type="submit" value="Accept" name="accept-ingredient-admin"/>Accept</button>
    <button class="edit-btn" id="ingredient-edit-btn" type="button" name="edit-ingredient-admin">Edit</button>
</form>

<script type="text/javascript" >
    $("#ingredient-edit-btn").click(function() {
        $(".ingredient-edit-slide").slideToggle();
    });

    function fillInput(index)
    {
       $('#ingredient-edit-input').val(index);
    }
 </script>

