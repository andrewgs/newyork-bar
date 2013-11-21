<div id="addFood" class="modal hide fade dmodal">
<?=form_open($this->uri->uri_string(),array('class'=>'form-horizontal')); ?>
	<div class="modal-header">
		<a class="close" data-dismiss="modal">×</a>
		<h3>Добавление блюда</h3>
	</div>
	<div class="modal-body">
		<fieldset>
			<div class="control-group">
				<label for="title" class="control-label">Название: </label>
				<div class="controls">
					<input type="text" id="atitle" class="input-xlarge ainput" name="title">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="eng_title" class="control-label">На английском: </label>
				<div class="controls">
					<input type="text" id="aEng_title" class="input-xlarge" name="eng_title">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="subcategory" class="control-label">Подкатегория1: </label>
				<div class="controls">
					<input type="text" id="asubcategory" class="input-xlarge ainput" name="subcategory">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="subcategory1" class="control-label">Подкатегория2: </label>
				<div class="controls">
					<input type="text" id="asubcategory1" class="input-xlarge ainput" name="subcategory1">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="weight" class="control-label">Вес: </label>
				<div class="controls">
					<input type="text" id="aweight" class="input-xlarge ainput" name="weight">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="price" class="control-label">Стоимость: </label>
				<div class="controls">
					<input type="text" id="aprice" class="input-xlarge ainput" name="price">
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
			<div class="control-group">
				<label for="composition" class="control-label">Состав: </label>
				<div class="controls">
					<textarea rows="2" id="acomposition" class="input-xlarge" name="composition"></textarea>
					<span class="help-inline" style="display:none;">&nbsp;</span>
				</div>
			</div>
		</fieldset>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal">Отменить</button>
		<button class="btn btn-success" type="submit" id="send" name="submit" value="send">Добавить</button>
	</div>
<?= form_close(); ?>
</div>