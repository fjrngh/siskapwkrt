<section class="content-header">
    <h1>
        Items
        <small>Item Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Items</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('message'); ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?> Item</h3>
            <div class="pull-right">
                <a href="<?= site_url('item') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"> Back</i>
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo form_open_multipart('item/process') ?>
                    <div class="form-group">
                        <label>Barcode *</label>
                        <input type="hidden" name="id" value="<?= $row->item_id ?>">
                        <input type="text" name="barcode" value="<?= $row->barcode ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Category Product *</label>
                        <select name="category" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach ($category->result() as $key => $data) { ?>
                                <option value="<?= $data->category_id ?>" <?= $data->category_id == $row->category_id ? "selected" : null ?>><?= $data->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Size *</label>
                        <select name="unit" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach ($unit->result() as $key => $data) { ?>
                                <option value="<?= $data->unit_id ?>" <?= $data->unit_id == $row->unit_id ? "selected" : null ?>><?= $data->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Type *</label>
                        <select name="product_type" class="form-control" required>
                            <option value="" selected="selected">- Pilih -</option>
                            <option value="Dewasa" <?= "Dewasa" == $row->type ? "selected" : null ?>>Dewasa</option>
                            <option value="Anak" <?= "Anak" == $row->type ? "selected" : null ?>> Anak </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price *</label>
                        <input type="number" name="price" value="<?= $row->price ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Image </label>
                        <?php if ($page == 'edit') {
                            if ($row->image != null) { ?>
                                <div style="margin-bottom: 5px; text-align: center;">
                                    <img src="<?= base_url('uploads/product/' . $row->image) ?>" style="width: 45%;">
                                </div>
                        <?php
                            }
                        } ?>
                        <input type="file" name="image" class="form-control">
                        <small>biarkan kosong jika tidak ada gambar atau perubahan gambar</small>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"> Save</i></button>
                        <button type="reset" class="btn btn-secondary btn-flat">Reset</button>
                    </div>

                    <?php echo form_close() ?>
                </div>

            </div>
        </div>
    </div>

</section>