<?php
include "connect.php";

$id = $_GET["id"];

$sql = "DELETE FROM tabel_mahasiswa WHERE id=$id";

if ($mysqli->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}


header("Location: http://localhost/tr_mahasiswa/lihatdata.php");