<script type="text/javascript" src="<?=SERVER_URL?>js/sertificate-video.js"></script>
<main>
	<section id="gift-text-1" class="container align-center padding-50 conterner-gift-text">
		<div class="w-50 w-lil-50">
			<h2 class="back-text w-50 w-lil-50 lines-2 tablet-lines-3">
				<span><b><?=$this->text('Подарункові')?></b></span> <p class="w-50 w-lil-50"><?=$this->text('Подарункові сертифікати')?></p>
			</h2>
			<div class="text-to-back">
				<p class="m-text">
					<?=$this->text('Кожна жінка обожнює подарунки! А якщо він пов’язаний з процедурами догляду, то це подвійний виграш! Адже надзвичайно приємно, коли професіонал чаклує над твоєю зовнішністю. Замовляй сертифікат, а ми подбаємо про створення приємних емоцій для твоєї коханої, подруги або колеги!')?>
				</p>
				<a href="#" class="order-dark popup"><?=$this->text('Замовити', 0)?></a>
			</div>
		</div>
		<div class="w-50 w-lil-50">
			<img src="<?=IMG_PATH.$_SESSION['alias']->images[0]->big_path?>" alt="NOOR місце твоєї краси" class="wow fadeIn">
		</div>
	</section>
	<section id="gift-text-2" class="container align-center padding-50 conterner-gift-text">
		<div class="w-100 w-lil-100">
			<div class="text-to-back">
				<p class="m-text text-center">
					<?=$this->text('Сертифікатати NOOR Studio - це актуальний подарунок для будь-якої жінки! Ви маєте змогу обрати варіанти номіналом 500, 1000, 1500 або 2000 грн. На цю суму можна скористатись різноманітними процедурами, представленими в нашій студії!')?>
				</p>
			</div>
		</div>
	</section>
	<section id="gift-text-3" class="container align-center padding-50 conterner-gift-text">
		<div class="w-100 w-lil-100">
			<div class="text-to-back">
				<p class="m-text text-center">
					<?=$this->text('Ми потурбуємось про те щоб ваш сюрприз запамятається на довго!')?>
				</p>
			</div>
		</div>
	</section>
	<section id="gift-text-4" class="container align-center padding-50 conterner-gift-text">
		<div class="w-100 w-lil-100">
			<div class="text-to-back">
				<p class="m-text text-center">
					<?=$this->text('Як це працює? Ви обираєте сертифікат на потрібну суму або послугу. Залишаєте свої контактні данні для отримання. Оплачуєте подарунок онлайн або кур’єру. Даруєте сертифікат!')?> 
				</p>
			</div>
		</div>
	</section>
	<section id="gift-text-5" class="container align-center padding-50 conterner-gift-text">
		<div class="w-100 w-lil-100">
			<div class="text-to-back">
				<div class="flex justify-center">
					<p class="m-text text-center">
						<?=$this->text('У разі необхідності ви завжди можете зв’язатись з нами будь-яким зручним способом або ж завітати в NOOR studio особисто.')?> 
					</p>
					<div class="min900">
						<div class="flex radios">
							<div class="w-25 w-lil-50 w-xs-50">
								<label>
									<input type="radio" name="sum" value="500" checked>
									<div class="fakecheck"></div>
									<?=$this->text('500грн')?>
								</label>
							</div>
							<div class="w-25 w-lil-50 w-xs-50">
								<label>
									<input type="radio" name="sum" value="1000">
									<div class="fakecheck"></div>
									<?=$this->text('1000грн')?>
								</label>
							</div>
							<div class="w-25 w-lil-50 w-xs-50">
								<label>
									<input type="radio" name="sum" value="1500">
									<div class="fakecheck"></div>
									<?=$this->text('1500грн')?>
								</label>
							</div>
							<div class="w-25 w-lil-50 w-xs-50">
								<label>
									<input type="radio" name="sum" value="2000">
									<div class="fakecheck"></div>
									<?=$this->text('2000грн')?>
								</label>
							</div>
						</div>
					
						<div class="flex radios">
							<a href="" class="order-dark popup submit" data-price="500"><?=$this->text('Замовити')?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<div id="bg-s"></div>




<link rel="stylesheet" type="text/css" href="<?=SERVER_URL?>style/sertificate.css?v=0.06">
<div class="bg-popup" onclick="closePopup()"></div>
<form class="content-popup ajax" method="POST" action="<?=SITE_URL?>save/gifts" >
	<h4><?=$this->text('Замовити подарунковий сертифікат')?></h4>
	<input type="hidden" name="quantity" value="1" id="quantity">
	<input type="text" name="name" placeholder="<?=$this->text('*Ваше ім\'я')?>" required id="name">
	<input type="tel" name="tel" placeholder="<?=$this->text('*Ваш номер телефону')?>" required id="tel">
	<input type="mail" name="email" placeholder="<?=$this->text('Ваш email')?>" id="email">
	<div class="midd">
		<p><span><?=$this->text('Сертифікат на')?></span>
			<select name="howmuch" id="howmuch">
				<option value="500">500 <?=$this->text('грн')?></option>
				<option value="1000">1000 <?=$this->text('грн')?></option>
				<option value="1500">1500 <?=$this->text('грн')?></option>
				<option value="2000">2000 <?=$this->text('грн')?></option>
			</select>
		</p>
		<div class="quantity">
			<span><?=$this->text('Кількість:')?></span>
			<div class="n-q">
				<a href="javascript:void(0)" class="n-btn minus" onclick="minus()"><img src="<?=SERVER_URL?>style/images/minus1.svg" alt="minus"></a>
				<p class="n-value">1</p>
				<a href="javascript:void(0)" class="n-btn plus" onclick="plus()"><img src="<?=SERVER_URL?>style/images/plus1.svg" alt="plus"></a>
			</div>
		</div>
	</div>
	<textarea name="text" placeholder="<?=$this->text('Коментар до замовлення')?>" id="text"></textarea>
	<input type="submit" value="Замовити" class="order-dark" >
</form>
<?php /* ?>
<div class="success-ok">
	<h4><?=$this->text('Дякуємо за замовлення')?></h4>
	<p><?=$this->text('Наш менеджер зв’яжеться з вами')?> <br> <?=$this->text('протягом робочого дня')?></p>
	<a href="javascript:void(0)" class="order-dark" onclick="closePopup()"><?=$this->text('НАЗАД')?></a>
</div>
<?php */ ?>
<script type="text/javascript" src="<?=SERVER_URL?>js/sertificate.js?v=0.01"></script>
