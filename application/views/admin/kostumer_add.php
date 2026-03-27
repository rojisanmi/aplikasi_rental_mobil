<div class="page-header">
	<h3>Kostumer Baru</h3>
</div>
<form action="<?php echo base_url().'admin/kostumer_add_act' ?>" method="post">
	<div class="form-group">
		<label>Nama Kostumer</label>
		<input type="text" name="nama" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control">
			<option value="L">Laki-laki</option>
			<option value="P">Perempuan</option>
		</select>
	</div>
	<div class="form-group">
		<label>Nomor Handphone</label>
		<input type="text" name="nomor_hp" class="form-control">
	</div>
	<div class="form-group">
		<label>Nomor KTP</label>
		<input type="text" name="nomor_ktp" class="form-control" required>
	</div>
	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-primary">
	</div>
</form>