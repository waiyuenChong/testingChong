<?php
    $attributes = array('class' => 'reset', 'id' => 'reset_pwd_form');
    echo form_open('credential/reset', $attributes); 
    if (isset($_SESSION['RESET'])) {
        $reset = $_SESSION['RESET'];
    }
?>
<div class="auth-wrapper">
  <div class="auth-content">
    <div class="card">
      <div class="card">
        <div class="card-body" style="padding-top:40px;">
          <h4 style="padding-bottom: 20px;" class="text-uppercase">
            <a href="<?= site_url('credential') ?>" style="text-decoration:none;">
              <span><i class="feather icon-chevron-left"></i></span>
            </a>
            <?lang('lang.credential_nav_forget')?>
          </h4><br />
          <p class="text-uppercase" style="padding-bottom: 20px;size:17px;"><?=lang('lang.credential_nav_reset_pwd_body') ?></p><br />
          <div class="input-group mb-3">
            <div class="input-group-append">
              <span>
                <i class="feather icon-mail input_append_icon"></i>
              </span>
            </div>
            <input type="email" class="form-control" placeholder="Email" name="email" pattern="\w*\@{1}\w*[\.com]"
              required value="<?php echo set_value('email'); ?>">
          </div><br />

          <button class="btn btn-danger mb-4 shadow-2" style="width: 100%;height:50px;">
            <?=lang('lang.credential_nav_reset_pwd') ?>
          </button>

          <!-- <p class="mb-0 text-muted"><?=lang('lang.credential_nav_dont_have_acc') ?><a href="<?= site_url('signup') ?>"><?=lang('lang.credential_nav_signup') ?></a></p> -->
        </div>
      </div>
    </div>
  </div>
  <div class="logo"></div>
</div>
</form>
<!-- Reset success modal -->
<div class="modal fade" id="reset_success" tabindex="-1" role="dialog" aria-labelledby="reset_successLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="resetLabel">Verify your email</h3>
      </div>
      <div class="modal-body" style="padding:20px 40px 0px 20px;">
        <p style="color:black;">You have successful forget password,please go to your email to verify</p><br>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" class="btn btn-primary" style="background:#EF3F39;border-radius:10px;width:30%;"
          data-dismiss="modal" onclick="empty()">Ok</button>
      </div>
    </div>
  </div>
</div>
<!--Register success modal end-->
<script>

</script>