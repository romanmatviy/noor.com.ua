<main>

	<section class="container align-center padding-50" id="main-services">
		<h2 class="back-text lines-2 without-speaking w-100 text-tablet-center hideMobile"> 
			<span><b><?=$this->text('Обирай')?></b></span> <p class="text-tablet-center"><?=$this->text('Обирай')?></p>
		</h2>
		<div class="w-25 w-lil-50">
			<figure>
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
				<div class="img img-serv-1" style="background-image: url(<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>);"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-makeup" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-makeup" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure>
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
				<div class="img img-serv-2"  style="background-image: url(<?=IMG_PATH.$_SESSION['alias']->images[1]->big_path?>);"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-eyebrow" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-eyebrow" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure>
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
				<div class="img img-serv-3"  style="background-image: url(<?=IMG_PATH.$_SESSION['alias']->images[2]->big_path?>);"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-nails" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-nails" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure>
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
				<div class="img img-serv-4"  style="background-image: url(<?=IMG_PATH.$_SESSION['alias']->images[3]->big_path?>);"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-hairstyles" class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-hairstyles" class="hideDesctop"><?=$this->text('Більше про це', 0)?> <i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
	</section>
	
</main>