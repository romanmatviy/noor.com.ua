<?php if($_SESSION['alias']->alias == 'faq' || $_SESSION['alias']->alias == 'reviews' || $_SESSION['alias']->alias == 'sliders' || ($_SESSION['alias']->alias == 'portfolio' && count($_SESSION['alias']->breadcrumbs) == 2)){
	header('Location: https://noor.com.ua/');
	exit; 
}
if($_SESSION['language'] == 'en'){
	header('Location: https://noor.com.ua/');
	exit;
}
?>


<!DOCTYPE html>
<html lang="<?=$_SESSION['language']?>" prefix="og: https://ogp.me/ns#">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-187783159-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-187783159-1');
	</script>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NNDXG74');</script>
	<!-- End Google Tag Manager -->

	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2864688440428975');
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none" 
       src="https://www.facebook.com/tr?id=2864688440428975&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
	
	<title><?=$_SESSION['alias']->title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="<?=$_SESSION['alias']->title?>">
    <meta name="description" content="<?=$_SESSION['alias']->description?>">
    <meta name="keywords" content="<?=$_SESSION['alias']->keywords?>">
    <meta name="author" content="webspirit.com.ua">
    <meta name="facebook-domain-verification" content="ymmybqiu81w9fzotbpi1qldgrt15bk" />

    <meta property="og:locale"             content="<?=$_SESSION['language']?>_UA" />
    <meta property="og:title"              content="<?=$_SESSION['alias']->title?>" />
    <meta property="og:description"        content="<?=$_SESSION['alias']->description?>" />
    	<?php /* if(!empty($_SESSION['alias']->image)) { ?>
	<meta property="og:image"			   content="<?=IMG_PATH.$_SESSION['alias']->image?>" />
    	<?php }*/ ?>
    <?php if($_SESSION['alias']->alias == 'main'){ if(!empty($_SESSION['alias']->image)) { ?>
    	<meta property="og:image"			   content="<?=IMG_PATH.$_SESSION['alias']->image?>" />
    <?php } }else{ ?>	
    <meta property="og:image"			   content="<?=IMG_PATH?>og_image.jpg" />
	<?php } ?>

	<?=html_entity_decode($_SESSION['option']->global_MetaTags, ENT_QUOTES)?>
    <?=html_entity_decode($_SESSION['alias']->meta, ENT_QUOTES)?>

	<link rel="shortcut icon" href="<?=IMG_PATH?>ico.png">



	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

	<link href="<?=SERVER_URL?>assets/fontawesome-5.13.0/css/all.css" rel="stylesheet" />
	<link href="<?=SERVER_URL?>style/animate.min.css" rel="stylesheet" />
	<link href="<?=SERVER_URL?>style/style.min.css?v=a1.00104" rel="stylesheet" />

	
	<link rel="stylesheet" href="<?=SERVER_URL?>assets/owl-carousel/css/owl.carousel.css">
	<script type="text/javascript" src="<?=SERVER_URL?>assets/jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?=SERVER_URL?>assets/owl-carousel/js/owl.carousel.js"></script>
	<script type="text/javascript" src="<?=SERVER_URL?>assets/wow.js"></script>
	<script type="text/javascript" src="<?=SERVER_URL?>js/masc.js"></script>
	<script type="text/javascript" src="<?=SERVER_URL?>js/script.js?v=a56"></script>

	
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNDXG74"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php

		include "@commons/preloader.php";

		include "@commons/header.php";

		if(isset($view_file)) require_once($view_file.'.php');

		include "@commons/footer.php";

	?>



	<script>
		var SERVER_URL = '<?=SERVER_URL?>';
		var SITE_URL = '<?=SITE_URL?>';
		var ALIAS_URL = '<?=SITE_URL.$_SESSION['alias']->alias?>/';
	    $(document).ready(function() {
	        <?php
			if(!empty($_SESSION['alias']->js_init)) {
				foreach ($_SESSION['alias']->js_init as $js) {
					echo $js.'; ';
				}
			}
			?>
	    });
	</script>
	<?php
		if(!empty($_SESSION['alias']->js_load)) {
			foreach ($_SESSION['alias']->js_load as $js) {
				echo '<script type="text/javascript" src="'.SITE_URL.$js.'"></script> ';
			}
		}
	?>
	<?php if($_SESSION['alias']->alias != 'gifts'){ ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.preloader').slideUp();
		});
	</script>
	<?php }else{ ?>
	<script type="text/javascript">
		$(document).ready(function() {
			if($(document).width() < 1025){
				$('.preloader').slideUp();
			}
		});
	</script>
	<?php } ?>


	<script type="text/javascript" src="//w424732.yclients.com/widgetJS" charset="UTF-8" id="choose_script"></script>


</body>
</html>