<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/myevent.css">
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

                $sql = "SELECT dates, types FROM events WHERE username='$username'";
                $result = mysqli_query($db, $sql);

                if($result -> num_rows > 0)
                {
                    echo "<tr>
                                <th>Registraton Time</th>
                                <th>Type of the contest</th>
                        </tr>";
                    while($row = $result -> fetch_assoc())
                    {
                        echo "<tr><td>" . $row["dates"] . "</td><td>" . $row["types"] . "</td></tr>";
                    }

                    echo "</table>";
                }

                else echo "You don't have any event to show";
            ?>
        </table>
    </div>

    <a href="content.php" class="btn">Back</a>

</body>
</html>