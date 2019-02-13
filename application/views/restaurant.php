<div class="container-fluid fondo-menu">
	<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-0.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-1.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-2.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-3.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-4.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-5.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-6.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-7.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-8.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-9.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-10.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-11.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-12.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-13.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-14.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-15.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-16.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-17.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-18.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-19.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-20.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-21.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-22.jpg)"></div>
			<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-23.jpg)"></div>
		<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-24.jpg)"></div>
		<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-25.jpg)"></div>			
		<div style="background-image:url(<?=base_url()?>assets/img/restaurant/menu-26.jpg)"></div>
		</div>
	</div>
</div>
</div>
<div class="container-fluid banner-menu">
	<div class="row ">
		<? 
		if($Idioma==="es"){
			?>
			<img src="<?= base_URL()?>assets/img/paquetes-desayunos.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
			<?
		}else{
			?>
			<img src="<?= base_URL()?>assets/img/banner_desayunos_ingles.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
			<?
		}
		?>
		
	</div>
</div>
<script type="text/javascript">

function loadApp() {

	// Create the flipbook
	if(screen.width<=760){
		ancho=322;
		alto=200;
	}else{
		ancho=922;
		alto=600
	}

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['<?= base_URL('assets/js/')?>lib/turn.js'],
	nope: ['<?= base_URL('assets/js/')?>lib/turn.html4.min.js'],
	both: ['<?= base_URL('assets/')?>css/basic.css'],
	complete: loadApp
});

</script>