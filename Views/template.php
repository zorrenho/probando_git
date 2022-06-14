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
      <link rel=”shortcut icon” href=”favicon.ico” mce_href=”favicon.ico” type=”image/x-icon” />
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/css/menu-sticky.css">
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/css/slider.css">
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/css/general-style.css">
      <script src="<?php echo URL; ?>Views/assets/js/jquery.min.js"></script>
      <script src="<?php echo URL; ?>Views/assets/js/menu-nav.js"></script>
      <script src="<?php echo URL; ?>Views/assets/js/slider.js"></script>
      <title>Proyecto</title>
    </head>

    <body>
      <header class="main-header">
        <div class="logo-header">
            <img src="<?php echo URL; ?>Views/assets/img/logo.svg" alt="" srcset="">
        </div>
        <div class="info-header">
        <i class="fa fa-phone"></i></i><p>123456789</p> 
        <i class="fa fa-map-marker"></i> <p>Av. Conocida</p>
        </div>
        <div class="bar-menu">          
          <!-- Menu de navegacion -->
          <nav class="nav-menu">
            <ul class="menu">
              <li><a href="<?php echo URL; ?>">Home</a></li>
              <li><a href="<?php echo URL; ?>estudiantes">Estudiantes</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Portefolio</a></li>
              <li><a href="#">Contact</a></li>
              <div class="animation start-home"></div>
            </ul>
          </nav>
          <section class="header-social">
          <ul class="header-social-list">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>            
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </section>
        </div>
      </header>

    <?php
  }

  public function __destruct()
  {
    ?>
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/css/footer-style.css">
      <link rel="stylesheet" href="<?php echo URL; ?>Views/assets/fontawesome/css/all.css">
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
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>            
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-github"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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