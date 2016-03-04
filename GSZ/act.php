<?php
include 'mainfun.php';
switch ($_GET['type'])
{
	case 'addobj':
	selcityb($_POST['asity']);
	$_1=$_POST['kname'];
	$_2=$_POST['ctel1'];
	$_3=$_POST['araion'];
	$_4=$_POST['street']+' '+$_POST['nohome'];
	$_5=$_POST['typearend'];
	if ($_5==1)
	{
	 $_6=$_POST['atype'];
     $_7=$_POST['pricem'];
     $_8=0;
     $_9=0;
     $_10='';
     $_11=0;	 
	}
	else
	{
	$_6=$_POST['atype1'];
    $_7=$_POST['pricem1'];	 
    $_8=$_POST['pricew'];
    $_9=$_POST['priced'];
    $_10=$_POST['class'];
    $_11=$_POST['spalmes'];	 
	}
	$_12=$_POST['com'];
    $sq = "INSERT INTO db (ID, Namear, Telnum, Raion, Adress, Typearend, Type, Prise, priseweek, priseday, class, sleepplace, Comments) VALUES (NULL, '$_1', '$_2', '$_3', '$_4', '$_5', '$_6', '$_7', '$_8', '$_9', '$_10', '$_11', '$_12');";
	mysql_query($sq);
	$host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "sdat.php?stat=success";
    header("Location: http://$host$uri/$extra");
    exit;
	break;
	case 'work':
	selavt();
	$arr=$_POST['pred'];
	for($i=0;$i<count($arr);$i++){$_1=$_1.$arr[$i];}
	$_2=$_POST['rfio'];
	$_3=$_POST['rcity'];
	$_4=$_POST['rtel'];
	if (isset($_POST['resume'])) {$_5=$_POST['resume'];}elseif (isset($_POST['rfres'])) {$_5=$_POST['rfres'];}
	$res=mysql_query("INSERT INTO `Vacan`(`ID`, `FIO`, `Pred`, `City`, `Tel`, `Resume`) VALUES ('NULL', '$_2', '$_1', '$_3', '$_4', '$_5');");
	$host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = "work.php?stat=success";
    header("Location: http://$host$uri/$extra");
    exit;
	break;
}
?>