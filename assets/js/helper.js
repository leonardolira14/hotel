class Help{
	
	constructor(){
		//this.urls="https://hotelmarquesdelangel.com/";
	//this.urls='http://localhost/hotel/';
	this.urls="https://agenciapegasus.com.mx/hotel/";
	}
	izziFrame(e){
	$(e).addClass("iziModal").iziModal({
		title:$(e).attr("title") || $(e).data("title") || 'Mensaje de Admyo',
		headerColor: $(e).data("header-color") || '#005d8f',
		width: $(e).data("width") || 600 ,
		fullscreen: $(e).data("fullscreen") || false,
		transitionIn: 'comingIn',
		transitionOut: 'comingOut',
		timeout: $(e).data("timeclose") || false,
		timeoutProgressbar: $(e).data("bar") || false,
		closeOnEscape:$(e).attr("closekey") || $(e).data("closekey")|| true,
		closeButton: $(e).attr("closebtn") ||$(e).data("closebtn") || true,
		overlayClose:$(e).attr("over") || $(e).data("over") || true,
		
		
		})
	}
	senddata(url,data,callback){
		var rpt=JSON.stringify(data);
		
		$.post(this.urls+url,{datos:rpt},function(resp){
			callback(JSON.parse(resp));
		})
	}
	sendform(url,form,callback){
		console.log($(form).serialize());
		$.post(this.urls+url,$(form).serialize(),function(resp){
			callback(JSON.parse(resp));
		})
	}
	togglemenu(){
		$(".menu-movil-slider").toggle("linear");
	}
	goto(idioma){
		location.href=this.urls+"confirmarreservacion/"+idioma;
	}
}
class Home extends Help {
	Constructor(){
		super.constructor();
		
	}
	enviocotiza(){
		let form=$("form#cotizador");
		let url=form.attr("url");
		super.sendform(url,form,function(resp){
			if(resp.pass==="0"){
			toastr.error(resp.mensaje, 'Error!')
			}else{
				toastr.success("Mensaje Enviado", 'Exito!');
				form.trigger("reset");
			}
		})
	}
	envioexperi(){
		let form=$("form#experiencias");
		let url=form.attr("url");
		super.sendform(url,form,function(resp){
			console.log(resp);
			if(resp.pass===0){
			toastr.error(resp.mensaje, 'Error!')
			}else{
				toastr.success("Mensaje Enviado", 'Exito!');
				form.trigger("reset");
			}
		})
	}
	
}
let home=new Home();
$(function(){
	$(".izimodal").each(function(i,e){
            home.izziFrame(e);
    });
    
  
})
//enventos en los botones
$(document).on("click","form#cotizador div[llc='envi']",function(){
	home.enviocotiza();
});
$(document).on("click","form#experiencias span[llc='envi']",function(){
	home.envioexperi();
});
$(document).on("click",".btn-menu",function(){
	home.togglemenu()
})
$(document).on('click','.btn-close-menu',function(){
	home.togglemenu()
})
$(document).on("click",'strong[llc="detalles_habitacion"]',function(){
	$("#"+$(this).attr("llk")).iziModal("open");
})
$(document).on("click",'button[llc="addcart"]',function(){
	var idioma=$(this).attr("idioma");
	home.senddata('addcar',$(this).attr("lli"),function(res){
		if(res["pass"]===0){
		toastr.danger(res["error"], 'Error!');
		}else{
			toastr.success(res["mensaje"], 'Exito!');
			home.goto(idioma)
		}
	})
})
$(document).on("click",'button[llc="deleteroom"]',function(){
	home.senddata('deleteroom',$(this).attr("lli"),(res)=>{
		if(res["pass"]===1){
			toastr.success(res["mensaje"], 'Exito!');
			location.reload();
		}else{
			toastr.danger(res["mensaje"], 'Error!');
		}
		

	})
})
function resnoches(fecha1,fecha2){


	var fecha1 = moment(fecha1);
	var fecha2 = moment(fecha2);
	var noches=0;
	noches= fecha2.diff(fecha1, 'days');
	if(noches<=0){
		noches=0;
	}
	$("input[name='noches']").val(noches);

}

