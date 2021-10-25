<?php

include('db_connection.php');

$status=TRUE;


if(isset($_POST['removebtn'])){
    //Get values for database attributes
    $faqID=$_POST['faq_id'];

    //Delete a traveler from 'travelers' table
    $sql="DELETE FROM faq WHERE faq_id= '$faqID'";  
    $result=$con->query($sql);

    //If traveler has been deleted successfully...
    if($result){   
            header("Location: ../../pages/admin/admin_faq.php");
    }
    //If traveler has not been deleted...
    else{
        echo "Error:".$con->error;
        mysqli_close($con);
    }
}
?>
