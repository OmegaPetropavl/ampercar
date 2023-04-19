<html>
    <head>
        <meta charset="UTF-8">
        <title>Вход в административную панель</title>
        <link rel="stylesheet" href="styles/bootstrap1.css">
    </head>
    <body>
        <h2 style="text-align:center; padding-top:100px;">Вход в административную панель</h2>
        <form action="/admin/admin.php" method="POST" style="text-align:center; padding-top:60px; align-items:center; display:flex; flex-direction:column;">
                <input type="text" placeholder="Введите логин" name="Login" style="align-items:center; display:flex; margin-bottom:10px;">
                <input type="password" placeholder="Введите пароль" name="Password" style="align-items:center; display:flex; margin-bottom:20px;">
                <input type="submit" class="btn btn-primary" value="Войти" style="align-items:center; display:flex;">
        </form>
    </body>
</html>
