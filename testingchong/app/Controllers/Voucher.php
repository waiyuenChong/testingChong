<?php

namespace App\Controllers;

class Voucher extends MY_Controller
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
        preview('ss');
        die;

        echo view('templates/header', $header);
        echo view('voucher/list', $data);
        echo view('templates/footer', $footer);
    }

    public function ruby()

    {
        $header['page']      = 'dash';
        $header['page_name'] = lang('Lang.side_menu_dashboard');
        $header['css']       = array();
        $footer['js'] = array();

        $data               = array(); // define as an arary and store data that get from API
        if ($_POST) {
            // preview($_POST);die;     
            $create_voucher = array(
                'table' => 'Voucher',
                'data'  => array(
                    'id'    => $_POST['voucher_id'],
                    'user_id'   => $_POST['user_id'],
                    'user_name' => $_POST['user_name'],
                    'voucher_type' => $_POST['voucher_type'],
                    'voucher_quantity' => $_POST['voucher_quantity'],
                    'leave_type_id' => $_POST['leave_type_id'],
                ),
            );
             $response = $this->model->DataInsert($create_voucher);


            // if ($_POST) {
            //     preview($_POST);
            //     die;
            // } else {    
            //     preview('fail to insert');
            //     die;
            // }
        }




        // preview($data);die;

        $table_voucher = array(
            'table'     => 'Voucher',
            'select'    => 'id, user_id, user_name, voucher_type, voucher_quantity, leave_type_id',
        );
        $response = $this->model->getWhere($table_voucher);

        $data['response'] = isset($response) ? $response : [];
        


        $table_leave = array(
            'table'     => 'Leave_type',
            'select'    => 'id, name',
            'condition'    => array('status' => 1),
            // 'condition' => 'status = 1',
        );
        $response1 = $this->model->getWhere($table_leave);



        $data['response'] = isset($response) ? $response : [];
        $data['respone1'] = isset($response1) ? $response1 : [];


        
        // preview($data);die;
        echo view('templates/header', $header);
        echo view('voucher/list', $data);
        echo view('templates/footer', $footer);
    }
}
