<?
//vdebug($paises);
//vdebug($cart->hotelogix->response->hotels[0]->bookings);
$habitaciones=false;
$iva=0;
$total=0;
$sub=0;
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
	$t=(float)$total+(float)$iva;
	$iva=number_format($iva,2);
	$total=number_format($total,2);
	
	$sub=number_format($t,2);
	
}


?>
<?
	if(isset($error)){
		?>
			<div class="fixed-top centrar alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Error!</strong> <?= $error?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		<?
	}
?>

<div class="container-fluid fondo-reservaciones">
	<div class="container menu-resevaciones p-t-70">
		<div class="row">
			<div class="col-12 col-md-2 col-xl-2 col-lg-2 text-center m-t-20"><a  href="<?= base_URL('/reservacion/').$idioma?>">1.-<?=($idioma==='es')?'Fecha de estadía':'Stay Details'?></a></div>
			<div class=" col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a class=""  href="<?= base_URL('listroom/'.$Idioma)?>">2.-<?=($Idioma==='es')?'Seleccionar habitación':'Select a Room'?></a></div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 text-center m-t-20"><a class=""  href="<?= base_URL('detallesreserva/').$Idioma?>">3.-<?=($Idioma==='es')?'Detalles/agregar otras habitaciones':'Check Details/Add More Rooms'?></a></div>
			<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a class="active" href="<?= base_URL('confirmarreservacion/').$Idioma?>">4.-<?=($Idioma==='es')?'Confirmar reservación':'Confirm Reservation'?></a></div>
			<div class="col-12 text-center m-t-40">
				<h2 class="text-white text-2 text-uppercase"><?=($Idioma==='es')?'Confirme su reserva / pagos':'Confirm your Booking / Payments'?></h2>	
			</div>

			<div class="col-12 ray-dor m-b-30"></div>
			
		</div>
		<div class="row d-flex justify-content-end">
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 text-6 m-t-30 text-white">
				<?=($Idioma==="es")?'Convertidor de Divisas':'Currency Converter'?>:  <select name=""  class="divisa" id=""><option value="">MXN</option><option value="">USD</option></select>
			</div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 text-6 text-2 m-t-30 text-white m-b-40 text-right">
				<a href="<?= base_URL('newreservacion/').$idioma?>"><?=($Idioma==="es")?'Nueva Búsqued':'New Search'?></a>
			</div>
		</div>
	</div>
	<div class="container bg-white">
		<div class="row p-t-70 p-b-70">
			<div class="col-12 text-left">
				<h4><strong class="text-golden text-2 text-uppercase"><?= ($Idioma==="es")?'Detalles de la reservación':'Selected Room(s)'?>:</strong></h4>
			</div>
			<div class="col-12 m-t-20 ">
				<table class="table table-hover ">
					<?
						if($Idioma==="es"){
							?>
							<thead>
								<th col="scope" class="text-2 text-blue">Detalle del paquete</th>
								<th col="scope" class="text-2 text-blue">LLegada-Salida</th>
								<th col="scope" class="text-2 text-blue">Persona(s)</th>
								<th col="scope" class="text-2 text-blue text-center">Precio</th>
								<th col="scope" class="text-2 text-blue text-center">Impuestos</th>
								<th col="scope" class="text-2 text-blue text-center">Total</th>
							</thead>
							<?
						}else{
							?>
							<thead>
								<th col="scope" class="text-2 text-blue">Package/Rate Detail</th>
								<th col="scope" class="text-2 text-blue">Arrival-Departure</th>
								<th col="scope" class="text-2 text-blue">Person(s)</th>
								<th col="scope" class="text-2 text-blue text-center">Price</th>
								<th col="scope" class="text-2 text-blue text-center">Tax(es)</th>
								<th col="scope" class="text-2 text-blue text-center">Amount</th>
							</thead>
							<?
						}
					?>
					
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
			<div class=" col-12 col-md-5 col-xl-5 col-lg-5 text-5 m-b-30 offset-md-7">
				<table class="table montos">	
					<tbody>
						<tr>
							<td class="text-right "><strong class=" text-2 text-blue text-uppercase text-right"><?= ($Idioma==="es")?'MONTO TOTAL':'Total Amount'?>:</strong></td>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-right">$ <?= $total ?></strong></td>
						</tr>
						<tr>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-right"><?= ($Idioma==="es")?'Total Impuesto(S)':'Total Tax(es)'?>:</strong></td>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-left ">$ <?= $iva ?></strong></td>
						</tr>
						<tr>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-right"><?= ($Idioma==="es")?'Valor Total Con impuestos':'Total Amount (with Tax)'?>:</strong></td>
							<td class="text-right"><strong class="text-2 text-blue text-uppercase text-left">$ <?= $sub ?></strong></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<form class="row" method="post" action="<?= base_url('addrecervacion/').$Idioma?>">
			<div class="col-10 ray-dor m-b-30 gr-3 centrar"></div>
			<div class="col-12 text-left">
				<h4><strong class="text-golden text-2 text-uppercase"><?= ($Idioma==="es")?'Detalles del Huesped':'Guest Details'?>:</strong></h4>
			</div>
			<div class="col-12 m-t-20">
				<div class="row">
					<div class="col-12 col-md-1 col-xl-1 col-lg-1 text-1 m-r-15 m-t-20">
						<h5><strong class="text-blue text-2"><?= ($Idioma==="es")?'Nombre':'Guest Name'?>: </strong></h5>
					</div>
					<div class="col-12 col-md-2 col-xl-2 col-lg-2 m-t-20">
						    <select name="titulo" class="form-control" id="exampleFormControlSelect1">
						      <option value=""><?= ($Idioma==="es")?'Titulo':'Title'?></option>
						      <option value="Mrs">Mrs.</option>
						      <option value="Mr">Mr.</option>
						      <option value="Miss">Miss</option>
						    </select>
					</div>
					<div class="col-12 col-md-4 col-xl-4 col-lg-4 m-t-20">
						<input type="text" name="nombre" placeholder="<?= ($Idioma==='es')?'Nombre':'Name'?>" class="form-control">
					</div>
					<div class="col-12 col-md-4 col-xl-4 col-lg-4 m-t-20">
						<input type="text" name="apellidos" placeholder="<?= ($Idioma==='es')?'Apellidos':'Last Name'?>" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 m-t-20">
				<div class="form-group row">
				    <label for="pais" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Teléfono':'Telephone'?>:</strong></h5></label>
				    <div class="col-sm-9">
				     <input type="text" name="telefono" class="form-control"  placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 m-t-20">
				<div class="form-group row">
				    <label for="pais" class="col-sm-2 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Móvil':'Mobile'?>:</strong></h5></label>
				    <div class="col-sm-10">
				     <input type="text" name="movil" class="form-control"  placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 m-t-20">
				<div class="form-group">
					<label for=""><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Correo Electrónico':'Email'?>:</strong></h5></label>
					<input type="text" name="correo" placeholder="" class="form-control">
				</div>
			</div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 m-t-20">
				<div class="form-group">
					<label for=""><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Confirme Correo Electrónico':'Confirm Email'?>:</strong></h5></label>
					<input type="text" name="correo2" placeholder="" class="form-control">
				</div>
			</div>
			<div class="col-12 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-2 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Dirección':'Address'?>:</strong></h5></label>
				    <div class="col-sm-10">
				      <input type="text" name="direccion" class="form-control" id="direccion" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 m-t-20">
				<div class="form-group row">
				    <label for="pais" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'País':'Country'?>:</strong></h5></label>
				    <div class="col-sm-9">
				      <select id="pais" name="pais"  class="form-control" >
				      	<?php
				      	foreach ($paises as $pais) {
				      		if($pais['id']==="42"){
				      			?>
				      			<option selected value="<?= $pais['id']  ?>"><?= $pais['paisnombre']  ?></option>
				      			<?
				      		}else{
				      			?>
				      			<option value="<?= $pais['id']  ?>"><?= $pais['paisnombre']  ?></option>
				      			<?
				      		}				      	
				      		}
				      	?>
				      </select>
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 m-t-20">
				<div class="form-group row">
				    <label for="estado" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Estados':'State'?>:</strong></h5></label>
				    <div class="col-sm-9">
				    	<select name="estado" id="estado"  class="form-control" id="">
				    		<?php
					      	foreach ($estados as $estado) {
					      			?>
					      			<option value="<?= $estado['estadonombre']  ?>"><?= $estado['estadonombre']  ?></option>
					      			<?			      	
					      		}
					      	?>
				    	</select>
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 m-t-20">
				<div class="form-group row">
				    <label for="ciudad" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Ciudad':'City'?>:</strong></h5></label>
				    <div class="col-sm-9">
				      <input type="text" name="ciudad" class="form-control" id="ciudad" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-5 col-xl-5 col-lg-5 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-5 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Código Postal':'Zip Code'?>:</strong></h5></label>
				    <div class="col-sm-7">
				      <input type="text" name="cp" class="form-control" id="cp" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-8 col-xl-8 col-lg-8 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-2 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Prefencias':'Preferences'?>:</strong></h5></label>
				    <div class="col-sm-10">
				      <textarea cols="10" name="prefencias" rows="5" class="form-control" id="cp" placeholder="<?= ($Idioma==='es')?'Introdusca aquí sus Prefencias':'Enter Preferences Here'?>"></textarea>
				    </div>
				 </div>
			</div>
			<div class="col-12 text-left m-t-40">
				<h4><strong class="text-golden text-2 text-uppercase"><?= ($Idioma==='es')?'opciones de confirmación':'Confirmation Options'?>:</strong></h4>
			</div>
			<div class="col-12">
				<label class="containert">
					<?
						if($Idioma==="es"){
							?>
					<h5>Yo reconozco la lectura del <a class="text-blue" href="<?= base_URL('assets/pdf/Aviso.pdf')?>" target="_blank"><strong>Términos y Condiciones</strong></a> y acepto pagar de acuerdo a los términos allí establecidos, de acuerdo a mi opción de más abajo.</h5>
					<?
					}else{
						?>
						<h5>I acknowledge reading the <a class="text-blue" href="<?= base_URL('assets/pdf/Aviso.pdf')?>" target="_blank"><strong>Terms and Conditions </strong></a> and I agree to pay according to the terms stated, in line with my choice below.</h5>
						<?
					}
					?>
				  <input name="acepto" type="checkbox" checked="checked">
				  <span class="checkmark"></span>
				</label>
			</div>
			<div class="col-12 text-left m-t-40">
				<h4><strong class="text-golden text-2 text-uppercase"><?= ($Idioma==='es')?'INGRESA LOS DATOS DE SU TARJETA DE CRÉDITO':'PAYMENT INFORMATION'?>:</strong></h4>
			</div>
			<div class="col-12">
				<h4 class="text-blue text-2"><?=($Idioma==='es')?'La tarjeta de crédito solo será usada de garantía y no se realizará ningún cargo.':'Credit Card Guarantee required for booking.'?></h4>
			</div>
			<div class="col-12 col-md-5 col-xl-5 col-lg-5 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-5 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Tipo de Tarjeta':'Payment Type'?>:</strong></h5></label>
				    <div class="col-sm-7">
				      <select name="tipotj" class="form-control" id="cp">
				      	<option value="visa">Visa</option>
				      	<option value="mastercard">MasterCard</option>
				      	<option value="amex">American Express</option>
				      </select>
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-10 col-xl-10 col-lg-10 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Nombre en la tarjeta':'Cardholder Name'?>:</strong></h5></label>
				    <div class="col-sm-9">
				      <input type="text" name="nombretj" class="form-control" id="cp" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-10 col-xl-10 col-lg-10 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Número de la tarjeta':'Card Number'?>:</strong></h5></label>
				    <div class="col-sm-9">
				      <input type="number" name="numerotj" class="form-control" id="cp" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-5 col-form-label"><h5><strong class="text-blue text-2">CVV:</strong></h5></label>
				    <div class="col-sm-7">
				     <input type="number" name="cvv" class="form-control" id="cp" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-12 col-md-7 col-xl-7 col-lg-7 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-4 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==='es')?'Fecha de expiración':'Expiration Date'?>:</strong></h5></label>
				    <div class="col-sm-4 m-b-20">
				      <select name="month"  class="form-control" >
				      	<option value="">MM</option>
				      	<?
				      		for($i=1;$i<=12;$i++){
				      			?>
				      			<option value="<?=$i?>"><?=$i?></option>
				      			<?
				      		}
				      	?>
				      </select>
				    </div>
				    <div class="col-sm-4 ">
				      <select name="year"  class="form-control" >

				      	<option value=""><?=($Idioma==="es")?'AAAA':'YYYY';?></option>
				      	<?
				      		for($i=date('Y');$i<=2030;$i++){
				      			?>
				      			<option value="<?=$i?>"><?=$i?></option>
				      			<?
				      		}
				      	?>
				      </select>
				    </div>
				 </div>
			</div>
			<div class="col-12 m-t-20 text-center m-b-30">
				<button type="submit" class="btn btn-success text-uppercase"><?=($Idioma==="es")?'Confirmar Reservación':'Confirm Reservation';?></button>
			</div>
			</form>
	
	</div>
</div>
