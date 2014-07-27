<div id="container" class="col-md-12">
	<div id="photos-column-menu" class="col-md-2 col-md-offset-1 text-center">
		<div class="icon-menu-photos">
			<a href="#">
				<?php echo $this->Html->image('camera-icon.png'); ?>
				<span> FOTOGRAFIA</span>
			</a>
		</div>
		<!-- End icon-menu-photos -->

		<ul class="text-left">
			<ul class="text-left">
                <?php foreach($albuns as $a): ?>
        		    <li>
                        <?php echo $this->Html->link($a['Albun']['titulo'], array('controller' => 'albuns', 'action' => 'albun', $a['Albun']['id'])); ?>
                    </li>
                <?php endforeach; ?>
    		</ul>
		</ul>
	</div>

	<div id="photos-container-page" class="col-md-8 text-center">

		<div class="col-md-12 text-left">

			<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->

				<!-- Wrapper for slides -->
				<!-- <div class="carousel-inner">
					<div class="item active">
						<img src="img/thumb-pic.png" alt="...">
						<div class="carousel-caption">
							...
						</div>
					</div>

					<div class="item">
						<img src="img/thumb-pic.png" alt="...">
						<div class="carousel-caption">
							...
						</div>
					</div>
					...
				</div> -->

				<!-- Controls -->
				<!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a> -->
			</div>

			<div class="thumbs-container-gallery col-md-12">
				<?php foreach (h($albun['Photo']) as $photo): ?>
					<a href="<?php echo '/regal-cms/img/' . $photo['path']; ?>" data-title="Regal" data-lightbox="Regal" class="col-md-4">
						<?php echo $this->Html->image($photo['path'], array('class' => 'img-responsive img-gallery-thum')); ?>
					</a>
				<?php endforeach; ?>
			
			</div>
			<!-- End thumbs-container -->

		</div>

		<hr class="border-w">

		<div class="footer-photos col-md-8 text-left font-dgray">
			<span class="col-md-6">REGAL BRASÍLIA - QNA 07 - lote 01 - loja 2 - Taguatinga Norte - (61) 3028-4572</span>
			<span class="col-md-6">REGAL JOÃO PESSOA - Av. Esperança, 1695 - Manaíra - (83) 3578-5591</span>
		</div>

	</div>
	<!-- End movies-container -->