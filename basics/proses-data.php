<?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];

        echo "Nama Anda: ".$nama."</br>";
        echo "Jenis Kelamin Anda: ".$jk."</br>";
    }
?>