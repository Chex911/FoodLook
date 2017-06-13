<?php
    session_start();
    require_once dirname(__FILE__).'/Controllers/MainController.php';
    MainController::process();
?>
<!DOCTYPE html>
<html>
    <?php
        require_once dirname(__FILE__).'/Lib/head.lib.php'; 
    ?>
    <body>
        <?php
            require_once dirname(__FILE__).'/Lib/left_nav.lib.php';
        ?>
        <div class="site-wrap">
            <?php
                require_once dirname(__FILE__).'/Lib/header.lib.php';
                       
                if(isset($_GET['page'])){
                    $file = $_GET['page'];
                    $path=dirname(__FILE__).'/Lib/'.$file.'.lib.php';
                    if(file_exists($path)){
                        require_once $path;
                    }else{
                        require_once dirname(__FILE__).'/Lib/home.lib.php';
                    }
                }else{
                    require_once dirname(__FILE__).'/Lib/home.lib.php';
                }
                require_once dirname(__FILE__).'/Lib/footer.lib.php';
            ?>
        </div>
    </body>
</html>