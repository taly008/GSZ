<?php
function selcity()
{
	switch ($_COOKIE['city'])
	{
	case '':
	$connect = mysql_connect('gorslzas','mysql','mysql');
    mysql_select_db('u181871131_gsz',$connect);
	return 'Барнаул';
	break;
	case 'Барнаул':
	$connect = mysql_connect('gorslzas','mysql','mysql');
    mysql_select_db('u181871131_gsz',$connect);
	return 'Барнаул';
	break;
	case 'Новосибирск':
	$connect = mysql_connect('gorslzas','mysql','mysql');
    mysql_select_db('u181871131_nsk',$connect);
	return 'Новосибирск';
	break;
	}
}

function selavt()
{
$connect = mysql_connect('gorslzas','mysql','mysql');
mysql_select_db('u181871131_avt',$connect);	
}

function selcityb($sity)
{
	switch ($sity)
	{
	case '':
	$connect = mysql_connect('gorslzas','mysql','mysql');
    mysql_select_db('u181871131_gsz',$connect);
	break;
	case 'Барнаул':
	$connect = mysql_connect('gorslzas','mysql','mysql');
    mysql_select_db('u181871131_gsz',$connect);
	break;
	case 'Новосибирск':
	$connect = mysql_connect('gorslzas','mysql','mysql');
    mysql_select_db('u181871131_nsk',$connect);
	break;
	}
}

function connectdb()
{
    $connect = mysql_connect('gorslzas','mysql','mysql');
    mysql_select_db('ForArenDom',$connect);
}

function navigpage($clas,$actclas,$max)
{
$p=$_GET['page'];
$url=mb_stristr(request_url(),'&page='.$p,true);
if ($p=='')
{
	$p=1;
}
if ($p<=6)
{
 for ($i=1;$i<=11;$i++){$r=$r.'<a href="'.$url.'&page='.$i.'" class='.$clas.'>'.$i.'</a>';}	
}
elseif($p>=$max-5)
{
 for ($i=$max-10;$i<=$max;$i++){$r=$r.'<a href="'.$url.'&page='.$i.'" class='.$clas.'>'.$i.'</a>';}
}
else
{
 for ($i=$p-5;$i<=$p+5;$i++){$r=$r.'<a href="'.$url.'&page='.$i.'" class='.$clas.'>'.$i.'</a>';}	
}
return $r;	
}

function DY($t)
{
	switch ($t)
	{
		case 0: //Юридический пакет
	    $r = 1000;
		$r1='Юридический пакет';
		break;
		case 1: //Юридический пакет (скидка)
	    $r = 500;
		$r1='Юридический пакет (скидка)';
		break;
		case 2: //Выезд специалиста
	    $r = 4000;
		$r1='Выезд специалиста';
		break;
		case 3: //Выезд специалиста эконом
	    $r = 3000;
		$r1='Выезд специалиста эконом';
		break;
		case 4: //Страховка эконом
	    $r = 1000;
		$r1='Страховка эконом';
		break;
		case 5: //Страховка XL
	    $r = 1600;
		$r1='Страховка XL';
		break;
		case 6: //Страховка XXL
	    $r = 3000;
		$r1='Страховка XXL';
		break;
		case 7: //Страховка XXXL
	    $r = 5000;
		$r1='Страховка XXXL';
		break;
	}
return array($r,$r1);	
}

function Trf($t)
{
	$c = gettype($t);
	if ($c == 'string') 
	{
		switch ($t)
		{
			case 'Комната':
			$r=2000;
			break;
			case 'Все включено':
			$r=2500;
			break;
			case 'Все включено max':
			$r=3000;
			break;
			case 'Стандарт mini':
			$r=4000;
			break;
			case 'Стандарт':
			$r=4500;
			break;
			case 'Гарант mini':
			$r=6000;
			break;
			case 'Гарант':
			$r=6500;
			break;
			case 'Экспресс':
			$r=10000;
			break;
		}
	}
return $r;	
}

function request_url()
{
  $result = ''; 
  $default_port = 80; 
 
  if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS']=='on')) {
   $result .= 'https://';
   $default_port = 443;
  } else {
   $result .= 'http://';
  }
  $result .= $_SERVER['SERVER_NAME'];
  if ($_SERVER['SERVER_PORT'] != $default_port) {
   $result .= ':'.$_SERVER['SERVER_PORT'];
  }
 $result .= $_SERVER['REQUEST_URI'];
 return $result;
}

?>