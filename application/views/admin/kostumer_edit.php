<div class="page-header">
	<h3>Edit Kostumer</h3>
</div>
<?php foreach($kostumer as $k){ ?>
	<form action="<?php echo base_url().'admin/kostumer_update' ?>" method="post">
		<div class="form-group">
			<label>Nama Kostumer</label>
			<input type="hidden" name="id" value="<?php echo $k->kostumer_id; ?>">
			<input class="form-control" type="text" name="nama" value="<?php echo $k->kostumer_nama; ?>">
				<?php echo form_error('nama'); ?>
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input class="form-control" type="text" name="alamat" value="<?php echo $k->kostumer_alamat; ?>" required>
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label>
			<select name="jenis_kelamin" class="form-control">
				<option <?php if($k->kostumer_jk == "L"){echo "selected='selected'";} echo $k->kostumer_jk; ?> value="L">Laki-laki</option>
				<option <?php if($k->kostumer_jk == "P"){echo "selected='selected'";} echo $k->kostumer_jk; ?> value="P">Perempuan</option>
			</select>
				<?php echo form_error('jenis_kelamin') ?>
		</div>
		<div class="form-group">
			<label>Nomor Handphone</label>
			<input class="form-control" type="text" name="nomor_hp" value="<?php echo $k->kostumer_hp; ?>" required>
		</div>
		<div class="form-group">
			<label>Nomor KTP</label>
			<input class="form-control" type="text" name="nomor_ktp" value="<?php echo $k->kostumer_ktp; ?>" required>
		</div>
		<div class="form-group">
			<input type="submit" value="Simpan" class="btn btn-primary">
		</div>
	</form>
<?php } ?>