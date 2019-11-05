<?php
    session_start();

    $events = $_REQUEST["events"];

    $l = count($events);

    echo $_SESSION['email'] . "</br>" . "</br>";
    
    $_SESSION['l'] = $l;
    $_SESSION['cn'] = 0;
    $_SESSION['events'] = array();

    for($i = 0; $i < $l; $i++)
    {
        // if($events[$i]=="programming") header("location: programming.php");
        // echo $events[$i] . "</br>";

        array_push($_SESSION['events'], $events[$i]);
    }

    if($_SESSION['l']-$_SESSION['cn']>0)
    {
        if($_SESSION['events'][$_SESSION['cn']] == 'Programming Contest'){
            header("location: programming.php");
        }
        elseif($_SESSION['events'][$_SESSION['cn']] == 'Gaming Contest'){
            header("location: gaming.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Demostration</title>
</head>
<body>
    <!-- <?php
        echo " <h1>Fucking Sign Up Informationnnnn</h1> ";

        // $fname = $_POST['firstName'];
        // $lname = $_POST['lastName'];
        echo $_SESSION['email'];
        // $pas1 = $_POST['password1'];
        // $pas2 = $_POST['password2'];

        ////// $str = <<<EOD

        // First Name is $fname
        // and last Name is $lname

        // EOD;

        // echo $str;

        ///// define('PI', 3.14156);
        // echo "the value of PI is " . PI;

        // echo '5 + 2 = ' . (5+2) . "</br>";
        // echo '5 - 2 = ' . (5-2) . "</br>"; 
        // echo '5 x 2 = ' . (5*2) . "</br>";
        // echo '5 // 2 = ' . (integer)(5/2) . "</br>";
        // echo '5 / 2 = ' . (5/2) . "</br>";
        // echo '5 % 2 = ' . (5%2) . "</br>";

        ///////// $rand = 5;

        // echo $rand+=5; echo  "</br>";
        // echo $rand++;

        //////// $randnum = 5;
        // $refnum = &$randnum;
        // $randnum = 100;

        // echo $refnum;

        /////////// $min = 55;
        // $max = 10;

        // if($min<$max)
        // {
        //     echo $max . ' is the largest number';
        // }
        // elseif($min==55 && $min>25){
        //     echo 'Equal';
        // }
        // else
        // {
        //     echo $max . ' is not the largest number';
        // }

        ///////// $mx = (15>10)? 15:10;
        // echo $mx;

        ////////// $rand = 3;
        // switch($rand)
        // {
        //     case 3:
        //     echo 'random number is = 3';
        //     break;

        //     case 4:
        //     echo 'random number is = 4';
        //     break;

        //     case 5:
        //     echo 'random number is = 5';
        //     break;

        //     default:
        //     echo 'no case matcheddddddddd';
        // }

        

        //////// for($v = 0; $v <= 10; $v++)
        // {
        //     echo $v . '</br>';
        // }

        // $v = 0;

        // while($v <= 5)
        // {
        //     echo $v . '</br>';
        //     $v++;
        // }

        // $v = 13;
        // do {
        //     echo $v . '</br>';
        //     $v++;
        // }
        // while($v<=12);


        //////// $a = array(1, 2, 3, 4, 5);

        // echo "the number is = " . $a[2];

        // foreach($a as $num)
        // {
        //     echo 'the number is = ' . $num . "</br>";
        // }

        // $name = array('first name' => $fname, 'last name' => $lname);

        // foreach($name as $key => $value)
        // {
        //     echo $key . ' : ' . $value . "</br>";
        // }

        // $pass = array(123, 343);
        // $name = array(123, 343);

        // if($pass == $name) echo "same" . "</br>";

        // print_r(array_merge($pass, $name));

        // $td = array(array(1, 2, 3), 
        //             array(1, 2, 3), 
        //             array(1, 2, 3));
        // for($row = 0; $row < 3; $row++)
        // {
        //     for($col = 0; $col < 3; $col++)
        //     {
        //         echo $td[$row][$col] . " ";
        //     }
        //     echo "</br>";
        // }

        // $int = array(6, 8, 5, 3, 4);

        // rsort($int);

        // foreach($int as $num)
        // {
        //     echo $num . "</br>";
        // }

        ////////////// $s = "          Random string with space        ";
        // $dec = 3;

       

        // echo strlen(ltrim($s)) . "</br>";
        // echo strlen(rtrim($s)) . "</br>";
        // echo strlen(trim($s)) . "</br>";

        // echo strtoupper($s) . "</br>";
        // echo strtolower($s) . "</br>";

        // echo ucfirst($s) . "</br>";

        // printf("the random string is %s </br>", $s);
        // printf("decmal %d </br>", $dec);

        // $s1 = "man";
        // $s2 = "mAN";

        // echo strcmp($s1, $s2);

        // function sum($n1, $n2){
        //     return $n1 + $n2;
        // }

        // echo sum(4, 5);
    ?> -->
</body>
</html>