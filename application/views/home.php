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

<div class="container-fluid img-hhome"></div>
<div class="container-fluid form-disp ">
	<form id="form_busqueda" method="post" action="<?= base_url('welcome/busqueda_habitacion')?>" class="row form-group">
		<div class="col-12 col-md-3 col-xl-3 col-lg-3 m-t-15 m-b-15 text-center">
			<label for="" class="text-white text-uppercase"><?= $texthome->T1 ?></label>
			<input placeholder="CHECK-IN"  llc="date" autocomplete="off" type="text"  name="checkin"   class="form-control">
		</div>
		<div class="col-12 col-md-3 col-xl-3 col-lg-3 m-t-15 m-b-15 text-center">
			<label for="" class="text-white text-uppercase"><?= $texthome->T2 ?></label>
			<input   placeholder="CHECK-OUT" llc="date"  autocomplete="off" type="text"  name="checkout"  class="form-control">
		</div>
		<div class="col-12 col-md-3 col-xl-3 col-lg-3 m-t-15 m-b-15 text-center">
			<label for="" class="text-white text-uppercase"><?= $texthome->T3 ?></label>
			<select name="adultos" class="form-control">
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
		<div class="col-12 col-md-3 col-xl-3 col-lg-3 m-t-15 m-b-15 text-center">
			<label for="" class="text-white text-uppercase"><?= $texthome->T4 ?></label>
			<select name="ninos" class="form-control">
				<option value="select">Selecciona</option>
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
	
	
		<input type="hidden" value="home" name="dedonde">
		<div class="col-12 m-t-15 m-b-15 text-center">
			<button llc="btn_busqueda" type="submit" class="btn btn-secondary text-uppercase">
				<?= $texthome->T6 ?>
			</button>
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
			$('input[name="checkout"]').val(date.getFullYear()+"-"+mes+"-"+date.getDate())
		}
	})
	
})
	

	
</script>
<div class="container">
	<div class="row  m-t-30 m-b-10">
		<div class="col-12 col-md-7 col-xl-7 col-lg-7 text-blue text-justify ">
			<?= $texthome->T7 ?>

			</div>
			<div class="col-12 col-md-4 col-xl-4 col-lg-4 text-center">
				<img src="<?= base_url()?>/assets/img/Home_Imagen2.jpg" class="img-fluid" alt="Hotel Marques del Angel ">
			</div>
		</div>
	</div>
	<div class="container-fluid sec-valor p-t-30 p-b-30">
		<div class="row text-3 p-l-30 p-r-30 d-flex justify-content-center">
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 ">
				<span><strong><h4 class="text-blue"><?= $texthome->T8 ?></h4></strong></span>
				<p class="text-justify text-blue">
					<?= $texthome->T9 ?>
				</p>
			</div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6">
				<span><strong><h4 class="text-blue"><?= $texthome->T10 ?></h4></strong></span>
				<p class="text-justify text-blue">
					<?= $texthome->T11 ?>
			</div>
			<div class="col-12 col-md-6 col-xl-6 col-lg-6 text-center">
				<span><strong><h4 class="text-blue"><?= $texthome->T12 ?></h4></strong></span>
				<div class="row d-flex justify-content-center">
					<div class="col-6 col-md-5 col-lg-5 col-xl-5 text-left text-blue">
						<ul>
							<? foreach (json_decode($texthome->T13) as $list) {
								?>
								<li><?=$list?> </li>
								<?
							}
							?>
						</ul>
					</div>
					<div class="col-6 col-md-3 col-lg-3 col-xl-3">
						<div class="col-4  text-left text-blue">
							<ul>
							<? foreach (json_decode($texthome->T14) as $list) {
								?>
								<li><?=$list?> </li>
								<?
							}
							?>
						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>