<?php
/**
 * Шаблон блока категорий
 *
 * Шаблонный тег <insert name="show_category" module="shop"
 * [site_id="страница_с_прикрепленным_модулем"]
 * [images="количество_изображений"] [images_variation="тег_размера_изображений"]
 * [count_level="количество_уровней"] [number_elements="выводить_количество_товаров_в_категории:true|false"]
 * [only_module="true|false"]
 * [template="шаблон"]>:
 * блок категорий
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

if (empty($result["rows"][0]))
{
	return false;
}
echo '<div class="block_header">'.$this->diafan->_('Категории').'</div>';

echo '<div class="shop_brand_block">';

//вывод категорий
foreach ($result["rows"][0] as $row)
{
	echo '<div class="shop_category">';

	//изображения категорий
	if (! empty($row["img"]))
	{
		echo '<div class="shop_category_img">';
		foreach ($row["img"] as $img)
		{
			switch ($img["type"])
			{
				case 'animation':
					echo '<a href="'.BASE_PATH.$img["link"].'" rel="prettyPhoto[gallery'.$row["id"].'shop_category]">';
					break;

				case 'large_image':
					echo '<a href="'.BASE_PATH.$img["link"].'" rel="large_image" width="'.$img["link_width"].'" height="'.$img["link_height"].'">';
					break;

				default:
					echo '<a href="'.BASE_PATH_HREF.$img["link"].'">';
					break;
			}
			echo '<img src="'.$img["src"].'" width="'.$img["width"].'" height="'.$img["height"].'" alt="'.$img["alt"].'" title="'.$img["title"].'">';		
			echo '</a> ';
		}
		echo '</div>';
	}

	//название и ссылка категории
	echo '<a href="'.BASE_PATH_HREF.$row["link"].'" class="shop_category_name">'.$row["name"];
	if(isset($row["number_elements"]))
	{
		echo ' ('.$row["number_elements"].')';
	}
	echo '</a>';

	//описание категории
	//if (! empty($row["anons"]))
	//{
	//	echo $row['anons'];
	//}
	if(! empty($result["rows"][$row["id"]]))
	{
		$res = $result;
		$res["level"] = 2;
		$res["parent_id"] = $row["id"];
		echo $this->get('show_category_level', 'shop', $res);
	}
	echo '</div>';
}
echo '</div>';