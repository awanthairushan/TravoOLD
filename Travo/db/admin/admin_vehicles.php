<?php 

    $con = require 'db_connection.php';

    $query = "SELECT ROW_NUMBER() OVER(ORDER BY vehicle_no) AS row_no,vehicle_no,type,city FROM vehicles";

    $result = mysqli_query($con, $query);


    return $result;
    

?>

