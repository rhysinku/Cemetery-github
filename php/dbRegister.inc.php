<?php

require_once 'db.inc.php';

if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $num = $_POST["num"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];

    if($password == $rpassword)
    {
        $sql = "INSERT INTO user (userName, userFname, userLname,userContact,userMail,userPwd)
        VALUES ('$username','$fname','$lname','$num','$email','$password')";
        $conn->query($sql);
        header("Location: ../index.php?error=Success");
    }

    else{
        header("Location: ../Register.php?error=WrongPassword");
        echo "<p>Password Didn't Match</p?";
    }

   
    
}
else
{
    header("Location: ../Register.php?error=connectionError");
}