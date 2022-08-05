<main id="services">

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-1"> 
				<span><b><?=$this->text('Нігті')?></b></span> <p><?=$this->text('Нігті')?></p>
			</h2>
			<div class="text-to-back">
				<p class="m-text">
					<?=$this->text('Насолоджуйся професійним сервісом, якісною гігієною та точним поліруванням в NOOR. Ми пропонуємо величезне різноманіття кольорів гель-лаків від бренду Luxio. А стильне оздоблення зможеш підібрати разом з нашим майстром залежно від настрою!')?>
				</p>
				<a href="#" class="order-dark popup ms_booking"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_nails/desctop/main.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_nails/tablet/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_nails/mobile/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
		<i class="i"><?=$this->text('Насолоджуйся смачною кавою, доки твої нігтики в руках майстрів NOOR!')?></i>
	</section>

	<div class="letterI right"></div>

	<section class="container align-center padding-50 photos">
		<div class="owl-carousel" id="service-gallery">
			<?php if($imgs = $this->db->getAllDataByFieldInArray('wl_images', array('alias' => 25, 'content' => 23))){ foreach ($imgs as $img) {?>
					<img src="<?=IMG_PATH?>sliders/23/slv_<?=$img->file_name?>" alt="<?=$img->title?>" data-img="<?=IMG_PATH?>sliders/23/<?=$img->file_name?>">
			<?php } } ?>
		</div>
	</section>
	
	

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-2"> 
				<span><b><?=$this->text('Ми')?></b></span> <p class="w-33"><?=$this->text('Ми пропонуємо')?></p>
			</h2>
			<div class="text-to-back big-p">
				<ul class="pink m50">
					<li> <span></span> <p><?=$this->text('Манікюр')?> </p></li>
					<li> <span></span> <p><?=$this->text('Педикюр')?> </p></li>
					<li> <span></span> <p><?=$this->text('Корекція форми')?>  </p></li>
					<li> <span></span> <p><?=$this->text('Укріплення нігтьової пластини')?> </p></li>
					<li> <span></span> <p><?=$this->text('Покриття кольором')?> </p></li>
					<li> <span></span> <p><?=$this->text('Індивідуальний дизайн')?> </p></li>
				</ul>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left left-borders">
				<div class="border-top"></div>
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[1]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_nails/desctop/offer.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_nails/tablet/offer.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_nails/mobile/offer.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
				<div class="border-bottom"></div>
			</div>
		</div>
	</section>

	<section class="container align-center padding-50">
		<!-- <i class="i upper-i">Насолоджуйся смачною кавою, доки твої нігтики в руках майстрів NOOR! </i> -->
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Манікюр (сторінка)')?> </h3>
				<p><b><?=$this->text('Ціна залежить від вибору майстра (Манікюр)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 40 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n458716.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Педикюр (сторінка)')?>  </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Педикюр)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 40 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n458993.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Покриття (сторінка)')?></h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Покриття)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 30 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n458994.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Укріплення (сторінка)')?> </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Укріплення)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 20 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n458999.yclients.com/"><?=$this->text('Записатись', 0)?></a>
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