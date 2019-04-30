<div class="botton_fijo">
<span><a href="<?= base_url('reservacion/').$Idioma?>" class="btn btn-secondary text-2 text-uppercase">
							<small><?= ($Idioma==='es')?'¡Reserva<br><strong>Aqui</strong> !' : 'Reserve <br><strong>Here</strong>' ?></small>
	</a></span>
</div>
<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/mini-banner-serviciosmarques.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center titulos-habitaciones">
			<?if($Idioma==="es"){
			?>
			<h2>Servicios del Marqués </h2>
			<?
			}else{
				?>
					<h2>Marques Services</h2>
				<?
			}
			?>
		</div>
		<div class="col-7 col-md-3 col-xl-3 col-lg-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="container">
	<div class="row d-flex justify-content-center m-t-50 m-b-50">
		<div class="col-12 col-md-10 col-lg-10 col-xl-10 text-justify text-blue text-font-1-5 descrip">
			<?if($Idioma==="es"){
			?>
			<p><strong>Una</strong> combinación histórica <strong>con nuestras raíces mexicanas, busca </strong>generar una experiencia <strong>de aprendizaje natural dentro de las instalaciones del Hotel, transportando a la época del siglo XVII.</strong> 
				<br>
			Una herencia de los españoles durante la conquista fue el vino, en el Marqués podrás degustar en un ambiente perfecto uno de nuestros vinos de la cava del Hotel. Sin embargo, la herencia que nos dejan los propios nativos de México fue el Mezcal.<p> 
			<?
			}else{
				?>
				<p>
				A historical combination of our <strong>Mexican roots</strong>, seeks to <strong>generate a natural learning experience </strong>within the facilities of the Hotel, <strong>transporting you to the 17th Century</strong>. 
					
<p>
A legacy of the Spanish people during the conquest was the wine. in the Marques you can taste in a perfect atmosphere one of our wines from the Hotel's cellar. In other hand, the inheritance left by the natives of Mexico was the Mezcal.

				</p>
				<?
			}
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row m-t-60 d-flex justify-content-center  m-b-50">
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 m-t-50">
			<a href="<?= base_URL('restaurante/').$Idioma?>" class="row d-flex justify-content-center">
				<div class="col-9">
					<img class="img-fluid" src="<?=base_URL()?>assets/img/iamgenes-restaurantes.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<?if($Idioma==="es"){
					?>
					<h4>Restaurante del Marqués</h4>
					<?
						}else{
							?>
							<h4>Marques Restaurant</h4>
							<?
						}
					?>
				</div>
				
			</a>
		</div>	
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 m-t-50">
			<a href="<?= base_URL('mezcaleria/').$Idioma?>" class="row d-flex justify-content-center">

				<div class="col-9">
					<img class="img-fluid"  src="<?=base_URL()?>assets/img/iamgenes-mezcaleria.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<?if($Idioma==="es"){
					?>
					<h4>Mezcalería & Cava del Marqués</h4>
					<?
						}else{
							?>
							<h4>Marques Mezcalería & Wine Cellar</h4>
							<?
						}
					?>
					
				</div>
			</a>
		</div>		
	</div>
</div>