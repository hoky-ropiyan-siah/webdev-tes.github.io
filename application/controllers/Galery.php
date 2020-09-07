<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller
 {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galery_model');
        $this->load->library('form_validation');
    }
     public function index()
     {
       
         $this->load->view('templates/header', $data);  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/galery', $data);  
         $this->load->view('templates/footer');  
     }
     public function galery()
     {
        $data = array(
            'title' => 'data galery',
            'galery' => $this->diskusi_model->getAllGalery()
        );
         $this->load->view('templates/header', $data);  
         $this->load->view('templates/sidebar');  
         $this->load->view('templates/topbar');  
         $this->load->view('auth/galery', $data);  
         $this->load->view('templates/footer');  
     }	

     public function tambah_gal()
     {
 
        $this->form_validation->set_rules('judul', 'Judul', 'required');
    

         if ($this->form_validation->run() == false) {
             $this->load->view('templates/header');
             $this->load->view('templates/sidebar');  
             $this->load->view('templates/topbar');  
             $this->load->view('galery/tambah_gal');
             $this->load->view('templates/footer');
         } else {
            $config['upload_path'] = './assets/img/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = FALSE; //Enkripsi nama yang terupload
     
            $this->upload->initialize($config);
            if(!empty($_FILES['gambar']['name'])){
     
                if ($this->upload->do_upload('gambar')){
                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['source_image']='./assets/img/'.$gbr['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= FALSE;
                    $config['quality']= '50%';
                    // $config['width']= 600;
                    // $config['height']= 400;
                    $config['new_image']= './assets/img/'.$gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
     
                    $gambar=$gbr['file_name'];
                    $this->Galery_model->tambahDataGal($gambar);
                    $this->session->set_flashdata('flash', 'Ditambahkan');
                    redirect('auth/galery');
                }
                          
            }else{
                echo "Image yang diupload kosong";
            }
        }
    }
         
         public function hapus_gal($id){
            $where = array('id' => $id);
            $this->Galery_model->hapusDataGal($where);
            $this->session->set_flashdata('error_msg');
             redirect('auth/galery');
     }  
     
    
    
 }