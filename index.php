<?php
include_once 'header.php';

?>

<?php
        if(isset($_SESSION["user"]))
        {
            echo "<h1>Welcome " .$_SESSION["user"]."</h1>";
        }
        ?>
            <h1>Argao Cemetery Mapping</h1>
            <form> 
                <div class="search">
                <input type="text" placeholder="Search" name="search"/>
                    <span class="material-icons">
                        search
                        </span>
                    </span>
                    </span>
            </div>    
            </form>
            <div id="map" onload="initMap();"></div>
            <script src="js\All.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWLWw1JpZXDtMopAdvBBvBKP28dQ1uwTY&map_ids=e50bebc5c429891e&callback=initMap">
    </script>
            
            
        </body>
    </head> 
</html>

