<?= $this->extend('v_template') ?>

<?= $this->section('content') ?>

    <div class="card shadow-sm">
        <?php foreach ($barang as $barang) : ?>
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"/>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
        </svg>
        <div class="card-body">
            <h5 class="card-title"><?= $barang->namaBarang ?></h5>
            <p class="card-text">Harga: <?= $barang->hargaBarang ?></p>
            <p class="card-text">Stok: <?= $barang->stokBarang ?></p>
            <a href="/barang/edit/<?= $barang->kodeBarang ?>" class="btn btn-outline-primary">Edit</a>
            <a href="/barang/delete/<?= $barang->kodeBarang ?>" class="btn btn-outline-danger">Hapus</a>
            <a href="/barang" class="btn btn-outline-info">Kembali</a>
        </div>
        <?php endforeach; ?>
    </div>
<?= $this->endSection() ?>

