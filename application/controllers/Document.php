<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller
 {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Document_model');
        $this->load->library('form_validation');
    }
     public function index()
     {
       
         $this->load->view('templates/header', $data);  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/dokument', $data);  
         $this->load->view('templates/footer');  
     }
     public function dokument()
     {
        $data = array(
            'title' => 'data document',
            'document' => $this->document_model->getAllDocument()
        );
         $this->load->view('templates/header');  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/dokument');  
         $this->load->view('templates/footer');  
     }	
     public function tambah_doc()
     {
 
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('upload', 'Upload', 'required');

         if ($this->form_validation->run() == false) {
             $this->load->view('templates/header');
             $this->load->view('templates/sidebar');  
             $this->load->view('templates/topbar');  
             $this->load->view('document/tambah_doc');
             $this->load->view('templates/footer');
         } else {
            $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'pdf';
			$config['encrypt_name'] = FALSE;
			$this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if(!empty($_FILES['document']['name'])){
     
                if ($this->upload->do_upload('document')){
                    $file = $this->upload->data();
		            $document = $file['file_name'];
                    $this->Document_model->tambahDataDoc($document);
                    $this->session->set_flashdata('flash', 'Ditambahkan');
                    redirect('auth/dokument');
                }
                          
            }else{
                echo "file yang diupload kosong";
            }
         }
     }
    
    
    public function hapus_doc($id){
           $where = array('id' => $id);
           $this->Document_model->hapusDataDoc($where);
           $this->session->set_flashdata('error_msg');
            redirect('auth/dokument');
    }     

    public function download_doc(){ 
        $file = $this->uri->segment(3); 
        $path = './uploads/'.$file; 
        force_download($path, NULL); 
        redirect('auth/dokument'); 
    }

}
