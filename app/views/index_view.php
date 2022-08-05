<main>
	<section class="container align-center reverce-mobile" id="beaty-place">
		<div class="w-50 w-lil-50">
			<h1 class="color-pink"><?=$this->text('NOOR')?> <span><?=$this->text('місце твоєї краси')?></span>
			</h1>
			<p><?=$this->text('Ми об’єднали найкращих майстрів Львова. Вони готові докласти будь-яких зусиль, аби ти відчула себе красивою, щасливою та впевненою в собі! Чекаємо на тебе в будь-який зручний час')?>
			</p>
			<a href="#" class="ms_booking order-dark popup"><?=$this->text('Записатись', 0)?></a>
		</div>
		<div class="w-50 w-lil-50">
			<!-- <img src="<?=IMG_PATH . $_SESSION['alias']->images[0]->big_path?>"
			alt="NOOR місце твоєї краси" class="hideTablet wow fadeIn">
			<img src="<?=IMG_PATH?>main/1-t.jpg"
				alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn"> -->
			<img src="<?=IMG_PATH?>temp/main/desctop/main.webp"
				alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
			<img src="<?=IMG_PATH?>temp/main/tablet/main.png"
				alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
			<img src="<?=IMG_PATH?>temp/main/mobile/main.png"
				alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
		</div>
	</section>

	<section class="container justify-between m-b-90-mob">
		<a href="<?=SITE_URL?>s-makeup" class="buttonBox">
			<span><?=$this->text('Макіяж', 0)?></span>
			<div class="border"></div>
			<div class="border"></div>
		</a>
		<a href="<?=SITE_URL?>s-eyebrow" class="buttonBox">
			<span><?=$this->text('Брови', 0)?></span>
			<div class="border"></div>
			<div class="border"></div>
		</a>
		<a href="<?=SITE_URL?>s-nails" class="buttonBox">
			<span><?=$this->text('Нігті', 0)?></span>
			<div class="border"></div>
			<div class="border"></div>
		</a>
		<a href="<?=SITE_URL?>s-hairstyles" class="buttonBox">
			<span><?=$this->text('Зачіски', 0)?></span>
			<div class="border"></div>
			<div class="border"></div>
		</a>
	</section>

	<section class="container align-center padding-50 title-inside">
		<div class="less-part w-lil-50">
			<h2 class="back-text lines-2 text-tablet-center">
				<span><b><?=$this->text('Давай')?></b></span>
				<p class="w-50"><?=$this->text('Давай знайомитись!')?>
				</p>
			</h2>
			<div id="meet_pic_place"></div>
			<div class="text-to-back ponts">
				<p><?=$this->text('Привіт! Я Мар’яна Гумен, власниця салону NOOR. <br> Вже N кількість років допомагаю дівчаткам ставати красивими, впевненими в собі і зачаровувати всіх навколо! Це не просто робота. Це стиль життя! Адже колір помади має гармонійно поєднуватись з твоїм настроєм та станом душі.')?>
				</p>
				<p><?=$this->text('NOOR це місце сили! Бути на висоті під час особливого вечора або ж відновити сили після важкого робочого тижня. Наші майстри допоможуть тобі в абсолютно різних ситуаціях! NOOR відкриває свої двері, аби відкрити твою внутрішню красу.')?>
				</p>
			</div>
		</div>
		<div class="bigger-part w-lil-50">
			<div class="inscription" id="meet_pic">
				<div class="photo-rectangles">
					<!-- <img src="<?=IMG_PATH . $_SESSION['alias']->images[1]->big_path?>"
					class="hideTablet w-100 wow fadeIn" alt="Давай знайомитись!">
					<img src="<?=IMG_PATH?>main/2-t.jpg"
						alt="Давай знайомитись! wow fadeIn" class="hideDesctop hideMobile w-100"> -->
					<img src="<?=IMG_PATH?>temp/main/desctop/gumen.webp"
						alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
					<img src="<?=IMG_PATH?>temp/main/tablet/gumen.png"
						alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
					<img src="<?=IMG_PATH?>temp/main/mobile/gumen.png"
						alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
					<div class="rect"></div>
					<div class="rect"></div>
				</div>
				<span id="place-power-text" class="hideMobile"><?=$this->text('місце сили')?></span>
			</div>
		</div>
	</section>

	<div class="letterI"></div>

	<section class="container align-center padding-50 m-b-90-mob" id="main_about_section">
		<div class="bigger-part">
			<div id="about-up"></div>
			<div class="inscription">
				<div class="main_tablet_about">

					<?php if ($imgs = $this->db->getAllDataByFieldInArray('wl_images', ['alias' => 25, 'content' => 20])) {
    foreach ($imgs as $img) {?>
					<img src="<?=IMG_PATH?>sliders/20/big_<?=$img->file_name?>"
						class="w-100 wow fadeIn" alt="Ми піклуємось про тебе">
					<?php break; }
} ?>
				</div>
				<span id="about-us-text"><?=$this->text('Ми піклуємось про тебе')?></span>
			</div>
		</div>
		<div class="less-part">
			<h2 class="back-text lines-2 without-speaking text-tablet-center" id="about-down">
				<span><b><?=$this->text('Про')?></b></span>
				<p class="text-tablet-center"><?=$this->text('Про нас')?>
				</p>
			</h2>
			<div class="text-to-back without-speaking">
				<p><?=$this->text('Ми мріємо про те, аби зі студії NOOR кожен виходив з величезною посмішкою та сяючими очима. Хочемо, аби ви відчували себе на висоті як щодня, так і під час важливого вечора! Для того, щоб це стало реальністю, ми готові зробити вам ефектний мейк, підібрати зачіску, а ще потурбуватись про нігтики.')?>
				</p><br><br>
				<a href="<?=SITE_URL?>about" class="order"><?=$this->text('Читати більше', 0)?></a>
			</div>
		</div>
	</section>

	<div class="letterI right"></div>


	<style type="text/css">
		<?php if ($imgs = $this->db->getAllDataByFieldInArray('wl_images', ['alias' => 21])) {
    $i = 1;
    foreach ($imgs as $img) {?>
		.img-serv-

		<?=$i?>
			{
			background-image: url(<?=IMG_PATH?>services/0/<?=$img->file_name?>) !important;
		}

		<?php $i++; }
} ?>
	</style>

	<section class="container align-center padding-50 m-b-50-mob" id="main-services">
		<h2 class="back-text lines-2 without-speaking w-100 text-tablet-center text-mobile-center">
			<span><b><?=$this->text('Обирай')?></b></span>
			<p class="text-tablet-center text-mobile-center"><?=$this->text('Обирай')?>
			</p>
		</h2>
		<div class="w-25 w-lil-50">
			<figure class="wow fadeIn">
				<figcaption><?=$this->text('Макіяж', 0)?>
				</figcaption>
				<div class="fig-desc">
					<ul>
						<li><span><?=$this->text('Нюдовий', 0)?></span>
						</li>
						<li><span><?=$this->text('Денний', 0)?></span>
						</li>
						<li><span><?=$this->text('Вечірній', 0)?></span>
						</li>
						<li><span><?=$this->text('Весільний', 0)?></span>
						</li>
					</ul>
					<a href="<?=SITE_URL?>s-makeup"
						class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?>
						<i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-serv-1"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-makeup"
						class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-makeup"
						class="hideDesctop"><?=$this->text('Більше про це', 0)?>
						<i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure class="wow fadeIn">
				<figcaption><?=$this->text('Брови', 0)?>
				</figcaption>
				<div class="fig-desc">
					<ul>
						<li><span><?=$this->text('Корекція', 0)?>
							</span></li>
						<li><span><?=$this->text('Фарбування фарбою', 0)?>
							</span></li>
						<li><span><?=$this->text('Фарбування хною', 0)?>
							</span></li>
						<li><span><?=$this->text('Довготривала укладка', 0)?>
							</span></li>
					</ul>
					<a href="<?=SITE_URL?>s-eyebrow"
						class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?>
						<i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-serv-2"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-eyebrow"
						class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-eyebrow"
						class="hideDesctop"><?=$this->text('Більше про це', 0)?>
						<i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure class="wow fadeIn">
				<figcaption><?=$this->text('Нігті', 0)?>
				</figcaption>
				<div class="fig-desc">
					<ul>
						<li><span><?=$this->text('Манікюр', 0)?>
							</span></li>
						<li><span><?=$this->text('Педикюр', 0)?>
							</span></li>
						<li><span><?=$this->text('Гель лак', 0)?>
							</span></li>
						<li><span><?=$this->text('Дизайн', 0)?>
							</span></li>
					</ul>
					<a href="<?=SITE_URL?>s-nails"
						class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?>
						<i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-serv-3"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-nails"
						class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-nails"
						class="hideDesctop"><?=$this->text('Більше про це', 0)?>
						<i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
		<div class="w-25 w-lil-50">
			<figure class="wow fadeIn">
				<figcaption><?=$this->text('Зачіски', 0)?>
				</figcaption>
				<div class="fig-desc">
					<ul>
						<li><span><?=$this->text('Укладка', 0)?>
							</span></li>
						<li><span><?=$this->text('Накрутка', 0)?>
							</span></li>
						<li><span><?=$this->text('Весільна', 0)?>
							</span></li>
						<li><span><?=$this->text('Вечірня', 0)?>
							</span></li>
					</ul>
					<a href="<?=SITE_URL?>s-hairstyles"
						class="hideTablet hideMobile"><?=$this->text('Більше про це', 0)?>
						<i class="fa fa-angle-right"></i></a>
				</div>
				<div class="img img-serv-4"></div>
				<div class="fig-register">
					<a href="<?=SITE_URL?>s-hairstyles"
						class="hideTablet hideMobile"><?=$this->text('Перейти', 0)?></a>
					<a href="<?=SITE_URL?>s-hairstyles"
						class="hideDesctop"><?=$this->text('Більше про це', 0)?>
						<i class="fa fa-angle-right"></i></a>
				</div>
			</figure>
		</div>
	</section>

	<section class="container align-center padding-50" id="reviews-main">
		<div class="bigger-part">
			<h2 class="back-text lines-2 text-tablet-center text-mobile-center">
				<span><b><?=$this->text('говорять')?></b></span>
				<p class="w-50 text-tablet-center text-mobile-center"><?=$this->text('Про NOOR  говорять')?>
				</p>
			</h2>
			<div class="text-to-back max550">
				<p><?=$this->text('Ми орієнтуємось на розуміння бажань наших клієнтів та персоналізуємо кожну послугу. Це дозволяє запропонувати жінкам індивідуальний підхід, який відповідає твоїм потребам.')?>
				</p>
			</div>
		</div>
		<div class="less-part">
			<div class="ponts-color all-reviews">
				<?php $rc = 0; if ($reviews = $this->load->function_in_alias('reviews', '__get_Articles')) {
    foreach ($reviews as $r) { ?>
				<?php if ($rc % 4 == 0) {
        echo '<div class="slide slide';
        echo($rc / 4);
        echo'" data-num="';
        echo($rc / 4);
        echo '">';
    } ?>
				<div class="review-item">

					<img src="<?=IMG_PATH . $r->r_photo?>"
						alt="<?=$r->name?>" class='wow fadeIn'>

					<div>
						<h5><?=$r->name?>
						</h5>
						<?= html_entity_decode($r->text) ?>
					</div>
				</div>
				<?php if ($rc % 4 == 3) {
        echo '</div>';
    } ?>
				<?php $rc++;
                }
    if ($rc % 4 != 0) {
        echo '</div>';
    }
} ?>

				<a href="#" class="order show-more"><?=$this->text('Показати більше', 0)?></a>
			</div>
		</div>
	</section>

	<div class="letterI"></div>

	<section class="portfolio-container main-page-portfolio" id="main-portfolio">
		<h2 class="back-text back-text-center">
			<span><b><?=$this->text('роботи')?></b></span>
			<p class="text-tablet-center"><?=$this->text('Наші роботи')?>
			</p>
		</h2>
		<div class="flex">
			<?php if ($portfolio = $this->load->function_in_alias('portfolio', '__get_Articles', ['limit' => 600])) {
    $i = 0;
    rsort($portfolio);
    foreach ($portfolio as $p) { ?>
			<div class="w-33 w-lil-33 w-xs-33">
				<figure data-img="<?=IMG_PATH . $p->photo?>">
					<a href="<?=$p->list?>" target="_blank">
						<img src="<?=IMG_PATH . $p->s_photo?>"
							alt="<?=$p->name?>"
							data-img="<?=IMG_PATH . $p->photo?>">
						<?php if ($p->text && $p->text != '') { ?>
						<figcaption>
							<h5><?=$p->name?>
							</h5>
							<?= html_entity_decode($p->text) ?>
						</figcaption>
						<?php } ?>
					</a>
				</figure>
			</div>
			<?php if ($i > 5) {
        break;
    } }
} ?>
		</div>
		<div class="w-100 portfolio-order">
			<a href="<?=SITE_URL?>portfolio"
				class="order popup"><?=$this->text('Показати більше', 0)?></a>
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
<link rel="stylesheet"
	href="<?=SERVER_URL?>assets/blueimp-2/blueimp-gallery.css">
<script type="text/javascript"
	src="<?=SERVER_URL?>assets/blueimp-2/jquery.blueimp-gallery.min.js">
</script>
<script type="text/javascript"
	src="<?=SERVER_URL?>assets/blueimp-2/blueimp-init.js"></script>
<style type="text/css">
	.close span {
		font-size: 50px;
		transform: rotate(45deg);
		color: #3D3C3A;
		padding: 0px;
		display: block;
	}

	.close {
		background: #fff !important
	}
</style>