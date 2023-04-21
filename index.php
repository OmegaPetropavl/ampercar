<?php
include ("connect.php");
session_start();
if(isset($_SESSION['Login'])) {
    header("Location: /welcome.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="programmer" content="Данияр Валиев">
    <meta name="description" content="Ampercar.kz company official website">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Аренда автомобилей и не только!</title>
    <link rel="stylesheet" href="styles/style.css" id="light-theme">
    <link rel="stylesheet" href="styles/bootstrap1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://kit.fontawesome.com/8bbcdc20af.js" crossorigin="anonymous"></script>
    <script src="scripts/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/script.js"></script>

	
  	
</head>
<body>

    

    <header class="header" id="header">
        <div class="container">
          <nav class="navbar navbar-expand-xxxxl navbar-light align-content-sm-between">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="logo">
                <a class="navbar-brand" href="#"><img id="logo-first" src="images/logo1.png" alt="Logo"></a>
            </div>
            <div class="text-end">
                <button class="btn btn-outline-secondary" id="theme-toggle">Сменить тему</button>
            </div> 
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#cars">Автомобили</a>
                </li>
                <li class="nav-item" id="bron">
                  <a class="nav-link" href="#price">Бронирование авто</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Uslugi.php">Услуги</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/login.php">Вход в админку</a>
                </li>
                

                <li class="nav-item">
                    <nav class="main-nav">
                        <ul>
                            <li>
                            <button id="loginBtn">Войти</button>
                            </li>    
                        </ul>
                    </nav>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>



    

    <main id="main">
        <section class="main">
            <div class="container-xxl">
                <div class="main-info">
                    <h1 class="main-title">Аренда авто</h1>
                    <div class="main-text">В нашем клубе имеется солидный автопарк — от достаточно
                        распространенных бюджетных машин до настоящего бизнес-класса и эксклюзива. Воспользуйтесь уникальной
                        возможностью побывать за рулем настоящей легенды и узнать, на что она способна за пределами гоночной
                        трассы!
                    </div>
                    <div class="main-action">
                        <button class="button" id="main-action">Посмотреть автомобили</button>
                    </div>
                </div>
            </div>
        </section>

        


        <section class="car" id="cars">
            <div class="container-xxl">
                <h2 class="sub-title">Наш автопарк</h2>
                <div class="car-items">
                <?php
                while ($row = $result -> fetch()) {
                ECHO "<div class='car-item'>
                        <div class='car-item-image'>
                            <img src='admin/car/img/" . $row ["Image"]. "' alt='Image 1'>
                        </div>
                        <div class='car-item-title'>". $row ["Car_Name"] ."</div>
                        <div class='car-item-info'>
                            <div class='car-item-point'>
                                <img src='images/gear.png' alt='Gear'>
                                <div>Привод</div>
                                <div>" . $row["Gear"]. "</div>
                            </div>
                            <div class='car-item-point'>
                                <img src='images/wheel.png' alt='Wheel'>
                                <div>Двигатель</div>
                                <div>" . $row["Engine"]. " л.</div>
                            </div>
                            <div class='car-item-point'>
                                <img src='images/belt.png' alt='Belt'>
                                <div>Кол-во мест</div>
                                <div>" . $row["Seatbells"]. "</div>
                            </div>
                        </div>
                        <div class='car-item-price'>
                            <h3 class='price'>От " . $row["PricePerHour"]. "тг/час</h3>
                        </div>
                        <div class='car-item-action'>
                            <button class='button car-button'>Забронировать</button>
                        </div>
                    </div>
                ";}
                ?>
                </div>
            </div>
        </section>


        <div class="iframe">
            <iframe width="1217" height="685" src="https://www.youtube.com/embed/ZQjxqVMtP_0"
                    title="LAMBORGHINI URUS 4.0 V8 BiTurbo 650HP POV Test Drive by AutoTopNL" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
        </div>

        
          
        
          
        <section class="price" id="price">
            <div class="container">
                <h2 class="sub-title">Узнать цену и забронировать</h2>
                <div class="price-text">
                    Для уточнения всех деталей бронирования, пожалуйста зарегестрируйтесь.<br> Есть аккаунт? <nav class="main-nav"><ul><li><a class="" href="#0">Войти в аккаунт</a></li></ul></nav>
                </div>
                <form class="price-form" action='' name="form" id="form"  method="post" onsubmit="return validation()">
                    <input type="text" class="price-input" name="FIO" id="name" placeholder="Ваше ФИО">
                    <div class="error" id="name-error"></div>
                    <input type="email" class="price-input" name="Email" id="email" placeholder="Ваш e-mail">
                    <div class="error" id="email-error"></div>
                    <input type="text" class="price-input" name="Login" id="login" placeholder="Ваш логин">
                    <div class="error" id="login-error"></div>
                    <input type="text" class="price-input" name="Phone" id="login" placeholder="Ваш телефон">
                    <div class="error" id="login-error"></div>
                    <input type="password" class="price-input" name="Password" id="password1" placeholder="Пароль">
                    <div class="error" id="password1-error"></div>
                    <input type="password" class="price-input" name="password2" id="password2" placeholder="Повторите пароль">
                    <div class="error" id="password2-error"></div>
                    <hr class="dark-hr">
                    <div class="form-checkbox">
                        <input type="checkbox" class="form-checkbox" name="rule-check" id="rule-check">
                        Я согласен с <a href="privacy-policy.html" style="margin-right: 25px">политикой конфиденциальности</a>
                        <div class="error" id="checkbox-error"></div>
                    </div>
                    <input type="submit" class="button" id="submit" name="register" value="Отправить форму">
                </form>
                <?php if (isset($_POST["register"])) {
                    $FIO= $_POST["FIO"];
                    $Email= $_POST["Email"];
                    $Login= $_POST["Login"];
                    $Phone= $_POST["Phone"];
                    $Password= $_POST["Password"];
                    $sql = "INSERT INTO `Client` (`FIO`, `Email`, `Login`, `Password`, `Phone`) VALUES (:FIO, :Email, :Login, :Password, :Phone)";
                    $res = $conn->prepare($sql);
                    $res->bindParam(':FIO', $FIO);
                    $res->bindParam(':Email', $Email);
                    $res->bindParam(':Login', $Login);
                    $res->bindParam(':Password', $Password);
                    $res->bindParam(':Phone', $Phone);
                    $res->execute();
                    // создание сессии
                    session_start();
                    $_SESSION['Login'] = $Login;
                    header ('Location:/welcome.php');
                    exit();
                }
                    
                    
                ?>

                <img src="images/rolls.png" alt="Rolls" class="price-image">
            </div>
        </section>

        
        <section id="maps">
            <h2 class="sub-title" id="#maps-title">Мы находимся вот тут</h2>
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aac2c20481bedd43e3d5bf595fa52713e124e12afadfc283ca0a0e9ca609a4c25&amp;width=792&amp;height=586&amp;lang=ru_RU&amp;scroll=true"></script>
        </section>    
    </main>
    <footer class="footer" id="footer">
        <div class="container-xxl">
            <div class="logo">
                <img id="logo-second" src="/images/logo1.png" alt="Logo">
            </div>
            <div class="menu">
                <a href="agreement.php" style="margin-right: 25px">Пользовательское соглашение</a>
                <a href="privacy-policy.php" style="margin-right: 25px">Политика конфиденциальности</a>
                <a href="contract.php" style="margin-right: 25px">Договор</a>
            </div>
            <div class="rights">© 2023 Ampercar.kz</div>
        </div>
    </footer>



    

    <div id="loginModal" class="modal">
    <!-- Контент модального окна -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Вход</h2>
        <form method="post" action="">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="Login" required>
            <br>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="Password" required>
            <br>
            <input type="submit" name="loginka" value="Войти">
        </form>
    </div>
</div>

<!-- Стили модального окна -->
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 30%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    h2 {
        text-align: center;
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    

    
</style>

    <!-- Скрипт для открытия и закрытия модального окна -->
    <script>
        var modal = document.getElementById("loginModal");
        var btn = document.getElementById("loginBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
        modal.style.display = "block";
        }

        span.onclick = function() {
        modal.style.display = "none";
        }

        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
        
    <?php
        if (isset($_POST["loginka"])) {
            $Login= $_POST["Login"];
            $Password= $_POST["Password"];
            $sql = "SELECT * FROM `Client` WHERE `Login` = :Login AND `Password` = :Password";
            $res = $conn->prepare($sql);
            $res->bindParam(':Login', $Login);
            $res->bindParam(':Password', $Password);
            $res->execute();
            $count = $res->rowCount();
            if ($count == 1) {
                $_SESSION["Login"] = $Login;
                header('Location: /welcome.php');
                echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/welcome.php">';
                exit();
            } else {
                echo "<script>alert('Неправильный логин или пароль');</script>";
            }
        }
    ?>
    <script defer src="scripts/script.js"></script>
</body>
</html>

