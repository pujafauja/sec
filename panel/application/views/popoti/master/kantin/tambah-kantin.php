<div class="row">
	<div class="col-12">
		<form action="<?php echo base_url('master/tambah-kantin/'.encode($kantin->id)) ?>" id="formKantin">

			<div class="form-group">
				<label for="">Nama Warung/Kantin <span class="text-danger">*</span></label>
				<input type="text" name="nama" class="form-control" value="<?php echo $kantin->nama ?>">
			</div>
		</form>
	</div>
</div>