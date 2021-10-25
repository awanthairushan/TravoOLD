<?php

//connecting to the database

include '../../db/db_connection.php';

//add new faq

if (isset($_POST['submitbtn'])) {
    $faq_id = uniqid("faq_");
    $question = mysqli_real_escape_string($con, $_POST['fquestion']);
    $answer = mysqli_real_escape_string($con, $_POST['fanswer']);
    
    $sql = "INSERT INTO faq (faq_id, question, answer) VALUES ('$faq_id', '$question', '$answer')";

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully !";
        header('location: ../../pages/admin/admin_faq.php');
    } else {
        echo "Error: " . $con->error;
        mysqli_close($con);
    }
}
