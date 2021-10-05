<?php

require_once 'db.inc.php';

if(isset($_POST['sumbit']))
{
 $user= $_POST['user'];
 $pass = $_POST['password'];
 
 $sql = "SELECT * FROM user WHERE 
 userName='$user' AND 
 userPwd = '$pass'";

 $result = mysqli_query($conn,$sql);

 if(mysqli_num_rows($result)>0)
 {
     $row = mysqli_fetch_assoc($result);
     $_SESSION['user'] = $row['userName'];
     header("Location: ../index.php?error=Success");

 }

 else
 {
     header("Location: ../LogIn.php?error=LoginError");
 }



}