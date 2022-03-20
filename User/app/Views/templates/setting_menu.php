<?php
$admin_info = (isset($_SESSION[PROJECT]['user'])) ? $_SESSION[PROJECT]['user'] : array();
?>
<div class="dropdown drp-user">
  <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
    <i class="icon feather icon-settings"></i>

  </a>
  <div class="dropdown-menu dropdown-menu-right profile-notification">
    <div class="pro-head">
      <img src="<?=IMG_PATH?>/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
      <span><?=$admin_info['username']?></span>
      <a href="<?=site_url('credential/logout')?>" class="dud-logout" title="<?lang('lang.side_menu.logout')?>">
        <i class="feather icon-log-out"></i>
      </a>
    </div>
    <ul class="pro-body">
      <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
      <li><a href="<?=site_url('profile')?>" class="dropdown-item"><i class="feather icon-user"></i>
          <?lang('lang.side_menu.profile')?></a></li>
      <li><a href="<?=site_url('profile')?>" class="dropdown-item"><i class="feather icon-unlock"></i>
          <?lang('lang.credential_nav_change_pwd')?></a></li>
      <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
      <li><a href="<?=site_url('credential/logout')?>" class="dropdown-item"><i class="feather icon-log-out"></i>
          <?lang('lang.side_menu.logout')?></a></li>
    </ul>
  </div>
</div>