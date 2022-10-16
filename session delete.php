<?php

    session_start();

    $_SESSION['user'] = 'Phillip V. Matthews';
?>
<html>
<body>
    <?php

        unset($_SESSION['user']);
        //session_destroy();

        if(isset($_SESSION['user']))
        {
            echo "Session 'user' still exist.";
        }
        else
        {
            echo "Session 'user' is already deleted.";
        }
    ?>
</body>
</html>