<div class="photos form col-md-10 col-md-offset-1">
		<ul class="list-inline">

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Photo.id')), array(), __('Deseja deletar # %s?', $this->Form->value('Photo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Photos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Albuns'), array('controller' => 'albuns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Album'), array('controller' => 'albuns', 'action' => 'add')); ?> </li>
	</ul>
<?php echo $this->Form->create('Photo', array('type' => 'file', 'class' => 'col-md-12')); ?>
	<fieldset>
		<legend><?php echo __('Editar Photo'); ?></legend>
	<?php
		echo $this->Form->input('id', array('between'=>'<br />', 'div' => "form-group"));
		echo $this->Form->input('titulo', array('between'=>'<br />', 'div' => "form-group"));
		echo $this->Form->input('local', array('between'=>'<br />', 'div' => "form-group"));
		echo $this->Form->input('albun_id', array('between'=>'<br />', 'div' => "form-group"));
		echo $this->Form->input('path', array('type' => 'file', 'between'=>'<br />', 'div' => "form-group"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>