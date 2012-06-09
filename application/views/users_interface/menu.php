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
		<div class="menu-wrapper clearfix">
			<div class="grid_5">
				<h2>Бизнес-ланчи</h2>
				<div class="business">
					<img alt="Бизнес-ланчи в Ресторане Нью-Йорк" src="img/menu/business.jpg" />
				</div>
				<p>
					Ресторан-бар «Нью-Йорк» специализируется на быстром обслуживании офисов в обеденные 
					часы и предлагает разнообразные бизнес-ланчи по доступным ценам. Комплексные бизнес-обеды, 
					приготовленные нашими поварами, отличаются большим разнообразием первых и вторых блюд, 
					салатами и десертами.</p>
				<h2>Банкетное меню</h2>
				<div class="banket">
					<img alt="Бизнес-ланчи в Ресторане Нью-Йорк" src="img/menu/banket.jpg" />
				</div>
				<!-- 
					<a class="printable" href="#">Банкетное меню в одном файле для печати</a>
				-->
				<p>
					Мы примем участие в проведении вашей свадьбы, дня рождения, юбилея и корпоротива. Все мероприятия в 
					нашем банкетном зале проводятся в любое время, удобное для Заказчика. Сервисное банкетное 
					обслуживание (официанты ,бармены) зависит от длительности мероприятия. Условия по спиртным напиткам обсуждаются 
					индивидуально.
				</p>
			</div>
			<div class="grid_7 alpha omega">
				<h2 class="menu-header">Меню</h2>
				<div class="menu-list">
					<ul>
					<?php for($i=0;$i<count($fcategory);$i++):?>
						<li><a href="#"><?=$fcategory[$i]['title'];?></a></li>
						<div class="menu-chapter">
							<table>
						<?php for($j=0;$j<count($foods);$j++):?>
							<?php if($foods[$j]['category'] == $fcategory[$i]['id']):?>
								<tr>
									<td class="caption"><strong><?=$foods[$j]['title'];?></strong><br/><?=(!empty($foods[$j]['composition']))?($foods[$j]['composition']): "";?></td>
									<td class="weight"><?=$foods[$j]['weight'];?></td>
									<td class="price"><?=$foods[$j]['price'];?> руб.</td>
								</tr>
							<?php endif;?>
						<?php endfor;?>
							</table>
						</div>
					<?php endfor;?>
					</ul>
				</div>
			</div>
		</div>
	</div>
  </div>
	<?=$this->load->view("users_interface/footer");?>
	<?=$this->load->view("users_interface/scripts");?>
</body>
</html>