<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'wdcxi');
    if (!$koneksi) {
        echo "Koneksi gagal!";
    }
?>