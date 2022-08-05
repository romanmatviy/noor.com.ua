<main id="services">

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-1"> 
				<span><b><?=$this->text('Макіяж')?></b></span> <p><?=$this->text('Макіяж')?></p>
			</h2>
			<div class="text-to-back">
				<p class="m-text">
					<?=$this->text('Якісний мейк - запорука твого успіху в роботі, на побаченні та під час будь-якої важливої події! Ми підберемо правильний тон, знайдемо відтінки твоєї помади і створимо надзвичайний настрій! А ще приємний бонус - стійкість макіяжу, зробленого в студії NOOR. ')?>
				</p>
				<a href="#" class="order-dark popup ms_booking"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_makeup/desctop/main.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_makeup/tablet/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_makeup/mobile/main.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
		<i class="i"><?=$this->text('Витримає будь-які твої пригоди протягом дня, вечора або ночі!')?></i>
	</section>

	<div class="letterI right"></div>

	<section class="container align-center padding-50 photos">
		<div class="owl-carousel" id="service-gallery">
			<?php if($imgs = $this->db->getAllDataByFieldInArray('wl_images', array('alias' => 25, 'content' => 21))){ foreach ($imgs as $img) {?>
					<img src="<?=IMG_PATH?>sliders/21/slv_<?=$img->file_name?>" alt="<?=$img->title?>" data-img="<?=IMG_PATH?>sliders/21/<?=$img->file_name?>">
			<?php } } ?>
		</div>
	</section>
	
	

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-1"> 
				<span><b><?=$this->text('Денний')?></b></span> <p><?=$this->text('Денний')?></p>
			</h2>
			<div class="text-to-back big-p">
				<p>
					<?=$this->text('Денний макіяж має бути легким. Нюдові відтінки, м’які лінії, правильні акценти на обличчі. Ідеальний тон, підкреслені скули, брови, вії допоможуть виразити твою природну красу. Наші майстри докладуть будь-яких зусиль, аби ти відчувала впевненість в собі протягом дня!')?> 
				</p>
				<p>
					<?=$this->text('Додамо тобі впевненості! Наради, зустрічі в кафе чи відвідування подій. Відчуй внутрішню силу разом з мейком NOOR! ')?>
				</p>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left left-borders">
				<div class="border-top"></div>
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[1]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_makeup/desctop/day.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_makeup/tablet/day.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_makeup/mobile/day.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
				<div class="border-bottom"></div>
			</div>
		</div>
	</section>

	<section class="container align-center padding-50 reverce-mobile">
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left right-borders">
				<div class="border-top"></div>
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[2]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_makeup/desctop/night.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_makeup/tablet/night.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_makeup/mobile/night.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
				<div class="border-bottom"></div>
			</div>
		</div>
		<div class="w-50 w-lil-50 right-text-services">
			<h2 class="back-text lines-1"> 
				<span><b><?=$this->text('Вечірній')?></b></span> <p><?=$this->text('Вечірній')?></p>
			</h2>
			<div class="text-to-back big-p">
				<p>
					<?=$this->text('Танцювати до ранку чи бути запрошеним на якусь важливу подію? Вечірній мейк просто необхідний в таких ситуаціях. Він має бути яскравим і помітним, але в той же час не доходити до межі вульгарності. В NOOR ми підкресливо твою розкіш. Поєднаємо це із загальним образом і додамо нотки сексуальності. Щоб ти змогла вразити всіх своїм зовнішнім виглядом!')?>
				</p>
			</div>
		</div>
	</section>

	<section class="container align-center padding-50">
		<div class="w-50 w-lil-50">
			<h2 class="back-text lines-1"> 
				<span><b><?=$this->text('Весільний')?></b></span> <p><?=$this->text('Весільний')?></p>
			</h2>
			<div class="text-to-back big-p">
				<p>
					<?=$this->text('В день весілля всі погляди будуть спрямовані на наречену. Тому макіяж має бути ідеальним, незабутнім, легким та невимушено красивим. ')?>
				</p>
				<p>
					<?=$this->text('Ми допоможемо продумати всі елементи. Виберемо колірну гамму та підберемо стійку косметику. А ще спробуємо зробити такий мейк заздалегідь, щоб уникнути непотрібних “сюрпризів”.')?>
				</p>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<div class="photo-rectangles left left-borders">
				<div class="border-top"></div>
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[3]->big_path?>" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/s_makeup/desctop/marry.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_makeup/tablet/marry.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/s_makeup/mobile/marry.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
				<div class="border-bottom"></div>
			</div>
		</div>
	</section>

	<section class="container align-center padding-50">
		<i class="i upper-i"><?=$this->text('В особливий день - особливий макіяж від NOOR.')?> </i>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Нюдовий (сторінка)')?> </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Нюдовий)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 60 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n455626.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Денний (сторінка)')?></h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Денний)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 60 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n455628.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Вечірній (сторінка)')?></h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Вечірній)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 80 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n463688.yclients.com/"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50">
			<div class="order-item">
				<h3><?=$this->text('Весільний (сторінка)')?> </h3>
				<p><b><?=$this->text('Ціна формується залежно від обраних процедур та рівня кваліфікації обраного майстра (Весільний)')?></b></p>
				<p> ⁃ <?=$this->text('процедура триває від 90 хв.')?></p>
				<a href="#" class="order-dark popup ms_booking" data-url="https://n455629.yclients.com/"><?=$this->text('Записатись', 0)?></a>
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