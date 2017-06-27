<ul class="navigation">

<?php
    if(isset($_SESSION['logged']) !== true){
        echo '<a href="index.php?page=user/registration">Registration</a>
              <a href="index.php?page=user/login">Login</a>';
    }else if(isset($_SESSION['logged']) === true){
        $tmp = $_SESSION['login'];
        echo '<span style="color: white">Welcome: '.$tmp.'</span>';
        echo '<a href="index.php?page=logout">Logout</a>';
    }
?>

    <li class="nav-item"><a href="index.php">Home</a></li>
    <?php 
        if(isset($_SESSION['logged']) == true){
            echo '<li class="nav-item"><a href="index.php?page=recipe/add_recipe">Add recipe</a></li>';
            echo '<li class="nav-item"><a href="index.php?page=recipe/favorites">Favorites</a></li>';
        }
    ?>
    <li class="nav-item"><a href="index.php?page=category/category">Category</a></li>
    <li class="nav-item"><a href="#">Top of week</a></li>
    <li class="nav-item"><a href="#">Random recipe</a></li>
    <li class="nav-item"><a href="index.php?page=guides">Guides</a></li>
</ul>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>