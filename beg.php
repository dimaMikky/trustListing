<?php include('check_lang.php'); 
?>
<!doctype html>
<html lang="en">
  <head>
    <title><? echo ($db_data) ? $db_data->metaTitle : 'test';?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <?php  if($db_data) {
       // foreach($db_data as $row) { ?>
        <meta property="og:title" content="<? echo $db_data->metaTitle;?>"/>
        <meta property="og:description" content="<? echo $db_data->metaDescription;?>"/>
    <?//}
     } ?>

    <title>NumberOne</title>
    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Material Kit CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/material-kit.min.css">
    <link rel="stylesheet" href="css/main.css">

  </head>
<body>
    <header id="header" class="header">
        <div class="main-header">

            <nav class="navbar  container fixed-top navbar-expand-lg navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Trusted</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">           
                     <ul class="navbar-nav">
                            <li class="nav-item <? echo ($curmenu ==0) ? 'active' : '' ;?> ">
                                <a class="nav-link" href="./index.php" id='yyy'>
                                    <?= $langData[home]; ?>
                                </a>
                            </li>
                            <li class="nav-item dropdown <? echo ($curmenu ==1) ? 'active' : '' ;?>">
                                <a class="nav-link dropdown-toggle " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $langData[mining]; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="./mining.php">Overview</a>
                                      <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown <? echo ($curmenu ==2) ? 'active' : '' ;?>">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $langData[gambling]; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="gambling.php">Overview</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown <? echo ($curmenu ==3) ? 'active' : '' ;?>">
                                <a class="nav-link dropdown-toggle " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $langData[exchanges]; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="exchanges.php">Overview</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown <? echo ($curmenu ==4) ? 'active' : '' ;?>">
                                <a class="nav-link dropdown-toggle " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $langData[wallets]; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="wallets.php">Overview</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown <? echo ($curmenu ==5) ? 'active' : '' ;?>">
                                <a class="nav-link dropdown-toggle " href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $langData[faucets]; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="faucets.php">Overview</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav  ml-auto">
                            <li class="nav-item text-right lang  ">
                                <a class="nav-link " id="russian" href="">
                                    Russian
                                </a>
                            </li>
                            <li class="nav-item text-right ">
                                <a class="nav-link " id="english" href="">
                                    English
                                </a>
                            </li>
                        </ul>    
                    </div>
                </nav>
            </div>
        </div>
    </header>
