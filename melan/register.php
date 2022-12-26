<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>МДС</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link type="image/x-icon" href="images/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="images/favicon.ico" rel="icon">
</head>
</head>
<body>
<div class="site-navbar-wrap">
          <div class="site-navbar-top">
            
          </div>
          <div class="site-navbar">
            <div class="container py-1">
              <div class="row align-items-center">
                <div class="col-2">
                  <h1 class="mb-0 site-logo"><a href="index.html"><img src="images/logo.png" width="160" height="50"></a></h1>
                </div>
                <div class="col-10">
                  <nav class="site-navigation text-right" role="navigation">
                    <div class="container">
                      <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                      <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li><a href="index.html">Главная</a></li>
                        <li><a href="about.html">О нас</a></li>
                        <li><a href="catalogue.html">Каталог</a></li>
                        <li><a href="otzyvy.html">Отзывы</a></li>
                        <style>
                          html {
                            scroll-behavior: smooth;
                          }
                          p {
                            white-space: pre-line;
                          }
                          </style>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
  <div id="form" style="background:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url(images/hero_bg_1.jpg); 
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: top; " >
            <div class="site-section site-block-3">
                
              <div class="container" style="margin-top: 90px;">
                <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
		  <h2 class="font-weight-bold text-white mb-5">Регистрация</h2>
  <form form class="bg-light" style="padding: 10px 10px; border-radius: 10px;" method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group" class="form-control">
  	  <label>Логин</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="form-group" class="form-control">
  	  <label>Адрес электронной почты</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="form-group" class="form-control">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="form-group" class="form-control">
  	  <label>Подтвердить пароль</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="form-group" class="form-control">
  	  <button type="submit" class="btn btn-success" name="reg_user">Зарегистрироваться</button>
  	</div>
  	<p>
  		Уже зарегистрированы? <a href="login.php">Войти</a>
  	</p><br>
	  <p><a href="index.html">Продолжить как гость</a></p>
    <p><a href="admin.html">Вход для администратора</a></p>
  </form>
  </div>
    </div>
    </div>
    </div>
    </div>
	<script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.maskedinput.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
</body>
</html>