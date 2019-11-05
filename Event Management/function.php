<?php
    session_start();

    $_SESSION['cn']++;

    // echo $_SESSION['l'] . "</br>" . "</br>";
    // echo $_SESSION['cn'] . "</br>" . "</br>";

    if($_SESSION['l']-$_SESSION['cn']>0)
    {
        if($_SESSION['events'][$_SESSION['cn']] == 'Programming Contest'){
            header("location: contest.php");
        }
        elseif($_SESSION['events'][$_SESSION['cn']] == 'Gaming Contest'){
            header("location: contest.php");
        }
        elseif($_SESSION['events'][$_SESSION['cn']] == 'Hackathon'){
            header("location: contest.php");
        }
        elseif($_SESSION['events'][$_SESSION['cn']] == 'Apps Dev Contest'){
            header("location: contest.php");
        }
        elseif($_SESSION['events'][$_SESSION['cn']] == 'Project Showcasing'){
            header("location: contest.php");
        }
        elseif($_SESSION['events'][$_SESSION['cn']] == 'Matlab Contest'){
            header("location: contest.php");
        }
    }
    else header("location: myevent.php");
?>