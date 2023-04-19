<?php
include ("connect.php")
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
                            <div class="logsign">
                                <a class="cd-signin" href="#0" title="Вход/Регистрация">Вход/Регистрация</a>
                            </div>
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
                            <img src=" . $row ["Image"]. " alt='Image 1'>
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

        
          
        <!-- <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/1.png" class="d-block w-100" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/1200/800?random=2" class="d-block w-100" alt="Image 2">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/1200/800?random=3" class="d-block w-100" alt="Image 3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> -->
          
        <section class="price" id="price">
            <div class="container">
                <h2 class="sub-title">Узнать цену и забронировать</h2>
                <div class="price-text">
                    Для уточнения всех деталей бронирования, пожалуйста зарегестрируйтесь.<br> Есть аккаунт? <nav class="main-nav"><ul><li><a class="" href="#0">Войти в аккаунт</a></li></ul></nav>
                </div>
                <form class="price-form" name="form" id="form" onsubmit="return validation()">
                    <input type="text" class="price-input" name="name" id="name" placeholder="Ваше имя">
                    <div class="error" id="name-error"></div>
                    <input type="email" class="price-input" name="email" id="email" placeholder="Ваш e-mail">
                    <div class="error" id="email-error"></div>
                    <input type="text" class="price-input" name="login" id="login" placeholder="Ваш логин">
                    <div class="error" id="login-error"></div>
                    <input type="password" class="price-input" name="password1" id="password1" placeholder="Пароль">
                    <div class="error" id="password1-error"></div>
                    <input type="password" class="price-input" name="password2" id="password2" placeholder="Повторите пароль">
                    <div class="error" id="password2-error"></div>
                    <hr class="dark-hr">
                    <div class="form-checkbox">
                        <input type="checkbox" class="form-checkbox" name="rule-check" id="rule-check">
                        Я согласен с <a href="privacy-policy.html" style="margin-right: 25px">политикой конфиденциальности</a>
                        <div class="error" id="checkbox-error"></div>
                    </div>
                
                    <input type="submit" class="button" id="submit" name="submit" value="Отправить форму">
                </form>

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



    <div class="cd-user-modal"> <!-- все формы на фоне затемнения-->
        <div class="cd-user-modal-container"> <!-- основной контейнер -->
            <ul class="cd-switcher">
                <li><a href="#0">Вход</a></li>
                <li><a href="#0">Регистрация</a></li>
            </ul>
            <div id="cd-login"> <!-- форма входа -->
                <form class="cd-form" action>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">Login</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="Login" name="login" placeholder="Логин">
                        <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Пароль</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="Password" name="password" placeholder="Пароль">
                        <a href="#0" class="hide-password">Скрыть</a>
                        <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Запомнить меня</label>
                    </p>
                    <p class="fieldset">
                        <input class="full-width" type="submit" name="login" value="Войти">
                    </p>
                </form>
            </div> <!-- конец блока с формой входа -->
            <div id="cd-signup"> <!-- блок с формой регистрации -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Имя пользователя</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text"
                               placeholder="Имя пользователя">
                        <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email"
                               placeholder="E-mail">
                        <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Пароль</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="text"
                               placeholder="Пароль">
                        <a href="#0" class="hide-password">Скрыть</a>
                        <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">Я согласен с <a href="privacy-policy.html">Политикой конфиденциальности</a></label>
                    </p>
                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Создать аккаунт">
                    </p>
                </form>
                <!-- <a href="#0" class="cd-close-form">Закрыть</a> -->
            </div> <!-- cd-signup -->
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->
    <script defer src="scripts/script.js"></script>
</body>
</html>

