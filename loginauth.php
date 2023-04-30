<?php 

session_start();


$nama = $_POST['nama'];
$pass = $_POST['password'];

if ($nama === "dosen" && $pass === "123") {
	$_SESSION['user'] = "dosen muchlis";
	echo "berhasil";
	header('location:tambahdata.php');
}

else{
	$_SESSION['gagal_login'] = "user atau password salah";
	header("location:login.php");
}


?>