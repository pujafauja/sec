<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Data Pribadi Santri</h5>
				<form action="<?php echo base_url('master/tambah-santri/'.encode($santri->id)) ?>" id="pribadi">
					<div class="form-group">
						<label for="">Photo <span class="text-danger">*</span></label>
						<input type="file" data-plugins="dropify" data-height="200" name="photo" <?php echo ($santri->photo) ? 'data-default-file="'.base_url('media/students/'.$santri->photo).'"' : '' ?> />
					</div>
					<div class="form-group">
						<label for="">No. Identitas <span class="text-danger">*</span></label>
						<input type="text" name="id" class="form-control" value="<?php echo $santri->noID ?>" />
					</div>
					<div class="form-group">
						<label for="">Nama <span class="text-danger">*</span></label>
						<input type="text" name="nama" class="form-control" value="<?php echo $santri->nama ?>" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary save-santri"><i class="fe-save mr-1"></i>Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>