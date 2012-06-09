<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?=$this->load->view("users_interface/head");?>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<?=$this->load->view("users_interface/header");?>
	<div role="main">
		<div class="container_12">
			<div class="restaurant-wrapper">
				<div class="description">
					<h1>О ресторане</h1>
					<p>
						Приглашаем посетить уютный ресторан «Нью-Йорк». Вас приятно удивят соотношение цены 
						и качества нашего заведения, вкус приготовления блюд не оставит равнодушным даже 
						самого изысканного гурмана, обслуживание посетителей на высоте, при этом в ресторане 
						можно расслабиться, повеселиться и просто хорошо провести время в кругу друзей.
					</p>
					<p>
						В ресторане имеется система скидок, оплата может производиться по наличному расчету и по 
						кредитным картам (master card, visa, maestro).	
					</p>
					<p>
						К Вашим услугам огромный выбор блюд из меню европейской и русской кухни, прекрасная 
						винная карта,  а так же коктейли на любой вкус.	
					</p>
					<p>
						В ресторане Вы можете отведать изысканные блюда от шеф-повара, послушать живую музыку, 
						насладиться уютной атмосферой.	
					</p>
					<p>
						В баре Вам предложат пиво, коктейли и вина, чай и кофе, прохладительные напитки.
						Ресторан-бар «Нью Йорк» предлагает услуги по организации банкетов, фуршетов, 
						корпоративных вечеров, свадеб и юбилеев.
					</p>
					<p>
						Ресторан «Нью-Йорк» рад каждому гостю! Ждем Вас! <br />
						Вы не разочаруетесь!	
					</p>
				</div>
				<div class="gallery">
					<div class="slider-wrapper">
						<a class="prev" id="prev" href="#">Пред.</a>
						<div class="slider">
							<div class="slider-list" id="slideshow">
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior-8.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior-9.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior-10.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior-11.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior-6.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior-7.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior--2.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior--1.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior-0.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior-4.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior-2.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior-3.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior-1.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior-5.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior-12.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior-13.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior-14.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior-15.jpg" />
								</div>
								<div class="slide">
									<img alt="" src="<?=$baseurl;?>img/interior/interior--4.jpg" />
									<img alt="" src="<?=$baseurl;?>img/interior/interior--3.jpg" />
								</div>								
							</div>
						</div>
						<a class="next" id="next" href="#">След.</a>
					</div>
					<div class="advantages clearfix">
						<div class="grid_4">
							<div class="adv">
								<h3>Wi-Fi</h3>
								<p>
									Две зоны Wi-Fi позволят вам оставаться на связи в любой точке нашего ресторана.
								</p>
							</div>
						</div>
						<div class="grid_8">
							<div class="adv">
								<h3>HD проектор и 6 плазменных панелей</h3>
								<p>
									Большой экран и плоские плазменные панели расположены в ресторане таким образом, чтобы обеспечить вам прекрасную видимость 
									из любого места в ресторане. Сидите, где хотите. Смотрите, что хотите.
								</p>
							</div>
						</div>
					</div>
					<div class="services clearfix">
						<ul>
							<li><?=anchor('#','Посмотрите меню &raquo;');?></li>
							<li><?=anchor('#','Ознакомьтесь с афишей &raquo;');?></li>
							<li><?=anchor('#','Забронируйте дату &raquo;');?></li>
							<li><?=anchor('#','Свяжитесь с нами &raquo;');?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?=$this->load->view("users_interface/footer");?>
<?=$this->load->view("users_interface/scripts");?>
<script src="<?=$baseurl;?>js/jquery.cycle.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#slideshow").cycle({ 
			fx: 'fade', 
			speed: 1000, 
			timeout: 0, 
			next: '#next', 
			prev: '#prev' 
		});
	});
</script>
</body>
</html>