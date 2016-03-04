<?php
include 'mainfun.php';
selcity();
$tp = ($_GET['page']-1)*10;
       if ($_GET['page']<=1)
	   {
		   $tp = 0;
	   }
if (isset($_GET['arcity']))
{
selcityb($_GET['arcity']);	 
}
if ($_GET['arrai']!='')
{
$rr=$_GET['arrai'];	 
}else {$rr='%';}
if ($_GET['artype']!='')
{
$tt=$_GET['artype'];
}else {$tt='%';}
if ($_GET['arsum1']!='')
{
$p1=$_GET['arsum1'];
}else {$p1=0;}
if ($_GET['arsum2']!='')
{
$p2=$_GET['arsum2'];
}else {$p2=200000;} 
$res = mysql_query("SELECT SQL_CALC_FOUND_ROWS * FROM db WHERE Raion LIKE '$rr' AND Type LIKE '$tt' AND Prise BETWEEN '$p1' AND '$p2' AND del != 1 AND checked = 1 LIMIT $tp , 10");
$rr  = mysql_query("SELECT FOUND_ROWS()");
$col = mysql_result($rr,0);
$i=1;
?>
<HTML>
<head>
<title>Городская служба заселения</title>
<link rel="shortcut icon" href="source/tit.png" type="image/x-icon">
<link href="styles/style.css", type="text/css", rel="stylesheet">
<link href="styles/sarend.css", type="text/css", rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/scripts.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
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

function randtel(t,obj)
{var el=obj;
 var p1="<?php echo $_GET['arcity']; ?>";
 var p2="<?php echo $_GET['arrai']; ?>";
 var p3="<?php echo $_GET['artype']; ?>";
 var p4="<?php echo $_GET['arsum2']; ?>"; 
 var r=Math.floor(Math.random() * 9 + 1);
 var arr=["+7 961 995 64 86","+7 961 995 64 00","+7 961 995 64 11","+7 961 995 64 22","+7 961 995 64 33","+7 961 995 64 44","+7 961 995 64 55","+7 961 995 64 66","+7 961 995 64 77","+7 961 995 64 88"]; 
  if (document.getElementById('oftel'+t).innerHTML=='Позвонить')
 {
	  if (p1==getCookie('vsity') && p2==getCookie('vraion') && p3==getCookie('vtype') && p4==getCookie('vprice'))
	 { 
	 	while (el.id != obj.id.replace(/doftel/g, ''))
	{
		el=el.parentNode;
	}
		$$a({
        type:'post',
        url:'ajax.php',
        data:{'id':el.getAttribute("name"),'city':getCookie('vsity'),'randtel':1},
        response:'text',
        success:function (data) {
	    document.getElementById('oftel'+t).innerHTML='+7'+data;
        document.getElementById('doftel'+t).style.width="135px";
        document.getElementById('cc'+t).setAttribute('href',document.getElementById('cc'+t).getAttribute('href')+'&t='+data);
		}
    });  
	  }else{ 
      document.getElementById('oftel'+t).innerHTML=arr[r];
      document.getElementById('doftel'+t).style.width="135px";
      document.getElementById('cc'+t).setAttribute('href',document.getElementById('cc'+t).getAttribute('href')+'&t='+arr[r]);
	  } 
 }
 }
$(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 200000,
	  step: 500,
      values: [ 0, 200000 ],
      slide: function( event, ui ) {
        $( "#amount1" ).val(ui.values[ 0 ] );
		$( "#amount2" ).val(ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
window.onscroll = function() {
document.getElementById('errobj').style.display="none";
document.getElementById('msg2').style.display="none";
document.getElementById('msg4').style.display= "none";
document.getElementById('msg5').style.display= "none";
}

 function clerr(eid,posi)
 {
  if (document.getElementById('errobj').style.display != "none") {document.getElementById('errobj').style.display="none";} else
	  {  document.getElementById('errobj').style.display="inline-block";}
  document.getElementById('errobj').style.top=posi.top+25;
  document.getElementById('errobj').style.left=posi.left;
  document.getElementById('errobj').setAttribute('name', eid);
  document.getElementById('err41').value='';
 }

function rdc(eid,posi)
{
	if (document.getElementById('msg4').style.display != "none") {document.getElementById('msg4').style.display="none";} else
	  {  document.getElementById('msg4').style.display="inline-block";}
  document.getElementById('msg4').style.top=posi.top+25;
  document.getElementById('msg4').style.left=posi.left;
  document.getElementById('msg4').setAttribute('name', eid);
  document.getElementById('msg5').style.display="none";  
} 
 
function message1(obj,ido)
{
	var el=obj;
	var oi=obj.id;
	while (el.id != ido)
	{
		el=el.parentNode;
	}
	$$a({
        type:'post',
        url:'ajax.php',
        data:{'msg1':oi,'id':el.getAttribute("name"),'city':getCookie('city')},
        response:'text',
        success:function (data) {
			
		}
    });
 document.getElementById('errobj').style.display="none";
 document.getElementById('msg1').style.display="inline-block";
 document.getElementById('msg1').style.top=document.getElementById('errobj').style.top;
 document.getElementById('msg1').style.left=document.getElementById('errobj').style.left;
 setTimeout(function(){$('.msg1').fadeOut('slow')},1500);  
}

function message2(obj,ido)
{
 var el=obj;
 while (el.id != ido)
	{
		el=el.parentNode;
	}
 document.getElementById('errobj').style.display="none";
 document.getElementById('msg2').style.display="inline-block";
 document.getElementById('msg2').style.top=document.getElementById('errobj').style.top;
 document.getElementById('msg2').style.left=document.getElementById('errobj').style.left;
 document.getElementById('msg2').setAttribute('name', el.getAttribute("name"));
}

function sendmess1(obj,ido)
{
var el=obj;
var oi=obj.id;
var ms=document.getElementById('err41').value;
if (ms != '')
{
while (el.id != ido)
	{
		el=el.parentNode;
	}
	$$a({
        type:'post',
        url:'ajax.php',
        data:{'msg1':oi,'id':el.getAttribute("name"),'city':getCookie('city'),'msg':ms},
        response:'text',
        success:function (data) {
			if (data !='' || data != 0){alert(data);}
		}
    });
 document.getElementById('msg2').style.display="none";
 document.getElementById('msg3').style.display="inline-block";
 document.getElementById('msg3').style.top=document.getElementById('errobj').style.top;
 document.getElementById('msg3').style.left=document.getElementById('errobj').style.left;
 setTimeout(function(){$('.msg3').fadeOut('slow')},1500);
}
else
{
 document.getElementById('err41').style.border="1px solid red";	
}
}

function getsms(ido,obj)
{
 var el=obj;
 while (el.id != ido)
	{
		el=el.parentNode;
	}
document.getElementById('msg4').style.display="none";	
document.getElementById('msg5').style.display="inline-block";
document.getElementById('msg5').style.top=document.getElementById('msg4').style.top;
document.getElementById('msg5').style.left=document.getElementById('msg4').style.left;	
}

function nobord(obj)
 {
 	obj.style.border="";
 }

 </script> 
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
</head>
<body class="body">
<div class="msg1 border1" id="msg1" style="display:none;"><span style="font-weight:bold;">Спасибо, Ваша информация принята</span><br>Данный объект больше не будет отображаться в результатах поиска</div>
<div class="msg2 border1" name="" id="msg2" style="display:none;"><span style="font-weight:bold;margin-left:95px;">Не верная информация</span><br>Пожалуйста, уточните максимально подробно, что именно, на Ваш взгляд в этом объявлении указано не верно<br><input id="err41" style="display:inline-block;width:300px;" onfocus="nobord(this);" type="text"><button id="err42" onClick="sendmess1(this,'msg2')" class="display:inline-block;">Отправить</button></div>
<div class="msg3 border1" id="msg3" style="display:none;"><span style="font-weight:bold;margin-left:50px;">Заявка принята</span><br>Ваше сообщение прнинято, наши специалисты с Вами свяжуться</div>
<div class="msg4 border1" name="" id="msg4" style="display:none;"><span style="font-weight:bold;margin-left:50px;">Редактировать объявление</span><br>Чтобы подтвердить, что Вы собственник объекта, Вам необходимо кликнуть клавишу ниже. На номер телефона, с которого вы размещали объявление, прийдет бесплатное СМС с проверочным кодом. Это позволит вам изменять его описание и добовлять фотографии.<br><button class="but pointer" style="margin-left:75px; width:150px; height:20px; padding:0px;" onclick="getsms('msg4',this);">Получить СМС</button></div>
<div class="msg5 border1" id="msg5" style="display:none;"><span style="font-weight:bold;margin-left:50px;">Введите полученный код</span><br>(если смс с кодом не пришла в течении n минут, повторите запрос)<br><input maxlength="5" type="num" class="msgin" name="" id="msgin"><button style="width:80px;" onClick="">Отправить</button></div>
<div class="errobj border1" id="errobj" name="" style="display:none;">
<div class="errobjmenu">
 <div style="font-weight:bold;padding:0px 5px 0px 5px;">Пожаловаться на объект</div>
 <div id="err1" class="border2 pointer" onClick="message1(this,'errobj');">Сдана</div>
 <div id="err2" class="border2 pointer" onClick="message1(this,'errobj');">Агент</div>
 <div id="err3" class="border2 pointer" onClick="message1(this,'errobj');">Не дозвониться</div>
 <div id="err4" class="border2 pointer" onClick="message2(this,'errobj');" style="border-radius:0px 0px 6px 6px;">Не верная информация</div>
</div>
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
<div class="vkl"><div class="i-d navdiv"><a class="vklb" href="sdat.php">Сдать</a></div><div class="i-d aactive navdiv"><a class="vklb" style="color:white;" href="arend.php">Снять</a></div><div class="i-d navdiv"><a class="vklb" href="work.php">Работа у нас</a></div><div class="i-d navdiv"><a class="vklb" href="konkurs.php">Конкурсы</a></div></div><div class="contel"><img class="telimg" src="source/phone.png" height="25px" align="left"><span class="ctel">8 961 995 64 86</span><br><button class="but butconsl pointer" onclick="jQuery('#mask').show()">Получить консультацию</button></div>
</div>
<div class="bod">
<div class="top2text"><div class="top2t">Аренда жилья в <span id="textcity"></span> от собственников</div></div>
<div class="content">
  <div class="headtab">
   <div class="vib"><ul class="tabs"><li><a href="arend.php" class="pointer tabbut">Долгосрочная аренда</a></li><li><a href="arend.php?<?php echo 'arcity='.$_COOKIE['vsity'].'&arrai='.$_COOKIE['vraion'].'&artype='.$_COOKIE['vtype'].'&arsum1=0&arsum2='.$_COOKIE['vprice']; ?>" class="pointer tabbut">Мои параметры</a></li></ul></div>
   <div class="tabinfbar"><?php if (($col>300 and $_COOKIE['city']=='Барнаул') or ($col>500)) {echo "<span class='span2'>Количество найденных обьектов: $col</span>";}?><div class="navpage"><a class="np" href="arend.php?page=1"><<</a><?php echo navigpage('np','npa',ceil($col/10))?><a class="np" href="arend.php?page=<?php echo ceil($col/10);?>">>></a></div></div>
   <div class="tabfind">
    <div class="">
	<form method="GET">
	 <div class="fdiv">
	 <span class="fspan">Город</span><br>
	 <select name="arcity" class="fattr" onchange="selrai(this);">
	 <option>Барнаул</option>
	 <option>Новосибирск</option>
	 </select></div>
	 <div class="fdiv">
	 <span class="fspan">Район</span><br>
	 <select name="arrai" id="rc1" style="display:none;" class="fattr">
	 <option>Центральный</option>
	 <option>Железнодорожный</option>
	 <option>Индустриальный</option>
	 <option>Ленинский</option>
	 <option>Октябрьский</option>
	 </select>
	 <select id="rc2" name="arrai" class="fattr" style="display:none;">
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
	 <div class="fdiv">
	 <span class="fspan">Тип недвижимости</span><br>
	 <select name="artype" class="fattr">
	 <option>1-комнатная</option>
	 <option>2-комнатная</option>
	 <option>3-комнатная</option>
	 <option>4-комнатная</option>
	 <option>Дом</option>
	 <option>Пол дома</option>
	 <option>Студия</option>
	 <option>Общежитие</option>
	 </select>
	 </div>
	 <div class="fdiv">
	 <span class="fspan">Стоимость аренды</span><br>
	 <span>от </span><input name="arsum1" id ="amount1" class="fsum" type="number" maxlength="10" placeholder="0"><span> до </span><input name="arsum2" id ="amount2" class="fsum" type="number" maxlength="10" placeholder="200000"><span>руб.</span>
	 <div style="width: 200px;height: 10px;font-size: 15px;margin-top: 10px;" id="slider-range"></div>
	 </div>
	 <button class="findbut">Найти</button>
	</form>
	</div>
   </div>
   <div class="tabar">
   <?php 
      while ($row = mysql_fetch_assoc($res))
	  {
	   $id=$row['ID'];
	   echo "<div id='$i' name='$id' class='variki'>";
	   if ($row['Img'] ==''){echo '<img class="tabimg" src="/source/noimg.jpg">';}else{$kkk=explode('|',$row['Img']);echo '<img class="tabimg" src="http://gorslzas/'.$kkk[0].'">';}
	   echo '<a class="tabadr viw" id="cc'.$i.'" href="arendview.php?apartment='.$id.'">'.$row['Type'].' на '.$row['Adress'].'</a><span class="trai">район:'.$row['Raion'].'</span><div class="tcom">'.$row['Comments'].'</div><span class="tprice">'.$row['Prise'].' руб.</span><div class="oftel pointer" id="doftel'.$i.'" onClick="randtel('.$i.',this)"><img src="/source/phonem.png" height="12px" style="display:inline-block;margin-right:5px;"><span id="oftel'.$i.'">Позвонить</span></div><div class="tdey"><img id="erobj'.$i.'" onClick="clerr('.$id.',this.getBoundingClientRect());" class="tdimg pointer" src="/source/voskl.png"><img onClick="rdc('.$id.',this.getBoundingClientRect())" class="tdimg pointer" src="/source/pencl.png"></div>';
	   echo "</div>";
	   $i++;
	  } 
   ?>
   </div>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
<div id="vk_groups" style="position:absolute;display:inline-block;margin-left:40px; margin-top:5px;"></div>
<?php
switch ($_COOKIE['city'])
{
case 'Новосибирск':
echo "<script type='text/javascript'>
 VK.Widgets.Group('vk_groups', {mode: 0, width: '220', height: '400', color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 109476711);
 </script>";
break;
case 'Барнаул':
echo "<script type='text/javascript'>
VK.Widgets.Group('vk_groups', {mode: 0, width: '220', height: '400', color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 66825687);
</script>";
break;
}
?>
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
<div></div>
<div class="konsult pointer" onclick="jQuery('#mask').show()">
Получить консультацию
</div>
</body>
</HTML>