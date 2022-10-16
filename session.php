<?php

    session_start();

    $_SESSION["fname"] = "Phillip";
    $_SESSION["lname"] = "Matthews";
?>
<html>
<body>
    <?php
        echo "First Name: " . $_SESSION["fname"] . "<br>";
        echo "Last Name: " . $_SESSION["lname"];
    ?>
</body>
</html>