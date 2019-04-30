<div class="botton_fijo">
<span><a href="<?= base_url('reservacion/').$Idioma?>" class="btn btn-secondary text-2 text-uppercase">
							<small><?= ($Idioma==='es')?'¡Reserva<br><strong>Aqui</strong> !' : 'Reserve <br><strong>Here</strong>' ?></small>
	</a></span>
</div>
<div class="container-fluid banner-sup">
	<div class="row">
		<img src="<?= base_URL()?>assets/img/mini-banner-clasica.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center titulos-habitaciones">
			<h2><?= $textsuite->Titulo ?></h2>
		</div>
		<div class="col-8 col-md-3 col-lg-3 col-xl-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="container">
	<div class="row m-t-60">
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 m-t-50">
			<div class="row d-flex justify-content-center">
				<div class="col-9">
					<img class="img-fluid" onclick="$('#Galeria').modal('toggle')" src="<?=base_URL()?>assets/img/CLASICA-francisco-jimenez.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<h4>Fray Juan de Palos</h4>
				</div>
				<div class="col-9 text-center m-t-30">
					<div class="btn btn-secondary text-2">
						<a href="<?=base_URL('/reservacion/').$Idioma?>" class="text-white"><small  class="text-uppercase"><?= $textohead->T2?></small></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 m-t-50">
			<div class="row d-flex justify-content-center">
				<div class="col-9">
					<img class="img-fluid" onclick="$('#Galeria2').modal('toggle')" src="<?=base_URL()?>assets/img/galeria/105 Clasica/p1.jpg" alt="">
				</div>
				<div class="col-9 m-t-30 text-center text-blue text-3">
					<h4>Fray Francisco Jiménez </h4>
				</div>
				<div class="col-9 m-t-30 text-center">
					<div class="btn btn-secondary text-2 ">
						<a href="<?=base_URL('/reservacion/').$Idioma?>" class="text-white"><small class="text-uppercase"><?= $textohead->T2?></small></a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div><?
if($Idioma==="es"){
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
	<div class="row d-flex align-items-start  cuadro-central">
		<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/ocupacion2.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11 text-white text-2 m-t-50">
			<h4>Máxima ocupación para dos personas</h4>
		</div>
		<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/cama.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11 text-white text-2 m-t-50">
			<h4>Cama Matrimonial y Queen Size (Suejeto a disponibilidad)</h4>
		</div>
		<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/desayuno.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11  text-white text-2 m-t-50">
			<h4>Desayuno Americano Incluido</h4>
		</div>
		<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/room-service.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11  text-white text-2 m-t-50">
			<h4>Room Service hasta las 22:00 Hrs</h4>
		</div>
		<div class="col-0 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/room-service1.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-12 col-md-5 col-lg-5 col-xl-5 text-white lista-amenidades text-2">
			<h4>
				<ul>
					
					<li>Caja de Seguridad</li>
					<li>Smart TV con Cable</li>
					<li>Chapa Electrónica</li>
					<li>AC</li>
					<li>Teléfono</li>
					<li>Wifi de alta velocidad</li>
					
					
				</ul>
			</h4>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 text-white lista-amenidades text-2 ">
			<h4>
				<ul>
					<li>Armario Antiguo</li>
					<li>Suave ropa de cama</li>
					<li>Secadora de Cabello</li>
					<li>Regadera de presión ajustable</li>
					
					<li>Espejo de gran tamaño</li>
				</ul>
			</h4>
		</div>
		<div class="col-2 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/mas.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-6 col-lg-6 col-xl-6 text-white  lista-amenidades text-2">
			<h4>
				<ul>
					<li>Máquina de Café Premium</li>
					<li>Selección de amenidades CAVA</li>
					<li>Bebidas</li>
					<li>Baño</li>
					<li>Kit de Baño</li>
					<li>Secadora de Cabello</li>
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
			<h2>Classic Room Characteristics</h2>
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
			<h4>Maximum occupancy for two people</h4>
		</div>
		<div class="col-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/cama.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-11 text-white text-2 m-t-50">
			<h4>Matrimonial and Queen Size Bed (Subject to availability)</h4>
		</div>
		<div class="col-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/desayuno.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-11 text-white text-2 m-t-50">
			<h4>American Breakfast Included</h4>
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
					<li>Samart TV with Cable</li>
					<li>Electronic plate</li>
					<li>AC</li>
					<li>Telephone</li>
					<li>High speed Wifi</li>
					
					
				</ul>
			</h4>
		</div>
		<div class="col-6 text-white text-2 p-l-30 m-t-50">
			<h4>
				<ul>
					<li>Antique Wardrobe</li>
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
					<li>Drinks</li>
					<li>Bathroom</li>
					<li>Bathroom Kit</li>
					<li>Hairdryer</li>
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
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/106 H Clasica/106-hclasica-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/106 H Clasica/106-hclasica-2.jpg" alt="First slide">
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
							<?= $textsuite->Nombre1 ?>
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="modal" tabindex="-1" id="Galeria2" role="dialog">
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
							<div id="carouselExampleControlsg2" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/105 Clasica/105-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/105 Clasica/105-2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/105 Clasica/105-3.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/105 Clasica/105-4.jpg" alt="First slide">
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-5 text-right">
							<div class="btn btn-link btn-prevg2">
								<img src="<?= base_URL()?>assets/img/flecha_izquierda.svg" class="iconos4 ">
							</div>
							
						</div>
						<div class="col-5 text-left ">
							<div class="btn btn-link btn-nextg2">
								<img src="<?= base_URL()?>assets/img/flecha_derecha-01.svg" class="iconos4 ">
							</div>
						</div>
					</div>
				</div>	
				<div class="container">
					<div class="row d-flex justify-content-center">							
						<div class="col-10 ray-blue m-t-30"></div>
						<div class="col-10 text-justify m-t-30 m-b-50 text-blue text-popup">
						<?= $textsuite->Nombre2 ?>  
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
