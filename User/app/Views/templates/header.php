<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
  

  <title>OneSoft Lab</title>

  <!-- Favicon icon -->
  <link rel="icon" type="image/png" href="<?= IMG_PATH; ?>/content/web-icon.png" sizes="16x16">

  <!-- vendor css -->
  <link rel="stylesheet" href="<?= CSS_PATH; ?>/style.css">
  <!-- fontawesome icon -->
  <link rel="stylesheet" href="<?= FONT_PATH; ?>/fontawesome/css/fontawesome-all.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="<?= PLUGIN_PATH; ?>/animation/css/animate.min.css">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?= PLUGIN_PATH; ?>/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= PLUGIN_PATH; ?>/bootstrap/css/bootstrap5.css">
  <!-- Notification css -->
  <link rel="stylesheet" href="<?= PLUGIN_PATH; ?>/notification/css/notification.min.css">
  <!-- include css -->
  <link rel="stylesheet" href="<?= CSS_PATH; ?>/common.css?v=<?= time(); ?>" />
  <!-- aos animation -->
  <link rel="stylesheet" href="<?= CSS_PATH; ?>/aos.css">
  <script src="<?= JS_PATH ?>/aos.min.js"></script>

  <?php
  if (!empty($css) && isset($css)) {
    foreach ($css as $key => $css_value) {
      echo '<link rel="stylesheet" href="' . $css_value . '?v=' . time() . '">';
    }
  }
  if (!empty($js) && isset($js)) {
    foreach ($js as $key => $js_value) {
      echo '<script src="' . $js_value . '?v=' . time() . '"></script>';
    }
  }

  $page = !empty($page) ? $page : "";
  ?>
  <!-- Required Js -->
  <script src="<?= PLUGIN_PATH ?>/jquery/js/jquery.min.js?v=<?= time(); ?>"></script>

</head>

<body class="<?= $page ?>">

  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <!-- [ Side Menu ] -->
  <?php //$data['page'] = $page; echo render_partial('templates/side_menu', $data); 
  ?>

  <!-- [ Header Menu ] -->
  <?php $data['page'] = $page;
  echo render_partial('templates/header_menu', $data);
  ?>

  <!-- [ Chat Menu ] -->
  <?php //$data['page'] = $page; //echo render_partial('templates/chat_menu', $data); 
  ?>

  <!-- <?php if ($page != 'credential') { ?> -->
  <!-- [ Main Content ] start -->
  <!-- <div class="pcoded-main-container">
      <div class="pcoded-wrapper">
        <div class="pcoded-content">
          <div class="pcoded-inner-content"> -->
  <!-- [ breadcrumb ] start -->

  <!-- [ breadcrumb ] end -->
  <!-- <div class="main-body">
              <div class="page-wrapper"> -->
  <!-- [ Main Content ] start -->
  <!-- <?php } ?> -->