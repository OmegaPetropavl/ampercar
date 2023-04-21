<?php 
$conn = new PDO ("mysql:host=localhost;dbname=ampercar", "root", "root");

?>  

<?php 
        $Car_Name = $_POST["Car_Name"];
        $Gear = $_POST["Gear"];
        $Seatbells = $_POST["Seatbells"];
        $Engine = $_POST["Engine"];
        $PricePerHour = $_POST["PricePerHour"];
        
        $row = "INSERT INTO Car (Car_Name, Gear, Seatbells, Engine, PricePerHour, Image) VALUES (:Car_Name, :Gear, :Seatbells, :Engine, :PricePerHour, :Image)";
        $query = $conn->prepare($row);
        $query->execute([
            ":Car_Name" => $Car_Name,
            ":Gear" => $Gear,
            ":Seatbells" => $Seatbells,
            ":Engine" => $Engine,
            ":PricePerHour" => $PricePerHour,
            ":Image" => $_FILES['im']['name']]);
        
        
    ?>

<?php 
    if (isset($_POST["save"])) {
        print_r($_POST);
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