<?php
  session_start();

  if(!isset($_SESSION["student_id"]) || !isset($_SESSION["permission"])){
    header("Location: ../login/index.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is the home page">
  <meta name="keywords" content="">
  <meta name="author" content="Phindiwe Bambata">

  <title>

    Home &middot;

  </title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link href="assets/css/toolkit.css" rel="stylesheet">

  <link href="assets/css/application.css" rel="stylesheet">

  <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;

  background-color: lightblue;
      }
    </style>

</head>


<body class="with-top-navbar">

<div class="growl" id="app-growl"></div>

<nav class="navbar navbar-toggleable-sm fixed-top navbar-inverse bg-primary app-navbar">
  <button
          class="navbar-toggler navbar-toggler-right hidden-md-up"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="index.html">
    <img src="assets/img/picture3.png" alt="brand">
  </a>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Vote <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="candidates/index.html">Candidates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home/index.html">Home</a>
      </li>

      <li class="nav-item hidden-md-up">
        <a class="nav-link" href="login/index.html">Logout</a>
      </li>

    </ul>
    <li class="nav-item ml-2">
      <button class="btn btn-default navbar-btn navbar-btn-avatar" data-toggle="popover">
        <img class="rounded-circle" src="assets/img/account.png">
      </button>
    </li>
    </ul>

    <ul class="nav navbar-nav hidden-xs-up" id="js-popoverContent">

      <li class="nav-item"><a class="nav-link" href="login/index.html">Logout</a></li>
    </ul>
  </div>
</nav>




<script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
  </body>
</html>
