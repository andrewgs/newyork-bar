<!DOCTYPE html>
<!-- /ht Paul Irish - http://front.ie/j5OMXi -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view("users_interface/includes/head");?>

<body>
	<div class="top-shadow"> </div>
	<div id="container" class="cf">
		<?=$this->load->view("users_interface/includes/header");?>
		
		<div id="main" role="main">
			<?=$this->load->view("users_interface/includes/navigation");?>
			
			<article class="first cf">
				<header>
					<h1>Акции и специальные предложения<sup><small>*</small></sup></h1>
				</header>
								
				<section class="afisha-columns specials cf">
					<aside>
						<img src="<?=$baseurl;?>images/banner_shtox.jpg" alt="Крутящиеся бокалы" />
					</aside>
					<div class="column">
						<h2>Особые напитки в особые бокалы</h2>
						<p>
							Все просто. Вы берете бокал (пустой или с напитком), ставите на столе и легким 
							движением руки придаёте бокалу вращательное движение...
						</p>
						<p>
							Вращаясь на столе, бокал Shtox радует гурманов новыми штрихами в восприятии 
							любимых напитков, превращая дегустацию в особый ритуал, игру для взрослых.
						</p>
					</div>
				</section>

				<section class="afisha-columns specials cf">
					<aside>
						<img src="<?=$baseurl;?>images/afisha/gift_certificate.jpg" alt="Подарочный сертификат" />
					</aside>
					<div class="column">
						<h2>Подарочный сертификат со скидкой 10%</h2>
						<p>
							Дорогие друзья, мы создали возможность подарить вашим друзьям и близким людям подарочный сертификат на любую сумму. При покупке сертификата действует скидка 10%. Таким образом, сертификат на 2000 рублей вы сможете купить за 1800 рублей.  
						</p>
					</div>
				</section>
				
				<p class="image-caption">
					<sup>*</sup> Внимание! Акции не суммируются.
				</p>
			</article>
		</div>
		<?=$this->load->view("users_interface/includes/footer");?>
	</div>
	<div class="bottom-shadow"></div>
	<?=$this->load->view("users_interface/includes/scripts");?>
</body>

</html>