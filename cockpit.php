<?php
    session_start();
    //require_once 'Controllers/MainController.php';
    //MainController::process();
    
    require_once dirname(__FILE__).'/Controllers/AdminController.php';

    AdminController::process(); 
?>

<!DOCTYPE html>
<html>
    <?php
        require_once dirname(__FILE__).'/Lib/head.lib.php';
    ?>
    <body>
    <?php
        if(isset($_GET['page']) && $_GET['page'] == 'cockpit'){
            if(isset($_SESSION['login'])){
                if($_SESSION['login'] == 'admin'){
                    require_once dirname(__FILE__).'/Lib/header.lib.php';
                    echo '<h1 id="welcome">Welcome in management center</h1>';
                    require_once dirname(__FILE__).'/Admin/cockpit_body.admin.php';
                    //require_once dirname(__FILE__).'/Lib/footer.lib.php';
                }
            }else{
                echo 'Access denied';
            }
        }
    ?>
    </body>
</html>    

