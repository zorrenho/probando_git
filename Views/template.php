<?php

namespace Views;

// Esta clase servira como una plantilla para nuestro sitio web
class Template
{

  public function __construct()
  {

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">      
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/css/menu-sticky.css">
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/css/general-style.css">
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/css/slider.css">
      <script src="<?php echo URL; ?>Views/assets/js/jquery.min.js"></script>
      <script src="<?php echo URL; ?>Views/assets/js/menu-nav.js"></script>
      <title>Proyecto</title>
    </head>

    <body>
      <header class="main-header">
        <div class="main-header__menu-logo">
          <a href="<?php echo URL; ?>"><img src="<?php echo URL; ?>Views/assets/img/logo.svg" alt="" srcset=""></a>
        </div>
        <div class="main-header__contactInfo">
          <p class="main-header__contactInfo--phone">
            <span class="icon-phone">6131300000</span>
          </p>
          <p class="main-header__contactInfo--address">
            <span class="icon-location">Circuito Bahia de Ohuira</span>
          </p>
        </div>
        <div class="bar-menu">
          <i class="icon-bar-menu" id="icon-bar-menu">menu</i>
          <!-- Menu de navegacion -->
          <nav class="nav-menu">

            <ul class="menu" id="menu">
              <li><a href="<?php echo URL; ?>">Home</a></li>
              <li><a href="<?php echo URL; ?>estudiantes">Estudiantes</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Portefolio</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
          <div class="social-icon">
            <a href="http://www.facebook.com" class="social-icon__link"><i class="fab fa-facebook"></i></a>
            <a href="http://www.instagram.com" class="social-icon__link"><i class="fab fa-instagram"></i></a>
            <a href="http://www.twitter.com" class="social-icon__link"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </header>


    <?php
  }

  public function __destruct()
  {
    ?>
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/css/footer-style.css">
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/fontawesome/css/all.css">
      <script src="<?php echo URL; ?>Views/assets/js/slider.js"></script>
      <footer>
        <!-- Footer main -->
        <section class="ft-main">
          <div class="ft-main-item">
            <h2 class="ft-title">About</h2>
            <ul>
              <li><a href="#">Services</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Customers</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="ft-main-item">
            <h2 class="ft-title">Resources</h2>
            <ul>
              <li><a href="#">Docs</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">eBooks</a></li>
              <li><a href="#">Webinars</a></li>
            </ul>
          </div>
          <div class="ft-main-item">
            <h2 class="ft-title">Contact</h2>
            <ul>
              <li><a href="#">Help</a></li>
              <li><a href="#">Sales</a></li>
              <li><a href="#">Advertise</a></li>
            </ul>
          </div>
          <div class="ft-main-item">
            <h2 class="ft-title">Stay Updated</h2>
            <p>Subscribe to our newsletter to get our latest news.</p>
            <form>
              <input type="email" name="email" placeholder="Enter email address">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </section>

        <!-- Footer social -->
        <section class="ft-social">
          <ul class="ft-social-list">
            <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="http://www.github.com" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="http://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </section>

        <!-- Footer legal -->
        <section class="ft-legal">
          <ul class="ft-legal-list">
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li>&copy; 2019 Copyright Nowrap Inc.</li>
          </ul>
        </section>
      </footer>
    </body>

    </html>
<?php
  }
}

$template = new Template();
?>