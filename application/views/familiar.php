<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/mini-banner-suite-familiar.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center titulos-habitaciones">
			<? if($Idioma==="es"){
				?>
					<h2>Suite Familiar </h2>
				<?
			}else{
				?>
					<h2>Family Suite</h2>
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
					<img class="img-fluid" onclick="$('#Galeria').modal('toggle')" src="<?=base_URL()?>assets/img/107_SUITE_FAMILIAR.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<h4>Fray Antonio de Ciudada Rodrigo</h4>
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
					<img class="img-fluid" onclick="$('#Galeria2').modal('toggle')" src="<?=base_URL()?>assets/img/108_SUITE_FAMILIAR.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<h4>Fray Juan Suárez</h4>
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
					<img class="img-fluid" onclick="$('#Galeria3').modal('toggle')" src="<?=base_URL()?>assets/img/galeria/103 Familiar/p1.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<h4>Fray Juan De Rivas</h4>
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
					<img class="img-fluid" onclick="$('#Galeria4').modal('toggle')" src="<?=base_URL()?>assets/img/galeria/104 Familiar/p1.jpg" alt="">
				</div>
				<div class="col-9 text-center m-t-30 text-blue text-3">
					<h4>Fray Toribio De Benavente</h4>
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
			<img src="<?=base_URL()?>assets/img/ocupacion4.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-11 col-lg-11 col-xl-11 text-white text-2 m-t-50">
			<h4>Ocupación Máxima: 4 personas</h4>
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
					<li>Samart TV con Cable</li>
					<li>Chapa Electronica</li>
					<li>AC</li>
					<li>Télefono</li>
					<li>Wifi de alta velocidad</li>
					
				</ul>
			</h4>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-6 text-white text-2 lista-amenidades">
			<h4>
				<ul>
					
					
					<li>Armario Antigüo</li>
					<li>Suave ropa de cama</li>
					
					<li>Kit de Baño</li>
					<li>Secadora de Cabello</li>
					<li>Regadera de presión ajustable</li>
					
					<li>Espejo de gran tamaño</li>
				</ul>
			</h4>
		</div>
		<div class="col-2 col-md-1 col-lg-1 col-xl-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/mas.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-9 col-md-6 col-lg-6 col-xl-6 text-white text-2 lista-amenidades">
			<h4>
				<ul>
					<li>Máquina de Cáfe Premium</li>
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
			<h2>Family Suite Characteristics</h2>
		</div>
		<div class="col-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="container bgazul">
	<div class="row d-flex align-items-start p-l-70 p-r-70 p-t-50 p-b-50">
		<div class="col-1 text-center m-t-50">
			<img src="<?=base_URL()?>assets/img/ocupacion4.svg" class="img-fluid iconos4" alt="">
		</div>
		<div class="col-11 text-white text-2 m-t-50">
			<h4>Maximum Occupancy: 4 people</h4>
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
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/107 SFamiliar/107-sfamiliar-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/107 SFamiliar/107-sfamiliar-2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/107 SFamiliar/107-sfamiliar-3.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/107 SFamiliar/107-sfamiliar-4.jpg" alt="First slide">
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
							Misionero franciscano originario de la region de Salamanca en España. Parte del grupo de los “doce apóstoles” de México que arrivaron en 1524. Fue el segundo superior de la provincia del Santo Evangelio y guardián del Convento de México. Al igual que Fray Francisco de Soto, regresó a España en abogacía de los derechos de los indígenas ante el Rey Carlos I, sobre todo por la libertad de algunos escavos. Volvió de España en el año de 1529 trayendo un grupo de 20 religiosos de la misma orden franciscana. El muere en el convento de San Francisco de México en 1553.
							<?
							}else{
							?>
Franciscan missionary from the region of Salamanca in Spain. Part of the
group of the &quot;twelve apostles&quot; of Mexico who arrived in 1524. He was the
second superior of the province of the Holy Gospel and guardian of the
Convent of Mexico. Like Fray Francisco de Soto, he returned to Spain in
defense of the rights of the indigenous people before King Carlos I, especially
for the freedom of some escavos. He returned from Spain in the year 1529
bringing a group of 20 religious of the same Franciscan order. He dies in the
convent of San Francisco de México in 1553.
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
							<div id="carouselExampleControlsg2" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/108 SFamiliar/108_SFamiliar-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/108 SFamiliar/108_SFamiliar-2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/108 SFamiliar/108_SFamiliar-3.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/108 SFamiliar/108_SFamiliar-4.jpg" alt="First slide">
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
							<? if($Idioma==="es"){
							?>
							Misionero Español que viene de la provincia de San Gsabriel, es el cuarto en número de los doce primeros apóstólicos de la Nueva España. Una vez llegando a la ciudad de México, Fray Juan fue electo como primer guardián del convento de Huexotzingo, do 
nde dejó memoria entre los indígenas de mucha religión y santidad. Una vez evangelizada la zona, el capitán Pánfilo de Narváez iba a conquistar la Florida y por el celo de la conversión de aquella gente, fue en su compañía fray Juan Sárez, llevando por su compañero a fray Juan de Palos, y alló muriero ambos de hambre. 
 <?
							}else{
							?>
Spanish Missionary coming from the province of San Gsabriel, is the fourth in
number of the first twelve apostles of New Spain. Once arriving in Mexico
City, Fray Juan was elected as the first guardian of the convent of
Huexotzingo, where he left a memory among the natives of much religion
and sanctity. Once the area was evangelized, Captain Pánfilo de Narváez was
going to conquer Florida and because of the zeal of the conversion of those
people, it was in his company Brother Juan Sárez, taking Brother Juan de
Palos as his companion, and there he died. hungry.
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

<div class="modal" tabindex="-1" id="Galeria3" role="dialog">
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
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/103 Familiar/103-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/103 Familiar/103-2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/103 Familiar/103-3.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/103 Familiar/103-4.jpg" alt="First slide">
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
							<? if($Idioma==="es"){
							?>
							Noveno de los “doce apóstoles”, grupo de franciscanos que llegó a México en 1524, originario franciscano de la provincia de San Gabriel, llegando a la Nueva España su tarea fue crear y ser guardián del convento de Tlaxcala, ayudador de los indígenas, defendiendo los derechos y la situación de pobreza y esclavitud. Fue grande predicador de los indios en su lengua mexicana, mostrando en los sermones el deseo de la salvación de sus almas. El 25 de Junio de 1562 muere en su sano juicio y alabando el santísmo nombre de Jesús, puesto de rodillas en la tierra y de pechos sobre su cama. Su sepulcro se encuentra en el mismo convento de Texcoco. Logra escribir algunos escritos en la lengua nativa mexicana como “Doctrina cristiana o catecismo” “Sermones dominicales de todo el año” Flos Sanctorum traducido en la lengua” y “Preguntas y respuestas cerca de la vida cristiana” 
							<?
							}else{
							?>
Ninth of the &quot;twelve apostles&quot;, a group of Franciscans who arrived in Mexico
in 1524, originally a Franciscan from the province of San Gabriel, arriving in
New Spain. His task was to create and be the guardian of the convent of
Tlaxcala, a helper of the natives, defending the rights and the situation of
poverty and slavery. He was a great preacher of the Indians in his Mexican
language, showing in the sermons the desire for the salvation of their souls.
On June 25, 1562 he dies in his right mind and praises the holy name of Jesus,
kneeling on the earth and breasts on his bed. His tomb is in the same convent
of Texcoco. He manages to write some writings in the native Mexican
language as &quot;Christian doctrine or catechism&quot; &quot;Sunday sermons throughout
the year&quot; Flos Sanctorum translated into the language &quot;and&quot; Questions and
answers close to the Christian life &quot;.
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
<div class="modal" tabindex="-1" id="Galeria4" role="dialog">
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
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/104 Familiar/104-1.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/104 Familiar/104-2.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/104 Familiar/104-3.jpg" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?= base_URL()?>assets/img/galeria/104 Familiar/104-4.jpg" alt="First slide">
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
							<? if($Idioma==="es"){
							?>
							Nació en Zamora, España, ingresó a la orde franciscana a los 17 años y viaja a México en el grupo de los “doce apostoles” de la Nueva españa  en el año de 1524. 
							<br>
							 De 1527 a 1529 vive en Guatemala estudiando la fundación de las misiones y posteriormente regresa al convento de Huexotzingo, amparando a los indios contra los abusos de Nuño de Guzmán  y es acusado por intentar la independeica de Nueva España, en forma de Estado indígena. En 1530, pasa al convento de Tlaxcala y contribuye a la fundación de la Ciudad de Puebla de los Ángeles en 1531. En 1555 escribe una carta célebre al emperador contra Las Casas en defensa de la Conquista. Residió los ultimos años de su vida en la capita donde fallece en 1565.

							 <?
							}else{
							?>
Born in Zamora, Spain, he joined the Franciscan Order at age 17 and traveled
to Mexico in the group of the &quot;twelve apostles&quot; of New Spain in the year
1524. From 1527 to 1529 he lives in Guatemala studying the foundation of
the missions and later returns to the convent of Huexotzingo, sheltering the
Indians against the abuses of Nuño de Guzmán and is accused of attempting
the independence of New Spain, in the form of an indigenous State. In 1530,
he passed to the convent of Tlaxcala and contributed to the founding of the
City of Puebla de los Ángeles in 1531. In 1555 he wrote a famous letter to the
emperor against Las Casas in defense of the Conquest. He lived the last years
of his life in the capital where he died in 1565.
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