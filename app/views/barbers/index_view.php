<main id="courses">

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-2 mob-hl-2"> 
				<span><b><?=$this->text('Майстер')?></b></span> <p class="w-50 w-lil-50"><?=$this->text('Майстер по зачіскам')?></p>
			</h2>
			<div class="text-to-back">
				<p class="m-text">
					<?=$this->text('Отримання навичок по створенню зачісок')?>
					<!-- <br><span>Дата:</span> 20-04-2020 -->
					<br><span><?=$this->text('Вартість:')?></span> <?=$this->text('5000 грн')?>
				</p>
				<a href="#" class="order-dark course-popup" data="Майстер по зачіскам"><?=$this->text('Зареєструватись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/desctop/main.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/tablet/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/mobile/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
	</section>

	<section class="container align-center padding-50 reverce-tablet">
		<div class="w-50">
			<div class="text-description">
				<h3><?=$this->text('Загальна інформація')?></h3>
				<p>
					<?=$this->text('Курс «Майстер по зачіскам» дозволить отримати необхідні знання, аби створювати різні варіанти зачісок для будь-яких подій, церемоній або щоденних образів. Таке навчання підійде як новачкам, котрі тільки починають працювати у сфері краси, так і тим хто хоче поглибити свої знання та підвищити рівень майстерності.')?>  
				</p>
				<h3><?=$this->text('Тривалість')?></h3>
				<p>
					<?=$this->text('Всі заняття супроводжуються практичним відпрацюванням. Інструменти та модель для кожного студента, а також розхідні матеріали для стайлінгу будуть вам надані. Навчання включає теорію, практику і домашнє завдання. Весь процес відбувається в студії NOOR. ')?>
				</p>
				<p>
					<?=$this->text('Успішне проходження курсу гарантує отримання диплому школи «NOOR Studio».')?>
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
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/desctop/care.jpg" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/tablet/care.jpg" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/mobile/care.jpg" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
	</section>
	
	<section class="container align-center padding-50">
		<div class="w-50">
			<div class="photo-rectangles left">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[2]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/desctop/second.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/tablet/second.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/mobile/second.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
		<div class="w-50">
			<div class="text-description">
				<h3><?=$this->text('Програма курсу')?></h3>
				<div class="faq">
					<?php $in = 0; if($faq = $this->load->function_in_alias('faq', '__get_Questions', array('group' => 4))){ foreach ($faq as $n) { ?>
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
				<h3><?=$this->text('Після навчання ви отримаєте')?></h3>
				<ul class="pink m50">
					<li> <span></span> <p><?=$this->text('Для нашого навчання ми оберемо ті типи зачісок, які є в тренді на даний момент.')?> </p></li>
					<li> <span></span> <p><?=$this->text('Всі навички та знання, які ви отримаєте, будуть максимально практичні.')?> </p></li>
					<li> <span></span> <p><?=$this->text('Після проходження навчання в школі NOOR Studio ви зможете робити накрутки, швидкі європейські зачіски, різні пучки, хвости, текстурні локони тощо')?> </p></li>
				</ul>
				<a href="#" class="order-dark course-popup" data="Майстер по зачіскам"><?=$this->text('Зареєструватись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[3]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/desctop/third.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/tablet/third.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/courses/hairstyle/mobile/third.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
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
	</section>

	<?php require APP_PATH.'views/@commons/_sertificate-popup.php'; ?>

</main>