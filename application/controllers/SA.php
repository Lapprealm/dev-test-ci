<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SA extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hmifModel');
        $this->hmif = new hmifModel;
    }

    public function index()
    {
        $data['sa'] = $this->hmif->get_sa();

        $data['title'] = 'Struktur Keanggotaan';
        $this->load->view('templates/header', $data);
        $this->load->view('hmif/sa/index', $data);
        $this->load->view('templates/footer');
    }
}