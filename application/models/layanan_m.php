<?php
class layanan_m extends CI_Model{

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('');
        if($id != null){
            $this->db->where('id_buku', $id);
        }
        $query = $this->db->get();
        return $query;

    }
}