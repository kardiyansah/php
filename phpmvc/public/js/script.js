$(function() {

    $('.btn-createBook').on('click', function() {

        $('#formModalLabel').html('Create New Book');
        $('.modal-footer button[type=submit]').html('Create New Book');

        $('#title').val('');
        $('#writer').val('');
        $('#publication-year').val('');
        $('#total-pages').val('');

    });

    $('.update-modal').on('click', function() {

        $('#formModalLabel').html('Update Book');
        $('.modal-footer button[type=submit]').html('Update Book');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/book/update');

        const id = $(this).data('id');

        // Ajax
        $.ajax({
            url: 'http://localhost/phpmvc/public/book/getUpdate',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#title').val(data.title);
                $('#writer').val(data.writer);
                $('#publication-year').val(data.publication_year);
                $('#total-pages').val(data.total_pages);
                $('#oldImage').val(data.images);
            }
        });
        
    });

});