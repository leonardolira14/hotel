<div class="botton_fijo">
<span><a href="<?= base_url('reservacion/').$Idioma?>" class="btn btn-secondary text-2 text-uppercase">
							<small><?= ($Idioma==='es')?'Reserva Aquí !' : 'Reserve here' ?></small>
	</a></span>
</div>
<div class="container-fluid banner-sup">
	<div class="row ">
		<img src="<?= base_URL()?>assets/img/banner-contacto.jpg" alt="Marques del Angel habitacion clasica" class="img-fluid">
	</div>
</div>
<div class="container-fluid">
	<div class="row d-flex justify-content-center m-t-70">
		<div class="col-12 text-center titulos-habitaciones">
            <?
            if($Idioma==="es"){
            ?>
			<h2>Contacto</h2>
            <?php 
        }else
        {
            ?>
                <h2>Contact Us</h2>
            <?
        }
             ?>
		</div>
		<div class="col-8 col-md-3 col-lg-3 col-xl-3">
			<img src="<?= base_URL()?>assets/img/ornamento_habitaciones-dorado.svg" class="img-fluid" alt="">
		</div>
	</div>
</div>
<div class="container-fluid google-maps m-t-70">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4382976459547!2d-98.20413618509927!3d19.04445758710602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc0ddabaefc6d%3A0x591aad2a8a93b2bf!2sAv+5+Pte+332%2C+Centro%2C+72000+Puebla%2C+Pue.!5e0!3m2!1ses!2smx!4v1539711841969" width="300" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<style>
    .google-maps {
    position: relative;
    padding-bottom: 45%;
    height: 300px;
    overflow: hidden;
    }
    .google-maps iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    }
    </style>
