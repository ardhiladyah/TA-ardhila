    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
            
        </div>
<a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataObjekpajak/tambahData') ?>"><i class="fas fa-plus">Tambah Data</i></a>
<?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-bordered table-striped mt-2">
        	<tr>
        		<th class="text-center">No</th>
        		<th class="text-center">NOP</th>
        		<th class="text-center">Nama Wajib Pajak</th>
        		<th class="text-center">Alamat Objek Pajak</th>
                <th class="text-center">Luas Bumi</th>
                <th class="text-center">Luas Bangunan</th>
        		<th class="text-center">Action</th>
        	</tr>
        	
        	<?php $no=1; foreach($objekpajak as $o) : ?>
        		<tr>
        			<td><?php echo $no++ ?></td>
        			<td><?php echo $o->nop ?></td>
        			<td><?php echo $o->nama_wajibpajak ?></td>
        			<td><?php echo $o->alamat_objekpajak ?></td>
                    <td><?php echo $o->luas_bumi ?></td>
                    <td><?php echo $o->luas_bangunan ?></td>
        			<td>
        				<center>
        					<a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataObjekpajak/updateData/'.$o->id_objekpajak) ?>"><i class="fas fa-edit"></i></a>
        					<a onclick="return confirm('Yakin Hapus')"class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataObjekpajak/deletedata/'.$o->id_objekpajak) ?>"><i class="fas fa-trash"></i></a>
        				</center>
        			</td>
        		</tr>
        	<?php endforeach; ?>
        </table>


    

    </div>
    <!-- /.container-fluid -->





