<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Periode</h5>

				<div class="form-group">
					<div class="input-group">
						<input type="text" name="startdate" class="form-control">
						<span class="input-group-text">-</span>
						<input type="text" name="enddate" class="form-control">
						<div class="input-group-append">
							<button class="btn btn-primary filter"><i class="fas fa-search mr-1"></i>Filter</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-body">
				<div id="search-results">
					<div class="alert alert-info">Silakan pilih periode terlebih dahulu</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-4">
		<div class="card">
			<div class="card-body">
				<h4>Total Pembayaran:</h4>
				<h4 class="totalbayar"></h4>
				<button class="btn btn-primary btn-block btn-lg mt-3 bayar-hutang" disabled><i class="fas fa-dollar-sign mr-1"></i>Bayar</button>
			</div>
		</div>
	</div>
</div>