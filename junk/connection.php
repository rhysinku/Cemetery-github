<?php

$server = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($server, $dbusername, $dbpass, $dbname);


if(isset($_POST["submitName"]))
{
    $fname = $_POST["fuser"];
    $lname =$_POST["luser"];

    $sql ="INSERT INTO person (fname,lname) VALUES ('$fname' , '$lname')";

    mysqli_query($conn,$sql);
    header ("Location: ../junk/index.php?error=Success");
}
 
{
    header ("Location: ../junk/index.php?error=submitNotWorking");
}


if(isset($_POST["submitfood"]))
{
    $person = $_POST["person"];
    $fname = $_POST["fname"];
    $fdesc = $_POST["fdesc"];
    $fnum = $_POST["fnum"];

    $sql ="INSERT INTO person (fname,lname) VALUES ('$fname' , '$lname')";

    mysqli_query($conn,$sql);
    header ("Location: ../junk/index.php?error=Success");
}

else
{
    header ("Location: ../junk/index.php?error=submitNotWorking");
}

