<?php
$arrNilai = array("Jeje"=>82,"Juju"=>90,"Jojo"=>75,"Jaja"=>85);
echo "<b>Array sebelum diurutkan</b>:<br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan asort()</b>:<br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan arsort()</b>:<br>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>
