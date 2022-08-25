<div class="row">
	<div class="col-12">
		<form action="<?php echo base_url('master/pindah-kelas') ?>" method="post" id="pindah-kelas">
			<div class="form-group">
				<label for="">Pindah ke Kelas <span class="text-danger">*</span></label>
				<select name="kelas-baru" id="" class="form-control">
					<?php foreach($kelas->result() as $k): ?>
						<option value="<?php echo $k->id ?>"><?php echo $k->namakelas ?></option>
					<?php endforeach; ?>
				</select>
				<input type="hidden" value="<?php echo htmlspecialchars($santri) ?>" name="santri">
			</div>
		</form>
	</div>
</div>