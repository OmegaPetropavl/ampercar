<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Адмнистративная панель</title>
        <link rel="stylesheet" href="styles/bootstrap1.css">
    </head>
    <body>
        <div style="text-align: center;">
        <?php  if (!empty($_SESSION['Name'])) : ?>
            <?php echo "Добро пожаловать, " . $_SESSION["Name"]?>
            <br>
            <a href="/logout.php">Выйти</a>
        <?php else: 
        echo '<h2>Restricted area, get away from here!</h2>';
        echo '<a href="/logout.php">Выйти</a>';
        ?>
        <?php endif ?>
        </div>
    </body>
</html>
