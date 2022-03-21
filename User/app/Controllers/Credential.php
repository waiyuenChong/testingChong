<?php

namespace App\Controllers;

class Credential extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // $this->send([
        //     'receiver_email'=>'tanlucky091@gmail.com',
        //     'SMTP_NAME'=>'TESTING',
        //     'subject'=>'TESTING',
        //     'message'=>'en/verify',
        //     'data'=>[
        //         'name'=>'TESTING',
        //         'link'=>'asd',
        //     ],
        // ]);
        $this->signin();
        // preview($this->vigrab_status);
        // die;
    }

    public function signin()
    {
        // $this->request->setlocale('zh');
        // echo $this->request->getLocale();
        // $this->session->set('notification',['title'=>'test','message'=>'test','type'=>'success']);
        $this->header['css'] = array(
            CSS_PATH . '/credential_common.css',
        );
        $footer['js']         = array();
        $this->header['page'] = "credential";
        $data                 = [];
        $date                    = current_date();



        if ($_POST) {
            $password = hash('sha256', hash('sha256', $_POST['password']));
            $email    = $_POST['email'];

            $user_login = array(
                'table'      => 'User',
                'select'     => 'id, email, phone_no, role_id, status,position, team',
                'condition'  => [
                    'email'    => $email,
                    'password' => $password,
                ],
                'row'       => 1,

            );
            $info_response = $this->model->getWhere($user_login);


            if (isset($info_response) && !empty($info_response)) {
                if ($info_response->status != 1) {
                    $this->session->setFlashdata('notification', ['title' => 'Error', 'message' => 'Please contact Admin/Manager', 'type' => 'warning']);
                    return redirect()->to(site_url('credential'));
                }
                unset($info_response->status);
                $info_response->enc_id = encrypt_decrypt('encrypt', $info_response->id);
                $this->session->set(PROJECT, $info_response);

                $array = array(
                    'condition' => array('id' => $info_response->id),
                    'table'     => 'User',
                    'data'      => array('last_login' => $date),
                );
                $login_log = $this->model->DataUpdate($array);


                return redirect()->to(site_url('result/result'));
            } else {
                $this->session->setFlashdata('notification', ['title' => 'Error', 'message' => 'Wrong email/phone or password ', 'type' => 'danger']);
                return redirect()->to(site_url('credential/signin'));
            }
        } else {
            echo view('templates/header', $this->header);
            echo view('credential/signin', $data);
            echo view('templates/footer', $footer);
        }
    }

    public function signup()
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

        // $position = $this->model->getWhere([
        //     'table'     => 'Position',
        //     'select'    => 'id,name',
        //     // 'row'       => 1,
        // ]);

        // $team = $this->model->getWhere([
        //     'table'     => 'Team',
        //     'select'    => 'id,name',
        //     // 'row'       => 1,
        // ]);


        // $data['position'] = isset($position) ? $position : [];
        // $data['team'] = isset($team) ? $team : [];

        // if ($_POST) {

        //     $valid_name = $this->model->getWhere([
        //         'table'     => 'Position',
        //         'select'    => 'name',
        //         'condition' => ['name' => $_POST['name']],
        //         'row'       => 1,
        //     ]);

        //     $valid_email = $this->model->getWhere([
        //         'table'     => 'User',
        //         'select'    => 'email',
        //         'condition' => ['email' => $_POST['email']],
        //         'row'       => 1,
        //     ]);

        //     $valid_handphone = $this->model->getWhere([
        //         'table'     => 'User',
        //         'select'    => 'email',
        //         'condition' => ['email' => $_POST['email']],
        //         'row'       => 1,
        //     ]);



        //     if ((isset($valid_name) && !empty($valid_name)) || (isset($valid_email) && !empty($valid_email)) || (isset($valid_handphone) && !empty($valid_handphone))) {

        //         $this->session->setFlashdata('notification', ['title' => "SignUp Failed", 'message' => "User Exist", 'type' => 'danger']);
        //         return redirect()->to(site_url('/credential/signin'));
        //     } else {


        //         $this->session->setFlashdata('notification', ['title' => "SignUp Successful", 'message' => "Please proceed to login", 'type' => 'success']);
        //         $_POST['password']    = hash('SHA256', hash('SHA256', $_POST['password']));
        //         $new_signup = array(
        //             'table' => 'User',
        //             'data'  => array(
        //                 // 'name'     => $_POST['name'],
        //                 'email'        => $_POST['email'],
        //                 'password'     => $_POST['password'],
        //                 'phone_no'     => $_POST['phone_no'],
        //                 'role_id'      => 3,
        //                 'Position'     => $_POST['position'],
        //                 'team'         => $_POST['team'],
        //                 'created_at'   => $date,
        //                 'status'       => 1,
        //             ),
        //         );
        //         $signup = $this->model->DataInsert($new_signup);

        //         // preview($signup);die;
        //         $new_signup1 = array(
        //             'table' => 'User_detail',
        //             'data'  => array(
        //                 'user_id'     => $signup,
        //                 'name'        => $_POST['name'],
        //                 'created_at'   => $date,
        //                 'created_by'   => $signup,
        //                 'status'       => 1,
        //             ),
        //         );
        //         $signup1 = $this->model->DataInsert($new_signup1);

        //         return redirect()->to(site_url('/credential/signin'));
        //     }
        // }


        echo view('templates/header', $this->header);
        echo view('credential/signup', $data);
        echo view('templates/footer', $footer);
    }
    // [reset password]
    // key in email to get reset password link
    public function forgot_pwd()
    {
        $this->header['css'] = array(
            CSS_PATH . '/credential_common.css',
        );
        $data                 = array();
        $footer['js']         = array();
        $this->header['page'] = "credential";

        if ($_POST) {


            $array = array(
                'table'        => 'User',
                'select'       => 'email,phone_no,id,name',
                'condition_or' => ['email' => $_POST['forgot_pwd'], 'phone_no' => $_POST['forgot_pwd']],
                'row'          => 1,
            );
            $forgot_pwd = $this->model->getWhereOr($array);


            // preview($forgot_pwd);
            // die;


            if ($forgot_pwd) {
                $uid = $forgot_pwd->id;

                if (filter_var($_POST['forgot_pwd'], FILTER_VALIDATE_EMAIL)) {
                    $unipass  = genUniqueKey(8);
                    $password = hash('sha256', hash('sha256', $unipass));
                    //message data
                    $array = [
                        'receiver_email' => $forgot_pwd->email,
                        'subject'        => 'Forget Password',
                        'lang'           => 'en',
                        'filename'       => 'forgetPassword',
                        'data'           => [
                            'name'         => $forgot_pwd->name,
                            'new_password' => $unipass,
                        ],
                    ];
                    $response = $this->send_email($array);
                    // preview($response);
                    // preview($array);
                    // die;
                    if (empty($response)) {
                        $this->session->setFlashdata('notification', array('title' => 'Failed', 'message' => 'Failed to send password. Please try again later.', 'type' => 'danger'));
                        return redirect()->to(site_url('/credential/forgot_pwd'));
                    } else {
                        $response = $this->model->DataUpdate([
                            'table'     => 'User',
                            'data'      => [
                                'password'   => $password,
                                'updated_at' => current_date(),
                                'updated_by' => $uid,
                            ],
                            'condition' => ['id' => $uid],
                        ]);
                        if ($response) {
                            $this->session->setFlashdata('notification', array('title' => 'Success', 'message' => 'Password has been sent to ' . $_POST['forgot_pwd'], 'type' => 'success'));
                            return redirect()->to(site_url('/credential/signin'));
                        }
                    }
                } else {
                    $unipass  = genUniqueKey(8);
                    $password = hash('sha256', hash('sha256', $unipass));

                    $body     = "This is your temporary password: " . $unipass . ". Please sign-in to account and change a secure password for your account. Do not share this message to others.";
                    $phone_no = "+6" . $_POST['forgot_pwd'];
                    if ($this->vigrab_status == 2) {
                        $result = true;
                    } else {
                        $result = sendSMS($phone_no, $body);
                    }

                    if (empty($result)) {
                        $this->session->setFlashdata('notification', array('title' => 'Failed', 'message' => 'Failed to send password. Please try again later.', 'type' => 'danger'));
                        return redirect()->to(site_url('/credential/forgot_pwd'));
                    } else {
                        $response = $this->model->DataUpdate([
                            'table'     => 'User',
                            'data'      => [
                                'password'   => $password,
                                'updated_at' => current_date(),
                                'updated_by' => $uid,
                            ],
                            'condition' => ['id' => $uid],
                        ]);
                        if ($response) {
                            $this->session->setFlashdata('notification', array('title' => 'Success', 'message' => 'Password has been sent to ' . $_POST['forgot_pwd'], 'type' => 'success'));
                            return redirect()->to(site_url('/credential/signin'));
                        }
                    }
                }
            } else {
                $this->session->setFlashdata('notification', array('title' => 'Failed', 'message' => 'Account not yet registered', 'type' => 'danger'));
                return redirect()->to(site_url('/credential/forgot_pwd'));
            }
        } else {
            echo view('templates/header', $this->header);
            echo view('credential/forgot_pwd', $data);
            echo view('templates/footer', $footer);
        }
    }



    public function signin_first()
    {
        $admin_id = $this->session->userdata(PROJECT)['id'];
        if ($_POST) {
            if (!empty($_FILES)) {
                // [ upload receipt ] start
                foreach ($_FILES as $key => $value) {
                    $ext         = explode(".", $_FILES[$key]["name"]);
                    $ext         = end($ext);
                    $fileName    = uniqid(8) . "." . $ext;
                    $target_file = KYC_PATH . $fileName;
                    $type        = ($key == "add_icf_img") ? 0 : 1;
                    if (move_uploaded_file($_FILES[$key]["tmp_name"], $target_file)) {

                        // insert to kyc table
                        $array = array(
                            'data'  => array(
                                'user_id'    => $admin_id,
                                'filename'   => $fileName,
                                'type'       => $type,
                                'created_at' => current_date(),
                                'created_by' => $admin_id,
                            ),
                            'table' => "kyc",
                        );
                        $info_response = $this->model->DataInsert($array);
                    }
                }
                // [ upload receipt ] end

                // compare otp
                $compare_otp = array(
                    'table'     => 'sms_otp',
                    'select'    => 'id, phone_no',
                    'row'       => 1,
                    'condition' => array(
                        'user_id'      => $admin_id,
                        'otp_code'     => $_POST['otp'],
                        'expired_at >' => current_date(),
                    ),
                );

                $verified_otp = $this->model->getWhere($compare_otp);
                // preview($verified_otp);
                if (!empty($verified_otp)) {
                    $array = array(
                        'condition' => array('id' => $verified_otp->id),
                        'table'     => 'sms_otp',
                        'data'      => array(
                            'is_verified' => 1,
                            'updated_at'  => current_date(),
                        ),
                    );
                    $info_response = $this->model->DataUpdate($array);

                    $array = array(
                        'condition' => array('id' => $admin_id),
                        'table'     => 'Admin',
                        'data'      => array(
                            'phone_no'     => $verified_otp->phone_no,
                            'phone_verify' => 1,
                            'updated_by'   => $admin_id,
                            'updated_at'   => current_date(),
                        ),
                    );
                    $info_response = $this->model->DataUpdate($array);
                    if ($info_response) {
                        $this->session->set('KYC_OTP', 1);
                        redirect(site_url('credential'));
                    }
                }
            }
        }
    }

    public function send_otp($phone = "", $ajax = true)
    {
        // $_id   = $this->session->userdata(PROJECT)->id;
        $phone_no   = '+60' . $phone;
        $expired_at = date("Y-m-d H:i:s", strtotime(current_date() . " + 15 minutes"));

        // Generate otp
        $otp = mt_rand(1, 999999);
        if (strlen($otp) != 6) {
            $otp = str_pad($otp, 6, "0", STR_PAD_LEFT);
        }
        // $otp = 123456;

        $body = "OTP: " . $otp . ". Valid for 15 minutes. For security reasons, DO NOT SHARE your OTP to anyone except for your authorised Vigrab agent. By sharing your OTP with your Vigrab agent, you expressly authorise the agent to manage your vigrab account details, shop and products.";
        if (is_numeric($phone)) {
            if ($this->vigrab_status == 2) {
                $result = true;
            } else {
                $array = array(
                    'table'     => 'Sms_otp',
                    'select'    => 'count(*) as count',
                    'row'       => 1,
                    'condition' => array(
                        'phone_no' => $phone_no,
                    ),
                );

                $response = $this->model->getWhere($array)->count;
                if (fmod($response, 2) ==  1) {
                    $result                           = sendSMS($phone_no, $body);
                    // $result = "oneway";
                    $send_response['result']['count'] = 1;
                } elseif (fmod($response, 2) == 0) {
                    $result                           = sendSMS123($phone_no, $body);
                    $result                           = json_decode($result);
                    $result                           = $result->referenceID[0];
                    // $result = "sms123";
                    $send_response['result']['count'] = 2;
                }

                // $send_response['result']['count'] = 2;
                // $result                           = true;
                if (empty($result)) {
                    $send_response['result']['response'] = $response;
                    $send_response['result']['code']    = 500;
                    $send_response['result']['message'] = 'Fail to sms otp';
                    echo json_encode($send_response);
                    exit;
                }
            }
        } else {
            $array = [
                'receiver_email' => $phone,
                'subject' => 'One-Time Password',
                'lang' => 'en',
                'filename' => 'email_otp.php',
                'data' => [
                    'otp' => $otp,
                ]
            ];
            $result = $this->send_email($array);
            if ($result) {
                $result = uniqid() . '_' . time();
            }
        }
        $info_response = $this->model->DataInsert([
            'table' => 'Sms_otp',
            'data'  => [
                'ref_id'     => $result,
                'phone_no'   => $phone_no,
                'otp_code'   => $otp,
                'expired_at' => $expired_at,
                'created_at' => current_date(),
                'status'     => 1,
            ],
        ]);
        if ($info_response) {
            $send_response['result']['code']     = 200;
            $send_response['result']['message']  = 'Successfully sms otp';
            $send_response['result']['otp']      = $otp;
            $send_response['result']['exp_date'] = $expired_at;
            echo json_encode($send_response);
            exit;
        } else {
            $send_response['result']['code']    = 500;
            $send_response['result']['message'] = 'Failed to save data';
            echo json_encode($send_response);
            exit;
        }
    }

    public function check_otp($date = '', $ajax = true)
    {
        if ($ajax) {
            if ($date > current_date()) {
                echo json_encode(array('status' => "true"));
            } else {
                echo json_encode(array('status' => "false", 'ex_date' => $date, 'curr_date' => current_date()));
            }
        }
    }

    public function logout()
    {
        // unset($_SESSION[PROJECT]);
        session_destroy();
        return redirect()->to(site_url('credential'));
    }

    // public function edit()
    // {
    //     preview($_FILES);
    //     $array_1 = [];
    //     foreach ($_FILES as $key => $value) {
    //         $array_1[$key] = $value['name'];
    //     }
    //     $array = [
    //         'tob' => $_POST['tob'],
    //         'document' => $_FILES['business_doc']['name'],
    //     ];
    //     preview(json_encode($array));
    // }

    public function signup_success()
    {
        $this->header['page']      = 'credential';
        $this->header['page_name'] = lang('lang.credential.su_success');
        $this->header['css']       = array(
            CSS_PATH . '/style.css',
            // PLUGIN_PATH . '/animation/css/animate.min.css',
            // PLUGIN_PATH . '/bootstrap-datetimepicker/css/prettify.css',
            // PLUGIN_PATH . '/bootstrap-datetimepicker/css/docs.css',
            // PLUGIN_PATH . '/bootstrap-datetimepicker/css/bootstrap-datepicker3.min.css',
            // PLUGIN_PATH . '/data-tables/css/datatables.min.css',
        );
        $footer['js'] = array(
            // PLUGIN_PATH . '/bootstrap-datetimepicker/js/bootstrap-datepicker.min.js',
            // PLUGIN_PATH . '/bootstrap-datetimepicker/js/prettify.min.js',
            // JS_PATH . '/pages/tbl-datatable-custom.js',
            // PLUGIN_PATH . '/data-tables/js/datatables.min.js',
            // JS_PATH.'/pages/ac-datepicker.js',
        );
        // $data = array();

        $data['image'] = IMG_PATH . "/credential/6.png";
        // preview($data);

        echo view('templates/header', $this->header);
        echo view('credential/signup_success', $data);
        echo view('templates/footer', $footer);
    }
}
