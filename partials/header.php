<?php
include_once "resource/database.php";
include_once "resource/session.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="playstation/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="playstation/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="playstation/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="playstation/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="playstation/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="playstation/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="playstation/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="playstation/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="playstation/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="playstation/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="playstation/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="playstation/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="playstation/favicon-16x16.png">
    <link rel="manifest" href="playstation/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="playstation/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--<link rel="icon" href="favicon.ico">-->

    <title><?php if(isset($page_title)) echo $page_title ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">PlayStation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="map.php">Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forum/index.php">Forum</a>
            </li>
            <?php if((!isset($_SESSION['user_id']))):?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sign.php">SignUp</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <?php echo '<li class="nav-item"><a class="nav-link" href="#" class="nav-text">'."Welcome! ".$_SESSION['username'].'</a></li>'?>
          <?php endif ?>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
