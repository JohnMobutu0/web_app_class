<?php

session_start();

include ("connection.php");
include ("function.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //save to database
        $user_id = random_num(20);
        $query = "insert into userss(user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;

    } else {
        echo "please enter some valid information!";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/signUp_style.css" />
    <title>Sign Up</title>
</head>

<body>
    <div class="box">

        <form method="post">
            <h1>Sign Up</h1>

            <div class="input-box">
                <input type="text" name="user_name">
            </div>
            <div class="input-box">
                <input type="password" name="password">
            </div>
            <div>
                <input type="submit" value="Sign Up" class="btn">
            </div>
            <div class="register-link">
                <p>Go back to login<a href="login.php">Login </a></p>
            </div>

        </form>
    </div>

</body>

</html>