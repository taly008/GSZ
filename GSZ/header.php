<?php
switch ($_GET['h'])
{
	case 'city':
	$city=$_GET['city'];
	$type=$_GET['str'];
	setcookie('city', $city, time()+60*60*1000);
	$host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "$type.php";
    header("Location: http://$host$uri/$extra");
    exit;
	break;
}
?>