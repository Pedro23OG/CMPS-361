<!DOCTYPE html>
<html>
    <head>
        <title>Login Authentication</title>
        <link rel="stylesheet"  type="text/css" href="login.css">
    </head>
<body>
    <main>
        <form name="frmUser" method="post" action="">
            <div class="message text-center"><?php if($message!="") { echo $message; } ?></div>

                <h1 class="text-center">Login</h1>

                <div>
                    <div class="row">
                        <label> Username </label> <input type="text" name="userName"
                            class="full-width" " required>
                </div>
                    <div class="row">
                        <label>Password</label> <input type="password"
                            name="password" class="full-width" required>
                </div>
                    <div class="row">
                        <input type="submit" name="submit" value="Submit"
                            class="full-width ">
                </div>
            </div>
        </form>

        <?php
        $message = "";
        if (count($_POST) > 0) {
            $isSuccess = 0;
            $conn = mysqli_connect("localhost", "root", "", "user_authentication");
            $userName = $_POST['userName'];
            $sql = "SELECT * FROM users WHERE userName= ?";
            $statement = $conn->prepare($sql);
            $statement->bind_param('s', $userName);
            $statement->execute();
            $result = $statement->get_result();
            while ($row = $result->fetch_assoc()) {
                if (! empty($row)) {
                    $hashedPassword = $row["password"];
                    if (password_verify($_POST["password"], $hashedPassword)) {
                        $isSuccess = 1;
                    }
                }
            }
            if ($isSuccess == 0) {
                $message = "Invalid Username or Password!";
            } else {
                header("Location:  ./success-message.php");
            }
        }
        ?>

    </main>
</body>
</html>