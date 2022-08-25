<div class="row">
	<div class="col-md-6">
		<div class="card-box">
			<ul class="nav nav-pills navtab-bg nav-justified">
                <li class="nav-item">
                    <a href="#kartu" data-toggle="tab" aria-expanded="false" class="nav-link active">
                        Tempel Kartu
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#santri" data-toggle="tab" aria-expanded="true" class="nav-link">
                        Cari Manual
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane show active" id="kartu">
                    <div class="w-100 h-100 border p-5 font-22 text-center">Tap kartu di RFID Reader</div>
                </div>
                <div class="tab-pane" id="santri">
                	<div class="form-group">
                		<div class="input-group">
                			<input type="text" name="" class="form-control nama-siswa" disabled>
                			<div class="input-group-append">
                				<button class="btn btn-primary cari-siswa"><i class="fe-more-horizontal-"></i></button>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
			
			<!-- <div class="w-100 h-100 border p-5 font-22 text-center border-primary text-primary">Kartu Berhasil dibaca</div> -->
		</div>
	</div>

	<div class="col-md-6">
		<div class="card-box">
			<h4 class="card-title">Data Santri & Topup</h4>
			<div class="alert alert-danger">
				<i class="fe-alert-circle"></i> Silahkan tap kartu atau pilih santri terlebih dahulu
			</div>
			<div id="search-result"></div>
		</div>
	</div>
</div>