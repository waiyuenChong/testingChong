<div>
    <div class="container">
        <div class="maintext">
            <h2>
                SOHAI SOHAI
            </h2>
            <p>
                hello hello hello hello hello
            </p>
        </div>

        <div class="wave">
            <!-- <div class="single-wave" style="background-image:url('<?= IMG_PATH ?>/Testing_Wave/1.png')"> -->
            <div class="single-wave" style="background-image:url('<?= IMG_PATH ?>/Wave/Wave_top/BG-22.png')">

                testing div
            </div>
        </div>
    </div>
</div>

<style>
    .container {
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
    }

    .wave {
        position: absolute;
        width: 100%;
        overflow: hidden;
        height: 50%;
        bottom: -1px;
        background: white;
        z-index: 5;
    }

    .single-wave {
        position: absolute;
        left: 0;
        width: 200%;
        height: 100%;
        background: #3C9FBD;
        background-repeat: repeat no-repeat;
        background-position: 0 top;
        transform-origin: center top;
        -webkit-background-size: 50% 80px;
        background-size: 40% 80px;
        animation: animate 18s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: translateX(0) translateZ(0) scaleY(2.5);
        }

        50% {
            transform: translateX(-25%) translateZ(0) scaleY(0.55);
        }

        75% {
            transform: translateX(-25%) translateZ(0) scaleY(4);
        }

        100% {
            transform: translateX(-50%) translateZ(0) scaleY(1);
        }
    }
</style>