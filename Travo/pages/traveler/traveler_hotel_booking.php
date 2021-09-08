<!DOCTYPE html>
<html lang="en">
    <head>
        <style> <?php include '../../css/traveler/traveler_hotel_booking.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../script/traveler/traveler_hotel_booking.js"></script>
    </head>
    <body>
        <section class="uppersection">
            <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
            <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
            <br>
            <div class="content">
                <form>
                <div class="rooms">
                    <div class="slide">
                        <div class="rname">Single Room</div>
                        <div class="roomtype r1">1 Person<br/><br/>Breakfast included<br/>Attached bathroom<br/><br/>LKR xxxx.00<br/>without Luxury facilities<br/><br/><b class="nos">Only 1 left !</b></div>
                        <div>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="rname">Double Room</div>
                        <div class="roomtype r2">1 Person<br/><br/>Breakfast included<br/>Attached bathroom<br/><br/>LKR xxxx.00<br/>without Luxury facilities<br/><br/><b class="nos">Only 1 left !</b></div>
                        <div>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="rname">Family Room</div>
                        <div class="roomtype r3">1 Person<br/><br/>Breakfast included<br/>Attached bathroom<br/><br/>LKR xxxx.00<br/>without Luxury facilities<br/><br/><b class="nos">Only 1 left !</b></div>
                        <div>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="rname">Massive Room</div>
                        <div class="roomtype r4">1 Person<br/><br/>Breakfast included<br/>Attached bathroom<br/><br/>LKR xxxx.00<br/>without Luxury facilities<br/><br/><b class="nos">Only 1 left !</b></div>
                        <div>
                            <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                            <input type="number" id="number" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
                        </div>
                    </div>
                </div>
                <br/><br/>
                <div class="confirm"><button id="confirmbtn">CONFIRM</button></div>
            </form>

            <br/>
            <table class="hoteldetails">
                <tr>
                    <th>Location</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.539473306047!2d79.84874!3d6.918109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0658168859e3c0e!2sCinnamon%20Grand%20Colombo!5e0!3m2!1sen!2slk!4v1629560069244!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </td>
                    <td>
                        Set 1 km from both the Slave Island Railway Station and Galle Face Green, a seaside urban park, this grand resort hotel is also 2 km from Gangaramaya Buddhist Temple.
                        <br/><br/>
                        Featuring picture windows, the polished rooms come with minibars, free Wi-Fi and flat-screen TVs. Suites add living rooms and dining areas, and some offer kitchenettes, wet bars or butler service.
                        <br/><br/>
                        There are 16 restaurants and bars offering a range of cuisine. There's also a full-service spa complex, as well as an outdoor pool, and a gym with a sauna and a steam room. Additional amenities include a shopping mall and a business centre. Parking is free.
                    </td>
                </tr>
            </table>
            </div>
        </section>

    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>
    </body>
</html>