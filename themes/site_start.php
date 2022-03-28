<?php
/**
 * Шаблон стартовой страницы сайта
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2017 OOO «Диафан» (http://www.diafan.ru/)
 */
 
if(! defined("DIAFAN"))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<insert name="show_head">
<link rel="shortcut icon" href="<insert name="path">favicon.ico" type="image/x-icon">
<!--<insert name="show_css" files="default.css, style.css">-->
</head>
<body>
	<header id="header"><insert name="show__header">  </header>  
		<main>
		<div class="top-block">
			<section class="firstblock">			
				<div class="slider">
					<div class="slide" style="background-image: url(/images/slide-1.jpg);">
						<div class="mask">
						<div class="container">  
							<div class="row">
								<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2  col-xs-10 col-xs-offset-2 ">
									<header class="index-h1">
										<h1 style="text-align: center;">Оформление онлайн <br/>паспорта опасного отхода<br/> <span class="no-upper">от 1000 руб. за 5 дней</span></h1>	
										<p style="text-align: center;">Работаем по всей России</p>
										<a href="/uslugi/#usluga-othod" class="zayavka-submit">Подробнее</a>
									</header>
								</div>
							</div> 
						</div>
						</div>
					</div>
					<div class="slide"  style="background-image: url(/images/slide-3.jpg);">	
						<div class="mask">
					
						<div class="container">  
							<div class="row">
								<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2  col-xs-10 col-xs-offset-2">
									<header class="index-h1">
										<h2 style="text-align: center;">ДЕКЛАРАЦИЯ <br/>О ВОЗДЕЙСТВИИ НА ОС<br/> <span class="no-upper">от 50 000 руб.</span></h2>	
										<a href="/uslugi/#usluga-pnoolr" class="zayavka-submit">Подробнее</a>
									</header>
								</div>
							</div> </div>
						</div>
					</div>	
					<div class="slide"  style="background-image: url(/images/slide-4.jpg);">			
						<div class="mask">

						<div class="container">  
							<div class="row">
								<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2  col-xs-10 col-xs-offset-2">
									<header class="index-h1">
										<h2 style="text-align: center;">Разработка проекта<br/>предельно-допустимых выбросов<br/> <span class="no-upper">от 30 000 руб.</span></h2>	
										<a href="/uslugi/#usluga-pdv" class="zayavka-submit">Подробнее</a>
									</header>
								</div>
							</div> 
						</div></div>
					</div>
					<div class="slide"  style="background-image: url(/images/slide-2.jpg);">			
						<div class="mask">

						<div class="container">  
							<div class="row">
								<div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2  col-xs-10 col-xs-offset-2">
									<header class="index-h1">
										<h2 style="text-align: center;">Получение лицензии на<br/>обращение с опасными отходами<br/> <span class="no-upper">от 50 000 руб.</span></h2>	
										<a href="/uslugi/#usluga-8" class="zayavka-submit">Подробнее</a>
									</header>
								</div>
							</div> 
						</div></div>
					</div>					
				</div>
					<div class="slider-right">
						<div class="owl-next"><i class="fa fa-angle-right"></i></div>
					</div>
					<div class="slider-left">
						<div class="owl-prev"><i class="fa fa-angle-left"></i></div>
					</div>
			</section>
			
			<div class="zayavka">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
									<div class="zay-left">
										<div class="zay-left-image">
											<img src="/images/list.png" alt="" class="hidden-xs">
										</div>
										<div class="zay-text">ОСТАВЬТЕ ЗАЯВКУ <br/>прямо сейчас <br/>и получите <b>бесплатный экологический аудит деятельности!</b></div>
									</div>
								</div>
								<div class="col-md-5 col-sm-6 col-xs-12">
									<div class="zay-right">
										<insert name="show_form" module="feedback" site_id="33" template="form1">

										<!--<form method="post" action="" onsubmit="sendFormEmail(this); return false;" data-metrika-target="ograzhdenie">
											<div class="row">
												<div class="col-md-6 col-sm-6"><input type="text" name="name" class="zayavka-left" placeholder="Ваше имя"></div>
												<div class="col-md-6 col-sm-6"><input type="tel" name="phone" class="zayavka-right" placeholder="Ваш телефон"></div>
												<div class="col-md-6 col-sm-6"><input type="email" name="email" class="zayavka-left" placeholder="Ваш email"></div>
												<div class="col-md-6 col-sm-6"><button class="zayavka-submit">Оставить заявку</button></div>
											</div>
										</form>-->
										<p class="politika-par">Отправляя форму, вы соглашаетесь с <a href="#myModal_politika" data-toggle="modal">политикой конфиденциальности</a></p>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<section class="serv">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="/uslugi/#usluga-othod" class="img-link">
						<div class="txt">
							<span class="title">Паспорта отходов</span>
						</div>
						<img src="/images/pass_othod.jpg" alt="Паспорта отходов" class="img" />
						<div class="cover-bg"></div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="/uslugi/#usluga-pnoolr" class="img-link">
						<div class="txt" style="    background: rgba(255,255,255,0.5);
    height: 100%;">
							<span class="title">ДВОС</span><br /><br />
							<span>Декларация о воздействии на окружающую среду</span>
						</div>
						<img src="/images/dvos.png" alt="ПНООЛР" class="img" />
						<div class="cover-bg"></div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="/uslugi/#usluga-pdv" class="img-link">
						<div class="txt">
							<span class="title">ПДВ</span><br /><br />
							<span>Проект предельно допустимых выбросов</span>
						</div>
						<img src="/images/pdv.jpg" alt="ПДВ" class="img" />
						<div class="cover-bg"></div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="/uslugi/#usluga-7" class="img-link">
						<div class="txt">
							<span class="title">СЗЗ</span><br /><br />
							<span>Проект санитарно-защитной зоны</span>
						</div>
						<img src="/images/sez.jpg" alt="СЭЗ" class="img" />
						<div class="cover-bg"></div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="/uslugi/#usluga-8" class="img-link">
						<div class="txt">
							<span class="title">Лицензия на обращение с опасными отходами</span>
						</div>
						<img src="/images/license_othody.jpg" alt="Лицензия на обращение с опасными отходами" class="img" />
						<div class="cover-bg"></div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="/uslugi/#usluga-9" class="img-link">
						<div class="txt">
							<span class="title">Экологическое сопровождение</span><br /><br />
							<span>Ваш личный эколог</span>
						</div>
						<img src="/images/eco_sopr.jpg" alt="Экологическое сопровождение" class="img" />
						<div class="cover-bg"></div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="/uslugi/#usluga-1" class="img-link">
						<div class="txt">
							<span class="title">ПЭК</span><br /><br />
							<span>Программа производственного экологического контроля</span>
						</div>
						<img src="/images/ecol_control.jpg" alt="СЭЗ" class="img" />
						<div class="cover-bg"></div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<a href="/obuchenie/" class="img-link">
						<div class="txt" style="    background: rgba(255,255,255,0.5);
    height: 100%;">
							<span class="title">Обучение 417-ти программам</span>
						</div>
						<img src="/img/educ-bg3.jpg" alt="Экологическое сопровождение" class="img" />
						<div class="cover-bg"></div>
					</a>
				</div>
			</div>
		</section>
		
		<section class="educ">
			<div class="maska">
				<div class="container">
					<h2>Профессиональное обучение и<br/>повышение квалификации</h2>
					<p class="subtitle">Дистанционное обучение по 417 программам и курсам</p>
					
					<div class="col-md-4 col-sm-12 col-xs-12">
						<ul>
							<a href="/obuchenie/ekologiya-otkhody/"><li>Экология. Обращение с отходами</li></a>
							<a href="/obuchenie/okhrana-truda-i-pozharnaya-bezopasnost/"><li>Охрана труда и пожарная безопасность</li></a>
							<a href="/obuchenie/okhrana-truda-pri-rabote-na-vysote/"><li>Охрана труда при работе на высоте</li></a>
							<a href=" /obuchenie/grazhdanskaya-oborona-i-chrezvychaynye-situatsii/"><li>ГО и ЧС</li></a>
							<a href="/obuchenie/pozharnaya-bezopasnost-pp/"><li>Пожарная безопасность</li></a>
							<a href="/obuchenie/radiatsionnaya-bezopasnost/"><li>Радиационная безопасность</li></a>
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<ul>
							<a href="/tekhnosfernaya-bezopasnost/"><li>Техносферная безопасность</li></a>
							<a href="/obuchenie/ekspluatatsiya-sosudov-pod-davleniem/"><li>Эксплуатация сосудов под давлением</li></a>
							<a href="/obuchenie/elektrobezopasnost/"><li>Электробезопасность</li></a>
							<a href="/obuchenie/povyshenie-kvalifikatsii-dlya-sro/"><li>Повышение квалификации для СРО</li></a>
							<a href="/obuchenie/bezopasnost-dorozhnogo-dvizheniya/"><li>Безопасность дорожного движения</li></a>
							<a href="/obuchenie/zaschitnoe-vozhdenie/"><li>Защитное вождение</li></a>	
						</ul>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<ul>
							<a href="/obuchenie/okazanie-pervoy-pomoschi/"><li>Оказание первой помощи</li></a>
							<a href="/obuchenie/medosmotr-dlya-voditeley/"><li>Медосмотр для водителей</li></a>
							<a href="/obuchenie/pervaya-pomosch-pri-dtp/"><li>Первая помощь при ДТП</li></a>
							<a href="/obuchenie/marksheyderskoe-delo-pp/"><li>Маркшейдерское дело</li></a>
							<a href="/obuchenie/antiterroristicheskaya-zaschischennost-obektov/"><li>Антитеррористическая защищенность</li></a>
							<a href="/obuchenie/smk-dlya-laboratoriy/"><li>СМК для лабораторий</li></a>
					</div>
				</div>
			</div>
		</section>
		
		<section class="preimuschestva">
			<div class="container">
				<h2>Наши преимущества</h2>
				<p class="block-descr">Сотрудничество с  нами поможет усовершенствовать деятельность Вашего предприятия в соответствии со всеми законодательными и нормативно-правовыми актами и требованиями.</p>
				<div class="row">
					<div class="col-md-6">
						<ul class="preim">
							<li>Разработка паспорта опасного отхода от 5 до 10 рабочих дней.</li>
							<li>Мы даем гарантийные обязательства для наших клиентов сроком 1 год.</li>
							<li>У нас нет шаблонов - к каждому клиенту осуществляется индивидуальный подход.</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="preim">
							<li>Проводим срочную подготовку предприятия к плановым и внеплановым проверкам.</li>
							<li>Все наши специалисты имеют большой опыт пройденных проверок.</li>
							<li>Помогаем минимизировать штрафные санкции и снизить платежи за негативное воздействие.</li>
						</ul>
					</div>
				</div>
				<div class="opyt">Опыт нашей работы более 10 лет</div>
			</div>
		</section>
		
		<section class="straf">
			<div class="container">
				<div class="row">
					<div class="col-md-6 hidden-sm hidden-xs"><img src="/images/list2.png" alt=""></div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h2>Узнайте как избежать штрафов  по экологии <br/> и получите наш прайс</h2>
						<div class="zay-right">
							<insert name="show_form" module="feedback" site_id="34" template="form2">

							<!--<form method="post" id="form-straf" action="" onsubmit="sendFormEmail(this); return false;" data-metrika-target="ograzhdenie">
								<div class="row">
									<div class="col-md-6 col-sm-6"><input type="text" name="name" class="zayavka-left" placeholder="Ваше имя"></div>
									<div class="col-md-6 col-sm-6"><input type="tel" name="phone" class="zayavka-right" placeholder="Ваш телефон"></div>
									<div class="col-md-6 col-sm-6"><input type="email" name="email" class="zayavka-left" placeholder="Ваш email"></div>
									<div class="col-md-6 col-sm-6"><button class="zayavka-submit">Оставить заявку</button></div>
								</div>
							</form>-->
							<p class="politika-par">Отправляя форму, вы соглашаетесь с <a href="#myModal_politika" data-toggle="modal">политикой конфиденциальности</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="doverie">
			<div class="container">
				<h2>Нам доверяют</h2>
				<div class="block-descr">Нам доверяют фирмы с мировым именем. Нашими постоянными клиентами являются как ведущие российские и международные компании, так и представители среднего и малого бизнеса.</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1 col-sm-12">
							<div class="row">
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/1.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/2.png" alt=""></div>
								</div>
								<!--<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/3.png" alt=""></div>
								</div>-->
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/4.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/5.png" alt=""></div>
								</div>
								<!--<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/6.png" alt=""></div>
								</div>-->
								<!--<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/7.png" alt=""></div>
								</div>-->
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/8.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/9.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/10.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/kopa.png" alt=""></div>
								</div>
								<!--<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/12.png" alt=""></div>
								</div>-->
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/13.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/14.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/15.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/logo_mall.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/hh_logo.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/raritek.png" alt=""></div>
								</div>
								<div class="col-md-2 col-sm-4 col-xs-4">
									<div class="partner"><img src="/images/tatprof.png" alt=""></div>
								</div>
							</div>
						</div>
					</div>
					<div class="opyt">Мы будем рады видеть вашу компанию <br/>в числе наших клиентов</div>
				</div>
		</section>
		
		<section class="recommend">
			<div class="container">
				<h2>Нас рекомендуют</h2>
				<div class="block-descr">Верность высоким стандартам обслуживания позволяет нам выстраивать долгосрочные партнерские отношения с заказчиками.  Наши клиенты уже оценили качество нашей работы.</div>
				<div class="reviews-container">
					<div class="reviews">
						<div class="review">
									<div class="row">
										<div class="col-md-3 col-md-offset-1 col-sm-4 hidden-xs"><a href="/images/sert-1.jpg" data-lightbox="serts" class="review-image"><img src="/images/sert-1.jpg" alt=""></a></div>
										<div class="col-md-7 col-sm-8 col-xs-12">
											<div class="review-text">
												<p>АО “КИП МАСТЕР” благодарит Сагдеева М.М. за оказание своевременных и качественных услуг в части экологического сопровождения предприятия.</p>
												<p>Мы высоко оценили ответственность и профессионализм Ваших сотрудников. Выражаем надежду на продолжение успешного сотрудничества на благо общих интересов.</p>
												<p>Желаем Вашей компании дальнейших успехов, динамичного роста, экономической стабильности и процветания!</p>
												<p class="review-right">Главный инженер,  Леонтьев В.А.</p>
											</div>
										</div>
									</div>
						</div>
						<div class="review">
							
									<div class="row">
										<div class="col-md-3 col-md-offset-1 col-sm-4 hidden-xs"><a href="/images/sert-2.jpg" data-lightbox="serts" class="review-image"><img src="/images/sert-2.jpg" alt=""></a></div>
										<div class="col-md-7 col-sm-8 col-xs-12">
											<div class="review-text">
												<p>ООО «СтиС-Набережные Челны» благодарит вашу организацию за качественное и оперативное оказание услуг по разработке и согласованию паспортов опасных отходов.</p>
												<p>Мы высоко оценили профессиональных подход, обширный практический опыт по взаимодействию с государственными природоохранными органами и внимательное отношение к потребностям нашей компании со стороны специалистов Вашей организации.</p>
												<p class="review-right">Представитель управляющей организации <br/> ООО «СтиС-Набережные Челны»,  Уразов Д.В.</p>
											</div>
										</div>
							</div>
						</div>
						<div class="review">
							<div class="row">
										<div class="col-md-3 col-md-offset-1 col-sm-4 hidden-xs"><a href="/images/sert-3.jpg" data-lightbox="serts" class="review-image"><img src="/images/sert-3.jpg" alt=""></a></div>
										<div class="col-md-7 col-sm-8 col-xs-12">
											<div class="review-text">
											<p>Наша компания ООО «Кикерт Рус» выражает признательность ИП Сагдееву М.М. за качество, исполнительность, высокий профессионализм при оказании услуг экологического сопровождения деятельности.</p>
											<p>Хотим подчеркнуть высокую квалификацию сотрудников, ответственность, оперативность и знание законодательной базы.</p>
											<p class="review-right">Генеральный директор,  Консон А.Е.</p>
											</div>
										</div>
									
							</div>
						</div>
						<div class="review">
							<div class="row">
								
										<div class="col-md-3 col-md-offset-1 col-sm-4 hidden-xs"><a href="/images/sert-4.jpg" data-lightbox="serts" class="review-image"><img src="/images/sert-4.jpg" alt=""></a></div>
										<div class="col-md-7 col-sm-8 col-xs-12">
											<div class="review-text">
												<p>ООО «Торговый Дом «ГеоМ» обратилось к ИП Сагдееву М.М. за оказанием услуг по получению паспортов опасных отходов. В результате сотрудничества с Вашей организацией документы были разработаны в срок.</p>
												<p>Хотим подчеркнуть Ваш высокий уровень профессионализма, оперативность и исполнительность в решении этой задачи.</p>
												<p class="review-right">Генеральный директор,  Мищихина Л.Ю.</p>
											</div>
										</div>
									</div>
								
						</div>
					</div>
					<div class="slider-right">
						<div class="owl-next"><i class="fa fa-angle-right"></i></div>
					</div>
					<div class="slider-left">
						<div class="owl-prev"><i class="fa fa-angle-left"></i></div>
					</div>
				</div>
				<div class="opyt">Добавляйте логотип своей компании в команду<br/> наших партнеров! <br/>Присоединяйтесь к успешным лидерам рынка!</div>
			</div>
		</section>
		
		<section class="questions">
			<div class="container">
				<h2>Часто задаваемые вопросы</h2>
				<div class="block-descr">Ниже представлены часто задаваемые вопросы наших клиентов и ответы на них.</div>
				<div class="questions-list">
					<div class="question-item">
						<div class="vopros"><p>Здравствуйте! Предприятие "А" ликвидировано, вместо него создано предприятие "В". ПДВ, ПНООЛР, СЗЗ для предприятие "А" были разработаны и согласованы. Можно ли использовать данные этих проектов для расчета платы предприятию "В"? Будут ли действовать данные проекты для нового предприятия или необходима разработка всех проектов заново? Спасибо!</p> 
						 <span class="see-answer">Посмотреть ответ</span></div>						
						<div class="otvet"><p>Для нового предприятия необходимо заново согласовывать проекты и получать лимиты и разрешения, оформленные на данное предприятие. Возможность использования данных предприятия А для расчета платы зависит от технологических процессов предприятия В.</p></div>
					</div>
					<div class="question-item">
						<div class="vopros"><p>Здравствуйте! я частный предприниматель имею небольшой продовольственный магазин, впервые услышал о данном налоге (воздействие на ОС) неделю назад от экологического инспектора, с чего мне начать и нужно ли мне его платить?</p> <span class="see-answer">Посмотреть ответ</span></div>
						<div class="otvet"><p>Юридические лица и частные предприниматели обязаны соблюдать требования природоохранного законодательства, в том числе вносить платежи за негативное воздействие на ОС (ФЗ-7 "Об охране окружающей среды и ФЗ-89 "Об отходах производства и потребления").</p> </div>
					</div>
					<div class="question-item">
						<div class="vopros"><p>Добрый день! Подскажите если оплата за негативное воздействие была внесена до 20 числа месяца идущего за отчетным, а сам расчет был направлен в территориальный орган Росприроднадзора 23 числа. Какой статьей предусмотрено наказание за задержку в предоставлении?</p> <span class="see-answer">Посмотреть ответ</span></div>
						<div class="otvet"><p>Если документами подтверждается своевременное внесение платы за негативное воздействие на ОС Вашей организацией до 20 числа месяца, следующего за отчетным кварталом, то ст. 8.41 КОАП не может быть применена. Наказание за несвоевременное предоставление декларации не предусмотрено.</p></div>
					</div>
					<div class="question-item">
						<div class="vopros"><p>Если количество образовавшихся за отчетный период отходов по некоторым позициям меньше установленного годового лимита или же некоторые виды отходов вообще отсутствуют в этом отчетном периоде, может ли это стать причиной для отказа в продлении лимитов?</p> <span class="see-answer">Посмотреть ответ</span></div>
						<div class="otvet"><p>Для отказа в продлении лимитов оснований нет. Технический отчет при "продлении" лимитов носит уведомительный характер.</p></div>
					</div>
				</div>
				<div class="see-all">
					<a href="/vopros-otvet/">Посмотреть все</a>
				</div>
			</div>
		</section>
		
		<section class="new-question">
			<div class="container">
				<h2>Не нашли ответа на ваш вопрос?</h2>
				<div class="zay-right">
							<insert name="show_form" module="feedback" site_id="43" template="form3">
							<p class="politika-par">Отправляя форму, вы соглашаетесь с <a href="#myModal_politika" data-toggle="modal">политикой конфиденциальности</a></p>
						</div>
				
			</div>
		</section>
		
		<section class="seotext-index">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<article>
							<h2>Экологическое сопровождение предприятий</h2>
							<div class="text-index">
								<p>Сопровождение предприятия в сфере экологии означает полную или частичную передачу функции решения соответствующих вопросов стороннему экологу. Иными словами, это экологический аутсорсинг.
								Особенно выгодно пользоваться услугами по экологическому сопровождению малому и среднему бизнесу, которым обычно экономически не выгодно держать у себя штатного эколога.
								Услуга «эколог на предприятии» обходится бизнесу в несколько раз выгоднее, чем эколог в штате, без потери в качестве предоставления услуг.
								Экологическое сопровождение предприятия включает в себя:
								<ul>
								<li>разработку необходимой экологической документации;</li>
								<li>решение экологических вопросов непосредственно на предприятии и реализация мер по охране окружающей среды;</li>
								<li>сдачу ежегодной и ежеквартальной отчетности предприятия;</li>
								<li>присутствие во время проведения плановой проверки организации.</li>
								</ul>
								</p>
							</div>
						</article>
					</div>
					<!--<div class="col-md-4 hidden-sm hidden-xs ">
						<div class="index-seotext-image"><img src="/images/klient.png" alt=""></div>
					</div>-->
				</div>
			</div>
		</section>
	</main>
	<footer id="footer"><insert name="show__footer">  </footer>  
</body>
</html>