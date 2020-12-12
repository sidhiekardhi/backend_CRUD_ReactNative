<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';




class Karyawan extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Karyawan_model');
  
    }

    public function index_get(){
        $karyawan = $this->Karyawan_model->getKaryawan();
        if($karyawan){
            $this->response([
                'status' => true,
                'data' => $karyawan
            ], REST_Controller::HTTP_OK);
        }
    }

    public function index_post(){

        
        $data= [
            'nama' => $this->post('nama'),
            'email' => $this->post('email'),
            'gender' => $this->post('gender'),
            'lamaKerja' => $this->post('lamaKerja')
            
        ];

        if($this->Karyawan_model->createKaryawan($data)> 0){
            $this->response([
                'status' => true,
                'message' => 'create a new data',
                'data' => $data
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to create data'
            ], REST_Controller::HTTP_BAD_REQUEST); 
        }
    }
}
