<?php
/**
 * Основной шаблон сайта
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
			<div class="container">			
				<div class="content-pages">
					<insert name="show_body">
				</div>					
			</div>
		</div>
	</main>
	<footer id="footer"><insert name="show__footer">  </footer>  
</body>
</html>