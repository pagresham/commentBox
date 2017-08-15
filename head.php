<!DOCTYPE html>

<?PHP
require("includes/dbconfig.php");
require("includes/dbconnect.php");
include "helpers/helperFunctions.php";
session_start();
date_default_timezone_set("America/New_York");


// 
$username = "pagresham";
$userid = 1;
$_SESSION['username'] = $username;
$_SESSION['userid'] = $userid;

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comment Box</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/clock.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body>

<div id="main">

<div id="head">
<?PHP
include "nav.php";
?>
</div>

<div id="body" class="container">