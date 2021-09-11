<?php
  session_start();
 ?>
<html>
    <head>
        <style> <?php include '../../css/traveler/traveler_hotels_names_popup.css'; ?> </style>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../../script/traveler/traveler_hotels_names_popup.js"></script>
    </head>
    <body>
        <table>
            <tr>
                <td><a onclick="plusSlides(-1)"><div class="prev"></div></a></td>
                <td class="hotels">
                    <div class="slide hotels1">
                        <div class="cols1">
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-</button></div>
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-</button></div>
                        </div>
                        <div class="cols2">
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-</button></div>
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-</button></div>
                        </div>
                    </div>

                    <div class="slide hotels2">
                        <div class="cols1">
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> -5000</button></div>
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> -5000</button></div>
                        </div>
                        <div class="cols2">
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> -5000</button></div>
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> -5000</button></div>
                        </div>
                    </div>

                    <div class="slide hotels3">
                        <div class="cols1">
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-50</button></div>
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-50</button></div>
                        </div>
                        <div class="cols2">
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-50</button></div>
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-50</button></div>
                        </div>
                    </div>

                    <div class="slide hotels4">
                        <div class="cols1">
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 00-5000</button></div>
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 00-5000</button></div>
                        </div>
                        <div class="cols2">
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 00-5000</button></div>
                            <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 00-5000</button></div>
                        </div>
                    </div>
                </td>
                <td><a onclick="plusSlides(1)"><div class="next"></div></a></td>
            </tr>
            <tr class="cancel"><td colspan="3"><button  id="cancelbtn">CANCEL</button></td></tr>
        </table>


    </body>
</html>
