<?php include('./partials/header.php');

$bannerTitle = "Data produk";
include('./components/banner.php');


?>
<div class="container">
    <a class="btn btn-primary btn-sm my-2" href="create.php">tambah produk</a>
    <div class="table-responsive">
        <table border="1" class="table table-bordered table-striped table-sm table-hover  align-middle">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nama produk</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Gambar produk</th>
                    <th class="text-center">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require './config/db.php';

                $products = mysqli_query($db_connect, "SELECT * FROM products");
                $no = 1;

                while ($row = mysqli_fetch_assoc($products)) {
                ?>
                    <tr class="striped-columns">
                        <th scope="row" class="text-center"><?= $no++; ?></th>
                        <td class="text-center"><?= $row['name']; ?></td>
                        <td class="text-center">Rp. <?= $row['price']; ?></td>
                        <td class="text-center"><img src="<?= $row['image']; ?>" width="50"></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success" href="<?= $row['image']; ?>" target="_blank" download>unduh</a>

                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEdit<?= $no;?>">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus<?= $no ?>">hapus</button>
                        </td>
                    </tr>
                <?php
                    include('./components/modal_hapus.php');
                    include('./components/modal_edit.php');
                } ?>
            </tbody>
        </table>
    </div>
    <a class="btn btn-primary btn-sm" href="./index.php">back to home</a>
</div>
<?php include('./partials/footer.php'); ?>