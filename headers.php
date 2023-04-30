<?php 
session_start();


if (!isset($_SESSION['user'])) {
  header('location:login.php');
}

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Halaman dosen</title>

    <style type="text/css">
      html{
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>

<div class="container">
    <div class="header-nav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mt-3">
        <a class="navbar-brand" href="#">Halaman Dosen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="tambahdata.php">Tambah data mahasiswa</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="lihatdata.php">Lihat data mahasiswa</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="matakuliah.php">Matakuliah</a>
            </li>

              <li class="nav-item active">
              <a class="nav-link text-success" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
</div>
  
