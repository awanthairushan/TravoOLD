<?php 

    $con = require 'db_connection.php';

    $query = "SELECT faq_id,question,answer FROM faq";

    $result = mysqli_query($con, $query);


    return $result;
    

?>