function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
  options = options || {};

  var expires = options.expires;

  if (typeof expires == "number" && expires) {
    var d = new Date();
    d.setTime(d.getTime() + expires * 1000);
    expires = options.expires = d;
  }
  if (expires && expires.toUTCString) {
    options.expires = expires.toUTCString();
  }

  value = encodeURIComponent(value);

  var updatedCookie = name + "=" + value;

  for (var propName in options) {
    updatedCookie += "; " + propName;
    var propValue = options[propName];
    if (propValue !== true) {
      updatedCookie += "=" + propValue;
    }
  }

  document.cookie = updatedCookie;
}

function deleteCookie(name) {
  setCookie(name, "", {
    expires: -1
  })
}

function logout()
{
deleteCookie('id');	
deleteCookie('login');
deleteCookie('pass');
deleteCookie('fio');
deleteCookie('vsity');
deleteCookie('vraion');
deleteCookie('vtype');
deleteCookie('vprice');
}

window.onload = function () {
	  if (getCookie('login') != undefined)
	  {
		  document.getElementById('out').style.display='inline-block';
		  document.getElementById('tobu').style.left=841; 
	  }
	  else
	  {
		  document.getElementById('in').style.display='inline-block';  
	  } 
	  if (getCookie('city')==undefined)
	  {		 
       document.getElementById('user-city').innerHTML='Ваш город: '+ymaps.geolocation.city+'<span class="arrow-d">▼</span>';
	   document.getElementById('textcity').innerHTML=ymaps.geolocation.city+'е';
      }else
	  {
		document.getElementById('user-city').innerHTML='Ваш город: '+getCookie('city')+'<span class="arrow-d">▼</span>';
        document.getElementById('textcity').innerHTML=getCookie('city')+'е';		
	  }
	  
	  
 }
function selcity()
{
 document.getElementById('dcitysel').style.display="block";
 document.getElementById('cit').style.height="200px";
}
function selcityclose()
{
 document.getElementById('dcitysel').style.display="none";
 document.getElementById('cit').style.height="38px";
}



