<?php

// define tidak bisa digunakan didalam class, hanya bisa digunakan sebagai variabel global
// define("NAME", "Kardiyansah");
// echo NAME;

// echo '<br>';


// boleh disimpan didalam class
// Magic Constant
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE_
// const AGE = 19;
// echo AGE;

class Example {
    const NAME = "Kardiyansah";
}

echo Example::NAME;