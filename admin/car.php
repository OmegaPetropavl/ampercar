<?php session_start(); ?>
<?php require_once '../connect.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Административная панель</title>
        <link rel="stylesheet" href="styles/bootstrap1.css">
    </head>
    <body>
        <div style="text-align: center;">
        <h1>Редактирование информации об автомобилях</h1>
        <?php  if (!empty($_SESSION['Name'])) : ?>
            <?php echo "Добро пожаловать, " . $_SESSION["Name"]?>
            <br>
            <a href="/logout.php">Выйти</a>
            <a href="/admin.php">Главная страница</a>
            <br>
            <br>
            <br>
            <br>
            <?php 
            $sql = $conn -> prepare ("SELECT * FROM Car");
            $sql -> execute();
            $results = $sql -> fetchAll(PDO::FETCH_OBJ); // fetchAll() method retrieves all the rows
            foreach ($results as $res) {
                    echo "<form action='/admin/car/caredit.php' method='post' enctype='multipart/form-data'>
                        <label for='Car_Name'>". $res->Car_ID ."</label> <br>
                        <input type='hidden' name='Car_ID' value='". $res->Car_ID ."'>
                        <label for='Car_Name'>Название автомобиля:</label>
                        <input type='text' id='Car_Name' name='Car_Name' value='". $res->Car_Name ."'><br>
                        
                        <label for='Gear'>Привод:</label>
                        <input type='text' id='Gear' name='Gear' value='". $res->Gear ."'><br>
                        
                        <label for='Seatbells'>Количество ремней безопасности:</label>
                        <input type='text' id='Seatbells' name='Seatbells' value='". $res->Seatbells ."'><br>
                        
                        <label for='Engine'>Двигатель:</label>
                        <input type='text' id='Engine' name='Engine' value='". $res->Engine ."'><br>
                        
                        <label for='PricePerHour'>Цена в час:</label>
                        <input type='text' id='PricePerHour' name='PricePerHour' value='". $res->PricePerHour ."'><br>
                        
                        <label for='Image'>Изображение:</label>
                        <input type='text' id='Image' name='Image' value='". $res->Image ."'><br>
                        <p>
                        <input type='file'  name='im' value='". $res->Image ."'><br>
                        </p>
                        <input type='submit' name='save' value='Сохранить'> 
                    </form>
                        <img src='/images/". $res ->Image ."'width='300'>";
        } ?>
            <html>
            <form action='/admin/car/carinsert.php' method='post' enctype='multipart/form-data'>
                <h2> Добавление авто</h2>
                <label for='Car_Name'>Название автомобиля:</label>
                <input type='text' id='Car_Name' name='Car_Name' ><br>
                
                <label for='Gear'>Привод:</label>
                <input type='text' id='Gear' name='Gear' ><br>
                
                <label for='Seatbells'>Кол-тво мест:</label>
                <input type='text' id='Seatbells' name='Seatbells' ><br>
                
                <label for='Engine'>Двигатель:</label>
                <input type='text' id='Engine' name='Engine' ><br>
                
                <label for='PricePerHour'>Цена в час:</label>
                <input type='text' id='PricePerHour' name='PricePerHour' ><br>
                
                <label for='Image'>Изображение:</label>
                <input type='text' id='Image' name='Image' ><br>
                <p>
                <input type='file'  name='im' ><br>
                </p>
                <input type='submit' name='save' value='Сохранить'> 
            </form>
        </html>   
    
            
            
        <?php else: 
        echo '<h2>Restricted area, get away from here!</h2>';
        echo '<a href="/logout.php">Выйти</a>';
        ?>
        <?php endif ?>
        </div>
    </body>
</html>