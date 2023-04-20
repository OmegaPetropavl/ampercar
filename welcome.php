<?php
include ("connect.php");
session_start();
if (!isset($_SESSION["Login"])) {
    header("Location: /login.php"); // Перенаправляем на страницу авторизации, если нет сессии
    exit;
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
                            <li><form method="post">
                                <input type="submit" name="logout" value="Выйти">
                            </form></li>
                            </li>   
                            <?php session_start();
                            if (isset($_POST['logout'])) {
                                session_unset(); // удаляем переменные сессии
                                session_destroy(); // удаляем сессию
                                header('Location: /index.php'); // перенаправляем на страницу входа
                            }
                            ?> 
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



    
    <script defer src="scripts/script.js"></script>
</body>
</html>

