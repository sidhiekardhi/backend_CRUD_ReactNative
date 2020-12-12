<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';




class Mahasiswas extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswas_model');
  
    }

    public function index_get(){
        $mahasiswas = $this->Mahasiswas_model->getMahasiswas();
        if($mahasiswas){
            $this->response([
                'status' => true,
                'data' => $mahasiswas
            ], REST_Controller::HTTP_OK);
        }
    }

    public function tambah_post(){

        
        $data= [
            'nama' => $this->post('nama'),
            'email' => $this->post('email'),
            'tgl_lahir' => $this->post('tgl_lahir'),
            'telp' => $this->post('telp'),

            'gender' => $this->post('gender'),
            'pekerjaan' => $this->post('pekerjaan'),
            'alamat' => $this->post('alamat'),
            'jurusan' => $this->post('jurusan')
            
        ];

        if($this->Mahasiswas_model->createMahasiswas($data)> 0){
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

    public function update_post(){ 
	        $id= $this->input->post('id');
            $data= [
                'id'=> $id,
                'nama' => $this->post('nama'),
                'email' => $this->post('email'),
                'tgl_lahir' => $this->post('tgl_lahir'),
                'telp' => $this->post('telp'),
    
                'gender' => $this->post('gender'),
                'pekerjaan' => $this->post('pekerjaan'),
                'alamat' => $this->post('alamat'),
                'jurusan' => $this->post('jurusan')
                
            ];
            if($this->Mahasiswas_model->updateMahasiswas($data, $id)> 0){
            $this->response([
                'status' => true,
                'message' => 'update a new data',
                'data' => $data
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to updated data'
            ], REST_Controller::HTTP_BAD_REQUEST); 
        }
		echo json_encode($data);
    }
    
    public function delete_delete($id= null)
    {
        $this->input->get('id');
//        $id = $this->delete('id');
        $msgDelete = ['id' => $id, 'message' => 'Deleted the resource'];
        $msgEmpty = ['status' => false, 'message' => 'ID Not Found'];
        $msgBadRequest = ['status' => false, 'message' => 'Provide an ID'];

        if ($id === null) {
            $this->set_response($msgBadRequest, 400);
        } else {
            if ($this->Mahasiswas_model->deleteMahasiswa($id) > 0) {
                $this->response([
                        'status' => true,
                        'data' => $id,
                                                 'message' => 'id deleted'
                                ], REST_Controller::HTTP_OK);
                
                            } else {
                                $this->response([
                                    'status' => false,
                                    'message' => 'id not found'
                                ], REST_Controller::HTTP_BAD_REQUEST); 
                
                            }
        }
    }

    // public function delete_delete($id=null){
    //     $id= $this->input->get('id');

    //     if($id=== null){
    //         $this->response([
    //             'status' => false,
    //             'message' => 'provide an id'
    //         ], REST_Controller::HTTP_BAD_REQUEST);  
    //     } else {
    //         $mahasiswa = $this->Mahasiswas_model->getData($id); // "true"
    //         if($mahasiswa)
    //         {
    //             $this->Mahasiswas_model->deleteMahasiswas($mahasiswa->id);
    //             $this->response([
    //                 'status' => true,
    //                 'data' => $id,
    //                 'message' => 'id deleted'
    //             ], REST_Controller::HTTP_OK);

    //         } else {
    //             $this->response([
    //                 'status' => false,
    //                 'message' => 'id not found'
    //             ], REST_Controller::HTTP_BAD_REQUEST); 

    //         }
    //     }
    // }


    // public function delete_delete() {
    //     $id = $this->input->get('id');
    //     $this->Mahasiswas_model->deleteMahasiswa($id);
    //    }

}
