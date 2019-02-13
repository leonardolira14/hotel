<?
//vdebug($cart->hotelogix->response->hotels[0]->bookings[0]->roomtypes[0]->stay);
$habitaciones=false;
$iva=0;
$total=0;
if(count($cart->hotelogix->response->hotels)!==0){
	$habitaciones=$cart->hotelogix->response->hotels[0]->bookings;
	$checkin=$cart->hotelogix->response->hotels[0]->bookings[0]->checkindate;
	$checkout=$cart->hotelogix->response->hotels[0]->bookings[0]->checkoutdate;
	$fecha1 = new DateTime($checkin);
	$fecha2 = new DateTime($checkout);
	$resultado = $fecha1->diff($fecha2);
	$noches=(int)$resultado->format('%R%a');
	foreach ($habitaciones as $habitacion) {
		$total+=(float)$habitacion->rates[0]->price;
		$iva+=(float)$habitacion->rates[0]->tax;
	}
	
}


?>
<div class="container-fluid fondo-reservaciones">
	<div class="container menu-resevaciones p-t-70">
		<div class="row">
			<div class="col-2 text-center"><a href="<?= base_URL('/').$idioma?>">1.-Fecha de estadia</a></div>
			<div class="col-3 text-center"><a class=""  href="<?= base_URL('listroom/'.$Idioma)?>">2.-Seleccionar habitación</a></div>
			<div class="col-4 text-center"><a class="active" href="<?= base_URL('detallesreserva/').$idioma?>">3.-Detalles/agregar otras habitaciones</a></div>
			<div class="col-3 text-center"><a href="<?= base_URL('confirmarreservacion/').$idioma?>">4.-Confirmar reservación</a></div>
			<div class="col-12 text-center m-t-40">
				<h2 class="text-white text-2 text-uppercase">Detalles de la Reserva</h2>	
			</div>
			<div class="col-12 ray-dor "></div>
			<div class="col-6 text-2 m-t-30 text-white">
				Convertidor de Divisas:  <select name=""  class="divisa" id=""><option value="">MXN</option><option value="">USD</option></select>
			</div>
			
			<div class="col-6 text-2 m-t-30 text-white m-b-40 text-right">
				<a href="<?= base_URL('newreservacion/').$idioma?>">Nueva Busqueda</a>
			</div>
			<div class="col-4 text-2 m-t-30 text-right text-white m-b-40">
				<h5 class="text-2">Monto Total: $ <?= number_format($total,2)?></h5>
			</div>
			<div class="col-4 text-2 m-t-30 text-right text-white m-b-40">
				<h5 class="text-2">Impuestos: $ <?= number_format($iva,2)?></h5>
			</div>
			<div class="col-4 text-2 m-t-30 text-right text-white m-b-40">
				<h5 class="text-2">Total (con impuestos): $ <?= number_format((float)$iva+(float)$total,2)?></h5>
			</div>
				<?
				if($habitaciones!=false){

				
			foreach ($habitaciones as $habitacion) {
				$roomtype = $habitacion->roomtypes[0];
				
				?>
				<div class="col-12 bg-white p-t-30 p-r-30 p-l-30 p-b-30 m-b-20">
					<div class="row">
						<div class="col-4">
							<img src="<?= $roomtype->imgs[0]->src ?>" class="img-fluid" alt="">
						</div>
						<div class="col-8">
							<div class="row">
								<div class="col-12 ">
									<h3 class="text-golden text-2"><?= $roomtype->title ?></h3>
								</div>
								<div class="col-12">
									<div class="row">
										<div class="col-6">
											<div class="row">
												<div class="col-2">
													<img src="<?= base_URL('assets/img/cama.svg')?>" class='img-fluid' alt="">
												</div>
												<div class="col-10 text-blue text-2">
													<strong>Base de Ocupación: <?= $roomtype->basepax?> Personas</strong>
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="row">
												<div class="col-2">
													<img src="<?= base_URL('assets/img/cama.svg')?>" class='img-fluid' alt="">
												</div>
												<div class="col-10 text-blue text-2">
													<strong>Ocupación Maxima: <?= $roomtype->maxpax?> Personas</strong>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 m-t-20">
									<strong class="text-golden text-2">Fecha Entrada:</strong><span class=" text-blue text-2"><?= $roomtype->stay->checkindate?></span>
								</div>
								<div class="col-12 m-t-20">
									<strong class="text-golden text-2">Fecha Salida:</strong><span class=" text-blue text-2"><?= $roomtype->stay->checkoutdate?></span>
								</div>
								<div class="col-12 m-t-20">
									<strong class="text-golden text-2">Minimo de Habitaciones:</strong><?= $roomtype->minrooms?>
								</div>
								<div class="col-12">
									<strong class="text-golden text-2">Comodidades:</strong>
									<strong class="text-blue text-2">


										<? 
										if($roomtype->amenities!==""){
											foreach ($roomtype->amenities as $key ) {
												echo $key->title.",";
											}
										}
											
										?>
									</strong>
								</div>
								<div class="col-12 m-t-30 text-center">
										<button llc="deleteroom" lli="<?= $habitacion->id?>" class="btn btn-secondary">Descartar Habitación</button>
									</div>	
									
								</div>
							</div>
						</div>
					</div>
					<?
				}
				}
				?>
				<div class="col-12 m-b-40 m-t-40">
					<div class="row">
						<div class="col-6 text-left ">
							<a class="btn btn-secondary" href="<?= base_URL('listroom/'.$Idioma)?>">
								Agregar Habitacón
							</a>
						</div>
						<div class="col-6 text-right">
							<a href="<?= base_URL('confirmarreservacion/').$idioma?>"  class="btn btn-secondary " <?= ($habitaciones==false)?'disabled':'' ?>>
								Siguiente
							</a>
						</div>
					</div>
				</div>
				
				
		</div>
	</div>
</div>

