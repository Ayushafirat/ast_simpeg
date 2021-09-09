<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

</div>
<!-- /.container-fluid -->

<div class="card" style="width: 98% ; margin-bottom: 90px ; margin-left: 10px">
	
	<div class="card-body">
		<form method="POST" action="<?php echo base_url('admin/DataPegawai/tambah_data_aksi')?>" enctype="multipart/form-data">
		
		<div class="row">
    		<div class="col mb-3">
				<label>NP</label>
      			<input type="text" class="form-control" name="np_peg">
				<?php echo form_error('np_peg', '<div class="text-small text-danger"> </div>')?>
    	</div>

		<div class="col">
				<label>Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_peg">
				<?php echo form_error('nama_peg', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>

		<div class="row">
    		<div class="col mb-3">
				<label>Kode Bagan</label>
      			<input type="text" class="form-control" name="kode_bagan">
				<?php echo form_error('kode_bagan', '<div class="text-small text-danger"> </div>')?>
    	</div>

		<div class="col">
				<label>Posisi Pegawai</label>
				<input type="text" class="form-control" name="posisi_peg">
				<?php echo form_error('posisi_peg', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>  

			<div class="form-group">
				<label>Unit Kerja</label>
				<select name="Unit Kerja" class="form-control">
					<option value="">--Pilih Unit Kerja--</option>
					<?php foreach($unitkerja as $un) :?>
					<option value="<?php echo $un->unit_kerja ?>"><?php echo $un->unit_kerja ?></option>
					<?php endforeach; ?>
				</select>
			</div>

		<div class="form-group">
				<label>Tanggal Pensiun</label>
      			<input type="date" class="form-control" name="tgl_pensiun">
				<?php echo form_error('kode_pensiun', '<div class="text-small text-danger"> </div>')?>
    	</div>
		
		<!-- <div class="row">
    		<div class="col mb-3">
				<label>Tanggal MPP</label>
      			<input type="date" class="form-control" name="tgl_mpp">
				<?php echo form_error('tgl_mpp', '<div class="text-small text-danger"> </div>')?>
    	</div>
		<div class="col">
				<label>Tanggal Pensiun </label>
				<input type="date" class="form-control" name="tgl_pensiun">
				<?php echo form_error('tgl_pensiun', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>   -->

		<div class="row">
    		<div class="col mb-3">
				<label>Level Pegawai</label>
      			<input type="number" class="form-control" name="lvl_peg">
				<?php echo form_error('lvl_peg', '<div class="text-small text-danger"> </div>')?>
    	</div>
		<div class="col">
				<label>Status Mobilisasi</label>
				<select name="sts_mobilisasi" class="form-control" type="text" >
					<option value="">--Pilih Status Mobilisasi--</option>
					<option value="Mobilisasi">Mobilisasi</option>
					<option value="Non-Mobilisasi">Non-Mobilisasi</option>
				</select>
				<?php echo form_error('sts_mobilisasi', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>  

			<button type="submit" class="btn btn-success" >Simpan</button>
			<button type="reset" class="btn btn-danger" >Reset</button>
			<a href="<?php echo base_url('admin/DataPegawai')?>" class="btn btn-warning">Kembali</a>

		</form>
	</div>
</div>
