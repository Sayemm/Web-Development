<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/event_details.css">
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
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="tb">
        <table>
            <?php
                $db = mysqli_connect("localhost", "root", "", "authentication");

                $username = $_SESSION['username'];

                if($_GET['id']==1) $types = "Programming Contest";
                else if($_GET['id']==2) $types = "Gaming Contest";
                else if($_GET['id']==3) $types = "Hackathon";
                else if($_GET['id']==4) $types = "Apps Dev Contest";
                else if($_GET['id']==5) $types = "Project Showcasing";
                else $types = "Matlab Contest";
                

                // echo $_GET['id'];

                $sql = "SELECT dates, types, username, address FROM events WHERE types='$types'";
                $result = mysqli_query($db, $sql);

                if($result -> num_rows > 0)
                {
                    echo "<tr>
                                <th>Registraton Deadline</th>
                                <th>Type of the contest</th>
                                <th>Author</th>
                                <th>Registration Venue</th>
                        </tr>";
                    while($row = $result -> fetch_assoc())
                    {
                        echo "<tr><td>" . $row["dates"] . "</td><td>" . $row["types"] . "</td><td>" . $row["username"] . "</td><td>" . $row["address"] . "</td></tr>";
                    }

                    echo "</table>";
                }

                else echo "<h1>Don't have any event to show</h1>";
            ?>
        </table>
    </div>

</body>
</html>