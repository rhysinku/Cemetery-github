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
                <form action="">
                    <label>First Name</label>
                    <input type="text" name="fname" value="<?php echo @$fname;?>"/>
                    <label>Last Name</label>
                    <input type="text" name="lname" value="<?php echo @$lname;?>"/>
                    <label>Contact</label>
                    <input type="text" name="contact" value="<?php echo @$contact;?>"/>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo @$email;?>"/>
                </form>
                </div>


            </body>
      
    </head>
</html>