



<?php

$sql = "SELECT * FROM vw_top_10_last_month ;";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

         echo '<div id="side-module-desktop-mobile">';

        // output data of each row
        //while($row = $result->fetch_assoc()) {

            $row = $result->fetch_assoc();
            
            echo '<a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'"><img src="https://ecobricks.org/briks/ecobrick-'.$row["ecobrick_unique_id"].'-file.jpeg" width="80%" alt="Ecobrick '.$row["ecobrick_unique_id"].' basic pic"/></a>';
            echo '<h4>Ecobrick of the Month!</h4>
            <h5><a href="https://ecobricks.org/en/details-ecobrick-page.php?serial_no='.$row["ecobrick_unique_id"].'">Ecobrick '.$row["ecobrick_unique_id"].' made the top tens this month with a validation score of '.$row["final_validation_score"].' Al Ikhlas Putri has ecobricked 269 g of community plastic in Jombang, Indonesia using a 600 bottle to make a Regular Ecobrick</a></h5>
            
            <a class="module-btn" href="top-tens.php">Top Ten Briks</a>
        </div>';
            
        
        
        
        } else {
            echo "Failed to connect to database";
        }
        
        ?>