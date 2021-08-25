<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-HOTELS</title>
    <link rel="stylesheet" href="../../css/admin/admin_hotels.css">

</head>
<body>
<section class="admin-hotels">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->

<div class="middle">
    <!--Start "New Hotels" table-->
    <h1 class="heading-one">NEW HOTELS</h1>
        <!--Start search option-->
            <label for="filter" class="filter-labels">SEARCH BY :</label>
            <select name="filter" id="filter" class="filter-input">
                <option value="vnumber">HOTEL NAME</option>
                <option value="vnumber">ADDRESS</option>
            </select>
            <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
        <!--End search option-->

    <div class="table">
        <table class="content-table" id="conn_table" >
            <thead>
                <tr>
                    <th>HOTEL NAME</th>
                    <th>ADDRESS</th>
                    <th>HOTEL DETAILS</th>
                    <th>REPRESENTATIVE DETAILS</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="submit" id="morebtn" value="ACCEPT">
                        <input type="button" id="removebtn" value="DECLINE"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--End "New Hotels" table-->

    <!--Start "Exsisting Hotels" table-->
    <h1 class="heading-one"><br />EXSISTING HOTELS</h1>
        <!--Start search option-->
            <label for="filter" class="filter-labels">SEARCH BY :</label>
            <select name="filter" id="filter" class="filter-input">
                <option value="vnumber">HOTEL NAME</option>
                <option value="vnumber">ADDRESS</option>
            </select>
            <input type="text" name="search" id="search" class="search-input" placeholder="Enter Value"><br>
        <!--End search option-->

    <div class="table">
        <table class="content-table" id="conn_table" >
            <thead>
                <tr>
                    <th>HOTEL NAME</th>
                    <th>ADDRESS</th>
                    <th>HOTEL DETAILS</th>
                    <th>REPRESENTATIVE DETAILS</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
                <tr>
                <td>Hotel Name</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
                <tr>
                    <td>Hotel Name</td>
                    <td>Location</td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="morebtn" value="MORE"></td>
                    <td><input type="button" id="removebtn" value="REMOVE"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--End "Exsisting Hotels" table-->

 
</div>
 
<!--<script src="../../JS/filter.js"></script>-->
</section>
</body>
</html>