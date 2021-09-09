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
		<form method="POST" action="<?php echo base_url('admin/DataPKWT/tambah_data_aksi')?>" enctype="multipart/form-data">

		<div class="row">
    		<div class="col mb-3">
				<label>NP</label>
      			<input type="text" class="form-control" name="np_pkwt">
				<?php echo form_error('np_pkwt', '<div class="text-small text-danger"> </div>')?>
    	</div>

		<div class="col">
				<label>Nama Lengkap</label>
				<input type="text" class="form-control" name="nama_pkwt">
				<?php echo form_error('nama_pkwt', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>  

		<div class="row">
    		<div class="col mb-3">
				<label>Kode Bagan</label>
      			<input type="text" class="form-control" name="kode_bagan">
				<?php echo form_error('kode_bagan', '<div class="text-small text-danger"> </div>')?>
    	</div>

		<div class="col">
				<label>Status</label>
				<input type="text" class="form-control" name="sts_pkwt">
				<?php echo form_error('sts_pkwt', '<div class="text-small text-danger"> </div>')?>
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
				<label>Kontrak PKWT</label>
				<input type="text" name="kontrak_pkwt" class="form-control">
				<?php echo form_error('kontrak_pkwt', '<div class="text-small text-danger"> </div>')?>
			</div>

		<div class="row">
    		<div class="col mb-3">
				<label>Mulai Kontrak</label>
      			<input type="date" class="form-control" name="mulai_pkwt">
				<?php echo form_error('mulai_pkwt', '<div class="text-small text-danger"> </div>')?>
    	</div>

		<div class="col">
				<label>Berakhir Kontrak</label>
				<input type="date" class="form-control" name="berakhir_pkwt">
				<?php echo form_error('berakhir_pkwt', '<div class="text-small text-danger"> </div>')?>
			</div>
  		</div>  

			<button type="submit" class="btn btn-success" >Simpan</button>
			<button type="reset" class="btn btn-danger" >Reset</button>
			<a href="<?php echo base_url('admin/DataUnitKerja')?>" class="btn btn-warning">Kembali</a>

		</form>
	</div>
</div>
