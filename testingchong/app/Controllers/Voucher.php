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
            if ($_POST['type' == 1]) {
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
            };




            $response = $this->model->DataInsert($create_voucher);
        };






        // preview($data);die;

        $table_voucher = array(
            'table'     => 'Voucher',
            'select'    => 'id, user_id, user_name, voucher_type, voucher_quantity, leave_type_id',
        );




        $table_leave = array(
            'table'     => 'Leave_type',
            'select'    => 'id, name',
            'condition'    => array('status' => 1),
            // 'condition' => 'status = 1',
        );


        $response = $this->model->getWhere($table_voucher);
        $response1 = $this->model->getWhere($table_leave);

        $data['response'] = isset($response) ? $response : [];
        $data['response1'] = isset($response1) ? $response1 : [];



        // preview($data);die;  
        echo view('templates/header', $header);
        echo view('voucher/list', $data);
        echo view('templates/footer', $footer);
    }

    public function update($voucher_id = "")
    {
        if ($_POST) {
            // preview($_POST);die;
            if ($_POST['update'] == 0) {
                $update_verify = $this->model->DataUpdate([
                    'table'     => 'Voucher',
                    'data'      => [
                        'user_name' => $_POST['user_name_update'],
                        'voucher_type' => $_POST['voucher_type_update'],
                        'voucher_quantity' => $_POST['voucher_quantity_update'],
                        'leave_type_id' => $_POST['leave_type_id_update'],
                    ],
                    'condition' => [
                        'id' => $voucher_id,
                    ],

                ]);

                return redirect()->to(site_url('/voucher/ruby'));
            }
        }
    }
}
