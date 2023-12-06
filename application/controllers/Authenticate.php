<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH .'/libraries/REST_Controller.php';
require_once FCPATH .'vendor/autoload.php';
use Restserver\Libraries\REST_Controller;

class Authenticate extends REST_Controller {
    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->library('jwt');
    }

//     public function index_post()
// {
//     $length = 32;
//     $secretKey = bin2hex(random_bytes($length));

//     return $this->response(["jwt_scret_key" => $secretKey]);

// }

    public function generateSecretKey_get()
    {
        $length = 32;
        $secretKey = bin2hex(random_bytes($length));

        return $this->response(["jwt_scret_key" => $secretKey]);


    }

    public function getToken_post()
    {
        $data = array(
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
        );
        $token = $this->jwt->encode($data);
        $output = [
            'status' => 200,
            'massage' => 'berhasil_login',
            "token" => $token
        ];
        $data = array($output);
        $this->response($data,200);
    }

    
}