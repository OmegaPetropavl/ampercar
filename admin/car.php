<?php session_start(); ?>
<?php require_once '../connect.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Адмнистративная панель</title>
        <link rel="stylesheet" href="styles/bootstrap1.css">
    </head>
    <body>
        <div style="text-align: center;">
        <h1>Редактирование информации об автомобилях</h1>
        <?php  if (!empty($_SESSION['Name'])) : ?>
            <?php echo "Добро пожаловать, " . $_SESSION["Name"]?>
            <br>
            <a href="/logout.php">Выйти</a>
            <br>
            <?php 
            $sql = $conn -> prepare ("SELECT * FROM Car");
            $sql -> execute();
            $res= $sql -> fetch(PDO::FETCH_OBJ);
            $id = $res->Car_ID;
            print($id);
            print_r($res);
            ?> 
            <?php while ($row =$res -> fetch()) {
            ECHO "<form action='' method='post'>
                <input type='text' name='Name' value='<?php echo $res-> Car_Name ?>'>
                <input type='text' name='Gear' value='<?php echo $res-> Gear ?>'>
                <input type='text' name='Seatbells' value='<?php echo $res-> Seatbells ?>'>
                <input type='text' name='Engine' value='<?php echo $res-> Engine ?>'>
                <input type='text' name='PricePerHour' value='<?php echo $res-> PricePerHour ?>'>
                <input type='text' name='Image' value='<?php echo $res-> Image ?>'>
                <input type='submit' value='Сохранить'>
            </form>";
            }  ?>
            <?php 
            $Name = $_POST["Name"];
            $Gear = $_POST["Gear"];
            $Seatbells = $_POST["Seatbells"];
            $Engine = $_POST["Engine"];
            $PricePerHour = $_POST["PricePerHour"];
            $Image = $_POST["Image"];
            $row = "UPDATE Car SET  Name:"
            ?>
            
        <?php else: 
        echo '<h2>Restricted area, get away from here!</h2>';
        echo '<a href="/logout.php">Выйти</a>';
        ?>
        <?php endif ?>
        </div>
    </body>
</html>