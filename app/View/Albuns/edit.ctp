<div class="albuns form col-md-10 col-md-offset-1">
<?php echo $this->Form->create('Albun', array('class' => 'col-md-12')); ?>
	<fieldset>
		<legend><?php echo __('Editar Album'); ?></legend>
		<ul class="list-inline">

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Albun.id')), array(), __('Deseja deletar # %s?', $this->Form->value('Albun.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Albuns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
	<?php
		echo $this->Form->input('id', array('between'=>'<br />', 'div' => "form-group"));
		echo $this->Form->input('titulo', array('between'=>'<br />', 'div' => "form-group"));
		echo $this->Form->input('ano', array('between'=>'<br />', 'div' => "form-group"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
