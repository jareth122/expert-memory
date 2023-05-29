
<!DOCTYPE html>
<html lang="es">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@200;500&family=IBM+Plex+Sans:ital,wght@0,300;0,500;0,700;1,300;1,700&display=swap" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sueños, Esperanzas, y Risas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/Logo3.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/estilos.css" rel="stylesheet">

</head>

<body>

<?php
    require_once 'header.php';
  ?>
  <style>
    body{
      background-image: url(assets/img/patron_azul.png);
    }
  </style>
  <main id="main">
    <section id="contact" class="contact mb-5">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Donativos</h1>
            <a href="https://www.paypal.com/mx/webapps/mpp/home">
            <img src="assets/img/paypal.png" width="600" height="200">
            </a>
            <a href="https://www.paypal.com/mx/webapps/mpp/home">
            <center><input type="submit" value="DONAR"></center>
            </a>
          </div>
        </div>

  <!--   <form action="procesar_donativo.php" method="POST">
      
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" required><br><br>

    <label for="metodo">Método de pago:</label>
    <select id="metodo" name="metodo">
      <option value="tarjeta">Visa</option> 
      <option value="paypal">MasterCard</option>
       <option value="transferencia">PayPal</option> 
    </select><br><br>
      
    <center><input type="submit" value="Donar"></center>
  
   </form>     -->
      </div>
    </section>

  </main><!-- End #main -->

  <?php
    require_once 'footer.php';
  ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>