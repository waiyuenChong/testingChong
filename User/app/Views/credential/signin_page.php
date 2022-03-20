<?php
// echo AWS_S3_URL_PATH; die;
$attributes = array('class' => 'signin', 'id' => 'signin_form'); // equals form tag in html
echo form_open('credential/signin', $attributes); // calls sign in controller, pass $attributes data to controller
if (isset($_SESSION['reset_password']) && !empty($_SESSION['reset_password'])) {
  echo "<script>var reset_password = " . $_SESSION['reset_password'] . "</script>";
}
if (isset($_SESSION['verify_email']) && !empty($_SESSION['verify_email'])) {
  echo "<script>var verify_email = " . $_SESSION['verify_email'] . "</script>";
}
if (isset($_SESSION['verify_success']) && !empty($_SESSION['verify_success'])) {
  echo "<script>var verify_success = " . $_SESSION['verify_success'] . "</script>";
}
if (isset($_SESSION['verify_fail']) && !empty($_SESSION['verify_fail'])) {
  echo "<script>var verify_fail = " . $_SESSION['verify_fail'] . "</script>";
}
if (isset($_SESSION['KYC_OTP']) && !empty($_SESSION['KYC_OTP'])) {
  echo "<script>var KYC_OTP = " . $_SESSION['KYC_OTP'] . "</script>";
}
if (isset($_SESSION[PROJECT])) {
  echo "<script>var login = 1</script>";
}

$lang = 'en';
$hidden_en = $hidden_cn = $hidden_my = "";
$selected_cn = $selected_en = $selected_my = "";
if ($lang == 'en') {
  $selected_en = 'selected';
  $hidden_en = "hidden";
}
if ($lang == 'cn') {
  $selected_cn = 'selected';
  $hidden_cn = "hidden";
}
if ($lang == 'my') {
  $selected_my = 'selected';
  $hidden_my = "hidden";
}

?>
<div class="auth-wrapper">
  <div class="auth-content">
    <div class="auth-bg">
      <span class="r g_bg_orange"></span>
      <span class="r s g_bg_blue_dark"></span>
      <span class="r s g_bg_green"></span>
      <span class="r lg g_bg_red" style="width: 400px !important; height: 400px !important;"></span>
    </div>
    <div class="card">
      <div class="card-body text-center">
        <!-- <div class="my-5 px-5 ">
          <i class="feather icon-unlock auth-icon"></i>
          <img class="img-fluid" src="<?= IMG_PATH . "/logo/logo.png" ?>">
        </div> -->
        <h3 class="mb-4"><?= lang('lang.credential.login_title') ?></h3>

        <div class="form-group mb-3">
          <input type="email" class="form-control" placeholder="<?= lang('lang.credential.email_placeholder') ?>" name="email" value="<?php echo set_value('email'); ?>">
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="<?= lang('lang.credential.password') ?>" id="password" name="password" value="<?php echo set_value('password'); ?>">
          <div class="input-group-append">
            <div class="input-group-text" id="basic-addon2"><i id="showOrHide" class="feather icon-eye-off input_append_icon" onclick="showOrHide()"></i></div>
          </div>
        </div>
        <button class="btn btn-primary shadow-2"><?= lang('lang.credential.login') ?></button>
      </div>
    </div>
  </div>
</div>
</form>
<div class="modal fade" id="done_reset" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><? lang('lang.forget_password') ?></h3>
      </div>
      <div class="modal-body">
        <label class="text-black"><? lang('lang.forget_password_content') ?></label><br>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" class="btn btn-success border-btn padding-btn" data-dismiss="modal"><? lang('lang.ok') ?></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="verify_email" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><? lang('lang.verify_email_header') ?></h3>
      </div>
      <div class="modal-body">
        <label class="text-black"><? lang('lang.verify_email_content') ?></label><br>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" class="btn btn-success border-btn padding-btn" data-dismiss="modal"><? lang('lang.ok') ?></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="verify_success" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><? lang('lang.verify_email_success_header') ?></h3>
      </div>
      <div class="modal-body">
        <label class="text-black"><? lang('lang.verify_email_success_content') ?></label><br>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" class="btn btn-success border-btn padding-btn" data-dismiss="modal"><? lang('lang.ok') ?></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="verify_fail" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><? lang('lang.verify_email_fail_header') ?></h3>
      </div>
      <div class="modal-body">
        <label class="text-black"><? lang('lang.modal_contact_admin') ?></label><br>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" class="btn btn-success border-btn padding-btn" data-dismiss="modal"><? lang('lang.ok') ?></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="admin_approve" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><? lang('lang.credential_wait_admin_approve') ?></h3>
      </div>
      <div class="modal-body align-self-center">
        <p><? lang('lang.credential_wait_admin_content') ?></p>
      </div>
      <div class="modal-footer border-0 ">
        <button class="btn btn-primary border-btn padding-btn" id="next" data-dismiss="modal"><?= 'Close' ?></button>
      </div>
    </div>
  </div>
</div>
<script>
  function showOrHide() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
      $('#showOrHide').removeClass('icon-eye');
      $('#showOrHide').addClass('icon-eye-off');
    } else {
      x.type = "password";
      $('#showOrHide').removeClass('icon-eye-off');
      $('#showOrHide').addClass('icon-eye');
    }
  }
  $(document).ready(() => {
    if (verify_email == 1) {
      $('#verify_email').modal();
      <?php unset($_SESSION['verify_email']); ?>
    };
  });
  $(document).ready(() => {
    if (verify_success == 1) {
      $('#verify_success').modal();
      <?php unset($_SESSION['verify_success']); ?>
    };
  });
  $(document).ready(() => {
    if (verify_fail == 1) {
      $('#verify_fail').modal();
      <?php unset($_SESSION['verify_fail']); ?>
    };
  });
</script>