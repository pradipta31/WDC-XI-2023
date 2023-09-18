<?php
    $nilai_uas = 84;
    $nilai_uts = 79;

    if ($nilai_uas >= 85) {
        echo "Anda lulus";
    }else{
        if ($nilai_uts >= 80) {
            echo "Anda lulus karena nilai uts terpenuhi";
        }else{
            echo "Tidak lulus!";
        }
    }
?>