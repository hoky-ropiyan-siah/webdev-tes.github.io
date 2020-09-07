<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diskusi extends CI_Controller
 {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Diskusi_model');
        $this->load->library('form_validation');
    }
     public function index()
     {
       
         $this->load->view('templates/header', $data);  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/diskusi', $data);  
         $this->load->view('templates/footer');  
     }
     public function diskusi()
     {
        $data = array(
            'title' => 'data diskusi',
            'diskusi' => $this->diskusi_model->getAllDiskusi()
        );
         $this->load->view('templates/header', $data);  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/diskusi', $data);  
         $this->load->view('templates/footer');  
     }	

     public function tambah_dis()
     {
 
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');

         if ($this->form_validation->run() == false) {
             $this->load->view('templates/header');
             $this->load->view('templates/sidebar');  
             $this->load->view('templates/topbar');  
             $this->load->view('diskusi/tambah_dis');
             $this->load->view('templates/footer');
         } else {
             $this->Diskusi_model->tambahDataDis();
             $this->session->set_flashdata('flash', 'Ditambahkan');
             redirect('auth/diskusi');
         }
        }
        public function hapus_dis($id){
            $where = array('id' => $id);
            $this->Diskusi_model->hapusDataDis($where);
            $this->session->set_flashdata('error_msg');
             redirect('auth/diskusi');
     }    
}
