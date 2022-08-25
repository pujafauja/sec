<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-12 text-right">
						<a href="<?php echo base_url('master/tambah-kantin') ?>" class="btn btn-danger new-kantin" <?php echo $kantin > 0 ? 'disabled=""' : '' ?>><i class="fe-plus-circle mr-1"></i>Tambah Baru</a>
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
				<h4 class="card-title">Data Warung/Kantin</h4>
				<div class="table-responsive">
				    <table class="table table-centered table-hover mb-0" id="data-kantin">
				        <thead>
				            <tr>
				                <th class="border-top-0">No</th>
				                <th class="border-top-0">Nama Warung/Kantin</th>
				                <th class="border-top-0 no-sort">Action</th>
				            </tr>
				        </thead>
				    </table>
				</div> <!-- end table-responsive -->
			</div>
		</div>
	</div>
</div>