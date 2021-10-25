<?php 

    $con = require 'db_connection.php';

    $query = "SELECT ROW_NUMBER() OVER(ORDER BY name) AS row_no,name,city,location,address_line1,address_line2 FROM hotels";

    $result = mysqli_query($con, $query);


    return $result;
    

?>

