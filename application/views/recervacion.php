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
		<div class="col-2 text-center"><a class="active" href="<?= base_URL('/').$Idioma?>">1.-Fecha de estadia</a></div>
		<div class="col-3 text-center"><a class=""  href="<?= base_URL('listroom/'.$Idioma)?>">2.-Seleccionar habitación</a></div>
		<div class="col-4 text-center"><a  href="<?= base_URL('detallesreserva/').$Idioma?>">3.-Detalles/agregar otras habitaciones</a></div>
		<div class="col-3 text-center"><a  href="<?= base_URL('confirmarreservacion/').$Idioma?>">4.-Confirmar reservación</a></div>
		<div class="col-12 text-center m-t-40">
			<h2 class="text-white text-2 text-uppercase">Detalles de Estadía</h2>	
		</div>
		<div class="col-12 ray-dor m-b-30"></div>
	</div>
</div>

		<form id="form_busqueda"  method="post" action="<?= base_url('resultados/').$Idioma?>" class="container bg-white">
			<div class="row p-t-70 p-b-70">
		<div class="col-6">
			<div class="row">
				<div class="col-12 text-left">
					<h5><strong class="text-golden text-2 text-uppercase">Fecha de Estadia</strong></h5>
				</div>
				<div class="col-6">
					<div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2">Fecha Entrada:</strong></h5></label>
					    <div class="col-sm-12">
					     	<input data-format="Y-m-d" data-fx-mobile="true" data-max-year="2030" llc="date" type="text" data-lang="es" name="checkin" placeholder="CHECK IN" class="form-control">
					    </div>
					 </div>
				</div>
				<div class="col-6">
					<div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2">Fecha Salida:</strong></h5></label>
					    <div class="col-sm-12">
					    	<input data-format="Y-m-d" llc="date" data-fx-mobile="true" data-max-year="2030" type="text" data-lang="es"  name="checkout" placeholder="CHECK OUT" class="form-control">
					    </div>
					 </div>
				</div>
				<div class="col-12">
					<div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2">Noches de estadia:</strong></h5></label>
					    <div class="col-sm-12">
					     <input name="noches" type="text" class="form-control" id="ciudad" placeholder="">
					    </div>
					 </div>
				</div>					
			</div>
		
		
		</div>
		<div class="col-6">
			<div class="row">
				<div class="col-12 text-left">
					<h5><strong class="text-golden text-2 text-uppercase">Detalle de Estadia</strong></h5>
				</div>
				<div class="col-12">
					<div class="form-group row">
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2">Adultos:</strong></h5></label>
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
					    <label for="pais" class="col-sm-12 col-form-label"><h5><strong class="text-blue text-2">Niños:</strong></h5></label>
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
				<div class="col-6 text-left ">
					<a class="btn btn-secondary" href="<?= base_URL('/'.$Idioma)?>">
						Home
					</a>
				</div>
				<input type="hidden" name="dedonde" value="recervacion">
				<div class="col-6 text-right">
					<button llc="btn_busqueda" type="submit" class="btn btn-secondary text-uppercase">
						Ver Disponiblidad
					</button>
				</div>
			</div>
		</div>
		</div>
</form>
</div>
<script>
	$('input[llc="date"]').dateDropper();
</script>