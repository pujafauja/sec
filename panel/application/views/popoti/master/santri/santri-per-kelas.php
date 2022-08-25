<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="card-widgets">
                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                </div>

				<h4 class="card-title">Pencarian</h4>

				<div id="cardCollpase1">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Status</label>
								<select name="" id="" class="status form-control">
									<option value="">Semua Status</option>
									<option value="0">Nonaktif</option>
									<option value="1">Aktif</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Kelas</label>
								<select name="" id="" class="kelas form-control">
									<option value="">Semua Kelas</option>
									<?php foreach($kelas->result() as $k): ?>
									<option value="<?php echo $k->id ?>"><?php echo $k->namakelas ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 text-right">
							<button class="filter btn btn-primary"><i class="fas fa-search mr-1"></i>Terapkan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="card-widgets d-none">
					<div class="btn-group">
						<a href="<?php echo base_url('master/pindah-kelas') ?>" class="btn btn-primary pindah-kelas"><i class="fas fa-external-link-alt mr-1"></i>Pindah Kelas</a>
						<a href="<?php echo base_url('master/activate') ?>" class="btn btn-success activate"><i class="fas fa-user-check mr-1"></i>Aktifkan</a>
						<a href="<?php echo base_url('master/deactivate') ?>" class="btn btn-danger deactivate"><i class="fas fa-user-alt-slash mr-1"></i>Nonaktifkan</a>
					</div>
				</div>
				<h4 class="card-title mb-2">Data Santri</h4>
				<div class="table-responsive">
				    <table class="table table-centered table-hover mb-0" id="data-kelas-santri">
				        <thead>
				            <tr>
				            	<th class="border-top-0 no-sort">
				            		<div class="custom-control custom-checkbox">
	                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
	                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
	                                </div>
				            	</th>
				                <th class="border-top-0">Nama Santri</th>
				                <th class="border-top-0">Kelas</th>
				                <th class="border-top-0">Status</th>
				                <th class="border-top-0 no-sort">Action</th>
				            </tr>
				        </thead>
				    </table>
				</div> <!-- end table-responsive -->
			</div>
		</div>
	</div>
</div>