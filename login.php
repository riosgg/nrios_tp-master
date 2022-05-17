<?php
    if (!empty($_GET)) {
        session_start();
        $cerrar_sesion = $_GET['cerrar_sesion'];
        if($cerrar_sesion) {
          session_destroy();
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <form name="login-admin-form" id="login-admin" method="post" action="includes/models/login-admin.php">
  <div class="form-row">
    <div class="input-group mb-3">
      <input type="email" class="form-control" placeholder="Ingresa tu Email" name="email" required>
      <div class="input-group-prepend">
          <div class="input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
      </div>
      <!-- <div class="valid-tooltip">Campo Correcto!!!</div>
      <div class="invalid-tooltip">Por favor verifique los datos del campo!!!</div> -->
    </div>
    <div class="input-group mb-3">
       <input type="password" class="form-control" placeholder="Ingresa tu Password" name="password" autocomplete="on" required>
       <div class="input-group-prepend">
         <div class="input-group-text">
           <span class="fas fa-lock"></span>
         </div>
       </div>
       <!-- <div class="valid-tooltip">Campo Correcto!!!</div>
       <div class="invalid-tooltip">Por favor verifique los datos del campo!!!</div>  -->
    </div>
    <!-- /.col -->
    <div class="col-4">
      <input type="hidden" name="login-admin" value="1">
      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
    <!-- /.col -->
  </div>
 </form>
<!-- /.login-box -->

<?php 
  include './includes/script.php';
?>
<!-- jQuery -->
<!-- <script src="../../plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="../../dist/js/adminlte.min.js"></script>
</body>
</html> -->
