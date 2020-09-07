<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Diskusi_model extends CI_Model {
    public function getAllDiskusi()
    {
        $query = $this->db->order_by('id', 'DESC')->get('diskusi');
        return $query->result();
    }
    public function getDisById($id)
    {
        return $this->db->get_where('diskusi', ['id' => $id])->row_array();
    }
    
    
    public function tambahDataDis()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "judul" => $this->input->post('judul', true),
            "tanggal" => $this->input->post('tanggal', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "kategori" => $this->input->post('kategori', true)
        ];

        $this->db->insert('diskusi', $data);
    }

    public function hapusDataDis($where){
		$this->db->where($where)->delete('diskusi');
	}
    
    
}

 	