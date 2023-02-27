<div class="container-fluid">
    <div class="row text-center">
        <?php foreach($barangs as $barang) : ?>
            <div class="card ml-4 mb-4" style="width: 18rem;">
                <img src="<?php echo base_url().'/uploads/'.$barang->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $barang->nama_barang ?></h5>
                    <small><?php echo $barang->keterangan ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($barang->harga, 0, ',','.') ?></span><br>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $barang->id_barang, '<div class="btn btn-sm btn-dark">Tambah ke Keranjang</div>') ?>
                    <a href="#" class="btn btn-sm btn-secondary">Detail</a>

                </div>
            </div>
        <?php endforeach?>
    </div>
</div>