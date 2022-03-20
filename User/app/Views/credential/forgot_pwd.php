<?php
$attributes = array('class' => 'reset', 'id' => 'reset_pwd_form');
echo form_open('credential/forgot_pwd', $attributes);
if (isset($_SESSION['RESET'])) {
  $reset = $_SESSION['RESET'];
}
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
          <i class="feather icon-mail auth-icon"></i>
        </div>
        <h3 class="mb-4">Reset Password</h3>
        <div class="form-floating mb-4">
          <input type="text" class="form-control" name="forgot_pwd" id="floatingInput" placeholder="name@example.com" required>
          <label for="floatingInput">Email / Phone</label>
        </div>
        <button type="submit" class="btn btn-primary mb-4 shadow-2">Reset Password</button>
        <p class="mb-0 text-muted">Don’t have an account? <a href="<?= site_url('credential/signin') ?>">Signup</a></p>
      </div>
    </div>
  </div>
</div>

<script>

</script>