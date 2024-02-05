<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="flights.css">
</head>
<body>
    
    <div class="container">
        <h1 style="color: rgb(173, 8, 107);">Flight Booking</h1> 
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $departure = $_POST["departure"];
            $destination = $_POST["destination"];
            $departureDate = $_POST["departure-date"];
            $returnDate = $_POST["return-date"];

            echo "<p>Flight search submitted:</p>";
            echo "<p>Departure: $departure</p>";
            echo "<p>Destination: $destination</p>";
            echo "<p>Departure Date: $departureDate</p>";
            echo "<p>Return Date: $returnDate</p>";
        }
        ?>
        <form action="#" method="post">
            <label for="departure">Departure Location</label>
            <select name="departure" id="departure" required>
                <option value="" disabled selected>Select Departure City</option>
                <option value="prishtine">Prishtina (PRN)</option>
                <option value="vienna">Vienna (VIE)</option>
                <option value="frankfurt">Frankfurt (Any)</option>
                <option value="zurich">Zurich(ZRH)</option>
                <option value="istanbul">Istanbul(IST)</option>
                <option value="paris">Paris (CDG)</option>
                <option value="london">London (LHR)</option>
                <option value="amsterdam">Amsterdam(AMS)</option>
                <option value="prague">Prague(PRG)</option>
                
            </select>

            <label for="destination">Destination</label>
            <select name="destination" id="destination" required>
                <option value="" disabled selected>Select Destination City</option>
                <option value="paris">Paris (CDG)</option>
                <option value="london">London (LHR)</option>
                <option value="prishtine">Prishtina (PRN)</option>
                <option value="vienna">Vienna (VIE)</option>
                <option value="frankfurt">Frankfurt (Any)</option>
                <option value="zurich">Zurich(ZRH)</option>
                <option value="istanbul">Istanbul(IST)</option>
                <option value="amsterdam">Amsterdam(AMS)</option>
                <option value="prague">Prague(PRG)</option>
                
            </select>

            <label for="departure-date">Departure Date</label>
            <input type="date" id="departure-date" name="departure-date" required>

            <label for="return-date">Return Date</label>
            <input type="date" id="return-date" name="return-date" required>

            <button type="submit">Search Flights</button>
        </form>
    </div>
</body>
</html>

    
</body>
</html>