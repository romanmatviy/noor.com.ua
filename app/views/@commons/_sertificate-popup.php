<link rel="stylesheet" type="text/css" href="<?=SERVER_URL?>style/courses-popup.css?v=0.07">
<div class="bg-popup" onclick="closePopup()"></div>
<form class="content-popup ajax" method="POST" action="<?=SITE_URL?>save/courseorder" >
	<h4><?=$this->text('Записатися на курс', 0)?> "<span></span>"</h4>
	<input type="hidden" name="direction" value="" id="direction">
	<input type="text" name="name" placeholder="<?=$this->text('*Ваше ім\'я', 0)?>" required id="name">
	<input type="tel" name="tel" placeholder="<?=$this->text('*Ваш номер телефону', 0)?>" required id="tel">
	<input type="mail" name="email" placeholder="<?=$this->text('Ваш email', 0)?>" id="email">
	<textarea name="text" placeholder="<?=$this->text('Коментар', 0)?>" id="text"></textarea>
	<input type="submit" value="Замовити" class="order-dark" >
</form>
<div class="success-ok">
	<h4><?=$this->text('Дякуємо за запис', 0)?></h4>
	<p><?=$this->text('Наш менеджер зв’яжеться з вами', 0)?> <br> <?=$this->text('протягом робочого дня', 0)?></p>
	<a href="javascript:void(0)" class="order-dark" onclick="closePopup()"><?=$this->text('НАЗАД', 0)?></a>
</div>
<script type="text/javascript" src="<?=SERVER_URL?>js/courses-popup.js"></script>
