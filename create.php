<?php
include('./partials/header.php');

$bannerTitle = "Tambah produk";
include('./components/banner.php');


?>
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-6 col-lg-6">
            <div class="card-body">
                <a class="btn btn-primary btn-sm mb-3" href="show.php" title="tambah">Lihat data produk</a>
                <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="inputnamaproduk" class="form-label">Masukan nama Produk:</label>
                        <input type="text" name="name" class="form-control" id="inputnamaproduk" aria-describedby="emailHelp" placeholder="Ex: Sabun Cuci" required>
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Masukan Harga Produk</label>
                        <input type="number" name="price" placeholder="Ex: 10000" class="form-control" id="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Masukan Gambar: jpg, png, jpeg. webp</label>
                        <input type="file" name="image" name="image" placeholder="jpg, png, jpeg. webp" class="form-control" id="" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <a class="btn btn-primary btn-sm" href="./index.php">back to home</a>
</div>
<?php include('./partials/footer.php'); ?>