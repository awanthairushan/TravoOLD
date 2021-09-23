<?php 

    $con = require 'db_connection.php';

    $query = "SELECT ROW_NUMBER() OVER(ORDER BY name) AS row_no,name,city,location FROM hotels";

    $result = mysqli_query($con, $query);


    return $result;
    

?>

