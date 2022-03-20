<style>
    .main {
        background-image: url('<?= IMG_PATH ?>/bg-images/cubes.png');
        background-size: cover;
    }

    @media screen and (min-width: 2560px) {
        .main {
            height: 78% !important;
            align-items: center !important;

        }

        .images {
            height: 500px !important;
        }


        .twin-tower {
            background-position: right !important;
        }

        .top {
            height: 12%;
        }

        h1 {
            font-size: 50px;
        }

        p {
            font-size: 25px;
        }
    }


    @media screen and (max-width: 1024px) {

        .twin-tower-outer {
            height: 53% !important;
        }
    }

    @media screen and (max-width: 768px) {
        .twin-tower-outer {
            background: rgba(255, 255, 255, 1) !important;
            background-image: url('<?= IMG_PATH ?>/bg-images/twin-tower-cropped-1.png') !important;
            background-repeat: no-repeat !important;
            background-size: 105% 100% !important;
        }

        .twin-tower {
            background-image: none !important;

        }

        .twin-text {
            background: rgba(0, 0, 38, .8);
            color: white;
            height: 100%;
        }

        .main {
            background-image: url('<?= IMG_PATH ?>/bg-images/cubes2.png');
            height: 100vh;
        }

        .grow {
            height: 180px !important;
        }
    }

    @media screen and (max-width: 425px) {
        .img_product {
            height: 380px !important;
        }

        .twin-tower-outer {
            height: 32% !important;
        }
    }


    @media screen and (max-width: 375px) {
        .grow {
            height: 150px !important;
        }
    }


    @media screen and (max-width: 320px) {
        .img_product {
            height: 380px !important;
        }

        .twin-tower-outer {
            height: 28% !important;
        }
    }
</style>

<div class="row top justify-content-center mr-0" style="background-image:linear-gradient(to right,#1E82D4, #2D397F);">
    <div class="col-6 text-center">
        <h3 class="pt-5 mt-5 d-lg-none d-block" style="color: white;"><?= lang('lang.header.product') ?></h3>
        <h3 class="pt-5 mt-5 d-lg-block d-none" style="color: white;"></h3>
    </div>
</div>

<div class="twin-tower-outer row justify-content-lg-start justify-content-center mr-0" style="height: 63%; background-image:linear-gradient(to left,#1E82D4, #2D397F);">
    <div class=" twin-tower col-xl-6 col-lg-6 text-xl-right text-lg-center text-md-right text-center pr-md-5 pt-0 d-lg-block d-none" style="background-image: url(<?= IMG_PATH ?>/bg-images/twin-tower-cropped.png); background-repeat:no-repeat;" data-aos="zoom-in" data-aos-duration="3000">
    </div>
    <div class="twin-text align-items-center d-flex col-xl-5 col-lg-6 col-12 text-left pb-5">
        <div class="row mr-0 justify-content-center" style="color: white;">
            <div class="col-9 text-justify" data-aos="fade-up-right" data-aos-duration="2500">
                <h1><?= lang("lang.product.equityventure") ?></h1>
                <p><?= lang("lang.product.equityventure_content1") ?></p>
                <p><?= lang("lang.product.equityventure_content2") ?></p>
            </div>
        </div>
    </div>
</div>

<div class="main row justify-content-center mr-0 pl-3" style="overflow-x: hidden;">
    <div class="row justify-content-center mr-0 py-5">
        <div class="col-xl-4 col-lg-5 col-md-5 col-10 pt-5 align-self-center" data-aos="fade-right" data-aos-duration="2500">
            <h1><?= lang("lang.product.investment") ?></h1>
            <p class="text-justify"><?= lang("lang.product.investment_content1") ?></p>
            <p class="text-justify"><?= lang("lang.product.investment_content2") ?></p>
        </div>
        <div class=" col-xl-4 col-md-6 col-lg-5 col-12 pr-md-2 pr-0 text-center align-self-center" style="overflow-y: hidden; overflow-x:hidden">
            <div class="row">
                <div class="col-6">
                    <img class="grow" src="<?= IMG_PATH ?>/bg-images/1.png" style="height: 200px; width:auto" data-aos="zoom-in" data-aos-duration="2500">
                </div>
                <div class="col-6">
                    <img class="grow" src="<?= IMG_PATH ?>/bg-images/2.png" style="height: 200px; width:auto" data-aos="zoom-in" data-aos-duration="2500" data-aos-delay="1000">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <img class="grow" src="<?= IMG_PATH ?>/bg-images/3.png" style="height: 200px; width:auto" data-aos="zoom-in" data-aos-duration="2500" data-aos-delay="1500">
                </div>
                <div class="col-6">
                    <img class="grow" src="<?= IMG_PATH ?>/bg-images/4.png" style="height: 200px; width:auto" data-aos="zoom-in" data-aos-duration="2500" data-aos-delay="500">
                </div>
            </div>
        </div>
    </div>
</div>