<?php

include('db_connection.php');

$status=TRUE;


if(isset($_POST['removebtn'])){
    //Get values for database attributes
    $acc_id = uniqid("del_");
    $travelerID=$_POST['travelerID'];
    $email=$_POST['email'];

    //Delete a traveler from 'travelers' table
    $sql="DELETE FROM travelers WHERE travelerID= '$travelerID'";  
    $result=$con->query($sql);

    //If traveler has been deleted successfully...
    if($result){   
        
        //Insert deleted traveler's email to 'deleted accounts' table successfully...
        $sql1="INSERT INTO deleted_accounts (acc_id, email) VALUES ('$acc_id', '$email')";
        $result=$con->query($sql1);

        //If traveler email has been added to 'deleted accounts' table successfully...
        if($result){
            header("Location: ../../pages/admin/admin_travelers.php");
        }
        //If traveler email has not been added to 'deleted accounts' table...
        else{
            echo "Error:".$con->error;
            mysqli_close($con);
        }
    }
    //If traveler has not been deleted...
    else{
        echo "Error:".$con->error;
        mysqli_close($con);
    }
}
?>
