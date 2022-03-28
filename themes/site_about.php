<?php
/**
 * Страница О компании
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2017 OOO «Диафан» (http://www.diafan.ru/)
 */
 
if(! defined("DIAFAN"))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<!-- шаблонный тег show_head выводит часть HTML-шапки сайта. Описан в файле themes/functions/show_head.php. -->
<insert name="show_head">

<link rel="shortcut icon" href="<insert name="path">favicon.ico" type="image/x-icon">

</head>


<body>
	<header id="header"><insert name="show__header">  </header>  
	<main>
		<div class="internal-pages">
			<div class="about-content">
				<insert name="show_body">
			</div>
		</div>
	</main>
	<footer id="footer"><insert name="show__footer">  </footer>  
	<script>
(function(){  // анонимная функция (function(){ })(), чтобы переменные "a" и "b" не стали глобальными
	var a = document.querySelector('#leftbar-about'), b = null;  // селектор блока, который нужно закрепить
	window.addEventListener('scroll', Ascroll, false);
	document.body.addEventListener('scroll', Ascroll, false);  // если у html и body высота равна 100%
	function Ascroll() {
	  if (b == null) {  // добавить потомка-обёртку, чтобы убрать зависимость с соседями
		var Sa = getComputedStyle(a, ''), s = '';
		for (var i = 0; i < Sa.length; i++) {  // перечислить стили CSS, которые нужно скопировать с родителя
		  if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
			s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
		  }
		}
		b = document.createElement('div');  // создать потомка
		b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
		a.insertBefore(b, a.firstChild);  // поместить потомка в цепляющийся блок первым
		var l = a.childNodes.length;
		for (var i = 1; i < l; i++) {  // переместить во вновь созданного потомка всех остальных потомков (итого: создан потомок-обёртка, внутри которого по прежнему работают скрипты)
		  b.appendChild(a.childNodes[1]);
		}
		a.style.height = b.getBoundingClientRect().height + 'px';  // если под скользящим элементом есть другие блоки, можно своё значение
		a.style.padding = '0';
		a.style.border = '0';  // если элементу присвоен padding или border
	  }
	  if (a.getBoundingClientRect().top <= 0) { // elem.getBoundingClientRect() возвращает в px координаты элемента относительно верхнего левого угла области просмотра окна браузера
		b.className = 'sticky-about';
	  } else {
		b.className = '';
	  }
	  window.addEventListener('resize', function() {
		a.children[0].style.width = getComputedStyle(a, '').width
	  }, false);  // если изменить размер окна браузера, измениться ширина элемента
	}
	})()
	</script>
			
</body>
</html>