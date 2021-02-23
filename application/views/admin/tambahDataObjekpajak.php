        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
                
            </div>

<div class="card" style="width: 60%; margin-bottom: 100px">
	<div class="card-body">
		<form method="POST" action="<?php echo base_url('admin/dataObjekpajak/tambahDataAksi') ?>">
			

            <div class="form-group">
                <label>NOP</label>
                <input type="text" name="nop" class="form-control">
                <?php echo form_error('nop','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Nama Wajib Pajak</label>
                <select class="form-control" id="nama_wajibpajak" name="nama_wajibpajak">
                    <option selected disabled="">Pilih Nama Wajib Pajak</option>
                    <?php foreach($wajibpajak as $w) : ?>
                    <option value="<?php echo $w->id_wajibpajak;?>"> <?php echo $w->nama_wajibpajak; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('nama_wajibpajak','<div class="text-small text-danger"></div>') ?>
            </div>
                        <div class="form-group">
                <label>Alamat Objek Pajak</label>
                <input type="text" name="alamat_objekpajak" class="form-control">
                <?php echo form_error('alamat_objekpajak','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Luas Bumi</label>
                <input type="number" name="luas_bumi" class="form-control">
                <?php echo form_error('luas_bumi','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Luas Bangunan</label>
                <input type="number" name="luas_bangunan" class="form-control">
                <?php echo form_error('luas_bangunan','<div class="text-small text-danger"></div>') ?>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</div>

        

        </div>
        <!-- /.container-fluid -->





