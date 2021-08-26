<html>
    <head>
      <style> <?php include '../../css/traveler/traveler_trip_details.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="trip">
            <div class="tripmenu"><a href="Traveler_details-Trip.html">TRIP</a></div>
            <div class="tripmenu"><a href="Traveler_details-budget.html">BUDGET</div>
            <div class="tripmenu"><a href="Traveler_details-Route.html">ROUTE</a></div>
        </div>

        <div class="container">
            <div class="details">
                <table class="main">
                    <tr>
                        <td>Date : </td>
                        <td>YYYY-MM-DD To YYYY-MM-DD</td>
                    </tr>
                    <tr>
                        <td>Number of Travelers : </td>
                        <td>Count.</td>
                    </tr>
                    <tr>
                        <td>Category : </td>
                        <td>Category</td>
                    </tr>
                    <tr>
                        <td>Mileage : </td>
                        <td></td>
                    </tr>
                </table>

                <table class="days" rules=none>
                    <tr>
                        <th></th>
                        <th>Day 1</th>
                        <th>Day 2</th>
                        <th>Day 3</th>
                    </tr>
                    <tr>
                        <th class="row">Destination</th>
                        <td>Destination 1</td>
                        <td>Destination 2</td>
                        <td>Destination 3</td>
                    </tr>
                    <tr>
                        <th class="row">Hotel</th>
                        <td>Hotel 1</td>
                        <td>Hotel 2</td>
                        <td>Hotel 3</td>
                    </tr>
                    <tr>
                        <th class="row">Sights</th>
                        <td>sight 1<br/>sight 2<br/>sight 3</td>
                        <td>sight 1<br/>sight 2<br/>sight 3</td>
                        <td>sight 1<br/>sight 2<br/>sight 3</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="buttons">
            <button id="savebtn">SAVE</button>
            <button  id="paybtn">PAY NOW</button>
        </div>


    </body>
</html>
