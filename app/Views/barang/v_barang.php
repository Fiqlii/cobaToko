<?= $this->extend('v_template') ?>

<?= $this->section('content') ?>
    <form class="mb-3" action="<?= base_url('/barang/search') ?>" method="post">
        <div class="input-group">
            <input type="text" name="nama" placeholder="Masukkan Nama Barang" class="form-control" />
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
    </form>
    <h2>Daftar Barang</h2>
    <div class="row">
        <?php foreach ($barang as $item) : ?>
            <div class="col-md-3">
                <div class="card mb-3">
                    <img clas="bd-placeholder-img card-img-top" width="100%" height="255" src="<?=base_url($item->fileBarang);?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item->namaBarang ?></h5>
                        <p class="card-text">Harga: <?= $item->hargaBarang ?></p>
                        <p class="card-text">Stok: <?= $item->stokBarang ?></p>
                        <a href="/barang/detail/<?= $item->kodeBarang ?>" class="btn btn-outline-info">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?= $this->endSection() ?>
