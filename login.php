<?php 
    session_start();
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <main class="form-signin">
    <center>
      <?php  if(isset($_SESSION['gagal_login'])) :?>
        <div class="bg-danger row text-center text-light rounded p-3 w-75 mb-3">
            <?=  $_SESSION['gagal_login'];?>    
            <?php unset($_SESSION['gagal_login']); ?>            
        </div>
      <?php endif ?>
    </center>
     



    <form action="loginauth.php" method="post">
      <img class="mb-4" src="img/user.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Login dulu</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="user" name="nama">
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      </div>


         

      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>



  </main>


    
  </body>
</html>
