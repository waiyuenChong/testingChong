<style>
    .img_market {
        height: 180px;
        width: auto;
        image-rendering: auto;
        image-resolution: 300dpi;
    }

    @media screen and (min-width: 2560px) {
        .main {
            height: 95% !important;
        }
    }

    @media screen and (max-width: 425px) {
        .img_market {
            height: 100px !important;
            width: auto;
        }
    }
</style>

<div class="row bg-primary justify-content-center mr-0">
    <div class="col-6 text-center">
        <h3 class="pt-5 mt-5 d-lg-none d-block" style="color: white;"><?= lang('lang.market.market') ?></h3>
        <h3 class="pt-5 mt-5 d-lg-block d-none" style="color: white;"></h3>
    </div>
</div>


<div class="main row justify-content-center py-5 my-5 mr-0">
    <div class="col-10 text-center align-self-center">
        <div class="row">
            <div class="col-lg-3 col-6">
                <img class="img_market" src="<?= IMG_PATH ?>/bg-images/philippines.png" loading="eager">
                <h6 class=""><?= lang('lang.market.philippines') ?></h6>
            </div>
            <div class="col-lg-3 col-6">
                <img class="img_market" src="<?= IMG_PATH ?>/bg-images/singapore.png" loading="eager">
                <h6 class=""><?= lang('lang.market.singapore') ?></h6>
            </div>
            <div class="col-lg-3 col-6">
                <img class="img_market" src="<?= IMG_PATH ?>/bg-images/malaysia.png" loading="eager">
                <h6 class=""><?= lang('lang.market.malaysia') ?></h6>
            </div>
            <div class="col-lg-3 col-6">
                <img class="img_market" src="<?= IMG_PATH ?>/bg-images/thailand.png" loading="eager">
                <h6 class=""><?= lang('lang.market.thailand') ?></h6>
            </div>
            <div class="col-lg-3 col-6">
                <img class="img_market" src="<?= IMG_PATH ?>/bg-images/china.png" loading="eager">
                <h6 class=""><?= lang('lang.market.china') ?></h6>
            </div>
            <div class="col-lg-3 col-6">
                <img class="img_market" src="<?= IMG_PATH ?>/bg-images/hongkong.png" loading="eager">
                <h6 class=""><?= lang('lang.market.hongkong') ?></h6>
            </div>
            <div class="col-lg-3 col-6">
                <img class="img_market" src="<?= IMG_PATH ?>/bg-images/taiwan.png" loading="eager">
                <h6 class=""><?= lang('lang.market.taiwan') ?></h6>
            </div>
            <div class="col-lg-3 col-6">
                <img class="img_market" src="<?= IMG_PATH ?>/bg-images/vietnam.png" loading="eager">
                <h6 class=""><?= lang('lang.market.vietnam') ?></h6>
            </div>
        </div>
    </div>
</div>