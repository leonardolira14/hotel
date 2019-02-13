<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/banner-promociones_experiencias.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70 m-b-70">
		<div class="col-12 text-center titulos-habitaciones">
			<?if($Idioma==="es"){
			?>
			<h2>Experiencias & Promociones</h2>
			<?
			}else{
				?>
				<h2>Experiences &amp; Promotions</h2>
				<?
			}
			?>
			
				
		</div>
		<div class="col-8 col-md-3 col-lg-3 col-xl-3">
			
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
			
		</div>
	</div>
</div>
<div class="container-fluid banner-min">
	<div class="row " onclick="$('#Galeria').modal('toggle')">
		
			
		
		<?if($Idioma==="es"){
			?>
		<img src="<?= base_URL()?>assets/img/membership-card.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
		<?
		}else{
		?>
		<img src="<?= base_URL()?>assets/img/banner_tarjeta_ingles.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
		<?
		}
		?>
		
	</div>
</div>
<div class="container-fluid banner-min">
	<div class="row ">
		<a target="_blank" href="https://www.turisticospoblanos.com/">
			<?if($Idioma==="es"){
			?>
			<img src="<?= base_URL()?>assets/img/banner-experiencias.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
			<?
		}else{
			?>
			<img src="<?= base_URL()?>assets/img/banner_tp_ingles.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
			<?
		}
		?>
		</a>
	</div>
</div>
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
				</div>
				<div class="container">
					<div class="row d-flex justify-content-center">							
						
						<div class="col-12 col-md-10 col-xl-10 col-lg-10 text-justify m-t-30 m-b-50 text-blue">
							<?if($Idioma==="es"){
								?>
								<strong>Te invitamos</strong> a convertirte en <strong>miembro</strong> de nuestro exclusivo <strong>programa de lealtad</strong>.
						<p>
							En el <strong>Hotel Marqués del Ángel</strong> estamos comprometidos a hacer que cada experiencia con nosotros sea memorable. Comienza con nuestro programa de lealtad, y lo mejor de nuestra membresía es <strong>GRATIS</strong>. Un programa que lo recompensa cada vez que desayuna, come, cena o bebe en nuestro Restaurante o Mezcalería o ya sea que se hospede en nuestras instalaciones.
						<p>
							<strong>Sea el primero</strong> en enterarse de los próximos eventos.Venga al <strong>Hotel Marqués del Ángel</strong> hoy mismo ó complete el siguiente formulario, y comience a ganar hoy mismo!
								<?
							}else{
								?>
								<strong>We invite</strong> you to become<strong> a member </strong>of our exclusive <strong>loyalty program</strong>.
								At the<strong> Marqués del Ángel Hotel </strong> we are committed to making every experience with us a memorable one. Start with our loyalty program, and the best of our membership is <strong>FREE</strong>. A program that rewards him every time he eats, eats, dines or drinks in our Restaurant or Mezcalería or whether he stays in our facilities.

								<strong>Be the first</strong> to know about upcoming events. Come to <strong>Hotel Marqués del Ángel</strong> today or complete the following form and start earning today!								
								<?
							}
							?>
							
													
						</div>

					</div>
				</div>
				<div class="container">
					<div class="row d-flex justify-content-center ">
						<div class="col-12 col-md-6 col-xl-6 col-lg-6 form-group">
						    <label for="">Nombre/Name</label>
						    <input type="text" name="nombre" class="form-control" name="nombre" placeholder="Nombre">
						 </div>
						 <div class="col-12 col-md-6 col-xl-6 col-lg-6 form-group">
						    <label for="">Apellidos/Last Name</label>
						    <input type="text" name="apellidos" class="form-control" name="nombre" placeholder="Apellidos">
						 </div>
						 <div class="col-12 col-md-6 col-xl-6 col-lg-6 form-group">
						    <label for="">Teléfono-celular/Telephone</label>
						    <input type="text" name="tel" class="form-control" name="nombre" placeholder="Teléfono/Celular">
						 </div>
						 <div class="col-12 col-md-6 col-xl-6 col-lg-6 form-group">
						    <label for="">Correo Electrónico/Email</label>
						    <input type="text" tel="correo" class="form-control" name="nombre" placeholder="Correo Electrónico">
						 </div>
						 <div class="col-12 col-md-6 col-xl-6 col-lg-6 form-group">
						    <label for="">Pais/Contry</label>
						    <input type="text" name="pais" class="form-control" name="nombre" placeholder="Correo Electrónico">
						 </div>
						 <div class="col-12 col-md-6 col-xl-6 col-lg-6 form-group">
						    <label for="">Ciudad/City</label>
						    <input type="text" name="ciudad" class="form-control" name="nombre" placeholder="Correo Electrónico">
						 </div>
						 <div class="col-12 col-md-6 col-xl-6 col-lg-6 form-group">
						    <label for="">Fecha de Nacimeinto/Birthday</label>
						    <input type="text" name="fechanacimiento" class="form-control" name="nombre" placeholder="Correo Electrónico">
						 </div>
						 <div class="col-12">
						 	<p class="text-center">
							<span class="btn btn-primary">
								<?if($Idioma==="es"){
								?>
								Enviar
								<?
							}else{
								?>
								Send
								<?
							}
							?>
							</span>
						</p>
						<p class="text-center">
							<?if($Idioma==="es"){
							?>
							Haga <strong><a target="_blank" href="<?=base_URL('assets/pdf/terminos_condiciones_membershipcard.pdf')?>">clic aquí</a></strong> para nuestros términos y condiciones.
							<?
							}else{
								?>
							<strong><a target="_blank" href="<?=base_URL('assets/pdf/terminos_condiciones_membershipcard.pdf')?>">Click here</a></strong> for our terms and conditions.
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
