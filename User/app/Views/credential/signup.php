<?php
// $attributes = array('class' => 'signup', 'id' => 'signup_form', "onsubmit" => "loader()");
// echo form_open_multipart('credential/signup/', $attributes);

$attributes = array('class' => 'Credential', "onsubmit" => "loader()", 'autocomplete' => "off");
echo form_open_multipart('credential/signup', $attributes);
// $otp_show = (isset($otp_show)) ? $otp_show : false;
// echo "<script> var otp_show = '" . $otp_show . "' </script>";
?>
<style>
  body {
    background: #FFF !important;
    margin-top: 0px !important;
  }

  @media screen and (max-width: 768px) {
    body {
      background: #FFF !important;
      margin-top: 70px !important;
    }
  }

  .pcoded-content {
    padding: 0px;
  }

  .pcoded-main-container {
    margin-left: 0px !important;
  }

  .row {
    margin-left: 0px !important;
    margin-right: 0px !important;
  }

  .m-horizontal {
    margin-left: 1.5rem !important;
    margin-right: 1.5rem !important;
    margin-top: 1rem !important;
  }

  .btn_resend {
    margin: 0 !important;
    background-color: inherit !important;
    border: 0;
  }
</style>

<div class="auth-wrapper">
  <div class="auth-content">
    <div class="auth-bg">
      <span class="r"></span>
      <span class="r s"></span>
      <span class="r s"></span>
      <span class="r"></span>
    </div>
    <div class="ml-5 card">
      <div class="card-body text-center">
        <div class="mb-4">
          <i class="feather icon-user-plus auth-icon"></i>
        </div>
        <h3 class="mb-4">Sign Up For New User</h3>
        <div class="col-md mb-4 ">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGrid" name="name" placeholder="Username" value="" required>
            <label for="floatingInputGrid">Username</label>
          </div>
        </div>
        <div class="col-md mb-4">
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInputGrid" name="email" placeholder="Email address" value="" required>
            <label for="floatingInputGrid">Email address</label>
          </div>
        </div>
        <div class="col-md mb-4">
          <div class="form-floating">
            <input type="number" class="form-control" id="floatingInputGrid" name="phone_no" placeholder="Phone Number" value="" required>
            <label for="floatingInputGrid">Phone Number (+6)</label>
          </div>
        </div>
        <div class="col-md mb-4">
          <div class="form-floating">
            <input type="password" class="form-control" minlength="6" id="floatingInputGrid" name="password" placeholder="Password" value="" required>
            <label for="floatingInputGrid">Password</label>
          </div>
        </div>
        <div class="col-md mb-4">
          <select class="form-select form-select-sm" name="position" aria-label=".form-select-sm example">
            <h5>Position</h5>
           
          </select>
        </div>
        <div class="col-md mb-4">
          <select class="form-select form-select-sm" name="team" aria-label=".form-select-sm example">
            <h5>Team</h5>
           
          </select>
        </div>
        <button type="submit" class="btn btn-primary shadow-2 mb-4"> Sign up</button>
      </div>
    </div>
  </div>
</div>
</form>

<script>
  var otp;
  var exp_date;
  var phonePatternChecked = false;
  var pwdChecked = false;

  function onlyNumberInput(inputVal) {
    // console.log(inputVal);
    var patt = /^\d*$/gm;
    var result;
    if (patt.test(inputVal)) {
      result = inputVal;
      $("#contact").val(result);
    } else {
      var txt = inputVal.slice(0, -1);
      $("#contact").val(txt);
    }

    var phone_pattern = /^[1]\d{8,9}$/gm;
    if (!phone_pattern.test(inputVal)) {
      phonePatternChecked = false;
      $('#next_btn').prop("disabled", true);
      $('#contact_error').removeAttr("hidden");
      $('#contact_error').html("<?= lang('lang.credential.contact_validate') ?>");
    } else {
      $('#contact_error').html("");
      phonePatternChecked = true;
      if (pwdChecked) {
        $('#next_btn').prop("disabled", false);
      }
    }
  }

  $(document).ready(function() {
    $('#username').change(function() {
      if ($('#username').val != '') {
        $('#password').prop("disabled", false);
        $('#cfm_pwd').prop("disabled", false);
      } else {
        $('#password').prop("disabled", true);
        $('#cfm_pwd').prop("disabled", true);
      }
    });
    $('#signup_form').attr('autocomplete', 'off');

    // if (signup_email == 1) {
    //   $('#signup_email').modal();
    //   <?php unset($_SESSION['signup_email']); ?>
    // };
    // if (signup_phone == 1) {
    //   $('#signup_phone').modal();
    //   <?php unset($_SESSION['signup_phone']); ?>
    // };
    $('#back_dashboard').click(function() {
      <?php unset($_SESSION['merchant']); ?>
    });
    $('#next_btn').click(function() {
      if ($('#contact').val() != "" && $('#username').val() != "" && $('#password').val() != "" && $('#cfm_pwd').val() != "") {
        // console.log($('#contact').val().length);
        var hp_no = $('#contact').val();

        if (hp_no.length >= 9 && hp_no.length <= 10) {
          $('#contact_error').html("");
          send_otp();
          $('#hp_no').html(hp_no);
          $('#otp_verify').modal({
            show: true,
            backdrop: 'static',
            keyboard: false
          });
          console.log($('#otp_verify'));
          $('#otp').focus();
        } else {
          $('#contact').focus();
          $('#contact_error').html("<?= lang('lang.credential.contact_validate') ?>");
          $('#contact_error').removeAttr('hidden');
        }

      } else {
        if ($('#contact').val() == "") {
          $('#contact').focus();
        } else if ($('#username').val() == "") {
          $('#username').focus();
        } else if ($('#password').val() == "") {
          $('#password').focus();
        } else {
          $('#cfm_pwd').focus();
        }
      }
    });

    $('#password').keyup(function() {
      checkPwd();
    });
    $('#cfm_pwd').keyup(function() {
      checkPwd();
    });

    $('#otp').keyup(function() {
      check_otp();
    });
  });


  var resend_counter = 0;

  function send_otp() {
    resend_counter++;
    phone = $('#contact').val();
    if ($('#email').val() != '') {
      phone = encodeURIComponent($('#email').val());
    }
    $(".loader_container").css({
      'display': 'grid',
      'align-content': 'center',
      'justify-content': 'center'
    });
    // var url = '<?= BASE_URL ?>/credential/send_otp/' + phone;
    $.ajax({
      url: '<?= BASE_URL ?>/credential/send_otp/' + phone,
      type: 'GET',
      error: function() {
        // alert('update failed');
        $(".loader_container").css("display", "none");
      },
      success: function(data) {
        var x = JSON.parse(data);
        // console.log(data);
        // console.log('SEND');
        console.log(x);

        if (x.result.code == 200) {
          //temp
          if (otp_show) {
            $('#otp').val(x.result.otp);
            $("#next").removeAttr("disabled");
          } else {
            $('#otp').val("");
          }
          //

          // if (x.result.count == 2) {
          if (resend_counter == 2) {
            $('#phone_no').html('');
            $('#email').attr('hidden', false);
          }
          otp = x.result.otp;
          exp_date = x.result.exp_date;
          // Set the date we're counting down to
          var countDownDate = new Date().getTime() + 15 * 60 * 1000;
          // var countDownDate = new Date().getTime() + 1000;
          // Update the count down every 1 second
          var x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // Time calculations for hours, minutes and seconds
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            var seconds = ("0" + seconds).slice(-2);
            // Display the result in the element with id="demo"
            $('#btn_send').html(minutes + ":" + seconds);
            $("#btn_send").attr("disabled", true);
            $("#btn_send").prop("onclick", null).off("click");
            // If the count down is finished, write some text
            if (distance < 0) {
              clearInterval(x);
              $("#btn_send").removeAttr("disabled");
              document.getElementById("btn_send").innerHTML = '<i class="feather icon-rotate-ccw mx-1" disabled></i><?= lang("lang.operation.resend") ?>';
              document.getElementById("btn_send").addEventListener("click", send_otp);
            }
          }, 1000);
        }
        $(".loader_container").css("display", "none");
      }
    });
  }

  function check_otp() {
    var otp_in = $('#otp').val();

    if ((otp_in == otp && otp_in.length == 6)) {
      date = encodeURI(exp_date);
      $.ajax({
        url: '<?= BASE_URL ?>/credential/check_otp/' + date,
        type: 'GET',
        error: function() {
          console.log('fail');
        },
        success: function(data) {
          var x = JSON.parse(data);
          console.log(x.status);
          if (x.status == "true") {
            $('#next').removeAttr('disabled');
          }
        }
      });
    } else {
      $('#next').attr('disabled', true);
    }
  }

  function checkPwd() {

    var pattern = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?([^\w\s]|[_])).{8,}$/g;
    if (($('#password').val() != "") && pattern.test($('#password').val())) {
      $('#pwd_error').html("");
      if (($('#password').val() != $('#cfm_pwd').val())) {
        pwdChecked = false;
        $('#cpwd_error').html("<?= lang('lang.credential.cpwd_validate') ?>");
        $('#cpwd_error').removeAttr('hidden');
        $('#next_btn').prop("disabled", true);
      } else {
        $('#cpwd_error').html("");
        // $('#pwd_error').attr('hidden', true);
        pwdChecked = true;
        if (phonePatternChecked) {
          $('#next_btn').prop("disabled", false);
        }
      }
    } else {
      $('#pwd_error').html("<?= lang('lang.credential.pwd_validate') ?>");
      $('#pwd_error').removeAttr('hidden');
      pwdChecked = false;
      $('#cpwd_error').html("<?= lang('lang.credential.pwd_validate') ?>");
      $('#cpwd_error').removeAttr('hidden');
      $('#next_btn').prop("disabled", true);
      $('#next_btn').prop("disabled", true);
    }

  }

  function showOrHide(col) {
    if (col == 1) {
      var pwd = $("#password").attr('type');
      var scope = "#password";
    } else {
      var pwd = $("#cfm_pwd").attr('type');
      var scope = "#cfm_pwd";
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
</script>
<!-- Section 1 -->