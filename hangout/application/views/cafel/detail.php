<div class="container mt-3">
	<div class="row featurette">
      <div class="col-md-5 order-md-1">
      	<h1 class="mb-3"><?= $hangout['nama'];?></h1>
      	<img src="<?= base_url(); ?>assets/gambar/place/<?=$hangout['nama_gambar'];?>" width="500px;" height="300px;">
      </div>
    </div>
</div>

<div class="container mt-4">
	<p>Sebuah Cafe yang berada di <?= $hangout['alamat'];?><br>
		dengan Fasilitas Sebagai berikut: <?= $hangout['ket_fas'];?><br>
		Membuat <?= $hangout['nama']; ?> menjadi tempat nongkrong yang anda cari</p>
	</div>
</div>
