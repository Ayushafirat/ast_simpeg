<?php

class DataPegawai extends CI_Controller{
	public function index()
	{
		$data['title'] = "Data Pegawai";
		$data['pegawai'] = $this->pegawaiModel->get_data('data_pegawai')->result();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pegawai/DataPegawai', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_data() 
	{
		$data['title'] = "Tambah Data Pegawai";
		$data['unitkerja'] = $this->pegawaiModel->get_data('data_unitkerja')->result();
		$data['pegawai'] = $this->pegawaiModel->get_data('data_pegawai')->result();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pegawai/TambahDataPegawai', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_data_aksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$np_peg				= $this->input->post('np_peg');
			$nama_peg			= $this->input->post('nama_peg');
			$kode_bagan			= $this->input->post('kode_bagan');
			$unit_kerja			= $this->input->post('unit_kerja');
			$posisi_peg			= $this->input->post('posisi_peg');
			$tgl_pensiun		= $this->input->post('tgl_pensiun');
			$lvl_peg			= $this->input->post('lvl_peg');
			$sts_mobilisasi		= $this->input->post('sts_mobilisasi');

			$data = array(
				'np_peg' 			=> $np_peg,
				'nama_peg' 			=> $nama_peg,
				'kode_bagan' 		=> $kode_bagan,
				'unit_kerja' 		=> $unit_kerja,
				'posisi_peg' 		=> $posisi_peg,
				// 'tgl_mpp' 			=> $tgl_mpp,
				'tgl_pensiun' 		=> $tgl_pensiun,
				'lvl_peg' 			=> $lvl_peg,
				'sts_mobilisasi' 	=> $sts_mobilisasi,
			);

			$this->pegawaiModel->insert_data($data, 'data_pegawai');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/DataPegawai');
		}
	}
	public function _rules() {
		$this->form_validation->set_rules('np_peg','NP Pegawai','required');
		$this->form_validation->set_rules('nama_peg','Unit Kerja','required');
		$this->form_validation->set_rules('kode_bagan','Kode Bagan','required');
		$this->form_validation->set_rules('unit_kerja','Unit Kerja','required');
		$this->form_validation->set_rules('posisi_peg','Posisi Pegawai','required');
		// $this->form_validation->set_rules('tgl_mpp','Tanggal MPP','required');
		$this->form_validation->set_rules('tgl_pensiun','Tanggal Pensiun','required');
		$this->form_validation->set_rules('lvl_peg','Level Pegawai','required');
		$this->form_validation->set_rules('sts_mobilisasi','Mobilisasi','required');
	}

	public function update_data($id) 
	{
		$where = array('id_peg' => $id);
		$data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_peg= '$id'")->result();
		$data['unitkerja'] = $this->pegawaiModel->get_data('data_unitkerja')->result();
		$data['title'] = "Update Data Pegawai";
		
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pegawai/UpdateDataPegawai', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update_data_aksi() {
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->update_data();
		} else {
			$id					= $this->input->post('id_peg');
			$np_peg				= $this->input->post('np_peg');
			$nama_peg			= $this->input->post('nama_peg');
			$kode_bagan			= $this->input->post('kode_bagan');
			$unit_kerja			= $this->input->post('unit_kerja');
			$posisi_peg			= $this->input->post('posisi_peg');
			// $tgl_mpp			= $this->input->post('tgl_mpp');
			$tgl_pensiun		= $this->input->post('tgl_pensiun');
			$lvl_peg			= $this->input->post('lvl_peg');
			$sts_mobilisasi		= $this->input->post('sts_mobilisasi');


			$data = array(
				'id_peg' 			=> $id,
				'np_peg' 			=> $np_peg,
				'nama_peg' 			=> $nama_peg,
				'kode_bagan' 		=> $kode_bagan,
				'unit_kerja' 		=> $unit_kerja,
				'posisi_peg' 		=> $posisi_peg,
				// 'tgl_mpp' 			=> $tgl_mpp,
				'tgl_pensiun' 		=> $tgl_pensiun,
				'lvl_peg' 			=> $lvl_peg,
				'sts_mobilisasi' 	=> $sts_mobilisasi,
			);

			$where = array(
				'id_peg' => $id
			);

			$this->pegawaiModel->update_data('data_pegawai', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/DataPegawai');
		}
	}


	public function delete_data($id) {
		$where = array('id_peg' => $id);
		$this->pegawaiModel->delete_data($where, 'data_pegawai');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/DataPegawai');
	}
}

?>
