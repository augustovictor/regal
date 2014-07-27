<div class="photos index col-md-10 col-md-offset-1">
	<h2><?php echo __('Photos'); ?></h2>
	<ul class="list-inline">
		<li><?php echo $this->Html->link(__('Adicionar Photo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Albuns'), array('controller' => 'albuns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Album'), array('controller' => 'albuns', 'action' => 'add')); ?> </li>
	</ul>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('local'); ?></th>
			<th><?php echo $this->Paginator->sort('albun_id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($photos as $photo): ?>
	<tr>
		<td><?php echo h($photo['Photo']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($photo['Photo']['local']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($photo['Albun']['titulo'], array('controller' => 'albuns', 'action' => 'view', $photo['Albun']['id'])); ?>
		</td>
		<td><?php echo $this->Html->image(h($photo['Photo']['path']), array('class' => "small-img")); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $photo['Photo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $photo['Photo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $photo['Photo']['id']), array(), __('Deseja deletar # %s?', $photo['Photo']['id'])); ?>
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

