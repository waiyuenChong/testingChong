<?php
if ($page != "credential") {
  $page = (!empty($page)) ? $page : '';

  // [ dashboard ]
  $dash_nav = '';
  if ($page == 'dash') {
    $dash_nav = 'active';
  }
  // [ dashboard ] end

  // [ Merchant ] 
  $merchant_nav = $merchant_list = '';
  if ($page == 'merchant_list') {
    $merchant_nav = $merchant_list =  'active';
    $merchant_nav .= ' pcoded-trigger';
  }
  // [ Merchant ] end

  // [ Agent ]
  $agent_nav = $agent_list = $create_agent = '';
  if ($page == 'agent_list' || $page == 'agent_details') {
    $agent_nav = $agent_list = 'active';
    $agent_nav .= ' pcoded-trigger';
  }
  if ($page == 'create_agent') {
    $agent_nav = $create_agent = 'active';
    $agent_nav .= ' pcoded-trigger';
  }
  // [ Agent ] end

  // [ User ] 
  $user_nav = $user_list = '';
  if ($page == 'user_list') {
    $user_nav = $user_list =  'active';
    $user_nav .= ' pcoded-trigger';
  }
  // [ User ] end

  // [ KYC ] 
  $kyc_nav = $kyc_merchant_list = '';
  if ($page == 'kyc_merhcant_list') {
    $kyc_nav = $kyc_merchant_list =  'active';
    $kyc_nav .= ' pcoded-trigger';
  }
  // [ KYC ] end

  // [ category ] 
  $category_nav = $category_list = $create_category  = '';
  if ($page == 'category_list') {
    $category_nav = $category_list =  'active';
    $category_nav .= ' pcoded-trigger';
  }
  if ($page == 'category_grid') {
    $category_nav = $category_grid =  'active';
    $category_nav .= ' pcoded-trigger';
  }
  // [ category ] end

  // [ Product ] 
  $product_nav = $product_list = $create_product = '';
  if ($page == 'product_list' || $page == 'edit_product') {
    $product_nav = $product_list =  'active';
    $product_nav .= ' pcoded-trigger';
  }
  if ($page == 'create_product') {
    $product_nav = $create_product = 'active';
    $product_nav .= ' pcoded-trigger';
  }
  // [ Product ] end


  // [ Setting ] 
  $setting_nav = $setting_list = '';
  if ($page == 'setting_list') {
    $setting_nav = $setting_list = 'active';
    $setting_nav .= ' pcoded-trigger';
  }
  // [ Setting ] end

  // [ Admin ] 
  $admin_nav = $admin_list = $create_admin = '';
  if ($page == 'admin_list') {
    $admin_nav = $admin_list =  'active';
    $admin_nav .= ' pcoded-trigger';
  }
  if ($page == 'create_admin') {
    $admin_nav = $create_admin = 'active';
    $admin_nav .= ' pcoded-trigger';
  }
  // [ Admin ] end

  // check admin accessibility
  $admin_level = $_SESSION[PROJECT]->role;
  if ($admin_level == 1 || $admin_level == 2) {
    $img = 'logo.png';
    $noti = 'setting/notification';
  } else {
    $img = 'logo.png';
    $noti = 'setting/notification_edit/' . $this->admin_id_enc;
  }
?>
  <!-- [ navigation menu ] -->
  <nav class="pcoded-navbar navbar_background">
    <div class="navbar-wrapper">
      <div class="navbar-brand header-logo navbar_header justify-content-center p-0">
        <a href="<?= site_url('/') ?>" class="b-brand">
          <div class="logo">
            <img src="<?= IMG_PATH . '/logo/' . $img ?>" class="img-fluid">
          </div>
        </a>
        <?php if (false) { ?>
          <!-- <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a> -->
        <?php } ?>
      </div>
      <div class="navbar-content scroll-div">
        <ul class="nav pcoded-inner-navbar">

          <!-- [ Dashboard ] -->
          <?php if (true) { ?>
            <li data-username="dashboard" class="nav-item <?= $dash_nav ?>">
              <a href="<?= site_url('/dashboard') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext"><?= lang('lang.side_menu.dashboard') ?></span></a>
            </li>
          <?php } ?>
          <!-- [ Dashboard ] END -->

          <!-- [ Merchant ] -->
          <?php if (true) { ?>
            <li data-username="" class="nav-item pcoded-hasmenu <?= $merchant_nav ?>">
              <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext"><?= lang('lang.side_menu.merchant') ?></span></a>
              <ul class="pcoded-submenu">
                <li class="<?= $merchant_list ?>">
                  <a href="<?= site_url('merchant') ?>" class=""><?= lang('lang.side_menu.merchant_list') ?></a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <!-- [ Merchant ] end -->

          <!-- [ Agent ] -->
          <?php if (true && in_array($admin_level, [1, 2, 3])) { ?>
            <li data-username="agent" class="nav-item pcoded-hasmenu <?= $agent_nav ?>">
              <a href="javascript:" class="nav-link"><span class="pcoded-micon">
                  <i class="feather icon-file"></i>
                </span><span class="pcoded-mtext"><?= lang('lang.side_menu.agent') ?></span>
              </a>
              <ul class="pcoded-submenu">
                <li class="<?= $agent_list ?>">
                  <a href="<?= site_url('agent') ?>" class=""><?= lang('lang.side_menu.agent_list') ?></a>
                </li>
                <li class="<?= $create_agent ?>">
                  <a href="<?= site_url('agent/create') ?>" class=""><?= lang('lang.side_menu.agent_create') ?></a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <!-- [ Agent ] end -->

          <!-- [ User ] -->
          <?php if (false && in_array($admin_level, [1, 2, 3])) { ?>
            <li data-username="user" class="nav-item pcoded-hasmenu <?= $user_nav ?>">
              <a href="javascript:" class="nav-link"><span class="pcoded-micon">
                  <i class="feather icon-file"></i>
                </span><span class="pcoded-mtext"><?= lang('lang.side_menu.user') ?></span>
              </a>
              <ul class="pcoded-submenu">
                <li class="<?= $user_list ?>">
                  <a href="<?= site_url('user') ?>" class=""><?= lang('lang.side_menu.user_list') ?></a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <!-- [ User ] end -->

          <!-- [ KYC ] -->
          <?php if (true) { ?>
            <li data-username="" class="nav-item pcoded-hasmenu <?= $kyc_nav ?>">
              <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext"><?= lang('lang.side_menu.kyc') ?></span></a>
              <ul class="pcoded-submenu">
                <li class="<?= $kyc_merchant_list ?>">
                  <a href="<?= site_url('kyc/list/merchant') ?>" class=""><?= lang('lang.side_menu.kyc_merchant_list') ?></a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <!-- [ KYC ] end -->

          <!-- [ Category ] -->
          <?php if (true && in_array($admin_level, [1, 2])) { ?>
            <li data-username="" class="nav-item pcoded-hasmenu <?= $category_nav ?>">
              <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext"><?= lang('lang.side_menu.category') ?></span></a>
              <ul class="pcoded-submenu">
                <li class="<?= $category_list ?>">
                  <a href="<?= site_url('category') ?>" class=""><?= lang('lang.side_menu.category_list') ?></a>
                </li>
                <?php if (true) { ?>
                  <li class="<?= $category_grid ?>">
                    <a href="<?= site_url('category/grid') ?>" class=""><?= lang('lang.side_menu.category_grid') ?></a>
                  </li>
                <?php } ?>
              </ul>
            </li>
          <?php } ?>
          <!-- [ Category ] end -->

          <!-- [ Product ] -->
          <?php if (true) { ?>
            <li data-username="" class="nav-item pcoded-hasmenu <?= $product_nav ?>">
              <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-briefcase"></i></span><span class="pcoded-mtext"><?= lang('lang.side_menu.product') ?></span></a>
              <ul class="pcoded-submenu">
                <li class="<?= $product_list ?>">
                  <a href="<?= site_url('product#pending') ?>" class=""><?= lang('lang.side_menu.product_list') ?></a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <!-- [ Product ] end -->

          <!-- [ Admin ] -->
          <?php if (true && in_array($admin_level, [1])) { ?>
            <li data-username="" class="nav-item pcoded-hasmenu <?= $admin_nav ?>">
              <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sliders"></i></span><span class="pcoded-mtext"><?= lang('lang.side_menu.admin') ?></span></a>
              <ul class="pcoded-submenu">
                <li class="<?= $admin_list ?>">
                  <a href="<?= site_url('admin#1/') ?>" class=""><?= lang('lang.side_menu.admin_list') ?></a>
                </li>
                <li class="<?= $create_admin ?>">
                  <a href="<?= site_url('admin/create') ?>" class=""><?= lang('lang.side_menu.create_admin') ?></a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <!-- [ Admin ] end -->

          <!-- [ logout ] -->
          <?php if (false) { ?>
            <li data-username="log out logout" class="nav-item">
              <a href="<?= site_url('credential/logout') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext"><?= lang('lang.side_menu.logout') ?></span></a>
            </li>
          <?php } ?>
          <!-- [ logout ] end -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- [ navigation menu ] end -->
<?php } ?>