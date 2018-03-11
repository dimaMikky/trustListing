<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Dashboard Template for Bootstrap</title>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Bootstrap core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- Material Design Bootstrap -->
 <link href="css/mdb.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
</head>

<body>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark elegant-color">

<div class="bd-brand-item">
<h3>Trusted</h3>
</div>
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
        <li class="nav-item <? echo ($curmenu ==0) ? 'active' : '' ;?>">
          <a class="nav-link" href="./admin.php">Home </a>
        </li>
        <li class="nav-item <? echo ($curmenu ==1) ? 'active' : '' ;?>">
          <a class="nav-link" href="./mining.php">Mining</a>
        </li>
        <li class="nav-item <? echo ($curmenu ==2) ? 'active' : '' ;?>">
          <a class="nav-link" href="./gambling.php">Gambling</a>
        </li>
        <li class="nav-item <? echo ($curmenu ==3) ? 'active' : '' ;?>">
          <a class="nav-link" href="./exchanges.php">Exchanges</a>
        </li>
        <li class="nav-item <? echo ($curmenu ==4) ? 'active' : '' ;?>">
          <a class="nav-link" href="./wallets.php">Wallets</a>
        </li>

        <li class="nav-item <? echo ($curmenu ==5) ? 'active' : '' ;?>">
          <a class="nav-link" href="#">Faucets</a>
        </li>
      </ul>
        <button id="add" class="btn btn-outline-success waves-effect  <? echo ($curmenu ==0) ? 'sr-only' : '' ;?>" >Add new story</button>
      <form class="form-inline mt-2 mt-md-0" action="./index.php">
        <button class="btn btn-outline-danger waves-effect " type="submit">Exit</button>
      </form>
        <!-- Links -->


    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->


