<section class="content-header">
    <h1>
        Profil
        <small>Profil User Upload Berkas</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Upload Berkas</h3>
            <div class="pull-right">
                <a href="<?= site_url('profil_user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> Back</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('profil_user/process') ?>
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                        <div class="form-group <?= form_error('nama_lengkap') ? 'has-error' : null ?>">
                            <label>Name *</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input type="text" name="nama_lengkap" value="<?= $this->input->post('nama_lengkap') ? $this->input->post('nama_lengkap') : $row->nama ?>" class="form-control">
                            <?= form_error('nama_lengkap') ?>
                        </div>
                        <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                            <label>Username *</label>
                            <input type="text" name="username" value="<?= $this->input->post('username') ? $this->input->post('username') : $row->username ?>" class="form-control">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group <?= form_error('address') ? 'has-error' : null ?>">
                            <label>Alamat *</label>
                            <input type="text" name="address" value="<?= $this->input->post('address') ? $this->input->post('address') : $row->address ?>" class="form-control">
                            <?= form_error('address') ?>
                        </div>
                        <div class="form-group <?= form_error('no_telp') ? 'has-error' : null ?>">
                            <label>No Telp *</label>
                            <input type="text" name="no_telp" value="<?= $this->input->post('no_telp') ? $this->input->post('no_telp') : $row->no_telp ?>" class="form-control">
                            <?= form_error('no_telp') ?>
                        </div>
                        <div class="form-group">
                            <label>Kabupaten / Kota *</label>
                            <select name="kabkota" class="form-control" required>
                                <option value="">- Pilih Kabupaten / Kota -</option>
                                <?php foreach ($kabkota->result() as $key => $data) { ?>
                                    <option value="<?= $data->id ?>" <?= $data->id == $row->kabkota ? "selected" : null ?>><?= $data->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Provinsi *</label>
                            <select name="provinsi" class="form-control" required>
                                <option value="">- Pilih Kabupaten / Kota -</option>
                                <?php foreach ($provinsi->result() as $key => $data) { ?>
                                    <option value="<?= $data->id ?>" <?= $data->id == $row->provinsi ? "selected" : null ?>><?= $data->name ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group <?= form_error('kodepos') ? 'has-error' : null ?>">
                            <label>Kode Pos *</label>
                            <input type="text" name="kodepos" value="<?= $this->input->post('kodepos') ? $this->input->post('kodepos') : $row->kodepos ?>" class="form-control">
                            <?= form_error('kodepos') ?>
                        </div>
                        <div class="form-group">
                            <label>E-KTP </label>
                            <?php if ($page == 'edit') {
                                if ($row->ktp != null) { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('uploads/berkas/profil/' . $row->ktp) ?>" style="width: 45%;">
                                    </div>
                            <?php
                                }
                            } ?>
                            <input type="file" name="ktp" class="form-control">
                            <small style="color: red ;">biarkan kosong jika tidak ada perubahan gambar</small>
                        </div>
                        <div class="form-group">
                            <label>Foto </label>
                            <?php if ($page == 'edit') {
                                if ($row->foto != null) { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('uploads/berkas/profil/' . $row->foto) ?>" style="width: 45%;">
                                    </div>
                            <?php
                                }
                            } ?>
                            <input type="file" name="foto" class="form-control">
                            <small style="color: red ;">biarkan kosong jika tidak ada perubahan gambar</small>
                        </div>
                        <div class="form-group">
                            <label>Kartu Pers </label>
                            <?php if ($page == 'edit') {
                                if ($row->kartu_pers != null) { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('uploads/berkas/profil/' . $row->kartu_pers) ?>" style="width: 45%;">
                                    </div>
                            <?php
                                }
                            } ?>
                            <input type="file" name="kartu_pers" class="form-control">
                            <small style="color: red ;">biarkan kosong jika tidak ada perubahan gambar</small>
                        </div>
                        <div class="form-group">
                            <label>NPWP </label>
                            <?php if ($page == 'edit') {
                                if ($row->npwp != null) { ?>
                                    <div style="margin-bottom: 5px; text-align: center;">
                                        <img src="<?= base_url('uploads/berkas/profil/' . $row->npwp) ?>" style="width: 45%;">
                                    </div>
                            <?php
                                }
                            } ?>
                            <input type="file" name="npwp" class="form-control">
                            <small style="color: red ;">biarkan kosong jika tidak ada perubahan gambar</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"> Save</i></button>
                            <!-- <button type="reset" class="btn btn-secondary btn-flat">Reset</button> -->
                        </div>

                        <?php echo form_close() ?>
                    </div>

                </div>
            </div>
        </div>

</section>