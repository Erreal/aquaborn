<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">
    <title>Питьевая вода AquaBorn</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <?php require_once 'popup.php'; ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo"><a href="/" target="_self" rel="noopener noreferrer"><img src="/images/logo.png" alt="Aquaborn logo"></a></div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-darken">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#section1">О воде</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#section2">Состав</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#section3">Диспенсеры</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Заказать</a>
                    </li>
                </ul>
            </div>
          </div>
    </nav>
    <section class="water" id="section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="/images/Bottle.webp" alt="aquaborn bottle">
                </div>
                <div class="col-lg-6">
                    <h1>Питьевая вода <br>AquaBorn&trade;</h1> 
                    <p>Вода торговой марки "АкваБорн" добывается из скважины глубиной 197 метров, в экологически чистом районе Подмосковья. 
                        Наша вода полностью соответствует ГОСТ Р 52109-2003. Линия розлива воды выполняет все требования СанПиН 2.1.4.1116-02 для воды высшей категории качества.</p>
                    <p>"АкваБорн" - полностью природная вода, она не проходит дополнительной минерализации и кондиционирования. Минеральный
                         состав воды позволяет рекомендовать ее для ежедневного употребления как взрослым, так и детям.</p>
                </div>
                <div class="col-lg-1 d-none d-lg-block">

                </div>
            </div>
        </div>
    </section>
    <section class="composition" id="section2"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2>Минеральный состав<br>воды AquaBorn&trade;</h2>
                    <p>Кальций (Ca) - 25-80 мг/л <br>
                        Магний (Mg) - 5-50 мг/л <br>
                        Калий (K) - 2-20 мг/л<br>
                        Йод (I) - 0,04-0,06<br>
                        Фторид-ион (F) - 0,6-1,2 мг/л<br>
                        Хлориды (не более) - 150 мг/л<br>
                        Сульфаты (не более) - 150 мг/л<br>
                        Общая минерализация - 200-400 мг/л <br>
                        Жесткость - 1,5-7  экв-мг/л<br>
                        Щелочность - 0,5-6,5 экв-мг/л</p>
                </div>
                <div class="col-lg-5">
                    <img src="/images/glass.webp" alt="Glass with water">
                </div>
            </div>
        </div>
    </section>
    <section class="dispensers" id="section3">
        
        <div class="container">
            <h2>Диспенсеры для розлива воды</h2>
            <?php require_once 'slider.php' ?>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 d-none d-lg-block"></div>
                    <div class="col-md-6 col-lg-5">
                        <p>Производитель:<em> ООО «Город Вод»</em><br>
                           Адрес производства:<em> 141570, Московская область, Солнечногорский р-н, п. Морозовка, дом 1</em><br>
                           Поставщик:<em> ООО «Сталикс», 107497, Москва, ул. Амурская, дом 14</em></p>
                    </div>
                    <div class="col-lg-1 d-none d-lg-block"></div>
                    <div class="col-md-6 col-lg-5">
                        <div class="social-buttons">
                            <a href="#" target="_blank" rel="noopener noreferrer"><span class="icon-vk-brands"></span></a>
                            <a href="#" target="_blank" rel="noopener noreferrer"><span class="icon-facebook-square-brands"></span></a>
                            <a href="#" target="_blank" rel="noopener noreferrer"><span class="icon-instagram-square-brands"></span></a>
                        </div>
                        <div class="contacts">
                            <span class="phone"><span class="icon-phone-square-solid"></span><a href="tel:+74991131395"> +7 (499) 113-13-95</a></span><br>
                            <span class="email"><span class="icon-envelope-square-solid"></span><a href="mail:info@aquaborn.ru"> info@aquaborn.ru</a></span><br>
                            <span class="website"><span class="icon-globe-solid"></span><a href="/"> www.aquaborn.ru</a></span><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Все права защищены &copy; 2020 aquaborn.ru </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div id="up-button"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script  src="http://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/site.js"></script>
</body>
</html>