<?php
/*$urla="http://youon.ru/"; //Адрес
session_start();

if(count($_POST)>0){
	if(isset($_SESSION['captcha_keystring']) && strtolower($_SESSION['captcha_keystring']) == strtolower($_POST['keystring'])){
//Здесь расположен код исполнения в случае верного ввода капчи
//echo "<script>window.location = '".$urla."';</script>"; //У нас это переадресация на страницу в переменной $urla
	}else{
		echo '<p style="color:#ff0f0f;">Ошибка - неправильный ввод числа</p>';
	}
}*/
?>
<HTML>
<head>
<title>Городская служба заселения</title>
<link rel="shortcut icon" href="source/tit.png" type="image/x-icon">
<link href="styles/style.css", type="text/css", rel="stylesheet">
<link href="styles/swork.css", type="text/css", rel="stylesheet">
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
<script>
function pere()
{
  if (document.getElementById("tumblerr").style.display=="none")
  {
	document.getElementById("tumblerr").style.display="inline-block";
    document.getElementById("tumblerl").style.display="none";
    document.getElementById("restext").style.display="none";
    document.getElementById("resfile").style.display="block";
	document.getElementById("resume").setAttribute('name',"");
	document.getElementById("rfres").setAttribute('name',"rfres");
    	
  }else
  {
	document.getElementById("tumblerr").style.display="none";
    document.getElementById("tumblerl").style.display="inline-block";
    document.getElementById("restext").style.display="block";
    document.getElementById("resfile").style.display="none";
    document.getElementById("resume").setAttribute('name',"resume");
	document.getElementById("rfres").setAttribute('name',"");	
  }
}
function chk(obj)
{
  if (obj.value=='')
  {
	obj.style.border="1px solid red";
  }
}
function chkof(obj)
{
	obj.style.border="";
}

function checkinf()
{
	var a=document.getElementById('rfio').value;
    var b=document.getElementById('rcity').value;
	var c=document.getElementById('rtel').value;
	var d=document.getElementById('resume').value;
	var e=document.getElementById('rfres').value;
if ((a=='' || b=='' || c=='') && (d=='' || e==''))
 {
	 return false;
 }else
 {
	 return true;
 }	 
}
</script>
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
<div class="vkl"><div class="i-d navdiv"><a class="vklb" href="sdat.php">Сдать</a></div><div class="i-d navdiv"><a class="vklb" href="arend.php">Снять</a></div><div class="i-d aactive navdiv"><a class="vklb" style="color:white;" href="work.php">Работа у нас</a></div><div class="i-d navdiv"><a class="vklb" href="konkurs.php">Конкурсы</a></div></div>
<div class="contel"><img class="telimg" src="source/phone.png" height="25px" align="left"><span class="ctel">8 961 995 64 86</span><br><button class="but butconsl pointer" onclick="jQuery('#mask').show()">Получить консультацию</button></div>
</div>
<div class="bod">
<div class="bxsh xz" style="font-size:35px;text-align:center;font-weight:bold;">ПОЧЕМУ НУЖНО ВЫБИРАТЬ ИМЕННО НАШУ КОМПАНИЮ?</div>
<div class="textcent divcir"><div class="i-d cr"><div class="circle-blue"><img src="/source/vac1.png" height="60px;"></div>Команда<br>сильных<br>профессионалов</div><div class="i-d cr"><div class="circle-blue"><img src="/source/vac2.png" height="60px;"></div>Прозрачная<br>карьерная<br>лестница</div><div class="i-d cr"><div class="circle-blue"><img src="/source/vac3.png" height="60px;"></div>Своевременная<br>оплата</div><div class="i-d cr"><div class="circle-blue"><img src="/source/vac4.png" height="60px;"></div>Бесплатное<br>обучение<br>сотрудников</div><div class="i-d cr"><div class="circle-blue"><img src="/source/vac5.png" height="60px;"></div>Бесплатное<br>жилье для<br>иногородних<br>сотрудников</div></div>
<div class="content">
<div class="border1 ank">
<div class="textcent" style="font-size: 15px;font-weight: bold;margin-top:15px;">В компании GSZ открыты следующие вакансии:</div>
<div class="textcent" style="margin-bottom: 15px;">(отметьте наиболее интересные для себя сферы деятельности)</div>
<form method="post" action="act.php?type=work">
<div class="" style="font-size:13px;">
 <div class="i-d margl15">
   <input id="v11" name="pred[]" value="1" type="checkbox"><label for="v11">Менеджер по работе с клиентами</label>
   <input id="v12" name="pred[]" value="2" type="checkbox"><label for="v12">Начинающий специалист</label>
   <input id="v13" name="pred[]" value="3" type="checkbox"><label for="v13">Администратор офиса</label>
   <input id="v14" name="pred[]" value="4" type="checkbox"><label for="v14">Помошник руководителя</label>
   <input id="v15" name="pred[]" value="5" type="checkbox"><label for="v15">Менеджер активных продаж</label>
   <input id="v16" name="pred[]" value="6" type="checkbox"><label for="v16">Оператор Call-центра</label>
 </div>
</div>  
<div class="line" style="left:5%;width:90%;margin:20px 0px;"></div>
<div class="vinf">
 <div class="resleft">
 <div class="span5">Личная информация</div>
 <input class="inp" id="rfio" name="rfio" type="text" onBlur="chk(this);" onFocus="chkof(this);" placeholder="Ф.И.О"><br>
 <select class="inp" style="display:block;" id="rcity" name="rcity">
	 <option>Барнаул</option>
	 <option>Новосибирск</option>
   </select>
<div class="cdtel" style="display:inline-block;text-align: center;top:-1;margin-top:0;padding-top: 3px;height:25px;">+7</div><input class="inp" style="width: 273px;" id="rtel" name="rtel" type="tel" pattern="[0-9]{10}" maxlength="10" onBlur="chk(this);" onFocus="chkof(this);" placeholder="(###) ###-##-##"> 
</div>
<div class="resright" style="max-height: 220px;min-height: 220px;overflow: hidden;width: 310px;">
<div class="span5">Резюме</div>
<div class="tumbler pointer" onClick="pere();"><div class="i-d navdiv">НАПИСАТЬ</div><img id="tumblerl" src="/source/tubmlerleft.png" height="20px;" width="60px;" style="display:inline-block;"><img id="tumblerr" src="/source/tubmlerright.png" height="20px;" width="60px;" style="display:none;"><div class="i-d navdiv">ПРИКРЕПИТЬ</div></div>
<div id="restext">
<textarea onBlur="chk(this);" onFocus="chkof(this);" id="resume" name="resume" placeholder="Резюме" rows="6" cols="40"></textarea>
</div>
<div id="resfile" style="display:none;">
<input id="rfres" name="" type="file">
</div>
</div>
<button onClick="return checkinf();" class="but butconsl pointer" style="margin-left:580px;">Отправить резюме</button>
</div>
</form>
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
<div class="fcheck" style="display:none;">
<p>Введите капчу:</p>
<p><img title="Если Вы не видите число на картинке, нажмите на картинку мышкой" onclick="this.src=this.src+'&amp;'+Math.round(Math.random())" src="captcha/imaga.php?<?php echo session_name()?>=<?php echo session_id()?>">	
<p><input type="text" name="keystring"><input type="submit" value="ОК"></p>
<p style="font-size:10px;">Если не видишь код - кликни по картинке</p>
<?php
unset($_SESSION['captcha_keystring']);
?>
</div>
<div class="konsult pointer" onclick="jQuery('#mask').show()">
Получить консультацию
</div>
</body>
</HTML>