<div class="row">
	<div class="col-12">
		<form action="<?php echo base_url('master/tambah-jenjang/'.encode($jenjang->id)) ?>" id="formJenjang">
			<div class="form-group">
				<label for="">Nama Jenjang <span class="text-danger">*</span></label>
				<input type="text" name="nama" class="form-control" value="<?php echo $jenjang->nama ?>">
			</div>
		</form>
	</div>
</div>