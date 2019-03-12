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
			<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a  href="<?= base_URL('/reservacion/').$idioma?>">1.-<?=($idioma==='es')?'Fecha de estadía':'Reservation Details'?></a></div>
			
			<div class=" col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a class=""  href="<?= base_URL('listroom/'.$Idioma)?>">2.-<?=($Idioma==='es')?'Seleccionar habitación':'Select a Room'?></a></div>
			<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a class="active"  href="<?= base_URL('detallesreserva/').$Idioma?>">3.-<?=($Idioma==='es')?'Detalles/agregar otras habitaciones':'Check Details/Add More Rooms'?></a></div>
			<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a  href="<?= base_URL('confirmarreservacion/').$Idioma?>">4.-<?=($Idioma==='es')?'Confirmar reservación':'Confirm Reservation'?></a></div>
			<div class="col-12 text-center m-t-40">
				<h2 class="text-white text-2 text-uppercase"><?= ($Idioma==="es")?'Detalles de la Reserva':'Reservation Detail'?></h2>	
			</div>
			<div class="col-12 ray-dor "></div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 text text-2 m-t-30 text-white">
				<?=($Idioma==="es")?'Convertidor de Divisas':'Currency Converter'?>
				:  <select name="" class="divisa"  id=""><option value="">MXN</option><option value="">USD</option></select>
			</div>
			
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 text-right text-2 m-t-30 text-white m-b-40">
				<a href="<?= base_URL('newreservacion/').$idioma?>"><?=($Idioma==="es")?'Nueva Búsqued':'New Search'?></a>
			</div>
			<div class="col-4 text-2 m-t-30 text-right text-white m-b-40">
				<h5 class="text-2"><?=($Idioma==="es")?'Monto Total':'Total Amount'?>: $ <?= number_format($total,2)?></h5>
			</div>
			<div class="col-4 text-2 m-t-30 text-right text-white m-b-40">
				<h5 class="text-2"><?=($Idioma==="es")?'Impuestos':'Total Tax(es)'?>: $ <?= number_format($iva,2)?></h5>
			</div>
			<div class="col-4 text-2 m-t-30 text-right text-white m-b-40">
				<h5 class="text-2"><?=($Idioma==="es")?'Total (con impuestos)':'Total Amount (with Tax)'?>: $ <?= number_format((float)$iva+(float)$total,2)?></h5>
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
													<strong><?=($Idioma==='es')?'Base de Ocupación':'Base Occupancy'?>: <?= $roomtype->basepax?> <?=($Idioma==='es')?'Personas':'Person(s)'?></strong>
												</div>
											</div>
										</div>
										<div class="col-6">
											<div class="row">
												<div class="col-2">
													<img src="<?= base_URL('assets/img/cama.svg')?>" class='img-fluid' alt="">
												</div>
												<div class="col-10 text-blue text-2">
													<strong><?=($Idioma==='es')?'Ocupación Maxima':'Maximum Occupancy'?>: <?= $roomtype->maxpax?> <?=($Idioma==='es')?'Personas':'Person(s)'?></strong>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 m-t-20">
									<strong class="text-golden text-2"><?=($Idioma==="es")?'Fecha Entrada':'Check In'?>:</strong><span class=" text-blue text-2"><?= $roomtype->stay->checkindate?></span>
								</div>
								<div class="col-12 m-t-20">
									<strong class="text-golden text-2"><?=($Idioma==="es")?'Fecha Salida':'Check Out'?>:</strong><span class=" text-blue text-2"><?= $roomtype->stay->checkoutdate?></span>
								</div>
								<div class="col-12 m-t-20">
									<strong class="text-golden text-2"><?=($Idioma==='es')?'Minimo de Habitaciones':'Minimum Room(s)'?>:</strong><?= $roomtype->minrooms?>
								</div>
								<div class="col-12">
									<strong class="text-golden text-2"><?=($Idioma==='es')?'Comodidades':'Amenities'?>:</strong>
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
										<button llc="deleteroom" lli="<?= $habitacion->id?>" class="btn btn-secondary"><?=($Idioma==='es')?'Descartar Habitación':'Remove Room'?></button>
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
							<a class="btn btn-secondary" href="<?= base_URL('listroom/'.$Idioma)?>"><?=($Idioma==='es')?'Agregar Habitación':'Add Room'?>
								
							</a>
						</div>
						<div class="col-6 text-right">
							<a href="<?= base_URL('confirmarreservacion/').$idioma?>"  class="btn btn-secondary " <?= ($habitaciones==false)?'disabled':'' ?>>
								<?=($Idioma==='es')?'Siguiente':'Next'?>
							</a>
						</div>
					</div>
				</div>
				
				
		</div>
	</div>
</div>

