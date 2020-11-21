<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/finder.css">
<div class="container">
<div class="left">
	<div class="centered">
	</div>
</div>

<div class="right">
	<h1 align="center">Sistem Pendukung Keputusan</h1>
	<div class="centered col-md-6">

    <form action="<?= base_url(); ?>finder/hasil/" method="post">
		<!-- Input Harga -->
	<div class="form-group">
    	<label for="Harga">Harga</label>
    	<select class="form-control" id="Bharga" name="Bharga">
    	<option value=""></option>
      	<option value="1">Tidak Penting</option>
      	<option value="2">Cukup Penting</option>
      	<option value="3">Penting</option>
      	<option value="4">Sangat Penting</option>
      	<option value="5">Penting Sekali</option>
    </select>
  </div>

  		<!-- Input Fasilitas -->
	<div class="form-group">
    	<label for="Harga">Fasilitas</label>
    	<select class="form-control" id="Bfasilitas" name="Bfasilitas">
    	<option value=""></option>
      	<option value="1">Tidak Penting</option>
      	<option value="2">Cukup Penting</option>
      	<option value="3">Penting</option>
      	<option value="4">Sangat Penting</option>
      	<option value="5">Penting Sekali</option>
    </select>
  </div>

		<!-- Input Daya Tampung -->
	<div class="form-group">
    	<label for="Harga">Daya Tampung</label>
    	<select class="form-control" id="Bdayatampung" name="Bdayatampung">
    	<option value=""></option>
      	<option value="1">Tidak Penting</option>
      	<option value="2">Cukup Penting</option>
      	<option value="3">Penting</option>
      	<option value="4">Sangat Penting</option>
      	<option value="5">Penting Sekali</option>
    </select>
  </div>


		<!-- Input Jarak -->
	<div class="form-group">
    	<label for="Harga">Jarak</label>
    	<select class="form-control" id="Bjarak" name="Bjarak">
    	<option value=""></option>
      	<option value="1">Tidak Penting</option>
      	<option value="2">Cukup Penting</option>
      	<option value="3">Penting</option>
      	<option value="4">Sangat Penting</option>
      	<option value="5">Penting Sekali</option>
    </select>
  </div>


		<!-- Input Spot -->
	<div class="form-group">
    	<label for="Harga">Spot Photo</label>
    	<select class="form-control" id="Bspot" name="Bspot">
    	<option value=""></option>
      	<option value="1">Tidak Penting</option>
      	<option value="2">Cukup Penting</option>
      	<option value="3">Penting</option>
      	<option value="4">Sangat Penting</option>
      	<option value="5">Penting Sekali</option>
    </select>
  </div>

  <button type="submit" name="hitung" class="btn btn-primary float-right mt-3"> Mulai Perhitungan</button></a>

</form>
</div>
</div>