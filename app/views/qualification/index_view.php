<main id="courses">

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-3 mob-hl-3"> 
				<span><b><?=$this->text('Підвищення')?></b></span> <p class="w-25 w-lil-25"><?=$this->text('Підвищення кваліфікації візажистів')?> </p>
			</h2>
			<div class="text-to-back">
				<p class="m-text">
					<?=$this->text('Поглиблене вивчення тонкощів професії візажиста')?>
					<!-- <br><span>Дата:</span> 20-04-2020 -->
					<br><span><?=$this->text('Вартість:')?></span> <?=$this->text('5000 грн')?>
				</p>
				<a href="#" class="order-dark course-popup" data="Підвищення кваліфікації візажистів"><?=$this->text('Зареєструватись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/qualification/desctop/main.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/qualification/tablet/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/qualification/mobile/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
	</section>

	<section class="container align-center padding-50 reverce-tablet">
		<div class="w-50">
			<div class="text-description">
				<h3><?=$this->text('Загальна інформація')?></h3>
				<p>
					<?=$this->text('Курс «Підвищення кваліфікації візажистів» направлений на поглиблене вивчення тонкощів професії візажиста. Курс розроблений для тих, хто активно працює у сфері make-up. Обов’язковою умовою проходження цього навчання є наявність сертифікату або підтвердження проходження базового курсу візажу школи «NOOR Studio» або будь-якої іншої школи. Після навчання ви отримаєте офіційний диплом з підписом та лого школи.')?>
				</p>
				<h3><?=$this->text('Тривалість')?></h3>
				<p>
					<?=$this->text('Курс складається з чотирьох занять. Заняття включає практику і домашнє завдання. Навчання буде проходити в студії NOOR. Під час заняття ви отримаєте необхідні матеріали, персональну підтримку професійного майстра студії та модель для практики. Підвищення кваліфікації візажиста включає весільний, вечірній макіяж, smoky eyes та кольоровий макіяж по хроматичному колі. Після кожного заняття буде домашнє завдання. Успішне проходження курсу гарантує отримання диплому школи «NOOR Studio».')?>  
				</p>
				<div class="flex" id="c_price">
					<div class="w-50 w-lil-50 underpink">
						<h4><?=$this->text('Вартість та оплата')?></h4>
						<h5><?=$this->text('5000 грн')?></h5>
					</div>
					<div class="w-50 w-lil-50 underpink">
						<h4><?=$this->text('Підтримка')?></h4>
						<a href="mailto:<?=$this->text('hello@noorstudio.com')?>"><h5><?=$this->text('hello@noorstudio.com')?></h5></a>
					</div>
				</div>
			</div>
			<div id="c_price_place"></div>
		</div>
		<div class="w-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[1]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/qualification/desctop/info.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/qualification/tablet/info.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/qualification/mobile/info.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
	</section>
	
	<section class="container align-center padding-50">
		<div class="w-50">
			<div class="photo-rectangles left">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[2]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/qualification/desctop/programm.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/qualification/tablet/programm.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/qualification/mobile/programm.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
		<div class="w-50">
			<div class="text-description">
				<h3><?=$this->text('Програма курсу')?></h3>
				<div class="faq">
					<?php $in = 0; if($faq = $this->load->function_in_alias('faq', '__get_Questions', array('group' => 3))){ foreach ($faq as $n) { ?>
					<div class="question <?=$in == '0' ? 'open' : 'closed'?>">
						<div class="w-100">
							<h5><?=$n->question?></h5>
							<span class="mark">
								<div class="lines line-one"></div>
								<div class="lines line-two"></div>
							</span>
						</div>
						<div class="answer <?=$in == '0' ? 'opened' : ''?>">
							<?= html_entity_decode($n->answer) ?>
						</div>
					</div>
					<?php $in++; } }?>
				</div>
			</div>
		</div>
	</section>

	<section class="container align-center padding-50 reverce-mobile">
		<div class="w-50 w-lil-50">
			<div class="text-description">
				<h3><?=$this->text('Після навчання ви отримаєте відповіді:')?></h3>
				<ul class="pink m50">
					<li> <span></span> <p><?=$this->text('Обширні знання сфери make-up та її аспектів з боку практикуючого візажиста')?> </p></li>
					<li> <span></span> <p><?=$this->text('Інструменти для покращення якості роботи та отримання нових клієнтів ')?></p></li>
					<li> <span></span> <p><?=$this->text('Глибинні знання по конкретним видам макіяжу та процесів роботи візажиста')?> </p></li>
					<li> <span></span> <p><?=$this->text('Розуміння та інструменти для застосування на практиці нових робочих методів візажу')?> </p></li>
				</ul>
				<a href="#" class="order-dark course-popup" data="Підвищення кваліфікації візажистів"><?=$this->text('Зареєструватись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[3]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/qualification/desctop/sertificate.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/qualification/tablet/sertificate.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/qualification/mobile/sertificate.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
	</section>

	<style type="text/css">
	<?php if($imgs = $this->db->getAllDataByFieldInArray('wl_images', array('alias' => 11))){ 
		$i = 1; foreach ($imgs as $img) {?>
			.img-c-<?=$i?> { background-image: url(<?=IMG_PATH?>courses/0/<?=$img->file_name?>) !important; }
	<?php $i++; } } ?>
	</style>

	<section class="container align-center padding-50" id="main-services">
		<div class="w-100 w-lil-100">
			<h2 class="back-text lines-2 text-tablet-center"> 
				<span><b class="text-tablet-center"><?=$this->text('Також')?></b></span> <p class="text-tablet-center"><?=$this->text('Також ми навчаємо')?></p>
			</h2>
		</div>
		<div class="w-25 w-lil-50">
			<figure>
				<figcaption><?=$this->text('Обширний практичний курс бровиста', 0)?></figcaption>
				<div class="fig-desc">
					<p><?=$this->text('Ми навчимо вас виконувати корекцію та покраску брів будь-якої складності', 0)?> </p>
					<a href="<?=SITE_URL?>eyebrow" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-c-1"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>eyebrow" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>eyebrow" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure>
				<figcaption><?=$this->text('Візажист з нуля', 0)?> </figcaption>
				<div class="fig-desc">
					<p><?=$this->text('Вивчення тонкощів професії візажиста та всіх необхідних навиків', 0)?></p>
					<a href="<?=SITE_URL?>makeup" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-c-2"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>makeup" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>makeup" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure>
				<figcaption><?=$this->text('Cам собі візажист', 0)?> </figcaption>
				<div class="fig-desc">
					<p><?=$this->text('Навчання основам та особливостям макіяжу для себе', 0)?></p>
					<a href="<?=SITE_URL?>mymakeup" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-c-3"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>mymakeup" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>mymakeup" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure>
				<figcaption><?=$this->text('Майстер із зачісок', 0)?> </figcaption>
				<div class="fig-desc">
					<p><?=$this->text('Отримання навичок по створенню зачісок', 0)?></p>
					<a href="<?=SITE_URL?>barbers" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-c-5"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>barbers" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>barbers" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
	</section>

	<?php require APP_PATH.'views/@commons/_sertificate-popup.php'; ?>

</main>