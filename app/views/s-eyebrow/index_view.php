<main id="services">

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-1"> 
				<span><b><?=$this->text('Брови')?></b></span> <p><?=$this->text('Брови')?></p>
			</h2>
			<div class="text-to-back">
				<p class="m-text">
					<?=$this->text('Іноді ти можеш мати цілу валізу різної косметики. Поновлювати знову і знову засоби для брів, але того недостатньо! Хочеться отримати ідеальний образ. Майстри NOOR знають як цього досягнути! ')?>
				</p>
				<a href="#" class="order-dark popup ms_booking"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_eyebrow/desctop/main.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_eyebrow/tablet/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_eyebrow/mobile/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
		<i class="i"><?=$this->text('Підберемо правильну форму, колір та зробимо брівки слухняними, завдяки довготривалій укладці!')?></i>
	</section>

	<div class="letterI right"></div>

	<section class="container align-center padding-50 photos">
		<div class="owl-carousel" id="service-gallery">
			<?php if($imgs = $this->db->getAllDataByFieldInArray('wl_images', array('alias' => 25, 'content' => 22))){ foreach ($imgs as $img) {?>
					<img src="<?=IMG_PATH?>sliders/22/slv_<?=$img->file_name?>" alt="<?=$img->title?>" data-img="<?=IMG_PATH?>sliders/22/<?=$img->file_name?>">
			<?php } } ?>
		</div>
	</section>
	
	

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-2"> 
				<span><b>Ми</b></span> <p class="w-25 w-lil-50"><?=$this->text('Ми пропонуємо')?></p>
			</h2>
			<div class="text-to-back big-p">
				<ul class="pink m50">
					<li> <span></span> <p><?=$this->text('Корекція брів воском/пінцетом')?> </p></li>
					<li> <span></span> <p><?=$this->text('Фарбування брів фарбою')?> </p></li>
					<li> <span></span> <p><?=$this->text('Фарбування брів хною')?></p></li>
					<li> <span></span> <p><?=$this->text('Довготривала укладка брів')?></p></li>
				</ul>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left left-borders">
				<div class="border-top"></div>
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[1]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_eyebrow/desctop/offer.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_eyebrow/tablet/offer.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_eyebrow/mobile/offer.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
				<div class="border-bottom"></div>
			</div>
		</div>
	</section>

	<section class="container align-center padding-50">
		<i class="i upper-i"><?=$this->text('Дозволь NOOR попіклуватись про твої брівки!')?></i>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Корекція брів (Сторінка)')?></h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Корекція брів)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 30 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n455632.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Фарбування фарбою (Сторінка)')?> </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Фарбування фарбою)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 40 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n455641.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Фарбування хною (Сторінка)')?> </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Фарбування хною)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 40 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n455641.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Довготривала укладка брів (Сторінка)')?></h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Довготривала укладка брів)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 60 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n455642.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
	</section>

	<style type="text/css">
	<?php if($imgs = $this->db->getAllDataByFieldInArray('wl_images', array('alias' => 21))){ 
		$i = 1; foreach ($imgs as $img) {?>
			.img-serv-<?=$i?> { background-image: url(<?=IMG_PATH?>services/0/<?=$img->file_name?>) !important; }
	<?php $i++; } } ?>
	</style>
	<section class="container align-center padding-50" id="main-services">
		<h2 class="back-text lines-2 without-speaking w-100"> 
			<span><b><?=$this->text('Інші')?></b></span> <p><?=$this->text('Інші послуги студії')?></p>
		</h2>
		<div class="w-33 w-lil-33">
			<figure class="wow fadeIn">
				<figcaption><?=$this->text('Макіяж', 0)?></figcaption>
				<div class="fig-desc">
					<ul>
						<li><span><?=$this->text('Нюдовий', 0)?></span></li>
						<li><span><?=$this->text('Денний', 0)?></span></li>
						<li><span><?=$this->text('Вечірній', 0)?></span></li>
						<li><span><?=$this->text('Весільний', 0)?></span></li>
					</ul>
					<a href="<?=SITE_URL?>s-makeup" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-serv-1"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-makeup" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-makeup" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div> 
		<div class="w-33 w-lil-33">
			<figure class="wow fadeIn">
				<figcaption><?=$this->text('Нігті', 0)?></figcaption>
				<div class="fig-desc">
					<ul>
						<li><span><?=$this->text('Манікюр', 0)?> </span></li>
						<li><span><?=$this->text('Педикюр', 0)?> </span></li>
						<li><span><?=$this->text('Гель лак', 0)?> </span></li>
						<li><span><?=$this->text('Дизайн', 0)?> </span></li>
					</ul>
					<a href="<?=SITE_URL?>s-nails" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-serv-3"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-nails" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-nails" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-33 w-lil-33">
			<figure class="wow fadeIn">
				<figcaption><?=$this->text('Зачіски', 0)?></figcaption>
				<div class="fig-desc">
					<ul>
						<li><span><?=$this->text('Укладка', 0)?> </span></li>
						<li><span><?=$this->text('Накрутка', 0)?> </span></li>
						<li><span><?=$this->text('Весільна', 0)?> </span></li>
						<li><span><?=$this->text('Вечірня', 0)?> </span></li>
					</ul>
					<a href="<?=SITE_URL?>s-hairstyles" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-serv-4"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-hairstyles" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-hairstyles" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
	</section>

</main>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even" style="display: none;">
	<div class="slides"></div>
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close"><span>+</span></a>
	<ol class="indicator"></ol>
</div>
<link rel="stylesheet" href="<?=SERVER_URL?>assets/blueimp-2/blueimp-gallery.css">
<script type="text/javascript" src="<?=SERVER_URL?>assets/blueimp-2/jquery.blueimp-gallery.min.js"></script>
<script type="text/javascript" src="<?=SERVER_URL?>assets/blueimp-2/blueimp-init.js"></script>
<style type="text/css">
	.close span { font-size: 50px; transform: rotate(45deg); color: #3D3C3A; padding: 0px; display: block; }
	.close { background: #fff !important }
</style>