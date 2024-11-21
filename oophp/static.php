<?php 

// Static keyword
// property and methodnya terikat dengan class, bukan dengan object
// nilai static akan selalu tetap meskipun di-intance berulang kali
// membuat kode kita seolah-olah menjadi procedural
// biasanya digunakan untuk membuat fungsi bantuan / helper
// digunakan juga di class-class utility pada framework 

class StaticExample {
    public static $number = 1;

    public static function hello() {
        return "Hello " . self::$number++ . " kali";
    }
}

echo StaticExample::$number;
echo '<br>';
echo StaticExample::hello();
echo '<br>';
echo StaticExample::hello();
echo '<hr>';
