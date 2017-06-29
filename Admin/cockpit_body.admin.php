<span class="option">User
<img class="plus" src="svg/plus.svg">
</span>
<div class="admin-square" >
    <form method="post" enctype="multipart/form-data" id="choose-user-form">
    <select class="choose-user" name="user" size="5" onChange="showNext(this.selectedIndex)">
        <?php 
                $array = User::retriveAll();

                foreach ($array as $object){
                   echo '<option value="'.$object->id.'">'.$object->login.'</option>'; 
                }
                echo '</select>';
                $try='<script>document.writeln(p1);</script>';
                if(isset($_POST['user']))
                {
                    echo'<form method="post" enctype="multipart/form-data" id="choose-user-form" >';
                    echo ' <input class="recipe-name-input" type="text" name="id-user" required readonly value="'.$try.'"/>
                            <input class="recipe-name-input" type="text" name="login-user" required />
                             <input class="recipe-name-input" type="text" name="password user" required />
                              <input class="recipe-name-input" type="text" name="email-user" required />
                    <input class="choose-user" type="submit" value="Choose" name="add-recipe-user"/>';
                     echo'</form>';
                }
        ?>
        <input class="choose-user" type="submit" value="Choose" name="add-recipe-user"/>
        </form>
    
</div>
<span class="option">Recipe
<img class="plus" src="svg/plus.svg">
</span>
<div class="admin-square" style="display: none">
    //<?php require_once 'sections/add_image.php';?>
</div>

<span class="option">Ingredient
<img class="plus" src="svg/plus.svg">
</span>
<div class="admin-square" style="display: none">
    <h1>Hello World3!</h1>
</div>

<span class="option">Image
<img class="plus" src="svg/plus.svg">
</span>
<div class="admin-square" style="display: none">
    <h1>Hello World4!</h1>
</div>

<span class="option">Category
<img class="plus" src="svg/plus.svg">
</span>
<div class="admin-square" style="display: none">
    <h1>Hello World5!</h1>
</div>
<script type="text/javascript" >
    
 </script>
 <?php
 $test= process();
  function process(){
  if(isset($_POST['user']))
  {
      return 'elo';
  }
  else 
      return false;
 }      
 ?>