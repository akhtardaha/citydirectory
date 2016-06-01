<?php


function db(){

// dev credentials
    // $servername = "localhost";
    // $username = "i2267792_drup1";
    // $password = "A#P69UrZkfB]Jyr[PU&28@.6";
    // $dbname = "countrycities";

// local environment 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    // Create connection
    return $conn = new mysqli($servername, $username, $password, $dbname);
}
/*
*  read csv file and import data into database
*/

function cron(){
    $conn = db();
    if (($handle = fopen("assets/AdWords API Location Criteria 2016-04-26.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $sql = "INSERT INTO cities (criteria_id, name, can_name, parent_id, country_code, target_type, status) VALUES ('".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."', '".$data[4]."', '".$data[5]."', '".$data[6]."')";
            $conn->query($sql);
        }
    fclose($handle);
    }
}

/*
*   featch specific number of result from database
*   param $page for page number
*/

function fetchResults($page){
    $conn = db();
    $upper = ($page-1)==0?0:($page*15);
    $limit = $upper.", 15";
    $sql = "SELECT * FROM cities LIMIT $limit";
    $result = $conn->query($sql);
    $output = '';
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $output .= '<div class="col-md-4 border-bottom">';
            $output .= '<h4>'.$row["name"].', '.$row["country_code"].'</h4>';
            $output .= '<p>'.$row["can_name"].'</p>';
            $output .= '</div>';
        }
        echo $output;
    } else {
        echo "0 results";
    }
}