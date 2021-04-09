<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{
    public function index() {
        $data['title'] = 'Home';
        $this->load->view('templates/head', $data);
        $this->load->view('public/index');
        $this->load->view('templates/footer');
    }
}
?>