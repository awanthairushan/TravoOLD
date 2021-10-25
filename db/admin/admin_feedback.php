<?php 

    $con = require 'db_connection.php';

    $query = "SELECT feedback_id,date,feedback FROM feedback";

    $result = mysqli_query($con, $query);


    return $result;
    

?>