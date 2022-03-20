<?php
// echo "first-";die; 
// echo AWS_S3_URL_PATH; die;
$attributes = array('class' => 'signin', 'id' => 'signin_form');
echo form_open_multipart('credential/signin_first', $attributes);
if (isset($_SESSION['kyc_start']) && !empty($_SESSION['kyc_start'])) {
  echo "<script>var kyc_start = " . $_SESSION['kyc_start'] . "</script>";
}
?>
<!-- <div class="auth-wrapper">
  <div class="auth-content">
    <div class="auth-bg">
      <span class="r"></span>
      <span class="r s"></span>
      <span class="r s"></span>
      <span class="r"></span>
    </div>
  </div>
</div> -->
<!-- [KYC page 1] -->
<div class="modal fade" id="kyc_pg_1" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><?=lang('lang.confirm_action') ?></h3>
      </div>
      <div class="modal-body align-self-center">
        <p><?=lang('lang.upload_icf_text') ?></p>
        <div class="card px-0 py-0 shadow-none" style="height: 250px; width: 400px; background: white;">
          <img class="card-img-top" id="icf_img" alt="Image load failed" style="height: 250px; width: 400px;" src="<?= IMG_PATH . "/bg-images/empty2.png" ?>">
        </div>
        <div class="text-left">
          <!-- <label class="gallery_photo_add m-0 pl-2 pr-2 pt-1 pb-1 btn btn-outline-dark " for="add_icf_img" onclick="" style="border-radius: 20px; ">Choose File</label> -->
          <input type="file" id="add_icf_img" name="add_icf_img" value="Upload receipt" accept="image/*" required>
        </div>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" id="icf_btn" class="btn btn-primary border-btn padding-btn" data-toggle="modal" data-target="#kyc_pg_2" data-dismiss="modal" disabled><?=lang('lang.next') ?></button>
      </div>
    </div>
  </div>
</div>

<!-- [KYC page 2] -->
<div class="modal fade" id="kyc_pg_2" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><?=lang('lang.confirm_action') ?></h3>
      </div>
      <div class="modal-body align-self-center">
        <p><?=lang('lang.upload_icb_text') ?></p>
        <div class="card px-0 py-0 shadow-none" style="height: 250px; width: 400px; background: white;">
          <img class="card-img-top" id="icb_img" alt="Image load failed" style="height: 250px; width: 400px;" src="<?= IMG_PATH . "/bg-images/empty2.png" ?>">
        </div>
        <div class="text-left">
          <!-- <label class="gallery_photo_add m-0 pl-2 pr-2 pt-1 pb-1 btn btn-outline-dark " for="add_icb_img" onclick="" style="border-radius: 20px; ">Choose File</label> -->
          <input type="file" id="add_icb_img" name="add_icb_img" value="Upload receipt" accept="image/*" required>
        </div>
      </div>
      <div class="modal-footer border-0 ">
        <button type="button" class="btn btn-secondary border-btn padding-btn" data-toggle="modal" data-target="#kyc_pg_1" data-dismiss="modal"><?=lang('lang.previous') ?></button>
        <button type="button" id="icb_btn" class="btn btn-primary border-btn padding-btn" data-toggle="modal" data-target="#kyc_pg_3" data-dismiss="modal" disabled><?=lang('lang.submit') ?></button>
        <!-- <button type="submit">GO</button> -->
        <!-- <button class="btn btn-primary border-btn padding-btn"><a class="text-white" href="<?= site_url('admin/resetPassword/' . $result->id) ?>"><?=lang('lang.yes') ?></a></button> -->
      </div>
    </div>
  </div>
</div>

<!-- [KYC page 3] -->
<div class="modal fade" id="kyc_pg_3" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><?=lang('lang.confirm_action') ?></h3>
      </div>
      <div class="modal-body align-self-center">
        <p><?=lang('lang.upload_otp_verify_text') ?></p>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">+60</span>
          </div>
          <input type="number" id="contact_number" class="form-control" aria-label="Valid Phone Number" pattern="[1]{1}\d*" minlength="9" maxlength="10">
          <div class="input-group-append">
            <span id="btn_send" class="input-group-text" onclick="send_otp()"><?=lang('lang.send') ?></span>
          </div>
        </div>

        <div class="form-group mb-4">
          <input type="password" id="otp" class="form-control" placeholder="<?=lang('lang.credential_nav_username_otp') ?>" name="otp" value="">
          <!-- <div class="warning_box"> <?php echo form_error('password'); ?></div> -->
        </div>

      </div>
      <div class="modal-footer border-0 ">
        <button class="btn btn-primary border-btn padding-btn" id="next" disabled=""><?=lang('lang.submit') ?></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="otp_sent" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h3 class="modal-title w-100" id="exampleModalLabel"><?= 'OTP' ?></h3>
      </div>
      <div class="modal-body align-self-center">
        <p><?= 'OTP has send to your phone number' ?></p>
      </div>
      <div class="modal-footer border-0 ">
        <button class="btn btn-primary border-btn padding-btn" id="next_1" data-dismiss="modal"><?=lang('lang.close') ?></button>
      </div>
    </div>
  </div>
</div>


</form>
<script>
  $(document).ready(function() {
    if (kyc_start == 1) {
      $('#kyc_pg_1').modal();
      <?php unset($_SESSION['kyc_start']); ?>
    };
  });

  $("#add_icf_img").change(function() {
    $('#icf_btn').removeAttr('disabled');
    readURLs(this);
  });

  function readURLs(inputx) {
    if (inputx.files && inputx.files[0]) {
      var readerx = new FileReader();

      readerx.onload = function(e) {
        $('#icf_img').attr('src', e.target.result);
      }
      readerx.readAsDataURL(inputx.files[0]); // convert to base64 string
    }
  }

  $("#add_icb_img").change(function() {
    $('#icb_btn').removeAttr('disabled');
    readURL(this);
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(b) {
        $('#icb_img').attr('src', b.target.result);
      }
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }
  var otp;
  var exp_date;

  function send_otp() {
    if (document.getElementById("contact_number").value != "") {
      $(".loader_container").css("display", "table");

      var phone = document.getElementById("contact_number").value.toString();
      $.ajax({
        url: '<?= BASE_URL ?>/credential/send_otp/' + phone,
        type: 'GET',
        error: function() {
          // alert('update failed');
          $(".loader_container").css("display", "none");
        },
        success: function(data) {
          console.log('<?= BASE_URL ?>/credential/send_otp/' + phone);
          console.log(data);
          var x = JSON.parse(data);
          if (x.result.code == 200) {
            //   console.log(x.result.otp);
            $(".loader_container").css("display", "none");
            $('#otp_sent').modal();
            otp = x.result.otp;
            exp_date = x.result.exp_date;
            // Set the date we're counting down to
            var countDownDate = new Date().getTime() + 5 * 60 * 1000;
            // Update the count down every 1 second
            var x = setInterval(function() {
              // Get today's date and time
              var now = new Date().getTime();
              // Find the distance between now and the count down date
              var distance = countDownDate - now;
              // Time calculations for hours, minutes and seconds
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              // Display the result in the element with id="demo"
              document.getElementById("btn_send").innerHTML = minutes + ":" + seconds;
              $("#btn_send").attr("disabled", true);
              $("#btn_send").prop("onclick", null).off("click");
              // If the count down is finished, write some text
              if (distance < 0) {
                clearInterval(x);
                $("#btn_send").removeAttr("disabled");
                document.getElementById("btn_send").innerHTML = "Send";
                document.getElementById("btn_send").addEventListener("click", send_otp);
              }
            }, 1000);
          }
        }
      });
    }
  }


  $(document).ready(function() {
    $("#otp").keyup(function() {
      var otp_in = $(this).val();
      //   console.log(otp);
      // console.log(otp_in.length);
      if ((otp_in == otp && otp_in.length == 6)) {
        // console.log('test');
        $.ajax({
          url: '<?= BASE_URL ?>/credential/check_otp/' + exp_date,
          type: 'GET',
          error: function() {
            console.log('fail');
          },
          success: function(data) {
            var x = JSON.parse(data);
            // console.log(x.status);
            // console.log('done');
            if (x.status == "true") {
              $('#next').removeAttr('disabled');
            }
          }
        });
      } else {
        $('#next').attr('disabled', true);
      }
    });
  });

  function loader() {
    $(".loader_container").css("display", "table");
  }
</script>