<?php

class Mahasiswa_model extends CI_Model {
    public function getMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

   }