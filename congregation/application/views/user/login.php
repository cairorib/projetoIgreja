<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sis Congregation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Sis</b>Congregação</a>
  </div>
  <?php if($this->session->flashdata('success')) : ?>
    <?=  $this->session->flashdata('success') ?> 
    <?php endif ?>
 
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
        <?php if($this->session->flashdata('danger')) : ?>
           <?=  $this->session->flashdata('danger') ?> 
        <?php endif ?>
      <!-- <form action="<?php echo site_url('/login/auth') ?>" method="post"> -->
      
      <?php echo form_open('login/verify');  ?> 
        <div class="input-group mb-3">
          
          <input type="email" class="form-control" name='email' placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name='senha' placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         <!--  <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          <!-- <div class="col-4">
          
          </div> -->
          <?php echo form_close(); ?>
          <!-- /.col -->
        </div>
      </form>
     
    <!--   <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Esqueci minha senha</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo site_url('login/createUserForm') ?>" class="text-center">Criar nova conta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
 <!-- AdminLTE for demo purposes --> 
<script src="<?php echo site_url(); ?>../../dist/js/demo.js"></script>

<!-- jQuery -->
<script src="<?php echo site_url(); ?>../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo site_url(); ?>../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url(); ?>../../dist/js/adminlte.min.js"></script>

</body>
</html>