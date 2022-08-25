<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                        <i class="fe-chevrons-down font-22 avatar-title text-primary"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="mt-1">Rp<span data-plugin="counterup"><?php echo rupiah($penarikan) ?></span></h3>
                        <p class="text-muted mb-1 text-truncate">Total Penarikan Hari Ini</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                        <i class="fe-users font-22 avatar-title text-success"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo rupiah($jmlSantri) ?></span></h3>
                        <p class="text-muted mb-1 text-truncate">Jumlah Santri</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                        <i class="fe-dollar-sign font-22 avatar-title text-info"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="mt-1">Rp<span data-plugin="counterup"><?php echo rupiah($hutang) ?></span></h3>
                        <p class="text-muted mb-1 text-truncate">Total Hutang ke Warung</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card-box">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                        <i class="fe-eye font-22 avatar-title text-warning"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="mt-1">Rp<span data-plugin="counterup"><?php echo rupiah($isisaldo) ?></span></h3>
                        <p class="text-muted mb-1 text-truncate">Jumlah Isi Saldo Kartu Hari Ini</p>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
</div>
<!-- end row-->

<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h4 class="header-title mb-3">Transaksi terakhir</h4>

            <div class="table-responsive">
                <table class="table table-centered table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="border-top-0">Nama Santri</th>
                            <th class="border-top-0">No. Kartu</th>
                            <th class="border-top-0">Waktu</th>
                            <th class="border-top-0">Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if($mutasi->num_rows() > 0):
                            foreach($mutasi->result() as $m): 
                                if($m->photo):
                                    $photo = base_url('media/students/'.$m->photo);
                                else:
                                    $photo = base_url('assets/images/users/user-2.png');
                                endif;
                                ?>
                        <tr>
                            <td>
                                <img src="<?php echo $photo ?>" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                <span class="ml-2"><?php echo $m->nama ?></span>
                            </td>
                            <td>
                                <span class=""><?php echo $m->rfid ?></span>
                            </td>
                            <td><?php echo fulldate($m->waktu) ?></td>
                            <td>Rp <?php echo rupiah($m->nominal) ?></td>
                        </tr>
                            <?php endforeach; 
                        endif; ?>
                    
                    </tbody>
                </table>
            </div> <!-- end table-responsive -->

        </div> <!-- end card-box-->
    </div> <!-- end col-->
</div>
<!-- end row-->