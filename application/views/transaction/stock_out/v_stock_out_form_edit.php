<section class="content-header">
    <h1>
        Stock Out
        <small>Barang Keluar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Stock Out</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Edit Stock Out</h3>
            <div class="pull-right">
                <a href="<?= site_url('stock/out') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> Back</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?= site_url('stock/process') ?>" method="POST">
                        <!-- <div class="form-group">
                            <label>Date *</label>
                            <input type="date" name="date" value="<?= date('Y-m-d') ?>" class="form-control" required>
                        </div> -->

                        <div class="form-group">
                            <label>Date *</label>
                            <input type="hidden" name="id" value="<?= $row->stock_id ?>">
                            <input type="text" name="date" value="<?= $row->date ?>" class="form-control" readonly required>
                        </div>

                        <div>
                            <label for="barcode">Barcode *</label>
                            <input type="hidden" name="item_id" value="<?= $item->row()->item_id ?>">
                            <input type="text" name="barcode" value="<?= $item->row()->barcode ?>" class="form-control" readonly required>
                        </div>


                        <div class="form-group">
                            <label for="item_name">Category Product *</label>
                            <input type="text" name="item_name" id="item_name" value="<?= $item->row()->category_name ?>" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="unit_name">Size</label>
                                    <input type="text" name="unit_name" id="unit_name" value="<?= $item->row()->unit_name ?>" class="form-control" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="stock">Initial Stock</label>
                                    <input type="text" name="stock" id="stock" value="<?= $item->row()->stock ?>" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-md-6">
                                        <label for="qty">Qty *</label>
                                        <input type="text" name="qty" class="form-control" value="<?= $row->qty ?>" readonly required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="harga">Total Harga *</label>
                                        <input type="text" name="harga" class="form-control" value="<?= 'Rp. ' . ($item->row()->price * $row->qty) ?>" readonly required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="image">Image </label>
                                    <?php
                                    if ($item->row()->image != null) { ?>
                                        <div style="margin-bottom: 5px; text-align: center;">
                                            <img src="<?= base_url('uploads/product/' . $item->row()->image) ?>" style="width: 60%;">
                                        </div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Omset Produk *</label>
                            <small>Masukan omset yang sudah dipotong dengan pajak..</small>
                            <input type="hidden" name="t_potongan" value="<?= (($item->row()->price * $row->qty)) ?>">
                            <input type="text" name="sisa_dana" value="<?= $row->sisa_dana ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="out_edit" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"> Save</i></button>
                            <button type="reset" class="btn btn-secondary btn-flat">Reset</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</section>


<script>
    $(document).ready(function() {
        $('#table1').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "<?= site_url('stock/get_ajax') ?>",
                    "type": "POST"
                },
                "columnDefs": [{
                    "targets": [0, 1, 2, 3, 4, 5, -1],
                    "className": 'text-center'
                }],
                "order": []
            }),
            $(document).on('click', '#select', function() {
                var item_id = $(this).data('id');
                var barcode = $(this).data('barcode');
                var name = $(this).data('name');
                var unit_name = $(this).data('unit');
                var stock = $(this).data('stock');
                $('#item_id').val(item_id);
                $('#barcode').val(barcode);
                $('#item_name').val(name);
                $('#unit_name').val(unit_name);
                $('#stock').val(stock);
                $('#modal-item').modal('hide');
            })
    })
</script>