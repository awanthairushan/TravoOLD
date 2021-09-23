<?php 

    $con = require 'db_connection.php';

    $query = "SELECT ROW_NUMBER() OVER(ORDER BY name) AS row_no,name,address_line1,address_line2,city,email,contact1,contact2 FROM travelers";

    $result = mysqli_query($con, $query);


    return $result;
    

?>

