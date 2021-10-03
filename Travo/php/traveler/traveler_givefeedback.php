<?php

//connecting to the database

include '../../db/db_connection.php';

//getting feedback

if (isset($_POST['submitbtn'])) {
    $feedback_id = uniqid("fee_");
    $feedback = $_POST['response'];
    
    $sql = "INSERT INTO feedback (feedback_id, date, feedback) VALUES ('$feedback_id', curdate(), '$feedback')";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully !";
        header('location: ../../pages/traveler/traveler_feedback list.php');
    } else {
        echo "Error: " . $con->error;
        mysqli_close($con);
    }
}
