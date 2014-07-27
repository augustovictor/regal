

    <div id="container" class="col-md-12">
    	<div id="photos-column-menu" class="col-md-2 col-md-offset-1 text-center">
    		<div class="icon-menu-photos">
    			<a href="#">
    				<img src="img/camera-icon.png" alt="Filmagem">
    				<span> FOTOGRAFIA</span>
    			</a>
    		</div>
    		<!-- End icon-menu-photos -->

    		<ul class="text-left col-md-offset-1">
                <?php foreach($albuns as $albun): ?>
        		    <li>
                        <?php echo $this->Html->link($albun['Albun']['titulo'], array('controller' => 'albuns', 'action' => 'albun', $albun['Albun']['id'])); ?>
                    </li>
                <?php endforeach; ?>
    		</ul>
    	</div>

    	<div id="photos-container" class="col-md-8 text-center">
    		
    		<div class="col-md-12 text-left">
    			

    			<div class="thumbs-container-gallery col-md-12">
    				<div class="col-md-4">
	                    <a href="img/thumb-pic.png" data-title="Regal" data-lightbox="Regal">
	                        <img src="img/albuns01.png" alt="Regal" class="col-md-12 img-responsive">
	                    </a>

	                    <a href="img/thumb-pic.png" data-title="Regal" data-lightbox="Regal">
	                        <img src="img/albuns04.png" alt="Regal" class="col-md-12 img-responsive">
	                    </a>

	                    <a href="img/thumb-pic.png" data-title="Regal" data-lightbox="Regal">
	                        <img src="img/albuns06.png" alt="Regal" class="col-md-12 img-responsive">
	                    </a>
    				</div>

    				<div class="col-md-4">
	                    <a href="img/thumb-pic.png" data-title="Regal" data-lightbox="Regal">
	                        <img src="img/albuns02.png" alt="Regal" class="col-md-12 img-responsive">
	                    </a>

	                    <a href="img/thumb-pic.png" data-title="Regal" data-lightbox="Regal">
	                        <img src="img/albuns09.png" alt="Regal" class="col-md-12 img-responsive">
	                    </a>

    				</div>

    				<div class="col-md-4">
	                    <a href="img/thumb-pic.png" data-title="Regal" data-lightbox="Regal">
	                        <img src="img/albuns03.png" alt="Regal" class="col-md-12 img-responsive">
	                    </a>

	                    <a href="img/thumb-pic.png" data-title="Regal" data-lightbox="Regal">
	                        <img src="img/albuns08.png" alt="Regal" class="col-md-12 img-responsive">
	                    </a>

    				</div>



    			</div>
    			<!-- End thumbs-container -->

    		</div>
    		
    		<hr class="border-w">

    		<div class="footer-photos col-md-12 text-left font-dgray">
    			<span class="col-md-6">REGAL BRASÍLIA - QNA 07 - lote 01 - loja 2 - Taguatinga Norte - (61) 3028-4572</span>
                <span class="col-md-6">REGAL JOÃO PESSOA - Av. Esperança, 1695 - Manaíra - (83) 3578-5591</span>
    		</div>

    	</div>
    	<!-- End movies-container -->