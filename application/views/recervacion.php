
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

<div class="container-fluid banner-sup">
<div class="row ">
	<img src="<?= base_URL()?>assets/img/banner_reservacion.jpg" alt="Marques del Angel reservaciones" class="img-fluid">
</div>
</div>
<div class="container-fluid fondo-reservaciones">
<div class="container menu-resevaciones p-t-70">
	<div class="row">
		<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a class="active" href="<?= base_URL('/reservacion/').$Idioma?>">1.-<?=($Idioma==='es')?'Fecha de estadía':'Reservation Details'?></a></div>
		<div class=" col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a class=""  href="<?= base_URL('listroom/'.$Idioma)?>">2.-<?=($Idioma==='es')?'Seleccionar habitación':'Select a Room'?></a></div>
		<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a  href="<?= base_URL('detallesreserva/').$Idioma?>">3.-<?=($Idioma==='es')?'Detalles/agregar otras habitaciones':'Check Details/Add More Rooms'?></a></div>
		<div class="col-12 col-md-3 col-xl-3 col-lg-3 text-center m-t-20"><a  href="<?= base_URL('confirmarreservacion/').$Idioma?>">4.-<?=($Idioma==='es')?'Confirmar reservación':'Confirm Reservation'?></a></div>
		<div class="col-12 text-center m-t-40">
			<h2 class="text-white text-2 text-uppercase"><?= ($Idioma==="es")?'Detalles de Estadía':'Stay Details'?></h2>	
		</div>
		<div class="col-12 ray-dor m-b-30"></div>
	</div>
</div>

		<form id="form_busqueda"  method="post" action="<?= base_url('resultados/').$Idioma?>" class="container bg-white">
			<div class="row p-t-70 p-b-70">
		<div class="col-12 col-md-6 col-xl-6 col-lg-6">
			<div class="row">
				<div class="col-12 text-left">
					<h5><strong class="text-golden text-2 text-uppercase">
					<?= ($Idioma==="es")?'Fecha de Estadía':'Travel Dates'?>
					
				</strong></h5>
				</div>
				<div class="col-12 col-md-6 col-xl-6 col-lg-6">
					<div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==="es")?'Fecha Entrada':'Arrival (Check in)'?>:</strong></h5></label>
					    <div class="col-sm-12">
					     	<input llc="date" autocomplete="off" type="text"  name="checkin" placeholder="CHECK IN" class="form-control">
					    </div>
					 </div>
				</div>
				<div class="col-12 col-md-6 col-xl-6 col-lg-6">
					<div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==="es")?'Fecha Salida':'Departure (Check out)'?>:</strong></h5></label>
					    <div class="col-sm-12">
					    	<input llc="date"  type="text" autocomplete="off" name="checkout" placeholder="CHECK OUT" class="form-control">
					    </div>
					 </div>
				</div>
				<div class="col-12">
					<div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==="es")?'Noches de estadía':'Nights'?>:</strong></h5></label>
					    <div class="col-sm-12">
					     <input name="noches" type="text" class="form-control" id="ciudad" placeholder="">
					    </div>
					 </div>
				</div>					
			</div>
		
		
		</div>
		<div class="col-12 col-md-6 col-xl-6 col-lg-6">
			<div class="row">
				<div class="col-12 text-left">
					<h5><strong class="text-golden text-2 text-uppercase"><?= ($Idioma==="es")?'Número de personas':'Guest(s)'?></strong></h5>
				</div>
				<div class="col-12">
					<div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==="es")?'Adultos':'Adults'?>:</strong></h5></label>
					    <div class="col-sm-12">
					    <select name="adultos"  class="form-control" >
					    	<?php
								$i=1;
								while($i<=4){
									?>
									<option value="<?= $i ?>"><?= $i ?></option>
									<?php
									$i++;
								}
								?>	
					    </select>
					    </div>
					 </div>
					 <div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2"><?= ($Idioma==="es")?'Niños (menores de 12 años)':'Children (under 12)'?>:</strong></h5></label>
					    <div class="col-sm-12">
					      <select name="ninos"  class="form-control" >
					    	<?php
								$i=0;
								while($i<=4){
									?>
									<option value="<?= $i ?>"><?= $i ?></option>
									<?php
									$i++;
								}
								?>
					       </select>
					    </div>
					 </div>
				</div>
			</div>
		</div>
		
		<div class="col-12 m-b-40 m-t-40">
			<div class="row">
				<div class="col-5 col-md-6 col-xl-6 col-lg-6 text-left ">
					<a class="btn btn-secondary" href="<?= base_URL('/'.$Idioma)?>">
						Home
					</a>
				</div>
				<input type="hidden" name="dedonde" value="recervacion">
				<div class="col-4 col-md-6 col-xl-6 col-lg-6 text-right">
					<button llc="btn_busqueda" type="submit" class="btn btn-secondary text-uppercase">
						<?= ($Idioma==="es")?'Ver Disponibilidad':'Check Availability'?>
						
					</button>
				</div>
			</div>
		</div>
		</div>
</form>
</div>
<script>
	$(document).ready(function(){
		var dat=new Date();
		$('input[llc="date"]').datepicker({
		    dateFormat: 'yyyy-mm-dd',
		    language: 'es',
		    minDate: new Date(dat.getFullYear(),dat.getMonth(),dat.getDate()+1),

		
		})
	$('input[name="checkin"]').datepicker({
		onSelect: function (formattedDate, date, inst) {
			date.setDate(date.getDate() + 1);
			console.log(date)
			if((date.getMonth()+1)<10){
			mes="0"+(date.getMonth()+1);
			}else{
				mes=date.getMonth()+1;
			}
			$('input[name="checkout"]').val(date.getFullYear()+"-"+mes+"-"+date.getDate());
			resnoches($("input[name='checkin']").val(),$("input[name='checkout']").val());
		}
	})
	$('input[name="checkout"]').datepicker({
		onSelect: function (formattedDate, date, inst) {
			resnoches($("input[name='checkin']").val(),$("input[name='checkout']").val());
		}
	})
	
})
	

	
</script>