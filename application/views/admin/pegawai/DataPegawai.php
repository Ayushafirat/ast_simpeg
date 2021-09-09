<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>
  <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/DataPegawai/tambah_data') ?>"><i class="fas fa-plus"></i> Tambah Data Pegawai</a>
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
              <th class="text-center">Kode Bagan</th>
							<th class="text-center">Unit Kerja</th>
							<th class="text-center">Posisi Pegawai</th>
							<!-- <th class="text-center">Tanggal MPP</th> -->
							<th class="text-center">Tanggal Pensiun</th>
							<th class="text-center">Level Pegawai</th>
							<th class="text-center">Mobilisasi</th>
              <th class="text-center">Actions</th>
           </tr>
         </thead>
         <tbody>
           <?php $no=1; foreach($pegawai as $p) : ?>
            <tr>
              <td class="text-center"><?php echo $no++ ?></td>
              <td class="text-center"><?php echo $p->np_peg ?></td>
							<td class="text-center"><?php echo $p->nama_peg ?></td>
							<td class="text-center"><?php echo $p->kode_bagan ?></td>
							<td class="text-center"><?php echo $p->unit_kerja ?></td>
							<td class="text-center"><?php echo $p->posisi_peg ?></td>
							<!-- <td class="text-center"><?php echo $p->tgl_mpp ?></td> -->
							<td class="text-center"><?php echo $p->tgl_pensiun ?></td>
							<td class="text-center"><?php echo $p->lvl_peg ?></td>
							<td class="text-center"><?php echo $p->sts_mobilisasi ?></td>
         
              <td>
                <center>
                  <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/DataPegawai/update_data/'.$p->id_peg) ?>"><i class="fas fa-edit"></i></a>
                  <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/DataPegawai/delete_data/'.$p->id_peg) ?>"><i class="fas fa-trash"></i></a>
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
