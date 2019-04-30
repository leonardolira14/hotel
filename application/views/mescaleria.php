<div class="botton_fijo">
<span><a href="<?= base_url('reservacion/').$Idioma?>" class="btn btn-secondary text-2 text-uppercase">
							<small><?= ($Idioma==='es')?'Reserva Aquí !' : 'Reserve here' ?></small>
	</a></span>
</div>
<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/mini-banner-mezcaleria.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center titulos-habitaciones">
			<?if($Idioma==="es"){
			?>
			<h2>Mezcalería & Cava del Marqués</h2>
			<?
		}else{
			?>
				<h2>Marques Mezcalería & Wine Cellar</h2>

			<?
		}
			?>
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
			Una herencia de los españoles durante la conquista <strong>fue el vino</strong>, en el Marqués podrás degustar en un ambiente perfecto <strong> uno de nuestros vinos de la cava del Hotel</strong>. Sin embargo, otra herencia que nos dejan los propios nativos de México fue <strong>el Mezcal</strong>.  Contamos con diferentes mezcales de denominación poblana, para que los puedas degustar en compañía de tus amigos o familia.
			<?php 
			}else{
				?>
				A legacy of the <strong>Spanish people</strong> during the conquest was <strong>the wine</strong>. In the Marques you can taste in a perfect atmosphere one of our wines from the Hotel's cellar. In other hand, the inheritance left by the natives of <strong>Mexico</strong> was <strong>the Mezcal</strong>. We have different mezcales <strong>wich were made in Puebla</strong>, so you can taste them in the company of your friends or family.
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
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>mezcaleria/mezcaleria1.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>mezcaleria/mezcaleria2.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>mezcaleria/mezcaleria3.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>mezcaleria/mezcaleria4.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>mezcaleria/mezcaleria5.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>mezcaleria/mezcaleria6.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?= base_URL('assets/img/')?>mezcaleria/mezcaleria7.png" alt="First slide">
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
		<div class="col-5 text-left ">
			<div class="btn btn-link btn-nextg2">
				<img src="<?= base_URL()?>assets/img/flecha_derecha-01.svg" class="iconos4 ">
			</div>
		</div>
		
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