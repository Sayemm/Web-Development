<?php
    session_start();

    // connect to database
    $db = mysqli_connect("localhost", "root", "", "authentication");

    if(isset($_POST['login_btn']))
    {
        // session_start();

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password1 = mysqli_real_escape_string($db, $_POST['password1']);

        $password1 = md5($password1);

        $sql = "SELECT*FROM users WHERE email='$email' AND password1='$password1' AND firstname='$username'";
        $sql2 = "SELECT firstname FROM users WHERE email='$email' AND password1='$password1'";

        $result = mysqli_query($db, $sql);
        $result2 = mysqli_query($db, $sql2);

        if(mysqli_num_rows($result)==1)
        {
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $username;

            // $_SESSION['username'] = $username;

            header("location: content.php");
        }
        else
        {
            $_SESSION['message'] = "email/pass incorrect";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login_style.css">
    <title>Log In</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"> <a href="index.html">Event Management</a></h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="full">
        <div class="login">
            <h1>Log In</h1>
            <p>New Here ? <a href="signUp.php">Sign Up</a></p>

            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password1" id="password">
                </div>

                <button type="submit" class="login-btn" name="login_btn">Log In</button>
            </form>
        </div>

    </div>
</body>
</html>