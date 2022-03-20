<?php

namespace App\Controllers;

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $header['page']      = 'index';
        $header['page_name'] = lang('lang.side_menu.dashboard');
        $header['css']       = array(
            PLUGIN_PATH . '/swiper/css/swiperjs.css',
        );

        $header['js'] = array(
            PLUGIN_PATH . '/swiper/js/swiper.js',

        );

        $footer['js'] = array(
           
        );

        $data               = array(); // define as an arary and store data that get from API
        // preview($data);die;
        echo view('templates/header', $header);
        echo view('home/index', $data);
        echo view('templates/footer', $footer);
    }

    public function about()
    {
        $header['page']      = 'about';
        $header['page_name'] = lang('lang.side_menu.dashboard');
        $header['css']       = array(
            PLUGIN_PATH . '/swiper/css/swiperjs.css',
        );
        $header['js']       = array(
            PLUGIN_PATH . '/swiper/js/swiper.js',
        );
        $footer['js'] = array();

        $data               = array(); // define as an arary and store data that get from API
        // preview($data);die;
        echo view('templates/header', $header); #
        echo view('home/about', $data);
        echo view('templates/footer', $footer);
    }

    public function contact()
    {
        $header['page']      = 'contact';
        $header['page_name'] = lang('lang.side_menu.dashboard');
        $header['css']       = array();
        $footer['js'] = array();

        $data               = array(); // define as an arary and store data that get from API
        // preview($data);die;
        echo view('templates/header', $header); #
        echo view('home/contact', $data);
        echo view('templates/footer', $footer);
    }

    public function product()
    {
        $header['page']      = 'product';
        $header['page_name'] = lang('lang.side_menu.dashboard');
        $header['css']       = array();
        $footer['js'] = array();

        $data               = array(); // define as an arary and store data that get from API
        // preview($data);die;
        echo view('templates/header', $header); #
        echo view('home/product', $data);
        echo view('templates/footer', $footer);
    }

    public function wave()
    {
        $header['page']      = 'product';
        $header['page_name'] = lang('lang.side_menu.dashboard');
        $header['css']       = array(
            PLUGIN_PATH . '/data-tables/css/datatables.min.css',

        );
        $footer['js'] = array();

        $data               = array(); // define as an arary and store data that get from API
        // preview($data);die;
        // echo view('templates/header', $header); #
        echo view('home/testingwave', $data);
        // echo view('templates/footer', $footer);
    }

    public function wave2()
    {
        $header['page']      = 'product';
        $header['page_name'] = lang('lang.side_menu.dashboard');
        $header['css']       = array(
            PLUGIN_PATH . '/data-tables/css/datatables.min.css',

        );
        $footer['js'] = array();

        $data               = array(); // define as an arary and store data that get from API
        // preview($data);die;
        // echo view('templates/header', $header); #
        echo view('home/testingwave2', $data);
        // echo view('templates/footer', $footer);
    }

    public function wave3()
    {
        $header['page']      = 'product';
        $header['page_name'] = lang('lang.side_menu.dashboard');
        $header['css']       = array(
            PLUGIN_PATH . '/data-tables/css/datatables.min.css',

        );
        $footer['js'] = array();

        $data               = array(); // define as an arary and store data that get from API
        // preview($data);die;
        // echo view('templates/header', $header); #
        echo view('home/testingwave3', $data);
        // echo view('templates/footer', $footer);
    }
}
