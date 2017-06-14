<?php
class StyleController { 
    public static function load_style(){
        
          if(isset($_GET['page'])){
              if($_GET['page'] != 'cockpit'){
                   echo '<link href="style/nav-bar.css" rel="stylesheet" type="text/css"/>';
                   echo '<link rel="stylesheet" href="style/style.css">';
              }
          }
        if(isset($_GET['page'])){
            switch($_GET['page']){
                case 'user/login':
                    echo '<link href="style/log_reg.css" rel="stylesheet" type="text/css"/>';
                    break;

                case 'user/registration':
                    echo '<link href="style/log_reg.css" rel="stylesheet" type="text/css"/>';
                    break;

                case 'guides':
                    echo '<link href="style/guides.css" rel="stylesheet" type="text/css"/>';
                    break;
                case 'search/results':
                    echo '<link href="style/results.css" rel="stylesheet" type="text/css"/>';
                    echo '<link href="style/favorite.css" rel="stylesheet" type="text/css"/>';
                    break;
                
                case 'recipe/details':
                    echo '<link href="style/details.css" rel="stylesheet" type="text/css"/>';
                    break;
                
                case 'cockpit':
                    echo '<link href="style/cockpit.css" rel="stylesheet" type="text/css"/>';
                    break;
                
                case 'recipe/add_recipe':
                    echo '<link href="style/recipe_form.css" rel="stylesheet" type="text/css"/>';
            }
        }
    }
}
