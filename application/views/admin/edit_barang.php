<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
    <?php foreach($barangs as $barang) : ?>
        <form action="<?php echo base_url() . 'admin/data_barang/update' ?>" method="post">
        <div class="for-group">
            <input type="hidden" name="id_barang" class="form-control" value="<?php echo $barang->id_barang ?>">
        </div>
            <div class="for-group">
                <label for="">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" value="<?php echo $barang->nama_barang ?>">
            </div>
            <div class="for-group">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $barang->keterangan ?>">
            </div>
            <div class="for-group">
                <label for="">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $barang->kategori ?>">
            </div>
            <div class="for-group">
                <label for="">Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $barang->harga ?>">
            </div>
            <div class="for-group">
                <label for="">Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $barang->stok ?>">
            </div>
            <button type="submit" class="btn btn-dark btn-sm mt-3">Save</button>
        </form>
    <?php endforeach; ?>
</div>