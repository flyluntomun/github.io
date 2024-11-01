
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>loading</title>
		
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="custom.js"></script>
		<!--<link rel="stylesheet" href="reset.css">-->
		<!--<link rel="stylesheet" href="main_loading.css">-->

		
	</head>
	
	<body style="overflow: hidden;">
	
		<div id="bg"></div>	
		<div id="logo" style="opacity: 0">
			<div class="opac opac_child1"><h1>DreamWork Half-Life 2: RolePlay</h1></div><br>
			<div class="opac opac_child2"><h3>IP: 46.174.55.188:27028</h3></div>
		</div>
		<audio autoplay loop id='audio' src='l2.mp3'></audio>							<SCRIPT type="text/javascript">
							// Количество снежинок на странице (Ставьте в границах 30-40, больше не рекомендую)
							var snowmax=0;

							// Установите цвет снега, добавьте столько цветов сколько пожелаете
							var snowcolor=new Array("#AAAACC","#DDDDFF","#CCCCDD","#F3F3F3","#F0FFFF","#FFFFFF","#EFF5FF")

							// Поставьте шрифты из которых будет создана снежинка ставьте столько шрифтом сколько хотите
							var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS");

							// Символ из какого будут сделаны снежинки (по умолчанию * )
							var snowletter=" ";

							// Скорость падения снега (рекомендую в границах от 0.3 до 2)
							var sinkspeed=0.6; 

							// Максимальный размер снежинки
							var snowmaxsize=22;

							// Установите минимальный размер снежинки
							var snowminsize=8;

							// Устанавливаем положение снега
							// Впишите 1 чтобы снег был по всему сайту, 2 только слева 
							// 3 только по центру, 4 снег справа
							var snowingzone=1;


							/*
							//   * ПОСЛЕ ЭТОЙ ФРАЗЫ БОЛЬШЕ НЕТ КОНФИГУРАЦИИ*
							*/

							// НИЧЕГО НЕ ИЗМЕНЯТЬ

							var snow=new Array();
							var marginbottom;
							var marginright;
							var timer;
							var i_snow=0;
							var x_mv=new Array();
							var crds=new Array();
							var lftrght=new Array();
							var browserinfos=navigator.userAgent;
							var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/);
							var ns6=document.getElementById&&!document.all;
							var opera=browserinfos.match(/Opera/);
							var browserok=ie5||ns6||opera;
							function randommaker(range) {
							rand=Math.floor(range*Math.random());
							return rand;
							}
							function initsnow() {
							if (ie5 || opera) {
							marginbottom=document.body.clientHeight;
							marginright=document.body.clientWidth;
							}
							else if (ns6) {
							marginbottom=window.innerHeight;
							marginright=window.innerWidth;
							}
							var snowsizerange=snowmaxsize-snowminsize;
							for (i=0;i<=snowmax;i++) {
							crds[i]=0;
							lftrght[i]=Math.random()*15;
							x_mv[i]=0.03+Math.random()/10;
							snow[i]=document.getElementById("s"+i);
							snow[i].style.fontFamily=snowtype[randommaker(snowtype/length)];
							snow[i].size=randommaker(snowsizerange)+snowminsize;
							snow[i].style.fontSize=snow[i].size+"px";
							snow[i].style.color=snowcolor[randommaker(snowcolor.length)];
							snow[i].sink=sinkspeed*snow[i].size/5;
							if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
							if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
							if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
							if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
							snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size);
							snow[i].style.left=snow[i].posx+"px";
							snow[i].style.top=snow[i].posy+"px";
							}
							movesnow();
							}
							function movesnow() {
							for(i=0;i<=snowmax;i++) {
							crds[i]+=x_mv[i];
							snow[i].posy+=snow[i].sink;
							snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i])+"px";
							snow[i].style.top=snow[i].posy+"px";
							if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])) {
							if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
							if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
							if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
							if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
							snow[i].posy=0;
							}
							}
							var timer=setTimeout("movesnow()",50);
							}
							for (i=0;i<=snowmax;i++) {
							document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"px;'>"+snowletter+"</span>");
							}
							if (browserok) {
							window.onload=initsnow;
							}
							</SCRIPT>

		<div align="center">
<!--Openstat-->
<span id="openstat2310658"></span>
<script type="text/javascript">
var openstat = { counter: 2310658, image: 5081, color: "c3c3c3", next: openstat };
(function(d, t, p) {
var j = d.createElement(t); j.async = true; j.type = "text/javascript";
j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
})(document, "script", document.location.protocol);
</script>
<!--/Openstat-->
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t21.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet-->
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=22298827&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/22298827/3_0_707070FF_505050FF_1_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:22298827,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22298827 = new Ya.Metrika({id:22298827,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22298827" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">//<![CDATA[
var _tmr = _tmr || [];
_tmr.push({id: '2318246', type: 'pageView', start: (new Date()).getTime()});
(function (d, w) {
   var ts = d.createElement('script'); ts.type = 'text/javascript'; ts.async = true;
   ts.src = (d.location.protocol == 'https:' ? 'https:' : 'http:') + '//top-fwz1.mail.ru/js/code.js';
   var f = function () {var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ts, s);};
   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);
//]]></script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2318246;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Rating@Mail.ru logo -->
<a href="https://top.mail.ru/jump?from=2318246">
<img src="//top-fwz1.mail.ru/counter?id=2318246;t=479;l=1" 
style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a>
<!-- //Rating@Mail.ru logo -->
<!-- begin of Top100 code -->

<script id="top100Counter" type="text/javascript" src="https://counter.rambler.ru/top100.jcn?2864581"></script>
<noscript>
<a href="http://top100.rambler.ru/navi/2864581/">
<img src="http://counter.rambler.ru/top100.cnt?2864581" alt="Rambler's Top100" border="0" />
</a>

</noscript>
<!-- end of Top100 code -->
</div>
	</body>
</html>
<style>
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}
body {
    line-height:1;
}
article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}
nav ul {
    list-style:none;
}
blockquote, q {
    quotes:none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}
a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}
/* change colours to suit your needs */
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}
/* change colours to suit your needs */
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}
del {
    text-decoration: line-through;
}
abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}
table {
    border-collapse:collapse;
    border-spacing:0;
}
/* change border colour to suit your needs */
hr {
    display:block;
    height:1px;
    border:0;
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}
input, select {
    vertical-align:middle;
}

html{
	width: 100%;
	height: 100%;
	overflow: hidden;
}

#bg{
	-webkit-animation: bgscale 30s infinite linear alternate;
}

#logo{
	position: absolute;
	right: 10%;
	top: 10%;
}


#desc {
	position: absolute;
	bottom: 10%;
	left: 10%;
}

#desc h3 {
	max-width: 700px;
}

.opac{
	background-color: rgba(16,16,16,.4);
}

.opac_child1 {
	float: left;
}

.opac_child2{
	float: right;
	padding: 3px;
}

h1, h2 {
	position: relative;
	font-size: 65px;
	font-family: Arial;
	font-weight: 500;
	color: rgb(249, 204, 84);
	text-shadow: 1px 1px 1px #000;
	text-transform: uppercase;
	padding: 4px;
	margin-bottom: -7px;
}

h2 {
	font-size: 45px;
}

h3 {
	position: relative;
	font-size: 25px;
	font-family: Arial;
	font-weight: 300;
	color: rgb(255, 255, 255);
	text-shadow: 1px 1px 1px #000;
	padding: 3px;
}

@-webkit-keyframes bgscale{
	from{-webkit-transform: scale(1.05);}
	to{-webkit-transform: scale(1.2);}
}
</style>