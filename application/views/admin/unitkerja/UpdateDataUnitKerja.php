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
		<?php foreach ($unitkerja as $un): ?>
		<form method="POST" action="<?php echo base_url('admin/DataUnitKerja/update_data_aksi')?>">
			
			<div class="form-group">
				<label>Kode Bagan</label>
				<input type="hidden" name="id_dataunit" class="form-control" value="<?php echo $un->id_dataunit?>">
				<input type="text" name="kode_bagan" class="form-control" value="<?php echo $un->kode_bagan?>">
				<?php echo form_error('kode_bagan', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Unit Kerja</label>
				<input type="text" name="unit_kerja" class="form-control" value="<?php echo $un->unit_kerja?>">
				<?php echo form_error('unit_kerja', '<div class="text-small text-danger"> </div>')?> 
			</div>

			<div class="form-group">
				<label>Shift</label>
				<input type="text" name="shift_kerja" class="form-control" value="<?php echo $un->shift_kerja?>">
				<?php echo form_error('shift_kerja', '<div class="text-small text-danger"> </div>')?>
			</div>

			<button type="submit" class="btn btn-success" >Simpan</button>
			<button type="reset" class="btn btn-danger" >Reset</button>
			<a href="<?php echo base_url('admin/DataUnitKerja')?>" class="btn btn-warning">Kembali</a>

		</form>
	<?php endforeach; ?>
	</div>
</div>
