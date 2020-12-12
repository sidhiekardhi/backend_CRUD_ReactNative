<?php

class Karyawan_model extends CI_Model {
    public function getKaryawan()
    {
        return $this->db->get('karyawan')->result_array();
    }

    public function createKaryawan($data)
    {
        $this->db->insert('karyawan', $data);
        return $this->db->affected_rows();
    }

}