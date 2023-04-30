<?php

include "connect.php";



$nama =  $_POST["nama"];
$nim =  $_POST["nim"];
$angkatan =  $_POST["angkatan"];
$jenis_kelamin =  $_POST["jenis_kelamin"];
$id = $_POST["id"];
$pass = $_POST["password"];


$sql = "INSERT INTO tabel_mahasiswa (id, nama, nim, angkatan, jenis_kelamin, password) WHERE id='$id'
VALUES ('', '$nama', '$nim', '$angkatan', '$jenis_kelamin', '$pass')";

$sql = "UPDATE tabel_mahasiswa SET  nama='$nama',nim='$nim', angkatan='$angkatan', jenis_kelamin='$jenis_kelamin', password='$pass' WHERE id=$id";


if ($mysqli->query($sql) === TRUE) {
  echo "data berhasil di input";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}


header("Location: lihatdata.php");
?>