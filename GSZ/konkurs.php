<?php
include 'mainfun.php';
connectdb();
$res = mysql_query("SELECT SQL_CALC_FOUND_ROWS * FROM Fotokon WHERE win != 1 ");
$row= mysql_fetch_assoc($res);
$rr  = mysql_query("SELECT FOUND_ROWS()");
$col = mysql_result($rr,0);
?>
<HTML>
<head>
<title>Городская служба заселения</title>
<link rel="shortcut icon" href="source/tit.png" type="image/x-icon">
<link href="styles/style.css", type="text/css", rel="stylesheet">
<link href="styles/skon.css", type="text/css", rel="stylesheet">
<link href="styles/jcarousel.transitions.css", type="text/css", rel="stylesheet">
<script type="text/javascript" src="/js/modernizr.js"></script>
<script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/js/jcarousel.transitions.js"></script>
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
<script>
var i=-4;

function fw(pr)
{
if (pr==1) {i=i+4;}
if (pr==0 && i>0){i=i-4;}
if ((i>=0))
 {	
   $$a({
        type:'post',
        url:'ajax.php',
        data:{'st':i},
        response:'text',
        success:function (data) {
		 if (data.length>1)
		 {
		 x=data.split('||');
		 y=x[1].split('|');
		 setTimeout(function(){$('.x1').fadeOut('fast')},0);
		 if (y[0]!=undefined){setTimeout(function(){$('.x1').fadeIn('slow')},500);
		 document.getElementById("fwi1").setAttribute('src',y[0]);
		 }
		 setTimeout(function(){$('.x2').fadeOut('fast')},0);
		 if (y[1]!=undefined){setTimeout(function(){$('.x2').fadeIn('slow')},1000);
		 document.getElementById("fwi2").setAttribute('src',y[1]);
		 }
		 setTimeout(function(){$('.x3').fadeOut('fast')},0);
		 if (y[2]!=undefined){setTimeout(function(){$('.x3').fadeIn('slow')},1500);
		 document.getElementById("fwi3").setAttribute('src',y[2]);
		 }
		 setTimeout(function(){$('.x4').fadeOut('fast')},0);
		 if (y[3]!=undefined){setTimeout(function(){$('.x4').fadeIn('slow')},2000);
		 document.getElementById("fwi4").setAttribute('src',y[3]);
		 }		 
		 }else
		 {
			 i=i-4;
		 }
		}
    });
 
 }
}
function fu(j)
{
 $$a({
        type:'post',
        url:'ajax.php',
        data:{'stu':j},
        response:'text',
        success:function (data) {
		 if (data.length>1)
		 {
		 x=data.split('||');
		 y=x[1].split('|');
		 setTimeout(function(){$('.y1').fadeOut('fast')},0);
		 if (y[0]!=undefined){setTimeout(function(){$('.y1').fadeIn('slow')},500);
		 document.getElementById("fi1").setAttribute('src',y[0]);
		 document.getElementById("l1").setAttribute('name',y[0]);
		 collike(document.getElementById("l1").getAttribute("name"),'kl1');
		 }
		 setTimeout(function(){$('.y2').fadeOut('fast')},0);
		 if (y[1]!=undefined){setTimeout(function(){$('.y2').fadeIn('slow')},1000);
		 document.getElementById("fi2").setAttribute('src',y[1]);
		 document.getElementById("l2").setAttribute('name',y[1]);
		 collike(document.getElementById("l2").getAttribute("name"),'kl2');
		 }
		 setTimeout(function(){$('.y3').fadeOut('fast')},0);
		 if (y[2]!=undefined){setTimeout(function(){$('.y3').fadeIn('slow')},1500);
		 document.getElementById("fi3").setAttribute('src',y[2]);
		 document.getElementById("l3").setAttribute('name',y[2]);
		 collike(document.getElementById("l1").getAttribute("name"),'kl3');
		 }
		 setTimeout(function(){$('.y4').fadeOut('fast')},0);
		 if (y[3]!=undefined){setTimeout(function(){$('.y4').fadeIn('slow')},2000);
		 document.getElementById("fi4").setAttribute('src',y[3]);
		 document.getElementById("l4").setAttribute('name',y[3]);
		 collike(document.getElementById("l4").getAttribute("name"),'kl4');		 
		 }
		 setTimeout(function(){$('.y5').fadeOut('fast')},0);
		 if (y[4]!=undefined){setTimeout(function(){$('.y5').fadeIn('slow')},500);
		 document.getElementById("fi5").setAttribute('src',y[4]);
		 document.getElementById("l5").setAttribute('name',y[4]);
		 collike(document.getElementById("l1").getAttribute("name"),'kl5');		 
		 }
		 setTimeout(function(){$('.y6').fadeOut('fast')},0);
		 if (y[5]!=undefined){setTimeout(function(){$('.y6').fadeIn('slow')},1000);
		 document.getElementById("fi6").setAttribute('src',y[5]);
		 document.getElementById("l6").setAttribute('name',y[5]);
		 collike(document.getElementById("l6").getAttribute("name"),'kl6');
		 }
		 setTimeout(function(){$('.y7').fadeOut('fast')},0);
		 if (y[6]!=undefined){setTimeout(function(){$('.y7').fadeIn('slow')},1500);
		 document.getElementById("fi7").setAttribute('src',y[6]);
		 document.getElementById("l7").setAttribute('name',y[6]);
		 collike(document.getElementById("l7").getAttribute("name"),'kl7');
		 }
		 setTimeout(function(){$('.y8').fadeOut('fast')},0);
		 if (y[7]!=undefined){setTimeout(function(){$('.y8').fadeIn('slow')},2000);
		 document.getElementById("fi8").setAttribute('src',y[7]);
		 document.getElementById("l8").setAttribute('name',y[7]);
		 collike(document.getElementById("l8").getAttribute("name"),'kl8');
		 }
		 setTimeout(function(){$('.y9').fadeOut('fast')},0);
		 if (y[8]!=undefined){setTimeout(function(){$('.y9').fadeIn('slow')},500);
		 document.getElementById("fi9").setAttribute('src',y[8]);
		 document.getElementById("l9").setAttribute('name',y[8]);
		 collike(document.getElementById("l9").getAttribute("name"),'kl9');
		 }
		 setTimeout(function(){$('.y10').fadeOut('fast')},0);
		 if (y[9]!=undefined){setTimeout(function(){$('.y10').fadeIn('slow')},1000);
		 document.getElementById("fi10").setAttribute('src',y[9]);
		 document.getElementById("l10").setAttribute('name',y[9]);
		 collike(document.getElementById("l10").getAttribute("name"),'kl10');
		 }
		 setTimeout(function(){$('.y11').fadeOut('fast')},0);
		 if (y[10]!=undefined){setTimeout(function(){$('.y11').fadeIn('slow')},1500);
		 document.getElementById("fi11").setAttribute('src',y[10]);
		 document.getElementById("l11").setAttribute('name',y[10]);
		 collike(document.getElementById("l11").getAttribute("name"),'kl11');
		 }
		 setTimeout(function(){$('.y12').fadeOut('fast')},0);
		 if (y[11]!=undefined){setTimeout(function(){$('.y12').fadeIn('slow')},2000);
		 document.getElementById("fi12").setAttribute('src',y[11]);
		 document.getElementById("l12").setAttribute('name',y[11]);
		 collike(document.getElementById("l12").getAttribute("name"),'kl12');}
		 }			 
}
});
}
function bigp(obj)
{
 var x=obj.getAttribute('src');
 var img= new Image();
 document.getElementById('slimg').setAttribute("src",x);
 img.src=document.getElementById('slimg').src;
 if (document.body.clientWidth<img.width || document.body.clientHeight<img.height)
 {
 document.getElementById('sli').style.left=document.body.clientWidth/2-img.width/4;
 document.getElementById('sli').style.top=document.body.clientHeight/2-img.height/4;
 document.getElementById('sli').style.height=img.height/2; 
 document.getElementById('sli').style.width=img.width/2;
 document.getElementById('g1').style.height=img.height/2;
 document.getElementById('g1').style.width=img.width/2; 
 document.getElementById('slimg').style.height=img.height/2; 
 document.getElementById('slimg').style.width=img.width/2;
 }else{
 document.getElementById('sli').style.left=document.body.clientWidth/2-img.width/2;
 document.getElementById('sli').style.top=document.body.clientHeight/2-img.height/2;
 document.getElementById('sli').style.height=img.height; 
 document.getElementById('sli').style.width=img.width;
 document.getElementById('g1').style.height=img.height;
 document.getElementById('g1').style.width=img.width;
 }
} 

function like(obj)
{
 var n=obj.name;
  $$a({
        type:'post',
        url:'ajax.php',
        data:{'lf':n},
        response:'text',
        success:function (data) {
		 collike(n,'kl'+obj.id[1]);
		}			
 });
}

function collike(n,obj)
{
  $$a({
        type:'post',
        url:'ajax.php',
        data:{'like':n},
        response:'text',
        success:function (data) {
		  document.getElementById(obj).innerHTML=data;
		}			
 });	
}

function realimg()
{
	
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
<div class="vkl"><div class="i-d navdiv"><a class="vklb" href="sdat.php">Сдать</a></div><div class="i-d navdiv"><a class="vklb" href="arend.php">Снять</a></div><div class="i-d navdiv"><a class="vklb" href="work.php">Работа у нас</a></div><div class="i-d aactive navdiv"><a class="vklb" style="color:white;" href="konkurs.php">Конкурсы</a></div></div><div class="contel"><img class="telimg" src="source/phone.png" height="25px" align="left"><span class="ctel">8 961 995 64 86</span></div>
</div>
<div class="bod">
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
<div class="content border1" style="padding: 10px;">
<div class="textcent" style="font-size: 20px;font-weight: bold;margin-bottom: 10px;color:#FF7E26;">Подарочный серификат меняем на улыбки!</div>
<div style="font-size: 16px;"><img src="/source/kon.jpg" class="konlogo">Еженедельно в нашей компании проводиться конкурс "Улыбка недели" и в качестве призов разыгрыватся "Подарочная карта Эльдорадо" на сумму 5000 рублей.
<p class="tbold">Как принять участие в конкурсе "Улыбка недели" и какие правила на определение победителя?</p>
<ul class="ful">
<li>Обратиться за помощью в поиске жилья в любой из офисов нашей компании и стать клиентом.</li>
<li>В офисе компании сделать фотографию с улыбкой на лице и договором на оказание услуг нашей компании.</li>
<li>Оставить личному менеджеру свой, постоянно доступный номер телефона, для связи с Вами.</li>
<li>Победитель определяется максимальным количеством голосов среди участников конкурса.</li>
<li>За самую яркую улыбку будут голосовать сотрудники Сибирских филиалов, а также посетители Нашего сайта arenDoms.ru</li>
<li>Следить за процессом и результатами голосования Вы сможете на Нашем сайте arenDoms.ru в разделе "Конкурсы".</li>
</ul>
<p class="tbold">Примечание:</p>
Если в течении пяти дней с момента Вашей победы с Вами не сможет связаться менеджер компании, отвечающий за проведение и результаты конкурса, победителем автоматически становиться участник, занявший второе место.
</div>
</div>
<div class="foto">
<div class="linegreen"></div>
<div class="fotowin">
<div class="textcent" style="font-size:24px;margin-bottom:20px;">Победители нашего конкурса</div>
<div onclick="fw(0);" class="i-d str pointer" style="background: url(source/strleft.png); background-size:cover;"></div>
<div style="position:relative;display:inline-block;width:1040px;height:216px;">
<div id="fwb1" class="dfoto x1" style="display:none;margin-left:20px;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fwi1" src="" height="200px;" width="200px;"><div id="fwc1" class="fotobottom">Sity<div style="float:right;margin-right:10px;"></div></div></div>
<div id="fwb2" class="dfoto x2" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fwi2" src="" height="200px;" width="200px;"><div id="fwc2" class="fotobottom">Sity<div style="float:right;margin-right:10px;"></div></div></div>
<div id="fwb3" class="dfoto x3" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fwi3" src="" height="200px;" width="200px;"><div id="fwc3" class="fotobottom">Sity<div style="float:right;margin-right:10px;"></div></div></div>
<div id="fwb4" class="dfoto x4" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fwi4" src="" height="200px;" width="200px;"><div id="fwc4" class="fotobottom">Sity<div style="float:right;margin-right:10px;"></div></div></div>
</div>
<div onclick="fw(1);" class="i-d str pointer" style="background: url(source/strright.png); background-size:cover;"></div>
<script>fw(1);</script>
</div>
<div class="linegreen"></div>
<div class="fotous">
<div class="fotok">
<div style="position:relative;display:inline-block;width:1040px;height:216px;">
<div id="fwb1" class="dfoto y1" style="display:none;margin-left:20px;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi1" src="" height="200px;" width="200px;"><div id="fwc1" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l1" name="" class="pointer" onclick="like(this)" src="/source/like.png"><span id="kl1">0</span></div></div></div>
<div id="fwb2" class="dfoto y2" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi2" src="" height="200px;" width="200px;"><div id="fwc2" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l2" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl2">0</span></div></div></div>
<div id="fwb3" class="dfoto y3" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi3" src="" height="200px;" width="200px;"><div id="fwc3" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l3" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl3">0</span></div></div></div>
<div id="fwb4" class="dfoto y4" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi4" src="" height="200px;" width="200px;"><div id="fwc4" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l4" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl4">0</span></div></div></div>
</div>
</div>
<div class="fotok">
<div style="position:relative;display:inline-block;width:1040px;height:216px;">
<div id="fwb1" class="dfoto y5" style="display:none;margin-left:20px;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi5" src="" height="200px;" width="200px;"><div id="fwc1" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l5" name="" class="pointer" onclick="like(this)" src="/source/like.png"><span id="kl5">0</span></div></div></div>
<div id="fwb2" class="dfoto y6" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi6" src="" height="200px;" width="200px;"><div id="fwc2" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l6" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl6">0</span></div></div></div>
<div id="fwb3" class="dfoto y7" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi7" src="" height="200px;" width="200px;"><div id="fwc3" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l7" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl7">0</span></div></div></div>
<div id="fwb4" class="dfoto y8" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi8" src="" height="200px;" width="200px;"><div id="fwc4" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l8" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl8">0</span></div></div></div>
</div>
</div>
<div class="fotok">
<div style="position:relative;display:inline-block;width:1040px;height:216px;">
<div id="fwb1" class="dfoto y9" style="display:none;margin-left:20px;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi9" src="" height="200px;" width="200px;"><div id="fwc1" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l9" name="" class="pointer" onclick="like(this)" src="/source/like.png"><span id="kl9">0</span></div></div></div>
<div id="fwb2" class="dfoto y10" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi10" src="" height="200px;" width="200px;"><div id="fwc2" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l10" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl10">0</span></div></div></div>
<div id="fwb3" class="dfoto y11" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi11" src="" height="200px;" width="200px;"><div id="fwc3" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l11" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl11">0</span></div></div></div>
<div id="fwb4" class="dfoto y12" style="display:none;"><img class="pointer" onclick="bigp(this); jQuery('#slider').show();" id="fi12" src="" height="200px;" width="200px;"><div id="fwc4" class="fotobottom">Sity<div style="float:right;margin-right:10px;"><img id="l12" name="" onclick="like(this)" class="pointer" src="/source/like.png"><span id="kl12">0</span></div></div></div>
</div>
</div>
<div class="dpgf"><?php for ($i=1;$i<=ceil($col/12);$i++){echo '<a class="pointer pgfoto" onClick="fu('.(($i-1)*12).');">'.$i.'</a> ';}?></div>
<script>fu(0);</script>
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
<div class="konsult pointer" onclick="jQuery('#mask').show()">
Получить консультацию
</div>
<div id="slider" onclick="jQuery('#slider').hide()">
 <div id="sli" class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                      <li id="g1"><img id="slimg" src=""></li>
                    </ul>
                </div>
             </div>
 </div>	
</body>
</HTML>