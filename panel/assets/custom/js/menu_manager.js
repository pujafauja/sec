( function ( $ ) {
    "use strict";

    var base_url = $('#base_url').val();

	$('.choose-this').on('click', function(e){
        var clas = $(this).find('i').attr('class');
        var oldClas = $('.select-icon').find('i').attr('class');

        $('.select-icon').find('i').removeClass(oldClas);
        $('.select-icon').find('i').addClass(clas);

        $('input[name="icon"]').val(clas);

        $('#all-icons').modal('toggle');
    })

    $('.edit-this').on('click', function(e){
    	e.preventDefault();
        var oldClas = $('.select-icon').find('i').attr('class');

    	$('#form-menu').attr('action', base_url + '/menu/saving/' + $(this).data('id'));

    	$('input[name="nama"]').val($(this).data('nama'));
    	$('input[name="class"]').val($(this).data('class'));
    	$('select[name="parentid"]').val($(this).data('parentid'));
    	$('input[name="icon"]').val($(this).data('icon'));
    	$('input[name="urutan"]').val($(this).data('urutan'));

        $('.select-icon').find('i').removeClass(oldClas);
        $('.select-icon').find('i').addClass($(this).data('ikon'));
    })

    $('.delete').on('click', function(){
    	window.location.href = $(this).data('url');
    })

    $('#form-menu').on('reset', function(){
    	$(this).attr('action', base_url + '/menu/saving');
    })
} )( jQuery );
