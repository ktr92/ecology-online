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

<aside id="column-bar">
	<?=$this->diafan->_parser_theme->get_function_in_theme('<insert name="show_block" module="menu" id="3" template="leftmenu">'); ?>
</aside>
