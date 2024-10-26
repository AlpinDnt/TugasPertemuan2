<?php
class Menghitung {
    public function luaspersegipanjang($panjang, $lebar) {
    return $panjang * $lebar;
    }


    public function kelilingpersegipanjang($panjang, $lebar) {
        return  2 * ($panjang + $lebar);
}


    public function luaspersegi($sisi) {
        return $sisi * $sisi;
}


    public function kelilingpersegi($sisi) {
        return 4 * $sisi;
}


    public function luassegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
 }


    public function luaslingkaran($jari_jari) {
        return pi() * $jari_jari * $jari_jari;
}


    public function kelilinglingkaran($jari_jari) {
        return 2 * pi() * $jari_jari;
    }
}

$Penyelesaian = new Menghitung();

echo "luas persegi panjang adalah :" . $Penyelesaian ->luaspersegipanjang(14, 8);
    echo "<br>";

echo "keliling persegi adalah :" . $Penyelesaian ->kelilingpersegipanjang(15, 12);
    echo "<br>";

echo "luas persegi adalah :" . $Penyelesaian ->luaspersegi(32);
    echo "<br>";

echo "keliling persegi  adalah :" . $Penyelesaian ->kelilingpersegi(36);
    echo "<br>";

echo "luas segitiga adalah :" . $Penyelesaian ->luassegitiga(20, 12);
    echo "<br>";

echo "luas lingkaran adalah :" . $Penyelesaian ->luaslingkaran(28);
    echo "<br>";

echo "keliling lingkaran adalah :" . $Penyelesaian ->kelilinglingkaran(11);
    echo "<br>";
?>