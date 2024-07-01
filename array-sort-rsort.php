<?php
$arrNilai = array("Rafathar" => 80, "Abe" => 90, "Rayyanza" => 75, "Ucel" => 85);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>
