function preload() {
	$(slides).each(function(){
	  $('<img/>')[0].src = "img/"+this.img;
	});
}
function Slideshow(pos) {
	$("#desc").animate({opacity: 0}, 750, function(){
		$(this).animate({opacity: 1}, 750).delay(10000)
	})
	$('#bg').animate({opacity: 0}, 750, function(){
		$(this).css({'background': "url(img/"+slides[pos].img+") no-repeat center center fixed", 'background-size': "cover"})
		.animate({opacity: 1}, 750).delay(10000);
		pos = pos + 1
		if (pos == (slides.length)){
			pos = 0
		}
		Slideshow(pos); 
	});
}

var slides = []
slides[0] = {
	"text" : "Атмосфера",
	"desc" : "Окунись в атмосферу вселенной Сталкера и почувствуй себя участником Зоны",
	"img" : "-De_NA2_OZc.jpg"
}
slides[1] = {
	"text" : "Аномальные порождения",
	"desc" : "Исследуй аномалии в поисках артефактов",
	"img" : "ebZ8h6dVBhQ.jpg"
}
slides[2] = {
	"text" : "Локации",
	"desc" : "Узнавай особенности локации и её возможности",
	"img" : "F0Szw_nLwkA.jpg"
}
slides[3] = {
	"text" : "Мутанты",
	"desc" : "Сразитесь бок о бок с товарищами против порождений Зоны",
	"img" : "KW9c6T-EglE.jpg"
}
slides[4] = {
	"text" : "Снаряжение",
	"desc" : "Одень своего персонажа по последнему слову моды! Военной моды!",
	"img" : "KXFI6sVIkfM.jpg"
}
slides[5] = {
	"text" : "Противостояние",
	"desc" : "Участвуй в битве между группировками, стань лучшим бойцом!",
	"img" : "LqDc6PDGYBw.jpg"
}
slides[6] = {
	"text" : "Группировки",
	"desc" : "Объединись с другими сталкерами для выживания в Зоне",
	"img" : "NnOjOgLNAD4.jpg"
}
slides[7] = {
	"text" : "Время суток",
	"desc" : "Прочувствуйте всю ужасающую атмосферу темноты и неизвестности",
	"img" : "p_tNdLWbruE.jpg"
}
slides[8] = {
	"text" : "Персонажи",
	"desc" : "Взаимодействуйте с другими игроками",
	"img" : "PUNnYxc3d3Y.jpg"
}
slides[9] = {
	"text" : "Персонажи",
	"desc" : "Взаимодействуйте с другими игроками",
	"img" : "XtW29eUZvxI.jpg"
}
slides[10] = {
	"text" : "Персонажи",
	"desc" : "Взаимодействуйте с другими игроками",
	"img" : "sB5ZHtIYBEs.jpg"
}

$(document).ready(function(){
	function shuffle(array) {
	  var currentIndex = array.length
	    , temporaryValue
	    , randomIndex
	    ;

	  // While there remain elements to shuffle...
	  while (0 !== currentIndex) {

	    // Pick a remaining element...
	    randomIndex = Math.floor(Math.random() * currentIndex);
	    currentIndex -= 1;

	    // And swap it with the current element.
	    temporaryValue = array[currentIndex];
	    array[currentIndex] = array[randomIndex];
	    array[randomIndex] = temporaryValue;
	  }

	  return array;
	}

	preload()

	slides = shuffle(slides);
	console.log(slides);
	
	scrw = $(document).width();
	scrh = $(document).height();
	$('#bg').css({'width': scrw+'px', 'height': scrh+'px'})

	$("#logo").delay(750).animate({opacity: 1}, 750);
	
	var audioobject = document.getElementById("audio");
	audioobject.volume = 0.3;

	var pos = 0;
	Slideshow(pos);
});