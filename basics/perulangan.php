<?php
    for ($i=1; $i < 11; $i++) { 
        echo $i.". Saya belajar perulangan</br>";
    }

    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            echo "Ini perulangan yang ke($i, $j)</br>";
        }
    }

    $i = 0;
    while ($i < 10) {
        echo $i.". Hai";
        $i++;
    }
?>