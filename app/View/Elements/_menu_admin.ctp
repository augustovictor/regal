<div class="row col-md-12 text-center">
 <ul id="top-menu" class="list-inline col-md-12">
   <li><?php echo $this->Html->link('FOTOGRAFIA', array('controller' => 'albuns', 'action' => 'index')); ?></li>
   <li><?php echo $this->Html->link('FILMAGEM', array('controller' => 'videos', 'action' => 'index')); ?></li>
   <li><?php echo $this->Html->link('A EMPRESA', array('controller' => 'pages', 'action' => 'display', 'empresa')); ?></li>
   <li><?php echo $this->Html->image('regal-logo.png', array('url' => array('controller' => 'pages', 'action' => 'display', 'home'))); ?></li>
   <li><?php echo $this->Html->link('ORÇAMENTOS', array('controller' => 'pages', 'action' => 'display', 'orcamentos')); ?></li>
   <li><?php echo $this->Html->link('CONTATO', array('controller' => 'pages', 'action' => 'display', 'contato')); ?></li>
   <?php if (AuthComponent::user('id')): ?>
     <li class="text-right dropdown"> 
      <a href="#" data-toggle="dropdown">
        Olá, <?= AuthComponent::user('username') ?>
        <b class="caret"></b>
      </a> 

      <ul class="dropdown-menu">
        <li>
          <?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout'), array('class' => 'text-left')); ?>
        </li>
      </ul>

    </li>
    <?php endif; ?> 
 </ul>

 <div id="social-search-container" class="col-md-10 col-md-offset-1">
  <ul class="list-inline col-md-3">
     <li><?php echo $this->Html->link($this->Html->image('fb-icon.png'), 'http://www.facebook.com/agenciaregal', array('target' => '_blank', 'escape' => false)); ?>
    </li>
    <li><?php echo $this->Html->link($this->Html->image('ig-icon.png'), 'http://www.instagram.com/regalnordeste', array('target' => '_blank', 'escape' => false)); ?>
    </li>
     <li><?php echo $this->Html->link($this->Html->image('youtube-icon.png'), 'http://www.youtube.com/agenciaregal', array('target' => '_blank', 'escape' => false)); ?>
    </li>
    <li><?php echo $this->Html->link($this->Html->image('vimeo-icon.png'), 'http://www.vimeo.com/agenciaregal', array('target' => '_blank', 'escape' => false)); ?>
    </li>
  </ul>

  <div id="search-container" class="text-right">
   <input type="text" placeholder="Buscar por casal" />

 </div>
 <!-- End search-container -->

</div>
<!-- End social-search-container -->

</div>
    <!-- End top-menu -->
