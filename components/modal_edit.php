<div class="modal fade" id="ModalEdit<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="./backend/edit.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $row['id'] ?>">
				<input type="hidden" name="image_old" value="<?= $row["image"] ?>">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-2">
						<label for="inputnamaproduk" class="form-label">Masukan nama Produk:</label>
						<input type="text" name="name" class="form-control" id="inputnamaproduk" placeholder="Ex: Sabun Cuci" value="<?= $row['name']; ?>">
						<div id="emailHelp" class="form-text"></div>
					</div>
					<div class="mb-2">
						<label for="harga" class="form-label">Masukan Harga Produk</label>
						<input type="number" name="price" placeholder="Ex: 10000" class="form-control" id="harga" value="<?= $row['price']; ?>" required>
					</div>
					<div class="mb-2">
						<img class="border border-success" src=".<?= $row['image']; ?>" alt="" width="50"><br><?= $row['image']; ?>
						<hr>
						<label for="image" class="form-label">Masukan Gambar: jpg, png, jpeg. webp</label>
						<input type="file" name="image" name="image" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>
