<?
$lista=json_decode($listarooms->Habitaciones);
$clasica=explode(" ",$lista[0]);
$junior=explode(" ",$lista[1]);
$familiar=explode(" ",$lista[2]);
$imperial=explode(" ",$lista[3]);
$marques=explode(" ",$lista[4]);
?>
<div class="container-fluid cont-1suites">
		<div class="row cont-suites">
			<a href="<?= base_URL('clasica/').$Idioma?>" class="cont-img">
				<figure style="background-image: url('<?= base_url()?>assets/img/clasica.jpg');height: 100% ">
				</figure>
				<label class="text-habita container">
					<div class="row">
						<div class="col-12"><span><?= $clasica[0]?> <br> <?= $clasica[1]?> </span></div>
						<div class="col-12">
							<img class="img-fluid" src="<?= base_URL()?>assets/img/ornamento_habitaciones-01.svg" alt="">
						</div>
					</div>	
				</label>
			</a>
			<a class="cont-img" href="<?= base_URL('junior/').$Idioma?>">
				<figure style="background-image: url('<?= base_url()?>assets/img/junior.jpg');height: 100% ">
				</figure>
				<label class="text-habita container">
					<div class="row">
						<div class="col-12"><span><?= $junior[0]?><br> <?= $junior[1]?> </span></div>
						<div class="col-12">
							<img class="img-fluid" src="<?= base_URL()?>assets/img/ornamento_habitaciones-01.svg" alt="">
						</div>
					</div>	
				</label>
			</a>
			<a class="cont-img" href="<?= base_URL('familiar/').$Idioma?>">
				<figure style="background-image: url('<?= base_url()?>assets/img/familiar.jpg');height: 100% ">
				</figure>
				<label class="text-habita container">
					<div class="row">
						<div class="col-12"><span><?= $familiar[0]?> <br> <?= $familiar[1]?> </span></div>
						<div class="col-12">
							<img class="img-fluid" src="<?= base_URL()?>assets/img/ornamento_habitaciones-01.svg" alt="">
						</div>
					</div>	
				</label>
			</a>
			<a class="cont-img" href="<?= base_URL('imperial/').$Idioma?>">
				<figure style="background-image: url('<?= base_url()?>assets/img/imperial.jpg');height: 100% ">
				</figure>
				<label class="text-habita container">
					<div class="row">
						<div class="col-12"><span><?= $imperial[0]?> <br><?= $imperial[1]?> </span></div>
						<div class="col-12">
							<img class="img-fluid" src="<?= base_URL()?>assets/img/ornamento_habitaciones-01.svg" alt="">
						</div>
					</div>	
				</label>
			</a>
			<a class="cont-img" href="<?= base_URL('marques/').$Idioma?>">
				<figure style="background-image: url('<?= base_url()?>assets/img/marques.jpg');height: 100% ">
				</figure>
				<label class="text-habita container">
					<div class="row">
						<div class="col-12"><span><?= $marques[0]?> <br> <?= $marques[1]?> </span></div>
						<div class="col-12">
							<img class="img-fluid" src="<?= base_URL()?>assets/img/ornamento_habitaciones-01.svg" alt="">
						</div>
					</div>	
				</label>
			</a>
		</div>

</div>
<div class="ray-dor" style="height: 10px"></div>
<script>
	$(document).ready(function(){
		$(".cont-img").on({
			mouseenter: function() {
		    	$("a.cont-img").addClass( "aut" );
		    	$( this ).removeClass( "aut" ).addClass( "hover" );
			},mouseleave: function() {
		  		$("a.cont-img").removeClass( "aut" );
		    	$( this ).removeClass( "hover" );
			}
		})
	})
</script>