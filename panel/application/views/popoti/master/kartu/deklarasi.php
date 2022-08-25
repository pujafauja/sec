<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Tap Kartu</h4>
				<div class="alert alert-info"><i class="fe-info mr-2"></i>Silakan tap kartu di RF Reader</div>
				<div class="w-100 h-100 border p-5 text-center font-22">Tap Kartu di RF Reader</div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Kartu</h4>
				<form action="" method="post" id="form-declare">
					<div class="form-group">
						<label for="">Nama Santri</label>
						<div class="input-group">
							<input type="text" disabled name="santri" class="form-control">
							<input type="hidden" name="studentid">
							<div class="input-group-button">
								<button class="btn btn-primary cari-siswa">...</button>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="">No. Kartu</label>
						<input type="text" name="noKartu" class="form-control" value="" readonly>
					</div>

					<div class="form-group">
						<label for="">PIN <em><small>Optional</small></em></label>
						<input type="text" name="pin" class="form-control">
					</div>

					<div class="form-group">
						<button class="btn btn-primary" type="submit"><i class="fe-save mr-1"></i>Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>