<?php
// Set header agar bisa diakses oleh siapa pun dan hasilnya berupa JSON
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

// Ambil isi file apartments.json
$jsonData = file_get_contents("apartements.json");

// Tampilkan data ke client (Postman / Flutter / Browser)
echo $jsonData;
?>
