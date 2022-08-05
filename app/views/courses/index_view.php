<main>
	<style type="text/css">
	<?php if($imgs = $this->db->getAllDataByFieldInArray('wl_images', array('alias' => 11))){ 
		$i = 1; foreach ($imgs as $img) {?>
			.img-c-<?=$i?> { background-image: url(<?=IMG_PATH?>courses/0/<?=$img->file_name?>) !important; }
	<?php $i++; } } ?>
	</style>
	<section class="container align-center padding-50 main-cources" id="main-services">
		<div class="w-20 w-lil-50">
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
		<div class="w-20 w-lil-50">
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
		<div class="w-20 w-lil-50">
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
		<div class="w-20 w-lil-50">
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
		<div class="w-20 w-lil-50">
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
	
</main>