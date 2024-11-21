<?php 
// variabel scope / lingkup variabel

// variabel lokal
$x = 10;

function tampilx() {
 // menggunakan variabel lokal menjadi variabel global
    global $x;
    echo $x;
}

tampilx();

?>