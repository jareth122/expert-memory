<?php
  include 'servidor.php';
  include 'base_datos/listar_evento.php';
  include 'base_datos/listar_evento.php';
  include 'base_datos/buscar_evento.php';
?>
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

</head>

<body>

<?php
  require_once 'header.php';
?>

  <main id="main">
    <section>
      <div class="container">
        <div class="row">
          <?php
            while($row2 = mysqli_fetch_array($result_eventos)){
          ?>
          <div class="col-md-15" data-aos="fade-up">
            <h3 class="category-title">Servicio Social. Participa en este evento. </h3>
            <div class="d-md-flex post-entry-2 half">
              <a href="" class="me-4 thumbnail">
                <img src="data:image;base64,<?php echo base64_encode($row2['imagenEvento']); ?>" class="img-fluid">
              </a>
              <div>
                <div class="post-meta"><span class="date"><?php echo $row2['fechaEvento'] ?></span> <span class="mx-1">&bullet;</span></div>
                <H3><?php echo $row2['titulo'] ?></H3>
                <p><?php echo $row2['descripcion'] ?></p>
              </div>           
            </div>
          </div>
          <?php } ?>
        </div>
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
