<?php

class Mahasiswas_model extends CI_Model {

    public function getMahasiswas($id = null)
    {

    //     $query = $this->db->query("select * from `tbl_user`");
    //    return $query->result_array();

        if($id=== null){
            return $this->db->get('mahasiswas')->result_array();
            
        } else {
            return $this->db->get_where('mahasiswas', ['id' => $id])->result_array();
        }
    }

    public function getMahasiswasbyId($id)
    {
        return $this->db->get_where('mahasiswas', ['id' => $id])->result_array();
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