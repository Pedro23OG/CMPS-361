<?php
    //require_once("db.php");

    $servername = "127.0.0.1";
    $username = "root";
    $password = "Pedro2001";
    $database = "mysupercarlist";

    //Create Connection
    $conn = new mysqli($servername, $username, $password, $database);

    //Validate Connection
    if($conn->connect_error){
        die("Connection Invalid: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO styles (cat_id,style_name)
            VALUES(12,'LateNitePumpkin')";

    if($conn->query($sql)=== TRUE){
        echo "Successfully Added a new style";
    } else {
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>