
<div class="wrapper">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact</a></li>

    </ul>

    <div class="banner">
        <h2>Banner Text</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque,
            assumenda repudiandae fugit neque, incident id?
        </p>
        <a href=#>Learn More</a>
    </div>

    <div class="box">
        <!-- <div class="single-box"  style="background-image: url(wave/1.png)"></div> -->

        <div class="single-box">
            <img src="<?= IMG_PATH ?>/wave/1.png">
        </div>

    </div>

</div>

<style>

    *{
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    .wrapper{
        position: absolute;
        overflow: hidden;
        left:0;
        right: 0px;
        bottom: 0px;
        top: 0px;
        margin: auto;
    }

    .box{
        position: absolute;
        width: 100%;
        overflow: hidden;
        height: 100%;
        bottom: -1px;
        background: linear-gradient(to bottom, #ee0979, #ff6a00);
        z-index: 5;
    }

    ul{
        z-index: 99;
        list-style: none;
        text-align: center;
        position: fixed;
        margin: auto;
        width: 95%;
    }

    ul li{
        display: inline-block;
        margin: 15px;
    }

    ul li a{
        text-decoration: none;
        color: #fff;
        text-transform: uppercase;
        font-size: 20px;
    }

    .logo{
        font-size: 25px;
        text-transform: uppercase;
        font-weight: 900;
        color: #fff;
    }

    .banner{
        position: absolute;
        z-index: 99;
        top: 20%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: center;
    }

    .banner h2{
        color: #fff;
        font-size: 50px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin: 0;
    }

    .banner p{
        color: #fff;
        font-size: 18px;
        line-height: 1.9;
    }

    .banner a{
        text-decoration: none;
        background: #000;
        color: #fff;
        padding: 10px 30px;
        display: inline-block;
    }

    .single-box{
        position: absolute;
        left: 0;
        width: 200%;
        height: 100%;
        background-repeat: repeat no-repeat;
        background-position: 0 bottom;
        transform-origin: center bottom;
        background-size: 50% 80px;
        animation: animate 18s linear infinite;
    }

    /* @keyframes animate{
        0%{
            transform: translateX(0) translateY(0) scaleY(1);
        }
        50%{
            transform: translateX(-25%) translateZ(0) scaleY(0.55);
        }
        100%{
            transform: translateX(-50%) translateY(0) scaleY(1);
        }
    } */

</style>