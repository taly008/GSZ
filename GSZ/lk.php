<?php 
include 'mainfun.php';
$lg = $_GET['log'];
connectdb();
$res = mysql_query("SELECT * FROM Users WHERE login = '$lg' ");
$row = mysql_fetch_assoc($res);
$connect1 = mysql_connect('gorslzas','mysql','mysql');
$connect2 = mysql_connect('gorslzas','mysql','mysql');
$res1 = mysql_query("SELECT * FROM u181871131_gsz.Oform WHERE TelNumber = '$lg' ");
$res2 = mysql_query("SELECT * FROM u181871131_nsk.Oform WHERE TelNumber = '$lg' ");
if (!empty($res1)){ $row1 = mysql_fetch_assoc($res1);}elseif (!empty($res2)){ $row1 = mysql_fetch_assoc($res2);}
?>
<HTML>
<head>
<title>Городская служба заселения</title>
<link rel="shortcut icon" href="source/tit.png" type="image/x-icon">
<link href="styles/style.css", type="text/css", rel="stylesheet">
<link href="styles/slk.css", type="text/css", rel="stylesheet">
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
</head>
<body class="body">
<div id="mask">
  <div class="consul">
   <img class="closeimg pointer" src="/source/close.png" onclick="jQuery('#mask').hide()">
   <form class="cfomr" method="GET">
   <span class="cspan">Консультация</span>
   <select class="csity" name="csity">
	 <option>Барнаул</option>
	 <option>Новосибирск</option>
   </select>
   <input class="cname" type="text" name="cname" placeholder="Ваше имя">
   <div class="cdtel">+7</div><input class="cntel" name="ctel" type="tel" pattern="[0-9]{10}" maxlength="10" placeholder="(###) ###-##-##">
   <textarea class="ctext" cols="25" rows="4" name="ctxt" placeholder="Задайте Ваш вопрос, мы постараемся ответить как можно скорее"></textarea>
   <button class="but butconsl pointer" onclick="jQuery('#mask').hide()">Оставить заявку</button>
   </form>
  </div>
</div>
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
<div class="vkl"><div class="i-d navdiv"><a class="vklb" href="sdat.php">Сдать</a></div><div class="i-d navdiv"><a class="vklb" href="arend.php">Снять</a></div><div class="i-d navdiv"><a class="vklb" href="work.php">Работа у нас</a></div><div class="i-d navdiv"><a class="vklb" href="konkurs.php">Конкурсы</a></div></div><div class="contel"><img class="telimg" src="source/phone.png" height="25px" align="left"><span class="ctel">8 961 995 64 86</span><br><button class="but butconsl pointer" onclick="jQuery('#mask').show()">Получить консультацию</button></div>
</div>
<div class="bod">
<div class="infcamp">
Идивидуальный предприниматель<br>Арбацких Алексей Сергеевич<br>ИНН 227700872544<br>ОГРНИП 315222500008998
</div>
<div class="infotab">
<table class="itab">
<tr><th class="fst">Наименование услуг(Тарифа)</th><th>Цена</th></tr>
<tr><td class="fst"><?php echo $row1['Tarif']; ?></td><td><?php echo Trf($row1['Tarif']); ?> руб.</td></tr>
<?php if (count($row1['Dopysl'])>0){echo '<tr><th class="fst">Дополнительные услуги</th><th>Цена</th></tr>';}
for ($ii=1;$ii<=count($row1['Dopysl']);$ii++){echo ('<tr><td class="fst">'.DY($row1['Dopysl'][$ii])[1].'</td><td>'.DY($row1['Dopysl'][$ii])[0].'руб.</td></tr>');} ?>
<tr><th class="fst" style="text-align:right;">Итого:</th><th style="text-decoration:underline;"><?php echo $row1['Summ']; ?> руб.</th></tr>
</table>
</div>
<div>
Дата расчета: <?php echo $row1['data_of'];?>
</div>
<div>
Ответственное лицо: <?php echo $row1['FIO_Sotr']; ?>
</div>
<?php
if ($row['days']>0){
	echo '<div>Указанные параметры на подбор жилья</div>
	<div>
	Город: '.$row['vsity'].'<br>
	Район: '.$row['vraion'].'<br>
	Тип недвижимости: '.$row['vtype'].'<br>
	Стоимость аренды: до '.$row['vprice'].'
	</div>
	<div>Уважаемый,'.$row['fio'].',Вам открыт доступ к контактным данным собственика, согластно Вашим заявленым параметрам.</div>
	';
}
?>
</div>
<div class="bottom">  
  <div class="info">
   <div class="i1"><a class="infoa" href="index.php">Главная</a><br><a class="infoa" href="work.php">Вакансии</a><br><a class="infoa" href="konkurs.php">Конкурсы</a></div>
   <div class="i2"><a class="infoa" href="arend.php">Снять жилье</a><br><a class="infoa" href="sdat.php">Сдать жилье</a></div>
   <div class="i3"><a class="infoa" href="info.php">Полезная информация</a></div>
  </div> 
<div class="bottominf"> 2013-2016 Городская служба заселения.</div>
</div>
</body>
</HTML>