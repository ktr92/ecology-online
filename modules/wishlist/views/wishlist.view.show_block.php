<?php
/**
 * Шаблон блока списка желаний
 *
 * Шаблонный тег <insert name="show_block" module="wishlist" [template="шаблон"]>:
 * выводит информацию об отложенных товарах
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

echo '<span class="wishlist_block"><a href="'.$result["link"].'" class="top-line-item">'
.'<img src="'.BASE_PATH.Custom::path('img/icon_liked.png').'" alt="">'
.$this->diafan->_('Понравилось').': '
.'<span id="show_wishlist">'.$this->get('info', 'wishlist', $result).'</span>'
.'</a></span>';