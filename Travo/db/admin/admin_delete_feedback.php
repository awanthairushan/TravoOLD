<?php

include('db_connection.php');

$status=TRUE;


if(isset($_POST['removebtn'])){
    //Get values for database attributes
    $feedbackID=$_POST['feedback_id'];

    //Delete a traveler from 'travelers' table
    $sql="DELETE FROM feedback WHERE feedback_id= '$feedbackID'";  
    $result=$con->query($sql);

    //If traveler has been deleted successfully...
    if($result){   
            header("Location: ../../pages/admin/admin_feedback.php");
    }
    //If traveler has not been deleted...
    else{
        echo "Error:".$con->error;
        mysqli_close($con);
    }
}
?>
