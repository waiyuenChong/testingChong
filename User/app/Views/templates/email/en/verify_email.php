<!DOCTYPE html>

<html>

<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <style>
        .ver_email_logo {
            text-align: center;
            vertical-align: middle;
        }

        .email_img {
            /* background-image: url('<?= IMG_PATH ?>/verify_email.png'); */
            background-repeat: no-repeat;
            vertical-align: middle;
            display: flex;
            justify-content: center;
            padding-top: 5%;

        }

        .x_text-center {
            text-align: center;
            padding-bottom: 2%;
        }

        .verify_btn {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            /* text-align: center; */
            text-decoration: none;
            font-size: 16px;
        }

        .email_btn {
            display: flex;
            justify-content: center;
        }

        .email_p {
            display: flex;
            justify-content: center;
        }

        .first {
            padding-bottom: 3%;
            padding-left: 10%;
            padding-right: 10%;
        }

        .greetings {
            padding-left: 10%;
            padding-right: 10%;
        }

        .email_p {
            font-style: oblique;
            padding-bottom: 4%;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <!-- <div class="email_img">
        <img class="ver_email_logo text-center" src="<?= IMG_PATH ?>/verify_email.png" style="width:25%; height: 160px;">
    </div> -->



    <!-- <img class="ver_email_logo text-center" src="<?= IMG_PATH ?>/verify_email.png" style="width:25%; height: 160px;"> -->

    <div class="email_img">
        <img src="<?= IMG_PATH ?>/verify_email.png" alt="">
    </div>

    <h2 class="x_text-center">Verify Your Email Address</h1>

        <p class="greetings">Hello Lao Pi,</p>
        <p class="first">To make your account more secure and to receive important messages and transaction history, please use the button below to verify your email address. A confirmation message will appear subsequently.
            Didn't request a verification email? No problem! Just ignore this email and carry on with your day.
        </p>

        <div class="email_btn">
            <button class="verify_btn">Verify Email Address</button>
        </div>
        <div class="email_p">
            <p class="email_p">This email only valid for 48hours.</p>
        </div>



        <?php include 'footer.php' ?>
</body>

</html>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->