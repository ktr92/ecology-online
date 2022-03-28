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
		<div class="col-md-3 col-sm-4 col-xs-12">
			<div class="logo-footer">
				<img src="/images/logo-2.png" alt="">
				<p>&copy; 2007-2021 «Экостандарт»</p>
				<p>Экологическое сопровождение <br/>«под ключ»</p>
			</div>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<h3>Услуги</h3>
			<ul class="footer-links">
			<li><a href="/obuchenie/">Обучение</a></li>
				<li><a href="/uslugi/">Паспорт опасного отхода</a></li>
				<li><a href="/uslugi/#usluga-pdv">Разработка ПДВ</a></li>
				<li><a href="/uslugi/#usluga-pnoolr">Разработка ДВОС</a></li>
			<!--	<li><a href="/uslugi/#usluga-autsort">Аутсортинг по экологии</a></li> -->
			</ul>
		</div>
		<div class="col-md-2 col-md-offset-1 col-sm-4 col-xs-12">
			<h3>Компания</h3>
			<ul class="footer-links">
				<li><a href="/o-kompanii/">О компании</a></li>
				<li><a href="/o-kompanii/#sert-page">Наши сертификаты</a></li>
				<li><a href="/vopros-otvet/">Вопрос-ответ</a></li>
				<li><a href="/kontakty/">Контакты</a></li>
			</ul>
		</div>
		<div class="col-md-3 col-md-offset-1 col-sm-12 col-xs-12">
			<div class="phone">
				<a href="tel:89520376181"><b>+7 (952)</b> 037-61-81</a>
				<a href="tel:88552367830"><b>+7 (8552)</b> 36-78-30</a>
			</div>
		</div>
	</div>
</div>
  
  <!-- Модальные окно - Политика конфиденциальности -->
  <div id="myModal_politika" class="modal fade" style="z-index: 9999;">
  <div class="modal-dialog" id="modal_politika">
    <div class="modal-content">
      <!-- Заголовок модального окна -->
      <div class="modal-header">
        <button type="button" class="close" id="modal_zvonok_close" data-dismiss="modal" aria-hidden="true"><img src="images/close.png"></button>
        <h4 class="modal-title" id="modal_politika_title">Политика конфиденциальности</h4> 
      </div> 
	  <!-- Основное содержимое модального окна -->
      <div class="polit">
        <p style="text-align: justify;">Мы признаем важность конфиденциальности информации. В этом документе описывается, какую личную информацию мы получаем и собираем, когда Вы пользуетесь сайтом . Мы надеемся, что эти сведения помогут Вам принимать осознанные решения в отношении предоставляемой нам личной информации.</p>
		<h5>Общедоступная информация и идентификация посетителей</h5>
		<p style="text-align: justify;">На нашем сайте не предусмотрена система регистрации, поэтому если Вы просто просматриваете наш сайт, информация о Вас не публикуется нигде на сайте.</p>
		<h5>Телефонный номер, электронная почта и имя</h5>
		<p style="text-align: justify;">Номер телефона, почта и имя, указываемые Вами при отправке заявки и заказе обратного звонка, не показываются другим посетителям сайта. Мы можем сохранять полученные данные и другие письма, отправленные Вами, чтобы обрабатывать Ваши заявки, отвечать на запросы клиентов и совершенствовать уровень обслуживания.</p>
		<h5>Цели сбора и обработки персональной информации пользователей</h5>
		<p style="text-align: justify;">На сайте есть возможность заказа обратного звонка, отправки электронной почты и возможность оставить заявку на услуги. Ваше добровольное согласие на заказ обратного звонка и (или) отправку электронной почты и (или) оставление заявки на услуги подтверждается путем ввода Вашего Имени и Номера Телефона или Электронной Почты в форму заявки, форму отправки письма и в форму заказа обратного звонка. Ваше Имя используется для личного обращения к Вам, а Номер Телефона и/или Электронная Почта &mdash; для связи с Вами нашими сотрудниками для предложения наших услуг, ответа на Ваши вопросы и для других видов обработки Вашего обращения. Пользователь предоставляет свои данные добровольно, только после этого, в дальнейшем, с ним связывается наш сотрудник. Данные хранятся в архиве до тех пор, пока существует наша компания.</p>
		<h5>Условия обработки и её передачи третьим лицам</h5>
		<p style="text-align: justify;">Ваши Имя и Номер телефона никогда и ни при каких условиях не будут переданы третьим лицам, исключая случаи, которые связаны с исполнением законодательства Российской Федерации.</p>
		<h5>Протоколирование</h5>
		<p style="text-align: justify;">При каждом посещении сайта наши серверы автоматически записывают информацию, которую Ваш браузер передает при посещении веб-страниц. Как правило, эта информация включает запрашиваемую веб-страницу, IP-адрес компьютера, тип браузера, языковые настройки браузера, дату и время запроса, а также один или несколько файлов cookie, которые позволяют точно идентифицировать Ваш браузер.</p>
		<h5>Куки (cookie)</h5>
		<p style="text-align: justify;">На сайте используются куки (Cookies), происходит сбор данных о посетителях с помощью сервисов Яндекс Метрика и Google Analitycs. Эти данные служат для сбора информации о действиях посетителей на сайте, для улучшения качества его содержания, возможностей и удобства использования. В любое время Вы можете изменить параметры в настройках Вашего браузера таким образом, чтобы браузер перестал передавать (сохранять) все файлы cookie, а также оповещал об их отправке. При этом следует учесть, что в этом случае некоторые сервисы и функции могут перестать работать.</p>
		<h5>Изменение политики конфиденциальности</h5>
		<p style="text-align: justify;">На этой странице Вы сможете узнать о любых изменениях данной политики конфиденциальности. В особых случаях Вам будет выслана информация на Ваш телефон.</p>
		<h5>Затраты на доступ</h5>
		<p style="text-align: justify;">Вы должны обеспечить за свой счет оборудование и подключение к Интернет, необходимые Вам для получения доступа к Сайту и его использования. Вы несете единоличную ответственность за любые затраты на доступ к Сайту через беспроводную связь или иные.</p>
      </div>     
    </div>
  </div>
  </div>
<!-- шаблонный тег show_js подключает JS-файлы. Описан в файле themes/functions/show_js.php. -->
<?=$this->diafan->_parser_theme->get_function_in_theme('<insert name="show_js">'); ?>

<!— Yandex.Metrika counter —> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter49257250 = new Ya.Metrika2({ id:49257250, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js";;; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/49257250";; style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!— /Yandex.Metrika counter —>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46517106 = new Ya.Metrika({
                    id:46517106,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46517106" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
