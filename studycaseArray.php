<?php
    $Mahasiswa = [
        [1,"Yana", 18111059, "Teknik Informarika", "yasa@yasa.com","Laki-laki"],
        [2,"Yayan", 18111060, "Teknik Informarika", "yayan@yasa.com","Perempuan"],
        [3,"Maman Abdurrahman", 18111060, "Teknik Informarika", "yayan@yasa.com","Laki-laki"],
        [4,"Sri Kaya", 18111060, "Teknik Informarika", "yayan@yasa.com","Perempuan"],
        [5,"Badrun", 18111060, "Teknik Informarika", "yayan@yasa.com","Perempuan"],
        [6,"Babad", 18111060, "Teknik Informarika", "yayan@yasa.com","Perempuan"],
        [7,"Merengkel", 18111060, "Teknik Informarika", "yayan@yasa.com","Perempuan"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($Mahasiswa as $variableUtkCetakIndexArraynya):?>
        <ul>        
            <li>No : <?php echo $variableUtkCetakIndexArraynya[0];?></li>
            <li>Nama : <?php echo $variableUtkCetakIndexArraynya[1];?></li>
            <li>NIM : <?php echo $variableUtkCetakIndexArraynya[2];?></li>
            <li>Jurusan : <?php echo $variableUtkCetakIndexArraynya[3];?></li>
            <li>Email : <?php echo $variableUtkCetakIndexArraynya[4];?></li>
            <li>Jenis Kelamin : <?php echo $variableUtkCetakIndexArraynya[5];?></li>
        </ul>
    <?php endforeach?>
</body>
</html>