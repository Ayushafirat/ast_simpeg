<?php

class DataPensiun extends CI_Controller{

	public function index()
	{
		$data['title'] = "Data Pensiun Pegawai";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/DataPensiun', $data);
		$this->load->view('templates_admin/footer');
	}
}
?>