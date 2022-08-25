<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-pills navtab-bg nav-justified">
	                <li class="nav-item">
	                    <a href="#kartu" data-toggle="tab" aria-expanded="false" class="nav-link">
	                        Tempel Kartu
	                    </a>
	                </li>
	                <li class="nav-item">
	                    <a href="#santri" data-toggle="tab" aria-expanded="true" class="nav-link active">
	                        Cari Santri
	                    </a>
	                </li>
	            </ul>

	            <div class="tab-content">
	                <div class="tab-pane" id="kartu">
						<div class="alert alert-info"><i class="fe-info mr-2"></i>Silakan tap kartu di RF Reader</div>
						<div class="w-100 h-100 border p-5 text-center font-22">Tap Kartu di RF Reader</div>
					</div>

				    <div class="tab-pane show active" id="santri">
						<form action="" method="post" id="form-deactivate">
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
								<button class="btn btn-warning" type="submit"><i class="fe-alert-triangle mr-1"></i>Blok / Nonaktifkan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>