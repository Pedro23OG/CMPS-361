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
    
    $sql = "SELECT id, cat_id, style_name FROM styles WHERE cat_id = 11;
    $result = $conn->query($sql);

    if($result->num_rows > 0 {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " " . $row["cat_id"]. " " . $row["style_name"]. "<br>";

    }
   } else {
       echo "No Results";
   }
    $conn->close();
    ?>