<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Hoàng Quyền Admin Panel</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/backend');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/backend');?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/backend');?>/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
      <?php echo form_open_multipart('admincp/login'); ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control"  type="text"  name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control"   type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="loginBtt">Login</button>
          <?php echo form_close(); ?>
        
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/backend');?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/backend');?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/backend');?>/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
