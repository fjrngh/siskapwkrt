<section class="content-header">
    <h1>
        Items
        <small>Items Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Item</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Item</h3>

        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="table1" style="width: 100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barcode</th>
                        <th>Category Product</th>
                        <th>Type</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
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
                "url": "<?= site_url('item_user/get_ajax') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                    "targets": [1, 2, 3, 4, 5, 6, -1],
                    "className": 'text-center'
                },
                {
                    "targets": [0, -1],
                    "orderable": false
                }
            ],
            "order": []
        })
    })
</script>