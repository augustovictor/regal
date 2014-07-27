<div class="albuns view col-md-10 col-md-offset-1">
<h2><?php echo __('Albun'); ?></h2>
<ul class="list-inline">
		<li><?php echo $this->Html->link(__('Editar Albun'), array('action' => 'edit', $albun['Albun']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Albun'), array('action' => 'delete', $albun['Albun']['id']), array(), __('Deseja deletar # %s?', $albun['Albun']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Albuns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Album'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($albun['Albun']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($albun['Albun']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano'); ?></dt>
		<dd>
			<?php echo h($albun['Albun']['ano']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related  col-md-10 col-md-offset-1">
	<h3><?php echo __('Photos relacionadas'); ?></h3>
	<ul>
			<li><?php echo $this->Html->link(__('Adicionar Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	<?php if (!empty($albun['Photo'])): ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Local'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($albun['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['titulo']; ?></td>
			<td><?php echo $photo['local']; ?></td>
			<td><?php echo $this->Html->image($photo['path'], array('class' => 'small-img img-responsive')); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Visualizar'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), array(), __('Deseja deletar # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>