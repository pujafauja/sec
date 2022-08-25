                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                Puzha Framework &copy; 2021 Developed with <i class="fas fa-heart mr-1 text-danger"></i> by <a href="https://facebook.com/puzha.nzha" target="_blank">Puzha Fauzha</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

                <div class="modal" id="ModalGue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="ModalHeader"></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body" id="ModalContent"></div>
                            <div class="modal-footer" id="ModalFooter"></div>
                        </div>
                    </div>
                </div>

                <div class="modal" id="PopupGue" tabindex="-1" role="dialog" aria-labelledby="myPopupLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="PopupHeader"></h4>
                            </div>
                            <div class="modal-body" id="PopupContent"></div>
                            <div class="modal-footer" id="PopupFooter"></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="<?php echo base_url() ?>/assets/js/vendor.min.js"></script>

        <?php
        if(count($this->data['js']) > 0) {
            foreach ($this->data['js'] as $js) { ?>
                <script type="text/javascript" src="<?php echo $js ?>"></script>
            <?php }
        }
        ?>

        <!-- App js -->
        <script src="<?php echo base_url() ?>/assets/js/app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                <?php get_flashdata('global'); ?>

                $(document).on('click', '.delete', function(e){
                    e.preventDefault();
                    var target = $(this).attr('href');
                    var idtable = $('.table').attr('id');
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        type: "warning",
                        showCancelButton: !0,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then(function(t) {
                        if(t.dismiss !== Swal.DismissReason.cancel)
                        {
                            $.ajax({
                                url: target,
                                dataType: 'json',
                                success: function(s){
                                    if(s.status == 1) {
                                        Swal.fire({
                                            title: "Deleted!",
                                            text: "Your file has been deleted.",
                                            type: "success"
                                        })

                                        $('#'+idtable).DataTable().ajax.reload( null, false );
                                    } else {
                                        Swal.fire({
                                            title: "Sorry!",
                                            html: s.pesan,
                                            type: "error"
                                        })
                                    }
                                }
                            })
                        }
                        else
                        {
                            Swal.fire({
                                title: "Cancelled",
                                text: "Your imaginary file is safe :)",
                                type: "error"
                            })
                        }
                    })
                })

                $('.currency').autoNumeric('init', {
                    aSep: '.',
                    aDec: ','
                });

                $(".basic-datepicker").flatpickr(), $(".datetime-datepicker").flatpickr({
                    enableTime: !0,
                    dateFormat: "Y-m-d H:i"
                })

                $('#ModalGue').on('hidden.bs.modal', function(){
                    $('#ModalContent').html('');
                    $('#ModalHeader').html('');
                    $('#ModalFooter').html('');
                })


                $(document).on('click', '#user-setting', function(e){
                    e.preventDefault();

                    var Tombol = "<button type='button' class='btn btn-primary waves-effect waves-light' id='save-new-password'>Save</button>";
                    Tombol += "<button type='button' class='btn btn-default waves-effect waves-light' data-dismiss='modal'>Close</button>";

                    $('.modal-dialog').addClass('modal-sm');
                    $('.modal-dialog').removeClass('modal-lg');
                    $('.modal-dialog').removeClass('modal-full-width');

                    $('#ModalHeader').html('Change Password');

                    $('#ModalContent').load($(this).attr('href'));
                    $('#ModalGue').modal('show');
                    $('#ModalFooter').html(Tombol);
                })

                $(document).on('click', '#save-new-password', function(e){
                    e.preventDefault();

                    $.ajax({
                        url: $('.change-password').attr('action'),
                        data: $('.change-password').serialize(),
                        type: 'post',
                        dataType: 'json',
                        beforeSend: function() {
                            $('#save-new-password').html('<i class="fas fa-spinner fa-spin mr-1"></i> Saving');
                            $('#save-new-password').prop('disabled', true);
                        },
                        success: function(s) {
                            $('#save-new-password').html('Save');
                            $('#save-new-password').prop('disabled', false);

                            if(s.status === 1)
                            {
                                Swal.fire({
                                    title: "Updated!",
                                    text: "Your password has been changed.",
                                    type: "success"
                                })
                            }
                            else if(s.status === '0')
                            {
                                Swal.fire({
                                    title: "Error!",
                                    text: s.pesan,
                                    type: "success"
                                })   
                            }
                            else
                            {
                                $('#response').html(s.pesan);
                            }
                        }
                    })
                })

                $(document).on('submit', '.change-password', function(e){
                    e.preventDefault();

                    $.ajax({
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        type: 'post',
                        dataType: 'json',
                        beforeSend: function() {
                            $('#save-new-password').html('<i class="fas fa-spinner fa-spin mr-1"></i> Saving');
                            $('#save-new-password').prop('disabled', true);
                        },
                        success: function(s) {
                            $('#save-new-password').html('Save');
                            $('#save-new-password').prop('disabled', false);

                            if(s.status === 1)
                            {
                                Swal.fire({
                                    title: "Updated!",
                                    text: "Your password has been changed.",
                                    type: "success"
                                })
                            }
                            else if(s.status === '0')
                            {
                                Swal.fire({
                                    title: "Error!",
                                    text: s.pesan,
                                    type: "success"
                                })   
                            }
                            else
                            {
                                $('#response').html(s.pesan);
                            }
                        }
                    })
                })

            })

        </script>
        
    </body>
</html>