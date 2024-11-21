// Ambil atau query element
var search = document.getElementById('search');
var button = document.getElementById('button');
var container = document.querySelector('.container');

//Tambahkan event ketika tombol search ditekan
search.addEventListener('keyup', function() {

    // Buat object ajax
    var ajax = new XMLHttpRequest();

    // Cek kesiapan ajax
    ajax.onreadystatechange = function() {
        if ( ajax.readyState == 4 && ajax.status == 200 ) {
            container.innerHTML = ajax.responseText;
        }
    }

    // Eksekusi / open ajaxnya 
    ajax.open('GET', 'ajax/books.php?search=' + search.value, true);
    ajax.send();

});