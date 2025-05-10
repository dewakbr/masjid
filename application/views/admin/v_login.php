<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Masjid An Nur 45</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adm/css/');?>all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adm/css/');?>icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adm/css/');?>adminlte.min.css?v=3.2.0">
<body class="register-page" style="min-height: 570.781px;">
<div class="register-box">
  <div class="register-logo">
    <a href="<?= base_url();?>"><b>Login</b> <br> Masjid An Nur 45</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">&nbsp;</p>

      <form id='form_data'>
      <div class="input-group mb-3 formreg">
          <input type="text" class="form-control txnama txinput" name="txnama" placeholder="Nama Pengguna">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control txemail txinput" name="txemail" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control txpass txinput" name="txpass" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 formreg">
          <input type="password" class="form-control txpass2 txinput" name="txpass2" placeholder="Konfirmasi Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="button" class="btn btn-primary btn-block btn-login" onclick ='proses()'>Login</button>
            <button type="button" class="btn btn-primary btn-block btn-reg formreg" onclick ='register()'>Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>
      -->

      <a href="<?= base_url();?>" class="text-center">Home</a>
      <a href="javascript:void(0)" onclick="showform()" class="text-center float-right linkreg">Register</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adm/js/');?>jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adm/js/');?>bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adm/js/');?>adminlte.min.js?v=3.2.0"></script>
<script> var base_url='<?php echo base_url();?>'; </script>

<?php
//-- Load File Js dari Variabel Controller 'js'
if(!empty($js)){
  echo '<script src="'. base_url('script/'.$js.'.js').'"></script>';
}
?>

</body></html>