<HTML>
<head>
<title>Городская служба заселения</title>
<link rel="shortcut icon" href="source/tit.png" type="image/x-icon">
<link href="styles/style.css", type="text/css", rel="stylesheet">
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
</head>
<body class="body">
<div class="topline"></div>
<div class="top">
<div id="cit" onmouseover="selcity()" onmouseout="selcityclose()" style="position:absolute;width:250px;height:38px;left:250px;">
<a id='user-city' class="pointer">Ваш город:</a>
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
<div class="top2text"><div class="top2t">Аренда жилья без комиссии</div></div>
<div class="content">
<div class="cb1" style="height:300px;margin-top:40px;position:relative;">
<h1 class="bxsh">Наши приемущества</h1>
<div><div class="i-t div1" style="margin-left:0px;"><img src="source/main1.png" class="img5"><div class="span7">Без риелторов</div>Мы проверяем каждое объявление и гарантируем, что нет риелторов!</div><div class="i-t div1"><img src="source/main3.png" class="img5"><div class="span7">Большая база</div>До 50 новых объявлений ежедневно.</div><div class="i-t div1"><img src="source/main2.png" class="img5"><div class="span7">Удобная рассылка</div>Получайте СМС со свежими объявлениями.</div></div>
</div> 
 <div class="border1 cb1 bgb" style="height:370px;margin-bottom:50px;color:white;">
 <h1 class="bxsh">Причины работать с нами</h1>
  <div><div class="i-t div1" style="margin-left:0px;"><img src="source/main4.png" class="img2" style="left: 50px;"><div class="span7">Это быстро</div>80% квартир на arenDom.ru сдаются в первую неделю. Разумеется, при том условии, что вы выставили адекватную цену.</div><div class="i-t div1"><img src="source/main5.png" class="img2" style="left: 70px;"><div class="span7">Приличная публика</div>arenDom.ru не глобальная доска объявлений,на которой собираются всякие подозрительные личности. У нас сайт «для своих» и публика — соответствующая, приличная.</div><div class="i-t div1"><img src="source/main6.png" class="img2" style="left: 65px; height:90px;"><div class="span7">Гарантия от неудачного заселения</div>Бесплатное перезаселение в течении 1 месяца, если Вас не устроило жилье</div></div>
 </div>
<div class="cb1" style="margin-bottom:50px;">
<h1 class="bxsh">Наши специалисты окажут Вам всестороннюю консультацию</h1>
<div style="height:30px;"></div>
<ul class="ull" style="text-align:left; right:0px; position:relative; display:inline-block;">
<li>поиск и подбор недвижимости</li>
<li>переговоры и торги с собственниками</li>
<li>организация встреч для просмотра объектов</li>
<li>юридическое сопровождение сделок</li>
<li>страхование недвижимого имущества и ответственности сторон</li>
<li>выезд на просмотр жилья с нашим специалистом на нашем корпаративным авто</li>
</ul>
<img src="source/mfnov.jpg" class="img3" align="right" style="right:20px;position:relative;">
</div>
<div class="cb1 border1 bgb" style="height:320px;color:white;">
<h1 class="bxsh">Оплати доступ к собственникам вашего города на сайте</h1>
<div><div class="i-t div1" style="margin-left:0px;"><img src="source/stMap.png" class="img4"><div class="span7">Выберите город</div>В которм Вы желаете найти квартиру или в Ваш город</div><div class="i-t div1"><img src="source/stPencil.png" class="img4"><div class="span7">Зарегестрируйтесь</div> и активируйте аккаунт</div><div class="i-t div1"><img src="source/stPhone.png" class="img4"><div class="span7">Звоните собственникам</div>на прямую без посредников</div></div>
<a href="" class="buttonT1 pointer">Получить доступ</a>
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
</body>
</HTML>