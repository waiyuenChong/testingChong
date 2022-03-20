<style>
    .main {
        height: 100vh !important;
        align-items: center !important;
    }


    @media screen and (min-width: 5119px) {
        .map {
            width: 2000px;
            height: 1000px;
        }
    }

    @media screen and (min-width: 2560px) {
        .top {
            height: 12%;
        }

        .map {
            width: 2000px;
            height: 800px;
        }
    }

    @media screen and (max-width: 1024px) {
        .map {
            width: 300%;
            padding-left: 27%;
        }

        .map_card {
            width: 31% !important;
        }
    }

    @media screen and (max-width: 768px) {
        .map {
            width: 225%;
            padding-left: 27px;
        }

        .map_container {
            padding-top: 100px;
        }

        .map_card {
            width: 42% !important;
            right: 1% !important;
            top: 22% !important;
        }
    }

    @media screen and (max-width: 425px) {

        .main {
            height: auto !important;
        }

        .map_card {
            position: relative !important;
            width: 90% !important;
        }

        .map {
            width: 95%;
            padding-left: 0px;
        }

        .main {
            padding-left: 30px !important;
        }
    }
</style>

<div class="row top justify-content-center mr-0" style="background-image:linear-gradient(to right,#1E82D4, #2D397F)">
    <div class="col-6 text-center">
        <h3 class="pt-5 mt-5 d-lg-none d-block" style="color: white;"><?= lang('lang.header.contact') ?></h3>
        <h3 class="pt-5 mt-5 d-lg-block d-none" style="color: white;"></h3>
    </div>
</div>
<div class="main row justify-content-xl-center align-items-center justify-content-md-start justify-content-center mr-0 py-5" style="background-image: url(<?= IMG_PATH ?>/bg-images/MTR-08.png); background-size: 100%, auto; background-repeat: no-repeat; height: auto;">
    <!-- <div class="container"> -->
    <div class="map_card card order-first order-md-last" style="border-radius: 15px; width: 24%; position:absolute; z-index: 998; right: 5%; top: 23%;">
        <div class="card-body">
            <div class="col-12 ">
                <div class="row mr-0">
                    <div class="col-1 pt-1">
                        <span><i class="feather icon-map-pin" style="color: #1E82D4;"></i></span>
                    </div>
                    <div class="col-10 pr-0">
                        <h3><?= lang('lang.contact.ourlocation') ?></h3>
                        <p><?= lang('lang.contact.address') ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 pt-1">
                        <span><i class="feather icon-phone" style="color: #1E82D4;"></i></span>
                    </div>
                    <div class=" col-10 pr-0">
                        <h3><?= lang('lang.contact.callus') ?></h3>
                        <p><?= lang('lang.contact.phoneno') ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 pt-1">
                        <span><i class="feather icon-mail" style="color: #1E82D4;"></i></span>
                    </div>
                    <div class=" col-10 pr-0">
                        <h3><?= lang('lang.contact.emailus') ?></h3>
                        <p><?= lang('lang.contact.email') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <div>
        <!-- Google Map Copied Code -->
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8260.463513295641!2d101.70771292739026!3d3.1517451221996584!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d45c7da5d3%3A0x1e4045e002a01334!2sEtiqa%20Twin%20Towers%2C%2011%2C%20Jalan%20Pinang%2C%20Kuala%20Lumpur%2C%2050450%20Kuala%20Lumpur%2C%20Wilayah%20Persekutuan%20Kuala%20Lumpur%2C%20Malaysia!5e0!3m2!1sen!2sus!4v1635126403547!5m2!1sen!2sus" class="map" width="1000" height="600" allowfullscreen="" loading="lazy"></iframe> -->
        <iframe src="https://maps.google.com/maps?q=No%201,%20Jalan%20Tunku%20Putra,%20Bukit%20Tunku,%2050480%20Kuala%20Lumpur,%20Federal%20Territory%20of%20Kuala%20Lumpur,%20Malaysia&t=&z=13&ie=UTF8&iwloc=&output=embed" class="map" width="1000" height="600" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>