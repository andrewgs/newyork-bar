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
			<div class="contacts-wrapper">
				<div class="mainslide-frame"> </div>
				<div class="contacts clearfix">
					<h1>Контакты</h1>
					<div class="grid_5 suffix_1">
						<div id="message_box"></div>
						<?=$this->load->view("forms/frmcontact");?>
					</div>
					<div class="grid_6">
						<div class="ya-map">
							<div id="ymaps-map-id_133876530959542054863" style="width: 400px; height: 311px;"></div>
							<script type="text/javascript">
								function fid_133876530959542054863(ymaps) {var map = new ymaps.Map("ymaps-map-id_133876530959542054863", {center : [39.774624076721146, 47.23498908113597],zoom : 15,type : "yandex#map"});
									map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
									map.geoObjects.add(new ymaps.Placemark([39.774409, 47.235179], {balloonContent : "Ресторан-бар Нью-Йорк"},{preset : "twirl#redDotIcon"}));
								};
							</script>
							<script type="text/javascript" src="http://api-maps.yandex.ru/2.0/?coordorder=longlat&load=package.full&wizard=constructor&lang=ru-RU&onload=fid_133876530959542054863"></script>
						</div>
						<h2>РЕСТОРАН-БАР «НЬЮ-ЙОРК»</h2>
						<p class="caption">Телефон:</p>
						<p>(863) 300-07-31</p>
						<p class="caption">Адрес:</p>
						<p>Ростов-на-Дону, ул.40-линия, д.5, корп.64</p>
						<p class="caption">Email:</p>
						<p><?=mailto('info@newyork-bar.ru','info@newyork-bar.ru');?></p>
						<p class="caption">Часы работы:</p>
						<p>ПН.&ndash;ВС. 11.00 &ndash; 0.00</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?=$this->load->view("users_interface/footer");?>
<?=$this->load->view("users_interface/scripts");?>
<script src="<?=$baseurl;?>js/script.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#submit").click(function(event){
			var err = false;
			var email = $("#email").val();
			$(".inpval").each(function(i,element){if($(this).val()==''){err = true;}});
			if(err){$("#message_box").html('<div class="error_box">Поля не могут быть пустыми</div>'); event.preventDefault();};
			if(!err && !isValidEmailAddress(email)){$("#message_box").html('<div class="error_box">Не верный адрес E-Mail</div>'); event.preventDefault();}
		});
		function isValidEmailAddress(emailAddress){
			var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
			return pattern.test(emailAddress);
		};
	});
</script>
</body>
</html>