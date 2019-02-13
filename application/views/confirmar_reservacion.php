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
			<div class="col-2 text-center"><a href="<?= base_URL('/reservacion/').$idioma?>">1.-Fecha de estadia</a></div>
			<div class="col-3 text-center"><a class=""  href="<?= base_URL('listroom/'.$Idioma)?>">2.-Seleccionar habitación</a></div>
			<div class="col-4 text-center"><a  href="<?= base_URL('detallesreserva/').$idioma?>">3.-Detalles/agregar otras habitaciones</a></div>
			<div class="col-3 text-center"><a class="active" href="<?= base_URL('confirmarreservacion/').$idioma?>">4.-Confirmar reservación</a></div>
			<div class="col-12 text-center m-t-40">
				<h2 class="text-white text-2 text-uppercase">Confirme su reserva / pagos</h2>	
			</div>

			<div class="col-12 ray-dor m-b-30"></div>
			
		</div>
		<div class="row d-flex justify-content-end">
			<div class="col-6 text-2 m-t-30 text-white">
				Convertidor de Divisas:  <select name=""  class="divisa" id=""><option value="">MXN</option><option value="">USD</option></select>
			</div>
			<div class="col-6 text-2 m-t-30 text-white m-b-40 text-right">
				<a href="<?= base_URL('newreservacion/').$idioma?>">Nueva Busqueda</a>
			</div>
		</div>
	</div>
	<div class="container bg-white">
		<div class="row p-t-70 p-b-70">
			<div class="col-12 text-left">
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
		</div>
		<form class="row" method="post" action="<?= base_url('addrecervacion/').$Idioma?>">
			<div class="col-10 ray-dor m-b-30 gr-3 centrar"></div>
			<div class="col-12 text-left">
				<h4><strong class="text-golden text-2 text-uppercase">Detalles del Huesped:</strong></h4>
			</div>
			<div class="col-12 m-t-20">
				<div class="row">
					<div class="col-1 m-r-15">
						<h5><strong class="text-blue text-2">Nombre: </strong></h5>
					</div>
					<div class="col-2">
						    <select name="titulo" class="form-control" id="exampleFormControlSelect1">
						      <option value="">Titulo</option>
						      <option value="Mrs">Mrs.</option>
						      <option value="Mr">Mr.</option>
						      <option value="Miss">Miss</option>
						    </select>
					</div>
					<div class="col-4">
						<input type="text" name="nombre" placeholder="Nombre" class="form-control">
					</div>
					<div class="col-4">
						<input type="text" name="apellidos" placeholder="Apellidos" class="form-control">
					</div>
				</div>
			</div>
			<div class="col-6 m-t-20">
				<div class="form-group row">
				    <label for="pais" class="col-sm-2 col-form-label"><h5><strong class="text-blue text-2">Teléfono:</strong></h5></label>
				    <div class="col-sm-10">
				     <input type="text" name="telefono" class="form-control"  placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-6 m-t-20">
				<div class="form-group row">
				    <label for="pais" class="col-sm-2 col-form-label"><h5><strong class="text-blue text-2">Móvil:</strong></h5></label>
				    <div class="col-sm-10">
				     <input type="text" name="movil" class="form-control"  placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-6 m-t-20">
				<div class="form-group">
					<label for=""><h5><strong class="text-blue text-2">Correo Electrónico:</strong></h5></label>
					<input type="text" name="correo" placeholder="" class="form-control">
				</div>
			</div>
			<div class="col-6 m-t-20">
				<div class="form-group">
					<label for=""><h5><strong class="text-blue text-2">Confirme Correo Electrónico:</strong></h5></label>
					<input type="text" name="correo2" placeholder="" class="form-control">
				</div>
			</div>
			<div class="col-12 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-2 col-form-label"><h5><strong class="text-blue text-2">Dirección:</strong></h5></label>
				    <div class="col-sm-10">
				      <input type="text" name="direccion" class="form-control" id="direccion" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-4 m-t-20">
				<div class="form-group row">
				    <label for="pais" class="col-sm-2 col-form-label"><h5><strong class="text-blue text-2">Pais:</strong></h5></label>
				    <div class="col-sm-10">
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
			<div class="col-4 m-t-20">
				<div class="form-group row">
				    <label for="estado" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2">Estados:</strong></h5></label>
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
			<div class="col-4 m-t-20">
				<div class="form-group row">
				    <label for="ciudad" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2">Ciudad:</strong></h5></label>
				    <div class="col-sm-9">
				      <input type="text" name="ciudad" class="form-control" id="ciudad" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-5 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-5 col-form-label"><h5><strong class="text-blue text-2">Código Postal:</strong></h5></label>
				    <div class="col-sm-7">
				      <input type="text" name="cp" class="form-control" id="cp" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-8 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-2 col-form-label"><h5><strong class="text-blue text-2">Prefencias:</strong></h5></label>
				    <div class="col-sm-10">
				      <textarea cols="10" name="prefencias" rows="5" class="form-control" id="cp" placeholder="Introdusca aquí sus Prefencias"></textarea>
				    </div>
				 </div>
			</div>
			<div class="col-12 text-left m-t-40">
				<h4><strong class="text-golden text-2 text-uppercase">opciones de confirmación:</strong></h4>
			</div>
			<div class="col-12">
				<label class="containert"><h5>Yo reconozco la lectura del <a class="text-blue" href="<?= base_URL('assets/pdf/Aviso.pdf')?>" target="_blank"><strong>Términos y Condiciones</strong></a> y acepto pagar de acuerdo a los términos allí establecidos, de acuerdo a mi opción de más abajo.</h5>
				  <input name="acepto" type="checkbox" checked="checked">
				  <span class="checkmark"></span>
				</label>
			</div>
			<div class="col-12 text-left m-t-40">
				<h4><strong class="text-golden text-2 text-uppercase">INGRESA LOS DATOS DE SU TARJETA DE CRÉDITO:</strong></h4>
			</div>
			<div class="col-12">
				<h4 class="text-blue text-2">La tarjeta de crédito solo sera usada como garantia  y no se cargará</h4>
			</div>
			<div class="col-5 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-5 col-form-label"><h5><strong class="text-blue text-2">Tipo de Tarjeta:</strong></h5></label>
				    <div class="col-sm-7">
				      <select name="tipotj" class="form-control" id="cp">
				      	<option value="visa">Visa</option>
				      	<option value="mastercard">MasterCard</option>
				      	<option value="amex">American Express</option>
				      </select>
				    </div>
				 </div>
			</div>
			<div class="col-10 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2">Nombre en la tarjeta:</strong></h5></label>
				    <div class="col-sm-9">
				      <input type="text" name="nombretj" class="form-control" id="cp" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-10 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-3 col-form-label"><h5><strong class="text-blue text-2">Número de la tarjeta:</strong></h5></label>
				    <div class="col-sm-9">
				      <input type="number" name="numerotj" class="form-control" id="cp" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-4 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-5 col-form-label"><h5><strong class="text-blue text-2">CVV:</strong></h5></label>
				    <div class="col-sm-7">
				     <input type="number" name="cvv" class="form-control" id="cp" placeholder="">
				    </div>
				 </div>
			</div>
			<div class="col-7 m-t-20">
				<div class="form-group row">
				    <label for="cp" class="col-sm-4 col-form-label"><h5><strong class="text-blue text-2">Fecha de expiración:</strong></h5></label>
				    <div class="col-sm-4">
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
				    <div class="col-sm-4">
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
				<button type="submit" class="btn btn-success text-uppercase">confirmar vía tarjeta de crédito</button>
			</div>
			</form>
	
	</div>
</div>
