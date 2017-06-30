<?php
    require_once dirname(__FILE__).'/../Controllers/MainController.php';
    $error = MainController::cockpit_check();
?>

<div class="admin-square">
    <?php require_once dirname(__FILE__).'/sections/ingredient_valid.lib.php';?>
</div>
<div class="admin-square" >
<form method="post" enctype="multipart/form-data" id="choose-user-form">
    <select class="choose-user" name="user" size="5" onChange="showNext(this.value)">
        <?php 
            $array = User::retriveAll();

            foreach ($array as $object){
               echo '<option value="'.$object->id.'">'.$object->login.'</option>'; 
            }
    echo '</select>';

        echo'<form method="post" enctype="multipart/form-data" id="user-form" >';
        echo ' <input type="text" id="id-user" name="id-user" required readonly value=""/>
               <input type="text" id="login-user" name="login-user" required value="" />
               <input type="text" id="password-user" name="password-user" required value=""/>
               <input type="text" id="email-user" name="email-user" required value=""/>
               <input type="submit" value="Edit" name="edit-recipe-user"/>
               <input type="submit" value="Delete" name="delete-recipe-user"/>';
         echo'</form>';
        ?>
</form>
    
</div>
<script type="text/javascript" >
    function showNext(index)
    {
        $.ajax({
            type : "POST",
            url : "Admin/sections/drawElements.php",
            data : {user: index},
            success : function(obj){

                var ans=JSON.parse(obj);
                console.log(ans.id);  
                $('#id-user').val(ans.id);
                $('#login-user').val(ans.login);
                $('#password-user').val(ans.password);
                $('#email-user').val(ans.email);

            }
        });  
    }
 </script>
