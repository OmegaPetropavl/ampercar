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
        <h1>Информация о договорах</h1>
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
            $sql4 = $conn -> prepare ("SELECT * FROM Rent");
            $sql4 -> execute();
            $results4 = $sql4 -> fetchAll(PDO::FETCH_OBJ); // fetchAll() method retrieves all the rows ?>
            <table>
    <thead>
        <tr>
            
            <th>ID аренды</th>
            <th>ID машины</th>
            <th>ID клиента</th>
            <th>Начало аренды</th>
            <th>Кол-тво часов</th>
            <th>Итоговая сумма</th>
            <th>Статус заявки</th>
            <th>Действие</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($results4 as $res4) { ?>

            <tr> <form action='/admin/rent/rentedit.php' method='post' enctype='multipart/form-data'>
                <td><input readonly type='text' name='Rent_ID' value='<?php echo $res4->Rent_ID ?>'></td>
                <td><input readonly type='text' name='Car_ID' value='<?php echo $res4->Car_ID ?>'></td>
                <td><input readonly type='text' name='C_ID' value='<?php echo $res4->C_ID ?>'></td>
                <td><input readonly type='text' name='Rent_Begin' value='<?php echo $res4->Rent_Begin ?>'></td>
                <td><input readonly type='text' name='Hour' value='<?php echo $res4->Hour ?>'></td>
                <td><input readonly type='text' name='Itog' value='<?php echo $res4->Itog ?>'></td>
                <td><input type='text' name='Status' value='<?php echo $res4->Status ?>'></td>
                <td><input type='submit' name='save' value='Сохранить'> </td>
            </form>
            </tr>
        <?php } ?>
    </tbody>
</table>
                        
        <?php else: 
        echo '<h2>Restricted area, get away from here!</h2>';
        echo '<a href="/logout.php">Выйти</a>';
        ?>
        <?php endif ?>
        </div>
    </body>
</html>