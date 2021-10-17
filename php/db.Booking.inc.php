<?php

require_once 'db.inc.php';

if(isset($_POST["submit"]))
{
    
    $userId =$_POST["id"];
    $corpse = $_POST["corpse"];
    $dob = date('y-m-d', strtotime($_POST["dob"])); 
    $dod = date('y-m-d', strtotime($_POST["dod"]));
    $address = $_POST["address"];
    $religion = $_POST["religion"];


        $sql = "INSERT INTO booking (userid, corpse, dateBirth, dateDeath, corpseAddress, corpseReligion)
                VALUES ('$userId','$corpse','$dob','$dod','$address','$religion')";
        mysqli_query($conn,$sql);
        header("Location: ../Booking.php?error=GANA");
   
   
    
}
else
{
    header("Location: ../Booking.php?error=connectionError");
}