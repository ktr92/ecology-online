<?php
/**
 * Модель
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

class Consultant_model extends Model
{
	/**
	 * Генерирует данные для шаблонной функции: on-line консультант
	 * @return string
	 */
	public function show_block($system)
	{
		switch($system)
		{
			case 'redhelper':
				return $this->redhelper();

			case 'jivosite':
				return $this->jivosite();

			case 'livetex':
				return $this->livetex();
		}
	}

	/**
	 * Генерирует данные для шаблонной функции: on-line консультант системы RedHelper
	 * @return string
	 */
	private function redhelper()
	{
		if(! $this->diafan->configmodules("redhelper_login", "consultant"))
		{
			return '';
		}
		$result = '
<!-- RedHelper -->
<link href="'.BASE_PATH.'modules/consultant/consultant.css" rel="stylesheet" type="text/css">';
$place = $this->diafan->configmodules("redhelper_place", "consultant");
if(! in_array($place, array('top', 'left', 'right')))
{
	$place = 'left';
}
if($this->diafan->configmodules("redhelper_small", "consultant"))
{
	$place .= '_small';
}
if($this->diafan->configmodules("redhelper_color", "consultant"))
{
	$result .= '<style type="text/css">
	.redhlp_button_diafan_'.$place.' span
	{
	background-color:'.$this->diafan->configmodules("redhelper_color", "consultant").' !important;
	}
	</style>';
}
$result  .= '<div class="redhlp_button_diafan_'.$place.' redhlp_button"><span class="offline"></span><span class="online"></span></div>
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" 
	src="https://web.redhelper.ru/service/main.js?c='.$this->diafan->configmodules("redhelper_login", "consultant").'">
</script>
<script>
redhlpSettings = {';
if($this->diafan->configmodules("redhelper_chatX", "consultant"))
{
	$result .= "\n".'chatX: "'.str_replace(array('"', "\n"), '', $this->diafan->configmodules("redhelper_chatX", "consultant")).'",'."\n";
}
if($this->diafan->configmodules("redhelper_chatY", "consultant"))
{
	$result .= "\n".'chatY: "'.str_replace(array('"', "\n"), '', $this->diafan->configmodules("redhelper_chatY", "consultant")).'",'."\n";
}
if($this->diafan->configmodules("redhelper_header", "consultant"))
{
	$result .= "\n".'header: "'.str_replace(array('"', "\n"), '', $this->diafan->configmodules("redhelper_header", "consultant")).'",'."\n";
}
if($this->diafan->configmodules("redhelper_topText", "consultant"))
{
	$result .= "\n".'topText: "'.str_replace(array('"', "\n"), '', $this->diafan->configmodules("redhelper_topText", "consultant")).'",'."\n";
}
if($this->diafan->configmodules("redhelper_welcome", "consultant"))
{
	$result .= "\n".'welcome: "'.str_replace(array('"', "\n"), '', $this->diafan->configmodules("redhelper_welcome", "consultant")).'",'."\n";
}
if($this->diafan->configmodules("redhelper_inviteTime", "consultant"))
{
	$result .= "\n".'inviteTime: '.intval($this->diafan->configmodules("redhelper_inviteTime", "consultant")).','."\n";
}
if($this->diafan->configmodules("redhelper_chatWidth", "consultant"))
{
	$result .= "\n".'chatWidth: '.intval($this->diafan->configmodules("redhelper_chatWidth", "consultant")).','."\n";
}
if($this->diafan->configmodules("redhelper_chatHeight", "consultant"))
{
	$result .= "\n".'chatHeight: '.intval($this->diafan->configmodules("redhelper_chatHeight", "consultant")).','."\n";
}

	//$result .= "\n".'hideBadge: true,'."\n";
	$result .= '
}

</script>
<!--/Redhelper -->';
		return $result;
	}

	/**
	 * Генерирует данные для шаблонной функции: on-line консультант системы LiveTex
	 * @return string
	 */
	private function livetex()
	{
		if(! $this->diafan->configmodules("livetex_id", "consultant"))
		{
			return '';
		}
		$result = '<script type=\'text/javascript\'> /* build:::7 */
			var liveTex = true,
				liveTexID = '.$this->diafan->configmodules("livetex_id", "consultant").',
				liveTex_object = true;
			(function() {
				var lt = document.createElement(\'script\');
				lt.type =\'text/javascript\';
				lt.async = true;
				lt.src = \'http://cs15.livetex.ru/js/client.js\';
				var sc = document.getElementsByTagName(\'script\')[0];
				if ( sc ) sc.parentNode.insertBefore(lt, sc);
				else  document.documentElement.firstChild.appendChild(lt);
			})();
		</script>';
		return $result;
	}

	/**
	 * Генерирует данные для шаблонной функции: on-line консультант системы JivoSite
	 * @return string
	 */
	private function jivosite()
	{
		if($this->diafan->configmodules("jivosite_id", "consultant"))
		{
			$result = "<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '".$this->diafan->configmodules("jivosite_id", "consultant")."';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->";
		}
		else
		{
			$result = '<!-- BEGIN JIVOSITE CODE {literal} -->
<a href="http://www.jivosite.ru?partner_id=1936&amp;lang=ru&amp;pricelist_id=5&amp;utm_source=diafan.ru&amp;utm_medium=link&amp;utm_content=offline_form&amp;utm_campaign=diafan" target="_blank"><div title="Зарегистрируйтесь на сайте JivoSite и активируйте консультант в административной части сайта" style="display:block;position:fixed;bottom:0px;"><div style="font-size:13px;font-family:Arial;color:rgb(240,241,241);font-weight:bold;font-style:normal;background-color:#696A86;padding: 8px 35px 5px 15px;border-top-right-radius:29px;height:31px;">Напишите нам, мы в онлайне! <div style="float:right;margin-top:-3px;padding: 0px 0px 0px 30px;"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="20" viewBox="0 0 108 36"><g><path id="text" d="M14.118 11.775h-1.985c-.198 0-.397 0-.595.2-.2.2-.2.398-.2.598V27.34c0 .2 0 .4.2.6.198.2.397.2.595.2h1.985c.2 0 .397 0 .596-.2.198-.2.198-.4.198-.6V12.574c0-.2 0-.4-.198-.6-.2 0-.397-.198-.596-.198m18.262 0h-1.587c-.596 0-.993.2-1.19.4l-4.567 9.977-4.367-9.978c-.2-.4-.398-.4-.795-.4H17.69c-.396 0-.594 0-.594.2-.2.2-.2.4 0 .6l7.146 15.366c.198.2.397.4.794.4h.198c.397 0 .596-.2.596-.4l7.146-15.367c.2-.2.2-.4 0-.6 0 0-.198-.198-.596-.198m9.727-.4c-2.382 0-4.367.8-5.955 2.595-1.588 1.596-2.58 3.592-2.58 5.987s.793 4.39 2.58 5.987c1.588 1.796 3.573 2.594 5.955 2.594s4.367-.798 5.955-2.594c1.588-1.796 2.382-3.792 2.382-5.987 0-2.395-.794-4.39-2.58-5.987-1.588-1.597-3.573-2.595-5.757-2.595m3.375 12.374c-.993.997-2.184 1.595-3.573 1.595-1.39 0-2.582-.4-3.574-1.397-.993-.998-1.39-2.195-1.39-3.792 0-1.396.397-2.793 1.39-3.592.992-.998 2.183-1.397 3.573-1.397 1.388 0 2.58.4 3.572 1.397.992.998 1.39 2.195 1.39 3.592 0 1.398-.398 2.595-1.39 3.593m16.873-3.394c-.596-.4-1.19-.798-1.59-.998-.594-.2-1.19-.6-2.182-.998-.993-.4-1.588-.798-2.183-1.197-.398-.4-.795-.798-.795-1.197 0-.4.2-.8.596-.998.398-.2.795-.4 1.59-.4 1.19 0 2.182.2 3.572.8.595.198.794.198.992-.4l.596-1.198c.198-.4.198-.798-.397-1.197-1.19-.798-2.78-1.198-4.764-1.198-1.788 0-3.177.4-4.17 1.397-.992.998-1.39 1.996-1.39 3.194 0 1.197.398 2.195 1.192 2.993.794.797 1.787 1.396 3.374 2.194 1.19.6 2.184.998 2.78 1.397.595.4.794.8.794 1.398 0 .4-.2.8-.596 1.198-.397.2-.993.4-1.588.4-1.19 0-2.58-.4-4.17-1.2-.594-.198-.793-.198-.99.2l-.795 1.597c-.198.4 0 .6.2.8 1.587 1.196 3.374 1.595 5.36 1.595 1.785 0 3.175-.4 4.366-1.397.992-.997 1.588-1.994 1.588-3.39 0-.8-.198-1.398-.397-1.997 0-.4-.397-.998-.992-1.397m7.146-8.58h-1.984c-.2 0-.398 0-.596.198-.198.2-.198.4-.198.6V27.34c0 .2 0 .4.198.6.198.2.397.2.596.2H69.5c.2 0 .397 0 .596-.2.2-.2.2-.4.2-.6V12.574c0-.2 0-.4-.2-.6-.2 0-.397-.198-.595-.198m14.293 12.972c-.2-.4-.596-.6-.993-.4-.794.6-1.786.8-2.58.8-.397 0-.794-.2-.993-.4-.198-.2-.397-.6-.397-1.398v-8.782h4.367c.2 0 .397 0 .596-.2.198 0 .198-.2.198-.398v-1.397c0-.2 0-.4-.197-.6-.2-.198-.397-.198-.596-.198H78.83v-4.59c0-.2 0-.4-.198-.6-.2 0-.2-.2-.596-.2H76.05c-.197 0-.396 0-.594.2-.2.2-.2.4-.2.6v4.59h-1.984c-.595 0-.794.2-.794.798v1.397c0 .2 0 .4.2.598.197.2.395.2.594.2h1.985v8.98c0 1.597.397 2.795.993 3.593.595.8 1.786 1.198 3.176 1.198.794 0 1.786-.2 2.58-.4.794-.198 1.588-.598 1.985-.797.398-.2.597-.598.398-.997l-.595-1.596M99.276 13.57c-1.39-1.396-3.176-2.195-5.36-2.195-2.382 0-4.367.8-5.955 2.595-1.587 1.596-2.38 3.592-2.38 5.987s.793 4.39 2.38 6.186c1.59 1.597 3.574 2.395 5.957 2.395 2.58 0 4.565-.598 6.153-1.995.397-.4.397-.8 0-1.198l-.992-1.397c-.2-.4-.596-.4-.993 0-1.39.998-2.58 1.397-3.97 1.397-1.39 0-2.58-.4-3.573-1.397-.993-.998-1.39-1.996-1.39-3.193h11.315c.397 0 .794-.2.794-.798V18.76c.2-1.996-.595-3.792-1.984-5.19m-9.925 4.59c.2-.997.596-1.995 1.39-2.594.794-.798 1.787-.998 2.978-.998 1.19 0 2.183.4 2.78.998.793.8 1.19 1.597 1.19 2.595H89.35M6.576 11.776H1.017c-.198 0-.397 0-.595.2-.2.2-.2.398-.2.598v1.995c0 .2 0 .4.2.6.198.2.397.2.595.2h2.78v14.368c0 1.397-1.192 2.594-2.58 2.594h-.2c-.198 0-.397 0-.595.2-.2.2-.2.4-.2.598v1.996c0 .2 0 .4.2.6.198.198.397.198.595.198h.2c3.373 0 6.152-2.794 6.152-5.987V12.772c0-.2 0-.4-.2-.598-.198-.2-.198-.4-.595-.4z" fill-rule="evenodd" fill="#ffffff"></path><path id="leaf" d="M7.37 10.577C6.97.4.222 0 .222 0-.174 9.18 7.37 10.577 7.37 10.577z" fill-rule="evenodd" fill="#44bb6e"></path></g></svg></div></div><div style="background-color: rgb(68, 187, 110);position: absolute;top: 0;right: 0px;height: 29px;width: 29px;border-top-right-radius: 29px;border-bottom-left-radius: 29px;"></div></div></a>
<!-- {/literal} END JIVOSITE CODE -->';
		}
		return $result;
	}
}