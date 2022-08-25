		
        <div class="row">
            <div class="col-12">
                <div class="card-box">

                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="sitemap">
                                <li><a href="javascript: void(0);" class="text-uppercase font-weight-bold"><i class="mdi mdi-adjust mr-1"></i>Site Map</a>
                                    <ul>
                                    	<?php echo nestedList($menu); ?>
                                    </ul>
                                </li>
                            </ul>
                        </div> <!-- end col-->

                        <div class="col-lg-6">
                        	<div class="card-box">
                        		<h5 class="card-title">Tambah Menu</h5>
	                            <form action="<?php echo site_url('menu/saving') ?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="form-menu">
						            <div class="card-body card-block">
						                <div class="row form-group">
						                    <div class="col col-md-3"><label class=" form-control-label">Nama Menu</label></div>
						                    <div class="col-12 col-md-9"><input type="text" name="nama" value="" placeholder="Nama Menu" class="form-control"></div>
						                </div>
						                <div class="row form-group">
						                    <div class="col col-md-3"><label class=" form-control-label">Class Name</label></div>
						                    <div class="col-12 col-md-9">
						                        <input type="text" name="class" value="" placeholder="Class Name" class="form-control">
						                        <small class="form-text text-muted">Nama controller yang dituju</small>
						                    </div>
						                </div>
						                <div class="row form-group">
						                    <div class="col col-md-3"><label class=" form-control-label">Parent</label></div>
						                    <div class="col-12 col-md-9">
						                        <select name="parentid" class="form-control">
						                            <option value="0">Root</option>
						                            <?php echo nestedSelect($menu, FALSE, '') ?>
						                        </select>
						                    </div>
						                </div>
						                <div class="row form-group">
						                    <div class="col col-md-3"><label class=" form-control-label">Icon</label></div>
						                    <div class="col-12 col-md-9">
						                        <a class="select-icon btn btn-primary waves-effect waves-light text-light" data-toggle="modal" data-target="#all-icons"><i class="fa fa-search"></i> Find Icon</a>
						                        <a class="remove-icon btn btn-danger waves-effect waves-light text-light"><i class="fa fa-times-circle"></i> Clear Icon</a>
						                        <input type="hidden" name="icon" value="" placeholder="Icon" class="form-control">
						                    </div>
						                </div>
						                <div class="row form-group">
						                    <div class="col col-md-3"><label class=" form-control-label">Urutan</label></div>
						                    <div class="col-12 col-md-9"><input type="text" name="urutan" value="" placeholder="Urutan" class="form-control"></div>
						                </div>
						            </div>
						            <div class="card-footer">
						                <button type="submit" class="btn btn-primary btn-sm">
						                    <i class="fa fa-dot-circle-o"></i> Submit
						                </button>
						                <button type="reset" class="btn btn-danger btn-sm">
						                    <i class="fa fa-ban"></i> Reset
						                </button>
						            </div>
						        </form>
						    </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row-->

                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->

</div> <!-- content -->

<div id="all-icons" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-full-width modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="">Pilih icon</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs nav-bordered nav-justified">
                    <li class="nav-item">
                        <a href="#feather" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            Feather icons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#dripicons" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Dripicons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#font-awesome" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Font Awesome 5
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#themify" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Themify icons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#simple-line" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Simple line icons
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="feather" class="tab-pane active">
                        <div class="row icons-list-demo">
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-alert-octagon"></i> fe-alert-octagon
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-alert-circle"></i> fe-alert-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-activity"></i> fe-activity
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-alert-triangle"></i> fe-alert-triangle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-align-center"></i> fe-align-center
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-airplay"></i> fe-airplay
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-align-justify"></i> fe-align-justify
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-align-left"></i> fe-align-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-align-right"></i> fe-align-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-down-left"></i> fe-arrow-down-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-down-right"></i> fe-arrow-down-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-anchor"></i> fe-anchor
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-aperture"></i> fe-aperture
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-left"></i> fe-arrow-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-right"></i> fe-arrow-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-down"></i> fe-arrow-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-up-left"></i> fe-arrow-up-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-up-right"></i> fe-arrow-up-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-up"></i> fe-arrow-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-award"></i> fe-award
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bar-chart"></i> fe-bar-chart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-at-sign"></i> fe-at-sign
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bar-chart-2"></i> fe-bar-chart-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-battery-charging"></i> fe-battery-charging
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bell-off"></i> fe-bell-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-battery"></i> fe-battery
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bluetooth"></i> fe-bluetooth
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bell"></i> fe-bell
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-book"></i> fe-book
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-briefcase"></i> fe-briefcase
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-camera-off"></i> fe-camera-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-calendar"></i> fe-calendar
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bookmark"></i> fe-bookmark
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-box"></i> fe-box
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-camera"></i> fe-camera
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-check-circle"></i> fe-check-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-check"></i> fe-check
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-check-square"></i> fe-check-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-cast"></i> fe-cast
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chevron-down"></i> fe-chevron-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chevron-left"></i> fe-chevron-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chevron-right"></i> fe-chevron-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chevron-up"></i> fe-chevron-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chevrons-down"></i> fe-chevrons-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chevrons-right"></i> fe-chevrons-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chevrons-up"></i> fe-chevrons-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chevrons-left"></i> fe-chevrons-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-circle"></i> fe-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-clipboard"></i> fe-clipboard
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-chrome"></i> fe-chrome
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-clock"></i> fe-clock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-cloud-lightning"></i> fe-cloud-lightning
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-cloud-drizzle"></i> fe-cloud-drizzle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-cloud-rain"></i> fe-cloud-rain
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-cloud-off"></i> fe-cloud-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-codepen"></i> fe-codepen
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-cloud-snow"></i> fe-cloud-snow
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-compass"></i> fe-compass
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-copy"></i> fe-copy
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-corner-down-right"></i> fe-corner-down-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-corner-down-left"></i> fe-corner-down-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-corner-left-down"></i> fe-corner-left-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-corner-left-up"></i> fe-corner-left-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-corner-up-left"></i> fe-corner-up-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-corner-up-right"></i> fe-corner-up-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-corner-right-down"></i> fe-corner-right-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-corner-right-up"></i> fe-corner-right-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-cpu"></i> fe-cpu
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-credit-card"></i> fe-credit-card
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-crosshair"></i> fe-crosshair
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-disc"></i> fe-disc
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-delete"></i> fe-delete
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-download-cloud"></i> fe-download-cloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-download"></i> fe-download
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-droplet"></i> fe-droplet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-edit-2"></i> fe-edit-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-edit"></i> fe-edit
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-edit-1"></i> fe-edit-1
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-external-link"></i> fe-external-link
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-eye"></i> fe-eye
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-feather"></i> fe-feather
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-facebook"></i> fe-facebook
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-file-minus"></i> fe-file-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-eye-off"></i> fe-eye-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-fast-forward"></i> fe-fast-forward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-file-text"></i> fe-file-text
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-film"></i> fe-film
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-file"></i> fe-file
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-file-plus"></i> fe-file-plus 
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-folder"></i> fe-folder
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-filter"></i> fe-filter
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-flag"></i> fe-flag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-globe"></i> fe-globe
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-grid"></i> fe-grid
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-heart"></i> fe-heart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-home"></i> fe-home
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-github"></i> fe-github
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-image"></i> fe-image
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-inbox"></i> fe-inbox
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-layers"></i> fe-layers
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-info"></i> fe-info
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-instagram"></i> fe-instagram
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-layout"></i> fe-layout
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-link-2"></i> fe-link-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-life-buoy"></i> fe-life-buoy
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-link"></i> fe-link
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-log-in"></i> fe-log-in
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-list"></i> fe-list
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-lock"></i> fe-lock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-log-out"></i> fe-log-out
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-loader"></i> fe-loader
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-mail"></i> fe-mail
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-maximize-2"></i> fe-maximize-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-map"></i> fe-map
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-maximize"></i> fe-maximize
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-map-pin"></i> fe-map-pin
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-menu"></i> fe-menu
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-message-circle"></i> fe-message-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-message-square"></i> fe-message-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-minimize-2"></i> fe-minimize-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-minimize"></i> fe-minimize
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-mic-off"></i> fe-mic-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-minus-circle"></i> fe-minus-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-mic"></i> fe-mic
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-minus-square"></i> fe-minus-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-minus"></i> fe-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-moon"></i> fe-moon
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-monitor"></i> fe-monitor
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-more-vertical"></i> fe-more-vertical
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-more-horizontal"></i> fe-more-horizontal
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-move"></i> fe-move
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-music"></i> fe-music
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-navigation-2"></i> fe-navigation-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-navigation"></i> fe-navigation
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-octagon"></i> fe-octagon
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-package"></i> fe-package
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-pause-circle"></i> fe-pause-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-pause"></i> fe-pause
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-percent"></i> fe-percent
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-phone-call"></i> fe-phone-call
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-phone-forwarded"></i> fe-phone-forwarded
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-phone-missed"></i> fe-phone-miss
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-phone-off"></i> fe-phone-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-phone-incoming"></i> fe-phone-incoming
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-phone"></i> fe-phone
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-phone-outgoing"></i> fe-phone-outgoing
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-pie-chart"></i> fe-pie-chart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-play-circle"></i> fe-play-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-play"></i> fe-play
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-plus-square"></i> fe-plus-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-plus-circle"></i> fe-plus-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-plus"></i> fe-plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-pocket"></i> fe-pocket
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-printer"></i> fe-printer
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-power"></i> fe-power
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-radio"></i> fe-radio
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-repeat"></i> fe-repeat
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-refresh-ccw"></i> fe-refresh-ccw
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-rewind"></i> fe-rewind
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-rotate-ccw"></i> fe-rotate-ccw
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-refresh-cw"></i> fe-refresh-cw
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-rotate-cw"></i> fe-rotate-cw
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-save"></i> fe-save
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-search"></i> fe-search
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-server"></i> fe-server
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-scissors"></i> fe-scissors
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-share-2"></i> fe-share-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-share"></i> fe-share
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-shield"></i> fe-shield
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-settings"></i> fe-settings
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-skip-back"></i> fe-skip-back
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-shuffle"></i> fe-shuffle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-sidebar"></i> fe-sidebar
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-skip-forward"></i> fe-skip-forward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-slack"></i> fe-slack
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-slash"></i> fe-slash
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-smartphone"></i> fe-smartphone
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-square"></i> fe-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-speaker"></i> fe-speaker
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-star"></i> fe-star
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-stop-circle"></i> fe-stop-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-sun"></i> fe-sun
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-sunrise"></i> fe-sunrise
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-tablet"></i> fe-tablet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-tag"></i> fe-tag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-sunset"></i> fe-sunset
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-target"></i> fe-target
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-thermometer"></i> fe-thermometer
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-thumbs-up"></i> fe-thumbs-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-thumbs-down"></i> fe-thumbs-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-toggle-left"></i> fe-toggle-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-toggle-right"></i> fe-toggle-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-trash-2"></i> fe-trash-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-trash"></i> fe-trash
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-trending-up"></i> fe-trending-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-trending-down"></i> fe-trending-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-triangle"></i> fe-triangle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-type"></i> fe-type
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-twitter"></i> fe-twitter
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-upload"></i> fe-upload
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-umbrella"></i> fe-umbrella
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-upload-cloud"></i> fe-upload-cloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-unlock"></i> fe-unlock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-user-check"></i> fe-user-check
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-user-minus"></i> fe-user-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-user-plus"></i> fe-user-plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-user-x"></i> fe-user-x
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-user"></i> fe-user
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-users"></i> fe-users
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-video-off"></i> fe-video-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-video"></i> fe-video
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-voicemail"></i> fe-voicemail
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-volume-x"></i> fe-volume-x
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-volume-1"></i> fe-volume-1
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-volume-2"></i> fe-volume-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-volume"></i> fe-volume
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-watch"></i> fe-watch
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-wifi"></i> fe-wifi
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-x-square"></i> fe-x-square
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-wind"></i> fe-wind
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-x"></i> fe-x
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-x-circle"></i> fe-x-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-zap"></i> fe-zap
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-zoom-in"></i> fe-zoom-in
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-zoom-out"></i> fe-zoom-out
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-command"></i> fe-command
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-cloud"></i> fe-cloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-hash"></i> fe-hash
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-headphones"></i> fe-headphones
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-underline"></i> fe-underline
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-italic"></i> fe-italic
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bold"></i> fe-bold
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-crop"></i> fe-crop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-help-circle"></i> fe-help-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-paperclip"></i> fe-paperclip
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-shopping-cart"></i> fe-shopping-cart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-tv"></i> fe-tv
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-wifi-off"></i> fe-wifi-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-gitlab"></i> fe-gitlab
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-sliders"></i> fe-sliders
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-star-on"></i> fe-star-on
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-heart-on"></i> fe-heart-on
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-archive"></i> fe-archive
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-down-circle"></i> fe-arrow-down-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-up-circle"></i> fe-arrow-up-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-left-circle"></i> fe-arrow-left-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-arrow-right-circle"></i> fe-arrow-right-circle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bar-chart-line-"></i> fe-bar-chart-line-
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-bar-chart-line"></i> fe-bar-chart-line
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-book-open"></i> fe-book-open
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-code"></i> fe-code
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-database"></i> fe-database
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-dollar-sign"></i> fe-dollar-sign
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-folder-plus"></i> fe-folder-plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-gift"></i> fe-gift
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-folder-minus"></i> fe-folder-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-git-commit"></i> fe-git-commit
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-git-branch"></i> fe-git-branch
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-git-pull-request"></i> fe-git-pull-request
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-git-merge"></i> fe-git-merge
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-linkedin"></i> fe-linkedin
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-hard-drive"></i> fe-hard-drive
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-more-vertical-"></i> fe-more-vertical-
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-more-horizontal-"></i> fe-more-horizontal-
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-rss"></i> fe-rss
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-send"></i> fe-send
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-shield-off"></i> fe-shield-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-shopping-bag"></i> fe-shopping-bag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-terminal"></i> fe-terminal
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-truck"></i> fe-truck
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-zap-off"></i> fe-zap-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="fe-youtube"></i> fe-youtube
                            </div>
                            
                        </div>
                    </div>
                    <div id="dripicons" class="tab-pane">
                        <div class="row icons-list-demo">
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-alarm"></i> dripicons-alarm
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-align-center"></i> dripicons-align-center
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-align-justify"></i> dripicons-align-justify
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-align-left"></i> dripicons-align-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-align-right"></i> dripicons-align-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-anchor"></i> dripicons-anchor
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-archive"></i> dripicons-archive
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-arrow-down"></i> dripicons-arrow-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-arrow-left"></i> dripicons-arrow-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-arrow-right"></i> dripicons-arrow-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-arrow-thin-down"></i> dripicons-arrow-thin-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-arrow-thin-left"></i> dripicons-arrow-thin-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-arrow-thin-right"></i> dripicons-arrow-thin-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-arrow-thin-up"></i> dripicons-arrow-thin-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-arrow-up"></i> dripicons-arrow-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-article"></i> dripicons-article
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-backspace"></i> dripicons-backspace
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-basket"></i> dripicons-basket
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-basketball"></i> dripicons-basketball
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-battery-empty"></i> dripicons-battery-empty
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-battery-full"></i> dripicons-battery-full
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-battery-low"></i> dripicons-battery-low
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-battery-medium"></i> dripicons-battery-medium
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-bell"></i> dripicons-bell
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-blog"></i> dripicons-blog
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-bluetooth"></i> dripicons-bluetooth
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-bold"></i> dripicons-bold
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-bookmark"></i> dripicons-bookmark
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-bookmarks"></i> dripicons-bookmarks
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-box"></i> dripicons-box
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-briefcase"></i> dripicons-briefcase
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-brightness-low"></i> dripicons-brightness-low
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-brightness-max"></i> dripicons-brightness-max
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-brightness-medium"></i> dripicons-brightness-medium
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-broadcast"></i> dripicons-broadcast
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-browser"></i> dripicons-browser
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-browser-upload"></i> dripicons-browser-upload
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-brush"></i> dripicons-brush
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-calendar"></i> dripicons-calendar
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-camcorder"></i> dripicons-camcorder
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-camera"></i> dripicons-camera
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-card"></i> dripicons-card
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-cart"></i> dripicons-cart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-checklist"></i> dripicons-checklist
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-checkmark"></i> dripicons-checkmark
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-chevron-down"></i> dripicons-chevron-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-chevron-left"></i> dripicons-chevron-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-chevron-right"></i> dripicons-chevron-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-chevron-up"></i> dripicons-chevron-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-clipboard"></i> dripicons-clipboard
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-clock"></i> dripicons-clock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-clockwise"></i> dripicons-clockwise
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-cloud"></i> dripicons-cloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-cloud-download"></i> dripicons-cloud-download
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-cloud-upload"></i> dripicons-cloud-upload
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-code"></i> dripicons-code
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-contract"></i> dripicons-contract
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-contract-2"></i> dripicons-contract-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-conversation"></i> dripicons-conversation
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-copy"></i> dripicons-copy
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-crop"></i> dripicons-crop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-cross"></i> dripicons-cross
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-crosshair"></i> dripicons-crosshair
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-cutlery"></i> dripicons-cutlery
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-device-desktop"></i> dripicons-device-desktop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-device-mobile"></i> dripicons-device-mobile
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-device-tablet"></i> dripicons-device-tablet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-direction"></i> dripicons-direction
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-disc"></i> dripicons-disc
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-document"></i> dripicons-document
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-document-delete"></i> dripicons-document-delete
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-document-edit"></i> dripicons-document-edit
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-document-new"></i> dripicons-document-new
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-document-remove"></i> dripicons-document-remove
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-dot"></i> dripicons-dot
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-dots-2"></i> dripicons-dots-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-dots-3"></i> dripicons-dots-3
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-download"></i> dripicons-download
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-duplicate"></i> dripicons-duplicate
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-enter"></i> dripicons-enter
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-exit"></i> dripicons-exit
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-expand"></i> dripicons-expand
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-expand-2"></i> dripicons-expand-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-experiment"></i> dripicons-experiment
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-export"></i> dripicons-export
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-feed"></i> dripicons-feed
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-flag"></i> dripicons-flag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-flashlight"></i> dripicons-flashlight
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-folder"></i> dripicons-folder
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-folder-open"></i> dripicons-folder-open
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-forward"></i> dripicons-forward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-gaming"></i> dripicons-gaming
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-gear"></i> dripicons-gear
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-graduation"></i> dripicons-graduation
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-graph-bar"></i> dripicons-graph-bar
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-graph-line"></i> dripicons-graph-line
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-graph-pie"></i> dripicons-graph-pie
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-headset"></i> dripicons-headset
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-heart"></i> dripicons-heart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-help"></i> dripicons-help
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-home"></i> dripicons-home
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-hourglass"></i> dripicons-hourglass
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-inbox"></i> dripicons-inbox
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-information"></i> dripicons-information
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-italic"></i> dripicons-italic
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-jewel"></i> dripicons-jewel
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-lifting"></i> dripicons-lifting
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-lightbulb"></i> dripicons-lightbulb
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-link"></i> dripicons-link
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-link-broken"></i> dripicons-link-broken
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-list"></i> dripicons-list
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-loading"></i> dripicons-loading
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-location"></i> dripicons-location
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-lock"></i> dripicons-lock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-lock-open"></i> dripicons-lock-open
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-mail"></i> dripicons-mail
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-map"></i> dripicons-map
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-media-loop"></i> dripicons-media-loop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-media-next"></i> dripicons-media-next
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-media-pause"></i> dripicons-media-pause
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-media-play"></i> dripicons-media-play
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-media-previous"></i> dripicons-media-previous
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-media-record"></i> dripicons-media-record
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-media-shuffle"></i> dripicons-media-shuffle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-media-stop"></i> dripicons-media-stop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-medical"></i> dripicons-medical
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-menu"></i> dripicons-menu
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-message"></i> dripicons-message
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-meter"></i> dripicons-meter
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-microphone"></i> dripicons-microphone
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-minus"></i> dripicons-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-monitor"></i> dripicons-monitor
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-move"></i> dripicons-move
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-music"></i> dripicons-music
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-network-1"></i> dripicons-network-1
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-network-2"></i> dripicons-network-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-network-3"></i> dripicons-network-3
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-network-4"></i> dripicons-network-4
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-network-5"></i> dripicons-network-5
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-pamphlet"></i> dripicons-pamphlet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-paperclip"></i> dripicons-paperclip
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-pencil"></i> dripicons-pencil
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-phone"></i> dripicons-phone
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-photo"></i> dripicons-photo
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-photo-group"></i> dripicons-photo-group
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-pill"></i> dripicons-pill
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-pin"></i> dripicons-pin
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-plus"></i> dripicons-plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-power"></i> dripicons-power
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-preview"></i> dripicons-preview
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-print"></i> dripicons-print
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-pulse"></i> dripicons-pulse
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-question"></i> dripicons-question
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-reply"></i> dripicons-reply
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-reply-all"></i> dripicons-reply-all
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-return"></i> dripicons-return
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-retweet"></i> dripicons-retweet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-rocket"></i> dripicons-rocket
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-scale"></i> dripicons-scale
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-search"></i> dripicons-search
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-shopping-bag"></i> dripicons-shopping-bag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-skip"></i> dripicons-skip
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-stack"></i> dripicons-stack
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-star"></i> dripicons-star
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-stopwatch"></i> dripicons-stopwatch
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-store"></i> dripicons-store
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-suitcase"></i> dripicons-suitcase
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-swap"></i> dripicons-swap
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-tag"></i> dripicons-tag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-tag-delete"></i> dripicons-tag-delete
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-tags"></i> dripicons-tags
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-thumbs-down"></i> dripicons-thumbs-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-thumbs-up"></i> dripicons-thumbs-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-ticket"></i> dripicons-ticket
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-time-reverse"></i> dripicons-time-reverse
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-to-do"></i> dripicons-to-do
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-toggles"></i> dripicons-toggles
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-trash"></i> dripicons-trash
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-trophy"></i> dripicons-trophy
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-upload"></i> dripicons-upload
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-user"></i> dripicons-user
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-user-group"></i> dripicons-user-group
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-user-id"></i> dripicons-user-id
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-vibrate"></i> dripicons-vibrate
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-view-apps"></i> dripicons-view-apps
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-view-list"></i> dripicons-view-list
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-view-list-large"></i> dripicons-view-list-large
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-view-thumb"></i> dripicons-view-thumb
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-volume-full"></i> dripicons-volume-full
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-volume-low"></i> dripicons-volume-low
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-volume-medium"></i> dripicons-volume-medium
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-volume-off"></i> dripicons-volume-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-wallet"></i> dripicons-wallet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-warning"></i> dripicons-warning
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-web"></i> dripicons-web
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-weight"></i> dripicons-weight
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-wifi"></i> dripicons-wifi
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-wrong"></i> dripicons-wrong
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-zoom-in"></i> dripicons-zoom-in
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="dripicons-zoom-out"></i> dripicons-zoom-out
                            </div>

                        </div>
                    </div>
                    <div id="font-awesome" class="tab-pane">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Solid</h4>
                                <p class="sub-header">Use <code>&lt;i class="fas fa-ad"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 5.13.0</span>.</p>

                                <div class="row icons-list-demo" id="solid">
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Regular</h4>
                                <p class="sub-header">Use <code>&lt;i class="far fa-address-book"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 5.13.0</span>.</p>

                                <div class="row icons-list-demo" id="regular">
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Brands</h4>
                                <p class="sub-header">Use <code>&lt;i class="fab fa-500px"&gt;&lt;/i&gt;</code> <span class="badge badge-success">v 5.13.0</span>.</p>

                                <div class="row icons-list-demo" id="brand">
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div>
                    <div id="simple-line" class="tab-pane">
                        <div class="row icons-list-demo">
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-user"></i>icon-user
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-people"></i>icon-people

                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-user-female"></i>
                                    icon-user-female
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-user-follow"></i>
                                    icon-user-follow
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-user-following"></i>
                                    icon-user-following
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-user-unfollow"></i>
                                    icon-user-unfollow
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-login"></i>
                                    icon-login
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-logout"></i>
                                    icon-logout
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-emotsmile"></i>
                                    icon-emotsmile
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-phone"></i>
                                    icon-phone
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-call-end"></i>
                                    icon-call-end
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-call-in"></i>
                                    icon-call-in
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-call-out"></i>
                                    icon-call-out
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-map"></i>
                                    icon-map
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-location-pin"></i>
                                    icon-location-pin
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-direction"></i>
                                    icon-direction
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-directions"></i>
                                    icon-directions
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-compass"></i>
                                    icon-compass
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-layers"></i>
                                    icon-layers
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-menu"></i>
                                    icon-menu
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-list"></i>
                                    icon-list
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-options-vertical"></i>
                                    icon-options-vertical
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-options"></i>
                                    icon-options
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-arrow-down"></i>
                                    icon-arrow-down
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-arrow-left"></i>
                                    icon-arrow-left
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-arrow-right"></i>
                                    icon-arrow-right
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-arrow-up"></i>
                                    icon-arrow-up
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-arrow-up-circle"></i>
                                    icon-arrow-up-circle
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-arrow-left-circle"></i>
                                    icon-arrow-left-circle
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-arrow-right-circle"></i>
                                    icon-arrow-right-circle
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-arrow-down-circle"></i>
                                    icon-arrow-down-circle
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-check"></i>
                                    icon-check
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-clock"></i>
                                    icon-clock
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-plus"></i>
                                    icon-plus
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-close"></i>
                                    icon-close
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-trophy"></i>
                                    icon-trophy
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-screen-smartphone"></i>
                                    icon-screen-smartphone
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-screen-desktop"></i>
                                    icon-screen-desktop
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-plane"></i>
                                    icon-plane
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-notebook"></i>
                                    icon-notebook
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-mustache"></i>
                                    icon-mustache
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-mouse"></i>
                                    icon-mouse
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-magnet"></i>
                                    icon-magnet
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-energy"></i>
                                    icon-energy
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-disc"></i>
                                    icon-disc
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-cursor"></i>
                                    icon-cursor
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-cursor-move"></i>
                                    icon-cursor-move
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-crop"></i>
                                    icon-crop
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-chemistry"></i>
                                    icon-chemistry
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-speedometer"></i>
                                    icon-speedometer
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-shield"></i>
                                    icon-shield
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-screen-tablet"></i>
                                    icon-screen-tablet
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-magic-wand"></i>
                                    icon-magic-wand
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-hourglass"></i>
                                    icon-hourglass
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-graduation"></i>
                                    icon-graduation
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-ghost"></i>
                                    icon-ghost
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-game-controller"></i>
                                    icon-game-controller
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-fire"></i>
                                    icon-fire
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-eyeglass"></i>
                                    icon-eyeglass
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-envelope-open"></i>
                                    icon-envelope-open
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-bell"></i>
                                    icon-bell
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-badge"></i>
                                    icon-badge
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-anchor"></i>
                                    icon-anchor
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-wallet"></i>
                                    icon-wallet
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-vector"></i>
                                    icon-vector
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-speech"></i>
                                    icon-speech
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-puzzle"></i>
                                    icon-puzzle
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-printer"></i>
                                    icon-printer
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-present"></i>
                                    icon-present
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-playlist"></i>
                                    icon-playlist
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-pin"></i>
                                    icon-pin
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-picture"></i>
                                    icon-picture
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-handbag"></i>
                                    icon-handbag
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-globe-alt"></i>
                                    icon-globe-alt
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-globe"></i>
                                    icon-globe
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-folder-alt"></i>
                                    icon-folder-alt
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-folder"></i>
                                    icon-folder
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-film"></i>
                                    icon-film
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-feed"></i>
                                    icon-feed
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-drop"></i>
                                    icon-drop
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-drawar"></i>
                                    icon-drawar
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-docs"></i>
                                    icon-docs
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-doc"></i>
                                    icon-doc
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-diamond"></i>
                                    icon-diamond
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-cup"></i>
                                    icon-cup
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-calculator"></i>
                                    icon-calculator
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-bubbles"></i>
                                    icon-bubbles
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-briefcase"></i>
                                    icon-briefcase
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-book-open"></i>
                                    icon-book-open
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-basket-loaded"></i>
                                    icon-basket-loaded
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-basket"></i>
                                    icon-basket
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-bag"></i>
                                    icon-bag
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-action-undo"></i>
                                    icon-action-undo
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-action-redo"></i>
                                    icon-action-redo
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-wrench"></i>
                                    icon-wrench
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-umbrella"></i>
                                    icon-umbrella
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-trash"></i>
                                    icon-trash
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-tag"></i>
                                    icon-tag
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-support"></i>
                                    .icon-support
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-frame"></i>
                                    icon-frame
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-size-fullscreen"></i>
                                    icon-size-fullscreen
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-size-actual"></i>
                                    icon-size-actual
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-shuffle"></i>
                                    icon-shuffle
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-share-alt"></i>
                                    icon-share-alt
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-share"></i>
                                    icon-share
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-rocket"></i>
                                    icon-rocket
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-question"></i>
                                    icon-question
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-pie-chart"></i>
                                    icon-pie-chart
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-pencil"></i>
                                    icon-pencil
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-note"></i>
                                    icon-note
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-loop"></i>
                                    icon-loop
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-home"></i>
                                    icon-home
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-grid"></i>
                                    icon-grid
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-graph"></i>
                                    icon-graph
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-microphone"></i>
                                    icon-microphone
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-music-tone-alt"></i>
                                    icon-music-tone-alt
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-music-tone"></i>
                                    icon-music-tone
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-earphones-alt"></i>
                                    icon-earphones-alt
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-earphones"></i>
                                    icon-earphones
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-equalizer"></i>
                                    icon-equalizer
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-like"></i>
                                    icon-like
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-dislike"></i>
                                    icon-dislike
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-control-start"></i>
                                    icon-control-start
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-control-rewind"></i>
                                    icon-control-rewind
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-control-play"></i>
                                    icon-control-play
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-control-pause"></i>
                                    icon-control-pause
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-control-forward"></i>
                                    icon-control-forward
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-control-end"></i>
                                    icon-control-end
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-volume-1"></i>
                                    icon-volume-1
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-volume-2"></i>
                                    icon-volume-2
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-volume-off"></i>
                                    icon-volume-off
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-calender"></i>
                                    icon-calender
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-bulb"></i>
                                    icon-bulb
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-chart"></i>
                                    icon-chart
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-ban"></i>
                                    icon-ban
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-bubble"></i>
                                    icon-bubble
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-camrecorder"></i>
                                    icon-camrecorder
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-camera"></i>
                                    icon-camera
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-cloud-download"></i>
                                    icon-cloud-download
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-cloud-upload"></i>
                                    icon-cloud-upload
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-eye"></i>
                                    icon-eye
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-flag"></i>
                                    icon-flag
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-heart"></i>
                                    icon-heart
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-info"></i>
                                    icon-info
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-key"></i>
                                    icon-key
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-link"></i>
                                    icon-link
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-lock"></i>
                                    icon-lock
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-lock-open"></i>
                                    icon-lock-open
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-magnifier"></i>
                                    icon-magnifier
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-magnifier-add"></i>
                                    icon-magnifier-add
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-magnifier-remove"></i>
                                    icon-magnifier-remove
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-paper-clip"></i>
                                    icon-paper-clip
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-paper-plane"></i>
                                    icon-paper-plane
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-power"></i>
                                    icon-power
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-refresh"></i>
                                    icon-refresh
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-reload"></i>
                                    icon-reload
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-settings"></i>
                                    icon-settings
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-star"></i>
                                    icon-star
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-symble-female"></i>
                                    icon-symble-female
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-symbol-male"></i>
                                    icon-symbol-male
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-target"></i>
                                    icon-target
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-credit-card"></i>
                                    icon-credit-card
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-paypal"></i>
                                    icon-paypal
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-tumblr"></i>
                                    icon-social-tumblr
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-twitter"></i>
                                    icon-social-twitter
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-facebook"></i>
                                    icon-social-facebook
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-instagram"></i>
                                    icon-social-instagram
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-linkedin"></i>
                                    icon-social-linkedin
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-pintarest"></i>
                                    icon-social-pintarest
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-github"></i>
                                    icon-social-github
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-gplus"></i>
                                    icon-social-gplus
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-reddit"></i>
                                    icon-social-reddit
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-skype"></i>
                                    icon-social-skype
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-dribbble"></i>
                                    icon-social-dribbble
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-behance"></i>
                                    icon-social-behance
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-foursqare"></i>
                                    icon-social-foursqare
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-soundcloud"></i>
                                    icon-social-soundcloud
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-spotify"></i>
                                    icon-social-spotify
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-stumbleupon"></i>
                                    icon-social-stumbleupon
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-youtube"></i>
                                    icon-social-youtube
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <div class="preview">
                                    <i class="icon-social-dropbox"></i>
                                    icon-social-dropbox
                                </div>
                            </div>

                        </div> <!-- end row -->
                    </div>
                    <div id="themify" class="tab-pane">
                        <div class="row icons-list-demo">
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-up"></i> ti-arrow-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-right"></i> ti-arrow-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-left"></i> ti-arrow-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-down"></i> ti-arrow-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrows-vertical"></i> ti-arrows-vertical
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrows-horizontal"></i> ti-arrows-horizontal
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-angle-up"></i> ti-angle-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-angle-right"></i> ti-angle-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-angle-left"></i> ti-angle-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-angle-down"></i> ti-angle-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-angle-double-up"></i> ti-angle-double-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-angle-double-right"></i> ti-angle-double-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-angle-double-left"></i> ti-angle-double-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-angle-double-down"></i> ti-angle-double-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-move"></i> ti-move
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-fullscreen"></i> ti-fullscreen
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-top-right"></i> ti-arrow-top-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-top-left"></i> ti-arrow-top-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-circle-up"></i> ti-arrow-circle-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-circle-right"></i> ti-arrow-circle-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-circle-left"></i> ti-arrow-circle-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrow-circle-down"></i> ti-arrow-circle-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-arrows-corner"></i> ti-arrows-corner
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-split-v"></i> ti-split-v
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-split-v-alt"></i> ti-split-v-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-split-h"></i> ti-split-h
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-hand-point-up"></i> ti-hand-point-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-hand-point-right"></i> ti-hand-point-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-hand-point-left"></i> ti-hand-point-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-hand-point-down"></i> ti-hand-point-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-back-right"></i> ti-back-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-back-left"></i> ti-back-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-exchange-vertical"></i> ti-exchange-vertical
                            </div>
                        </div>
                        <!-- End row -->

                        <h4 class="header-title my-3">Web App Icons</h4>
                        <div class="row icons-list-demo">
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-wand"></i> ti-wand
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-save"></i> ti-save
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-save-alt"></i> ti-save-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-direction"></i> ti-direction
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-direction-alt"></i> ti-direction-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-user"></i> ti-user
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-link"></i> ti-link
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-unlink"></i> ti-unlink
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-trash"></i> ti-trash
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-target"></i> ti-target
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-tag"></i> ti-tag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-desktop"></i> ti-desktop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-tablet"></i> ti-tablet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-mobile"></i> ti-mobile
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-email"></i> ti-email
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-star"></i> ti-star
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-spray"></i> ti-spray
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-signal"></i> ti-signal
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shopping-cart"></i> ti-shopping-cart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shopping-cart-full"></i> ti-shopping-cart-full
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-settings"></i> ti-settings
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-search"></i> ti-search
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-zoom-in"></i> ti-zoom-in
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-zoom-out"></i> ti-zoom-out
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-cut"></i> ti-cut
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-ruler"></i> ti-ruler
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-ruler-alt-2"></i> ti-ruler-alt-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-ruler-pencil"></i> ti-ruler-pencil
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-ruler-alt"></i> ti-ruler-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-bookmark"></i> ti-bookmark
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-bookmark-alt"></i> ti-bookmark-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-reload"></i> ti-reload
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-plus"></i> ti-plus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-minus"></i> ti-minus
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-close"></i> ti-close
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pin"></i> ti-pin
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pencil"></i> ti-pencil
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pencil-alt"></i> ti-pencil-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-paint-roller"></i> ti-paint-roller
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-paint-bucket"></i> ti-paint-bucket
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-na"></i> ti-na
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-medall"></i> ti-medall
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-medall-alt"></i> ti-medall-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-marker"></i> ti-marker
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-marker-alt"></i> ti-marker-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-lock"></i> ti-lock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-unlock"></i> ti-unlock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-location-arrow"></i> ti-location-arrow
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout"></i> ti-layout
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layers"></i> ti-layers
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layers-alt"></i> ti-layers-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-key"></i> ti-key
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-image"></i> ti-image
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-heart"></i> ti-heart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-heart-broken"></i> ti-heart-broken
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-hand-stop"></i> ti-hand-stop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-hand-open"></i> ti-hand-open
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-hand-drag"></i> ti-hand-drag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-flag"></i> ti-flag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-flag-alt"></i> ti-flag-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-flag-alt-2"></i> ti-flag-alt-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-eye"></i> ti-eye
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-import"></i> ti-import
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-export"></i> ti-export
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-cup"></i> ti-cup
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-crown"></i> ti-crown
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-comments"></i> ti-comments
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-comment"></i> ti-comment
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-comment-alt"></i> ti-comment-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-thought"></i> ti-thought
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-clip"></i> ti-clip
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-check"></i> ti-check
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-check-box"></i> ti-check-box
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-camera"></i> ti-camera
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-announcement"></i> ti-announcement
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-brush"></i> ti-brush
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-brush-alt"></i> ti-brush-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-palette"></i> ti-palette
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-briefcase"></i> ti-briefcase
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-bolt"></i> ti-bolt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-bolt-alt"></i> ti-bolt-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-blackboard"></i> ti-blackboard
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-bag"></i> ti-bag
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-world"></i> ti-world
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-wheelchair"></i> ti-wheelchair
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-car"></i> ti-car
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-truck"></i> ti-truck
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-timer"></i> ti-timer
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-ticket"></i> ti-ticket
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-thumb-up"></i> ti-thumb-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-thumb-down"></i> ti-thumb-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-stats-up"></i> ti-stats-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-stats-down"></i> ti-stats-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shine"></i> ti-shine
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shift-right"></i> ti-shift-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shift-left"></i> ti-shift-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shift-right-alt"></i> ti-shift-right-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shift-left-alt"></i> ti-shift-left-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shield"></i> ti-shield
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-notepad"></i> ti-notepad
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-server"></i> ti-server
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pulse"></i> ti-pulse
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-printer"></i> ti-printer
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-power-off"></i> ti-power-off
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-plug"></i> ti-plug
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pie-chart"></i> ti-pie-chart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-panel"></i> ti-panel
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-package"></i> ti-package
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-music"></i> ti-music
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-music-alt"></i> ti-music-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-mouse"></i> ti-mouse
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-mouse-alt"></i> ti-mouse-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-money"></i> ti-money
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-microphone"></i> ti-microphone
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-menu"></i> ti-menu
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-menu-alt"></i> ti-menu-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-map"></i> ti-map
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-map-alt"></i> ti-map-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-location-pin"></i> ti-location-pin
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-light-bulb"></i> ti-light-bulb
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-info"></i> ti-info
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-infinite"></i> ti-infinite
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-id-badge"></i> ti-id-badge
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-hummer"></i> ti-hummer
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-home"></i> ti-home
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-help"></i> ti-help
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-headphone"></i> ti-headphone
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-harddrives"></i> ti-harddrives
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-harddrive"></i> ti-harddrive
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-gift"></i> ti-gift
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-game"></i> ti-game
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-filter"></i> ti-filter
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-files"></i> ti-files
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-file"></i> ti-file
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-zip"></i> ti-zip
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-folder"></i> ti-folder
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-envelope"></i> ti-envelope
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-dashboard"></i> ti-dashboard
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-cloud"></i> ti-cloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-cloud-up"></i> ti-cloud-up
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-cloud-down"></i> ti-cloud-down
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-clipboard"></i> ti-clipboard
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-calendar"></i> ti-calendar
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-book"></i> ti-book
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-bell"></i> ti-bell
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-basketball"></i> ti-basketball
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-bar-chart"></i> ti-bar-chart
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-bar-chart-alt"></i> ti-bar-chart-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-archive"></i> ti-archive
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-anchor"></i> ti-anchor
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-alert"></i> ti-alert
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-alarm-clock"></i> ti-alarm-clock
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-agenda"></i> ti-agenda
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-write"></i> ti-write
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-wallet"></i> ti-wallet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-video-clapper"></i> ti-video-clapper
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-video-camera"></i> ti-video-camera
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-vector"></i> ti-vector
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-support"></i> ti-support
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-stamp"></i> ti-stamp
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-slice"></i> ti-slice
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-shortcode"></i> ti-shortcode
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-receipt"></i> ti-receipt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pin2"></i> ti-pin2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pin-alt"></i> ti-pin-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pencil-alt2"></i> ti-pencil-alt2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-eraser"></i> ti-eraser
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-more"></i> ti-more
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-more-alt"></i> ti-more-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-microphone-alt"></i> ti-microphone-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-magnet"></i> ti-magnet
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-line-double"></i> ti-line-double
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-line-dotted"></i> ti-line-dotted
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-line-dashed"></i> ti-line-dashed
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-ink-pen"></i> ti-ink-pen
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-info-alt"></i> ti-info-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-help-alt"></i> ti-help-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-headphone-alt"></i> ti-headphone-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-gallery"></i> ti-gallery
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-face-smile"></i> ti-face-smile
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-face-sad"></i> ti-face-sad
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-credit-card"></i> ti-credit-card
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-comments-smiley"></i> ti-comments-smiley
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-time"></i> ti-time
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-share"></i> ti-share
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-share-alt"></i> ti-share-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-rocket"></i> ti-rocket
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-new-window"></i> ti-new-window
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-rss"></i> ti-rss
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-rss-alt"></i> ti-rss-alt
                            </div>

                        </div>
                        <!-- End row -->

                        <h4 class="header-title my-3">Control Icons</h4>

                        <div class="row icons-list-demo">

                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-stop"></i> ti-control-stop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-shuffle"></i> ti-control-shuffle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-play"></i> ti-control-play
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-pause"></i> ti-control-pause
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-forward"></i> ti-control-forward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-backward"></i> ti-control-backward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-volume"></i> ti-volume
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-skip-forward"></i> ti-control-skip-forward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-skip-backward"></i> ti-control-skip-backward
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-record"></i> ti-control-record
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-control-eject"></i> ti-control-eject
                            </div>
                        </div>
                        <!-- End row -->

                        <h4 class="header-title my-3">Text Editor</h4>

                        <div class="row icons-list-demo">

                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-paragraph"></i> ti-paragraph
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-uppercase"></i> ti-uppercase
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-underline"></i> ti-underline
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-text"></i> ti-text
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-Italic"></i> ti-Italic
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-smallcap"></i> ti-smallcap
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-list"></i> ti-list
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-list-ol"></i> ti-list-ol
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-align-right"></i> ti-align-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-align-left"></i> ti-align-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-align-justify"></i> ti-align-justify
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-align-center"></i> ti-align-center
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-quote-right"></i> ti-quote-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-quote-left"></i> ti-quote-left
                            </div>

                        </div>
                        <!-- End row -->

                        <h4 class="header-title my-3">Layout Icons</h4>

                        <div class="row icons-list-demo">

                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-width-full"></i> ti-layout-width-full
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-width-default"></i> ti-layout-width-default
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-width-default-alt"></i> ti-layout-width-default-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-tab"></i> ti-layout-tab
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-tab-window"></i> ti-layout-tab-window
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-tab-v"></i> ti-layout-tab-v
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-tab-min"></i> ti-layout-tab-min
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-slider"></i> ti-layout-slider
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-slider-alt"></i> ti-layout-slider-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-sidebar-right"></i> ti-layout-sidebar-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-sidebar-none"></i> ti-layout-sidebar-none
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-sidebar-left"></i> ti-layout-sidebar-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-placeholder"></i> ti-layout-placeholder
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-menu"></i> ti-layout-menu
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-menu-v"></i> ti-layout-menu-v
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-menu-separated"></i> ti-layout-menu-separated
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-menu-full"></i> ti-layout-menu-full
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-right"></i> ti-layout-media-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-right-alt"></i> ti-layout-media-right-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-overlay"></i> ti-layout-media-overlay
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-overlay-alt"></i> ti-layout-media-overlay-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-overlay-alt-2"></i> ti-layout-media-overlay-alt-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-left"></i> ti-layout-media-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-left-alt"></i> ti-layout-media-left-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-center"></i> ti-layout-media-center
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-media-center-alt"></i> ti-layout-media-center-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-list-thumb"></i> ti-layout-list-thumb
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-list-thumb-alt"></i> ti-layout-list-thumb-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-list-post"></i> ti-layout-list-post
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-list-large-image"></i> ti-layout-list-large-image
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-line-solid"></i> ti-layout-line-solid
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-grid4"></i> ti-layout-grid4
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-grid3"></i> ti-layout-grid3
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-grid2"></i> ti-layout-grid2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-grid2-thumb"></i> ti-layout-grid2-thumb
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-cta-right"></i> ti-layout-cta-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-cta-left"></i> ti-layout-cta-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-cta-center"></i> ti-layout-cta-center
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-cta-btn-right"></i> ti-layout-cta-btn-right
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-cta-btn-left"></i> ti-layout-cta-btn-left
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-column4"></i> ti-layout-column4
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-column3"></i> ti-layout-column3
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-column2"></i> ti-layout-column2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-accordion-separated"></i> ti-layout-accordion-separated
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-accordion-merged"></i> ti-layout-accordion-merged
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-accordion-list"></i> ti-layout-accordion-list
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-widgetized"></i> ti-widgetized
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-widget"></i> ti-widget
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-widget-alt"></i> ti-widget-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-view-list"></i> ti-view-list
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-view-list-alt"></i> ti-view-list-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-view-grid"></i> ti-view-grid
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-upload"></i> ti-upload
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-download"></i> ti-download
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-loop"></i> ti-loop
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-sidebar-2"></i> ti-layout-sidebar-2
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-grid4-alt"></i> ti-layout-grid4-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-grid3-alt"></i> ti-layout-grid3-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-grid2-alt"></i> ti-layout-grid2-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-column4-alt"></i> ti-layout-column4-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-column3-alt"></i> ti-layout-column3-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-layout-column2-alt"></i> ti-layout-column2-alt
                            </div>

                        </div>
                        <!-- End row -->

                        <h4 class="header-title my-3">Brand Icons</h4>

                        <div class="row icons-list-demo">

                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-flickr"></i> ti-flickr
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-flickr-alt"></i> ti-flickr-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-instagram"></i> ti-instagram
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-google"></i> ti-google
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-github"></i> ti-github
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-facebook"></i> ti-facebook
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-dropbox"></i> ti-dropbox
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-dropbox-alt"></i> ti-dropbox-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-dribbble"></i> ti-dribbble
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-apple"></i> ti-apple
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-android"></i> ti-android
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-yahoo"></i> ti-yahoo
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-trello"></i> ti-trello
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-stack-overflow"></i> ti-stack-overflow
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-soundcloud"></i> ti-soundcloud
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-sharethis"></i> ti-sharethis
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-sharethis-alt"></i> ti-sharethis-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-reddit"></i> ti-reddit
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-microsoft"></i> ti-microsoft
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-microsoft-alt"></i> ti-microsoft-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-linux"></i> ti-linux
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-jsfiddle"></i> ti-jsfiddle
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-joomla"></i> ti-joomla
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-html5"></i> ti-html5
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-css3"></i> ti-css3
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-drupal"></i> ti-drupal
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-wordpress"></i> ti-wordpress
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-tumblr"></i> ti-tumblr
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-tumblr-alt"></i> ti-tumblr-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-skype"></i> ti-skype
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-youtube"></i> ti-youtube
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-vimeo"></i> ti-vimeo
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-vimeo-alt"></i> ti-vimeo-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-twitter"></i> ti-twitter
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-twitter-alt"></i> ti-twitter-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-linkedin"></i> ti-linkedin
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pinterest"></i> ti-pinterest
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-pinterest-alt"></i> ti-pinterest-alt
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-themify-logo"></i> ti-themify-logo
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-themify-favicon"></i> ti-themify-favicon
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3 choose-this">
                                <i class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt
                            </div>

                        </div>
                        <!-- End row -->
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->