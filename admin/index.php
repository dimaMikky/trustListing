<?php
//header("Content-type: text/html; charset=utf-8");
//exit("<h1>Технічна перерва. Спробуйте пізніше ...</h1>");
function Login($userlogin, $usertype, $username, $userid)
{
	if ($username == '') return false;
	$_SESSION['userlogin'] = $userlogin;
	$_SESSION['usertype'] = $usertype;
	$_SESSION['username'] = $username;
	$_SESSION['userid'] = $userid;
	return true;
}
function Logout()
{
	unset($_SESSION['userlogin']);
	unset($_SESSION['usertype']);
	unset($_SESSION['username']);
	unset($_SESSION['userid']);
}
function cleanString($string)
{
	$detagged = strip_tags($string);
	if(get_magic_quotes_gpc())
	{
		$stripped = stripslashes($detagged);
		$escaped = mysql_real_escape_string($stripped);
	}
	else
	{
		$escaped = mysql_real_escape_string($detagged);
	}
	return $escaped;
}
//*************** Start of programm *****************
session_start();
$enter_site = false;
Logout();

if (count($_POST) > 0) {
	include("connect.php");
	$log = cleanString($_POST['login']) ;
	$pas = md5($_POST['password']);
	$result = mysql_query("SELECT * FROM regusers WHERE userlogin='$log' AND userpasw='$pas'");
	if(!$result) exit();
	$myrow = mysql_fetch_array($result);
	if($myrow) {$enter_site = Login($log, $myrow['usertype'], $myrow['username'], $myrow['userid']);}
}
if ($enter_site) {
	switch  ($_SESSION['usertype'])	{
		case ("1") : // Админ
			header("Location: admin.php");
			exit();
		case ("2") : // Редактор новостной ленты
			//header("Location: editor.php");
			//exit();
	}
}
?>

<!--<!DOCTYPE html>-->
<html>
<head>
    <title>Login</title>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet" media="screen">
</head>

<body>
<div class="container">

<!-- Form login -->
<form class="signin mx-auto" role="form" action="" method="post">
    <p class="h5 text-center mb-4">Sign in</p>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="defaultForm-login" name="login" class="form-control">
        <label for="defaultForm-login">Your login</label>
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="defaultForm-pass" name="password" class="form-control">
        <label for="defaultForm-pass">Your password</label>
    </div>

    <div class="text-center">
        <button class="btn btn-default" type="submit">Login</button>
    </div>
</form>
<!-- Form login -->

<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
