<?php
    session_start();

    $events = $_REQUEST["events"];

    $l = count($events);
    
    $_SESSION['l'] = $l;
    $_SESSION['cn'] = -1;
    $_SESSION['events'] = array();

    for($i = 0; $i < $l; $i++)
    {
        array_push($_SESSION['events'], $events[$i]);
    }

    if($_SESSION['l']-$_SESSION['cn']>0)
    {
        header("location: function.php");
    }
?>