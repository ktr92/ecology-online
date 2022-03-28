<?php
/**
 * Шаблонный тег: подключает файл-блок шаблона.
 *
 * @param array $attributes атрибуты шаблонного тега
 * file - имя PHP-файла из папки *themes/blocks* без расширения
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

$attributes = preg_replace('/[^a-z_\-0-9]+/', '', $this->get_attributes($attributes, 'file'));

if(! Custom::exists('themes/blocks/'.$attributes["file"].'.php'))
{
	return;
}
$inc = file_get_contents(Custom::path('themes/blocks/'.$attributes["file"].'.php'));

echo $this->get_function_in_theme($inc, true);