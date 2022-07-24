<?php
    $mahasiswa = [
        [
            "no" => "1",
            "nama" => "Yana",
            "nim" =>"18111059",
            "email" =>"yasa@gmail.com",
            "jurusan" =>"Teknik Informatika",
            "gambar" => "Yana.jpg"
        ],

        [
            "no" => "2",
            "nama" => "Mantri",
            "nim" =>"18111060",
            "email" =>"mantri@yahoo.com",
            "jurusan" =>"Teknik Industri",
            "gambar" => "Nyanyang.jpg"
            // "nilai" => [90, 98, 100, 87]
        ]
    ];

    // echo $mahasiswa[0];
    // echo"<br>";
    // echo $mahasiswa["nama"];
    // echo "<br>";
    echo $mahasiswa[1]["email"];
    echo "<br>";
    // echo $mahasiswa[1]["nilai"][2];
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
<?php 
    foreach($mahasiswa as $variableUtkCetakIndexArraynya):?>
        <ul>   
            <li>
                <img src="img/<?php echo $variableUtkCetakIndexArraynya["gambar"];?>" >
            </li>     
            <li>No : <?php echo $variableUtkCetakIndexArraynya["no"];?></li>
            <li>Nama : <?php echo $variableUtkCetakIndexArraynya["nama"];?></li>
            <li>NIM : <?php echo $variableUtkCetakIndexArraynya["nim"];?></li>
            <li>Jurusan : <?php echo $variableUtkCetakIndexArraynya["email"];?></li>
            <li>Email : <?php echo $variableUtkCetakIndexArraynya["jurusan"];?></li>
        </ul>
    <?php endforeach?>
</body>
</html>