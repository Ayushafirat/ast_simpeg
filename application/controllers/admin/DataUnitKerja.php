<?php

class DataUnitKerja extends CI_Controller{
	public function index()
	{
		$data['title'] = "Data Unit Kerja";
		$data['unitkerja'] = $this->pegawaiModel->get_data('data_unitkerja')->result();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/unitkerja/DataUnitKerja', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_data() 
	{
		$data['title'] = "Tambah Data Unit Kerja";

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/unitkerja/TambahDataUnitKerja', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_data_aksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$kode_bagan			= $this->input->post('kode_bagan');
			$unit_kerja			= $this->input->post('unit_kerja');
			$shift_kerja		= $this->input->post('shift_kerja');

			$data = array(
				'kode_bagan' 	=> $kode_bagan,
				'unit_kerja' 	=> $unit_kerja,
				'shift_kerja' 	=> $shift_kerja,
			);

			$this->pegawaiModel->insert_data($data, 'data_unitkerja');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/DataUnitKerja');
		}
	}
	public function _rules() {
		$this->form_validation->set_rules('kode_bagan','Kode Bagan','required');
		$this->form_validation->set_rules('unit_kerja','Unit Kerja','required');
		$this->form_validation->set_rules('shift_kerja','Shift','required');
	}

	public function update_data($id) 
	{
		$where = array('id_dataunit' => $id);
		$data['unitkerja'] = $this->db->query("SELECT * FROM data_unitkerja WHERE id_dataunit= '$id'")->result();
		$data['title'] = "Update Data Unit Kerja";
		
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/unitkerja/UpdateDataUnitKerja', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update_data_aksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->update_data();
		} else {
			$id				= $this->input->post('id_dataunit');
			$kode_bagan		= $this->input->post('kode_bagan');
			$unit_kerja		= $this->input->post('unit_kerja');
			$shift_kerja	= $this->input->post('shift_kerja');

			$data = array(
				'id_dataunit' 	=> $id_dataunit,
				'kode_bagan' 	=> $kode_bagan,
				'unit_kerja' 	=> $unit_kerja,
				'shift_kerja' 	=> $shift_kerja,
			);

			$where = array(
				'id_dataunit' => $id
			);

			$this->pegawaiModel->update_data('data_unitkerja', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/DataUnitKerja');
		}
	}


	public function delete_data($id) {
		$where = array('id_dataunit' => $id);
		$this->pegawaiModel->delete_data($where, 'data_unitkerja');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/DataUnitKerja');
	}
}

?>
