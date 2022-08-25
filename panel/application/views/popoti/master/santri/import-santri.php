<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Import Data Santri</h5>

				<form action="<?php echo base_url('master/import-santri') ?>" class="dropzone" id="my-dropzone">
					<div class="form-group">
						<input type="file" name="import-file" />
					</div>
				</form>

				<div class="progress mt-2 d-none">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Download contoh template</h5>

				<div class="row mx-n1 no-gutters">
	                <div class="col-12">
	                    <div class="card m-1 shadow-none border">
	                        <div class="p-2">
	                            <div class="row align-items-center">
	                                <div class="col-auto">
	                                    <div class="avatar-sm">
	                                        <span class="avatar-title bg-light text-secondary rounded">
	                                            <i class="mdi mdi-file-excel font-18"></i>
	                                        </span>
	                                    </div>
	                                </div>
	                                <div class="col pl-0">
	                                    <a href="<?php echo base_url('media/templates/santri/template-santri.xls') ?>" class="text-muted font-weight-bold">template-santri.xls</a>
	                                    <p class="mb-0 font-13">28 KB</p>
	                                </div>
	                            </div> <!-- end row -->
	                        </div> <!-- end .p-2-->
	                    </div> <!-- end col -->
	                </div> <!-- end col-->
	            </div>
			</div>
		</div>
	</div>
</div>
