<?php

namespace App\Controllers;

class Coupon extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
      
    }


    public function create_coupon()
    {
        $this->header['css'] = array(
            // CSS_PATH . '/credential_common.css',
        );
        $footer['js']            = array();
        $data                    = array();
        $this->header['page']    = "signup";
        $data['lang']            = $this->get_lang();
        // $data['otp_show']        = ($this->vigrab_status == 2) ? true : false;
        $this->header['account'] = "";
        $date                    = current_date();

        $data = [];
        // preview($_SESSION);die;


        // echo view('templates/header', $this->header);
        echo view('coupon/create_coupon', $data);
        echo view('templates/footer', $footer);
    }
}
