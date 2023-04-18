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
    <script src="scripts/main.js"></script>
    
     <!-- CSS reset -->
	
  	
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
                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/1.png" alt="Image 1">
                        </div>
                        <div class="car-item-title">Lamborghini Huracan Spyder</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Полный</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>5.2 л.с</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>2</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 7000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>

                    

                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/2.png" alt="Image 2">
                        </div>
                        <div class="car-item-title">Chevrolet Corvette</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Полный</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>6.2 л.</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>2</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 5000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>

                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/3.png" alt="Image 3">
                        </div>
                        <div class="car-item-title">Ferrari California</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Полный</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>3.9 л.</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>4</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 6000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>

                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/4.png" alt="Image 4">
                        </div>
                        <div class="car-item-title">Lamborghini Urus</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Полный</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>4.0 л.</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>5</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 10000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>

                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/5.png" alt="Image 5">
                        </div>
                        <div class="car-item-title">Audi R8</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Полный</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>5.2 л.</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>2</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 9000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>

                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/6.png" alt="Image 6">
                        </div>
                        <div class="car-item-title">Chevrolet Camaro</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Полный</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>2.0 л.</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>4</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 5000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>

                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/touareg.png" alt="Image 7">
                        </div>
                        <div class="car-item-title">Volkswagen Touareg</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Полный</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>4.2 л.</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>5</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 7000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>

                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/ChevyPrisma.png" alt="Image 7">
                        </div>
                        <div class="car-item-title">Chevrolet Prisma</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Передний</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>2.0 л.</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>5</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 4000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>
                

                    <div class="car-item">
                        <div class="car-item-image">
                            <img src="images/mcq.png" alt="Image 8">
                        </div>
                        <div class="car-item-title">Lightning McQueen</div>
                        <div class="car-item-info">
                            <div class="car-item-point">
                                <img src="images/gear.png" alt="Gear">
                                <div>Привод</div>
                                <div>Задний</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/wheel.png" alt="Wheel">
                                <div>Двигатель</div>
                                <div>6.0 л.</div>
                            </div>
                            <div class="car-item-point">
                                <img src="images/belt.png" alt="Belt">
                                <div>Кол-во мест</div>
                                <div>2</div>
                            </div>
                        </div>
                        <div class="car-item-price">
                            <h3 class="price">От 20000тг/час</h3>
                        </div>
                        <div class="car-item-action">
                            <button class="button car-button">Забронировать</button>
                        </div>
                    </div>
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
                    <div class="radio-form">
                        <input type="radio" class="text-radio"  name="group1" value="Male"> Мужчина<br>
                        <input type="radio" name="group1" value="Female" checked> Женщина<br>
                    </div>
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

        <section id="reviews">
            <div class="reviews-title"><h1 class="sub-title">Отзывы о нас</h1></div>
                <div class="cd-testimonials-wrapper cd-container">
            <!-- cd-testimonials -->
    
        <a href="#0" class="cd-see-all">Читать все</a>
    <div class="flex-viewport" style="overflow: hidden; position: relative; height: 0px;"><ul class="cd-testimonials" style="width: 1200%; transition-duration: 0s; transform: translate3d(-2004px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 668px; float: left; display: block; opacity: 1; position: relative;">
                <p>Компания предоставляет отличные автомобили на прокат. Цены приличные. Рекомендую!</p>				
                <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-11.jpg" alt="Author image" draggable="false">
                        <ul class="cd-author-info">
                            <li>Галина</li>
                            <li>администратор Усадьбы  <a href="http://volga-skazka.ru" target="_blank">«Сказка»</a></li>
                        </ul>
                </div> <!-- cd-author -->
                </li>
            <li class="" style="width: 668px; float: left; display: block; opacity: 1; position: relative;">
                <p>Спасибо за высокий уровень обслуживания!</p>
                <div class="cd-author">
                    <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-1.jpg" alt="Author image" draggable="false">
                    <ul class="cd-author-info">
                        <li>Баринов Игорь</li>
                        
                    </ul>
                </div>
            </li>
    
            <li style="width: 668px; float: left; display: block; opacity: 1; position: relative;" class="">
                <p>Studio Design является партнером компании Sprinthost с 2011 года. За время сотрудничества мы убедились, что Сергей по-настоящему заботится о сайтах клиентов Studio Design, размещенных на нашем хостинге, и всегда прикладывает максимум усилий, чтобы справиться с любыми сложностями, возникающими в процессе сопровождения сайтов. Мы благодарны Сергею за активное взаимодействие с нашей командой, за внимательное отношение к нашим рекомендациям, и очень рады, что Сергей остается нашим партнером на протяжении такого значительного срока. Уверена, сотрудничество между нашими компаниями будет активно развиваться, оставаясь таким же позитивным, как и сейчас.</p>
                <div class="cd-author">
                    <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-2.jpg" alt="Author image" draggable="false">
                    <ul class="cd-author-info">
                        <li>Пугач Галина</li>
                        <li>Менеджер по маркетингу ООО <a href="http://sprinthost.ru" target="_blank">«Спринтхост»</a></li>
                    </ul>
                </div>
            </li>
    
            <li style="width: 668px; float: left; display: block; opacity: 1; position: relative;" class="flex-active-slide">
                <p>Оперативно и внимательно Сергей подходит к решению любых вопросов касательно функционирования сайта. Лаконичность сайта и легкость в использовании позволяют работать с ним в удовольствие! А результат всегда радует. Спасибо за отличную работу!</p>
                <div class="cd-author">
                    <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-3.jpg" alt="Author image" draggable="false">
                    <ul class="cd-author-info">
                        <li>Анастасия Финогенова</li>
                        <li>Модератор сайта агентства маркетинговых коммуникаций <a href="http://http://btl64.ru/" target="_blank">«Ромашка»</a></li>
                    </ul>
                </div>
            </li>
            
            <li style="width: 668px; float: left; display: block; opacity: 1; position: relative;">
                <p>Долго не решались делать собственный сайт, но Сергей убедил нас в необходимости этого шага. А самое главное, он сумел почувствовать специфику нашей компании и передать это в дизайне и организации сайта. Сайт Усадьбы "Сказка" родился сказочно быстро! Мы продолжаем сотрудничество и в настоящее время. Команда студии "Studio Design" умеет работать оперативно, творчески, мыслит позитивно и всегда идет в ногу со временем. Доверяя администрирование сайта студии, мы знаем, что всегда можем рассчитывать не только на техническую поддержку и оптимизацию, но и на то, что все новинки, появляющиеся  на просторах Интернета в области сайтостроения, обязательно воплотятся и в нашем совместном проекте.  Пусть будет больше проектов хороших и разных! Удачи!</p>				
                <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-11.jpg" alt="Author image" draggable="false">
                        <ul class="cd-author-info">
                            <li>Галина Киричек</li>
                            <li>администратор Усадьбы  <a href="http://volga-skazka.ru" target="_blank">«Сказка»</a></li>
                        </ul>
                </div> <!-- cd-author -->
                </li>
            
        <li class="clone" aria-hidden="true" style="width: 668px; float: left; display: block; opacity: 1; position: relative;">
                <p>Спасибо за высокий профессионализм в создании сайта загородного клуба «Атмосфера». Первый сайта клуба был неудачный и откровенно слабый. Деньги были потрачены зря. По совету друзей обратился к Сергею. Остался доволен его работой. Достаточно недорого за такой уровень сайта и очень быстро. Что хочу отметить особо - внимание Сергея к мелочам. Наши клиенты, так же, высоко оценили наш сайт. Спасибо, Сергей!</p>
                <div class="cd-author">
                    <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-1.jpg" alt="Author image" draggable="false">
                    <ul class="cd-author-info">
                        <li>Баринов Игорь</li>
                        <li>Руководитель загородного клуба <a href="http://atmosfera64.ru" target="_blank">«Атмосфера»</a></li>
                    </ul>
                </div>
            </li></ul></div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul>
            </div> <!-- cd-testimonials-wrapper -->
    
    <div class="cd-testimonials-all">
        <div class="cd-testimonials-all-wrapper">
            <ul style="position: relative; height: 2537px;">
                <li class="cd-testimonials-item" style="position: absolute; left: 0px; top: 0px;">
                    <p>Спасибо за высокий профессионализм в создании сайта загородного клуба «Атмосфера». Первый сайта клуба был неудачный и откровенно слабый. Деньги были потрачены зря. По совету друзей обратился к Сергею. Остался доволен его работой. Достаточно недорого за такой уровень сайта и очень быстро. Что хочу отметить особо - внимание Сергея к мелочам. Наши клиенты, так же, высоко оценили наш сайт. Спасибо, Сергей!</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-1.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Баринов Игорь</li>
                            <li>Руководитель загородного клуба <a href="http://atmosfera64.ru" target="_blank">«Атмосфера»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 389px; top: 0px;">
                    <p>Studio Design является партнером компании Sprinthost с 2011 года. За время сотрудничества мы убедились, что Сергей по-настоящему заботится о сайтах клиентов Studio Design, размещенных на нашем хостинге, и всегда прикладывает максимум усилий, чтобы справиться с любыми сложностями, возникающими в процессе сопровождения сайтов. Мы благодарны Сергею за активное взаимодействие с нашей командой, за внимательное отношение к нашим рекомендациям, и очень рады, что Сергей остается нашим партнером на протяжении такого значительного срока. Уверена, сотрудничество между нашими компаниями будет активно развиваться, оставаясь таким же позитивным, как и сейчас.</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-2.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Пугач Галина</li>
                            <li>Менеджер по маркетингу ООО <a href="http://sprinthost.ru" target="_blank">«Спринтхост»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 779px; top: 0px;">
                    <p>Оперативно и внимательно Сергей подходит к решению любых вопросов касательно функционирования сайта. Лаконичность сайта и легкость в использовании позволяют работать с ним в удовольствие! А результат всегда радует. Спасибо за отличную работу!</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-3.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Анастасия Финогенова</li>
                            <li>Модератор сайта агентства маркетинговых коммуникаций <a href="http://http://btl64.ru/" target="_blank">«Ромашка»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 779px; top: 434px;">
                    <p>Знаем Сергея, владельца компании «Studio Design» уже очень давно, с каждым новым сайтом их работы нравились все больше и больше! Когда возникла необходимость сделать сайт, перед нами даже не стоял вопрос, кому доверится! Спасибо «Studio Design» за нестандартные идеи, дизайн, скорость и качество выполнения работ! В ближайшее время мы запускаем еще 2 направления, одно из которых интернет магазин и конечно их будет делать только Сергей! Спасибо! Успехов и развития!</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-4.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Константин Николаенко</li>
                            <li>Руководитель проекта <a href="http://http://bizneslekar.ru/" target="_blank">«Бизнес-Лекарь»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 0px; top: 525px;">
                    <p>Мы не долго думали кому доверить изготовление нашего сайта www.decor-love.ru, это уже второй сайт который мы заказали у этой компании. Считаем, что доверившись «Studio Design», мы не ошиблись: стильный дизайн, а самое главное на сегодняшний день - это адаптивность сайта под все мобильные устройства. Это значит о нас знают, аудитория наших клиентов значительно расширилась, так как основная масса клиентов сегодня пользуются планшетами и телефонами для поиска необходимой услуги. Спасибо! Успехов и процветания!</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-5.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Лёвин Евгений</li>
                            <li>Технический директор  <a href="http://decor-love.ru" target="_blank">«Студия свадебного дизайна Love Decor»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 389px; top: 679px;">
                    <p>Как приятно работать с думающими, ответственными людьми. Ощущение что ему больше надо чем нам. Когда пришла работать в новую компанию, о новом сайте были одни разговоры. Причем долгое время. При обращении к Сергею вопрос решился мгновенно. Причем ему важно прежде дело, без денег готов все сделать. Получилось. Нравится. Над недостатками работаем.Хороший инструмент продажи. В продвижении сайта нет предела совершенства. А? ЖДУ ПРЕДЛОЖЕНИЙ!</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-6.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Азоркина Маргарита Николаевна</li>
                            <li>Генеральный директор Санаторий ООО <a href="http://sp-izumrud.ru" target="_blank">«Изумруд»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 779px; top: 1003px;">
                    <p>В наше время очень много компаний, которые занимаются разработкой сайтов, но толковых из них единицы. Недавно решили обновить свой сайт. Обратились к Сергею, о чем ни чуть не жалеем. Буквально за несколько дней был создан дизайн сайта, который координально отличался от предыдущего. Сайт стал современым, быстрым и простым в использовании. Страницы открываются достаточно быстро, навигация четкая и понятная для посетителей. Он приобрел индивидуальность. Хотим сказать огромное спасибо за проделанную работу. Сергей открыл для нас новый мир интернета. К разработке сайта он подошел со всей душой, окунулся в нее с головой. Если вам необходим отличный сайт, то обращайтесь к Сергею. Он точно сделаем из вашего сайта"конфетку"!</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-7.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Зайцева Екатерина</li>
                            <li>Директор агентства маркетинговых коммуникаций <a href="http://btl64.ru" target="_blank">«Ромашка»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 0px; top: 1135px;">
                    <p>Решил для разработки сайта найти качественного исполнителя и не ошибся. Так как в прямом смысле все работы Сергея очень понравились, отдал и дизайн, и разработку структуры сайта, и раскрутку в его руки. Первый предложенный дизайн был стильный и привлекательный, но, после заполнения сайта большим количеством фото, стало не хватать ярких красок. Поэтому дизайн Сергей за несколько дней переделал в более цветное исполнение и показал как менять элементы дизайна своими силами. В целом заказ быстро и качественно сделан, дальнейшее заполнение сайта обновленной информацией происходит очень легко. С уважением отношусь к людям профессионально выполняющим поставленную задачу. Спасибо за хорошую работу и тех. поддержку.</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-8.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Иванов Олег</li>
                            <li>Директор рекламного агентства <a href="http://www.kipras.info" target="_blank">«Кипрас»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 389px; top: 1245px;">
                    <p>Спасибо огромное администратору сайта <a style="color:#fff;" href="http://www.sp-izumrud.ru/otzyvy_klientov/morozova_anna/" target="_blank">"Изумруд"</a> Сергею за размещение на сайте наших с дочкой фотографий празднования Нового года! Хочется отметить грамотную и профессиональную работу Сергея. Современный, оригинальный, удобный сайт "Изумруда" позволяет нам - клиентам, с легкостью узнать информацию, которая нас интересует и полностью отвечает всем нашим запросам. Желаю Вам процветания и творческих успехов!!!</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-9.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Анна Морозова</li>
                            <li>Инженер по промышленной безопасности ООО «Инженерные системы»</li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 779px; top: 1767px;">
                    <p>Портал «Православная Пермь» получился светлым, в небесных тонах Пресвятой Богородицы. Дизайн придумывался и обсуждался достаточно долго, но после принятия решения рождение сайта или, говоря техническим языком конструирование, было сделано очень быстро. UMI.CMS работает без сбоев, материалы и фотографии быстро появляются в поисковиках. Сергей никогда не отказывает в консультациях и помощи. Желаю Божией помощи во всех начинаниях.</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-10.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Священник Вячеслав Зуев</li>
                            <li>Главный редактор газеты <a href="http://pravperm.ru" target="_blank">«Православная Пермь»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 389px; top: 1789px;">
                    <p>Долго не решались делать собственный сайт, но Сергей убедил нас в необходимости этого шага. А самое главное, он сумел почувствовать специфику нашей компании и передать это в дизайне и организации сайта. Сайт Усадьбы "Сказка" родился сказочно быстро! Мы продолжаем сотрудничество и в настоящее время. Команда студии "Studio Design" умеет работать оперативно, творчески, мыслит позитивно и всегда идет в ногу со временем. Доверяя администрирование сайта студии, мы знаем, что всегда можем рассчитывать не только на техническую поддержку и оптимизацию, но и на то, что все новинки, появляющиеся  на просторах Интернета в области сайтостроения, обязательно воплотятся и в нашем совместном проекте.  Пусть будет больше проектов хороших и разных! Удачи!</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-11.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Галина Киричек</li>
                            <li>администратор Усадьбы  <a href="http://volga-skazka.ru" target="_blank">«Сказка»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
    
                <li class="cd-testimonials-item" style="position: absolute; left: 0px; top: 1880px;">
                    <p>Коллектив студи видео производства «Взгляд» благодарит «Studio Design» за качественную и быструю работу по изготовлению нашего сайта www.video64.ru . Сайт выполнен аккуратно и максимально удобно для наших клиентов. Надеемся на дальнейшее плодотворное двухстороннее сотрудничество наших фирм. Спасибо за профессионализм.</p>
                    
                    <div class="cd-author">
                        <img src="https://s-sd.ru/files/slider-reviews-customer-site-to-css3/img/avatar-12.jpg" alt="Author image">
                        <ul class="cd-author-info">
                            <li>Андрей Мазуревский</li>
                            <li>Руководитель студии видео производства <a href="http://s-sd.ru/files/animated404/ru.htm" target="_blank">«Взгляд»</a></li>
                        </ul>
                    </div> <!-- cd-author -->
                </li>
            </ul>
        </div>	<!-- cd-testimonials-all-wrapper -->
    
        <a href="#0" class="close-btn">Close</a>
    </div> <!-- cd-testimonials-all -->
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
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email"
                               placeholder="E-mail">
                        <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                    </p>
                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Пароль</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="text"
                               placeholder="Пароль">
                        <a href="#0" class="hide-password">Скрыть</a>
                        <span class="cd-error-message">Здесь сообщение об ошибке!</span>
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Запомнить меня</label>
                    </p>
                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Войти">
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
