<?php 
include "db.php";

// if search button is clicked
if(isset($_POST['searchSubmit'])){
    
    // save input
    $input = $_POST['searchBar'];
    
    // check if valid input entered
    if ($input) {
        
        // clean incoming info
        $input = mysqli_real_escape_string($connection, $input);
        
        // query for info
        $query = "SELECT * FROM datapoints WHERE TripID = '{$input}'";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query FAILED' . mysqli_error($connection));
        }
        
        
        while ($row = mysqli_fetch_array($result)){
            $tripID = $row['TripID'];
            //$segmentID = $row['segmentID'];
            //$userID = $row['userID'];
            //$startTime = $row['startTime'];
            //$endTime = $row['endTime'];
            //$dataPoints = $row['dataPoints'];
            $flagged = $row['flagged'];

            echo '<h3>' . $tripID . '</h3>';
            echo '<h3>' . $flagged . '</h3>';
        }
    }
    else {
        echo "<div class='form-group'>Please fill in all fields!</div>";
    }
}

?>
