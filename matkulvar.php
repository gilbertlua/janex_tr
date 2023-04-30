<?php

include "connect.php";




$matakuliah =  $_POST["matakuliah"];
$kode =  $_POST["kode"];
$hari =  $_POST["hari"];
$dari =  $_POST["dari"];
$sampai =  $_POST["sampai"];


$sql = "INSERT INTO tabel_matakuliah (id, matakuliah, kode, hari, dari, sampai)
VALUES ('', '$matakuliah', '$kode', '$hari', '$dari', '$sampai')";


// $sql = "UPDATE tabel_mahasiswa SET  nama='$nama',nim='$nim', angkatan='$angkatan', jenis_kelamin='$jenis_kelamin', password='$pass' WHERE id=$id";


if ($mysqli->query($sql) === TRUE) {
  echo "data berhasil di input";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}


header("Location: matakuliah.php#data_matakuliah");
?>