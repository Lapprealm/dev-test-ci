<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Ta extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("hmifModel");
		$this->hmif = new hmifModel();
	}

	public function index()
	{
		$data["title"] = "Hearing Informatics";
		$this->load->view("templates/header", $data);
		$this->load->view("hmif/ta/create");
		$this->load->view("templates/footer");
	}

	public function store_ta()
	{
		$this->form_validation->set_rules("nama", "Nama", "required");
		$this->form_validation->set_rules("nim", "NIM", "required");
		$this->form_validation->set_rules("kelas", "Kelas", "required");
		$this->form_validation->set_rules("srv_1", "Survey 1", "required");
		$this->form_validation->set_rules("srv_2", "Survey 2", "required");
		$this->form_validation->set_rules("srv_3", "Survey 3", "required");
		$this->form_validation->set_rules("keluhan", "Keluhan", "required");
		$this->form_validation->set_rules("kritik", "Kritik", "required");
		$this->form_validation->set_rules("saran", "Saran", "required");

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata("errors", validation_errors());
			redirect(base_url("ta"));
		} else {
			$this->hmif->insert_ta();
			redirect(base_url("ta"));
		}
	}
}
