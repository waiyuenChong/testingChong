<style>
    @media screen and (min-width: 2560px) {
        .main {
            height: 105% !important;
            align-items: center !important;
        }
    }

    @media screen and (max-width: 320px) {
        .img_philosophy {
            height: 380px !important;
        }
    }
</style>
<div class="row bg-primary justify-content-center mr-0">
    <div class="col-6 text-center">
        <h3 class="pt-5 mt-5" style="color: white;"><?= lang('lang.header.philosophy') ?></h3>
    </div>
</div>

<div class="main row justify-content-md-end justify-content-center py-md-5 mr-0">
    <div class="col-lg-4 col-md-5 col-10 pt-5 ">
        <p><?= lang('lang.philosophy.philosophy_content1') ?></p>
        <p><?= lang('lang.philosophy.philosophy_content2') ?></p>
    </div>
    <div class="col-md-6 col-12 pr-md-2 pr-0 text-center">
        <img class="img_philosophy" src="<?= IMG_PATH ?>/bg-images/Other Menu MTZR-06.png" style="height: 500px; width:auto">
    </div>
</div>