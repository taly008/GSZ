<?php
include 'mainfun.php';
$sss=selcity();
$id=$_GET['apartment'];
$res = mysql_query("SELECT * FROM db WHERE ID='$id'");
$row=mysql_fetch_assoc($res);
$ki=explode('|',$row['Img']);
if(count($ki)-1>0)
{
	$src='http://gorslzas/'.$ki[0];
}
else
{
	$src='/source/noimg.jpg';
}
?>
<HTML>
<head>
<title>Городская служба заселения</title>
<link rel="shortcut icon" href="source/tit.png" type="image/x-icon">
<link href="styles/style.css", type="text/css", rel="stylesheet">
<link href="styles/jcarousel.transitions.css", type="text/css", rel="stylesheet">
<link href="styles/sview.css", type="text/css", rel="stylesheet">
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script type="text/javascript" src="/js/modernizr.js"></script>
<script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/js/jcarousel.transitions.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
function showtel(obj)
{
	var nt="<?php echo $_GET['t']; ?>";
	var ch="<?php echo $_GET['al']; ?>";
	var id="<?php echo $_GET['apartment'];?>";
	var pr=document.getElementById('inf1').innerHTML;
	var si=document.getElementById('inf2').innerHTML;
	var ra=document.getElementById('inf3').innerHTML;
	var ty=document.getElementById('inf4').innerHTML;
	var r=Math.floor(Math.random() * 9 + 1);
	var arr=["+7 961 995 64 86","+7 961 995 64 00","+7 961 995 64 11","+7 961 995 64 22","+7 961 995 64 33","+7 961 995 64 44","+7 961 995 64 55","+7 961 995 64 66","+7 961 995 64 77","+7 961 995 64 88"]; 
	if (obj.innerHTML=='Позвонить' && getCookie('vsity')==si && getCookie('vraion')==ra && getCookie('vtype')==ty && getCookie('vprice')>=pr)
	{ 
		$$a({
        type:'post',
        url:'ajax.php',
        data:{'id':id,'city':getCookie('vsity'),'randtel':1},
        response:'text',
        success:function (data) {
		obj.innerHTML='+7'+data;
		}
    });  
	}
	else if (obj.innerHTML=='Позвонить' && nt != '')
	{
		obj.innerHTML='+7'+nt;
	}
	else if (obj.innerHTML=='Позвонить')
	{
	 obj.innerHTML=arr[r];	
	}
}
iim=0;
imax=0;
function iup(k)
{
	iim=iim+k;
	if (iim==0){document.getElementById('lprev').style.display="none";}else{document.getElementById('lprev').style.display="block";}
	if(iim==imax){document.getElementById('lnext').style.display="none";}else{document.getElementById('lnext').style.display="block";}
	if(iim>=0 && iim<=imax) {realimg();}
}
function realimg()
{
	var img= new Image();
	img.src=document.getElementById(iim).src;
	if (document.body.clientWidth<img.width || document.body.clientHeight<img.height)
 {
	document.getElementById('sli').style.height=img.height/2; 
	document.getElementById('sli').style.width=img.width/2;
	document.getElementById('l'+iim).style.height=img.height/2;
	document.getElementById('l'+iim).style.width=img.width/2;
	document.getElementById('sli').style.left=document.body.clientWidth/2-img.width/4;
	document.getElementById('sli').style.top=document.body.clientHeight/2-img.height/4;
 }else{
	document.getElementById('sli').style.height=img.height; 
	document.getElementById('sli').style.width=img.width;
	document.getElementById('l'+iim).style.height=img.height;
	document.getElementById('l'+iim).style.width=img.width;
	document.getElementById('sli').style.left=document.body.clientWidth/2-img.width/2;
	document.getElementById('sli').style.top=document.body.clientHeight/2-img.height/2;
 }
}
</script>
</head>
<body class="body">
<div class="topline"></div>
<div class="top">
<div id="cit" onmouseover="selcity()" onmouseout="selcityclose()" style="position:absolute;width:250px;height:38px;left:250px;"><a id='user-city' class="pointer">Ваш город:</a>
<div id="dcitysel" class="dcitysel" style="display:none;">
<div class="goroda"><a class="agor" href="header.php?city=Барнаул&h=city&str=arend">Барнаул</a></div>
<div class="goroda"><a class="agor" href="header.php?city=Новосибирск&h=city&str=arend">Новосибирск</a></div>
</div>
</div>
<div id="tobu" class="topbut"><a href="login.php" id="in" style="display:none;" class="buttonT1 pointer">Войти</a><div id="out" class="divout" style="display:none;"><a href="lk.php?log=<?php echo $_COOKIE['login'];?>" style="border-radius:6px 0px 0px 6px; border-right:1px inset #999;" class="buttonT1 pointer">Личный кабинет</a><a href="" style="border-radius:0px 6px 6px 0px; border-left:1px inset #999;" onclick="logout();" class="buttonT1 pointer">Выйти</a></div></div>
<div class="logo"><a href="index.php"><img src="source/logo.png" class="logoimg"></a><br><span class="logotext bxsh">Городская служба заселения</span></div>
<div class="vkl"><div class="i-d navdiv"><a class="vklb" href="sdat.php">Сдать</a></div><div class="i-d navdiv"><a class="vklb" href="arend.php">Снять</a></div><div class="i-d navdiv"><a class="vklb" href="work.php">Работа у нас</a></div><div class="i-d navdiv"><a class="vklb" href="konkurs.php">Конкурсы</a></div></div><div class="contel"><img class="telimg" src="source/phone.png" height="25px" align="left"><span class="ctel">8 961 995 64 86</span></div>
</div>
<div class="bod">
<div class="ileft">
<h1><?php echo $row['Type'].' на '.$row['Adress'];?></h1>
<img class="fotoimg pointer" onclick="iup(0);jQuery('#slider').show();" src="<?php echo $src;?>"><?php if(count($ki)-1>0) {echo '<div class="ki"> '.(count($ki)-1).' фото</div>';}?>
<div><?php echo $row['Comments'];?></div>
</div>
<div class="iright">
<div><button class="but butconsl pointer" style="width:300px;margin:0px 0px 20px 0px;" onclick="showtel(this);">Позвонить</button></div>
<div class="div2"><img src="source/rub.png" style="height:22px;"><span id="inf1" class="span6"><?php echo $row['Prise']; ?></span><div class="podp">в месяц</div></div>
<div class="div2"><img src="source/metk.png" style="height:22px;"><span id="inf2" class="span6"><?php echo $sss; ?></span><br><div class="podp">Город</div></div>
<div class="div2"><img src="source/metk.png" style="height:22px;"><span id="inf3" class="span6"><?php echo $row['Raion']; ?></span><br><div class="podp">Район</div></div>
<div class="div2"><img src="source/metk.png" style="height:22px;"><span class="span6"><?php echo $row['Adress']; ?></span><br><div class="podp">Улица</div></div>
<div class="div2"><img src="source/hom.png" style="height:22px;"><span id="inf4" class="span6"><?php echo $row['Type']; ?></span><br><div class="podp">Тип недвижимости</div></div>
</div>
</div>
</div> 
<div class="bottom">  
  <div class="info">
   <div class="i1"><a class="infoa" href="index.php">Главная</a><br><a class="infoa" href="work.php">Вакансии</a><br><a class="infoa" href="konkurs.php">Конкурсы</a></div>
   <div class="i2"><a class="infoa" href="arend.php">Снять жилье</a><br><a class="infoa" href="sdat.php">Сдать жилье</a></div>
   <div class="i3"><a class="infoa" href="info.php">Полезная информация</a></div>
  </div> 
<div class="bottominf"> 2013-2016 Городская служба заселения.</div>
</div>
<div id="slider">
 <div id="sli" class="jcarousel-wrapper">
                <div><img onclick="jQuery('#slider').hide()" class="pointer" src="source/close.png" style="position:absolute;height:30px;width:30px;z-index:301;"></div>
				<div class="jcarousel">
                    <ul>
                     <?php
					  for ($i=0;$i<count($ki)-1;$i++)
					  {
						  $tx="'http://gorslzas/$ki[$i]'";
						  echo '<li id="l'.$i.'"><img id='.$i.' src='.$tx.'></li>';
					  }
					  echo '<script>imax='.($i-1).';</script>';
					 ?>   
                    </ul>
                </div>
				<a href="#" id="lprev" style="display:none;" onclick="iup(-1);" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" id="lnext" style="display:none;" onclick="iup(1);" class="jcarousel-control-next">&rsaquo;</a>
            </div>
 </div>
</body>
</HTML>