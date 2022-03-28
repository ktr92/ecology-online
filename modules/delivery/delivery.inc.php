<?php
/**
 * Подключение модуля «Доставка»
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

class Delivery_inc extends Diafan
{
	/**
	 * Подключает способ доставки
	 * 
	 * @return string
	 */
	public function get(&$row)
	{
		$result = $this->diafan->_delivery->get_info();
		$result["id"] = $row["id"];
		$result["params"] = unserialize($row["params"]);

		ob_start();

		$js = Custom::path('modules/delivery/backend/'.$row["service"].'/delivery.'.$row["service"].'.js');
		if($js)
		{
			$this->diafan->_site->js_view[] = $js;
		}

		include(Custom::path('modules/delivery/backend/'.$row["service"].'/delivery.'.$row["service"].'.model.php'));
		$name_class_model = 'Delivery_'.$row["service"].'_model';
		$model = new $name_class_model($this->diafan);
		$result = $model->get($result);
		if (is_callable(array($model, 'calculate')))
		{
			$row["price"] = $model->calculate($row['params']);
		}

		include(Custom::path('modules/delivery/backend/'.$row["service"].'/delivery.'.$row["service"].'.view.php'));
		$text = ob_get_contents();
		ob_end_clean();

		return $text;
	}

	/**
	 * Получает информацию о заказе: высоту, ширину, длину, вес, сумму
	 * 
	 * @return array
	 */
	private function get_info()
	{
		if(isset($this->cache["info"]))
		{
			return $this->cache["info"];
		}
		$weight = 0;
		$owidth = 0;
		$olength = 0;
		$oheight = 0;
		$summ = $this->diafan->_cart->get_summ();
		$cart = $this->diafan->_cart->get();
		$k = 0;
		if ($cart)
		{
			foreach ($cart as $good_id => $array)
			{
				if (! $row = DB::query_fetch_array("SELECT id, [name], width, weight, length, height, [measure_unit] FROM {shop} WHERE [act]='1' AND id = %d AND trash='0' LIMIT 1", $good_id))
				{
					continue;
				}
				if (empty($row["weight"]))
				{
					$row["weight"] = 0;
				}
				if (empty($row["width"]))
				{
					$row["width"] = 0;
				}
				if (empty($row["length"]))
				{
					$row["length"] = 0;
				}
				if (empty($row["height"]))
				{
					$row["height"] = 0;
				}
				foreach ($array as $param => $ar)
				{
					foreach ($ar as $id => $value)
					{
						$count = $value['count'];
					
						for ($i = 0; $i < $count; $i++)
						{
							$weight += $row["weight"];
							if($k == 0)
							{
								$owidth += $row["width"];
								$olength += $row["length"];
								$oheight += $row["height"];
							}
							if($k>0)
							{
								if (min($olength, $owidth, $oheight) == $olength)
								{
									if ($row["width"] > $owidth)
									{
										$owidth = $row["width"];
									};
									if ($row["height"] > $oheight)
									{
										$oheight = $row["height"];
									}
									$olength += $row["length"];
								}
								elseif (min($olength, $owidth, $oheight) == $owidth)
								{
									if($row["length"] > $olength)
									{
										$olength = $row["length"];
									}
									if($row["height"] > $oheight)
									{
										$oheight = $row["height"];
									}
									$owidth += $row["width"];
								}
								elseif (min($olength, $owidth, $oheight) == $oheight)
								{
									if($row["width"] > $owidth)
									{
										$owidth = $row["width"];
									}
									if($row["length"] > $olength)
									{
										$olength = $row["length"];
									}
									$oheight += $row["height"];
								}
							}
							$k++;
						}
					}
				}
			}
			$result['weight'] = $weight;
			$result['width'] = $owidth;
			$result['length'] = $olength;
			$result['height'] = $oheight;
			$result['summ'] = $summ;
		}
		$this->cache["info"] = $result;
		return $result;
	}
}