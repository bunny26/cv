<?php
  $this->load->view('admin/adminHeader');
?>

<body>
  <<div id="fullscreen_bg" class="fullscreen_bg"/>
<div id="regContainer" class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">

                <!-- Dingge Log in -->
                <form action="<?php echo base_url(); ?>index.php/login/aksi_login" id="login-form" action="#" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  
                </form>

                <!-- Dingge daftar -->
                <form id="register-form" action="#" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="confirm-password">Confirm password</label>
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <label for="username">Email</label>
                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                   <div class="form-group">
                    <label for="username">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" tabindex="1" class="form-control" placeholder="Jabatan" value="">
                  </div>

                  <!-- button Register -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php
  $this->load->view('dasbor/utamaFooter');
?>