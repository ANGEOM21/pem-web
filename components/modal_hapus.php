<div class="modal fade" id="ModalHapus<?= $no ?>" tabindex="-1" aria-labelledby="ModalHapus<?= $row['id']; ?>" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Produk</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="./backend/hapus.php" method="post">
					<input type="hidden" name="id" value="<?= $row['id'] ?>">
					<!-- form -->
					<p>Apakah anda yakin ingin menghapus Produk <?= $row['name'] ?> dengan harga  <?= $row['price'] ?> akan di hapus ?</p>
					<div class="modal-footer">
						<a href="#" class="btn btn-danger" data-bs-dismiss="modal">tidak</a>
						<button class="btn btn-primary" name="submit" id="hapus">Iya</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>