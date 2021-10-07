<?php
include_once 'header.php';
include_once 'php/db.Profile.inc.php';
?>

            
               
                <div class="header">
                    <?php
                    echo "<h1>".$_SESSION["user"]."'s Profile</h1>";
                    ?>
                </div>
                <a  href='EditProfile.php' class="edit"><i class="material-icons">edit</i></a>
               <div class="profile">
                <?php
                echo "<p>First Name : ".$fname."</p>";
                echo "<p>Last Name : ".$lname."</p>";
                echo "<p>Contact Number : ".$contact."</p>";
                echo "<p>Email Address : ".$email."</p>";
                ?>
                </div>


            </body>
      
    </head>
</html>