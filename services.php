<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Melan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">Домой</a></li>
                                        <li><a href="about.html">О нас</a></li>
                                        <li><a href="services.php">Услуги</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                <a  href="login.php">Войти</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Услуги</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <span>Предоставляемые услуги</span>
                        <h3>Интернет и цифровые сервисы</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                        </div>
                        <h3>Название тарифа:Игровой</h3>
                        <p>Скорость:800 Мб/сек</p>
                        <p>Стоимость (в мес.):990₽</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                        </div>
                        <h3>Название тарифа:Домашний интернет</h3>
                        <p>Скорость:200 Мб/сек</p>
                        <p>Стоимость (в мес.):200₽</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                        </div>
                        <h3>Название тарифа:Беспонтовый</h3>
                        <p>Скорость:300 Мб/сек</p>
                        <p>Стоимость (в мес.):300₽</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->
    <div class="site-section">
        <div class="container">
  
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-10">
              <div class="heading-39101 mb-5">
                <h3>Оставить заявку:</h3>
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-lg-8 mb-5" >
              <form action="email.php" method="post">
              <div class="form-group">
                    <label for="exampleFormControlInput3">Введите ФИО</label>
                    <input name="name" type='text' class="form-control">
                </div>
                <div class="form-group">

                    <?php $conn = new mysqli("localhost", "root", "", "practice");

                    $sql = "SELECT * FROM lichnoe";
                    $sql2 = "SELECT * FROM tarifs";
                    $result = $conn->query($sql);
                    $result2 = $conn->query($sql2);

                    echo "<div class='form-group'>";
                    echo "<label for='exampleFormControlInput3'>Выберите тариф</label>";
                    echo "<select name='tarif' class='form-control'><option>Выберите...</option>";
                    while ($row = mysqli_fetch_array($result2)) {
                        echo "<option>" . $row['nametarif'] . "</option>";
                    }
                    echo "</select>";
                    echo "</div>";
                    ?>

                <div class="form-group">
                    <label for="exampleFormControlInput3">Номер телефона</label>
                    <input id="phone" name="phone" type='text' onkeypress='validate(event)' class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Адрес подключения</label>
                    <input id="time" name="address" type='text' class="form-control" placeholder="г Санкт-Петербург, пр Большевиков, д 22">
                </div>
                  <div class="col-md-6 mr-auto">
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Отправить">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-4 ml-auto">
            </div>
          </div>
          
        </div>
      </div>


<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="menu_links">
                        <ul>
                            </style>
                            <li><a href="#">© 2022 ПАО «Ростелеком»<br>
                                Все права защищены</a></li>
                            <li><a href="#"><br>ПАО «Ростелеком» — крупнейший в России провайдер<br>
                                цифровых услуг и решений. Официальный<br>
                                корпоративный информационный сайт ПАО «Ростелеком».</a></li>
                            <li><a href="#"><h3><br>Ростелеком</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>