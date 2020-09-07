<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Galery_model extends CI_Model {
    public function getAllGalery()
    {
        $query = $this->db->order_by('id', 'DESC')->get('galery');
        return $query->result();
    }
    public function getGalById($id)
    {
        return $this->db->get_where('galery', ['id' => $id])->row_array();
    }
    public function tambahDataGal($gambar)
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "gambar" => $gambar,
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        $this->db->insert('galery', $data);
    }

    public function hapusDataGal($where){
		$this->db->where($where)->delete('galery');
    }
    
    	
    
}

 	