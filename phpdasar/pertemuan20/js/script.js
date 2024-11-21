$(document).ready(function() {
   
    // Menghilangkan tombol cari
    $('#button').hide();

    // Buat event ketika ditulis
    $('#search').on('keyup', function() {

        $('.loader').show();

        // Ajax menggunakan load
        // $('.container').load('ajax/books.php?search=' + $('#search').val());

        // Ajax menggunakan $_get()
        $.get('ajax/books.php?search=' + $('#search').val(), function(data) {

            $('.container').html(data);
            $('.loader').hide();

        });

    });

});