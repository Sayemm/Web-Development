<?php
    session_start();

    // connect to database
    $db = mysqli_connect("localhost", "root", "", "authentication");

    if(isset($_POST['next']))
    {
        $date = mysqli_real_escape_string($db, $_POST['date']);
        $rules = mysqli_real_escape_string($db, $_POST['rules']);
        $reg = mysqli_real_escape_string($db, $_POST['reg']);
        $payment = mysqli_real_escape_string($db, $_POST['payment']);
        $address = mysqli_real_escape_string($db, $_POST['address']);

        $type = mysqli_real_escape_string($db, $_SESSION['events'][$_SESSION['cn']]);
        $username = mysqli_real_escape_string($db, $_SESSION['username']);

        // echo $type . "</br>";
        // echo $date . "</br>";

        $sql = "INSERT INTO events (dates, rules, registration, payment, types, username, address) VALUES ('$date', '$rules', '$reg', '$payment', '$type', '$username', '$address')";

        mysqli_query($db, $sql);

        header("location: function.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/events.css">
    <link rel="stylesheet" href="css/contact_style.css">
    <script src="https://kit.fontawesome.com/200c487988.js"></script>
    <title>Document</title>

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
            <h1 class="l-heading">Give the information about <span class="text-primary"><?php echo $_SESSION['events'][$_SESSION['cn']] ?></span></h1>

            <form action="contest.php" method='POST'>

                <div class="form-group">
                    <label for="time">Starting Date</label>
                    <input type="date" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="rules">Rules and Regulation</label>
                    <textarea name="rules" id="rules"></textarea>
                </div>
                <div class="form-group">
                    <label for="registration">Registration Procedure</label>
                    <textarea name="reg" id="reg"></textarea>
                </div>
                <div class="form-group">
                    <label for="payment">Payment Procedure</label>
                    <textarea name="payment" id="payment"></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Address for Registration</label>
                    <textarea name="address" id="address"></textarea>
                </div>
                <?php
                    if($_SESSION['l']-$_SESSION['cn']>1)
                    {
                        // include 'button3.php';
                        include 'button.php';
                    }
                    else include 'button2.php';
                ?> 
            </form>
        </div>
    </section>

    <footer id="main-footer">
        <p>Event Management &copy; 2019, All Right Reserved</p>
    </footer>

</body>
</html>