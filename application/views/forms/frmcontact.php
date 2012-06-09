<?=form_open($this->uri->uri_string(),array('id'=>'contacts-form','name'=>'contacts-form')); ?>
	<legend>Свяжитесь с нами</legend>
	<div class="control-group">
		<label for="name">Представьтесь пожалуйста</label>
		<input type="text" value="" id="name" name="name" class="inpval"/>
	</div>
	<div class="control-group">
		<label for="email">Email</label>
		<input type="text" value="" id="email" name="email" class="inpval"/>
	</div>
	<div class="control-group">
		<label for="phone">Ваш контактный телефон</label>
		<input type="text" value="" id="phone" name="phone" class="inpval"/>
	</div>
	<div class="control-group">
		<label for="text">Сообщение или вопрос?</label>
		<textarea rows="5" id="text" name="text" class="inpval"></textarea>
	</div>
	<div class="control-group">
		<button type="submit" id="submit" name="submit">Отправить</button>
	</div>
<?= form_close(); ?>