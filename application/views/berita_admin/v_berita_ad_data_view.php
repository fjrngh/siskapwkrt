<section class="content-header">
    <h1>
    </h1>
</section>

<!-- Main content -->
<section class="invoice">
    <!-- title row -->
    <?php foreach ($row->result() as $key => $data) { ?>
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <!-- <i class="fa fa-globe"></i> Profil Media Berita -->
                    <small class="pull-right"> <a href="<?= site_url('berita_admin') ?>" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"> Back</i>
                        </a></small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col align-items-center text-center">
                Media
                <address>
                    <strong style="font-size:160%;"><?= $data->nama_media ?></strong><br>
                    <strong style="font-size:260%;"><?= $data->nama_perusahaan ?></strong><br>
                    Jenis Media : <?= $data->jenis_media ?><br>
                    url link media: <?= $data->url ?><br>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row invoice-info">
            <div class="col-sm-3 invoice-col">
            </div>
            <!-- /.col -->
            <div class="col-sm-6 invoice-col align-items-center text-center">
                <div class="row align-items-center text-center">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped align-items-center text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokumen</th>
                                    <th>Berkas Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rate Card</td>
                                    <td><?php if ($data->rate_card != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->rate_card) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Akta Pendirian/Perubahan</td>
                                    <td><?php if ($data->akta_pendirian != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->akta_pendirian) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SK Kemenkumham</td>
                                    <td><?php if ($data->sk_kemenkumham != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->sk_kemenkumham) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>NPWP Perusahaan</td>
                                    <td><?php if ($data->npwp_perusahaan != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->npwp_perusahaan) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>SIUP</td>
                                    <td><?php if ($data->siup != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->siup) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>NIB</td>
                                    <td><?php if ($data->nib != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->nib) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Surat Domisili</td>
                                    <td><?php if ($data->sk_domisili != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->sk_domisili) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Surat Pengukuhan Kena Pajak (PKP)</td>
                                    <td><?php if ($data->sk_pkp != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->sk_pkp) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Referensi Bank</td>
                                    <td><?php if ($data->referensi_bank != null) { ?>
                                            <div style="margin-bottom: 5px; text-align: center;">
                                                <a class="btn btn-success" href="<?= base_url('uploads/berkas/media/' . $data->referensi_bank) ?>"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        <?php
                                        } else { ?>
                                            <small style="color: red ;">Berkas belum ada!</small>
                                        <?php }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
            </div>
            <!-- /.col -->
        </div>
        <div class="col-sm-4 invoice-col">
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col align-items-center text-center">
            <div class="row align-items-center text-center">
                <div class="col-xs-12 table-responsive">
                    <div class="col-xs-12">
                        <!-- <button type="button" class="btn btn-success align-items-center text-center"><i class="fa fa-upload"></i> Upload Berkas Dokumen -->
                        <!-- </button> -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
        </div>
        <div class="row">
        </div>
    <?php } ?>
</section>
<!-- /.content -->
<div class="clearfix"></div>


<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>