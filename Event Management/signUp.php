<?php
    session_start();

    // connect to database
    $db = mysqli_connect("localhost", "root", "", "authentication");

    if(isset($_POST['register_btn']))
    {
        session_start();

        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password1 = mysqli_real_escape_string($db, $_POST['password1']);
        $password2 = mysqli_real_escape_string($db, $_POST['password2']);

        if($password1==$password2)
        {
            // create user
            $password1 = md5($password1);
            $sql = "INSERT INTO users (firstname, lastname, email, password1, password2) VALUES ('$firstname', '$lastname', '$email', '$password1', '$password2')";
            mysqli_query($db, $sql);

            $_SESSION['message'] = "You are now logged in";
            $_SESSION['firstname'] = $firstname;

            header("location: login.php");
        }
        else
        {
            // failed

            $_SESSION['message'] = "The two passwords do not match";
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
    <link rel="stylesheet" href="./css/signup_style.css">
    <title>Sign Up</title>
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
            <h1>Sign up</h1>
            <form action="signUp.php" method="post">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" name="firstname" id="first-name">
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" name="lastname" id="last-name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password1" id="password">
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="password2" id="password2">
                </div>

                <button type="submit"  class="signup-btn" name="register_btn">Sign Up</button>
            </form>
        </div>

    </div>
</body>
</html>