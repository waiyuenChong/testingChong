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
    }

    public function signin()
    {
        // $this->request->setlocale('zh');
        // echo $this->request->getLocale();
        // $this->session->set('notification',['title'=>'test','message'=>'test','type'=>'success']);
        $header['css'] = array(
            // CSS_PATH . '/credential_common.css',
        );
        $footer['js']   = array();
        $data           = array();
        $header['page'] = "credential";
        if ($_POST) {
            $password = hash('sha256', hash('sha256', $_POST['password']));
            $email    = $_POST['email'];
            $array    = array(
                'table'     => 'Admin a',
                'select'    => 'a.id, a.name, a.email, a.role_id as role',
                'condition' => "a.password = '$password' AND a.status = 1 AND a.acc_type = $this->vigrab_status AND (a.email = '$email' OR a.name = '$email')",
                'row'       => 1,
            );
            $info_response = $this->model->getWhere($array);
            if (isset($info_response) && !empty($info_response)) {
                $info_response->enc_id = encrypt_decrypt('encrypt', $info_response->id);
                $this->session->set(PROJECT, $info_response);
                return redirect()->to(site_url('/'));
            } else {
                $this->session->setFlashdata('notification', ['title' => lang('lang.status.fail'), 'message' => lang('lang.credential.invalid_login'), 'type' => 'danger']);
                return redirect()->to(site_url('/credential'));
            }
        } else {
            echo view('templates/header', $header);
            echo view('credential/signin_page', $data);
            echo view('templates/footer', $footer);
        }
    }

    public function signup($ref_code = '')
    {

        $header['css'] = array(
            CSS_PATH . '/credential_common.css',
        );
        $footer['js']      = array();
        $data              = array();
        $header['page']    = "credential";
        $data['lang']      = $this->get_lang();
        $header['account'] = "";
        $date              = current_date();
        $data['ref_code']  = $ref_code;

        if (!empty($ref_code)) {
            // check referrer exist and is supervisor
            $referrer_id = encrypt_decrypt('decrypt', $ref_code);
            if (!empty($referrer_id)) {
                $referrer = array(
                    'select'    => 'is_supervisor, email',
                    'table'     => 'Admin',
                    'condition' => array('id' => $referrer_id),
                    'row'       => 1,
                );
                $valid = $this->model->getWhere($referrer);
                if (!empty($valid) && $valid->is_supervisor == 0) {
                    return redirect()->to(site_url('credential/signup'));
                } else {
                    $data['ref_email'] = $valid->email;
                }
            }
        }

        if ($_POST) {

            // preview($_POST); die;
            $username = $_POST['username'];
            $email    = $_POST['email'];
            $password = $_POST['password'];

            if (isset($_POST['referrer'])) {
                // referer_id through email insert
                $referrer = array(
                    'select'    => 'id, is_supervisor',
                    'table'     => 'Admin',
                    'condition' => array('email' => $_POST['referrer']),
                    'row'       => 1,
                );
                $referrer_id = $this->model->getWhere($referrer);
                if (!empty($referrer_id->id)) {
                    if ($referrer_id->is_supervisor == 1) {
                        $referrer_id = $referrer_id->id;
                    } else {
                        $referrer_id = "";
                        $this->session->setFlashdata('msg', "Referrer email is not a supervisor");
                    }
                } else {
                    $referrer_id = "";
                    $this->session->setFlashdata('msg', "Referrer email not exist");
                }
            } else {
                // company id
                $referrer_id = "";
            }

            $email_validate = array(
                'table'     => 'Admin',
                'select'    => 'email',
                'condition' => array('email' => $email),
                'row'       => 1,
            );

            $email_inused = $this->model->getWhere($email_validate);
            if (!empty($email_inused)) {
                //email is inused
                $this->session->setFlashdata("msg", lang('lang.credential_nav_email_inused'));
                return redirect()->to(site_url('credential/signup/' . $ref_code));
                exit;
            } else {
                $password     = hash('SHA256', hash('SHA256', $password));
                $member_array = array(
                    'table' => 'Admin',
                    'data'  => array(
                        'username'     => $username,
                        'email'        => $email,
                        'password'     => $password,
                        'is_volunteer' => 1,
                        'role_id'      => 15,
                        'ref_id'       => !empty($referrer_id) ? $referrer_id : '',
                        'created_at'   => $date,
                        'created_by'   => !empty($referrer_id) ? $referrer_id : $username,
                    ),
                );
                $signup = $this->model->DataInsert($member_array);

                if ($signup) {
                    $member_id = array(
                        'table'     => 'Admin',
                        'condition' => array('email' => $email),
                        'row'       => 1,
                    );
                    $id   = $this->model->getWhere($member_id)->id;
                    $code = encrypt_decrypt('encrypt', $id);
                    $data = array(
                        'name' => $username,
                        'link' => BASE_URL . '/en/verify/' . $code,
                    );
                    // $this->send($email, 'Charity365 - Verify your email', 'en/verify', $data);
                    $this->session->set('verify_email', 1);
                    return redirect()->to(site_url('credential'));
                }
            }
        }
        // preview($data);die;
        echo view('templates/header', $header);
        echo view('credential/signup_page', $data);
        echo view('templates/footer', $footer);
    }

    // [reset password]
    // key in email to get reset password link
    public function reset()
    {
        $header['css'] = array(
            CSS_PATH . '/credential_common.css',
        );
        $data           = array();
        $footer['js']   = array();
        $header['page'] = "credential";

        if (!empty($_POST)) {
            $this->session->set('reset_data', $_POST);
            $email = $_POST['email'];
            $array = array(
                'condition' => array('email' => $email),
                'table'     => 'Admin',
                'row'       => 1,
            );
            $result   = $this->model->getWhere($array);
            $unipass  = genUniqueKey(6);
            $password = hash('sha256', hash('sha256', $unipass));
            if (!empty($result)) {
                $array = array(
                    'condition' => array('email' => $email),
                    'table'     => 'Admin',
                    'data'      => array('password' => $password),
                );
                $info_response = $this->model->DataUpdate($array);
                if ($info_response) {
                    unset($_SESSION['reset_data']);
                    // $this->send($email, 'Forget Password', 'en/forgetPassword', array('name' => $result->username, 'new_password' => $unipass));
                    $this->session->set('reset_password', 1);
                    return redirect()->to(site_url('/credential'));
                } else {
                    $this->session->setFlashdata('msg', "Error!");
                }
            } else {
                return redirect()->to(site_url('/credential/reset'));
            }
        } else {
            unset($_SESSION['reset_data']);
            echo view('templates/header', $header);
            echo view('credential/reset_page', $data);
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
        $admin_id   = $this->session->userdata(PROJECT)['id'];
        $phone_no   = '+60' . $phone;
        $expired_at = date("Y-m-d h:i:s", strtotime(current_date() . " + 5 minutes"));

        // generate otp
        $otp = mt_rand(1, 999999);
        if (strlen($otp) != 6) {
            $otp = str_pad($otp, 6, "0", STR_PAD_LEFT);
        }

        $body = "[Charity365] OTP Code is " . $otp . ", to be used for verify phone number and will remain active for 5 minutes. Do not share this message.";

        $result = sendSMS($phone_no, $body);
        // $send_response = callApi(API_URL . "/admin/otp/create", $data);
        if (empty($result)) {
            $send_response['result']['code']    = 500;
            $send_response['result']['message'] = 'Fail to sms otp';
            echo json_encode($send_response);
            exit;
        } else {
            // insert to kyc table
            $array = array(
                'data'  => array(
                    'ref_id'     => $result,
                    'user_id'    => $admin_id,
                    'phone_no'   => $phone_no,
                    'otp_code'   => $otp,
                    'expired_at' => $expired_at,
                    'created_at' => current_date(),
                ),
                'table' => "sms_otp",
            );
            $info_response = $this->model->DataInsert($array);
            if ($info_response) {
                $send_response['result']['code']     = 200;
                $send_response['result']['message']  = 'Successfully sms otp';
                $send_response['result']['otp']      = $otp;
                $send_response['result']['exp_date'] = $expired_at;
                echo json_encode($send_response);
                exit;
            } else {
                $send_response['result']['code']    = 500;
                $send_response['result']['message'] = 'Failed to insert to db';
                echo json_encode($send_response);
                exit;
            }
        }
    }

    public function check_otp($date = '', $ajax = true)
    {
        if ($ajax) {
            if ($date > current_date()) {
                echo json_encode(array('status' => "true"));
            } else {
                echo json_encode(array('status' => "false"));
            }
        }
    }

    public function logout()
    {
        unset($_SESSION[PROJECT]);
        return redirect()->to(site_url('credential'));
    }
}
