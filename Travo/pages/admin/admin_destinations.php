<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-DESTINATIONS</title>
    <link rel="stylesheet" href="../../css/admin/admin_destinations.css">

</head>
<body>
<section class="admin-destinations">
    <!--Start Navigation bar-->
    <?php include '../../repeatable_contents/nav_bar_admin.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_admin.css'; ?>  </style>
    <!--End Navigation bar-->

    <div class="main">
    
    <h1 class="heading-one">MANAGE DESTINATIONS & VISITING PLACES</h1>


<!--Start "Destinations & visiting places" table-->
<div class="table">
    <table class="content-table" id="conn_table" >
        <thead>
            <tr>
                <th>DESTINATION</th>
                <th>VISITING PLACES</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Galle</td>
                <td class="col2">Galle Dutch Fort<br />
                    Dutch Reformed Church<br />
                    The National Museum of Galle<br />
                    Japanese Peace Pagoda</td>
                <td><input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br /></td>
                <td><input type="button" id="removebtn" value="REMOVE DESTINATION"><br />
                    <input type="button" id="addbtn" value="ADD NEW PLACE"></td>
            </tr>
            <tr>
                <td>Rathnapura</td>
                <td>Galle Dutch Fort<br />
                    Dutch Reformed Church<br />
                    The National Museum of Galle<br />
                    Japanese Peace Pagoda</td>
                <td><input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br /></td>
                <td><input type="button" id="removebtn" value="REMOVE DESTINATION"><br />
                    <input type="button" id="addbtn" value="ADD NEW PLACE"></td>
            </tr>
            <tr>
                <td>Rathnapura</td>
                <td>Galle Dutch Fort<br />
                    Dutch Reformed Church<br />
                    The National Museum of Galle<br />
                    Japanese Peace Pagoda</td>
                <td><input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br />
                    <input type="button" id="removebtn" value="REMOVE PLACE"><br /></td>
                <td><input type="button" id="removebtn" value="REMOVE DESTINATION"><br />
                    <input type="button" id="addbtn" value="ADD NEW PLACE"></td>
            </tr>
        </tbody>
    </table>
</div>
<!--End "Registered vehicle" table-->

<!--Start form of adding new destination-->
<div class="form-container">
    <form>
        <label for="fdestination" class="fdes">DESTINATION</label>
            <input type="text" id="fdestination" name="fdestination">


            <input type="text" id="fvp" name="fvp" placeholder="  Sight">
            <input type="text" id="fprice" name="fprice" placeholder="  Ticket price LKR">
            <input type="text" id="ftime" name="ftime" placeholder="  Time">
            <select id="fcategory" name="fcategory">
                <option value="0">Select Category :</option>
                <option value="1">Cultural</option>
                <option value="2">Pilgrimage</option>
                <option value="3">Leisure</option>
            </select>
            <input type="text" id="flocation" name="flocation">
            <img src="../../images/icons/placeholder.png" id="location"><br />

            <input type="text" id="fvp" name="fvp" placeholder="  Sight">
            <input type="text" id="fprice" name="fprice" placeholder="  Ticket price LKR">
            <input type="text" id="ftime" name="ftime" placeholder="  Time">
            <select id="fcategory" name="fcategory">
                <option value="0">Select Category :</option>
                <option value="1">Cultural</option>
                <option value="2">Pilgrimage</option>
                <option value="3">Leisure</option>
            </select>
            <input type="text" id="flocation" name="flocation">
            <img src="../../images/icons/placeholder.png" id="location"><br />

            <input type="text" id="fvp" name="fvp" placeholder="  Sight">
            <input type="text" id="fprice" name="fprice" placeholder="  Ticket price LKR">
            <input type="text" id="ftime" name="ftime" placeholder="  Time">
            <select id="fcategory" name="fcategory">
                <option value="0">Select Category :</option>
                <option value="1">Cultural</option>
                <option value="2">Pilgrimage</option>
                <option value="3">Leisure</option>
            </select>
            <input type="text" id="flocation" name="flocation">
            <img src="../../images/icons/placeholder.png" id="location"><br />

            <input type="text" id="fvp" name="fvp" placeholder="  Sight">
            <input type="text" id="fprice" name="fprice" placeholder="  Ticket price LKR">
            <input type="text" id="ftime" name="ftime" placeholder="  Time">
            <select id="fcategory" name="fcategory">
                <option value="0">Select Category :</option>
                <option value="1">Cultural</option>
                <option value="2">Pilgrimage</option>
                <option value="3">Leisure</option>
            </select>
            <input type="text" id="flocation" name="flocation">
            <img src="../../images/icons/placeholder.png" id="location"><br />

         



 

        <input type="button" id="addvpbtn" value="ADD NEW PLACE">
        <input type="submit" id="submitvpbtn" value="SUBMIT">
        

    </form>


</div>
<!--End form of adding new destination-->

</div>

  <!--<script src="../../JS/filter.js"></script>-->
</section>
</body>
</html>