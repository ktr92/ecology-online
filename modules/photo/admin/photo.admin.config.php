<?php
/**
 * Настройки модуля
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

/**
 * Photo_admin_config
 */
class Photo_admin_config extends Frame_admin
{
	/**
	 * @var array поля в базе данных для редактирования
	 */
	public $variables = array (
		'config'       => array (
			'hr1' => array(
				'type' => 'title',
				'name' => 'Основные',
			),		
			'nastr' => array(
				'type' => 'numtext',
				'name' => 'Количество фотографий на странице',
				'help' => 'Количество одновременно выводимых фотографий в списке.',
			),
			'nastr_cat' => array(
				'type' => 'numtext',
				'name' => 'Количество альбомов на странице',
				'help' => 'Количество одновременно выводимых альбомов в списке на первой страницы модуля.',
				'depend' => 'cat',
			),
			'multiupload_act'     => array(
				'type' => 'checkbox',
				'name' => 'Активировать фотографии после групповой загрузки',
				'help' => 'Позволяет показывать на сайте фотографии, загруженные с помощью ссылки «Добавить несколько фотографий».',
			),
			'page_show' => array(
				'type' => 'checkbox',
				'name' => 'Открывать фотографию на отдельной странице',
				'help' => 'Если не отмечена, фотографии из альбома будут сразу увеличиваться. Если отмечена, каждая фотография будет открываться на отдельной странице с полным текстовым описанием, ее можно будет комментировать, ставить рейтинг.',
			),
			'rel_two_sided' => array(
				'type' => 'checkbox',
				'name' => 'В блоке похожих фотографий связь двусторонняя',
				'help' => 'Если отметить, то при назначении фотографии А похожей фотографии Б, у фотографии Б автоматически станет похожая фотография А.',
			),			
			'hr2' => array(
				'type' => 'title',
				'name' => 'Альбомы',
			),
			'cat' => array(
				'type' => 'checkbox',
				'name' => 'Использовать альбомы',
				'help' => 'Разделение фотогалереи на альбомы.',
			),
			'count_list' => array(
				'type' => 'numtext',
				'name' => 'Количество фотографий в списке альбомов',
				'help' => 'Количество фотографий, выводимых в списке альбомов на главной странице модуля.',
				'depend' => 'cat',
			),
			'count_child_list' => array(
				'type' => 'numtext',
				'name' => 'Количество фотографий в списке вложенного альбома',
				'help' => 'Для первой страницы модуля и для страницы альбома.',
				'depend' => 'cat',
			),
			'children_elements' => array(
				'type' => 'checkbox',
				'name' => 'Показывать фотографии вложенных альбомов',
				'help' => 'Если отмечена, в списке фотоальбомов будут отображатся последние добавленные фотографии из всех вложенных альбомов.',
				'depend' => 'cat',
			),
			'hr3' => 'hr',
			'images' => array(
				'type' => 'module',
				'element_type' => array('element', 'cat'),
				'hide' => true,
			),
			'images_variations_element' => array(
				'type' => 'none',
				'name' => 'Генерировать размеры изображений',
				'help' => 'Размеры изображений, заданные в модуле «Изображения» и тег латинскими буквами для подключения изображения на сайте. Обязательно должны быть заданы два размера: превью изображения в списке фотографий (тег medium) и полное изображение (тег large).',
				'no_save' => true,
			),
			'images_cat' => array(
				'type' => 'none',
				'name' => 'Использовать изображения для альбомов',
				'help' => 'Позволяет включить/отключить загрузку изображений к альбомам.',
				'no_save' => true,
			),
			'images_variations_cat' => array(
				'type' => 'none',
				'name' => 'Генерировать размеры изображений для альбомов',
				'help' => 'Размеры изображений, заданные в модуле «Изображения» и тег латинскими буквами для подключения изображения на сайте. Обязательно должны быть заданы два размера: превью изображения в списке альбомов (тег medium) и полное изображение (тег large).',
				'no_save' => true,
			),
			'list_img_cat' => array(
				'type' => 'none',
				'name' => 'Отображение изображений в списке альбомов',
				'help' => "Параметр принимает значения:\n\n* нет (отключает отображение изображений в списке);\n* показывать одно изображение;\n* показывать все изображения. Параметр выводится, если отмечена опция «Использовать изображения».",
				'no_save' => true,
			),
			'use_animation' => array(
				'type' => 'none',
				'name' => 'Использовать анимацию при увеличении изображений',
				'help' => 'Параметр добавляет JavaScript код, позволяющий включить анимацию при увеличении изображений. Параметр выводится, если отмечена опция «Использовать изображения».',
				'no_save' => true,
			),
			'upload_max_filesize' => array(
				'type' => 'none',
				'name' => 'Максимальный размер загружаемых файлов',
				'help' => 'Параметр показывает максимально допустимый размер загружаемых файлов, установленный в настройках хостинга. Параметр выводится, если отмечена опция «Использовать изображения».',
				'no_save' => true,
			),
			'resize' => array(
				'type' => 'none',
				'name' => 'Применить настройки ко всем ранее загруженным изображениям',
				'help' => 'Позволяет переконвертировать размер уже загруженных изображений. Кнопка необходима, если изменены настройки размеров изображений. Параметр выводится, если отмечена опция «Использовать изображения».',
				'no_save' => true,
			),
			'hr4' => array(
				'type' => 'title',
				'name' => 'Подключения',
			),
			'comments' => array(
				'type' => 'module',
				'name' => 'Подключить комментарии к фотографиям',
				'help' => 'Подключение модуля «Комментарии». Параметр не будет включен, если модуль «Комментарии» не установлен. Подробности см. в разделе [модуль «Комментарии»](http://www.diafan.ru/dokument/full-manual/upmodules/comments/).',
			),
			'comments_cat' => array(
				'type' => 'none',
				'name' => 'Показывать комментарии к альбомам',
				'help' => 'Подключение модуля «Комментарии» к альбомам. Параметр не будет включен, если модуль «Комментарии» не установлен. Подробности см. в разделе [модуль «Комментарии»](http://www.diafan.ru/dokument/full-manual/upmodules/comments/).',
				'no_save' => true,
			),
			'tags' => array(
				'type' => 'module',
				'name' => 'Подключить теги к фотографиям',
				'help' => 'Подключение модуля «Теги». Параметр не будет включен, если модуль «Теги» не установлен. Подробности см. в разделе [модуль «Теги»](http://www.diafan.ru/dokument/full-manual/modules/tags/).',
			),
			'rating' => array(
				'type' => 'module',
				'name' => 'Подключить рейтинг к фотографиям',
				'help' => 'Подключение модуля «Рейтинг». Параметр не будет включен, если модуль «Рейтинг» не установлен. Подробности см. в разделе [модуль «Рейтинг»](http://www.diafan.ru/dokument/full-manual/upmodules/rating/).',
			),
			'rating_cat' => array(
				'type' => 'none',
				'name' => 'Подключить рейтинг к альбомам',
				'help' => 'Подключение модуля «Рейтинг» к альбомам. Параметр не будет включен, если модуль «Рейтинг» не установлен. Подробности см. в разделе [модуль «Рейтинг»](http://www.diafan.ru/dokument/full-manual/upmodules/rating/).',
				'no_save' => true,
			),
			'keywords' => array(
				'type' => 'module',
				'name' => 'Подключить перелинковку',
				'help' => 'Отображение перелинковки в модуле. Подробности см. в разделе [модуль «Перелинковка»](http://www.diafan.ru/dokument/full-manual/upmodules/keywords/).',
			),
			'counter' => array(
				'type' => 'checkbox',
				'name' => 'Подключить счетчик просмотров',
				'help' => 'Позволяет считать количество просмотров отдельной фотографии.',
			),
			'counter_site' => array(
				'type' => 'checkbox',
				'name' => 'Выводить счетчик на сайте',
				'help' => 'Позволяет вывести на сайте количество просмотров отдельной фотографии. Параметр выводится, если отмечена опция «Счетчик просмотров».',
				'depend' => 'counter',
			),
			'hr5' => array(
				'type' => 'title',
				'name' => 'Автогенерация для SEO',
			),
			'title_tpl' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Title',
				'help' => "Если шаблон задан и для фотографии не прописан заголовок *Title*, то заголовок автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название,\n* %category – название альбома,\n* %parent_category – название альбома верхнего уровня (SEO-специалисту).",
				'multilang' => true
			),
			'title_tpl_cat' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Title для альбома',
				'help' => "Если шаблон задан и для альбома не прописан заголовок *Title*, то заголовок автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название альбома,\n* %parent – название альбома верхнего уровня,\n\n* %page – страница (текст можно поменять в интерфейсе «Языки сайта» – «Перевод интерфейса») (SEO-специалисту).",
				'multilang' => true,
				'depend' => 'cat',
			),
			'keywords_tpl' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Keywords',
				'help' => "Если шаблон задан и для фотографии не заполнено поле *Keywords*, то поле *Keywords* автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название,\n* %category – название альбома,\n* %parent_category – название альбома верхнего уровня (SEO-специалисту).",
				'multilang' => true
			),
			'keywords_tpl_cat' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Keywords для альбома',
				'help' => "Если шаблон задан и для альбома не заполнено поле *Keywords*, то поле *Keywords* автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название альбома,\n* %parent – название альбома верхнего уровня (SEO-специалисту).",
				'multilang' => true,
				'depend' => 'cat',
			),
			'descr_tpl' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Description',
				'help' => "Если шаблон задан и для фотографии не заполнено поле *Description*, то поле *Description* автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название,\n* %category – название альбома,\n* %parent_category – название альбома верхнего уровня (SEO-специалисту).",
				'multilang' => true
			),
			'descr_tpl_cat' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Description для альбома',
				'help' => "Если шаблон задан и для альбома не заполнено поле *Description*, то поле Description автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название альбома,\n* %parent – название альбома верхнего уровня (SEO-специалисту).",
				'multilang' => true,
				'depend' => 'cat',
			),
			'hr6' => array(
				'type' => 'title',
				'name' => 'Оформление',
			),			
			'themes' => array(
				'type' => 'function',
				'hide' => true,
			),
			'theme_list' => array(
				'type' => 'none',
				'name' => 'Шаблон для списка элементов',
				'help' => 'По умолчанию modules/photo/views/photo.view.list.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_list' => array(
				'type' => 'none',
				'hide' => true,
			),
			'theme_first_page' => array(
				'type' => 'none',
				'name' => 'Шаблон для первой страницы модуля (если подключены альбомы)',
				'help' => 'По умолчанию modules/photo/views/photo.view.fitst_page.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_first_page' => array(
				'type' => 'none',
				'hide' => true,
			),
			'theme_id' => array(
				'type' => 'none',
				'name' => 'Шаблон для страницы элемента',
				'help' => 'По умолчанию, modules/photo/views/photo.view.id.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_id' => array(
				'type' => 'none',
				'hide' => true,
			),
			'hr7' => array(
				'type' => 'title',
				'name' => 'Дополнительно',
			),
			'admin_page'     => array(
				'type' => 'checkbox',
				'name' => 'Отдельный пункт в меню администрирования для каждого раздела сайта',
				'help' => 'Если модуль подключен к нескольким страницам сайта, отметка данного параметра выведет несколько пунктов в меню административной части для удобства быстрого доступа (администратору сайта).',
			),
			'map' => array(
				'type' => 'module',
				'name' => 'Индексирование для карты сайта',
				'help' => 'При изменении настроек, влияющих на отображение страницы, модуль автоматически переиндексируется для карты сайта sitemap.xml.',
			),
			'where_access' => array(
				'type' => 'none',
				'hide' => true,
			),						
		),
	);

	/**
	 * @var array настройки модуля
	 */
	public $config = array (
		'element_site', // делит элементы по разделам (страницы сайта, к которым прикреплен модуль)
		'config', // файл настроек модуля
	);
}