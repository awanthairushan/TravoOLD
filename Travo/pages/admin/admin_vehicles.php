<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php

$result = require '../../db/db_admin_vehicles.php';
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-VEHICLES</title>
    <link rel="stylesheet" href="../../css/admin/admin_vehicles.css">

</head>
<body>
<section class="admin-vehicles">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->

<div class="main">

    <h1 class="heading-one">REGISTERED VEHICLES</h1>

    <!--Start search option-->
        <label for="filter" class="filter-labels">SEARCH BY :</label>
        <select name="filter" id="filter" class="filter-input">
            <option value="vnumber">VEHICLE NUMBER</option>
            <option value="vcategory">VEHICLE CATEGORY</option>
            <option value="vcity">CITY</option>
        </select>
        <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
    <!--End search option-->

<!--Start "Registered vehicle" table-->
<div class="table">
    <table class="content-table" id="vehicle_table" >
        <thead>
            <tr>
                <th>NO</th>
                <th>VEHICLE NUMBER</th>
                <th>VEHICLE CATEGORY</th>
                <th>CITY</th>
                <th>VEHICLE DETAILS</th>
                <th>DRIVER DETAILS</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody class="table-body">
        <?php
            while ($rows = mysqli_fetch_array($result)){
                echo "<tr>
                    <td>".$rows['row_no']."</td>
                    <td>".$rows['vehicle_no']."</td>
                    <td>".$rows['type']."</td>
                    <td>".$rows['city']."</td> 
                    <td>
                    <form method='post' action=' '>
                        <input type='hidden' value='$rows[0]' name=con_id>
                        <input type='button' id='morebtn' value='MORE'>
                    </form>
                    </td>
                    <td>
                    <form method='post' action=' '>
                        <input type='hidden' value='$rows[0]' name=con_id>
                        <input type='button' id='morebtn' value='MORE'>
                    </form>
                    </td> 
                    <td>
                    <form method='post' action=' '>
                        <input type='hidden' value='$rows[0]' name=con_id>
                        <input type='button' id='removebtn' value='REMOVE'>
                    </form>
                    </td>
                    
                </tr>";
            }
            ?>
         <!--   <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr>
            <tr>
                <td>5678</td>
                <td>Van</td>
                <td>Colombo</td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="morebtn" value="MORE"></td>
                <td><input type="button" id="removebtn" value="REMOVE"></td>
            </tr> -->

        </tbody>
    </table>
</div>
<!--End "Registered vehicle" table-->

  
</section>
<!--JS file for search & filter-->
    <script src="../../script/admin/admin_filter_vehicles.js"></script>

</body>
</html>
<?php
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
