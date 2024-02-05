<?php
$connection = mysqli_connect('localhost','root','','flights_db');

if(isset($_POST['send'])){
    $departurelocation = $_POST['location'];
    $destination= $_POST['location'];
    $departuredate = $_POST['date'];
    $returndate = $_POST['date'];

    $request = "insert into flights_form(departure location, destination, departure date, return date) values
    ('$departurelocation', '$destionation','$departuredate','$returndate')";

    mysqli_query($connection, $request);

    header('location:flights.php');


}else{
    echo 'something went wrong try again';
}

?>