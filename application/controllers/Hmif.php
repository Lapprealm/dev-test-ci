<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hmif extends CI_Controller {


   public $hmif;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('hmifModel');


      $this->hmif = new hmifModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->hmif->get_hmif();


       $this->load->view('templates/head', 'Index');       
       $this->load->view('hmif/list',$data);
       $this->load->view('templates/footer');
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $item = $this->hmif->find_item($id);


      $this->load->view('templates/head', 'Show');
      $this->load->view('hmif/show',array('item'=>$item));
      $this->load->view('templates/footer');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      $this->load->view('templates/head', 'Create');
      $this->load->view('hmif/create');
      $this->load->view('templates/footer');   
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('kritik', 'Kritik', 'required');
        $this->form_validation->set_rules('saran', 'Saran', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('hmif/create'));
        }else{
           $this->hmif->insert_item();
           redirect(base_url('hmif'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $item = $this->hmif->find_item($id);


       $this->load->view('templates/head', 'Edit');
       $this->load->view('hmif/edit',array('item'=>$item));
       $this->load->view('templates/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
        $this->form_validation->set_rules('kritik', 'Kritik', 'required');
        $this->form_validation->set_rules('saran', 'Saran', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('hmif/edit/'.$id));
        }else{ 
          $this->hmif->update_item($id);
          redirect(base_url('hmif'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->hmif->delete_item($id);
       redirect(base_url('hmif'));
   }
}