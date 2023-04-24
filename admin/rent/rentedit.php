<?php 
$conn = new PDO ("mysql:host=localhost;dbname=ampercar", "root", "root");

?>  

<?php 
    $Rent_ID = $_POST["Rent_ID"];
    $Status = $_POST["Status"];
    
    $row = "UPDATE Rent SET Status=:Status WHERE Rent_ID=:Rent_ID";
    $query = $conn->prepare($row);
    $query->execute([
        "Rent_ID" => $Rent_ID,
        "Status" => $Status,
        ]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/rent.php">';
    ?>