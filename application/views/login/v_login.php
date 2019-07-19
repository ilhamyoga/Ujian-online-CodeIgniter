<?php include 'template/css.php' ?>

<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-logo">
    <a href="#"><b>CBT</b>- ku</a>
  </div>

  <?php if ($error = $this->session->flashdata('error')): ?>
  <div class="form-group">
    <div class="col-md-12">
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $error; ?>
      </div>
    </div>
    <br>
  </div>
  <?php endif ?>

  <!-- /.login-body -->
  <br><br>
  <div class="container-fluid">
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
        <div class="login-box-body">
          <p class="login-box-msg">Sign in to start your session</p>
          <form action="<?php echo base_url('auth/login') ?>" method="POST">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="username" id="username" placeholder="username"/>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox"> Remember Me
                  </label>
                </div>
              </div><!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
              </div><!-- /.col -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include 'template/js.php' ?>
</div>
