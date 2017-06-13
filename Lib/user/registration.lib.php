<div class="log-reg-wrapp">
    <?php
        require_once dirname(__FILE__).'/../../Controllers/MainController.php';
        
        MainController::process();
    ?>
    
    <a class="login-link" href="index.php?page=user/login">Sign In</a>
    <a class="register-link" href="index.php?page=user/registration">Register</a>
    
    <form method="post">
        <div>
            <label>login</label><br>
            <input class="login-input" type="text" name="login" required autofocus/>
        </div>
        <div>
            <label>password</label><br>
            <input class="login-input" type="password" name="password" required/>
        </div>
        <div>
            <label>e-mail</label><br>
            <input class="login-input" type="email" name="email" required/>
        </div>
        <div class="row-form-log-reg">
            <input class="login-input" type="submit" value="Register" name="create-user"/>
        </div>
    </form>
</div>
