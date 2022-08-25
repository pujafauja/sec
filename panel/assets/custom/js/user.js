( function ( $ ) {
    "use strict";

    var base_url = $('#base_url').val();

    var dataTable = $('#my-datatable').DataTable( {
        "serverSide": true,
        "stateSave" : false,
        "bAutoWidth": true,
        "oLanguage": {
            "sSearch": "<i class='fa fa-search fa-fw'></i> Search : ",
            "sLengthMenu": "_MENU_ &nbsp;&nbsp;per Page <a href='"+base_url+"user/add' class='btn btn-danger waves-effect waves-light ml-3' id='Tambah'><i class='mdi mdi-plus-circle mr-1'></i> Add New</a><span id='Notifikasi' style='display: none;'></span>",
            // "sInfoFiltered": "(difilter dari _MAX_ total data)", 
            // "sZeroRecords": "Pencarian tidak ditemukan", 
            // "sEmptyTable": "Data kosong", 
            // "sLoadingRecords": "Harap Tunggu...", 
            "oPaginate": {
                "sPrevious": "Prev",
                "sNext": "Next"
            }
        },
        "aaSorting": [[ 1, "asc" ]],
        "columnDefs": [ 
            {
                "targets": 'no-sort',
                "orderable": false,
            }
        ],
        "sPaginationType": "simple_numbers", 
        "iDisplayLength": 10,
        "aLengthMenu": [[10, 20, 50, 100, 150], [10, 20, 50, 100, 150]],
        "ajax":{
            url : base_url+"user/user-json",
            type: "post",
            error: function(){ 
                $(".my-datatable-error").html("");
                $("#my-datatable").append('<tbody class="my-datatable-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                $("#my-datatable_processing").css("display","none");
            }
        },
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
    } );    

    $(document).on('click', '#Tambah, #Edit', function(e){
        e.preventDefault();

        var Tombol = "<button type='button' class='btn btn-primary waves-effect waves-light' id='Simpan'>Save</button>";
        Tombol += "<button type='button' class='btn btn-default waves-effect waves-light' data-dismiss='modal'>Close</button>";

        $('.modal-dialog').removeClass('modal-sm');
        $('.modal-dialog').removeClass('modal-full-width');
        $('.modal-dialog').addClass('modal-lg');
        if($(this).attr('id') == 'Tambah')
        {
            $('#ModalHeader').html('Add New User');
        }
        if($(this).attr('id') == 'Edit')
        {
            $('#ModalHeader').html('Edit User');
        }
        $('#ModalContent').load($(this).attr('href'));
        $('#ModalGue').modal('show');
        $('#ModalFooter').html(Tombol);
    });

    $(document).on('click', '#Simpan', function(e){
        e.preventDefault();

        if($(this).hasClass('disabled'))
        {
            return false;
        }
        else
        {
            if($('.tambah-user').serialize() !== '')
            {
                $.ajax({
                    url: $('.tambah-user').attr('action'),
                    type: "POST",
                    cache: false,
                    data: new FormData($('.tambah-user')[0]),
                    dataType:'json',
		            cache: false,
		            contentType: false,
		            processData: false,
                    beforeSend:function(){
                        $('#Simpan').html("Saving, please wait ...");
                    },
                    success: function(json){
                        if(json.status == 1){ 
                            $('.modal-dialog').removeClass('modal-lg');
                            $('.modal-dialog').removeClass('modal-full-width');
                            $('.modal-dialog').addClass('modal-sm');
                            $('#ModalHeader').html('Success !');
                            $('#ModalContent').html(json.pesan);
                            $('#ModalFooter').html("<button type='button' class='btn btn-primary' data-dismiss='modal'>Ok</button>");
                            $('#ModalGue').modal('show');
                            $('#my-datatable').DataTable().ajax.reload( null, false );
                        }
                        else {
                            $('#ResponseInput').html(json.pesan);
                        }

                        $('#Simpan').html('Save');
                    }
                });
            }
            else
            {
                $('#ResponseInput').html('');
            }
        }

    });

    $(document).on('change', 'select[name="employeeid"]', function(){
    	var employeeid = $(this).val();
    	var employee   = $('select[name="employeeid"] option:selected').text();
    	if(employeeid)
	    	$('input[name="USE_NAMA"]').val(employee);
	    else
	    	$('input[name="USE_NAMA"]').val('');
    })

} )( jQuery );

