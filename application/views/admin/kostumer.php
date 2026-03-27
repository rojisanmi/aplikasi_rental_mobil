<div class="page-header">
	<h3>Data Kostumer</h3>
</div>
<a href="<?php echo base_url().'admin/kostumer_add'; ?>" class="btn btn-primary btn-sm">
	<span class="glyphicon glyphicon-plus"></span> Kostumer
</a>
<br><br>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kostumer</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Nomor Handphone</th>
				<th>Nomor KTP</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach($kostumer as $k){
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $k->kostumer_nama; ?></td>
					<td><?php echo $k->kostumer_alamat; ?></td>
					<td>
						<?php
						if($k->kostumer_jk == "L"){
							echo "Laki-laki";
						}elseif($k->kostumer_jk == "P"){
							echo "Perempuan";
						}
						?> 	
					</td>
					<td><?php echo $k->kostumer_hp; ?></td>
					<td><?php echo $k->kostumer_ktp; ?></td>
					<td>
						<a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/kostumer_edit/'.$k->kostumer_id; ?>">
							<span class="glyphicon glyphicon-plus"> Edit</span>
						</a>
						<a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/kostumer_hapus/'.$k->kostumer_id; ?>">
							<span class="glyphicon glyphicon-trash"> Hapus</span>
						</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>