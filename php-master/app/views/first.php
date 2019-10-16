<?php

// ERROR REPORTING
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../php/php.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <style>
    main {
      background: url(<?php print $masyvas["hero"]; ?>);
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="first.php">Gallery <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="second.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<main class="hero vh-100 w-100">

    <div class="h-100 gallery-wrap">
      <?php foreach ($masyvas["Gallery"] as $key => $images) : ?>
       <img class="col-3" src="<?php print $images; ?>" alt="">
       <?php endforeach ?>
    </div>
  </main>



<!--bootstrap js-->
<script src="../../assets/js/jqery.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>