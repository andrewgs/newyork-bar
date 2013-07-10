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
					<h1>Акции и специальные предложения</h1>
				</header>
				
				<section class="afisha-columns specials cf">
					<aside>
						<img src="<?=$baseurl;?>images/ny_wine.jpg" alt="Счастливый столик" />
					</aside>
					<div class="column">
						<h2>
							Счастливый столик
						</h2>
						<p>
							Каждый день в баре «New York» случайным образом выбирается номер счастливого столика, 
							которому мы дарим бутылку вина в подарок! 
						</p>
					</div>
				</section>
				<section class="afisha-columns specials cf">
					<aside>
						<img src="<?=$baseurl;?>images/ny_birthday_.jpg" alt="Подарок на день рождения" />
					</aside>
					<div class="column">
						<h2>
							Торт для именинника в подарок
						</h2>
						<p>
							У нас в Нью-Йорке тоже сплошные дни рождения! А все почему? Да, потому что имениннику в подарок 
							предоставляется скидка 20% на все меню и главный комплимент от нашего ресторана - праздничный торт! 
						</p>
					</div>
				</section>
				<section class="afisha-columns specials cf">
					<aside>
						<img src="<?=$baseurl;?>images/afisha/banner__vine_cocktail.jpg" alt="Бокал вина с каждым заказом" />
					</aside>
					<div class="column">
						<h2>
							Бокал вина или коктейль из барной карты в подарок
						</h2>
						<p>
							При предъявлении флаера к любому заказу новых блюд вы получаете бокал белого или красного вина. А для любителей коктейлей мы 
							предлагаем попробовать вечерний коктейль из барной карты по выбору ресторана. Каждый день новый коктейль. 
						</p>
						<p><em>Не забудьте распечатать и предъявить флаер.</em></p>
					</div>
				</section>
				<div class="cf"> </div>
				<section class="afisha-columns specials cf">
					<aside>
						<img src="<?=$baseurl;?>images/afisha/banner__company.jpg" alt="Скидка компаниям" />
					</aside>
					<div class="column">
						<h2>
							Компаниям от 6 человек предоставляется скидка 10% на любой заказ
						</h2>
						<p>
							И для тех, кто придет компанией от 6 человек мы безвозмездно дарим скидку 10%! Приходите большой шумной компанией 
							и не отказывайте себе в удовольствии. 
						</p>
						<p><em>Акция действует только при предъявлении флайера, который нужно распечатать.</em></p>
					</div>
				</section>
				<div class="cf"> </div>
				<section class="afisha-columns specials cf">
					<aside>
						<img src="<?=$baseurl;?>images/beluga.jpg" alt="Выступление группы Мохито" />
					</aside>
					<div class="column">
						<h2>
							Солидный выбор элитной водки в сопровождении достойного холодного блюда «Белужье плато»
						</h2>
						<p>
							При заказе водки «Белуга» вы получаете комплимент от ресторана &mdash; сдобные булочки, подрумяненные на гриле с красной икрой, селёдочкой и копчёной грудинкой. Подается вместе с домашними разносолами и салатной зеленью.
						</p>
					</div>
				</section>
			</article>
		</div>
		<?=$this->load->view("users_interface/includes/footer");?>
	</div>
	<div class="bottom-shadow"></div>
	<?=$this->load->view("users_interface/includes/scripts");?>
</body>

</html>