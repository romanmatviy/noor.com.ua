<main id="services">

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-1"> 
				<span><b><?=$this->text('Зачіски')?></b></span> <p><?=$this->text('Зачіски')?></p>
			</h2>
			<div class="text-to-back">
				<p class="m-text">
					<?=$this->text('Стилісти NOOR допоможуть вам мати розкішне волосся. Ми постійно розвиваємось та підбираємо інструменти, застосовуючи новітні тенденції та методи. То ж, вже на першому етапі консультації зі спеціалістом, ви зрозумієте яку зачіску потрібно зробити. А найкраще те, що ви можете розслабитись і просто насолоджуватись процесом. Доки майстер NOOR чаклуватиме над вашою зовнішністю!')?>
				</p>
				<a href="#" class="order-dark popup ms_booking"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_hairstyle/desctop/main.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_hairstyle/tablet/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_hairstyle/mobile/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
		<i class="i"><?=$this->text('Відчуй себе на висоті завдяки майстрам NOOR!')?> </i>
	</section>

	<div class="letterI right"></div>

	<section class="container align-center padding-50 photos">
		<div class="owl-carousel" id="service-gallery">
			<?php if($imgs = $this->db->getAllDataByFieldInArray('wl_images', array('alias' => 25, 'content' => 24))){ foreach ($imgs as $img) {?>
					<img src="<?=IMG_PATH?>sliders/24/slv_<?=$img->file_name?>" alt="<?=$img->title?>" data-img="<?=IMG_PATH?>sliders/24/<?=$img->file_name?>">
			<?php } } ?>
		</div>
	</section>
	
	

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-2"> 
				<span><b><?=$this->text('Ми')?></b></span> <p class="w-25 w-lil-50"><?=$this->text('Ми пропонуємо')?></p>
			</h2>
			<div class="text-to-back big-p">
				<ul class="pink m50">
					<li> <span></span> <p><?=$this->text('Консультація')?>  </p></li>
					<li> <span></span> <p><?=$this->text('Укладка на браш')?>  </p></li>
					<li> <span></span> <p><?=$this->text('Різновид накруток')?> </p></li>
					<li> <span></span> <p><?=$this->text('Вечірні зачіски')?>  </p></li>
					<li> <span></span> <p><?=$this->text('Весільні зачіски')?> </p></li>
				</ul>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left left-borders">
				<div class="border-top"></div>
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[1]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_hairstyle/desctop/offer.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_hairstyle/tablet/offer.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_hairstyle/mobile/offer.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
				<div class="border-bottom"></div>
			</div>
		</div>
	</section>

	<section class="container align-center padding-50">
		<i class="i upper-i"><?=$this->text('Стилісти NOOR зроблять все, аби ви мали розкішне волосся')?></i>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Укладка (сторінка)')?> </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Укладка)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 40 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n459193.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Накрутка (сторінка)')?>  </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Накрутка)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 60 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n459194.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Вечірня (сторінка)')?> </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Вечірня)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 60 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n459196.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Весільна (сторінка)')?>  </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Весільна)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 90 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n459197.yclients.com/"><?=$this->text('Записатись', 0)?></a>
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
				<figcaption><?=$this->text('Брови', 0)?></figcaption>
				<div class="fig-desc">
					<ul>
						<li><span><?=$this->text('Корекція', 0)?> </span></li>
						<li><span><?=$this->text('Фарбування фарбою', 0)?> </span></li>
						<li><span><?=$this->text('Фарбування хною', 0)?> </span></li>
						<li><span><?=$this->text('Довготривала укладка', 0)?> </span></li>
					</ul>
					<a href="<?=SITE_URL?>s-eyebrow" class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-serv-2"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-eyebrow" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-eyebrow" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
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