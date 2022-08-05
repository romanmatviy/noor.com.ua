<main id="courses">

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-2"> 
				<span><b><?=$this->text('Сам')?></b></span> <p class="w-25 w-lil-25"><?=$this->text('Сам собі візажист')?></p>
			</h2>
			<div class="text-to-back">
				<p class="m-text">
					<?=$this->text('Навчання основам та особливостям макіяжу для себе')?>
					<!-- <br><span>Дата:</span> 20-04-2020 -->
					<br><span><?=$this->text('Вартість:')?></span> <?=$this->text('5000 грн')?>
				</p>
				<a href="#" class="order-dark course-popup" data="Сам собі візажист"><?=$this->text('Зареєструватись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/desctop/main.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/tablet/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/mobile/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
	</section>

	<section class="container align-center padding-50 reverce-tablet">
		<div class="w-50">
			<div class="text-description">
				<h3><?=$this->text('Загальна інформація')?></h3>
				<p>
					<?=$this->text('Курс «Сам собі візажист» спрямований на те, аби навчитись основам та особливостям макіяжу. Ви зможете самостійно розбиратись у  тонкощах підбору правильних кольорів, гармонійно поєднувати їх зі своєю зовнішністю та створювати потрібний образ власними руками. Ми навчимо вас створювати різні види макіяжу:  на кожен день, вечірній або святковий. ')?>
				</p>
				<h3><?=$this->text('Тривалість')?></h3>
				<p>
					<?=$this->text('Кожна частина триватиме дві години і включатиме теорію, практику і домашнє завдання. Навчання буде проходити в студії NOOR. Під час заняття ви отримаєте необхідні матеріали, персональну підтримку професійного майстра студії та допомогу із розбором особистої косметички! Після кожного заняття буде домашнє завдання. Успішне проходження курсу гарантує отримання спеціального сертифікату школи «NOOR Studio». ')?>
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
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/desctop/info.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/tablet/info.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/mobile/info.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
	</section>

	

	<section class="container align-center padding-50">
		<div class="w-50">
			<div class="photo-rectangles left">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[2]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/desctop/programm.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/tablet/programm.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/mobile/programm.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
		<div class="w-50">
			<div class="text-description">
				<h3><?=$this->text('Програма курсу')?></h3>
				<div class="faq">

				<?php $in = 0; if($faq = $this->load->function_in_alias('faq', '__get_Questions', array('group' => 1))){ foreach ($faq as $n) { ?>
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
					<li> <span></span> <p><?=$this->text('Знання технік і послідовності нанесення макіяжу')?> </p></li>
					<li> <span></span> <p><?=$this->text('Як приховати недоліки шкіри - Як правильно моделювати овал обличчя та окремих його частин')?> </p></li>
					<li> <span></span> <p><?=$this->text('Як підкреслити очі, вуста та брови в макіяжі')?> </p></li>
					<li> <span></span> <p><?=$this->text('Особливості примінення та принципи використання декоративної косметики принципи підбору макіяжу під цілий образ')?> </p></li>
					<li> <span></span> <p><?=$this->text('Особливості догляду за шкірою - Робота з кольором, підбір кольорової палітри під зовнішність')?> </p></li>
					<li> <span></span> <p><?=$this->text('Як створити гармонійний мейк, враховуючи індивідуальні особливості обличчя')?> </p></li>
				</ul>
				<a href="#" class="order-dark course-popup" data="Сам собі візажист"><?=$this->text('Зареєструватись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[3]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/desctop/sertificate.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/tablet/sertificate.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/mymakeup/mobile/sertificate.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
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
				<figcaption><?=$this->text('Підвищення кваліфікації візажистів', 0)?></figcaption>
				<div class="fig-desc">
					<p><?=$this->text('Поглиблене вивчення тонкощів професії візажиста', 0)?></p>
					<a href="<?=SITE_URL?>qualification" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-c-4"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>qualification" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>qualification" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
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