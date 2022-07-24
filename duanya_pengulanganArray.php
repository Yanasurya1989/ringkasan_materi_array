<?php

$angka_angka = [23, 34, 54, 67, 78,89, 90, "baru", "lagi"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Array</title>
    <style>
        .kelirhiji{
            width: 50px;
            height: 50px;
            background-color: salmon;
            /* mentengahkan */
            text-align: center;
            /* memidlekan(tengah atas bawah) */
            line-height: 50px;
            /* membuat objek otomatis sejajar kesamping */
            float: left;
            margin: 10px;
        }

        .kelir{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i < count($angka_angka); $i++){?>
        <div class="kelirhiji"><?php echo $angka_angka[$i];?></div>
    <?php }?>

    <!-- jenis pengulangan array lebih simple -->
    <div class="kelir"></div> 
        <?php foreach($angka_angka as $angka) { ?>
            <div class="kelirhiji"><?php echo $angka;?></div>
        <?php }?>

    <div class="kelir"></div> 

        <?php
            foreach($angka_angka as $angka) :
        ?>
            <div class="kelirhiji"><?= $angka;?></div>
        <?php endforeach ?>

        <div class="kelir"></div> 

        <?php if($angka %2 ==0) : ?>

            <?= "Genap";?>

        <?php endif ?>
           
</body>
</html>