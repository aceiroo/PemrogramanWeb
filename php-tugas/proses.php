<?php

$nama = $_POST['Name'];
$nim = $_POST['NIM'];
$tanggal = $_POST['Tlahir'];
$tempat = $_POST['tempatLahir'];
$umur = $_POST['umur'];
$hobby = $_POST['hobby'];
$keterangan = $_POST['keterangan'];



echo "Nama : ", $nama;
echo "<br><br>"; 
echo "NIM : ", $nim;
echo "<br><br>"; 
echo "Tanggal lahir : ", $tanggal;
echo "<br><br>"; 
echo "Tempat : ", $tempat;
echo "<br><br>"; 
echo "Umur : ", $umur, " ";

if ($umur <= 10){
    echo "(Anak - anak)";
}elseif ($umur <= 20){
    echo "(Remaja)";
}elseif ($umur <= 25){
    echo "(Dewasa)";
}else{
    echo "(Tua)";
}
echo "<br><br>"; 
echo "Hobby : ", $hobby;
echo "<br><br>"; 
echo "Keterangan : ", $keterangan;
?>
