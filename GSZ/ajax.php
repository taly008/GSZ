<?php
include 'mainfun.php';
if (isset($_POST['msg1']))
{
header("Content-type: text/txt; charset=UTF-8");
switch ($_POST['msg1'])
{
	case 'err1':
	selcityb($_POST['city']);
	$id=$_POST['id'];
	$res=mysql_query("UPDATE db SET errid = concat(errid,'1|') WHERE ID = '$id' ");
	break;
	case 'err2':
	selcityb($_POST['city']);
	$id=$_POST['id'];
	$res=mysql_query("UPDATE db SET errid = concat(errid,'2|') WHERE ID = '$id' ");
	break;
	case 'err3':
	selcityb($_POST['city']);
	$id=$_POST['id'];
	$res=mysql_query("UPDATE db SET errid = concat(errid,'3|') WHERE ID = '$id' ");
	break;
	case 'err42':
	selcityb($_POST['city']);
	$id=$_POST['id'];
	$com=$_POST['msg'].'|';
	$res=mysql_query("UPDATE db SET errid = concat(errid,'4|'), errcom = concat(errcom,'$com') WHERE ID = '$id' ");
	break;
}
}
if (isset($_POST['st']))
{
connectdb();
$start=$_POST['st'];
$res = mysql_query("SELECT * FROM Fotokon WHERE win = 1 LIMIT $start, 4 ");
while($row=mysql_fetch_assoc($res))
{
	$r=$r.$row['ID'];
	$r1=$r1.'|'.$row['path'];
}
$r=$r.'|'.$r1;
echo $r;
}

if (isset($_POST['stu']))
{
connectdb();
$start=$_POST['stu'];
$res = mysql_query("SELECT * FROM Fotokon WHERE win != 1 LIMIT $start, 12 ");
while($row=mysql_fetch_assoc($res))
{
	$r=$r.$row['ID'];
	$r1=$r1.'|'.$row['path'];
}
$r=$r.'|'.$r1;
echo $r;
}

if (isset($_POST['lf']))
{
	connectdb();
	$ph=$_POST['lf'];
	$res=mysql_query("UPDATE Fotokon SET vote = vote+1 WHERE path = '$ph' ");
}

if (isset($_POST['like']))
{
	connectdb();
	$ph=$_POST['like'];
	$res=mysql_query("SELECT vote FROM Fotokon WHERE path = '$ph' ");
	$row=mysql_fetch_assoc($res);
	echo $row['vote'];
}

if (isset($_POST['login']))
{
	connectdb();
	$l=$_POST['login'];
	$p=$_POST['pass'];
	$res=mysql_query("SELECT * FROM Users WHERE login = '$l' AND pass='$p' ");
	$row=mysql_fetch_assoc($res);
	if (!empty($row)){echo $row['ID'].'||'.$row['login'].'||'.$row['pass'].'||'.$row['fio'].'||'.$row['vsity'].'||'.$row['vraion'].'||'.$row['vtype'].'||'.$row['vprice'].'||';}
	else {echo 'false';}
}

if (isset($_POST['randtel']))
{
	selcityb($_POST['city']);
	$id=$_POST['id'];
	$res=mysql_query("SELECT Telnum FROM db WHERE ID='$id' ");
	$row=mysql_fetch_assoc($res);
	echo $row['Telnum'];
}
?>