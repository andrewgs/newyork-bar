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
				<?=$textblock;?>
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
	<?=$this->load->view("users_interface/yandex");?>
</body>
</html>