<?php
/**
 * Шаблон списка платежных система при оплате
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

if(empty($result))
{
	return;
}

echo '<div class="payments">';
foreach ($result as $i => $row)
{
	echo '<div class="payment">
	<input name="payment_id" id="payment'.$row['id'].'" value="'.$row['id'].'" type="radio" '.(! $i ? 'checked' : '').'>
	<label for="payment'.$row['id'].'">'.$row['name'].'</label>';
	if(! empty($row['text']))
	{
		echo '<div class="payment_text">'.$row['text'].'</div>';
	}
	echo '</div>';
}
echo '</div>';
