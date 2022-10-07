<section class="content-header">
    <h1>
        List Media
        <small>Media Berita</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <?php //$this->view('message'); 
    ?>
    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">List Media Berita</h3>
            <div class="pull-right">
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Media</th>
                        <th>Jenis Media</th>
                        <th>Url</th>
                        <th>Nama Perusahaan</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>

                        <tr>
                            <td style="width: 5%;"><?= $no++ ?></td>
                            <td><?= $data->nama_media ?></td>
                            <td><?= $data->jenis_media ?></td>
                            <td><?= $data->url ?></td>
                            <td><?= $data->nama_perusahaan ?></td>
                            <td><?php if ($data->status == '1') {
                                    echo 'approve';
                                } elseif ($data->status == '2') {
                                    echo 'reject';
                                } else {
                                    echo 'waiting';
                                }
                                ?>
                            </td>
                            <td class="text-center" width="280px">
                                <a href="<?= site_url('berita/view/' . $data->berita_id) ?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-eye"> Lihat</i>
                                </a>
                                <a href="<?= site_url('berita/edit/' . $data->berita_id) ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"> Ubah</i>
                                </a>
                                <a href="<?= site_url('berita/delete/' . $data->berita_id) ?>" id="btn-hapus" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"> Hapus</i>
                                </a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

</section>