<?php 

    $con = require 'db_connection.php';

    $query = "SELECT question,answer FROM faq";

    $result = mysqli_query($con, $query);


    return $result;
    

?>