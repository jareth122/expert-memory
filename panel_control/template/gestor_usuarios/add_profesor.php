<?php
  include '../../../servidor.php';
  include '../../../base_datos/listar_cursos.php';
  include '../../../base_datos/buscar_curso.php';
  include '../includes/control_header.php';
?>

     
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Gestión de Cursos</h4>
                      <p class="text-muted mb-1">Fecha de edición</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="container">
      

                              <h3>Agregar Profesor</h3>
                              <form action="../../../base_datos/crear_usuario_profesor.php" method="POST">
                                <div class="row">
                                  <div class="col">

                            <!-- ======= Revisar tag, título y acentos======= -->
                                    <label for="">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control">

                                    <label for="">Correo Electronico</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                    
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                  </div>
                                </div>
                              </form>
                            </div>


                                                        
                          <div class="container">
                            <table class="table">
                              <thead>
                                <!-- <tr>
                                  <th scope="col">#id</th>
                                  <th scope="col">Nombre mentor</th>
                                  <th scope="col">Titulo</th>
                                  <th scope="col">Precio</th>
                                  <th scope="col">Tags</th>
                                </tr> -->
                              </thead>
                              <tbody>
<!--                               
                              <?php
                                while($row = mysqli_fetch_array($result_cursos)){ ?>
                                <tr>
                                  <th scope="row"><?php echo $row['curso_id'] ?></th>
                                  <td><?php echo $row['nombre_mentor'] ?></td>
                                  <td><?php echo $row['titulo'] ?></td>
                                  <td><?php echo $row['precio'] ?></td>
                                  <td><?php echo $row['tags'] ?></td>

                                  <td>
                                  
                                    <form action="../../../base_datos/buscar_curso.php" method="POST">
                                      <input type="text" value="<?php echo $row['curso_id'] ?>" hidden name="curso_id">
                                      <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button> <br><br>
                                    </form>

                                    <form action="../../../base_datos/eliminar_curso.php" method="POST">
                                      <input type="text" value="<?php echo $row['curso_id'] ?>" hidden name="curso_id">
                                      <button type="submit" class="btn btn-danger">Eliminar</button> 
                                    </form>
                                  </td>

                                </tr>
                              <?php } ?>  -->
                                
                              </tbody>
                            </table>
                          </div>

                          </div>
                         
                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

     
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
           <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
 
            <div class="footer-info">
              <center>
                <h3>Academia De Emprendimiento<span>.</span></h3>
              </center>
            
                <div class="copyright">
                  &copy; Derechos de autor <strong><span>Academia De Emprendimiento</span></strong>. Todos los derechos reservados
                </div>
                <div class="credits">
                
                  Diseñado por <a href="">Imagine Codes</a>
                </div>
             
            </div>

      </div>
    </div>
    
  </footer><!-- End Footer -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>