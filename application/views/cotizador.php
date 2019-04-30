<div class="botton_fijo">
<span><a href="<?= base_url('reservacion/').$Idioma?>" class="btn btn-secondary text-2 text-uppercase">
							<small><?= ($Idioma==='es')?'Reserva Aquí !' : 'Reserve here' ?></small>
	</a></span>
</div>
<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/mini-banner-cotizaciones.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container bg-cotizador p-t-50">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center text-golden titulos-habitaciones ">
			<h2>Eventos & Meetings</h2>
		</div>
		<div class="col-8 col-md-3 col-lg-3 col-xl-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
		<div class="col-12 m-t-40 m-b-20"></div>
		<form id="cotizador" class="col-12 col-md-8 col-lg-8 col-xl-8 m-b-20" url="<?=base_URL()?>mail/cotizacion">
		 <div class="row ">
		 	<div class="col-12 col-md-2 col-lg-2 col-xl-2">
			    <label for="staticEmail2" class="text-golden text-left"><h5>Nombre:</h5></label>
			 </div>
			  <div class="col-12 col-md-10 col-lg-10 col-xl-10">
			    <input type="text" name="nombre" class="form-control"  >
			 </div>
			 <div class="col-12 col-md-2 col-lg-2 col-xl-2 m-t-30">
			    <label for="staticEmail2"  class="text-golden text-left"><h5>Email:</h5></label>
			 </div>
			  <div class="col-12 col-md-10 col-lg-10 col-xl-10 m-t-30">
			    <input type="text" name="email" class="form-control"  >
			 </div>
			 <div class="col-12 col-md-3 col-lg-3 col-xl-3 m-t-30">
			    <label for="staticEmail2"  class="text-golden text-left"><h5>Teléfono/Celular:</h5></label>
			 </div>
			  <div class="col-12 col-md-9 col-lg-9 col-xl-9 m-t-30">
			    <input type="text" name="tel" class="form-control"  >
			 </div>
			 <div class="col-12 col-md-3 col-lg-3 col-xl-3 m-t-30">
			    <label for="staticEmail2"  class="text-golden text-left"><h5>Tipo Evento/Ocasión:</h5></label>
			 </div>
			  <div class="col-12 col-md-9 col-lg-9 col-xl-9 m-t-30">
			    <input type="text" name="envento" class="form-control"  >
			 </div>
			 <div class="col-12 col-md-2 col-lg-2 col-xl-2 m-t-30">
			    <label for="staticEmail2"  class="text-golden text-left"><h5>Fecha:</h5></label>
			 </div>
			  <div class="col-12 col-md-10 col-lg-10 col-xl-10 m-t-30">
			    <input type="text" name="fecha" class="form-control" >
			 </div>
			 <div class="col-12 col-md-3 col-lg-3 col-xl-3 m-t-30">
			    <label for="staticEmail2"  class="text-golden text-left"><h5>No de Personas:</h5></label>
			 </div>
			  <div class="col-12 col-md-9 col-lg-9 col-xl-9 m-t-30">
			    <input type="text" name="personas" class="form-control"  >
			 </div>
			 <div class="col-12 col-md-3 col-lg-3 col-xl-3 m-t-30">
			    <label for="staticEmail2"  class="text-golden text-left"><h5>* Comentarios:</h5></label>
			 </div>
			  <div class="col-12 col-md-12 col-lg-12 col-xl-12 m-t-30">
			    <textarea cols="5" name="comentarios" rows="10" class="form-control"></textarea>
			 </div>
			<div llc="envi" class="col-4 btn btn-secondary m-t-40 text-blue centrar">
				ENVIAR
			</div>
		 </div>
		</form>
	</div>
</div>