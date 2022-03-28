<?php
/**
 * Шаблонный тег: формирует часть HTML-шапки сайта. Включает в себя в том числе теги: show_title, show_description, show_keywords.
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2017 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-2 col-sm-2 col-xs-12">					
			<div class="logo">
				<?=$this->diafan->_parser_theme->get_function_in_theme('<insert name="show_href" img="images/logo2.png" alt="ЭкоСтандарт" title="ЭкоСтандарт">'); ?>
			</div>
			<div class="slogan">
				<p>Ваш эксперт по экологии</p>
			</div>
		</div>			
		<!--<div class="col-md-2 col-sm-2 col-xs-6">
			<div class="slogan">
				<p>Ваш эксперт <br/>по экологии</p>
			</div>
		</div>-->
		<div class="col-md-8 col-sm-7 col-xs-12">
			<nav>
				<?=$this->diafan->_parser_theme->get_function_in_theme('<insert name="show_block" module="menu" id="1" template="topmenu">');?>
			</nav>
		</div>
		<div class="col-md-2 col-sm-3 col-xs-12">
			<div class="phone">
				<a href="tel:89520376181">+7 <span class="green">(952)</span> 037-61-81</a>
				<a href="tel:88552367830">+7 <span class="green">(8552)</span> 36-78-30</a>
			</div>
		</div>
	</div>
</div>