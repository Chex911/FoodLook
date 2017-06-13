<header>
    <a href="index.php">
        <img src="img/logo.png">
        <h1>Food Look</h1>
        <h2>It's all about food</h2>
    </a>
    <?php
        if(isset($_SESSION['login'])){
            if($_SESSION['login'] == 'admin'){
             //echo '<a href="index.php?page=home"><div class="admin-forwarding">Return to website</div></a>';
             echo '<a href="cockpit.php?page=cockpit"><div class="admin-forwarding">Management center</div></a>';
        }
      }
    ?>
</header>