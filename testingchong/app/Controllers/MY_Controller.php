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
    protected $helpers = ['array', 'common', 'api', 'form', 'unity', 'url'];
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
        $this->benchmark = \Config\Services::timer();
    }

    public function __construct()
    {
        $session            = session(PROJECT);
        $this->admin_level  = isset($session) ? $session['role'] : '';
        $this->admin_id     = isset($session) ? $session['id'] : '';
        $this->admin_id_enc = isset($session) ? $this->encrypt_decrypt('encrypt', $session['id']) : '';
    }

    public function checkSession()
    {
        preview_session();
    }

    public function clearSession()
    {
        $this->session->destroy();
    }

    public function checkLoggedIn()
    {
        $session = session(PROJECT);
        if (!empty($session) && isset($session)) {
            return 'true';
        } else {
            // return redirect()->to(site_url('credential'));
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

    public function send($array = [])
    {
        $email = \Config\Services::email();
        $email->setTo($array['receiver_email']);
        $email->setFrom(SMTP_USER, $array['SMTP_NAME']);
        $email->setSubject($array['subject']);
        $email->setMessage(view("/templates/email/" . $array['message'], $array['data']));
        if ($email->send()) {
            $email->clear();
            return true;
        } else {
            print_r($email->printDebugger('headers'));
        }
    }

}
