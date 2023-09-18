<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- TULIS DISINI -->
    <form action="" method="post">
        <label>Nilai</label>
        <input type="number" name="nilai">
        <button type="submit" name="simpan">Simpan</button>

        <?php
            if (isset($_POST['simpan'])) {
                $nilai = $_POST['nilai'];
                if ($nilai > 90) {
                    echo "GRADE A";
                }elseif($nilai > 80){
                    echo "GRADE B";
                }else{
                    echo "GRADE E";
                }
            }
        ?>
    </form>

</body>
</html>