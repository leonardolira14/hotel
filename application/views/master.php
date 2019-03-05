
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!--inicion de style--->
	<meta content="Hotel Marques del Angel, Puebla, Mexico Official Web Page - Book Direct and Save More !" property="og:title">
	<meta content="https://hotelmarquesdelangel.com" property="og:url">

	<meta content="Hotel Marques del Angel, Puebla, Mexico Official Web Page - Book Direct and Save More !" property="og:site_name">
	<meta content="Hotel Marques del Angel, Hotel Marques del Angel Ideal para estancias de placer o de negocios; ubicado en el corazón del Centro Histórico" property="og:description">
	<meta content="Hotel Marques del Angel, Puebla, Mexico Official Web Page - Book Direct and Save More !" itemprop="name">
	<meta content="Hotel Marques del Angel Puebla, Hotel Senorial Ideal para estancias de placer o de negocios; ubicado en el corazón del Centro Histórico." itemprop="description">
	<meta content="Hotel Marques del Angel Puebla, Hotel Senorial Ideal para estancias de placer o de negocios; ubicado en el corazón del Centro Histórico." name="description">

	<link rel="canonical" href="https://hotelmarquesdelangel.com/">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/general.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/datedropper.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/iziModal.min.css">
	<link href="<?= base_URL()?>assets/css/datepicker.min.css" rel="stylesheet" type="text/css">
	<!---fin de style--->
	<!--inicion de scripts--->
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="<?= base_url() ?>assets/js/modernizr.2.5.3.min.js"></script>
	<script src="<?= base_url() ?>lib/turn.js"></script>
	<script src="<?= base_url() ?>assets/js/basic.js"></script>
	<script src="<?= base_url() ?>assets/js/helper-dist.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="<?= base_url('assets/js/iziModal.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/moment.min.js')?>"></script>
	<script src="<?= base_url() ?>assets/js/datepicker.min.js"></script>
	<script src="<?= base_URL() ?>assets/js/i18n/datepicker.es.js"></script>
	<script>
		$(document).on("change","select[name='idiom']",function(){
			if($(this).val()!=="es"){
				location.href="<?=base_url('home/en')?>"
			}else{	
				location.href="<?=base_url('/')?>"
			}
		})
	</script>
	<!---fin de scripts-->
</head>
<body>
	<div class="container-fluid psa">
		<div class="row d-flex align-items-center">
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 text-2 p-l-25">
				<?= $textohead->T1?>
			</div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 ">
				<div class="row d-flex justify-content-end">
					<div class="col-3 text-right form-group">
						<select name="idiom" id="" class="form-control btnse-spa">
							<? if($Idioma==="es"){
								?>
								<option selected value="es">SPA</option>
								<option value="en">ENG</option>
								<?
							}else{
								?>
								<option value="es">SPA</option>
								<option selected value="en">ENG</option>
								<?
							}?>
							
						</select>
					</div>
					<div class="col-6 ">
						<a href="<?= base_url('reservacion/').$Idioma?>" class="btn btn-secondary text-2 text-uppercase">
							<small><?= $textohead->T2?></small>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid p-t-20 list-menudsk p-b-20 menu-web">
		<div class="row d-flex align-items-center">
			<div class="col-2 text-center">
				<?if($Idioma=='es'){
					?>
					<a href="<?= base_url('/');?>">
						<?
					}else{
						?>
						<a href="<?= base_url('home/en');?>">
							<?	
						}
						?>
						<img src="<?= base_url()?>/assets/img/Logo_Marques.svg" class="img-fluid" alt="Hotel Marquez del Angel"></a>
			</div>
					<div class="col-10">
						<div class="row">
							<div class="col-1 text-center">
								<?if($Idioma=='es'){
									?>
									<a href="<?= base_url('/');?>">
										<?
									}else{
										?>
										<a href="<?= base_url('home/en');?>">
											<?	
										}
										?><?= $textohead->T3?></a></div>
										<div class="col-1 text-center"><a href="<?= base_url('suites/').$Idioma?>"><?= $textohead->T4?></a></div>
										<div class="col-2 text-center"><a href="<?= base_url('servicios/').$Idioma?>"><?= $textohead->T5?></a></div>
										<div class="col-2 text-center"><a href="<?= base_url('eventos/').$Idioma?>"><?= $textohead->T6?></a></div>
										<div class="col-3 text-center"><a href="<?= base_url('experiencias/').$Idioma?>"><?= $textohead->T7?></a></div>
										<div class="col-1 text-center"><a href="<?= base_url('reservacion/').$Idioma?>"><?= $textohead->T8?></a></div>
										<div class="col-2 text-center"><a href="<?= base_url('contacto/').$Idioma?>"><?= $textohead->T9?></a></div>
									</div>
								</div>

							</div>
	</div>
<div class="container-fluid menu-movil">
	<div class="row d-flex align-items-center">
		<div class="col-6 btn-menu">
			<img src="<?= base_url('/assets/img/icons/');?>bars-solid.svg" class="img-fluid iconos">
		</div>
		<div class="col-6 tex-center p-t-10 m-b-10">
			<?if($Idioma=='es'){
					?>
			<a href="<?= base_url('/');?>">
						<?
				}else{
					?>
			<a href="<?= base_url('home/en');?>">
				<?	
				}
				?>
				<img src="<?= base_url()?>/assets/img/Logo_Marques.svg" class="img-fluid" alt="Hotel Marquez del Angel">
			</a>
		</div>
	</div>
</div>

<div class="menu-movil-slider">
	<div class="container-fluid head-menu">
		<div class="row">
			<div class="col-10">
				<h3>Menú</h3>
			</div>
			<div class="col-2 btn-close-menu">
				X
			</div>
		</div>
	</div>
	<ul>
		<li><?if($Idioma=='es'){
									?>
									<a href="<?= base_url('/');?>">
										<?
									}else{
										?>
										<a href="<?= base_url('home/en');?>">
											<?	
										}
										?><?= $textohead->T3?></a></li>
		<li><a href="<?= base_url('suites/').$Idioma?>"><?= $textohead->T4?></a></li>
		<li><a href="<?= base_url('servicios/').$Idioma?>"><?= $textohead->T5?></a></li>
		<li><a href="<?= base_url('eventos/').$Idioma?>"><?= $textohead->T6?></a></li>
		<li><a href="<?= base_url('experiencias/').$Idioma?>"><?= $textohead->T7?></a></li>
		<li><a href="<?= base_url('reservacion/').$Idioma?>"><?= $textohead->T8?></a></li>
		<li><a href="<?= base_url('contacto/').$Idioma?>"><?= $textohead->T9?></a></li>
	</ul>
	
</div>