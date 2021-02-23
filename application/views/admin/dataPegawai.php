    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
            
        </div>

<a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus">Tambah Data</i></a>
<?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-bordered table-striped mt-2">
        	<tr>
        		<th class="text-center">No</th>
        		<th class="text-center">NIP</th>
        		<th class="text-center">Nama Pegawai</th>
        		<th class="text-center">Alamat Pegawai</th>
        		<th class="text-center">Jabatan</th>
        		<th class="text-center">Keterangan</th>
        		<th class="text-center">Action</th>
        	</tr>
        	
        	<?php $no=1; foreach($pegawai as $p) : ?>
        		<tr>
        			<td><?php echo $no++ ?></td>
        			<td><?php echo $p->nip ?></td>
        			<td><?php echo $p->nama_pegawai ?></td>
        			<td><?php echo $p->alamat_pegawai ?></td>
        			<td><?php echo $p->jabatan ?></td>
        			<td><?php echo $p->keterangan ?></td>
        			<td>
        				<center>
        					<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPegawai/updateData/'.$p->id_pegawai) ?>"><i class="fas fa-edit"></i></a>
        					<a onclick="return confirm('Yakin Hapus')"class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPegawai/deletedata/'.$p->id_pegawai) ?>"><i class="fas fa-trash"></i></a>
        				</center>
        			</td>
        		</tr>
        	<?php endforeach; ?>
        </table>
        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div>

    

    </div>
    <!-- /.container-fluid -->





