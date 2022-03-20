<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use App\Models\MY_Model as MY_Model;
use CodeIgniter\Controller;

class MY_Controller extends Controller
{

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['array', 'common', 'api', 'cookie', 'form', 'url'];
    /**
     * Constructor.
     */
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        //--------------------------------------------------------------------
        // Preload any models, libraries, etc, here.
        //--------------------------------------------------------------------
        // E.g.:
        // $this->session = \Config\Services::session();
        $this->session = \Config\Services::session();
        $this->model   = new MY_Model();
        helper('cookie');
    }

    public function __construct()
    {
        $session                    = session(PROJECT);
        $this->admin_level          = isset($session) ? $session->role : '';
        $this->admin_id             = isset($session) ? $session->id : '';
        $this->admin_id_enc         = isset($session) ? $this->encrypt_decrypt('encrypt', $session->id) : '';
    }

    public function checkSession()
    {
        preview_session();
    }

    public function clearSession()
    {
        $this->session->destroy();
    }

    // public function checkLoggedIn()
    // {
    //     $session = session(PROJECT);
    //     if (!empty($session) && isset($session)) {
    //         return redirect()->to(site_url('credential/logout'));
    //     } else {
    //         return redirect()->to(site_url('credential'));
    //     }
    // }

    public function checkLoggedIn()
    {
        $session = session(PROJECT);
        if (!empty($session) && isset($session)) {
            return 'true';
        } else {
            re_direct(site_url('credential'));
        }
    }

    /*************Ganerate token this function use**************/

    // public function LoginToken($data)
    // {
    //     $data->EXP_API_TIME = (date('Y-m-d H:i:s', strtotime(' +1 day')));
    //     // $tokenData['token']     = $data;
    //     // $tokenData['timeStamp'] = Date('Y-m-d h:i:s');
    //     $jwtToken               = $this->objOfJwt->GenerateToken($data);
    //     return $jwtToken;
    // }

    // /*************Use for token then fetch the data**************/

    // public function GetTokenData()
    // {
    //     $received_Token = $this->session->userdata(PROJECT);
    //     try
    //     {
    //         $jwtData = $this->objOfJwt->DecodeToken($received_Token['token']);
    //         return $jwtData['token'];
    //     } catch (Exception $e) {
    //         http_response_code('401');
    //         echo json_encode(array("status" => false, "message" => $e->getMessage()));exit;
    //     }
    // }

    public function get_lang()
    {
        return $this->request->getLocale();
    }

    public function name($data)
    {
        $name = explode("|", $data);
        if ($this->get_lang() == 'en') {
            return $name[1];
        }
        if ($this->get_lang() == 'my') {
            return $name[0];
        }
    }

    public function send_email($array = [])
    {

        $email = \Config\Services::email();
        $email->setTo($array['receiver_email']);
        $email->setBCC(SMTP_BCC);
        $email->setFrom(SMTP_USER, SMTP_NAME);
        $email->setReplyTo(SMTP_REPLY, 'Support');
        $email->setSubject($array['subject']);
        $email->setMessage(view("/templates/email/" . $array['lang'] . "/" . $array['filename'], $array['data']));
        // preview($email);
        // preview($array);
        // die;
        if ($email->send()) {
            $email->clear();
            return true;
        } else {
            print_r($email->printDebugger('headers'));
        }
    }

    public function encrypt_decrypt($action, $string)
    {
        $output = false;

        $encrypt_method = "AES-256-CBC";
        $secret_key     = 'This is my secret key:!super@duper#hyper$';
        $secret_iv      = 'This is my secret iv:!super@duper#hyper$';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a
        // warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }

    public function uploadImg($array = [], $str = '')
    {
        $array_1 = [];
        // option 1 [start]
        foreach ($array as $key => $value) {
            if ($value['size'] > 0) {
                $ext      = explode("/", $value['type']);
                $ext      = end($ext);
                $fileName = uniqid() . '.' . $ext;

                $dest = fopen("ftp://" . FTP_USER . ":" . FTP_PASS . "@" . FTP_URL . "/" . $str . $fileName, "wb");
                $src  = file_get_contents($value['tmp_name']);

                fwrite($dest, $src, strlen($src));
                fclose($dest);
                $array_1[$key] = $fileName;
            }
        }
        return $array_1;
        // option 1 [end]
    }
}
