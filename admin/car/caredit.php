<?php 
$conn = new PDO ("mysql:host=localhost;dbname=ampercar", "root", "root");

?>  

<?php 
    $Car_ID = $_POST["Car_ID"];
    $Car_Name = $_POST["Car_Name"];
    $Gear = $_POST["Gear"];
    $Seatbells = $_POST["Seatbells"];
    $Engine = $_POST["Engine"];
    $PricePerHour = $_POST["PricePerHour"];
    $Image = $_POST["Image"];
    
    $row = "UPDATE Car SET Car_Name=:Car_Name, Gear=:Gear, Seatbells=:Seatbells, Engine=:Engine, PricePerHour=:PricePerHour, Image=:Image WHERE Car_ID=:Car_ID";
    $query = $conn->prepare($row);
    $query->execute([
        "Car_ID" => $Car_ID,
        "Car_Name" => $Car_Name,
        "Gear" => $Gear,
        "Seatbells" => $Seatbells,
        "Engine" => $Engine,
        "PricePerHour" => $PricePerHour,
        "Image" => $_FILES['im']['name']]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/car.php">';
    ?>

<?php 
    if (isset($_POST["save"])) {
        $list=['.php','.js','.php','.html'];
        foreach($list as $item) {
            if (preg_match("/$item$/",$_FILES['im']['name']))exit("Расширение файла не подходит");
        }
        $type = getimagesize($_FILES['im']['tmp_name']);
        if ($type && ($type['mime'] != 'image/png' || $type['mime'] != 'image/jpg' || $type['mime'] != 'image/jpeg')) {
            $upload='img/'. $_FILES['im']['name'];
            if (move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "Файл загружен";
            else echo "Ошибка при загрузке файла";
            }
    else exit ("Тип файла не подходит");
    }   
    
    
    
    
    ?>