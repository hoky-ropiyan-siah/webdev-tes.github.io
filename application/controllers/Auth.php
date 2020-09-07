<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
 {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('document_model');
        $this->load->model('diskusi_model');
        $this->load->model('galery_model');
        $this->load->library('form_validation');
    }
     public function index()
     {
      
         $this->load->view('templates/header');  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/index');  
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
     public function contoh()
     {
        $data = array(
            'title' => 'data diskusi',
            'diskusi' => $this->diskusi_model->getAllDiskusi()
        );
         $this->load->view('templates/header', $data);  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/contoh', $data);  
         $this->load->view('templates/footer');  
     }
     public function galery()
     {
        $data = array(
            'title' => 'data galery',
            'galery' => $this->galery_model->getAllGalery()
        );
         $this->load->view('templates/header', $data);  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/galery', $data);  
         $this->load->view('templates/footer'); 
     }
     public function dokument()
     {
        $data = array(
            'title' => 'data document',
            'document' => $this->document_model->getAllDocument()
        );
         $this->load->view('templates/header', $data);  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/dokument', $data);  
         $this->load->view('templates/footer');  
     }	
    
   
 }