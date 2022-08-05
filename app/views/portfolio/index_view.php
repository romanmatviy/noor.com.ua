<!-- <?php print_r(count($_SESSION['alias']->breadcrumbs)); ?> -->
<main class="container">
	<aside class="w-33">
		<h2 class="back-text text-tablet-center text-mobile-center"> 
			<span><b><?=$this->text('Наші')?></b></span> <p class="text-tablet-center text-mobile-center w-33"><?=$this->text('Наші роботи')?></p>
		</h2>
		<div class="text-to-back filter">
			<a href="#" class="buttonBox" data="all">
			    <span><?=$this->text('Всі')?></span>
			    <div class="border"></div>
			    <div class="border"></div>
			</a>
			<?php if($groups){ foreach ($groups as $g) { ?>
			<a href="#" class="buttonBox" data="<?=$g->alias?>">
			    <span><?=$g->name?></span>
			    <div class="border"></div>
			    <div class="border"></div>
			</a>
			<?php } } ?>

		</div>
		
	</aside>
	<section class="portfolio-container left-side w-66">
		<div class="flex">
			<?php $portfolio = $this->load->function_in_alias('portfolio', '__get_Articles', array('limit' => 1000));
			if($portfolio){ rsort($portfolio); foreach ($portfolio as $p) { ?>
			<div class="w-33 w-lil-33 w-xs-33 <?php foreach($p->group as $pg){ echo $pg->alias." "; } ?>">
				<figure data-img="<?=IMG_PATH.$p->photo?>">
					<!-- <a href="<?=$p->list?>" target="_blank"> -->
						<img src="<?=IMG_PATH.$p->s_photo?>" alt="<?=$p->name?>" data-img="<?=IMG_PATH.$p->photo?>">
						<?php if($p->text && $p->text != ''){ ?>
						<figcaption>
							<h5><?=$p->name?></h5>
							<?= $this->data->getShortText(html_entity_decode($p->text), 180) ?>
						</figcaption>
						<?php } ?>
					<!-- </a> -->
				</figure>
			</div>
			<?php } } ?>
		</div>
		<div class="w-100 w-lil-100 portfolio-order">
			<a href="#" class="order popup show_more"><?=$this->text('Показати більше')?></a>
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