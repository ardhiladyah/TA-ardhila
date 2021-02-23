        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
                
            </div>

<div class="card" style="width: 60%; margin-bottom: 100px">
	<div class="card-body">
		<form method="POST" action="<?php echo base_url('admin/dataWajibpajak/tambahDataAksi') ?>">
			

            <div class="form-group">
                <label>NPWP</label>
                <input type="text" name="npwp" class="form-control">
                <?php echo form_error('npwp','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Nama Wajib Pajak</label>
                <input type="text" name="nama_wajibpajak" class="form-control">
                <?php echo form_error('nama_wajibpajak','<div class="text-small text-danger"></div>') ?>
            </div>
                        <div class="form-group">
                <label>Alamat Wajib Pajak</label>
                <input type="text" name="alamat_wajibpajak" class="form-control">
                <?php echo form_error('alamat_wajibpajak','<div class="text-small text-danger"></div>') ?>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</div>

        

        </div>
        <!-- /.container-fluid -->





