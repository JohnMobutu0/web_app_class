<?php

session_start();

include ("connection.php");
include ("function.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //read to database

        $query = "select * from userss where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo '<script> alert("wrong username or password!") </script>';
    } else {
        echo '<script> alert("wrong username or password!") </script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login_style.css" />


    <title>Login</title>
</head>

<body>



    <div class="box">

        <form method="post">
            <h1>login</h1>

            <div class="input-box">
                <input type="text" name="user_name">
            </div>
            <div class="input-box">
                <input type="password" name="password">
            </div>
            <div>
                <input type="submit" value="login" class="btn">
            </div>
            <div class="register-link">
                <p>Don't have an account?<a href="signup.php">Register </a></p>
            </div>

        </form>
    </div>

</body>

</html>
