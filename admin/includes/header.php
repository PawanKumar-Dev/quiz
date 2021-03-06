<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Admin Panel</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../asset/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../asset/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="../index.php" class="brand-logo">Quiz System</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/quiz">Homapage</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="/quiz">Homepage</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>