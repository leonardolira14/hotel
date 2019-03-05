<?

$habitaciones=$resultados->hotelogix->response->hotels[0]->roomtypes;

$fecha1 = new DateTime($resultados->hotelogix->request->data->stay->checkindate);
$fecha2 = new DateTime($resultados->hotelogix->request->data->stay->checkoutdate);
$resultado = $fecha1->diff($fecha2);
$noches=(int)$resultado->format('%R%a');
?>
<div class="container-fluid fondo-reservaciones">
	<div class="container menu-resevaciones p-t-70">
		<div class="row">
			<div class="col-12 col-md-2 col-xl-2 col-lg-2 text-center m-t-20"><a href="<?= base_URL('reservacion/').$idioma?>">1.-<?=($Idioma==='es')?'Fecha de estadía':'Stay Date'?></a></div>
			<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a class="active" href="#">2.-<?=($Idioma==='es')?'Seleccionar habitación':'Select Room'?></a></div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 text-center m-t-20"><a href="<?= base_URL('detallesreserva/').$idioma?>">3.-<?=($Idioma==='es')?'Detalles/agregar otras habitaciones':'Check Details/Add More Rooms'?></a></div>
			<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a href="<?= base_URL('confirmarreservacion/').$idioma?>">4.-<?=($Idioma==='es')?'Confirmar reservación':'Confirm Reservation'?></a></div>
			<div class="col-12 text-center m-t-40">
				<h2 class="text-white text-2 text-uppercase"><?= ($Idioma==="es")?'Seleccione Habitaciones / Paquetes':'Select Rooms/Packages'?></h2>	
			</div>
			<div class="col-12 ray-dor "></div>
			<div class=" col-11 col-md-8 col-xl-8 col-lg-8 text-2 m-t-30 text-white">
				<?=($Idioma==="es")?'Número de personas: Adultos':'Number of Person(s): Adults' ?>
				= <?= $resultados->hotelogix->request->data->pax->adult ?>,<?=($Idioma==="es")?' Niños':' Children' ?>  = <?= $resultados->hotelogix->request->data->pax->infant?>
			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 s text-2 m-t-30 text-white">
				<?=($Idioma==="es")?'Convertidor de Divisas':'Currency Converter'?>
				:  <select name="" class="divisa"  id=""><option value="">MXN</option><option value="">USD</option></select>
			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 text-2 m-t-30 text-white">
				<h5 class="text-2"><?=($Idioma==="es")?'LLEGADA':'ARRIVAL'?> : <?= $checkin?></h5>
			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 text-2 m-t-30 text-white">
				<h5 class="text-2"><?=($Idioma==="es")?'SALIDA':'DAPARTURE'?>: <?= $checkout?></h5>
				
			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4  text-2 m-t-30 text-white m-b-40">
				<a href="<?= base_URL('newreservacion/').$idioma?>"><?=($Idioma==="es")?'Nueva Búsqued':'New Search'?></a>
			</div>
			<?
			foreach ($habitaciones as $habitacion) {
					if($habitacion->rates!==""){

				?>
				<div class="col-12 bg-white p-t-30 p-r-30 p-l-30 p-b-30 m-b-20">
					<div class="row">
						<div class="col-12 col-md-4 col-xl-4 col-lg-4 ">
							<img src="<?= $habitacion->imgs[0]->src ?>" class="img-fluid" alt="">
						</div>
						<div class="col-12 col-md-8 col-xl-8 col-lg-8 m-t-10 ">
							<div class="row">
								<div class="col-12 ">
									<h3 class="text-golden text-2"><?= $habitacion->title ?></h3>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-6">
											<div class="row">
												<div class="col-2">
													<img src="<?= base_URL('assets/img/cama.svg')?>" class='img-fluid' alt="">
												</div>
												<div class="col-10 text-blue text-2">
													<strong><?=($Idioma==='es')?'Base de Ocupación':'Base Occupancy'?>: <?= $habitacion->basepax?> Personas</strong>
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="row">
												<div class="col-2">
													<img src="<?= base_URL('assets/img/cama.svg')?>" class='img-fluid' alt="">
												</div>
												<div class="col-10 text-blue text-2">
													<strong><?=($Idioma==='es')?'Ocupación Maxima':'Maximum Occupancy'?>: <?= $habitacion->maxpax?> Personas</strong>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 m-t-20">
									<strong class="text-golden text-2"><?=($Idioma==='es')?'Minimo de Habitaciones':'Minimum Room(s)'?>:</strong><?= $habitacion->minrooms?>
								</div>
								<div class="col-12">
									<strong class="text-golden text-2"><?=($Idioma==='es')?'Comodidades':'Amenities'?>:</strong>
									<strong class="text-blue text-2">


										<? 
										if($habitacion->amenities !==""){
											foreach ($habitacion->amenities as $key ) {
												echo $key->title.",";
												}
										
										}
										?>
									</strong>
								</div>
								<div class="col-12 m-t-20">
									<strong class="text-golden text-2"><?=($Idioma==='es')?'Precio':'Price'?>: </strong>
									<strong class="text-blue text-2" >$ <?= round($habitacion->minRate)?></strong>
								</div>
								<div class="col-12">
									<strong class="text-blue text-2" >(<?=($Idioma==='es')?'precio promedio por noche':'Avg Per Night'?> $ <?
										$promedio=(float)$habitacion->minRate/$noches ;
										echo round($promedio);
										?>)</strong>
									</div>
									<div class="col-12 m-t-20">
										<strong class="text-golden text-2" llk="<?= $habitacion->key ?>" llc="detalles_habitacion" ><?=($Idioma==='es')?'Ver mas detalles':'More Details'?></strong>
									</div>
									<div class="col-12 m-t-30 text-center">
										<button llc="addcart" idioma="<?=$idioma?>" lli="<?= $habitacion->rates[0]->id?>" class="btn btn-secondary"><?=($Idioma==='es')?'Seleccionar':'Select'?></button>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<?
				}
				}
				?>
			</div>
		</div>
	</div>
	<? foreach ($habitaciones as $habitacion) {

		?>
		<div id="<?= $habitacion->key ?>" class="izimodal" data-icon="fa fa-exclamation-triangle" data-header-color='rgb(206,159,81)' data-title="<?= $habitacion->title ?>" data-width="1000"  data-bar="rgb(206,159,81)">
			<div class="container">
				<div class="row">
					<div class="col-4 m-t-30">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<?
								$i=0;
								foreach ($habitacion->imgs as $foto) {
									if($i==0){
										?>
										<div class="carousel-item active">
											<img class="d-block w-100" src="<?=$foto->src ?>" alt="<?= $habitacion->title ?>">
										</div>
										<?

									}else{
										?>
										<div class="carousel-item ">
											<img class="d-block w-100" src="<?=$foto->src ?>" alt="<?= $habitacion->title ?>">
										</div>
										<?
									}
									$i++;
								}
								?>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-8 m-t-30">
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="col-6">
										<div class="row">
											<div class="col-2">
												<img src="<?= base_URL('assets/img/cama.svg')?>" class='img-fluid' alt="">
											</div>
											<div class="col-10 text-blue text-2">
												<strong><?=($Idioma==='es')?'Base de Ocupación':'Base Occupancy'?>: <?= $habitacion->basepax?> Personas</strong>
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="row">
											<div class="col-2">
												<img src="<?= base_URL('assets/img/cama.svg')?>" class='img-fluid' alt="">
											</div>
											<div class="col-10 text-blue text-2">
												<strong><?=($Idioma==='es')?'Ocupación Maxima':'Maximum Occupancy'?>: <?= $habitacion->maxpax?> Personas</strong>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 m-t-20">
									<strong class="text-golden text-2"><?=($Idioma==='es')?'Precio':'Price'?>: </strong>
									<strong class="text-blue text-2" >$ <?= round($habitacion->minRate)?></strong>
								</div>
							<div class="col-12">
								<strong class="text-blue text-2" >(<?=($Idioma==='es')?'precio promedio por noche':'Avg Per Night'?> $ <?
									$promedio=(float)$habitacion->minRate/$noches ;
									echo round($promedio);
									?>)</strong>
							</div>
							<div class="col-12 m-t-30 m-t-30 text-center">
								
									<button llc="addcart" lli="<?= $habitacion->id?>" class="btn btn-secondary"><?=($Idioma==='es')?'Seleccionar':'Select'?></button>
								
							</div>
							</div>
						</div>
						<div class="col-12">
							<strong><h5 class="text-2 text-blue f-700"><?=($Idioma==='es')?'Política de reservas':'Reservation Policy'?>:</h5></strong>
						</div>
						<div class="col-12">
							<strong><small  class="text-2 text-muted "><?=($Idioma==='es')?'Requiere garantía de tarjeta de crédito':'Requires credit card guarantee'?>.</strong></small>
						</div>
						<div class="col-12 m-t-20 ">
							<strong><h5 class="text-2 text-blue f-700"><?=($Idioma==='es')?'Política de Cancelación':'
Cancellation Policy'?>:</h5></strong>
						</div>
						<div class="col-12 text-2 text-justify text-muted">
							<?
								if($Idioma==='es'){
									?>

								<small>
								<p>1. En caso de no realizarse el pago al momento del check in del huésped o abrir boucher de crédito, será interpretado como una falta de presentación del huésped y dará al cargo por “No Show”, así mismo se procederá a cancelar la reservación.</p>
								<p>
   								2 .	Para las reservas realizadas el mismo día de la estancia no aplicarán cambios ni cancelaciones, por lo que se hará el cargo de “No Show” que corresponde al cobro por el monto de una noche más impuestos por cada habitación a la tarjeta de crédito con la que se garantizó la reservación (en lo sucesivo, el cargo de “No Show”) en caso de no presentarse o cancelar.
   								</p>
   								<p>
  								 3 .	Independientemente de las noches reservadas, de no realizarse el cambio o cancelación en el tiempo y forma mencionada, o en caso de no presentarse el Huésped en la fecha de entrada, se hará el cargo de “No Show”, solo por la primera noche de habitación (es) reservada (as) más impuestos a la tarjeta de crédito con la que se garantizó la reservación. El resto de la estancia se cancelará automáticamente.
  								</p>
  								<?
								}else{
									?>
								<p>1. In case of not making the payment at the moment of the guest's check in or opening a credit boucher, it will be interpreted as a lack of presentation of the guest and will give the charge for "No Show", likewise proceed to cancel the reservation.</p>
								<p>
   								2 .	For reservations made on the day of the stay, no changes or cancellations will be applied, so the "No Show" charge will be charged corresponding to the one night plus tax for each room charged to the credit card with the same amount. that the reservation was guaranteed (hereinafter, the "No Show" charge) in case of no-show or cancellation.
   								</p>
   								<p>
  								 3 . Independently of the reserved nights, if the change or cancellation is not made in the aforementioned time and manner, or in the event of not presenting the Guest on the date of entry, the "No Show" charge will be made, only for the first night of room (s) reserved (as) plus taxes to the credit card with which the reservation was guaranteed. The rest of the stay will be canceled automatically.
  								</p>

									<?
								}
							?>
  								</small>
						</div>
					</div>
				</div>
			</div>
			<?
		}
		?>
