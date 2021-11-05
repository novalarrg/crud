<?php
class M_matakuliah extends CI_Model{
    public function tampilMatakuliah(){
        return $this->db->get('matakuliah');
    }

    public function simpanMatakuliah($data=null){
        $this->db->insert('matakuliah',$data);
    }

    public function hapusMatakuliah($where=null){
        $this->db->delete('matakuliah',$where);
    }

    public function matkulWhere($where){
        return $this->db->get_where('matakuliah',$where);
    }

    public function updateMatakuliah($data=null,$where=null){
        $this->db->update('matakuliah',$data,$where);
    }
}