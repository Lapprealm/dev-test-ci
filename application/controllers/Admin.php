<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("hmifModel");
		$this->hmif = new hmifModel();
	}

	public function index()
	{
		$data["ta"] = $this->hmif->get_ta();
		$data["sa"] = $this->hmif->get_sa();

		$data["title"] = "Admin";
		$this->load->view("templates/header", $data);
		$this->load->view("hmif/admin/ta/list", $data);
		$this->load->view("hmif/admin/sa/list", $data);
		$this->load->view("templates/footer");
	}

	// Tampung Aspirasi

	public function show_ta($id)
	{
		$item = $this->hmif->find_ta($id);

		$data["title"] = "Hearing Informatics";
		$this->load->view("templates/header", $data);
		$this->load->view("hmif/admin/ta/show", ["item" => $item]);
		$this->load->view("templates/footer");
	}

	public function edit_ta($id)
	{
		$item = $this->hmif->find_ta($id);

		$data["title"] = "Edit Aspirasi";
		$this->load->view("templates/header", $data);
		$this->load->view("hmif/admin/ta/edit", ["item" => $item]);
		$this->load->view("templates/footer");
	}

	public function update_ta($id)
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
			redirect(base_url("admin/edit_ta/" . $id));
		} else {
			$this->hmif->update_ta($id);
			redirect(base_url("admin"));
		}
	}

	public function delete_ta($id)
	{
		$item = $this->hmif->delete_ta($id);
		redirect(base_url("admin"));
	}

	// Struktur Keanggotaan

	public function store_sa()
	{
		$this->form_validation->set_rules("nama", "Nama", "required");
		$this->form_validation->set_rules("nim", "NIM", "required");
		$this->form_validation->set_rules("posisi", "Posisi", "required");
		$this->form_validation->set_rules("motto", "Motto", "required");

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata("errors", validation_errors());
			redirect(base_url("sa"));
		} else {
			$this->hmif->insert_sa();
			redirect(base_url("sa"));
		}
	}

	public function create_sa()
	{
		$data["title"] = "Hearing Informatics";
		$this->load->view("templates/header", $data);
		$this->load->view("hmif/admin/sa/create");
		$this->load->view("templates/footer");
	}

	public function show_sa($id)
	{
		$item = $this->hmif->find_sa($id);

		$data["title"] = "Struktur Keanggotaan";
		$this->load->view("templates/header", $data);
		$this->load->view("hmif/admin/sa/show", ["item" => $item]);
		$this->load->view("templates/footer");
	}

	public function edit_sa($id)
	{
		$item = $this->hmif->find_sa($id);

		$data["title"] = "Edit Anggota";
		$this->load->view("templates/header", $data);
		$this->load->view("hmif/admin/sa/edit", ["item" => $item]);
		$this->load->view("templates/footer");
	}

	public function update_sa($id)
	{
		$this->form_validation->set_rules("nama", "Nama", "required");
		$this->form_validation->set_rules("nim", "NIM", "required");
		$this->form_validation->set_rules("posisi", "Posisi", "required");
		$this->form_validation->set_rules("motto", "Motto", "required");

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata("errors", validation_errors());
			redirect(base_url("admin/edit_sa/" . $id));
		} else {
			$this->hmif->update_sa($id);
			redirect(base_url("admin"));
		}
	}

	public function delete_sa($id)
	{
		$item = $this->hmif->delete_sa($id);
		redirect(base_url("admin"));
	}
}
