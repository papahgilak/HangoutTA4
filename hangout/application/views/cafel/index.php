<div class="container">
	<h3 class="mt-3">Cafe List</h3>

 	<div class="row">
		<div class="col-md">
			<table class="table">
				<thead>
					<tr>
					<th>Name</th>
					<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($hangout as $hangout): ?>
						<tr>
						<td align="center"><a href="<?= base_url(); ?>cafel/detail/<?= $hangout['id'];?>"> <?= $hangout['nama']; ?></a><br>
						<?="<img src='assets/gambar/place/".$hangout['nama_gambar']."'style='width:300px; height:200px;'>"?></td>
						<td style="vertical-align: middle;"><?= $hangout['alamat']; ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<!-- <?= $this->pagination->create_links();?> -->
				
	</div>
</div>