<?php
include_once 'admin.header.php';
include_once '../admin/Admin php/admin.Profile.inc.php';
?>

            
<?php
echo "<title>".$_SESSION["user"]."'s Profile</title>";?>

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