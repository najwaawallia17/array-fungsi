<?php
$arrNilai = array("Jeno" => 88, "Jaemin" => 90, "jisung" => 77, "Jaehyun" => 85);
echo "Menampilkan isi array asosiatif dengan foreach: <br>";
foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai<br>";
}

reset($arrNilai);
echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST:<br>";

$arrayIterator = new ArrayIterator($arrNilai);
while ($arrayIterator->valid()) {
    $nama = $arrayIterator->key();
    $nilai = $arrayIterator->current();
    echo "Nilai $nama = $nilai<br>";
    $arrayIterator->next();
}
?>
