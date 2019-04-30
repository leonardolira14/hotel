<div class="botton_fijo">
<span><a href="<?= base_url('reservacion/').$Idioma?>" class="btn btn-secondary text-2 text-uppercase">
							<small><?= ($Idioma==='es')?'¡Reserva<br><strong>Aqui</strong> !' : 'Reserve <br><strong>Here</strong>' ?></small>
	</a></span>
</div>
<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/mini-banner-meeting&events.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center titulos-habitaciones">
			<h2>EVENTS & MEETINGS</h2>
		</div>
		<div class="col-8 col-md-3 col-lg-3 col-xl-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="container">
	<div class="row d-flex justify-content-center m-t-50 m-b-50">
		<div class="col-12 col-md-10 col-lg-10 col-xl-10 text-justify text-blue text-font-1-5">
			<?if($Idioma==="es"){
			?>
			Los eventos en el <strong>Hotel Boutique Marqués del Ángel</strong> son una <strong>experiencia única y de elegancia</strong>, ofreciendo una gran variedad de sus áreas para <strong>eventos sociales y empresariales</strong>. 
				<br>
				<br>
			Desde un <strong>salón privado</strong> con capacidad de 10 personas, hasta nuestro <strong>salón principal</strong> para 100 personas. Ofreciendo <strong>menús personalizados y especializados</strong>, montajes y decoración para banquetes, hermosas mesas de dulces, servicios de SPA, habitaciones para los novios y sus familiares, así como <strong>tarifas especiales para invitados</strong>. 
			<?
			}else{
				?>
				The events at the Hotel Boutique Marques del Angel <strong>are a unique and elegant experience</strong>, offering a wide variety of areas for <strong>social and business events</strong>. 
<br>
				<br>
				From a <strong>private room</strong> with a 10 people capacity, to our <strong>main room</strong> for 100 people. Offering personalized and specialized menus, assemblies and decoration for banquets, beautiful candy tables, SPA services, rooms for the couple and their families, as well as <strong>special rates for guests</strong>.

				<?
			}
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-12 col-md-10 col-lg-10 col-xl-10 m-b-20">
			<div id="carouselExampleControlsg2" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>meetingsevents/imagenes-meeting-1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>meetingsevents/imagenes-meeting-2.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>meetingsevents/imagenes-meeting-3.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>meetingsevents/imagenes-meeting-4.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>meetingsevents/imagenes-meeting-5.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>meetingsevents/imagenes-meeting-6.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>meetingsevents/imagenes-meeting-7.jpg" alt="First slide">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row d-flex justify-content-center m-b-20">
		<div class="col-5 text-right">
			<div class="btn btn-link btn-prevg2">
				<img src="<?= base_URL()?>assets/img/flecha_izquierda.svg" class="iconos4 ">
			</div>

		</div>
		<div class="col-5  text-left ">
			<div class="btn btn-link btn-nextg2">
				<img src="<?= base_URL()?>assets/img/flecha_derecha-01.svg" class="iconos4 ">
			</div>
		</div>
		<a href="<?= base_URL()?>cotizador/<?= $Idioma?>" class="col-12 col-md-4 col-lg-4 col-xl-4 btn btn-secondary m-t-40 text-blue">
			<?if($Idioma==="es"){
			?>
				<h3>¡Cotiza con nosotros!<br>AQUÍ</h3>
			<?
			}else{
				?>
				<h3>More Information <br>CLICK HERE</h3>
				<?
			}
			?>
		</a>
	</div>
</div>
<script>

	$(document).ready(function(){
		$(".btn-prev").on("click",function(){
			$('#carouselExampleControls').carousel("prev");
		})
		$(".btn-next").on("click",function(){
			$('#carouselExampleControls').carousel("next");
		})
		$(".btn-prevg2").on("click",function(){
			$('#carouselExampleControlsg2').carousel("prev");
		})
		$(".btn-nextg2").on("click",function(){
			$('#carouselExampleControlsg2').carousel("next");
		})
		
	})
</script>