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
		<div class="left-shadow"> </div>
		<div class="right-shadow"> </div>
		
		<header role="main" class="cf">
			<div class="hours">
				We operate <br/>
				daily and always <br/>
				welcome our guests <br/> 
				from 11:00 to 24:00
			</div>
			<a id="logo" href="<?=$baseurl;?>">
				<img src="<?=$baseurl;?>images/logo.png" alt="Ресторан-бар «Нью-Йорк»"/>
			</a>
			<a href="<?=$baseurl;?>en" class="eng">
				<img src="<?=$baseurl;?>images/eng.png" alt="Английская версия" title="Английская версия"/>
			</a>
			<a href="<?=$baseurl;?>" class="rus">
				<img src="<?=$baseurl;?>images/rus.png" alt="Русская версия" title="Русская версия"/>
			</a>
			<address>
				+7 (863) 300-07-31<br />
				<?=safe_mailto('info@newyork-bar.ru','info@newyork-bar.ru');?><br/>
				Rostov-on-Don <br/> 
				40th Line, 5/64
			</address>
		</header>
	
		<div id="main" role="main">
			<nav>
				<ul>
					<li><?=anchor('/','Home');?></li>
					<li><?=anchor('menu','Menu');?></li>
					<li><?=anchor('arenda-banketnogo-zala','Banquets');?></li>
					<li><?=anchor('afisha','Billboard');?></li>
					<li><?=anchor('vakansii','Jobs');?></li>
					<li><?=anchor('akcii','Promotions');?></li>
					<li><?=anchor('contacts','Contacts');?></li>
					<li class="social-menu"><a target="_blank" class="social facebook" href="http://vk.com/newyork_bar"><img src="<? base_url(); ?>/images/vkontakte.png" /></a></li>
					<li class="social-menu"><a target="_blank" class="social vkontakte" href="https://www.facebook.com/RestoranBarNewYork"><img src="<? base_url(); ?>/images/facebook.png" /></a></li>
				</ul>
			</nav>
			
			<div id="carousel" class="cf" style="margin-bottom: 0;">
				<div class="photo-wrapper clear">
					<a class="promo-banner" href="<?=$baseurl;?>">
						<img src="<?=$baseurl;?>images/afisha/banner_oct_13.jpg" alt="Афиша на ноябрь" />
					</a>
				</div>
			</div>
			<article class="cf">
				<header>
					<h1>About</h1>
				</header>
				<section class="paper-columns">
					<div class="column">
						<p>
							Unbelievable, you have not been in "New York"? Then you have to correct the expert's reputation of the most 
							iconic places in Rostov-on-Don. There is a possibility to fix everything, just come to our restaurant to enjoy 
							and have a great time. The atmosphere and coziness will immediately create a feeling that we have been waiting 
							here for you, glad to see you as our honored guest. 
						</p>
						<p>
							You will be pleasantly surprised by the quality and value, 
							and the taste of signature dishes for sure will impress even the gourmets. The best possible experience for our 
							guests makes the work of staff, all your orders and requests are performed quickly, accurately and sensitively. 
							The name of the restaurant - "New York" is a great responsibility, and we put our passion to suit. 
						</p>
						<p>
							As the city of New York is a melting pot mixed all nations of the Earth, and our   
						</p>
					</div>
					<div class="column">
						<p>
							establishment committed to the 
							style of fusion and absorbed the culture and traditions of national cuisines – such as  European, Mediterranean 
							and, of course, Russian. In addition to a wide selection of dishes from the menu, our chef always offers something 
							special. He is ready to fulfill your wishes whether it is something delicious, or just your favorite. Magnificent 
							wine list, as well as cocktails card will complement the beauty and the richness of the table.
						</p>
						<p>
							The restaurant becomes very popular in a period of great sporting events, as fans we know what is needed to be a part of big sports team and feel comfortable, that is why fans rock here. 
						</p>
						<p>
							Your Leisure will be flattered by live music and the unique atmosphere. The bar offers beer, cocktails and wine, tea and coffee, soft drinks.
						</p>
					</div>
				</section>
				<aside>
					<img src="<?=$baseurl;?>images/main_promo_11.jpg" alt="Услуги по организации банкетов" /> 
					<p class="image-caption">Restaurant-bar "New York" offers services in organizing banquets, receptions, weddings, corporate parties and anniversaries.</p> 
				</aside>
			</article>
			<article class="cf">
				<header>
					<h2>Service and comfort</h2>
				</header>
				<section class="paper-columns narrow">
					<div class="column wide">
						<p>
							Projector with high resolution and large screen, as well as six flat plasma screens are located in the 
							restaurant so as to provide you with excellent visibility from any seat in the restaurant. Sit where 
							you like. Watch what you want.
						</p>
						<h3>Always Online</h3>
						<p>Two zones Wi-Fi will allow you to stay connected anywhere in our restaurant.</p>
					</div>
				</section>
				<aside class="wide">
					<img src="<?=$baseurl;?>images/main_promo_2.jpg" alt="Интерьер ресторана Нью-Йорк" /> 
				</aside>
			</article>
			<div class="map"> </div>
			<div class="welcome">Welcome to New York</div>
		</div>
		<footer class="cf">
			<nav>
				<ul>
					<li><?=anchor('/','Home');?></li>
					<li><?=anchor('menu','Menu');?></li>
					<li><?=anchor('arenda-banketnogo-zala','Banquets');?></li>
					<li><?=anchor('afisha','Billboard');?></li>
					<li><?=anchor('vakansii','Jobs');?></li>
					<li><?=anchor('akcii','Promotions');?></li>
					<li><?=anchor('contacts','Contacts');?></li>
				</ul>
			</nav>
			<div class="copy">Restaurant-bar New York &copy; 2012-2013</div>
			<div class="reality">
				Made in «<a href="http://grapheme.ru">Grapheme</a>»
			</div>
		</footer>
	</div>
	<div class="bottom-shadow"></div>
	<?=$this->load->view("users_interface/includes/scripts");?>
	<script src="<?=$baseurl;?>js/libs/jquery.cycle.js"></script>
	<script src="<?=$baseurl;?>js/libs/jquery.easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			/*
			$('div#photo-slider').cycle({
				fx: 'scrollLeft',
				speed: 'fast',
				timeout: 5000,
				pager: "#photo-thumbs", 
				pagerAnchorBuilder: function(idx, slide){
					return '<a class="thumbnail" href="#" style="background: url(\''+slide.src+'\') no-repeat center center;">Slide '+idx+'</a>';
				} 
			});
			*/
			$('div.photo-wrapper').cycle({
				fx: 'fade',
				//speed: 'slow',
				timeout: 7000
			});
		});
	</script>
</body>
</html>