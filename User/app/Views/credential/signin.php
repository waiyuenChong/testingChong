<?php
// echo AWS_S3_URL_PATH; die;
$attributes = array('class' => 'Credential', 'id' => 'signin_form'); // equals form tag in html
echo form_open('credential/signin', $attributes); // calls sign in controller, pass $attributes data to controller
?>

<div class="auth-wrapper">
  <div class="auth-content">
    <div class="auth-bg">
      <span class="r"></span>
      <span class="r s"></span>
      <span class="r s"></span>
      <span class="r"></span>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <div class="mb-4">
          <i class="feather icon-unlock auth-icon"></i>
        </div>
        <h3 class="mb-4">Login</h3>
        <div class="col-md mb-4">
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInputGrid" name="email" placeholder="Email address" value="" required>
            <label for="floatingInputGrid">Email address</label>
          </div>
        </div>
        <div class="col-md mb-4">
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingInputGrid" name="password" placeholder="Password" value="" required>
            <label for="floatingInputGrid">Password</label>
          </div>
        </div>
        <div class="form-group text-left">
          <div class="checkbox checkbox-fill d-inline">
            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
            <!-- <label for="checkbox-fill-a1" class="cr"> Save Details</label> -->
          </div>
        </div>
        <button type="submit" class="btn btn-primary shadow-2 mb-4">Login</button>
        <p class="mb-2 text-muted">Forgot password? <a href="<?= site_url('credential/forgot_pwd') ?>">Reset</a></p>
        <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="<?= site_url('credential/signup') ?>">Signup</a></p> -->
      </div>
    </div>
  </div>
</div>


<script>

</script>