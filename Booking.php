<?php
include_once 'header.php';
?>
 

            
               
                <div class="logform">
                 <form action="php/db.Booking.inc.php" method="POST">
                 <input type ="hidden" name ="id" value ="<?php echo @$_SESSION['userId'] ?>"/>   
                 <labe>Name of Corpse</labe>
                     <input type="text" name="corpse"/>

                     <labe>Date of Birth:</labe>
                     <input type="date"  name="dob">

                     <labe>Date of Death:</labe>
                     <input type="date"  name="dod">

                     <labe>Address</labe>
                     <input type="text" name="address"/>

                     <labe>Religion</labe>
                     <input type="text" name="religion"/>

                <button type="submit" name="submit">Book</button>
                 </form>
                </div>
                <!-- Trigger/Open The Modal -->
                <button id="myBtn">Open Modal</button>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Some text in the Modal..</p>
                    </div>

                    </div>

            </body>
            <script src="js/design.js"></script>
    </head>
</html>