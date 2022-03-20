<style>
    .background {
        /* background-color: #3C9FBD; */
        /* background-image: linear-gradient(#125366, #3C9FBD); */
        background-image: linear-gradient(#5AC6E5, #2F6EDC);
    }

    .wave_bg {
        background: url('<?= IMG_PATH ?>/Wave/Wave_center/BG-24.png');
        /* position: absolute; */
        height: 100%;
        width: 100%;

    }

    .background2 {
        background-image: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-Line-only.png');
        padding-left: 0%;
        /* background-repeat: repeat; */
        background-size: cover;
        background-position: center;
        background-size: 100% 100%;
        height: 600px;
        /* min-width: 450px; */
        animation: slide 5s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;

    }

    @keyframes slide {
        0% {
            transform: translateX(0%) translateZ(0);
        }

        100% {
            transform: translateX(100%) translateZ(0);
        }
    }


    .background1 {
        background-image: url('<?= IMG_PATH ?>/Content/Header/MTR-18.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 640px;
        min-width: 388px;
    }


    .background_title1 {
        font-weight: bold;
        font-size: 46px;
        color: white;
    }

    .background_title2 {
        font-size: 20px;
        color: white;
    }

    .client_title {
        font-size: 50px;
        font-weight: bold;
        color: #3C9FBD;
    }

    .client_desc {
        font-size: 15px;
        /* color: #3C9FBD; */
    }


    .cfluid {
        padding-left: 10% !important;
        padding-right: 10% !important;
        padding-bottom: 5% !important;
    }

    .ffluid {
        padding-left: 8% !important;
        padding-right: 8% !important;
        /* padding-bottom: 0% !important;
        padding-top: 0%; */
    }



    .bfluid {
        padding-left: 15% !important;
        padding-right: 15% !important;
        padding-bottom: 0% !important;
    }

    .dfluid {
        padding-left: 18% !important;
        padding-right: 18% !important;
        padding-bottom: 0% !important;
    }

    .efluid {
        padding-left: 5% !important;
        padding-right: 5% !important;
        padding-bottom: 5% !important;
        padding-top: 15% !important;
    }


    .card {
        border-radius: 20px;
        border-color: #3C9FBD;
        width: 80%;
        height: 50%;
    }

    .swiper {
        background-image: #5AC6E5;
        width: 100%;
        height: 800px;

    }

    #swiper_client {
        /* background-image: #5AC6E5; */
        width: 100%;
        height: 435px;

    }

    .swiper_row {
        padding-left: 6%;

    }

    .swiper_img1 {
        height: 900px;
        width: 850px;
    }

    .swiper_img2 {
        height: 800px;
        width: 650px;
    }

    .service_header {
        font-size: 40px;
        font-weight: bold;
        color: white;
    }

    .service_header_desc {
        color: white;
    }

    .service_title {
        font-size: 50px;
        font-weight: bold;
        color: white;
        padding-top: 60%;

    }

    .service_desc {
        /* position: absolute; */
        width: 100%;

    }

    .service_desc2 {
        /* position: absolute; */
        width: 100%;
    }

    .options {
        font-size: 12px;
    }

    /* .wave{
        background-color: white;
    } */

    section {
        position: relative;
        width: 100%;
        height: 114vh;
        /* background: #3C9FBD; */
        background-image: linear-gradient(#3C9FBD, #125366);
        overflow: hidden;
    }

    section.section_footer {
        position: relative;
        width: 100%;
        /* height: 80vh; */
        /* background: #3C9FBD; */
        background-image: linear-gradient(#3C9FBD, #125366);
        overflow: hidden;
    }

    .section3 {
        position: relative;
        width: 100%;
        height: 100vh;
        /* background: #3C9FBD; */
        background-image: linear-gradient(#3C9FBD, #125366);
        overflow: hidden;
    }

    .wave {
        position: relative;
        bottom: 96px;
        /* top: -99px; */
        left: 0;
        width: 100%;
        height: 159px;
        /* background: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-23.png'); */
        background: url('<?= IMG_PATH ?>/Testing_Wave/2.png');
        /* background-repeat: no-repeat; */

        background-size: 1000px 100px;
    }

    .wave_4 {
        position: relative;
        bottom: 96px;
        /* top: -99px; */
        left: 0;
        width: 100%;
        height: 96px;
        /* background: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-23.png'); */
        background: url('<?= IMG_PATH ?>/Testing_Wave/4.png');
        /* background-repeat: no-repeat; */

        background-size: 1000px 100px;
    }

    .wave_5 {
        position: relative;
        bottom: 96px;
        /* top: -99px; */
        left: 0;
        width: 100%;
        height: 96px;
        /* background: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-23.png'); */
        background: url('<?= IMG_PATH ?>/Testing_Wave/2.png');
        /* background-repeat: no-repeat; */

        background-size: 1000px 100px;
    }

    .wave_6 {
        position: relative;
        bottom: 96px;
        /* top: -99px; */
        left: 0;
        width: 100%;
        height: 96px;
        /* background: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-23.png'); */
        background: url('<?= IMG_PATH ?>/Testing_Wave/2.png');
        /* background-repeat: no-repeat; */

        background-size: 1000px 100px;
        /* transform: 50px; */
    }

    .wave_7 {
        position: relative;
        bottom: 96px;
        /* top: -99px; */
        left: 0;
        width: 100%;
        height: 96px;
        /* background: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-23.png'); */
        background: url('<?= IMG_PATH ?>/Testing_Wave/2.png');
        /* background-repeat: no-repeat; */

        background-size: 1000px 100px;
    }


    .wave_1 {
        position: relative;
        bottom: 96px;
        /* top: -99px; */
        left: 0;
        width: 100%;
        height: 96px;
        /* background: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-23.png'); */
        background: url('<?= IMG_PATH ?>/Testing_Wave/2.png');
        /* background-repeat: no-repeat; */

        background-size: 1000px 100px;
    }

    section.section_footer .wave_3 {
        position: absolute;
        /* bottom: 0; */
        top: -1px;
        left: 0;
        width: 100%;
        height: 100px;
        /* background: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-23.png'); */
        background: url('<?= IMG_PATH ?>/Testing_Wave/4.png');
        /* background-repeat: no-repeat; */

        background-size: 1000px 100px;
    }


    section.light_blue .wave_4 {
        position: absolute;
        /* bottom: 0; */
        top: -1px;
        left: 0;
        width: 100%;
        height: 100px;
        /* background: url('<?= IMG_PATH ?>/Wave/Wave_top/BG-23.png'); */
        background: url('<?= IMG_PATH ?>/Testing_Wave/4.png');
        /* background-repeat: no-repeat; */

        background-size: 1000px 100px;
    }

    .wave.wave1 {
        animation: animate 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        margin-top: 1%;
        /* bottom: -2px; */
    }

    .wave_3.wave3 {
        animation: animate 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;
    }

    .wave_4.wave4 {
        animation: animate 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 1px;
    }

    .wave_5.wave5 {
        animation: animate2 5s linear infinite;
        z-index: 999;
        opacity: 1;
        animation-delay: -5s;
        bottom: -1px;
    }

    .wave_6.wave6 {
        animation: animate2 7s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: 0s;
        bottom: -1px;
    }

    .wave_7.wave7 {
        animation: animate2 12s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: 0s;
        bottom: 191px;
    }

    .wave_1.wave1 {
        animation: animate2 7s linear infinite;
        z-index: 999;
        opacity: 1;
        animation-delay: 0s;
        bottom: 95px;
    }


    .background2 {
        animation: animate2 10s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0s;
        bottom: 0;

    }

    @keyframes animate {

        0% {
            background-position-x: 0;
            /* transform: translateX(0) translateZ(0) scaleY(2.5); */
        }

        25% {
            /* background-position-x: 200px; */
            transform: scaleY(1);
        }

        50% {
            /* background-position-x: 400px; */
        }

        75% {
            /* background-position-x: 600px; */
            transform: scaleY(1);
        }

        100% {
            background-position-x: 1000px;
        }
    }

    @keyframes animate2 {

        0% {
            background-position-x: 0;
        }

        100% {
            background-position-x: -1000px;
            /* transform: scaleY(1); */

        }
    }


    .modal {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal2 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal3 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal4 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal5 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal6 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal7 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal8 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal9 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal10 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal12 {
        display: none;
        position: fixed;
        z-index: 1100;
        padding-top: 60px;
        padding-bottom: 20px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 1000px;
        transition: transform .2s;
    }

    /* .modal-content:hover{
        transform: scale(1.5);
    } */

    .gallery {
        transition: 0.7s;
    }

    .gallery:hover {
        transform: scale(1.5);
    }



    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    .close:hover,
    .close:focus {
        color: blue;
        text-decoration: none;
        cursor: pointer;
    }

    .close {
        font-size: 3.5rem;
        color: white;
    }

    .neonText {
        animation: flicker 1.5s infinite alternate;
        color: black;
    }

    h1 {
        font-size: 4.2rem;
    }

    /* Flickering animation */
    @keyframes flicker {

        0%,
        18%,
        22%,
        25%,
        53%,
        57%,
        100% {

            text-shadow:
                0 0 4px #fff,
                0 0 11px #fff,
                0 0 19px #fff,
                0 0 40px #0fa,
                0 0 80px #0fa,
                0 0 90px #0fa,
                0 0 100px #0fa,
                0 0 150px #0fa;

        }

        20%,
        24%,
        55% {
            text-shadow: none;
        }
    }


    /* Additional styling */

    h2 {
        font-size: 1.8rem;
    }

    .container {
        margin-top: 5%;
        margin-bottom: 3%;
    }

    h1,
    h2 {
        text-align: center;
        text-transform: uppercase;
        font-weight: 400;
    }

    /* .area {
        background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
        width: 100%;
        height: 100vh;
    } */

    .circles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .circles li {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animaterotate 5s linear infinite;
        bottom: -150px;

    }

    .circles li:nth-child(1) {
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
    }


    .circles li:nth-child(2) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
    }

    .circles li:nth-child(3) {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
    }

    .circles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
    }

    .circles li:nth-child(5) {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }

    .circles li:nth-child(6) {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
    }

    .circles li:nth-child(7) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
    }

    .circles li:nth-child(8) {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
    }

    .circles li:nth-child(9) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
    }

    .circles li:nth-child(10) {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
    }

    @keyframes animaterotate {

        0% {
            transform: translateY(0) translateZ(0) rotate(0);
            opacity: 1;
            border-radius: 0%;
        }



        100% {
            transform: translateY(-1000px) translateZ(0) rotate(720deg);
            opacity: 0;
            border-radius: 100%;
        }

    }



    /* 100% Image Width on Smaller Screens */
    /* @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
            height: 80%;
        }
    } */



    @media screen and (max-width:342px) {
        .background1 {
            min-width: 330px;
        }

        .pattern1 {
            padding-bottom: 10%;
        }

        .pattern2 {
            height: 160px;
        }

        .swiper_row {
            padding-left: 4%;
        }

        .swiper {
            width: 100%;
            height: 618px;
        }

        .service_title {
            font-size: 17px;
            padding-top: 39%;
            padding-bottom: 9%;
            text-align: center;
        }

        .service_desc {
            text-align: center;
            padding-top: 10%;
            font-size: 14px;
        }

        .service_desc2 {
            text-align: center;
            font-size: 14px;
        }

        .service_desc3 {
            text-align: center;
            font-size: 14px;
        }

        .about_img {
            padding-top: 15%;
            width: 260px;
            height: 750px;
            position: absolute;
            opacity: 0.2;
        }

        .vis_mis_img2 {
            width: 130px;
            height: 450px;
            position: absolute;
            opacity: 0.2;
            /* padding-bottom: 50%; */
        }

        .col_vis_mis_img2 {
            display: none;
        }

        .card {
            height: 350px;
            width: 100%;
            text-align: center;

        }

        .swiper_img2 {
            padding-top: 0%;
            padding-left: 0%;
            padding-right: 20%;
            width: 280px;
            height: 300px;
            position: absolute;
            /* opacity: 0.2; */
        }

        .swiper_col_img {
            display: none;
        }

        .swiper_col_img2 {
            display: none;
        }

        /* .swiper_col_img3 {
            display: block;
        } */

        .bfluid {
            padding-left: 0% !important;
            padding-right: 0% !important;
            padding-bottom: 5% !important;
        }

        .cfluid {
            padding-left: 10% !important;
            padding-right: 10% !important;
            padding-bottom: 20% !important;
        }

        .container {
            margin-top: 32%;
        }

        .client_desc {
            font-size: 12px;
        }

        .map_img {
            width: 170px;
            height: 250px;
        }

        .options {
            font-size: 10px;
        }

        .info {
            font-size: 12px;
        }

        section {
            height: 100vh;
        }

        .wave_3 {
            display: none;
        }

        .map_frame {
            width: 220px;
            height: 170px;
        }

        section.section_footer {
            height: 102vh;
        }

        #client_swiper_prev {
            top: 227px;
        }

        #client_swiper_next {
            top: 227px;
        }
    }

    @media screen and (max-width:425px) and (min-width:343px) {

        .pattern1 {
            padding-bottom: 10%;
        }

        .pattern2 {
            height: 160px;
        }

        .about_img {
            padding-top: 10%;
            padding-left: 2%;
            width: 300px;
            height: 750px;
            /* height: auto; */
            position: absolute;
            opacity: 0.2;
        }

        .vis_mis_img2 {
            width: 130px;
            height: 450px;
            position: absolute;
            opacity: 0.2;
            /* padding-bottom: 50%; */
        }

        .col_vis_mis_img2 {
            display: none;
        }

        .card {
            height: 300px;
            width: 100%;
            text-align: center;

        }

        /* .swiper {
            width: 100%;
            height: 618px;
        } */

        .swiper_img2 {
            padding-top: 8%;
            padding-left: 0%;
            padding-right: 61%;
            width: 424px;
            height: 263px;
            position: absolute;
            /* opacity: 0.2; */
        }

        .swiper_row {
            padding-left: 5%;
        }

        .service_title {
            font-size: 24px;
            padding-top: 39%;
            padding-bottom: 10%;
            text-align: center;
        }

        .service_desc {
            text-align: center;
        }

        .service_desc2 {
            text-align: center;
        }

        .service_desc3 {
            text-align: center;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        /* .swiper_col_img3 {
            display: block;
        } */

        .service_desc {
            width: 91%;
        }


        .service_desc2 {
            width: 89%;
        }

        .bfluid {
            padding-left: 7% !important;
            padding-right: 7% !important;
            padding-bottom: 5% !important;
        }

        .cfluid {
            padding-left: 10% !important;
            padding-right: 10% !important;
            padding-bottom: 15% !important;
        }

        .container {
            margin-top: 29%;
        }

        .client_desc {
            font-size: 12px;
        }

        .map_img {
            width: 170px;
            height: 250px;
        }

        .options {
            font-size: 11px;
        }

        .info {
            font-size: 13px;
        }

        section {
            height: 100vh;
        }

        .wave_3 {
            display: none;
        }

        .map_frame {
            width: 250px;
            height: 170px;
        }

        section.section_footer {
            height: 102vh;
        }

        #client_swiper_prev {
            top: 225px;
            left: 0;
        }

        #client_swiper_next {
            top: 225px;
            right: 0;
        }
    }

    @media screen and (max-width:448px) and (min-width:426px) {
        .pattern1 {
            padding-bottom: 10%;
        }

        .pattern2 {
            height: 160px;
        }

        .about_img {
            padding-top: 5%;
            width: 290px;
            height: 650px;
            position: absolute;
            opacity: 0.2;
        }

        .vis_mis_img2 {
            width: 130px;
            height: 450px;
            position: absolute;
            opacity: 0.2;
            /* padding-bottom: 50%; */
        }

        .col_vis_mis_img2 {
            display: none;
        }

        .card {
            height: 300px;
            width: 100%;
            text-align: center;

        }

        .cfluid {
            padding-left: 10% !important;
            padding-right: 10% !important;
            padding-bottom: 15% !important;
        }

        .container {
            margin-top: 29%;
        }

        .swiper_img2 {
            padding-top: 4%;
            padding-left: 0%;
            padding-right: 47%;
            width: 466px;
            height: 262px;
            position: absolute;
            /* opacity: 0.2; */
        }

        .swiper_row {
            padding-left: 5%;
        }

        .service_title {
            font-size: 33px;
            padding-top: 44%;
            text-align: center;
        }

        .service_desc {
            text-align: center;
        }

        .service_desc2 {
            text-align: center;
        }

        .service_desc3 {
            text-align: center;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        /* .swiper_col_img3 {
            display: block;
        } */

        .map_img {
            width: 170px;
            height: 250px;
        }

        section {
            height: 100vh;
        }

        section.section_footer {
            height: 92vh;
        }

        #client_swiper_prev {
            top: 150px;
        }

        #client_swiper_next {
            top: 150px;
        }
    }

    @media screen and (max-width:499px) and (min-width:449px) {
        .pattern1 {
            padding-bottom: 10%;
        }

        .about_img {
            padding-top: 30%;
            width: 350px;
            /* height: 550px; */
            height: auto;
            position: absolute;
            opacity: 0.2;
        }

        .vis_mis_img2 {
            width: 130px;
            height: 450px;
            position: absolute;
            opacity: 0.2;
            /* padding-bottom: 50%; */
        }

        .col_vis_mis_img2 {
            display: none;
        }

        .card {
            height: 300px;
            width: 100%;
            text-align: center;

        }

        .cfluid {
            padding-left: 10% !important;
            padding-right: 10% !important;
            padding-bottom: 15% !important;
        }

        .container {
            margin-top: 22%;
        }

        .swiper_img2 {
            padding-top: 11%;
            padding-left: 0%;
            padding-right: 53%;
            width: 530px;
            height: 286px;
            position: absolute;
            /* opacity: 0.2; */
        }

        .service_title {
            font-size: 33px;
            padding-top: 44%;
            text-align: center;
        }

        .service_desc {
            text-align: center;
        }

        .service_desc2 {
            text-align: center;
        }

        .service_desc3 {
            text-align: center;
        }

        .swiper_row {
            padding-left: 6%;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        /* .swiper_col_img3 {
            display: block;
        } */

        .map_img {
            width: 170px;
            height: 250px;
        }

        section {
            height: 100vh;
        }

        section.section_footer {
            height: 92vh;
        }

        #client_swiper_prev {
            top: 150px;
        }

        #client_swiper_next {
            top: 150px;
        }
    }



    @media screen and (max-width:767px) and (min-width:500px) {
        .wave_3 {
            height: 200px;
        }

        .about_img {
            padding-top: 15%;
            padding-right: 5%;
            width: 420px;
            /* height: 500px; */
            height: auto;
            position: absolute;
            opacity: 0.2;
        }

        .swiper_row {
            padding-left: 6%;
        }

        .pattern2_row {
            height: 60px;
        }

        .about_us_row {
            /* padding-top: 20%; */
            padding-bottom: 30%;
        }

        .vis_mis_img2 {
            width: 180px;
            height: 550px;
        }

        .col_vis_mis_img2 {
            display: none;
        }

        .card {
            height: 40%;
            width: 100%;
            text-align: center;

        }

        .service_title {
            padding-top: 23%;
            font-size: 37px;
            text-align: center;
        }

        .service_desc {
            text-align: center;
        }

        .service_desc2 {
            text-align: center;
        }

        .service_desc3 {
            text-align: center;
        }



        .swiper_img2 {
            padding-top: 8%;
            padding-left: 0%;
            width: 350px;
            height: 361px;
            position: absolute;
            /* opacity: 0.2; */
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        /* .swiper_col_img3 {
            display: none;
        } */

        .map_img {
            width: 170px;
            height: 250px;
        }

        .client_title_img {
            background-image: url('<?= IMG_PATH ?>/Content/Client_Project/MTR-04.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 20% 63%;
            background-size: 2873px;
            height: 453px;
            min-width: 450px;
        }

        .container {
            margin-top: 22%;
        }

        .fs_1000 {
            font-size: 10px;
        }

        section {
            height: 110vh;
        }

        .map_frame {
            width: 370px;
            height: 280px;
        }

        section.section_footer {
            height: 105vh;
        }

        #client_swiper_prev {
            top: 223px;
        }

        #client_swiper_next {
            top: 223px;
        }


    }

    @media screen and (max-width:991px) and (min-width:768px) {
        .card {
            height: 300px;
            width: 100%;
            text-align: center;

        }

        .swiper_row {
            padding-left: 6%;

        }

        .swiper_col_img {
            padding-top: 13%;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        /* .swiper_col_img3 {
            display: none;
        } */

        .dfluid {
            padding-left: 10% !important;
            padding-right: 10% !important;
            padding-bottom: 0% !important;
        }

        .bfluid {
            padding-left: 11% !important;
            padding-right: 11% !important;
            padding-bottom: 0% !important;
        }

        section {
            height: 110vh;
        }


    }

    @media screen and (min-width:320px) and (max-width:375px) {
        .background1 {
            background-size: 257px 266px;
        }

        .background_title1 {
            padding-top: 25%;
            font-weight: bold;
            font-size: 19px;
            color: white;
        }

        .background_title2 {
            font-size: 10px;
            color: white;
        }

        .background_title3 {
            font-size: 10px;
            color: white;
        }
    }

    @media screen and (min-width:376px) and (max-width:425px) {
        .background1 {
            background-size: 306px 343px;
        }

        .background_title1 {
            padding-top: 21%;
            font-weight: bold;
            font-size: 25px;
            color: white;
        }

        .background_title2 {
            font-size: 12px;
            color: white;
        }

        .background_title3 {
            font-size: 12px;
            color: white;
        }

    }

    @media screen and (min-width:426px) and (max-width:768px) {
        .background1 {
            background-size: 385px 404px;
        }

        .background_title1 {
            font-weight: bold;
            font-size: 34px;
            color: white;
        }

        .background_title2 {
            font-size: 14px;
            color: white;
        }

        .background_title3 {
            font-size: 14px;
            color: white;
        }

    }

    @media screen and (min-width:769px) and (max-width:1024px) {
        .background1 {
            background-size: 464px 436px;
        }

        .background_title1 {
            font-weight: bold;
            font-size: 40px;
            color: white;
        }

        .background_title2 {
            font-size: 17px;
            color: white;
        }

        .background_title3 {
            font-size: 17px;
            color: white;
        }
    }

    @media screen and (min-width:1025px) and (max-width:1440px) {
        .background1 {
            background-size: 640px 560px;
        }

        .background_title1 {
            font-weight: bold;
            font-size: 54px;
            color: white;
        }

        .background_title2 {
            font-size: 22px;
            color: white;
        }

        .background_title3 {
            font-size: 22px;
            color: white;
        }

    }

    @media screen and (min-width:1441px) and (max-width:1900px) {
        .background1 {
            background-size: 653px 609px;
        }

        .background_title1 {
            font-weight: bold;
            font-size: 56px;
            color: white;
        }

        .background_title2 {
            font-size: 23px;
            color: white;
        }

        .background_title3 {
            font-size: 23px;
            color: white;
        }

    }

    @media screen and (min-width:1901px) and (max-width:2560px) {
        .background1 {
            background-size: 750px 712px;
        }

        .background_title1 {
            font-weight: bold;
            font-size: 65px;
            color: white;
        }

        .background_title2 {
            font-size: 26px;
            color: white;
        }

        .background_title3 {
            font-size: 26px;
            color: white;
        }
    }

    @media screen and (min-width:2561px) {
        .background1 {
            background-size: 750px 712px;
        }

        .background_title1 {
            font-weight: bold;
            font-size: 65px;
            color: white;
        }

        .background_title2 {
            font-size: 26px;
            color: white;
        }

        .background_title3 {
            font-size: 26px;
            color: white;
        }

    }

    @media screen and (max-width:910px) and (min-width:768px) {
        .about_img {
            padding-top: 10%;
            width: 369px;
            height: 479px;
        }

        .service_title {
            font-size: 37px;
            font-weight: bold;
            color: white;
            padding-top: 46%;
            /* position: absolute; */

        }

        .swiper_img2 {
            width: 333px;
            height: 446px;
            /* padding-top: 40%; */
        }

        .vis_mis_img2 {
            width: 450px;
            height: 705px;
            padding-left: 15%;
            padding-top: 5%;
        }

        /* .card {
            height: 250px;
            width: 100%;
        } */

        .map_img {
            width: 350px;
            height: 350px;
        }

        .client_title_img {
            background-image: url('<?= IMG_PATH ?>/Content/Client_Project/MTR-04.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 20% 63%;
            background-size: 2873px;
            height: 453px;
            min-width: 450px;
        }

        .fs_1000 {
            font-size: 12px;
        }

        /* .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        } */

        /* .swiper_col_img3 {
            display: none;
        } */

        .swiper_row {
            padding-left: 7%;
        }

        .map_frame {
            width: 370px;
            height: 280px;
        }

        section.section_footer {
            height: 95vh;
        }

        #client_swiper_prev {
            top: 150px;
        }

        #client_swiper_next {
            top: 150px;
        }
    }

    @media screen and (max-width:1299px) and (min-width:911px) {

        .about_img {
            width: 450px;
            height: 550px;
        }

        .service_title {
            font-size: 43px;
            font-weight: bold;
            color: white;
            padding-top: 34%;
            /* position: absolute; */

        }

        .swiper_img2 {
            height: 510px;
            width: 408px;
            padding-top: 19%;
            /* padding-left: 15%; */
        }

        .vis_mis_img2 {
            width: 494px;
            height: 651px;
            padding-left: 15%;
        }

        .card {
            height: 250px;
            width: 100%;
        }

        .map_img {
            width: 350px;
            height: 350px;
        }

        .client_title_img {
            background-image: url('<?= IMG_PATH ?>/Content/Client_Project/MTR-04.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 20% 63%;
            background-size: 2873px;
            height: 453px;
            min-width: 450px;
        }

        .fs_1000 {
            font-size: 12px;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        /* .swiper_col_img3 {
            display: none;
        } */

        .swiper_row {
            padding-left: 7%;
        }

        .map_frame {
            width: 370px;
            height: 280px;
        }

        section.section_footer {
            height: 93vh;
        }

        #client_swiper_prev {
            top: 150px;
        }

        #client_swiper_next {
            top: 150px;
        }
    }

    @media screen and (max-width:1839px) and (min-width:1300px) {
        .about_img {
            width: 600px;
            height: 600px;
        }

        .service_title {
            font-size: 50px;
            font-weight: bold;
            color: white;
            padding-top: 23%;
            /* position: absolute; */

        }

        .vis_mis_img2 {
            width: 560px;
            height: 655px;
        }

        .card {
            height: 220px;
            width: 90%;
        }

        .map_img {
            width: 500px;
            height: 300px;
        }

        .client_title_img {
            background-image: url('<?= IMG_PATH ?>/Content/Client_Project/MTR-04.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 27% 70%;
            background-size: 1773px;
            height: 453px;
            min-width: 450px;
        }

        .swiper_img2 {
            height: 580px;
            width: 467px;
            padding-top: 16%;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        .section {
            height: 80vh;
        }

        section.section_footer {
            height: 88vh;
        }

        .map_frame {
            width: 480px;
            height: 330px;
        }

        #client_swiper_prev {
            top: 150px;
        }

        #client_swiper_next {
            top: 150px;
        }
    }

    /*Own screen area */
    @media screen and (max-width:2099px) and (min-width:1840px) {
        .wave_7.wave7 {
            margin-top: -1%;
        }

        .about_img {
            width: 700px;
            height: 650px;
        }

        .service_title {
            font-size: 60px;
            font-weight: bold;
            color: white;
            padding-top: 15%;
            /* position: absolute; */

        }

        .vis_mis_img2 {
            width: 700px;
            height: 650px;
        }

        .card {
            height: 220px;
            width: 80%;
        }

        .map_img {
            width: 500px;
            height: 300px;
        }

        .client_title_img {
            background-image: url('<?= IMG_PATH ?>/Content/Client_Project/MTR-04.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 64% 70%;
            background-size: 2200px;
            height: 453px;
            min-width: 450px;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        .swiper_row {
            padding-left: 8%;
        }

        /* .swiper_col_img3 {
            display: none;
        } */

        .swiper_img2 {
            height: 580px;
            width: 615px;
            padding-top: 10%;
        }

        section.section_footer {
            height: 85vh;
        }

        .map_frame {
            width: 550px;
            height: 300px;
        }

        #client_swiper_prev {
            top: 150px;
        }

        #client_swiper_next {
            top: 150px;
        }

    }

    @media screen and (max-width:2560px) and (min-width:2100px) {

        .wave_7.wave7 {
            margin-top: -1%;
        }

        .about_img {
            width: 700px;
            height: 650px;
        }

        .service_title {
            font-size: 60px;
            font-weight: bold;
            color: white;
            padding-top: 15%;
            /* position: absolute; */

        }

        .vis_mis_img2 {
            width: 700px;
            height: 650px;
        }

        .card {
            height: 220px;
            width: 80%;
        }

        .map_img {
            width: 500px;
            height: 300px;
        }

        .client_title_img {
            background-image: url('<?= IMG_PATH ?>/Content/Client_Project/MTR-04.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 64% 70%;
            background-size: 2200px;
            height: 453px;
            min-width: 450px;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        .swiper_row {
            padding-left: 8%;
        }

        /* .swiper_col_img3 {
            display: none;
        } */

        .swiper_img2 {
            height: 580px;
            width: 680px;
            padding-top: 10%;
        }

        section.section_footer {
            height: 58vh;
        }

        .map_frame {
            width: 550px;
            height: 300px;
        }

        #client_swiper_prev {
            top: 150px;
        }

        #client_swiper_next {
            top: 150px;
        }
    }

    @media screen and (min-width:2561px) {
        .wave_7.wave7 {
            margin-top: -1%;
        }

        .about_img {
            width: 700px;
            height: 650px;
        }

        .service_title {
            font-size: 60px;
            font-weight: bold;
            color: white;
            padding-top: 15%;
            /* position: absolute; */

        }

        .vis_mis_img2 {
            width: 700px;
            height: 650px;
        }

        .card {
            height: 220px;
            width: 80%;
        }

        .map_img {
            width: 500px;
            height: 300px;
        }

        .client_title_img {
            background-image: url('<?= IMG_PATH ?>/Content/Client_Project/MTR-04.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 64% 70%;
            background-size: 2200px;
            height: 453px;
            min-width: 450px;
        }

        .swiper_col_img {
            display: block;
        }

        .swiper_col_img2 {
            display: none;
        }

        .swiper_row {
            padding-left: 8%;
        }

        /* .swiper_col_img3 {
            display: none;
        } */

        .swiper_img2 {
            height: 580px;
            width: 680px;
            padding-top: 10%;
        }

        section.section_footer {
            height: 58vh;
        }

        .map_frame {
            width: 550px;
            height: 300px;
        }

        #client_swiper_prev {
            top: 150px;
        }

        #client_swiper_next {
            top: 150px;
        }
    }

    /*################## Office Gallery Swiper Start #################### */

    .swiper.mySwiper2 {
        width: 100%;
        height: 450px;
        margin-left: auto;
        margin-right: auto;
    }

    .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
    }

    .mySwiper .swiper-slide {
        width: 25%;
        height: 100%;
        opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
    }

    .swiper-slide.gallery_slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /*################## Office Gallery Swiper End #################### */
</style>
<section>
    <!-- <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div> -->


    <div class="background1 align-items-center row mx-0 justify-content-md-center pl-md-0 pb-5 pb-md-0" style="height:100vh">
        <!-- <div class="background2 align-items-center row mx-0 justify-content-md-center pl-md-0 pb-5 pb-md-0" style="height:120vh"> -->
        <div class="background_title row mx-0 justify-content-center">
            <div class="col-12 text-center">
                <div class="row mx-0 pb-4">
                    <span class="background_title1 animated fadeInLeft"><?= lang('lang.title.title1') ?></span>
                </div>
                <div class="row mx-0">
                    <span class="background_title2 animated fadeInRight"><?= lang('lang.title.title2') ?></span>
                </div>
                <div class="row mx-0">
                    <span class="background_title3 animated fadeInRight"><?= lang('lang.title.title3') ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="area"> -->
    <ul class="circles ">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <!-- </div> -->
</section>

<!-- <div class="wave wave1">
</div> -->
<div class="wave_1 wave1"></div>
<div class="wave_7 wave7"></div>


<div class="row mx-0 justify-content-end">
    <img class="pattern1" src="<?= IMG_PATH ?>/Content/About_us/MTR-05.png" style="width:400px; height: 150px;">
    <!-- <img class="pattern1" src="<?= IMG_PATH ?>/Content/About_us/MTR-05.png" style="width:400px; height: 250px;"> -->
</div>

<div class="container-fluid cfluid">
    <div id="about_us" class="about_us_row row mx-0" style="height: 780px">
        <div class="col-xl-7 col-xxl-7 col-lg-7 col-md-7 col-12 animated fadeInLeft">
            <img class="about_img" src="<?= IMG_PATH ?>/Content/About_us/MTR-01.png">
            <!-- <img class="about_img" src="<?= IMG_PATH ?>/Content/About_us/MTR-01.png" style="width:650px; height: 700px;"> -->
        </div>
        <div class="col-md-5 col-12 mt-5 animated fadeInRight">
            <div class="row mx-0 pb-5 mt-5">
                <span class="word30" style="font-size: 45px; font-weight:bolder; color:#3C9FBD"><?= lang('lang.about.about_us') ?></span>
            </div>
            <div class="row mx-0 pb-4">
                <div class="fs_1000 col-12 pl-2 pr-0 pb-3">
                    <?= lang('lang.about.about_desc') ?>
                </div>
                <div class="fs_1000 col-12 pl-2 pr-0">
                    <?= lang('lang.about.about_desc') ?>
                </div>
            </div>
            <div class="pattern2_row row mx-0 justify-content-end">
                <img class="pattern2" src="<?= IMG_PATH ?>/Content/Mission_Vission/MTR-06.png">
            </div>
        </div>
    </div>

    <div class="card_row row mx-0" style="height: 685px;">

        <div class="col_vis_mis col-md-6 col-12 pt-md-5 animated fadeInLeft">
            <!-- <img class="vis_mis_img" src="<?= IMG_PATH ?>/Content/Mission_Vission/MTR-20.png">
            <img class="vis_mis_img" src="<?= IMG_PATH ?>/Content/Mission_Vission/MTR-20.png"> -->

            <div class="card mb-5">
                <div class="card-body">
                    <h5 class="card-title pb-4" style="color:#125366; font-weight:bold"><?= lang('lang.mission_vission.mis_title') ?></h5>
                    <p class="card-text" style="color:#3C9FBD"><?= lang('lang.mission_vission.mission') ?></p>
                </div>

            </div>
            <div class="card ">
                <div class="card-body">
                    <h5 class="card-title pb-4" style="color:#125366; font-weight:bold"><?= lang('lang.mission_vission.vis_title') ?></h5>
                    <p class="card-text" style="color:#3C9FBD"><?= lang('lang.mission_vission.vission') ?></p>
                </div>
            </div>

        </div>
        <div class="col_vis_mis_img2 col-md-6 col-12 text-center animated fadeInRight">
            <div class="row mx-0">
                <img class="vis_mis_img2" src="<?= IMG_PATH ?>/Content/Mission_Vission/MTR-02.png">
            </div>
        </div>
    </div>
</div>

<!-- <section>
        <div class="wave wave1"></div> -->

<!-- </section> -->
<div class="background" id="service">
    <!-- <section class="light_blue"> -->
    <!-- <div class="wave wave1"></div> -->
    <div class="wave_4 wave4"></div>
    <!-- <div class="wave_5 wave5"></div> -->
    <!-- <div class="wave wave4"></div> -->
    <div class="container-fluid ffluid">
        <div class="swiper service_swip bg-transparent animated fadeInLeft">
            <div class="row mx-0 pt-5">
                <div class="service_header col-12 text-center">
                    <span><?= lang('lang.service.service_title') ?></span>
                </div>
                <div class="service_header_desc col-12 text-center">
                    <span><?= lang('lang.service.service_desc') ?></span>
                </div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper_row row mx-0">
                        <div class="swiper_col col-xl-7 col-lg-6 col-md-6 col-12">
                            <!-- <img class="swiper_img1" src="<?= IMG_PATH ?>/Content/Service/MTR-07.png"> -->
                            <div class="swiper_col_img2 col-xl-7 col-lg-8 col-md-7">
                                <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Services/Creative_Design.png">
                            </div>
                            <div class="service_title col-11 col-md-12 pr-0 pl-md-0 pb-md-4">
                                <span><?= lang('lang.service.creative_des') ?></span>
                            </div>
                            <div class="service_desc col-11 col-md-12 pr-0 pb-3" style="color:white">
                                <span><?= lang('lang.service.cd_1') ?></span>
                            </div>
                            <div class="service_desc2 col-11 col-md-12 pr-0 pb-3" style="color:white">
                                <span><?= lang('lang.service.cd_2') ?></span>
                            </div>
                            <div class="service_desc3 col-11 col-md-12 pr-0 " style="color:white">
                                <span><?= lang('lang.service.cd_3') ?></span>
                            </div>
                        </div>
                        <div class="swiper_col_img col-xl-5 col-lg-6 col-md-6">
                            <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Services/Creative_Design.png">
                        </div>
                        <!-- <div class="swiper_col_img3 col-xl-7 col-lg-8 col-md-7">
                            <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Content/Service/MTR-03.png">
                        </div> -->
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper_row row mx-0">
                        <div class="swiper_col col-xl-7 col-lg-6 col-md-6 col-12">
                            <!-- <img class="swiper_img1" src="<?= IMG_PATH ?>/Content/Service/MTR-07.png"> -->
                            <div class="swiper_col_img2 col-xl-7 col-lg-8 col-md-7">
                                <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Services/Software_Development.png">
                            </div>
                            <div class="service_title col-11 col-md-12 pr-0 pl-md-0 pb-md-4">
                                <span><?= lang('lang.service.software_dev') ?></span>
                            </div>
                            <div class="service_desc col-11 col-md-12 pr-0 pb-3" style="color:white">
                                <span><?= lang('lang.service.sd_1') ?></span>
                            </div>
                            <div class="service_desc2 col-11 col-md-12 pr-0 pb-3" style="color:white">
                                <span><?= lang('lang.service.sd_2') ?></span>
                            </div>
                            <div class="service_desc3 col-11 col-md-12 pr-0 " style="color:white">
                                <span><?= lang('lang.service.sd_3') ?></span>
                            </div>
                        </div>
                        <div class="swiper_col_img col-xl-5 col-lg-6 col-md-6">
                            <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Services/Software_Development.png">
                        </div>
                        <!-- <div class="swiper_col_img3 col-xl-7 col-lg-8 col-md-7">
                            <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Content/Service/MTR-03.png">
                        </div> -->
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper_row row mx-0">
                        <div class="swiper_col col-xl-7 col-lg-6 col-md-6 col-12">
                            <!-- <img class="swiper_img1" src="<?= IMG_PATH ?>/Content/Service/MTR-07.png"> -->
                            <div class="swiper_col_img2 col-xl-7 col-lg-8 col-md-7">
                                <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Services/Others.png">
                            </div>
                            <div class="service_title col-11 col-md-12 pr-0 pl-md-0 pb-md-4">
                                <span><?= lang('lang.service.others') ?></span>
                            </div>
                            <div class="service_desc col-11 col-md-12 pr-0 pb-3" style="color:white">
                                <span><?= lang('lang.service.ot_1') ?></span>
                            </div>
                            <div class="service_desc2 col-11 col-md-12 pr-0 pb-3" style="color:white">
                                <span><?= lang('lang.service.ot_2') ?></span>
                            </div>
                            <div class="service_desc3 col-11 col-md-12 pr-0 " style="color:white">
                                <span><?= lang('lang.service.ot_3') ?></span>
                            </div>
                        </div>
                        <div class="swiper_col_img col-xl-5 col-lg-6 col-md-6">
                            <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Services/Others.png">
                        </div>
                        <!-- <div class="swiper_col_img3 col-xl-7 col-lg-8 col-md-7">
                            <img class="swiper_img2 pr-md-5" src="<?= IMG_PATH ?>/Content/Service/MTR-03.png">
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="wave_5 wave5">
        <div class="wave_6 wave6"></div>
    </div>
    <!-- <div class="wave_6 wave6"></div> -->
    <!-- </section> -->
</div>


<!-- <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>

        </section> -->

<div class="client_row row mx-0 animated fadeInRight" id="client">
    <div class="client_title_img col-12">
        <div class="row mx-0 justify-content-center mt-5 mb-5">
            <div class="col-12 text-center">
                <span class="client_title"><?= lang('lang.client.client_title') ?></span>
            </div>
        </div>
        <div class="row mx-0 justify-content-center">
            <div class="col-xl-6 col-xxl-6 col-lg-6 col-md-6 col-12 pl-0 pr-0">
                <span class="client_desc fs_2000"><?= lang('lang.client.client_desc') ?></span>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid bfluid animated fadeInLeft">
    <div class="swiper client_swip" id="swiper_client">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="row mx-0">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-01.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-07.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-10.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-03.png" style="height: 150px; width: 150px;">

                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-04.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-15.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-05.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-14.png" style="height: 150px; width: 150px;">

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row mx-0">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-02.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-06.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-08.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-09.png" style="height: 150px; width: 150px;">

                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-11.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-12.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-13.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-15.png" style="height: 150px; width: 150px;">

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row mx-0">
                    <div class="col-md-4 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-16.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-md-4 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-17.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-md-4 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-18.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-md-4 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-19.png" style="height: 150px; width: 150px;">

                    </div>

                    <div class="col-md-4 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-20.png" style="height: 150px; width: 150px;">

                    </div>
                    <div class="col-md-4 col-6 text-center">
                        <img class="client_logo_img" src="<?= IMG_PATH ?>/ProjectClient/MTR-21.png" style="height: 150px; width: 150px;">

                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev" id="client_swiper_prev"></div>
        <div class="swiper-button-next" id="client_swiper_next"></div>
    </div>
    <div class="row mx-0 justify-content-end">
        <img class="pattern3" src="<?= IMG_PATH ?>/Content/Gallery/one-softlab-mtr.png" style="height: 100px; width: 150px;">
    </div>
</div>


<div class="container">
    <h1 class="neonText">
        Gallery
    </h1>
    <h2 class="neonText">Check out our workspace!
    </h2>

</div>

<div class="contianer-fluid dfluid">
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2" id="myswip2">
        <div class="swiper-wrapper">
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" id="office_img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper" id="myswip">
        <div class="swiper-wrapper">
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" />
            </div>
            <div class="swiper-slide gallery_slide" style="overflow:hidden">
                <img class="gallery" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" />
            </div>
        </div>
    </div>
</div>



<div class="modal" id="imgModal">
    <span class="close" id="span">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal2" id="imgModal2">
    <span class="close" id="span2">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal3" id="imgModal3">
    <span class="close" id="span3">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal4" id="imgModal4">
    <span class="close" id="span4">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal5" id="imgModal5">
    <span class="close" id="span5">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal6" id="imgModal6">
    <span class="close" id="span6">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">
                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal7" id="imgModal7">
    <span class="close" id="span7">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">
                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal8" id="imgModal8">
    <span class="close" id="span8">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">
                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal9" id="imgModal9">
    <span class="close" id="span9">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">
                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal10" id="imgModal10">
    <span class="close" id="span10">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">
                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>

<div class="modal12" id="imgModal12">
    <span class="close" id="span12">&times;</span>
    <div class="swiper img_modal">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img12" src="<?= IMG_PATH ?>/Gallery/IMG_15.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img1"> -->
                <img class="modal-content" id="img1" src="<?= IMG_PATH ?>/Gallery/IMG_6423.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img2"> -->
                <img class="modal-content" id="img2" src="<?= IMG_PATH ?>/Gallery/IMG_6409.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img3"> -->
                <img class="modal-content" id="img3" src="<?= IMG_PATH ?>/Gallery/IMG_6398.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img4"> -->
                <img class="modal-content" id="img4" src="<?= IMG_PATH ?>/Gallery/IMG_6390.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">
                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img5" src="<?= IMG_PATH ?>/Gallery/IMG_6373.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img6" src="<?= IMG_PATH ?>/Gallery/IMG_3.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img7" src="<?= IMG_PATH ?>/Gallery/IMG_7.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img8" src="<?= IMG_PATH ?>/Gallery/IMG_8.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img9" src="<?= IMG_PATH ?>/Gallery/IMG_11.jpeg" style="height: 100%; width: 80%;">

            </div>
            <div class="swiper-slide">

                <!-- <img class="modal-content" id="img5"> -->
                <img class="modal-content" id="img10" src="<?= IMG_PATH ?>/Gallery/IMG_14.jpeg" style="height: 100%; width: 80%;">

            </div>
        </div>
        <div class="swiper-button-prev" style="padding-left:15%"></div>
        <div class="swiper-button-next" style="padding-right:15%"></div>
    </div>
</div>


<div class="row mx-0">
    <div class="col-10 text-right align-self-end pr-5">
        <img class="pattern4" src="<?= IMG_PATH ?>/Content/Footer/MTR-09.png" style="height: 65%; width: 29%;">
    </div>
</div>

<div class="background row mx-0" id="contact">
    <section class="section_footer">
        <div class="wave_3 wave3"></div>

        <!-- <div> -->
        <!-- <section> -->
        <div class="container-fluid efluid">
            <div class="footer_row row mx-0">
                <div class="col-xl-2 col-lg-2 col-md-3 col-12 pb-md-0 pb-4 text-center">
                    <div class="info col-12 pb-md-4 pb-2 text-md-left" style="font-weight:bold; color:white;">COMPANY</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">Home</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">About Us</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">Service</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">Portfolio</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">Career</div>
                    <div class="options text-md-left col-12" style="color:white">Contact</div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-12 pb-md-0 pb-4 text-center">
                    <div class="info col-12 pb-md-4 pb-2 text-md-left pt-0 " style="font-weight:bold; color:white;">PLATFORM</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">Privacy Policy</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">Term and Condition</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">FAQ</div>
                    <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">Other</div>
                    <!-- <div class="options text-md-left col-xl-12 col-12 pb-xl-2 pb-lg-2 pb-md-2" style="color:white">News</div>
                    <div class="options text-md-left col-12" style="color:white">Coming Soon</div> -->
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-12">
                    <div class="info col-12 col-md-12 pb-md-4 pb-3 text-center text-md-left" style="font-weight:bold; color:white;">GET IN TOUCH</div>
                    <div class="options col-12 pb-2 pl-md-5" style="color:white">
                        <div class="row mx-0">
                            <div class="col-md-2 col-xl-1 pr-0 pl-0 col-2 text-center">
                                <img class="icon_touch3" src="<?= IMG_PATH ?>/Content/Footer/MTR-10.png" style="width:30px;height:29px">
                            </div>
                            <div class="touch_details_col col-md-10 col-xl-11 col-10 pl-md-4 pl-2 pt-1" style="font-size:12px">
                                <!-- <img class="icon_touch3 pr-md-2" src="<?= IMG_PATH ?>/Content/Footer/MTR-10.png" style="width:30px;height:29px"> -->
                                +60(3) 1234 5678
                            </div>
                        </div>
                    </div>
                    <div class="options col-12 pb-2 pl-md-5" style="color:white">
                        <div class="row mx-0">
                            <div class="col-2 col-xl-1 pr-0 pl-0 text-center">
                                <img class="icon_touch3" src="<?= IMG_PATH ?>/Content/Footer/MTR-11.png" style="width:30px;height:29px">
                            </div>
                            <div class="touch_details_col col-10 col-xl-11 pl-2 pl-md-4 pt-2 pt-md-1" style="font-size:12px">
                                <!-- <img class="icon_touch3" src="<?= IMG_PATH ?>/Content/Footer/MTR-11.png" style="width:30px;height:29px"> -->
                                info@onesoftlab.com.my
                            </div>
                        </div>
                    </div>
                    <div class="options col-12 pb-2 pl-md-5" style="color:white">
                        <div class="row mx-0">
                            <div class="col-2 col-xl-1 pr-0 pl-0 text-center">
                                <img class="icon_touch3" src="<?= IMG_PATH ?>/Content/Footer/MTR-12.png" style="width:30px;height:29px">
                            </div>
                            <div class="touch_details_col col-10 col-xl-11 pl-2 pl-md-4" style="font-size:12px">
                                <!-- <img class="icon_touch3" src="<?= IMG_PATH ?>/Content/Footer/MTR-12.png" style="width:30px;height:29px"> -->
                                C-3-31, Block Camilia,10 Boulevard,
                                Jalan Cempaka, Kg. Sungai Kayu Ara,
                                PJU6A, 47400 Petaling Jaya, Selangor.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                    <div class="col-12 pt-3 text-center">
                        <!-- <img class="map_img" style="width:100%" src="<?= IMG_PATH ?>/Content/Footer/MTR-17.png"> -->
                        <iframe class="map_frame" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=10%20boulevard%20Petaling%20Jaya+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                        <a href='http://maps-website.com/'>https://maps-website.com</a>
                        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=8514b613ba17813473b60511e59409dc4e445980'></script>
                    </div>
                </div>
            </div>

            <div class="row mx-0 justify-content-center" style="height:250px">
                <img class="footer_logo" src="<?= IMG_PATH ?>/Content/Footer/MTR-16.png" style="height: 100%; width: 320px;">
            </div>
            <!-- <div class="row mx-0 justify-content-center">
                <img class="footer_icons1" src="<?= IMG_PATH ?>/Content/Footer/MTR-13.png" style="height: 50px; width: 70px">
                <img class="footer_icons2" src="<?= IMG_PATH ?>/Content/Footer/MTR-14.png" style="height: 50px; width: 70px;">
                <img class="footer_icons3" src="<?= IMG_PATH ?>/Content/Footer/MTR-15.png" style="height: 50px; width: 70px;">

            </div> -->
        </div>
    </section>
</div>






<script>
    $(document).ready(function() {

    const swiper3 = new Swiper('.service_swip', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    const swiper4 = new Swiper('.client_swip', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

    const swiper5 = new Swiper('.img_modal', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });


    var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });


    var modal = document.getElementById("imgModal");
    var modal2 = document.getElementById("imgModal2");
    var modal3 = document.getElementById("imgModal3");
    var modal4 = document.getElementById("imgModal4");
    var modal5 = document.getElementById("imgModal5");
    var modal6 = document.getElementById("imgModal6");
    var modal7 = document.getElementById("imgModal7");
    var modal8 = document.getElementById("imgModal8");
    var modal9 = document.getElementById("imgModal9");
    var modal10 = document.getElementById("imgModal10");
    var modal12 = document.getElementById("imgModal12");



    var img = document.getElementById("office_img1");
    var modalImg = document.getElementById("img1");
    var img2 = document.getElementById("office_img2");
    var modalImg2 = document.getElementById("img2");
    var img3 = document.getElementById("office_img3");
    var modalImg3 = document.getElementById("img3");
    var img4 = document.getElementById("office_img4");
    var modalImg4 = document.getElementById("img4");
    var img5 = document.getElementById("office_img5");
    var modalImg5 = document.getElementById("img5");
    var img6 = document.getElementById("office_img6");
    var modalImg6 = document.getElementById("img6");
    var img7 = document.getElementById("office_img7");
    var modalImg7 = document.getElementById("img7");
    var img8 = document.getElementById("office_img8");
    var modalImg8 = document.getElementById("img8");
    var img9 = document.getElementById("office_img9");
    var modalImg9 = document.getElementById("img9");
    var img10 = document.getElementById("office_img10");
    var modalImg10 = document.getElementById("img10");
    var img12 = document.getElementById("office_img12");
    var modalImg12 = document.getElementById("img12");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
    }
    img2.onclick = function() {
        modal2.style.display = "block";
        modalImg2.src = this.src;
    }
    img3.onclick = function() {
        modal3.style.display = "block";
        modalImg3.src = this.src;
    }
    img4.onclick = function() {
        modal4.style.display = "block";
        modalImg4.src = this.src;
    }
    img5.onclick = function() {
        modal5.style.display = "block";
        modalImg5.src = this.src;
    }
    img6.onclick = function() {
        modal6.style.display = "block";
        modalImg6.src = this.src;
    }
    img7.onclick = function() {
        modal7.style.display = "block";
        modalImg7.src = this.src;
    }
    img8.onclick = function() {
        modal8.style.display = "block";
        modalImg8.src = this.src;
    }
    img9.onclick = function() {
        modal9.style.display = "block";
        modalImg9.src = this.src;
    }
    img10.onclick = function() {
        modal10.style.display = "block";
        modalImg10.src = this.src;
    }
    img12.onclick = function() {
        modal12.style.display = "block";
        modalImg12.src = this.src;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var span2 = document.getElementsByClassName("close")[1];
    var span3 = document.getElementsByClassName("close")[2];
    var span4 = document.getElementsByClassName("close")[3];
    var span5 = document.getElementsByClassName("close")[4];
    var span6 = document.getElementsByClassName("close")[5];
    var span7 = document.getElementsByClassName("close")[6];
    var span8 = document.getElementsByClassName("close")[7];
    var span9 = document.getElementsByClassName("close")[8];
    var span10 = document.getElementsByClassName("close")[9];
    var span11 = document.getElementsByClassName("close")[10];




    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    span2.onclick = function() {
        modal2.style.display = "none";
    }
    span3.onclick = function() {
        modal3.style.display = "none";
    }
    span4.onclick = function() {
        modal4.style.display = "none";
    }
    span5.onclick = function() {
        modal5.style.display = "none";
    }
    span6.onclick = function() {
        modal6.style.display = "none";
    }
    span7.onclick = function() {
        modal7.style.display = "none";
    }
    span8.onclick = function() {
        modal8.style.display = "none";
    }
    span9.onclick = function() {
        modal9.style.display = "none";
    }
    span10.onclick = function() {
        modal10.style.display = "none";
    }
    span12.onclick = function() {
        modal12.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        } else if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }

    
    });
    document.addEventListener("wheel", event => event.stopPropagation(), { capture: true });

</script>