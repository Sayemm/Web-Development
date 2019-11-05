<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/200c487988.js"></script>
    <link rel="stylesheet" href="./css/content_style.css">
    <title>Content</title>
</head>
<body>
    <h2>Register for Current Contests</h2>

    <section id="features">
        <div class="box bg-light">
            <i class="fas fa-laptop-code fa-3x"></i>
            <br>
            <a href='event_details.php?id=1'>Programming Contest</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas, ducimus officiis architecto quos quam explicabo cum a odio molestias!</p>
        </div>
        <div class="box bg-primary">
                <i class="fas fa-gamepad fa-3x"></i>
            <br>
            <a href='event_details.php?id=2'>Gaming Contest</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas, ducimus officiis architecto quos quam explicabo cum a odio molestias!</p>
        </div>
        <div class="box bg-light">
                <i class="fas fa-brain fa-3x"></i>
            <br>
            <a href='event_details.php?id=3'>Hackathon</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas, ducimus officiis architecto quos quam explicabo cum a odio molestias!</p>
        </div>
    </section>
    <section id="features">
        <div class="box bg-primary">
            <i class="fas fa-laptop-code fa-3x"></i>
            <br>
            <a href='event_details.php?id=4'>Apps Dev Contest</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas, ducimus officiis architecto quos quam explicabo cum a odio molestias!</p>
        </div>
        <hr>
        <div class="box bg-light">
            <i class="fas fa-gamepad fa-3x"></i>
            <br>
            <a href='event_details.php?id=5'>Project Showcasing</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas, ducimus officiis architecto quos quam explicabo cum a odio molestias!</p>
        </div>
        <div class="box bg-primary">
            <i class="fas fa-brain fa-3x"></i>
            <br>
            <a href='event_details.php?id=6'>Matlab Contest</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe voluptas, ducimus officiis architecto quos quam explicabo cum a odio molestias!</p>
        </div>
    </section>

    <section class="create">
        <div class="box2 bg-primary1">
            <div class="event">
                <i class="fas fa-calendar-week fa-5x"></i>
                <h3><a href="events.php">Click to Create a new Event</a></h3>
            </div>
        </div>
        <div class="box2 bg-light1">
            <div class="event">
                <i class="fas fa-calendar-week fa-5x"></i>
                <h3><a href="myevent.php">See your Events for Username <?php echo $_SESSION['username'] ?> </a></h3>
            </div>
        </div>
    </section>
</body>
</html>