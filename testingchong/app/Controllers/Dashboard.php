<?php

namespace App\Controllers;

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->checkLoggedIn();
    }

    public function index()
    {
        $header['page']      = 'dash';
        $header['page_name'] = lang('Lang.side_menu_dashboard');
        $header['css']       = array();
        $footer['js'] = array();

        $data               = array(); // define as an arary and store data that get from API

        preview('asdadasd');
        die;
        // preview(PLUGIN_PATH . "/bootstrap/css/bootstrap5.1.min.css");
        // preview(PLUGIN_PATH . "/bootstrap/css/bootstrap5.1.min.js");
        // die;

        echo view('templates/header', $header);
        echo view('dashboard/dash_page', $data);
        echo view('templates/footer', $footer);
    }
}
