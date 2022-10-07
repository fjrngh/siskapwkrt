<section class="content-header">
    <h1>
        Ubah Media
        <small>Ubah Media Berita</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Ubah Media Berita</h3>
            <div class="pull-right">
                <a href="<?= site_url('berita_admin') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> Back</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('berita_admin/process') ?>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $row->berita_id ?>">
                        <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                        <div class="form-group">
                            <label>Nama Media</label>
                            <input type="text" name="nama_media" value="<?= $row->nama_media ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Media *</label>
                            <select name="jenis_media" class="form-control" required>
                                <option value="" selected="selected">- Pilih Jenis Media -</option>
                                <option value="portal_online" <?= "portal_online" == $row->jenis_media ? "selected" : null ?>>Portal Online</option>
                                <option value="koran" <?= "koran" == $row->jenis_media ? "selected" : null ?>> Koran </option>
                                <option value="majalah" <?= "majalah" == $row->jenis_media ? "selected" : null ?>> Majalah </option>
                                <option value="radio" <?= "radio" == $row->jenis_media ? "selected" : null ?>> Radio </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Link/ Url Media *</label>
                            <input type="text" name="link_media" value="<?= $row->url ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Perusahaan *</label>
                            <input type="text" name="nama_perusahaan" value="<?= $row->nama_perusahaan ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Rate Card </label>
                            <?php if ($row->rate_card != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->rate_card) ?>"><?= $row->rate_card ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="rate_card" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <label>Akta Pendirian </label>
                            <?php if ($row->akta_pendirian != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->akta_pendirian) ?>"><?= $row->akta_pendirian ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="akta_pendirian" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <label>SK Kemenkumham </label>
                            <?php if ($row->sk_kemenkumham != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->sk_kemenkumham) ?>"><?= $row->sk_kemenkumham ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="sk_kemenkumham" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <label>NPWP Perusahaan </label>
                            <?php if ($row->npwp_perusahaan != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->npwp_perusahaan) ?>"><?= $row->npwp_perusahaan ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="npwp_perusahaan" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <label>SIUP </label>
                            <?php if ($row->siup != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->siup) ?>"><?= $row->siup ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="siup" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <label>NIB </label>
                            <?php if ($row->nib != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->nib) ?>"><?= $row->nib ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="nib" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <label>Surat Domisili </label>
                            <?php if ($row->sk_domisili != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->sk_domisili) ?>"><?= $row->sk_domisili ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="sk_domisili" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <label>Surat Pengukuhan Kena Pajak (PKP) </label>
                            <?php if ($row->sk_pkp != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->sk_pkp) ?>"><?= $row->sk_pkp ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="sk_pkp" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <label>Referensi Bank </label>
                            <?php if ($row->referensi_bank != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    Lihat File :
                                    <a href="<?= base_url('uploads/berkas/media/' . $row->referensi_bank) ?>"><?= $row->referensi_bank ?></a>
                                </div>
                            <?php
                            }
                            ?>
                            <input type="file" name="referensi_bank" class="form-control">
                            <small style="color: red ;">Biarkan kosong jika tidak ada perubahan pada document</small>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"> Simpan</i></button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>