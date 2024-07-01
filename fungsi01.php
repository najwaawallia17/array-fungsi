<?php
function cetak_ganjil() {
    for ($i = 0; $i < 170; $i++) {
        if ($i % 2 == 1) {
            echo "$i, ";
        }
    }
}

cetak_ganjil();
?>
