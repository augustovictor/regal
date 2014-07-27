<div class="albuns index col-md-10 col-md-offset-1">
	<h2><?php echo __('Albuns'); ?></h2>
	<ul class="list-inline">
		<li><?php echo $this->Html->link(__('Adicionar Album'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('ano'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($albuns as $albun): ?>
	<tr>
		<td><?php echo h($albun['Albun']['id']); ?>&nbsp;</td>
		<td><?php echo h($albun['Albun']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($albun['Albun']['ano']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $albun['Albun']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $albun['Albun']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $albun['Albun']['id']), array(), __('Deseja deletar # %s?', $albun['Albun']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, exibindo {:current} registros de {:count}, iniciando em  {:start}, e terminando em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior '), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
