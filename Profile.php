<?php
include_once 'header.php';
include_once 'php/db.Profile.inc.php';
?>

            
                <div>
                    <?php
                    echo "<h1>".$_SESSION["user"]."'s Profile</h1>";
                    ?>
                </div>

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