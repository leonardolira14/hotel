<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/mini-banner-suite-imperial.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center titulos-habitaciones">
			<? if($Idioma==="es"){
				?>
				<h2>Suite Imperial</h2>
				<?
			}else{
				?>
				<h2>Imperial Suite</h2>
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
					<img class="img-fluid" onclick="$('#Galeria2').modal('toggle')" src="<?=base_URL()?>assets/img/galeria/102 S Imperial/102PORTADA.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<h4>Fray Francisco de Soto</h4>
				</div>
				<div class="col-9 text-center m-t-30">
					<div class="btn btn-secondary text-2">
						<small class="text-uppercase"><?= $textohead->T2?></small>
					</div>
				</div>
			</div>
		</div>		
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 m-t-50">
			<div class="row d-flex justify-content-center">
				<div class="col-9">
					<img class="img-fluid" onclick="$('#Galeria').modal('toggle')" src="<?=base_URL()?>assets/img/109_SUITE_IMPERIAL.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<h4>Fray García de Cisneros</h4>
				</div>
				<div class="col-9 text-center m-t-30">
					<div class="btn btn-secondary text-2">
						<small class="text-uppercase"><?= $textohead->T2?></small>
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
				<h4>Ocupación 2 personas y 1 niño</h4>
			</div>
			<div class="col-3 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
				<img src="<?=base_URL()?>assets/img/cama.svg" class="img-fluid iconos4" alt="">
			</div>
			<div class="col-9 col-md-11 col-lg-11 col-xl-11 text-white text-2 m-t-50">
				<h4>Equipada con dos camas Queen Size y King Size (Sujeto a disponibilidad)</h4>
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
			<div class="col-9 col-md-6 col-lg-6 col-xl-6 text-white text-2 lista-amenidades">
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
				<h2>Imperial Suite Characteristics</h2>
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
				<h4>Occupation 2 people and 1 child</h4>
			</div>
			<div class="col-1 text-center m-t-50">
				<img src="<?=base_URL()?>assets/img/cama.svg" class="img-fluid iconos4" alt="">
			</div>
			<div class="col-11 text-white text-2 m-t-50">
				<h4>Equipped with two Queen Size and King Size beds (Subject to availability)</h4>
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
						<li>Came from home</li>
						<li>Hairdryer</li>
						<li>Bathrobes</li>
						<li>Bathroom</li>
						<li>Bathroom Kit</li>
						<li>Comfortable pantyhose</li>
						<li>Hairdryer</li>
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
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/109 S Imperial/109_SImperial-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/109 S Imperial/109_SImperial-2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/109 S Imperial/109_SImperial-3.jpg" alt="First slide">
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
							<? if($Idioma==="es"){
							?>
							Religioso franciscano que llegó a México con el grupo de los “doce apóstoles” que desembarcaron en San Juan de Ulúa Veracruz el 13 de Mayo de 1524, liderados por Fray Martín de Valencia. Gran parte de su trabajo en la Nueva España fue dedicado a los indígenas por quienes se preocupaba para que no les faltase la evangelización. Fue fundador del Colegio de la Santa Cruz, donde se les enseñaba a los indígenas, además de la religión y buenas costumbres, retórica, filosofía, música y medicina mexicana. En 1531 cooperó con la fundación de Puebla de los Ángeles en 1531 junto con Fray Toribio de Benavente y ambos pusieron el nombre de los Ángeles. En 1536 con deseos de regresar a Castilla para rendir cuentas al Emperador con las necesidades indígenas, enfermó gravemente y murió.
						<? }else{
							?>
Religious granciscano who arrived in Mexico with the group of &quot;twelve
apostles&quot; who disembarked in San Juan de Ulúa Veracruz on May 13, 1524,
led by Fray Martín de Valencia. Much of his work in New Spain was dedicated
to the indigenous people who he cared about so that evangelization would
not be lacking. He was founder of the College of the Holy Cross, where they
were taught to the indigenous
as well as religion and good customs, rhetoric, philosophy, music and
Mexican medicine. In 1531 he cooperated with the foundation of Puebla de
los Ángeles in 1531 together with Fray Toribio de Benavente and both named
after the Angels. In 1536 with desire to return to Castile to render an account
to the Emperor with the Indian needs, he became seriously ill and died.
							<? 
						}
							?>
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
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/102 S Imperial/102_SImperial-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/102 S Imperial/102_SImperial-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/102 S Imperial/102_SImperial-1.jpg" alt="First slide">
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
							<? if($Idioma==="es"){
							?>
							El segundo de los doce apóstoles que llegaron a la Nueva España en 1524, arribó a México siendo ya de una avanzada edad por lo que se le dificulto aprender las lenguas indígenas. Participó principalmente en la fundación de la provincia del Santo Evangelio el cual ocupó cargo varias veces de definidor provincial. Recorrió la provincia a pie y descalzo llevando el evangelio de cristo a indígenas y a españoles. Defensor de los indígenas y sus tierras del abuso de los propios conquistadores. En 1546 regresó a España para gestionar asuntos a favor de la defensa de los indígenas, prometió regresar a los indígenas y en 1550 llega nuevamente a México. En 1551 fallece en la ciudad de México.
							<? }else{
							?>
							The second of the twelve apostles who arrived in New Spain in 1524, arrived
in Mexico at an advanced age, making it difficult to learn the indigenous
languages. He participated mainly in the founding of the province of the Holy
Gospel, which held several positions as Provincial Definitor. He traveled the
province on foot and barefoot, taking the gospel of Christ to Indians and
Spaniards. Defender of the Indians and their lands from the abuse of the
conquerors themselves. In 1546 he returned to Spain to manage matters in

favor of the defense of the Indians, promised to return to the Indians, and in
1550 he returned to Mexico. In 1551 he died in Mexico City.
							<? 
							}
							?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
