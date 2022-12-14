<section class="content-header">
    <h1>
        Size
        <small>Size Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Size</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Size</h3>
            <div class="pull-right">
                <a href="<?= site_url('unit/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"> Add Size Product</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Size Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) { ?>

                        <tr>
                            <td style="width: 5%;"><?= $no++ ?></td>
                            <td><?= $data->name ?></td>
                            <td class="text-center" width="160px">
                                <a href="<?= site_url('unit/edit/' . $data->unit_id) ?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"> Update</i>
                                </a>
                                <a href="<?= site_url('unit/delete/' . $data->unit_id) ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"> Delete</i>
                                </a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

</section>