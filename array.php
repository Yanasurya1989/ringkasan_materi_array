<?php
// array adalah pasangan antara key dan value
// key adalah index dan value adalah isi dari index array

// penulisan array cara lama
$hari = Array("Senin", "Selasa","Rabu","Kamis","Jum'at", "Sabtu");

// penulisan array cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni"];

// menampilkan array ke layar bisa dg var_dump bisa dengan print_r
// var_dump($hari);

// echo "<br>";

// print_r($bulan);

// echo"<br>";
// menampilkan satu elemen array
// echo $bulan[0];

// menambahkan value pada array
$bulan[] = "Juli";
var_dump($bulan);

echo "<br>";

echo $hari[0];

echo $hari;
?>