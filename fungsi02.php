<?php
function cetak_ganjil($awal, $akhir){
    for($i = $awal; $i <$akhir; $i++){
        if($i%2==1){
            echo "$i, ";
        }
    }
}

$a=17;
$b=70;

echo "<b> Bilangan ganjil dari $a sampai $b, adalah:</br><br>";
cetak_ganjil($a,$b);
?>