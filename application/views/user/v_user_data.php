<section class="content-header">
    <h1>
        Dashboard
        <small>Conrol Panel</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <div id="flash" data-flash="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Users</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>No Telp</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>

                        <tr>
                            <td style="width: 5%;"><?= $no++ ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->username ?></td>
                            <td><?= $data->address ?></td>
                            <td><?= $data->no_telp ?></td>
                            <td>
                                <?php if ($data->status_user == 1) {
                                    echo '<p class="text-success"><i class="fa fa-check-circle"> Approve</i></p>';
                                } else {
                                    if ($data->status_user == 2) {
                                        echo '<p class="text-danger"><i class="fa fa-ban"> Reject</i></p>';
                                    } elseif ($data->status_user == 3) {
                                        echo '<p class="text-warning"><i class="fa fa-share-square"> Waiting Confirm</i></p>';
                                    } else {
                                        echo '<p class="text-info"><i class="fa fa-exclamation-triangle"> not submitted</i></p>';
                                    }
                                } ?></td>
                            <td class="text-center" width="250px">
                                <?php if ($data->status_user != 1) { ?>
                                    <a href="<?= site_url('user/confirm/' . $data->user_id) ?>" id="btn-confirm" class="btn btn-primary btn-xs">
                                        <i class="fa fa-exclamation-circle "> Konfirmasi</i>
                                    </a>
                                <?php } ?>
                                <a href="<?= site_url('user/view/' . $data->user_id) ?>" class="btn btn-info btn-xs">
                                    <i class="fa fa-eye"> Lihat</i>
                                </a>
                                <a href="<?= site_url('user/delete/' . $data->user_id) ?>" id="btn-hapus" class="btn btn-danger btn-xs">
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