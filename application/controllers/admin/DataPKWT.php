<?php
class dataPKWT extends CI_Controller{
	public function index()
	{
		$data['title'] = "Data PKWT";
		$data['pkwt'] = $this->pegawaiModel->get_data('data_pkwt')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pkwt/DataPWKT', $data);
		$this->load->view('templates_admin/footer');
	}	

	public function tambah_data()
	{
		$data['title'] = "Tambah Data PKWT";
		$data['unitkerja'] = $this->pegawaiModel->get_data('data_unitkerja')->result();


		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pkwt/TambahDataPKWT', $data);
		$this->load->view('templates_admin/footer');
	}	

	public function tambah_data_aksi()
	{
		$this-> _rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahData();
		}else{
			$np_pkwt	 			=$this->input->post('np_pkwt');
			$nama_pkwt 				=$this->input->post('nama_pkwt');
			$unit_pkwt 				=$this->input->post('unit_pkwt');
			$kode_bagan 			=$this->input->post('kode_bagan');
			$sts_pkwt 				=$this->input->post('sts_pkwt');
			$kontrak_pkwt 			=$this->input->post('kontrak_pkwt');
			$mulai_pkwt 			=$this->input->post('mulai_pkwt');
			$berakhir_pkwt  		=$this->input->post('berakhir_pkwt');

			$data = array(
				'np_pkwt' 			=> $np_pkwt,
				'nama_pkwt'			=> $nama_pkwtn,
				'unit_pkwt' 		=> $unit_pkwt,
				'kode_bagan'		=> $kode_bagan,
				'sts_pkwt'			=> $sts_pkwt,
				'kontrak_pkwt' 		=> $kontrak_pkwt,
				'mulai_pkwt' 		=> $mulai_pkwt,
				'berakhir_pkwt'		=> $berakhir_pkwt,
			);
			$this->pegawaiModel->insert_data($data,'data_pkwt');
			$this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">Data berhasil ditambahkan!</div>');
		  redirect('admin/DataPWKT');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('np_pkwt','np_pkwt','required');
		$this->form_validation->set_rules('nama_pkwt','nama lengkap','required');
		$this->form_validation->set_rules('unit_pkwt','unit kerja','required');
		$this->form_validation->set_rules('kode_bagan','kode bagan','required');
		$this->form_validation->set_rules('sts_pkwt','status pkwt','required');
		$this->form_validation->set_rules('kontrak_pkwt','kontrak pkwt','required');
		$this->form_validation->set_rules('mulai_pkwt','mulai pkwt','required');
		$this->form_validation->set_rules('berakhir_pkwt','berakhir pkwt','required');
	}

}
?>
