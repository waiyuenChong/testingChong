<?php
// preview($ref_code);die;
$attributes = array('class' => 'signup', 'id' => 'signup_form', "onsubmit" => "loader()");
$ref_link = isset($ref_code) ? "/" . $ref_code : "";
echo form_open_multipart('credential/signup' . $ref_link, $attributes);

if (isset($_SESSION['signup_email']) && !empty($_SESSION['signup_email'])) {
  echo "<script>var signup_email = " . $_SESSION['signup_email'] . "</script>";
}
if (isset($_SESSION['signup_phone']) && !empty($_SESSION['signup_phone'])) {
  echo "<script>var signup_phone = " . $_SESSION['signup_phone'] . "</script>";
}

?>
<div class="auth-wrapper" id="auth-wrapper">
  <div class="auth-content" id="auth-content">
    <div class="card signup-card">
      <div class="card-body">
        <h4><a href="<?= site_url('credential') ?>" style="text-decoration:none;"><span><i class="feather icon-chevron-left"></i></span></a><?=lang('lang.credential_nav_signup') ?></h4>
        <p class="pt-2"><?=lang('lang.credential_nav_signup_body') ?></p>
        <div class="form-group">
          <label><?=lang('lang.credential_nav_email') ?></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="<?=lang('lang.credential_nav_email_placeholder') ?>" value="<?= isset($_SESSION['register']['email']) ? $_SESSION['register']['email'] : "" ?>" required>
        </div>
        <div class="form-group">
          <label><?=lang('lang.credential_nav_username') ?></label>
          <input type="text" class="form-control" id="username" name="username" placeholder="<?=lang('lang.credential_nav_username_placeholder') ?>" value="<?= isset($_SESSION['register']['username']) ? $_SESSION['register']['username'] : "" ?>">
        </div>
        <div class="form-group">
          <label><?=lang('lang.credential_nav_password') ?><span> <?=lang('lang.credential_nav_pwd_desc') ?></span></label>
          <div class="input-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="<?=lang('lang.credential_nav_pwd_placeholder') ?>" value="<?= isset($_SESSION['register']['password']) ? $_SESSION['register']['password'] : "" ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*?[~`!@#$%\^&*()\-_=+[\]{};:\x27.,\x22\\|/?><]).{8,}" title="<?=lang('lang.pwd_format') ?>" minlength="8" required>
            <div class="input-group-append btn border">
              <span>
                <i id="showOrHide1" class="feather icon-eye input_append_icon" onclick="showOrHide(1)"></i>
              </span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label><?=lang('lang.credential_nav_pwd_cfm') ?></label>
          <div class="input-group">
            <input type="password" class="form-control" id="cfm_password" placeholder="<?=lang('lang.credential_nav_pwd_placeholder_cfm') ?>" minlength="8" required>
            <div class="input-group-append btn border">
              <span>
                <i id="showOrHide2" class="feather icon-eye input_append_icon" onclick="showOrHide(2)"></i>
              </span>
            </div>
          </div>
          <span class="pwd_validate text-danger" style="font-size: small;"></span>
          <script>
            $('#cfm_password').on('input', checkPwd);
            $('#password').on('input', checkPwd);

            function checkPwd() {
              if ($('#password').val() != $('#cfm_password').val()) {
                $('.pwd_validate').html("<?=lang('lang.credential_nav_pwd_validate') ?>");
                $('#register_btn').attr('disabled', 'true');
              } else {
                $('.pwd_validate').html("");
                $('#register_btn').removeAttr('disabled');
              }
            }
          </script>
        </div>
        <div class="form-group">
          <?php if (!isset($ref_email)) { ?>
            <!-- <label><?=lang('lang.credential_nav_referrer') ?></label> -->
            <!-- <input type="email" class="form-control" id="refferer" name="referrer" placeholder="<?=lang('lang.credential_nav_referrer_placeholder') ?>" value="<?= isset($_SESSION['register']['refferer']) ? $_SESSION['register']['referrer'] : "" ?>"> -->
          <?php } else { ?>
            <label><?=lang('lang.credential_nav_referrer') ?></label>
            <input type="email" class="form-control" id="refferer" name="referrer" placeholder="<?=lang('lang.credential_nav_referrer_placeholder') ?>" value="<?= $ref_email ?>" readonly>
          <?php } ?>
        </div>
        <button class="btn shadow-2 my-4 border-0 w-100" style="background-color: #E0A42A" id="register_btn"><?=lang('lang.credential_nav_signup') ?></button>
        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
      </div>
    </div>
  </div>
</div>
</form>

<!-- Register success modal -->
<div class="modal fade" id="signup_phone" tabindex="-1" role="dialog" aria-labelledby="register_successLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><?=lang('lang.credential_sign_up') ?></h3>
      </div>
      <div class="modal-body" style="padding:20px 40px 0px 20px;">
        <p style="color:black;"><?=lang('lang.credential_sign_up_phone') ?></p>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" class="btn border-btn light-green" style="width:30%;" data-dismiss="modal" onclick="empty()">Ok</button>
      </div>
    </div>
  </div>
</div>
<!--Register success modal end-->
<!-- Register success modal -->
<div class="modal fade" id="signup_email" tabindex="-1" role="dialog" aria-labelledby="register_successLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><?=lang('lang.credential_sign_up') ?></h3>
      </div>
      <div class="modal-body" style="padding:20px 40px 0px 20px;">
        <p style="color:black;"><?=lang('lang.credential_sign_up_email') ?></p>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" class="btn border-btn light-green" style="width:30%;" data-dismiss="modal" onclick="empty()">Ok</button>
      </div>
    </div>
  </div>
</div>
<!--Register success modal end-->
<script>
  function showOrHide(col) {
    if (col == 1) {
      var pwd = $("#password").attr('type');
      var scope = "#password";
    } else {
      var pwd = $("#cfm_password").attr('type');
      var scope = "#cfm_password";
    }
    if (pwd == "password") {
      $(scope).attr('type', 'text');
      $('#showOrHide' + col).removeClass('icon-eye');
      $('#showOrHide' + col).addClass('icon-eye-off');
    } else {
      $(scope).attr('type', 'password');
      $('#showOrHide' + col).removeClass('icon-eye-off');
      $('#showOrHide' + col).addClass('icon-eye');
    }
  }
  $(document).ready(function() {
    if (signup_email == 1) {
      $('#signup_email').modal();
      <?php unset($_SESSION['signup_email']); ?>
    };
  });
  $(document).ready(function() {
    if (signup_phone == 1) {
      $('#signup_phone').modal();
      <?php unset($_SESSION['signup_phone']); ?>
    };
  });
</script>