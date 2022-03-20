<!DOCTYPE html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            /* The image used */
            background: url("<?= IMG_PATH . '/bg-images/payment_status_bg.png' ?>") no-repeat 100% !important;
            background-size: cover;
            margin-top: 15rem;
        }
    </style>
</head>

<body class="h-100">
    <div class=" text-center">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <img class="col-xs-2 col-sm-2 col-md-6 col-lg-2" src="<?= $status_img ?>">
        </div>
        <p class="lead mt-4 mb-2" style="font-size: 1.5rem;"><?= $status_txt ?></p>
        <a href="<?= site_url('/../../user') ?>" class="text-small text-dark">Return Home Page</a>
    </div>
</body>