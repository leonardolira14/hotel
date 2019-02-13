<?
$iva=0;
$total=0;
$sub=0;
$habitaciones=$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->bookings;
	foreach ($habitaciones as $habitacion) {
		$total+=(float)$habitacion->rates[0]->price;
		$iva+=(float)$habitacion->rates[0]->tax;

	}
	$t=(float)$total+(float)$iva;
	$iva=number_format($iva,2);
	$total=number_format($total,2);
	
	$sub=number_format($t,2);
	

//vdebug($habitaciones);
?>

<div class="container-fluid fondo-reservaciones">
<div class="container menu-resevaciones p-t-70">
	<div class="row">
		<div class="col-2 text-center"><a class="" href="<?= base_URL('/reservacion/').$Idioma?>">1.-Fecha de estadia</a></div>
		<div class="col-3 text-center"><a class=""  href="<?= base_URL('listroom/'.$Idioma)?>">2.-Seleccionar habitación</a></div>
		<div class="col-4 text-center"><a  href="<?= base_URL('detallesreserva/').$Idioma?>">3.-Detalles/agregar otras habitaciones</a></div>
		<div class="col-3 text-center"><a  href="<?= base_URL('confirmarreservacion/').$Idioma?>">4.-Confirmar reservación</a></div>
		<div class="col-12 text-center m-t-40">
			<h2 class="text-white text-2 text-uppercase">Reservación Exitosa.</h2>	
		</div>
		<div class="col-12 ray-dor m-b-30"></div>
	</div>
	<div class="row bg-white" id="print">
		<div class="col-12 text-right text-5 text-blue m-t-40">
			<h5>Id de la reserva # <?= $respuestas["respuestas"]["reservacion"]->hotelogix->response->order->bookings[0]->code ?></h5>
		</div>
		<div class="col-12  text-left text-5 text-golden m-t-20">
			<h5 class="text-uppercase">Detalles del huésped</h5>
		</div>
		<div class="col-12 ">
			<span class="text-uppercase text-golden">Nombre: </span><span><?=$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->fname." ".$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->lname?></span>
		</div>
		<div class="col-12 text-5">
			<span class="text-uppercase text-golden">Dirección: </span><span><?=$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->address.", ".$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->city.", ".$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->city." ".$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->zip?></span>
		</div>
		<div class="col-12 text-5">
			<span class="text-uppercase text-golden">Teléfono: </span><span><?=$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->phone?></span>
		</div>
		<div class="col-12 text-5">
			<span class="text-uppercase text-golden">Móvil: </span><span><?=$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->mobile?></span>
		</div>
		<div class="col-12 text-5">
			<span class="text-uppercase text-golden">Correo Electrónico: </span><span><?=$respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner->email?></span>
		</div>
	
	
			<div class="col-12 text-left p-t-70 ">
				<h4><strong class="text-golden text-2 text-uppercase">Detalles de la reservación:</strong></h4>
			</div>
			<div class="col-12 m-t-20 ">
				<table class="table table-hover">
					<thead>
						<th col="scope" class="text-2 text-blue">Detalle del paquete</th>
						<th col="scope" class="text-2 text-blue">LLegada-Salida</th>
						<th col="scope" class="text-2 text-blue">Personas(S)</th>
						<th col="scope" class="text-2 text-blue text-center">Precio</th>
						<th col="scope" class="text-2 text-blue text-center">Impuestos</th>
						<th col="scope" class="text-2 text-blue text-center">Total</th>
					</thead>
					<tbody>
						<?
							if($habitaciones!==false){
								foreach ($habitaciones as $habitacion) {
									$roomtype = $habitacion->roomtypes[0];
									//vdebug($habitacion);
									?>
										<tr>
											<td><?= $roomtype->title ?></td>
											<td><?= $roomtype->stay->checkindate."/".$roomtype->stay->checkoutdate?></td>
											<td>Adultos:<?= $habitacion->adult?>, Niños:<?= $habitacion->child?></td>
											<td class="text-right"><?= $habitacion->currencycode?> <?= number_format($habitacion->rates[0]->price,2)?></td>
											<td class="text-right"><?= $habitacion->currencycode?> <?= number_format($habitacion->rates[0]->tax,2)?></td>
											<td class="text-right"><?= $habitacion->currencycode?> <?=number_format( (float)$habitacion->rates[0]->price+(float) $habitacion->rates[0]->tax,2)?></td>
										</tr>
									<?
								}
							}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-5 m-b-30 offset-md-7">
				<table class="table montos">	
					<tbody>
						<tr>
							<td class="text-right "><strong class=" text-2 text-blue text-uppercase text-right">MONTO TOTAL:</strong></td>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-right">$ <?= $total ?></strong></td>
						</tr>
						<tr>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-right">Total Impuesto(S):</strong></td>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-left ">$ <?= $iva ?></strong></td>
						</tr>
						<tr>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-right">Valor Total Con impuestos:</strong></td>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-left">$ <?= $sub ?></strong></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-12">
				<small class="text-muted">Condiciones de pago: Tarjeta de Crédito</small>
			</div>
			<div class="col-12 text-5 text-golden m-t-40">
				<h4>Política de Cancelación</h4>
			</div>
			<div class="col-12 text-5 text-blue m-t-10 text-justify">
				1.-En caso de no realizarse el pago al momento del check in del huésped o abrir boucher de crédito, será interpretado como una falta de presentación del huésped y dará al cargo por “No Show”, así mismo se procederá a cancelar la reservación.
				<br>
				2.- Para las reservas realizadas el mismo día de la estancia no aplicarán cambios ni cancelaciones, por lo que se hará el cargo de “No Show” que corresponde al cobro por el monto de una noche más impuestos por cada habitación a la tarjeta de crédito con la que se garantizó la reservación (en lo sucesivo, el cargo de “No Show”) en caso de no presentarse o cancelar
				<br>
				3.- Independientemente de las noches reservadas, de no realizarse el cambio o cancelación en el tiempo y forma mencionada, o en caso de no presentarse el Huésped en la fecha de entrada, se hará el cargo de “No Show”, solo por la primera noche de habitación (es) reservada (as) más impuestos a la tarjeta de crédito con la que se garantizó la reservación. El resto de la estancia se cancelará automáticamente.</h6>
				
			</div>
		
		<div class="col-6 m-t-40 m-b-40 ">
			<a href="<?= base_URL('/').$Idioma?>" class="btn btn-secondary">Ir a Home</a>
		</div>
		<div class="col-6 text-right m-t-40 m-b-40">
			<button href="" class="btn btn-secondary" onclick="printContent('print');">Imprimir</button>
		</div>
	</div>
</div>
</div>
<script>
function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);
}
</script>
<?
//vdebug($respuestas["respuestas"]["reservacion"]->hotelogix->response->order->owner);
?>