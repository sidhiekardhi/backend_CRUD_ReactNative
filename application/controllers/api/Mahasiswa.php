<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Mahasiswa extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index_get(){
        $mahasiswa = $this->Mahasiswa_model->getMahasiswa();
        

        if($mahasiswa){
            $this->response([
                'status' => true,
                'data' => $mahasiswa
            ], REST_Controller::HTTP_OK);
        }
    }
}
