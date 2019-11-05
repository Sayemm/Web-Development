<?php
    session_start();

    // connect to database
    $db = mysqli_connect("localhost", "root", "", "authentication");

    if(isset($_POST['about_btn']))
    {
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $message = mysqli_real_escape_string($db, $_POST['message']);

        $sql = "INSERT INTO complain (namee, email, messagee) VALUES ('$name', '$email', '$message')";

        // echo $sql;

        mysqli_query($db, $sql);

        header("location: index.html");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="welcome to my website">
    <meta name="keywords" content="hotel, sherpur">
    <title>Event Management | Contact</title>
    <link rel="stylesheet" href="css/contact_style.css">
    <script src="https://kit.fontawesome.com/200c487988.js"></script>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
                <h1 class="logo"> <a href="index.html">Event Management</a></h1>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a class="current" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="contact-form" class="py-3">
        <div class="container">
            <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
            <p>Please fill the form to contact us</p>
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <button type="submit" class="btn" name="about_btn">Submit</button>
            </form>
        </div>
    </section>

    <section id="contact-info" class="bg-dark">
        <div class="container">
            <div class="box">
                <i class="fas fa-hotel fa-3x"></i>
                <h3>Location</h3>
                <p>Sherpur Town, Sherpur</p>
            </div>
            <div class="box">
                <i class="fas fa-phone fa-3x"></i>
                <h3>Phone Number</h3>
                <p>+8801791-201558</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope fa-3x"></i>
                <h3>Email Address</h3>
                <p>sayemseer@gmail.com</p>
            </div>
        </div>
    </section>

    <footer id="main-footer">
        <p>Event Management &copy; 2019, All Right Reserved</p>
    </footer>
</body>
</html>