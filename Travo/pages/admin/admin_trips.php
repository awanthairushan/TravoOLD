<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php


?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-TRIPS</title>
    <link rel="stylesheet" href="../../css/admin/admin_trips.css">

</head>
<body>
<section class="admin-trips">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->

<div class="middle">
    <!--Start "New Trips" table-->
    <h1 class="heading-one">NEW TRIPS</h1>
        <!--Start search option-->
            <label for="filter" class="filter-labels">SEARCH BY :</label>
            <select name="filter" id="filter" class="filter-input">
                <option value="vnumber">TRIP ID</option>
                <option value="vnumber">START DATE</option>
            </select>
            <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
        <!--End search option-->

    <div class="table">
        <table class="content-table" id="conn_table" >
            <thead>
                <tr>
                    <th>TRIP ID</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th>PICKUP LOCATION</th>
                    <th>TRIP DETAILS</th>
                    <th>CUSTOMER DETAILS</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="PAID"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="PAID"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="PAID"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="PAID"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="PAID"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--End "New Trips" table-->

    <!--Start "Paid Trips" table-->
    <h1 class="heading-one"><br />Paid TRIPS</h1>
        <!--Start search option-->
            <label for="filter" class="filter-labels">SEARCH BY :</label>
            <select name="filter" id="filter" class="filter-input">
                <option value="vnumber">TRIP ID</option>
                <option value="vnumber">START DATE</option>
            </select>
            <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
        <!--End search option-->

    <div class="table">
        <table class="content-table" id="conn_table" >
            <thead>
                <tr>
                    <th>TRIP ID</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th>PICKUP LOCATION</th>
                    <th>TRIP DETAILS</th>
                    <th>CUSTOMER DETAILS</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="completedbtn" value="COMPLETED"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="completedbtn" value="COMPLETED"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="completedbtn" value="COMPLETED"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="completedbtn" value="COMPLETED"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="completedbtn" value="COMPLETED"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--End "Paid Trips" table-->

    <!--Start "Completed Trips" table-->
    <h1 class="heading-one"><br />COMPLETED TRIPS</h1>
        <!--Start search option-->
            <label for="filter" class="filter-labels">SEARCH BY :</label>
            <select name="filter" id="filter" class="filter-input">
                <option value="vnumber">TRIP ID</option>
                <option value="vnumber">START DATE</option>
            </select>
            <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
        <!--End search option-->

    <div class="table">
        <table class="content-table" id="conn_table" >
            <thead>
                <tr>
                    <th>TRIP ID</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th>TRIP DETAILS</th>
                    <th>CUSTOMER DETAILS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                </tr>
                <tr>
                    <td>12345</td>
                    <td>2021-08-15</td>
                    <td>2021-08-20</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--End "Completed Trips" table-->
</div>

<!--<script src="../../JS/filter.js"></script>-->
</section>
</body>
</html>
<?php
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
