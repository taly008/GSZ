<HTML>
<head>
<title>Бесплатное размещение объявлений на arenDom.ru</title>
<link rel="shortcut icon" href="source/tit.png" type="image/x-icon">
<link href="styles/style.css", type="text/css", rel="stylesheet">
<link href="styles/ssdat.css", type="text/css", rel="stylesheet">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
<script>
function di()
{
 if (document.getElementById('typearend2').checked)
 {
  document.getElementById('bl2').style.display="block";
  document.getElementById('bl1').style.display="none";  
 }
 else
 {
  document.getElementById('bl2').style.display="none";
  document.getElementById('bl1').style.display="block";	 
 }
}

function chk(obj,el)
{
  if (obj.value=="" || obj.value==0)
  {
	  obj.style.border="1px solid red";
	  document.getElementById('messerr').style.top=el.top+35;
	  document.getElementById('messerr').style.left=el.left-5;
	  document.getElementById('messerr').style.display="inline-block";
	  setTimeout(function(){$('.merr').fadeOut('slow')},2500);
 }
}
  
function nobord(obj)
 {
 	obj.style.border="";
 }  
 
function chkbut()
{
	var a=document.getElementById('ch1').value;
	var b=document.getElementById('ch2').value;
	var c=document.getElementById('ch3').value;
	var d=document.getElementById('ch4').value;
	var e=document.getElementById('ch5').value;
	var f=document.getElementById('ch6').value;
	var g=document.getElementById('typearend1').checked;
if (a!="" && b!="" && c!="" && d!="" && d!=0 && ((g==true && ch5!=0) || (g==false && ch6!=0)))
{
	alert('all right!');
	return true;
}else	
{
  alert('false!');	
  return false;
} 
} 
function selrai(obj)
{
	document.getElementById('rc1').style.display="none";
	document.getElementById('rc2').style.display="none";
	switch(obj.selectedIndex)
	{
		case 0:
		document.getElementById('rc1').style.display="inline-block";
		break;
		case 1:
		document.getElementById('rc2').style.display="inline-block";
		break;
	}
}

</script>
</head>
<body class="body">
<div class="topline"></div>
<div class="top">
<div id="cit" onmouseover="selcity()" onmouseout="selcityclose()" style="position:absolute;width:250px;height:38px;left:250px;"><a id='user-city' class="pointer">Ваш город:</a>
<div id="dcitysel" class="dcitysel" style="display:none;">
<div class="goroda"><a class="agor" href="header.php?city=Барнаул&h=city&str=sdat">Барнаул</a></div>
<div class="goroda"><a class="agor" href="header.php?city=Новосибирск&h=city&str=sdat">Новосибирск</a></div>
</div>
</div>
<div id="tobu" class="topbut"><a href="login.php" id="in" style="display:none;" class="buttonT1 pointer">Войти</a><div id="out" class="divout" style="display:none;"><a href="lk.php?log=<?php echo $_COOKIE['login'];?>" style="border-radius:6px 0px 0px 6px; border-right:1px inset #999;" class="buttonT1 pointer">Личный кабинет</a><a href="" style="border-radius:0px 6px 6px 0px; border-left:1px inset #999;" onclick="logout();" class="buttonT1 pointer">Выйти</a></div></div>
<div class="logo"><a href="index.php"><img src="source/logo.png" class="logoimg"></a><br><span class="logotext bxsh">Городская служба заселения</span></div>
<div class="vkl"><div class="i-d aactive navdiv"><a class="vklb" style="color:white;" href="sdat.php">Сдать</a></div><div class="i-d navdiv"><a class="vklb" href="arend.php">Снять</a></div><div class="i-d navdiv"><a class="vklb" href="work.php">Работа у нас</a></div><div class="i-d navdiv"><a class="vklb" href="konkurs.php">Конкурсы</a></div></div><div class="contel"><img class="telimg" src="source/phone.png" height="25px" align="left"><span class="ctel">8 961 995 64 86</span><br><button class="but butconsl pointer" onclick="jQuery('#mask').show()">Получить консультацию</button></div>
</div>
<div class="bod">
<div class="top2text"><div class="top2t">Бесплатное размещение объявлений о сдаче недвижимости в аренду <span id="textcity"></span></div></div>
<div style="text-align:center;margin-top:25px;font-size:23px;color:#FF7E26;">Заполните форму, чтобы сдать квратиру</div>
<div class="content border1" style="width:94%; margin-top:10px;">
 <div class="dlsdat">
  <form method="POST" action="act.php?type=addobj" class="fsdat">
   <div class="span3">Ваши данные</div>
   <div class="dan"><span>Контактное имя*</span><input id="ch1" name="kname" class="zpol" type="text" onBlur="chk(this,this.getBoundingClientRect());" onFocus="nobord(this);"></div>
   <div class="dan"><div class="span4">Контактный телефон*</div><div style="position: absolute;left: 230px;top: 0px;margin-top: 0px;text-align: center;padding-top: 3px;height:25px;" class="cdtel1">+7</div><input id="ch2" onBlur="chk(this,this.getBoundingClientRect());" onFocus="nobord(this);" style="width:193px" class="cntel1 zpol" name="ctel1" type="tel" pattern="[0-9]{10}" maxlength="10" placeholder="(###) ###-##-##"></div>
   <div class="line" style="width:80%; left:10%"></div>
   <div class="span3">Адрес</div>
   <div class="dan"><span>Город</span><select id="vcit" onchange="selrai(this);" name="acity" class="zpol"><option id="cv1">Барнаул</option><option id="cv2">Новосибирск</option></select></div>
   <div class="dan"><span>Район</span><select id="rc1" name="araion" class="zpol" style="display:none;">
                                              <option>Центральный</option>
											  <option>Железнодорожный</option>
	                                          <option>Индустриальный</option>
										      <option>Ленинский</option>>
										      <option>Октябрьский</option>
									          </select>
										      <select id="rc2" name="araion" class="zpol" style="display:none;">
											  <option>Центральный</option>
											  <option>Железнодорожный</option>
	                                          <option>Дзержинский</option>
										      <option>Ленинский</option>>
										      <option>Октябрьский</option>
											  <option>Заельцовский</option>
											  <option>Советский</option>
											  <option>Кировский</option>
											  <option>Первомайский</option>
											  <option>Калининский</option>
									          </select>
											 


<script>var cc=getCookie('city');
 switch (cc)
			{
      		case 'Барнаул':
			document.getElementById('rc1').style.display="inline-block";
			document.getElementById('cv1').setAttribute('selected','selected');
			break;
			case 'Новосибирск':
			document.getElementById('rc2').style.display="inline-block";
			document.getElementById('cv2').setAttribute('selected','selected');
    		break;
			}							
</script>
</div>	 
   <div class="dan"><span>Улица*</span><input id="ch3" onBlur="chk(this,this.getBoundingClientRect());" onFocus="nobord(this);" name="street" class="zpol" type="text"></div>
   <div class="dan"><span>Номер дома*</span><input id="ch4" onBlur="chk(this,this.getBoundingClientRect());" onFocus="nobord(this);" name="nohome" class="zpol" type="text"></div>
   <div class="line" style="width:80%; left:10%"></div>
   <div class="span3">Параметры объявления</div>
   <div class="dan"><label for="typearend1">Долгосрочная аренда</label><input checked type="radio" name="typearend" value="1" id="typearend1" onClick="di();"><label for="typearend2">Посуточная аренда</label><input type="radio" name="typearend" id="typearend2" value="2" onClick="di();"></div>
   <div id="bl1">
   <div class="dan"><span>Тип недвижимости</span><select name="atype" class="zpol"><option>1-комнатная</option>
											  <option>2-комнатная</option>
	                                          <option>3-комнатная</option>
										      <option>4-комнатная</option>>
										      <option>Дом</option>
											  <option>Пол дома</option>
											  <option>Студия</option>
											  <option>Общежитие</option>
									  </select>
   </div>
   <div class="dan"><div class="span4">Цена за месяц*</div><input id="ch5" onBlur="chk(this,this.getBoundingClientRect());" onFocus="nobord(this);" style="width:193px" class="cntel1 zpol" name="pricem" type="number" maxlength="10"><div style="position: absolute;left: 230px;top: 0px;margin-top: 0px;text-align: center;padding-top: 3px;height:25px;" class="cdtel1">р.</div></div>
   </div>
   <div id="bl2" style="display:none;">
   <div class="dan"><span>Тип недвижимости</span><select name="atype1" class="zpol"><option>1-комнатная</option>
											  <option>2-комнатная</option>
	                                          <option>3-комнатная</option>
										      <option>4-комнатная</option>>
										      <option>Дом</option>
											  <option>Пол дома</option>
											  <option>Студия</option>
											  <option>Общежитие</option>
									  </select>
   </div>
   <div class="dan"><div class="span4">Цена за месяц*</div><input id="ch6" onBlur="chk(this,this.getBoundingClientRect());" onFocus="nobord(this);" name="pricem1" style="width:193px" class="cntel1 zpol" name="ctel1" type="number" maxlength="10"><div style="position: absolute;left: 230px;top: 0px;margin-top: 0px;text-align: center;padding-top: 3px;height:25px;" class="cdtel1">р.</div></div>
   <div class="dan"><div class="span4">Цена за сутки</div><input name="pricew" style="width:193px" class="cntel1 zpol" name="ctel1" type="number" maxlength="10"><div style="position: absolute;left: 230px;top: 0px;margin-top: 0px;text-align: center;padding-top: 3px;height:25px;" class="cdtel1">р.</div></div>
   <div class="dan"><div class="span4">Цена за час</div><input name="priced" style="width:193px" class="cntel1 zpol" name="ctel1" type="number" maxlength="10"><div style="position: absolute;left: 230px;top: 0px;margin-top: 0px;text-align: center;padding-top: 3px;height:25px;" class="cdtel1">р.</div></div>
   <div class="dan"><span>Класс</span><select name="class" class="zpol"><option>Эконом</option>
											  <option></option>
	                                          <option></option>
										      <option></option>>
									  </select>
   </div>
   <div class="dan"><span>Количество спальных мест</span><div class="bkk">1<input checked value="1" class="kk" type="radio" name="spalmes">2<input value="2" class="kk" type="radio" name="spalmes">3<input value="3" class="kk" type="radio" name="spalmes">4<input value="4" type="radio" name="spalmes"></div></div>
   </div> 
   <div class="line" style="width:80%; left:10%"></div>
   <div class="span3">Дополнительная информация</div>
   <div class="dan"><span style="width:160px; display: inline-block;">Дополнительная информация и пожелания арендаторам</span><div style="display:inline;"><textarea name="com" class="zpol" style="height:auto;" cols="25" rows="4"></textarea></div></div>
   <div class="dan"><span style="width:160px; display: inline-block;">Изображения объекта</span><input name="imgf" class="zpol" type="file"></div>
   <button onClick="return chkbut();" class="but butconsl pointer" style="margin-left:200px;">Добавить объявление</button>
  </form>
 </div>
<div class="polinfo">
<h3>Полезная информация</h3>
<ul class="sinf">
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=1">Особенности бизнеса на сдаче квартир в аренду</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=2">Хочешь сдать квартиру в аренду? Застрахуй!</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=3">Как быть с недобросовестными квартирантами?</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=4">Уголовная ответственность при сдаче жилья в аренду</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=5">Кто должен оплачивать ремонт коммуникаций в съемной квартире</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=6">Квартира, купленная в ипотеку: сдавать или нет?</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=7">Как собственнику сэкономить на ремонте, сдавая квартиру</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=8">Кто должен оплачивать счета в арендованной квартире?</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=9">Как подготовить квартиру к аренде?</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=10">Ответственность и штраф за незаконную сдачу жилья в аренду</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=11">Надо ли платить налоги при сдаче квартиры в аренду?</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=12">Страховые депозиты: обезопасить себя от квартирантов</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=13">Как выбрать арендатора, которому можно доверить свое имущество</a></li>
<li style="margin-bottom:10px;"><a class="infoa" href="info.php?i=14">Как досрочно расторгнуть договор аренды квартиры?</a></li>

</ul>
</div>
<div class="rules">Заполняя данную форму, я принимаю и соглашаюсь со всеми пунктами <a class="infoa" href="info.php?i=0">пользовательского соглашения.</a></div>
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
<div class="konsult pointer" onclick="jQuery('#mask').show()">
Получить консультацию
</div>
<div id="messerr" class="merr" style="display:none;">
Поля с * обязательны для заполнения
</div>
</body>
</HTML>