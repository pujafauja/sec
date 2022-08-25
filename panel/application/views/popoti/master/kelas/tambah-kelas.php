<div class="row">
	<div class="col-12">
		<form action="<?php echo base_url('master/tambah-kelas/'.encode($kelas->id)) ?>" id="formKelas">
			<div class="form-group">
				<label for="">Jenjang <span class="text-danger">*</span></label>
				<select name="jenjangid" id="" class="form-control">
					<option value="">-- Pilih Jenjang --</option>
					<?php foreach($jenjang as $j): ?>
						<option value="<?php echo $j->id ?>" <?php echo $j->id == $kelas->jenjangid ? 'selected=""' : '' ?>><?php echo $j->nama ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="form-group">
				<label for="">Nama Kelas <span class="text-danger">*</span></label>
				<input type="text" name="nama" class="form-control" value="<?php echo $kelas->nama ?>">
			</div>
		</form>
	</div>
</div>