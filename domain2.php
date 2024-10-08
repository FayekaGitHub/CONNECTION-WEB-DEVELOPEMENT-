<?php
    include "db.php";
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Connection | Domains</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel = "stylesheet" href = "styleindex.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.m in.css" rel="stylesheet" />
      <style>
    body {
        background-image: url("images/background.jpeg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-end"><a class="navbar-brand" href="#">
    <img src="images/logo.jpeg" alt="logo" style="width:80px;height:50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar" class = "navbar justify-content-end">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php#about">About</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Messages
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <a class="dropdown-item bg-dark active" href="messages.php" style="color: white">Follow</a>
            <div class="dropdown-divider bg-light"></div>
            <a class="dropdown-item bg-dark" href="unfollowchat.php" style="color: white">Unfollow</a>
            </div>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="#">Domains</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="publicforum.php">Public Forum</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="post.php">Post</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php#footer">Contact</a>
        </li>
        <li class="nav-item">
    <a class="nav-link" href="profile.php">Your profile</a>
    <li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Log out</a>
        </li>
    </ul>
    </div>
    </nav>
    <h1 class = "text-white" style = "text-align:center">Domains</h2>
    <div class="row">
      <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card" style="width:335px">
        <img class="card-img-top" src="images/c ++.png" alt="Card image" style="width:100%; height: 350px">
        <div class="card-body">
          <h4 class="card-title">C++ Programming</h4>
          <a href="cplusplus.php" class="btn btn-primary">Know more!</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card" style="width:335px">
        <img class="card-img-top" src="images/DSA(1).png" alt="Card image" style="width:100%; height: 350px">
        <div class="card-body">
          <h4 class="card-title">DSA</h4>
          <a href="dsa.php" class="btn btn-primary">Know more!</a>
        </div>
      </div>
      </div>

      <div class="col-sm-4">
        <div class="card" style="width:335px">
        <img class="card-img-top" src="images/dbms.jpg" alt="Card image" style="width:100%; height: 350px">
        <div class="card-body">
          <h4 class="card-title">DBMS</h4>
          <a href="dbms.php" class="btn btn-primary">Know more!</a>
        </div>
      </div>
      </div>

    </div>
    <div class = "row">
      <div class="col-sm-4">
        <div class="card" style="width:335px">
        <img class="card-img-top" src="images/python.jfif" alt="Card image" style="width:100%; height: 350px">
        <div class="card-body">
          <h4 class="card-title">PYTHON</h4>
          <a href="python.php" class="btn btn-primary">Know more!</a>
        </div>
      </div>
      </div>

      <div class="col-sm-4">
        <div class="card" style="width:335px">
        <img class="card-img-top" src="images/c.png" alt="Card image" style="width:100%; height:350px">
        <div class="card-body">
          <h4 class="card-title">C programming</h4>
          <a href="cprogramming.php" class="btn btn-primary">Know more!</a>
        </div>
      </div>
      </div>

      <div class="col-sm-4">
        <div class="card" style="width:335px">
        <img class="card-img-top" src="images/os.jpg" alt="Card image" style="width:100%; height: 350px">
        <div class="card-body">
          <h4 class="card-title">Operating Systems</h4>
          <a href="os.php" class="btn btn-primary">Know more!</a>
          <form action="addfollow.php" method="post">
          </form>
        </div>   
      </div>
      </div>
    </div>
    <br>
    <br>
    </div>
    </body>
    </html>