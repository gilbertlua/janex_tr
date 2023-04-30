<?php

include "connect.php";

$pass =  $_POST["password"];
$nama =  $_POST["nama"];
$nim =  $_POST["nim"];
$angkatan =  $_POST["angkatan"];
$jenis_kelamin =  $_POST["jenis_kelamin"];

$sql = "INSERT INTO tabel_mahasiswa (id, nama, nim, angkatan, jenis_kelamin,password)
VALUES ('', '$nama', '$nim', '$angkatan', '$jenis_kelamin','$pass')";

if ($mysqli->query($sql) === TRUE) {
  echo "data berhasil di input";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


header("Location: lihatdata.php");
?>