<?php
include_once 'header.php';
include_once 'php/db.Profile.inc.php';
?>

            
               <title>Edit Profile</title>
                <div class="header">
                    <?php
                    echo "<h1>".$_SESSION["user"]."'s Profile</h1>";
                    ?>
                </div>
              
               <div class="profile">
                <form action="php/db.ProfileUpdate.inc.php" method="post">
                    <label>First Name</label>
                    <input type="text" name="fname" value="<?php echo @$fname;?>"/>
                    <label>Last Name</label>
                    <input type="text" name="lname" value="<?php echo @$lname;?>"/>
                    <label>Contact</label>
                    <input type="text" name="contact" value="<?php echo @$contact;?>"/>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo @$email;?>"/>
                <div class="center">
                    <button type="submit" name="submit" class="submit" >Confirm</button>
                    <button class="submit" ><a href="Profile.php">Cancel </a></button>
                </div>

                </form>
                </div>


            </body>
      
    </head>
</html>