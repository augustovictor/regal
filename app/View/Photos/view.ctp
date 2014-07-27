<div class="photos view col-md-10 col-md-offset-1">
<h2><?php echo __('Photo'); ?></h2>
<ul class="list-inline">
		<li><?php echo $this->Html->link(__('Editar Photo'), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar Photo'), array('action' => 'delete', $photo['Photo']['id']), array(), __('Deseja deletar # %s?', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Photo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Albuns'), array('controller' => 'albuns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Adicionar Album'), array('controller' => 'albuns', 'action' => 'add')); ?> </li>
	</ul>
	<dl>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['local']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Albun'); ?></dt>
		<dd>
			<?php echo $this->Html->link($photo['Albun']['titulo'], array('controller' => 'albuns', 'action' => 'view', $photo['Albun']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo $this->Html->image(h($photo['Photo']['path']), array('class' => 'med-img')); ?>
			&nbsp;
		</dd>
	</dl>
</div>