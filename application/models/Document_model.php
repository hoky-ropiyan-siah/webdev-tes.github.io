<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Document_model extends CI_Model {
    public function getAllDocument()
    {
        $query = $this->db->order_by('id', 'DESC')->get('document');
        return $query->result();
    }
    public function getDocById($id)
    {
        return $this->db->get_where('document', ['id' => $id])->row_array();
    }
    

    
    public function tambahDataDoc($document)
    {
        $data = [
            "document" => $document,
            "tanggal" => $this->input->post('tanggal', true),
            "upload" => $this->input->post('upload', true)
        ];

        $this->db->insert('document', $data);
    }

    public function hapusDataDoc($where){
		$this->db->where($where)->delete('document');
	}
    
}

 	