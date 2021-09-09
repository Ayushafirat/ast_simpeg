<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>
  <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/DataPKWT/tambah_data') ?>"><i class="fas fa-plus"></i> Tambah Data PKWT</a>
  <?php echo $this->session->flashdata('pesan')?>
</div>

<div class="container-fluid">
  <div class="card shadow mb-4">
   <div class="card-body">
     <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead class="thead-dark">
		 <tr>
		 <th class="text-center">No</th>
		 <th class="text-center">NP</th>
		 <th class="text-center">Nama Lengkap</th>
		 <th class="text-center">Unit Kerja</th>
		 <th class="text-center">Kode Bagan</th>
		 <th class="text-center">Status</th>
		 <th class="text-center">Kontrak Ke-</th>
		 <th class="text-center">Mulai</th>
		 <th class="text-center">Berakhir</th>
		 <th class="text-center">Action</th>
		 </tr>
         </thead>
<tbody>
		 <?php $no=1; foreach ($pkwt as $pk) :	?>
			<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pk->np_pkwt ?></td>
			<td><?php echo $pk->nama_pkwt ?></td>
			<td><?php echo $pk->unit_pkwt ?></td>
			<td><?php echo $pk->kode_bagan ?></td>
			<td><?php echo $pk->sts_pkwt ?></td>
			<td><?php echo $pk->kontrak_pkwt ?></td>
			<td><?php echo $pk->mulai_pkwt ?></td>
			<td><?php echo $pk->berakhir_pkwt ?></td>
			
			<td>
                <center>
                  <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/DataPKWT/update_data/'.$pk->id_pkwt) ?>"><i class="fas fa-edit"></i></a>
                  <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/DataPWKT/delete_data/'.$pk->id_pkwt) ?>"><i class="fas fa-trash"></i></a>
                </center>
              </td>
            </tr>
          <?php endforeach; ?>
         </tbody>
       </table>
     </div>
   </div>
  </div>
</div>
