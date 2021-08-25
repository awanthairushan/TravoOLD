<html>
<head>
    <link rel="stylesheet" href="../css/Traveler-plantrip.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="background">

        <form>
            <label for="location">PICKUP LOCATION:</label>
            <input type="" id="location" name="location">
            <img id="img" src="../images/icons/placeholder.png"><br/>
            <!-- destination  1 -->
            <div id="destinations">
                <table>
                    <tr><td><label for="destination1">DESTINATION 1</label></td></tr>
                    <tr>
                        <td>
                            <select name="destination1" id="des1">
                            <option selected>Destination 1</option>
                            <option value="district1">District 1</option>
                            <option value="district2">District 2</option>
                            <option value="district3">District 3</option>
                            <option value="district4">District 4</option>
                            <option value="district5">District 5</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> FIRST NIGHT HOTEL</button></td></tr>
                    <tr><td><label for="destination1">DESTINATION 1</label></td></tr>
                    <tr>
                        <td>
                            <div id="sights">
                            <input type="checkbox" id="sight1" name="sight1" value="sight1"><label for="sight1">SIGHT 1</label><br/>
                            <input type="checkbox" id="sight2" name="sight2" value="sight2"><label for="sight2">SIGHT 2</label><br/>
                            <input type="checkbox" id="sight3" name="sight3" value="sight3"><label for="sight3">SIGHT 3</label><br/>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- destination 2 -->
            <div id="destinations">
                <table>
                    <tr><td><label for="destination2">DESTINATION 2</label></td></tr>
                    <tr>
                        <td>
                            <select name="destination2" id="des2">
                            <option selected>Destination 2</option>
                            <option value="district1">District 1</option>
                            <option value="district2">District 2</option>
                            <option value="district3">District 3</option>
                            <option value="district4">District 4</option>
                            <option value="district5">District 5</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td><button onclick="window.location.href='#hotel2 ';" id="selecthotelbtn">SECOND NIGHT HOTEL</button></td></tr>
                    <tr><td><label for="destination2">DESTINATION 2</label></td></tr>
                    <tr>
                        <td>
                            <div id="sights">
                            <input type="checkbox" id="sight1" name="sight1" value="sight1"><label for="sight1">SIGHT 1</label><br/>
                            <input type="checkbox" id="sight2" name="sight2" value="sight2"><label for="sight2">SIGHT 2</label><br/>
                            <input type="checkbox" id="sight3" name="sight3" value="sight3"><label for="sight3">SIGHT 3</label><br/>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- destination 3 -->
            <div id="destinations">
                <table>
                    <tr><td><label for="destination3">DESTINATION 3</label></td></tr>
                    <tr>
                        <td>
                            <select name="destination3" id="des3">
                            <option selected>Destination 3</option>
                            <option value="district1">District 1</option>
                            <option value="district2">District 2</option>
                            <option value="district3">District 3</option>
                            <option value="district4">District 4</option>
                            <option value="district5">District 5</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td><button onclick="window.location.href='#hotel3';" id="selecthotelbtn">THIRD NIGHT HOTEL</button></td></tr>
                    <tr><td><label for="destination1">DESTINATION 3</label></td></tr>
                    <tr>
                        <td>
                            <div id="sights">
                            <input type="checkbox" id="sight1" name="sight1" value="sight1"><label for="sight1">SIGHT 1</label><br/>
                            <input type="checkbox" id="sight2" name="sight2" value="sight2"><label for="sight2">SIGHT 2</label><br/>
                            <input type="checkbox" id="sight3" name="sight3" value="sight3"><label for="sight3">SIGHT 3</label><br/>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <label for="mails">OTHER PERSON'S E-MAILS:</label><input type="email" id="mails" name="mails"><img id="img" src="../images/icons/plus.png"><br/>
        </form>
        <div class="buttons"><button onclick="window.location.href='#next';" id="nextbtn">NEXT</button></div>
        </div>
        
</body>
</html>