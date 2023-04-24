<?php 
$conn = new PDO ("mysql:host=localhost;dbname=ampercar", "root", "root");
$sql = "SELECT Car_ID, Car_Name, Gear, Seatbells, Engine, PricePerHour, Image FROM Car;";
$result = $conn -> query($sql);


?>