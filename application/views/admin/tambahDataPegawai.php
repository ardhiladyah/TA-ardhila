        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
                
            </div>

<div class="card" style="width: 60%; margin-bottom: 100px">
	<div class="card-body">
		<form method="POST" action="<?php echo base_url('admin/dataPegawai/tambahDataAksi') ?>">
			

            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control">
                <?php echo form_error('nip','<div class="text-small text-danger"></div>') ?>
            </div>
            <div class="form-group">
                <label>Nama Pegawai</label>
                <input type="text" name="nama_pegawai" class="form-control">
                <?php echo form_error('nama_pegawai','<div class="text-small text-danger"></div>') ?>
            </div>
                        <div class="form-group">
                <label>Alamat Pegawai</label>
                <input type="text" name="alamat_pegawai" class="form-control">
                <?php echo form_error('alamat_pegawai','<div class="text-small text-danger"></div>') ?>
            </div>
                        <div class="form-group">
                <label>Jabatan</label>
                <select type="text" name="jabatan" class="form-control">
                <option value="">---Pilih Jabatan---</option>
                <option value="Kepala Desa">Kepala Desa</option>
                <option value="Bendahara Desa">Bendahara Desa</option>
                <option value="Perangkat Desa">Perangkat Desa</option>
                <?php echo form_error('jabatan','<div class="text-small text-danger"></div>') ?>
            </select>
            </div>
                        <div class="form-group">
                <label>Keterangan</label>
                <select type="text" name="keterangan" class="form-control">
                <option value="">---Pilih Keterangan---</option>
                <option value="Pimpinan">Pimpinan</option>
                <option value="Bendahara">Bendahara</option>
                <option value="Penagih">Penagih</option>
                <?php echo form_error('keterangan','<div class="text-small text-danger"></div>') ?>
            </select>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</div>

        

        </div>
        <!-- /.container-fluid -->





