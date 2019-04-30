<div class="botton_fijo">
<span><a href="<?= base_url('reservacion/').$Idioma?>" class="btn btn-secondary text-2 text-uppercase">
							<small><?= ($Idioma==='es')?'Reserva Aquí !' : 'Reserve here' ?></small>
	</a></span>
</div>
<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/mini-banner-suite-marques.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center titulos-habitaciones">
			<? if($Idioma==="es"){
				?>
				<h2>Suite Marqués </h2>
				<?
			}else{
				?>
				<h2>Marques Suite</h2>
				<?
			}
			?>
			

		</div>
		<div class="col-8 col-md-3 col-lg-3 col-xl-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="container">
	<div class="row m-t-60 d-flex justify-content-center">
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 m-t-50">
			<div class="row d-flex justify-content-center">
				<div class="col-9">
					<img class="img-fluid" onclick="$('#Galeria').modal('toggle')" src="<?=base_URL()?>assets/img/112_SUITE_MARQUES.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<h4>Fray Martín de Valencia</h4>
				</div>
				<div class="col-9 text-center m-t-30">
					<div class="btn btn-secondary text-2">
						<a href="<?=base_URL('/reservacion/').$Idioma?>" class="text-white"><small class="text-uppercase"><?= $textohead->T2?></small></a>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>
<? if($Idioma==="es"){
				?>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70 m-b-70">
		<div class="col-12 text-center titulos-habitaciones">
			<h2>Características</h2>
		</div>
		<div class="col-8 col-md-3 col-lg-3 col-xl-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="container bgazul bg-caracteristicas">
	<div class="row d-flex align-items-start cuadro-central">
		<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/ocupacion2.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11 text-white text-2 m-t-50">
			<h4>Ocupación Máxima: 4 personas</h4>
		</div>
		<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/cama.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11 text-white text-2 m-t-50">
			<h4>Cama King Size</h4>
		</div>
			
		<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/room-service.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11 text-white text-2 m-t-50">
			<h4>Room Service hasta las 22:00 Hrs</h4>
		</div>
			<div class="col-0 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/room-service1.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-12 col-md-5 col-lg-5 col-xl-5 text-white text-2 lista-amenidades">
			<h4>
				<ul>
					
					<li>Caja de Seguridad</li>
					<li>Smart TV con Cable</li>
					<li>Chapa Electrónica</li>
					<li>AC</li>
					<li>Teléfono</li>
					<li>Wifi de alta velocidad</li>
					<li>Armario Antiguo</li>
					
				</ul>
			</h4>
		</div>
			<div class="col-12 col-md-6 col-lg-6 col-xl-6 text-white text-2 lista-amenidades">
			<h4>
				<ul>
					
				
					
					<li>Suave ropa de cama</li>
					<li>Escritorio para Comer o Trabajar tranquilamente </li>
					<li>Kit de Baño</li>
					<li>Secadora de Cabello</li>
					<li>Regadera de presión ajustable</li>
					
					<li>Espejo de gran tamaño</li>
				</ul>
			</h4>
		</div>
		<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/mas.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11 text-white text-2 lista-amenidades">
			<h4>
				<ul>
					<li>Máquina de Café Premium</li>
					<li>Selección de amenidades CAVA</li>
					<li>Vino de la Casa </li>
					<li>Baño</li>
					<li>Kit de Baño</li>
					<li>Secadora de Cabello</li>
					<li>Batas de baño</li>
					<li>Pantuflas comodas</li>
					<li>Bebidas Premium</li>
				</ul>
			</h4>
		</div>
	</div>
</div>
<?
}else{
	?>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70 m-b-70">
		<div class="col-12 text-center titulos-habitaciones">
			<h2>Marques Suite Characteristics</h2>
		</div>
		<div class="col-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="container bgazul">
	<div class="row d-flex align-items-start p-l-70 p-r-70 p-t-50 p-b-50">
		<div class="col-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/ocupacion2.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-11 text-white text-2 m-t-50">
			<h4>Maximum Occupancy: 4 people</h4>
		</div>
		<div class="col-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/cama.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-11 text-white text-2 m-t-50">
			<h4>King size bed</h4>
		</div>
			
		<div class="col-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/room-service.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-11 text-white text-2 m-t-50">
			<h4>Room Service until 10:00 p.m.</h4>
		</div>
			<div class="col-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/room-service1.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-5 text-white text-2 p-l-30 m-t-50">
			<h4>
				<ul>
					
					<li>Security box</li>
						<li>Smart TV with Cable</li>
						<li>Electronic plate</li>
						<li>AC</li>
						<li>Telephone</li>
						<li>High speed Wifi</li>
						<li>Antique Wardrobe</li>
					
				</ul>
			</h4>
		</div>
			<div class="col-6 text-white text-2 p-l-30 m-t-50">
			<h4>
				<ul>
					
				
					
					<li>Soft bedding</li>

						<li>Bathroom Kit</li>
						<li>Hairdryer</li>
						<li>Adjustable pressure sprinkler</li>

						<li>Large mirror</li>
				</ul>
			</h4>
		</div>
		<div class="col-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/mas.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-11 text-white text-2 p-l-30 m-t-50">
			<h4>
				<ul>
					<li>Premium Coffee Machine</li>
					<li>CAVA amenities selection</li>
					<li>Came from home </li>
					<li>Bathroom</li>
					<li>Bathroom Kit</li>
					<li>Hairdryer</li>
					<li>Bathrobes</li>
					<li>Comfortable pantyhose</li>
					<li>Premium drinks</li>
				</ul>
			</h4>
		</div>
	</div>
</div>

	<?
}
?>
<script>

	$(document).ready(function(){
		$(".btn-prev").on("click",function(){
			$('#carouselExampleControls').carousel("prev");
		})
		$(".btn-next").on("click",function(){
			$('#carouselExampleControls').carousel("next");
		})
		$(".btn-prevg2").on("click",function(){
			$('#carouselExampleControlsg2').carousel("prev");
		})
		$(".btn-nextg2").on("click",function(){
			$('#carouselExampleControlsg2').carousel("next");
		})
		
	})
</script>	
<div class="modal" tabindex="-1" id="Galeria" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body cont-modalgalery">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end">
						<div class="col-2 text-right">
							<img src="<?= base_URL()?>assets/img/close.svg"  data-dismiss="modal" aria-label="Close" class="img-fluid iconos">
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-10">
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/112 Marques/112_SMarques-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/112 Marques/112_SMarques-2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/112 Marques/112_SMarques-3.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/112 Marques/112_SMarques-4.jpg" alt="First slide">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-5 text-right">
							<div class="btn btn-link btn-prev">
								<img src="<?= base_URL()?>assets/img/flecha_izquierda.svg" class="iconos4 ">
							</div>
							
						</div>
						<div class="col-5 text-left ">
							<div class="btn btn-link btn-next">
								<img src="<?= base_URL()?>assets/img/flecha_derecha-01.svg" class="iconos4 ">
							</div>
						</div>
					</div>
				</div>	
				<div class="container">
					<div class="row d-flex justify-content-center">							
						<div class="col-10 ray-blue m-t-30"></div>
						<div class="col-10 text-justify m-t-30 m-b-50 text-blue text-popup">
							<?
							if($Idioma==="es"){
								?>
Una personalidad clave en la historia de la conquista y evangelización de la Nueva España, fue el líder de los 12 apóstoles de México. Perteneciente a la orden Franciscana inició en el Convento de Mayorga en la Tierra de Campos. En 1523 el Padre General, Fray Francisco de los Ángeles le encomendó pasar con los doce compañeros a evangelizar el Nuevo mundo y el 25 de enero de 1524 llegaron a Puerto Rico y el 13 de mayo tocan tierras de San Juan de Ulúa en Veracruz. Emprendieron viaje hacia Tenochtitlán con la intención de llevar el cristianismo esta ciudad indígena. <p>Considerado como una de las máximas autoridades religiosas iniciales en México, ganó el afecto y admiración del pueblo indígena por quienes tuvo un especial aprecio. Por muchos considerado como el auténtico fundador de la Iglesia Católica de la Nueva España
								<?	
							}else{
								?>
								A key personality in the History of the conquest and evangelization of New Spain, he was the leader of the “Twelve Apostles” of Mexico. Belonging to the Franciscan order, he began at the Convent of Mayorga in Tierra de Campos. In 1523 the General Friar, Fray Francisco de los Angeles entrusted him with the twelve companions to evangelize the New World and on January 25, 1524 they arrived in Puerto Rico and on May 13 they touched lands of San Juan de Ulúa in Veracruz. 
<p>
They undertook a trip to Tenochtitlán with the intention of bringing Christianity to this indigenous city.Considered one of the leading religious authorities in Mexico, he won the affection and admiration of the indigenous people for whom he had a special appreciation. For many considered as the authentic founder of the Catholic Church of New Spain.

								<?	
							}?>

							

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
