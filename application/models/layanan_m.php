<?php
class layanan_m extends CI_Model{

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_layanan');
        if($id != null){
            $this->db->where('id_layanan', $id);
        }
        $query = $this->db->get();
        return $query;

    }

    public function insert($data){
        $this->db->insert('tb_layanan', $data);
    }


}