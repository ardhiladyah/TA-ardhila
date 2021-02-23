        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>

            </div>

            <div class="card" style="width: 60%; margin-bottom: 100px">
                <div class="card-body">

                    <?php foreach ($pegawai as $p) : ?>
                        <form method="POST" action="<?php echo base_url('admin/dataPegawai/updateDataAksi') ?>">


                            <div class="form-group">
                                <label>NIP</label>
                                <input type="hidden" name="id_pegawai" class="form-control" value="<?php echo $p->id_pegawai  ?>">
                                <input type="text" name="nip" class="form-control" value="<?php echo $p->nip  ?>">
                                <?php echo form_error('nip', '<div class="text-small text-danger"></div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" class="form-control" value="<?php echo $p->nama_pegawai ?>">
                                <?php echo form_error('nama_pegawai', '<div class="text-small text-danger"></div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat Pegawai</label>
                                <input type="text" name="alamat_pegawai" class="form-control" value="<?php echo $p->alamat_pegawai  ?>">
                                <?php echo form_error('alamat_pegawai', '<div class="text-small text-danger"></div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select type="text" name="jabatan" class="form-control">
                                <option value="<?php echo $p->jabatan ?>"><?php echo $p->jabatan ?></option>
                                <option value="Kepala Desa">Kepala Desa</option>
                                <option value="Bendahara Desa">Bendahara Desa</option>
                                <option value="Perangkat Desa">Perangkat Desa</option>
                                <?php echo form_error('jabatan', '<div class="text-small text-danger"></div>') ?>
                            </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                               <select type="text" name="keterangan" class="form-control">
                                <option value="<?php echo $p->keterangan ?>"><?php echo $p->keterangan ?></option>
                                <option value="Pimpinan">Pimpinan</option>
                                <option value="Bendahara">Bendahara</option>
                                <option value="Penagih">Penagih</option>
                                <?php echo form_error('keterangan', '<div class="text-small text-danger"></div>') ?>
                            </select>
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>



        </div>
        <!-- /.container-fluid -->