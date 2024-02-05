<?php
session_start();
if(isset($_SESSION['user'])){
echo "<h3>Welcome te Dashboard</h3>";
echo "<br><a href='welcome.php'>back</a>";

?>
<html lang="en">
<body>
    <h1>Dashboard</h1>
    <div id="sidebar">
        <a href="dashboard.php">Dashboard</a>
        <a href="home.php">Home Page</a>
        <a href="users.php">Users</a>
        <a href="vendet.html">Vendet</a>
        <a href="flights.html">Fluturimet</a>
        <a href="book.html">About Us</a>
        <a href="contactus.php">Contact us</a>
        <p>Return to Web here</p>
         <a href="../home.php" class="back">Back to Web</a>
    </div>

</body>
</html>
<?php } else {header('Location:home.php');}?>