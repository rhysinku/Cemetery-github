<?php
session_start();


?>
<!DOCTYPE html>
<html>
    <title></title>
    <!--Assets-->
    <link rel="stylesheet" href="../css/all.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

   
    <head>
        <body>
            <nav class="navcofig">
                
                <?php 
                if(isset($_SESSION["user"]))
                {
                    echo "<a href='admin.php'> Home</a>";
                    echo "<a href='admin.profile.php'>".$_SESSION["user"]."</a>";
                    echo "<a href='../php/dbLogout.inc.php'>Logout</a>";
                }
                else
                ?>
            </nav> 