<HTML>
<head>
<title>Городская служба заселения</title>
<link rel="shortcut icon" href="source/tit.png" type="image/x-icon">
<link href="styles/style.css", type="text/css", rel="stylesheet">
<link href="styles/ssdat.css", type="text/css", rel="stylesheet">
<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
<script>
log=document.getElementById('log').value;
function login()
{
var pass=document.getElementById('pass').value;
log=document.getElementById('log').value;
document.getElementById('errlp').style.display="none";
document.getElementById('errnowr').style.display="none"; 
if (log==' ' || log==' '){document.getElementById('errnowr').style.display="block";}	
else if (pass=='' || pass==' '){document.getElementById('errnowr').style.display="block";}
else{
$$a({
        type:'post',
        url:'ajax.php',
        data:{'login':log,'pass':pass},
        response:'text',
        success:function (data) {
			if (data=='false'){document.getElementById('errlp').style.display="block";}else{document.location.href="lk.php?log="+log;}
			x=data.split('||');
			setCookie('id',x[0]);
			setCookie('login',x[1]);
			setCookie('pass',x[2]);
			setCookie('fio',x[3]);
			setCookie('vsity',x[4]);
			setCookie('vraion',x[5]);
			setCookie('vtype',x[6]);
			setCookie('vprice',x[7]);
		}
    });
}
return false;
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
<div class="vkl"><div class="i-d navdiv"><a class="vklb" href="sdat.php">Сдать</a></div><div class="i-d navdiv"><a class="vklb" href="arend.php">Снять</a></div><div class="i-d navdiv"><a class="vklb" href="work.php">Работа у нас</a></div><div class="i-d navdiv"><a class="vklb" href="konkurs.php">Конкурсы</a></div></div><div class="contel"><img class="telimg" src="source/phone.png" height="25px" align="left"><span class="ctel">8 961 995 64 86</span><br><button class="but butconsl pointer" onclick="jQuery('#mask').show()">Получить консультацию</button></div>
</div>
<div class="bod">
<div style="position:relative;left:50%;margin:53px 0px 53px -150px;width:250px;text-align:center;border:1px solid #CCCCCC;box-shadow:rgba(0,0,0,.8) 0 2px 6px 2px;border-radius:10px;">
<form method="post" action="lk.php">
<span style="position:relative;font-weight:bold;font-size:20px;">Вход</span><br><br>
<span>Телефонный номер</span><br>
<div style="position: relative;display:inline-table; width: 25px;height: 19px;line-height:18px;background: #EEEEEE;border: 1px solid #CCCCCC;">+7</div><input style="width:145px;" id="log" name="tlog"  type="tel" pattern="[0-9]{10}" maxlength="10" placeholder="(###) ###-##-##"><br>
<span>Пароль</span><br>
<input id="pass" style="margin-top:10px;" type="password"><br>
<span id="errlp" style="display:none;">Неверный логин или пароль!</span>
<span id="errnowr" style="display:none;">Введите логин и пароль!</span>
<button class="but pointer" onclick="return login();">Вход</button>
</form>
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