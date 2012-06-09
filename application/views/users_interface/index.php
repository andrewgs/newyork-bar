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
			<div class="main-wrapper">
				<div id="main-slide">
					<div class="mainslide-frame"> </div>
					<div class="welcome">
						<div class="w1">Добро пожаловать.</div>
						<div class="w2">Свадьбы. Банкеты. Корпоративы.</div>
					</div>
				</div>
			</div>
			<div class="proposals">
				<div class="grid_4">
					<div class="proposal p1">
						<div class="ptext">
							Сможем удивить <br /> самого требовательного <br /> гурмана
							<?=anchor('#','Посмотреть меню &raquo;');?>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="proposal p2">
						<div class="ptext">
							Окунитесь в атмосферу <br /> Нью-Йорка в дружной <br /> компании
							<?=anchor('#','Заказать столик &raquo;');?>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="proposal p3">
						<div class="ptext">
							Мечтаете отметить<br /> корпоратив в Нью-Йорке
							<?=anchor('#','Забронируйте день вашего праздника &raquo;');?>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="mailing-list">
						<h3>Подпишись на анонс событий</h3>
						<form>
							<input value="" type="text" placeholder="Введите email..."/>
							<button>Быть в курсе!</button>
						</form>
						<div class="note">
							Будь первым кто узнает о новом событии. <br/>
							Только одно письмо в месяц. Всегда купон на скидку. 
						</div>
					</div>
				</div>
				<div class="grid_8">
					<div class="recomendations">
						<h3>Согрейся нашим теплом!</h3>
						<p>
							Похолодало?! А в ресторан-баре New York все так же уютно и тепло. Приходи и обогрейся. <br />
							Пока вы сидите на работе или дома или еще где-нибудь, наш замечательный шеф-повар готовит для вас удивительные блюда.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?=$this->load->view("users_interface/footer");?>
<?=$this->load->view("users_interface/scripts");?>
</body>
</html>