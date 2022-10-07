<section class="content-header">
    <h1>
        Stock Out
        <small>Stock Barang Keluar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li>Transaction</li>
        <li class="active">Stock Out</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Stock Out</h3>
            <div class="pull-right">
                <a href="<?= site_url('stock/out/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"> Add Stock Out</i>
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Product Item</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Omset</th>
                        <th>Total Potongan</th>
                        <th>Sisa Dana</th>
                        <th>Date</th>
                        <th>User</th>
                        <th>File Transaction</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
    </div>

</section>

<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= site_url('stock/get_ajax_out') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                    "targets": [1, 2, 3, 4, 5, 6, -1],
                    "className": 'text-center'
                },
                {
                    "targets": [0, 10, -1],
                    "orderable": false
                }
            ],
            "order": []
        })
    })
</script>