<?php
$transport=array('Pesawat', 'Kapal', 'Mobil', 'Kereta');
echo "<pre>";
print_r($transport);
echo "</pre>";
$mode=current($transport);
echo $mode, "<br>";
$mode=next($transport);
echo $mode, "<br>";
$mode=current($transport);
echo $mode, "<br>";
$mode=prev($transport);
echo $mode, "<br>";
$mode=end($transport);
echo $mode, "<br>";
$mode=current($transport);
echo $mode, "<br>";
?>