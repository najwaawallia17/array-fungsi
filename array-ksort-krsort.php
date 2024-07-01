<?php
$arrNilai = array("Odi" => 83, "Dida" => 91, "Dani" => 76, "Fala" => 86);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>
