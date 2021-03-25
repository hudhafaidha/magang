<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Produk</h2>
            <div class="card mb-3" style="max-width:540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../img/<?= $scarlett['sampul']; ?>" alt="">
                    </div>
                    <div class="col-mg-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $scarlett['nama']; ?> </h5>
                            <p class="card-text"><b>Manfaat :</b><?= $scarlett['manfaat']; ?></p>
                            <p class="card-text"><b>Gambar :</b><?= $scarlett['sampul']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Harga :</b><?= $scarlett['harga']; ?></small></p>

                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <br><br>
                            <a href="../scarlett">Kembali ke daftar produk</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>