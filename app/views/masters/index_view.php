<main id="about-page">
	<section class="container align-center padding-50">
		<div class="w5to12">
			<h2 class="back-text lines-2 without-speaking text-tablet-center text-mobile-center"> 
				<span><b><?=$this->text('Про')?></b></span> <p class="text-tablet-center text-mobile-center"><?=$this->text('Про нас')?></p>
			</h2>
			<div class="text-to-back text33">
				<p><?=$this->text('Основною цінністю в роботі студії NOOR є турбота про кожного клієнта. Ми щодня стараємось, аби ви чудово виглядали та почувалися!')?></p>
			</div>
		</div>
		<div class="w7to12">
			<div class="owl-carousel owl-theme" id="owl-about">
				<?php if($imgs = $this->db->getAllDataByFieldInArray('wl_images', array('alias' => 25, 'content' => 20))){ foreach ($imgs as $img) {?>
					<img src="<?=IMG_PATH?>sliders/20/sl_<?=$img->file_name?>" alt="<?=$img->title?>" data-img="<?=IMG_PATH?>sliders/20/<?=$img->file_name?>">
				<?php } } ?>
			</div>
		</div>
	</section>

	<div class="letterI mt-0"></div>

	<section class="container align-center padding-50 justify-between reverce-tablet">
		<div class="w-50">
			<div class="inscription">
				<!-- <img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" class="w-100" alt="Давай знайомитись!"> -->
				<img src="<?=IMG_PATH?>temp/about/desctop/our_studio.png" alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/about/tablet/our_studio.png" alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
				<img src="<?=IMG_PATH?>temp/about/mobile/our_studio.png" alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
			</div>
		</div>
		<div class="less-part">
			<h2 class="back-text lines-2 text-tablet-center text-mobile-center"> 
				<span><b><?=$this->text('Наш')?></b></span> <p class="text-tablet-center text-mobile-center"><?=$this->text('Наш салон')?></p>
			</h2>
			<div class="text-to-back">
				<p><?=$this->text('Рецепт непростий. Варто з уважністю ставитись до кожного компоненту! Спершу, об’єднуємо майстрів з глибоким досвідом у своїй справі. Потім фокусуємось на деталях і комфорті інтер’єру. Заправляємо відмінним обслуговуванням і запаковуємо зручним місцем розташуванням!')?> </p>
				<p><?=$this->text('Познайомтесь з людьми, хто робить NOOR studio місцем, куди хочеться повертатись знову і знову!')?></p>
			</div>
		</div>
	</section>


	<!-- //! Start work -->
	<style>
		.less-container:nth-child(odd) {
			display: flex;
			flex-direction: row-reverse;
		}


		.less-container:nth-child(odd) .block-image {
			display: flex;
		}

		@media (max-width: 1280px) {
			#about-page .photo-rectangles {
				max-width: 505px;
				max-width: 360px;
				width: 100%;
				max-height: 900px;
				height: 100%;
				/* overflow: hidden; */
				overflow-y: hidden;
			}
		}

		@media (max-width: 575px) {
			#about-page .photo-rectangles {
				max-width: 505px;
				max-width: 360px;
				width: 100%;
				max-height: 455px;
				height: 100%;
				/* overflow: hidden; */
				overflow-y: hidden;
			}

			.less-container:nth-child(odd),
			.less-container:nth-child(even) {
				display: flex;
				flex-direction: column-reverse;
			}
		}

		@media (max-width: 375px) {
			#about-page .photo-rectangles {
				max-width: 505px;
				max-width: 360px;
				width: 100%;
				max-height: 330px;
				height: 100%;
				/* overflow: hidden; */
				overflow-y: hidden;
			}
		}
	</style>

	<?php if ($masters = $this->load->function_in_alias('masters', '__get_Articles', ['limit' => 600])) {
    // var_dump($masters);

    $i = 0;
    // rsort($masters);
    foreach ($masters as $m) {
        // var_dump($m);

        if ($i % 2) {
            $addClass = 'left-photo-tablet';
        } else {
            $addClass = 'reverce-mobile';
        }

        ++$i;

        $images = $this->db->select('wl_images', '*', $m->id, 'content')->get('array'); ?>

	<section
		class="less-container align-center padding-50 <?= $addClass ?>">
		<div class="w-50 w-lil-50">
			<div class="text-description">
				<h3><?=$this->text($m->name)?>
				</h3>
				<?=
                    html_entity_decode($m->text); ?>

				<a href="#" class="order-dark popup gumen ms_booking"
					data-url="<?= $m->list ?>"><?=$this->text('Записатись', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50 block-image">
			<div class="justify-center">
				<div class="photo-rectangles">
					<!-- <img src="<?=IMG_PATH . $_SESSION['alias']->images[1]->big_path?>"
					class="w-100" alt="Давай знайомитись!"> -->

					<?php
                    foreach ($images as $key => $image) {
                        if ($key == 1) {
                            ?>
					<!-- desktop -->
					<img src="<?=IMG_PATH . $m->photo?>"
						alt="NOOR місце твоєї краси" class="hideTablet hideMobile wow fadeIn">
					<?php
                        } elseif ($key == 2) {
                            ?>
					<!-- tablet -->
					<img src="<?=IMG_PATH . $m->photo?>"
						alt="NOOR місце твоєї краси" class="hideDesctop hideMobile wow fadeIn">
					<?php
                        } else {
                            ?>
					<!-- mobile -->
					<img src="<?=IMG_PATH . $m->photo?>"
						alt="NOOR місце твоєї краси" class="hideDesctop hideTablet wow fadeIn">
					<?php
                        }
                    } ?>

					<div class="rect before-minus"></div>
					<div class="rect"></div>
				</div>
			</div>
		</div>
	</section> <?php
    }
} ?>
	</div>
	<div class="w-100 portfolio-order">
		<a href="<?=SITE_URL?>masters" class="order popup"><?=$this->text('Показати більше', 0)?></a>
	</div>
	</section>
	<!-- //! End work -->


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
