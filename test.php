<?php 
// variabel
$nama = "Pandu Renoto Widi Kusumo";
$umur = 15;

$a = 10;
$b = 5;

// operator
echo "Nama: " . $nama . "<br>" . "Umur: " . $umur . "<br>";
echo "<br>";
echo "$a + $b = " . $a + $b;
echo "<br><br>";

// function
function tambah($a, $b) {
    return $a * $b;
}
echo "$a * $b = ";
echo tambah($a, $b);
echo "<br><br>";

// kondisi
if($a < $b) {
    echo "Variabel A lebih kecil dari B";
} else if($a > $b) {
    echo "Variabel A lebih besar dari B";
} else {
    echo "Variabel A dan B bernilai sama";
}
?>