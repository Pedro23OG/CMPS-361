<?php
    $cookie_name = "user";
    $cookie_value = "Phillip V. Matthews";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    setcookie($cookie_name, "", time() - (86400 * 30), "/");
?>
<html>
<body>

    <?php
        if(isset($_COOKIE['user']))
        {
            echo "Cookie 'user' still exist.";
        }
        else
        {
            echo "Cookie 'user' is already deleted.";
        }
    ?>
</body>
</html>