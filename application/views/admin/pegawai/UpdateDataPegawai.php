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
		<?php foreach ($pegawai as $p): ?>
		<form method="POST" action="<?php echo base_url('admin/DataPegawai/update_data_aksi')?>">

		<div class="row">
    		<div class="col mb-3">
				<label>NP</label>
				<input type="hidden" name="id_peg" class="form-control" value="<?php echo $p->id_peg?>">
				<input type="text" name="np_peg" class="form-control" value="<?php echo $p->np_peg?>">
				<?php echo form_error('id_peg', '<div class="text-small text-danger"> </div>')?>
    	</div>
		<div class="col">
				<label>Nama Lengkap</label>
				<input type="text" name="nama_peg" class="form-control" value="<?php echo $p->nama_peg?>">
				<?php echo form_error('nama_peg', '<div class="text-small text-danger"> </div>')?> 
			</div>
  		</div>

		  <div class="row">
    		<div class="col mb-3">
				<label>Kode Bagan</label>
				<input type="text" name="kode_bagan" class="form-control" value="<?php echo $p->kode_bagan?>">
				<?php echo form_error('kode_bagan', '<div class="text-small text-danger"> </div>')?>
    	</div>
		<div class="col">
				<label>Posisi Pegawai</label>
				<input type="text" name="posisi_peg" class="form-control" value="<?php echo $p->posisi_peg?>">
				<?php echo form_error('posisi_peg', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>
		
		<div class="form-group">
			<label>Unit Kerja</label>
			<input type="text" name="unit_kerja" class="form-control" value="<?php echo $p->unit_kerja?>">
			<?php echo form_error('unit_kerja', '<div class="text-small text-danger"> </div>')?>
		</div>

		<div class="form-group">
			<label>Tanggal Pensiun</label>
			<input type="date" name="tgl_pensiun" class="form-control" value="<?php echo $p->tgl_pensiun?>">
			<?php echo form_error('tgl_pensiun', '<div class="text-small text-danger"> </div>')?>
		</div>

		<!-- <div class="row">
    		<div class="col mb-3">
				<label>Tanggal MPP</label>
				<input type="date" name="tgl_mpp" class="form-control" value="<?php echo $p->tgl_mpp?>">
				<?php echo form_error('tgl_mpp', '<div class="text-small text-danger"> </div>')?>
    	</div>
		<div class="col">
				<label>Tanggal Pensiun </label>
				<input type="date" name="tgl_pensiun" class="form-control" value="<?php echo $p->tgl_pensiun?>">
				<?php echo form_error('tgl_pensiun', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>   -->
		
		<div class="row">
    		<div class="col mb-3">
				<label>Level Pegawai</label>
				<input type="number" name="lvl_peg" class="form-control" value="<?php echo $p->lvl_peg?>">
				<?php echo form_error('lvl_peg', '<div class="text-small text-danger"> </div>')?>
    	</div>
		<div class="col">
				<label>Status Mobilisasi</label>
				<input type="text" name="sts_mobilisasi" class="form-control" value="<?php echo $p->sts_mobilisasi?>">
				<?php echo form_error('sts_mobilisasi', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>  

			<button type="submit" class="btn btn-success" >Simpan</button>
			<button type="reset" class="btn btn-danger" >Reset</button>
			<a href="<?php echo base_url('admin/DataPegawai')?>" class="btn btn-warning">Kembali</a>

		</form>
	<?php endforeach; ?>
	</div>
</div>
