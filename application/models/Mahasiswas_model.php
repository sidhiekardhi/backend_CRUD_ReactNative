<?php

class Mahasiswas_model extends CI_Model {
    public function getMahasiswas()
    {
        return $this->db->get('mahasiswas')->result_array();
    }

    public function createMahasiswas($data)
    {
        $this->db->insert('mahasiswas', $data);
        return $this->db->affected_rows();
    }

    public function updateMahasiswas($data, $id)
    {
        $this->db->update('mahasiswas', $data, ['id'=> $id]);
        return $this->db->affected_rows();

    }

    public function getData($id)
    {
        $query = $this->db->get_where('mahasiswas', ['id'=>$id]);
        if($query->num_rows() > 0)
        {
            return $query->row();
        } else {
            return false;
        }
    }

    // public function deleteMahasiswas($id)
    // {  
    //     $this->db->delete('mahasiswas', ['id'=> $id]);
    //     return $this->db->affected_rows();
    // }

    public function deleteMahasiswa($id)
    {
        $this->db->delete('mahasiswas', ['id' => $id]);
        return $this->db->affected_rows();
    }

    // function deleteMahasiswa($id) {
    //     $this->db->where('id', $id);
    //     $this->db->delete('mahasiswas');
    //     return $this->db->affected_rows();
    //    }

}