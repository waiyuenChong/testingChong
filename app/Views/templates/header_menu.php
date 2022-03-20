<?php
$index_nav = $index = '';
if ($page == 'index') {
  $index_nav = $index = 'active';
  $index_nav .= ' pcoded-trigger';
}

if ($page == 'about') {
  $about_nav = $about = 'active';
  $about_nav .= ' pcoded-trigger';
}

if ($page == 'product') {
  $product_nav = $product = 'active';
  $product_nav .= ' pcoded-trigger';
}

if ($page == 'contact') {
  $contact_nav = $contact = 'active';
  $contact_nav .= ' pcoded-trigger';
}
?>



<style>
.logo_nbtc {
    width: 40%;
    height: auto;
}

.nav_button:focus {
    outline: 0;
}

.active {
    border-bottom: 2px solid lightblue;

}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    /* background-image: linear-gradient(to top right, #1E82D4, #2D397F); */
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    opacity: 0.9;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (min-width:4000px) {
    .header_text {
        font-size: 40px !important;
    }
}

@media screen and (min-width: 2560px) {
    .logo_main {
        left: 5%;
    }

    .header_menu {
        right: 11%;
    }

    .header_text {
        font-size: 22px;
    }
}


@media screen and (max-width: 1024px) {
    .logo_nbtc {
        width: 73%;
    }
}

@media screen and (max-width: 425px) {
    .logo_nbtc {
        width: 200% !important;
    }
}

@media screen and (max-width: 990px) {
    .nav_btn {
        position: absolute;
        right: 5px;
        top: 80%;
    }
}


@media screen and (max-width: 768px) {
    .logo_nbtc {
        width: 90%;
    }

    .navbar-dark .navbar-nav .nav-link {
        background-color: white;
        color: black !important;
        width: 200px;
        text-align: start;
        padding-left: 15px;
    }


}

@keyframes transitionIn{
        from{
            opacity: 0;
            transform: translateY(-150px);
        }

        to{
            opacity: 1;
            transform: translateY(0);
        }
    }

    .logo_main{
        animation: transitionIn 1s;
    }

    /* #particles-js{
      height: 20%;
      width: 100%;
    } */
</style>

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute" style="z-index: 999;">
  <div class="logo_main col-xl-5 col-lg-4 col-5">
    <img class="logo" src="<?= IMG_PATH ?>/logo/logo-white.png" alt="">
  </div>
  <div class="header_menu nav_btn col-xl-6 col-lg-6 col-5 text-right">
    <div class="row float-right">
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="color: black">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="tab nav-link mr-3" href=<?= BASE_URL . "/home/index" ?>><?= lang('lang.header.home') ?></a>
          </li>
          <li class="nav-item">
            <a class="tab nav-link mr-3" href=<?= BASE_URL . "/home/about" ?>><?= lang('lang.header.about') ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-3" href=<?= BASE_URL . "/home/product" ?>><?= lang('lang.header.product') ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-3" href=<?= BASE_URL . "/home/contact" ?>><?= lang('lang.header.contact') ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xl-1 col-lg-2 col-md-3 col-5 order-lg-last align-self-center">
    <div class="row justify-content-end">
      <div class="col-5">
        <button class="nav_button navbar-toggler pr-0" style="border: 0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </div>
</nav> -->

<div class="row align-items-center py-5 mr-0 mx-0 position-absolute bg-transparent" style="z-index: 999; width:100%">
    <div class="logo_main col-xl-7 col-5 pl-xl-5">
        <img class="logo_nbtc pl-md-5 pl-2" src="<?= IMG_PATH ?>/Content/Header/Logo-color.png" alt="">
    </div>
    <div class="col-xl-5 col-7 align-self-center text-center animated fadeInDown">
        <div class="header_text row d-lg-block d-none">
            <a class=" mr-5" style="color: white;" href=<?= BASE_URL . "/#home" ?>><?= lang('lang.header.home') ?></a>
            <a class=" mr-5" style="color: white;" href=<?= BASE_URL . "/#about_us" ?>><?= lang('lang.header.about') ?></a>
            <a class=" mr-5" style="color: white;"
                href=<?= BASE_URL . "/#service" ?>><?= lang('lang.header.service') ?></a>
            <a class=" mr-5" style="color: white;"
                href=<?= BASE_URL . "/#client" ?>><?= lang('lang.header.client') ?></a>
            <a class="" style="color: white;"
                href=<?= BASE_URL . "/#contact" ?>><?= lang('lang.header.contact') ?></a>

        </div>
        <div class="row mx-0 float-right d-lg-none d-block">
            <span class="mt-1 pl-3 pr-md-4 pr-2" style="cursor:pointer;color:white;" onclick="openNav()"><i
                    class="feather icon-menu" style="font-size: 24px;"></i></span>
        </div>

        <div id="mySidenav" class="sidenav d-lg-none d-block">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class=" mr-3" style="color: white;" href=<?= BASE_URL . "/#home" ?>><?= lang('lang.header.home') ?></a>
            <a class=" mr-3" style="color: white;" href=<?= BASE_URL . "/#about_us" ?>><?= lang('lang.header.about') ?></a>
            <a class=" mr-3" style="color: white;"
                href=<?= BASE_URL . "/#service" ?>><?= lang('lang.header.service') ?></a>
            <a class=" mr-3" style="color: white;"
                href=<?= BASE_URL . "/#client" ?>><?= lang('lang.header.client') ?></a>
            <a class="" style="color: white;"
                href=<?= BASE_URL . "/#contact" ?>><?= lang('lang.header.contact') ?></a>
        </div>
    </div>
</div>

<script>
$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) {
                        return false;
                    } else {
                        $target.attr('tabindex', '-1');
                        $target.focus();
                    };
                });
            }
        }
    });

// $('.navbar-nav').on('click', 'li', function() {
//   $('.nav-item').removeClass('active');
//   $(this).addClass('active');
// });


$(function() {
    $('.link').each(function() {
        var isActive = this.pathname === location.pathname;
        $(this).parent().toggleClass('active', isActive);
    });
});


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>