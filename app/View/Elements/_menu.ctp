<div class="row col-md-12 text-center">
 <ul id="top-menu" class="list-inline col-md-12">
   <li><?php echo $this->Html->link('FOTOGRAFIA', array('controller' => 'pages', 'action' => 'display', 'albuns')); ?></li>
   <li><?php echo $this->Html->link('FILMAGEM', array('controller' => 'pages', 'action' => 'display', 'videos')); ?></li>
   <li><a href="#" data-toggle="modal" data-target="#contactModal">REGAL PHONE</a></li>
   <li><?php echo $this->Html->image('regal-logo.png', array('url' => array('controller' => 'pages', 'action' => 'display', 'home'))); ?></li>
   <li><?php echo $this->Html->link('A EMPRESA', array('controller' => 'pages', 'action' => 'display', 'empresa')); ?></li>
   <li><?php echo $this->Html->link('ORÇAMENTOS', array('controller' => 'pages', 'action' => 'display', 'orcamentos')); ?></li>
   <li><?php echo $this->Html->link('CONTATO', array('controller' => 'pages', 'action' => 'display', 'contato')); ?></li>
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

<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
        <h4 class="modal-title" id="myModalLabel">Regal phone</h4>
      </div>
      <div class="modal-body">
        <h4>REGAL BRASÍLIA</h4>
        <p>QNA 07 - lote 01 - loja 2 - Taguatinga Norte - (61) 3028-4572</p>

        <hr class="col-md-12">

        <h4>REGAL JOÃO PESSOA</h4>
        <p>Av. Esperança, 1695 - Manaíra - (83) 3578-5591</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>