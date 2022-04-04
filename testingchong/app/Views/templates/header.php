<!DOCTYPE html>
<html>

<head>
  <!-- Favicon icon -->
  
  
  
  

</head>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Good – Bootstrap 5 HTML Admin Dashboard Template by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="Good admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Good, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard, bootstrap dark mode" />
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="<?= IMG_PATH; ?>/logo/favicon.ico" />
    <link rel="icon" type="image/svg" href="<?= IMG_PATH; ?>/logo/default.svg" sizes="16x16"/>
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= PLUGIN_PATH ?>/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= CSS_PATH; ?>/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
    <!-- include css -->
    <link rel="stylesheet" href="<?= CSS_PATH; ?>/common.css?v=<?= time(); ?>"  type="text/css"/>
    <!-- Required Js -->
    <script src="<?= JS_PATH ?>/jquery.min.js?v=<?= time(); ?>"></script>
    <!-- bootstrap css -->
  <link rel="stylesheet" href="<?= PLUGIN_PATH; ?>/bootstrap/css/bootstrap5.1.min">

    <?php 
		if( !empty($css) && isset($css) ) {
			foreach ($css as $key => $css_value) {
				echo '<link rel="stylesheet" href="'.$css_value.'?v='.time().'">';
			}
		}

		$page = !empty($page) ? $page : "";
	?>
	</head>
	<!--end::Head-->

<body class="<?= $page ?>"  class="aside-enabled">


  
  <?php if($page != 'credential') { ?>
		<!--begin::Main-->
		
		<!-- sidemenu -->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
      <!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
        <!-- [ Side Menu ] -->
        <?php $data['page'] = $page; echo render_partial('templates/side_menu', $data); ?>
        <!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
          <!-- [ Header Menu ] -->
          <?php $data['page'] = $page; echo render_partial('templates/header_menu', $data); ?>
              <?php } ?>